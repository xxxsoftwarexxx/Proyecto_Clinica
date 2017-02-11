<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sancion;
use App\User;
use PDF;
class PDFControllerSancion extends Controller
{
  public  function PDFSancion()
  {
    $sanciones=sancion::all();
    $pdf=\PDF::loadView('pdfAministrador.vistaSancion',['sanciones'=>$sanciones]);
    return $pdf->stream('archivoSancion.pdf');
  }
}
