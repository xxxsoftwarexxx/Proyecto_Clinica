<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class SancionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sanciones = DB::table('sancion')->get();
      return view('sanciones.index',['sanciones'=>$sanciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $t1 = DB::table('citas')->get();
        return view('sanciones.create',['citas'=>$t1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $id_sancion = $request->input('id_sancion');
      $id_cita = $request->input('id_cita');
      $fecha_sancion = $request->input('fecha_sancion');

      DB::table('sancion')->insert([
        'id_sancion'=> $id_sancion,
        'id_cita'=> $id_cita,
        'fecha_sancion'=>$fecha_sancion,
      ]);

      return redirect('sanciones');
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
      $sanciones = DB::table('sancion')->where('id_sancion',$id)->first();
      return view('sanciones.edit',['sanciones'=>$sanciones]);
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
      $fecha_sancion= $request->input('fecha_sancion');

      DB::table('sancion')->where('id_sancion',$id)
        ->update([
      'fecha_sancion'=>$fecha_sancion,
      ]);

      return redirect('sanciones');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('sanciones')->where('id',$id)->delete();
    return redirect('sanciones');
    }
}
