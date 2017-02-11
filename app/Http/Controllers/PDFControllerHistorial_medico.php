<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\historial_medico;
use App\User;
use PDF;
class PDFControllerHistorial_medico extends Controller
{
  public  function PDFHistorialmedico()
  {
    $historial_medicos=historial_medico::all();
    $pdf=\PDF::loadView('pdfAministrador.vistahistorial_medico',['historial_medicos'=>$historial_medicos]);
    return $pdf->stream('archivo_historial_medico.pdf');
  }
}
