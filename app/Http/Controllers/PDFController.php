<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\Keranjang;
class PDFController extends Controller
{
    public function generatePDF()
    {
        
        $pdf = PDF::loadView('welcome');
        // dd($pdf);
        // return view('welcome');
        return $pdf->download('itsolutionstuff.pdf');
    }
}
