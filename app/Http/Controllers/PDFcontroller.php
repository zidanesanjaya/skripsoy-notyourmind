<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use PDF;

class PDFcontroller extends Controller
{
    // Rapor Semester
    public function PDFRaporSemester() {
        $pdfrs = PDF::loadView('rapor.raporDownloadAll');
        $pdfrs->setPaper('A4', 'potrait');
        return $pdfrs->stream('rapors.pdf');
    }
    
    // Rapor Pancasila
    public function PDFRaporPancasila() {
        $pdfrp = PDF::loadView('rapor.pancasila');
        $pdfrp->setPaper('A4', 'potrait');
        return $pdfrp->stream('raporp.pdf');
    }
}
