<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class InicioController extends Controller
{
  public $ruta='inicio';

  public function index(){
    $especialidades = DB::table('especialidades')->get();

    if(Auth::guest()){
      return view($this->ruta,['user_name'=>'','especialidades'=>$especialidades]);


    }else{
        $var=DB::table('users')->where('dni', Auth::user()->dni)->first();
        if($var->tipo=='Medico'){
          $var=DB::table('medicos')->where('dni', Auth::user()->dni)->first();
          $var2='Medico: '.$var->nombres." ".$var->apellidos;
          return view($this->ruta,['user_name'=>$var2,'especialidades'=>$especialidades]);
        }else{
        if($var->tipo=='Paciente'){
          $var=DB::table('pacientes')->where('dni', Auth::user()->dni)->first();
          $var2='Paciente: '.$var->nombres." ".$var->apellidos;
          return view($this->ruta,['user_name'=>$var2,'Datos_Paciente'=>$var,'especialidades'=>$especialidades]);
        }else{
          $var2=$var->dni;
          return view($this->ruta,['user_name'=>$var2,'especialidades'=>$especialidades]);
        }
      }
	  }
  }
  public function abaut(){
    $this->ruta='about';
    return $this->index();
  }
  public function config(){
    $this->ruta='configuracion';
    return $this->index();
  }
  public function contact(){
    $this->ruta='contact';
    return $this->index();
  }
  public function  gallery(){
    $this->ruta='gallery';
    return $this->index();
  }
}
