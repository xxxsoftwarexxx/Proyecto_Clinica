<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use Carbon;

class CitasMedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $t = DB::table('medicos')->get();
      return view('citas_medico.escogerMedico',['t' => $t]);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //public $tabla='medicos';
     //public $tabla1='especialidades';
    public function edit($id)
    {
      $mytime = Carbon\Carbon::now();
      echo $mytime->toDateTimeString();
      $tabla = DB::table('bloques')
            ->join('citas', 'bloques.idbloques', '=', 'citas.bloques_idbloques')
            ->select('bloques.dia','bloques.medicos_dni', 'bloques.hora_inicio','citas.fecha_cita','citas.estado', 'citas.pacientes_dni','citas.id')
            //->where('citas.fecha_cita',$mytime)
            ->get();

      //$t = DB::table('bloques')->where('medicos_dni',$id)->get();
      return view('citas_medico.citasMedico',['tablas' => $tabla]);
    }


    public function sancionar($id){
      $tabla = DB::table('citas')
      ->where('citas.id',$id)
      ->first();
      return view('citas_medico.sancionar',['tablas' => $tabla]);
    }
    public function enlistar($id){

      $tabla = DB::table('historial_medico')
      ->where('pacientes_dni',$id)
      ->get();
      return view('citas_medico.enlistar',['tablas' => $tabla]);
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
