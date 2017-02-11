<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitasMedicosController extends Controller
{

    public function index()
    {
        $t = DB::table('medicos')->get();
        return view('citas_medico.escogerMedico', ['t' => $t]);
    }

    public function siguiente($id)
    {
        $cita = DB::table('citas')
            ->where('id', $id)
            ->first();
        $idcita = $cita->id;

        $historial = DB::table('historial_medico')
            ->where('pacientes_dni', $cita->pacientes_dni)
            ->first();
        $idhistorial      = $historial->id_historial_medico;
        $historialdetalle = DB::select(" SELECT * from historial_medico_detalle H, citas C WHERE H.id_historial=? and H.id_cita=C.id ORDER BY C.fecha_cita DESC LIMIT 1",
            [$idhistorial]);
        return view('citas_medico.detalle_citas', ['idcita' => $idcita, 'idhistorial' => $idhistorial, 'historial_ultimo' => $historialdetalle]);
    }

    public function mostrar($id)
    {
        setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');
        date_default_timezone_set("America/Lima");
        $fecha = date('Y-m-d');
        $hora  = date('G');
        $tabla = DB::select("SELECT B.idbloques, B.hora_inicio, C.id,C.estado, P.dni, P.nombres, P.apellidos, P.tipo_paciente FROM `bloques` B,`citas` C, `pacientes` P
        WHERE B.medicos_dni=?
        AND B.idbloques=C.bloques_idbloques
        AND C.fecha_cita=?
        AND C.pacientes_dni=P.dni
        AND B.hora_inicio>=? ORDER BY B.hora_inicio",
            [$id, $fecha, $hora]);
        return view('citas_medico.citasMedico', ['tablas' => $tabla]);
    }

    public function mostrarAtendidos($id)
    {
        setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');
        date_default_timezone_set("America/Lima");
        $fecha = date('Y-m-d');
        $tabla = DB::select("SELECT B.idbloques, B.hora_inicio, C.id,C.estado, P.dni, P.nombres, P.apellidos, P.tipo_paciente FROM `bloques` B,`citas` C, `pacientes` P
        WHERE B.medicos_dni=?
        AND C.estado='atendido'
        AND B.idbloques=C.bloques_idbloques
        AND C.fecha_cita=?
        AND C.pacientes_dni=P.dni
        ORDER BY B.hora_inicio",
            [$id, $fecha]);
        return view('citas_medico.citasAtendidas', ['tablas' => $tabla]);
    }

    public function sancionar($id)
    {
        $tipo  = DB::table('tipo_sancion')->get();
        $tabla = DB::table('citas')
            ->where('id', $id)
            ->first();
        return view('citas_medico.sancionar', ['tablas' => $tabla, 'tablas2' => $tipo]);
    }
    public function historial($id)
    {

        $tablaHistorial = DB::table('historial_medico')
            ->where('pacientes_dni', $id)
            ->first();
        $tablaPaciente = DB::table('pacientes')
            ->where('dni', $id)
            ->first();
        if ($tablaHistorial == null) {
            return redirect('/home/');
        } else {
            $id_historial          = $tablaHistorial->id_historial_medico;
            $tablaHistorialDetalle = DB::select("SELECT *
                        FROM `historial_medico_detalle` H,`citas` C
                        WHERE H.id_cita=C.id
                        AND H.id_historial=? ORDER BY C.fecha_cita",
                [$id_historial]);
            return view('citas_medico.historial',
                ['tablas' => $tablaHistorialDetalle, 'detalle' => $tablaHistorial, 'pacientes' => $tablaPaciente]);
        }
    }

    public function guardar(Request $request)
    {
        $id        = $request->input('ID');
        $id2       = $request->input('Id_tipo_sancion');
        $fecha     = $request->input('Duracion');
        $valorDate = DB::table('citas')
            ->where('id', $id)
            ->first();
        $fecha2 = date('Y-m-d', strtotime($valorDate->fecha_cita . " + " . $fecha . " days"));

        DB::table('sancion')->insert([
            'id_cita'         => $id,
            'id_tipo_sancion' => $id2,
            'fecha_sancion'   => $fecha2,
        ]);

        $aux = $tabla = DB::select("SELECT * FROM `bloques` B,`citas` C WHERE B.idbloques=C.bloques_idbloques AND C.id=?", [$id]);
        foreach ($aux as $auxU) {
            $idMedico = $auxU->medicos_dni;
        }
        DB::table('citas')->where('id', $id)->update(['estado' => 'sancionado']);
        $url = '/medcitas/' . $idMedico . '/';
        return redirect($url);
    }

    public function Save(Request $request, $idcita, $idhistorial)
    {
        $id_historial_medico = $request->input('ID');
        $estatura            = $request->input('Estatura');
        $peso                = $request->input('Peso');
        $presion             = $request->input('Presion');
        $descripcion         = $request->input('Descripcion');

        DB::table('historial_medico_detalle')->insert([
            'id_historial_medico' => $id_historial_medico,
            'estatura'            => $estatura,
            'peso'                => $peso,
            'presion'             => $presion,
            'descripcion'         => $descripcion,
            'id_cita'             => $idcita,
            'id_historial'        => $idhistorial,

        ]);
        $aux = $tabla = DB::select("SELECT * FROM `bloques` B,`citas` C WHERE B.idbloques=C.bloques_idbloques AND C.id=?", [$idcita]);
        foreach ($aux as $auxU) {
            $idMedico = $auxU->medicos_dni;
        }
        DB::table('citas')->where('id', $idcita)->update(['estado' => 'atendido']);
        $url = '/medcitas/' . $idMedico . '/';
        return redirect($url);

    }
}
