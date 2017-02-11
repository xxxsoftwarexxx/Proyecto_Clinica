<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pacientes;
use App\User;
use PDF;
class PDFControllerPacientes extends Controller
{
  public  function PDFPaciente()
  {
    $pacientes=pacientes::all();
    $pdf=\PDF::loadView('pdfAministrador.vistapacientes',['pacientes'=>$pacientes]);
    return $pdf->stream('archivo_pacientes.pdf');
  }
}
