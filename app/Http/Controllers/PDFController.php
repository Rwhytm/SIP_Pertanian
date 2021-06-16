<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Invoice Incubator Pertanian'];
        $pdf = PDF::loadView(route('invoice'), $data);
  
        return $pdf->download('Invoice.pdf');
    }
}
