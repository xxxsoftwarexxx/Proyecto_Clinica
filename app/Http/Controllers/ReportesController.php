<?php

namespace App\Http\Controllers;

class ReportesController extends Controller
{
    public function medico()
    {
        return view('Reportes.reportes_medico');
    }

}
