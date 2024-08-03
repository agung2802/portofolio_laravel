<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use Barryvdh\DomPDF\Facade\Pdf;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ExportController extends Controller
{
    public function index()
    {

        return view('export.index');
    }

    public function generatePdf()
    {
        $pdf = PDF::loadView('export.template');
        return $pdf->download('document.pdf');
    }
}
