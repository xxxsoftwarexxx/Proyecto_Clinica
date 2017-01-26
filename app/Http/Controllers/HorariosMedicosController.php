<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class HorariosMedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public $item_id='idbloques';
     public $item=[
      'idbloques',
      'hora_inicio',
      'dia',
      'medicos_dni',
      'estado'
    ];

    public $tabla='bloques';

    public function index()
    {
      $t = DB::table('medicos')->get();
      return view('horarios_medico.escogerMedico',['t' => $t]);
    }


    public function resaltar($idbloque,$medDNI)
    {
        $t = DB::table($this->tabla)->where($this->item_id,$idbloque)->get();
        foreach($t as $ts){
        	$est = $ts->estado;
        }

        if($est==0){
        $est = '1';
        }else{
          $est = '0';
        }

        DB::table($this->tabla)->where($this->item_id,$idbloque)
          ->update(['estado'=>$est, 'medicos_dni'=>$medDNI]);

        $url='medhorarios/'.$medDNI.'/edit';
        return redirect($url);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $t = DB::table('medicos')->where('dni',$id)->get();
      foreach($t as $ts){
        $especialidad = $ts->especialidades_codigo;
      }

      $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
      $fecha =date('Y-m-j');
      $estado=[];
      for($i=0;$i<7;$i++){
        $estado[$i]=DB::select("SELECT B.idbloques as'idbloques',
                                       B.hora_inicio as 'Horainicio',
                                       B.estado as 'estado',
                                       B.medicos_dni as 'dnimed'   FROM `bloques` B,`medicos` M WHERE B.medicos_dni=M.dni AND M.especialidades_codigo=? and B.dia=? ORDER BY hora_inicio",[$especialidad, $dias[$i]]);
      }

      $res=[];
      for($i=0;$i<7;$i++){
        $aux=$estado[$i];
        for($j=0;$j<24;$j++){
          $res[$i.'-'.$j]=$aux[$j];
        }
      }

      return view('horarios_medico.horario',['estado'=>$estado,'dias'=>$dias, 'res'=>$res, 'dni'=>$id, 'especialidad'=>$especialidad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
