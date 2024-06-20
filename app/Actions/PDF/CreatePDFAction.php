<?php

namespace App\Actions\PDF;

use PDF;

class CreatePDFAction
{
    private $pdf;

    public function generatePDF( $data)
    {
        $generate = app('dompdf.wrapper');
        $generate->loadView('pdfTemplate', $data);
        $this->pdf = $generate->download('Resume.pdf');

        return $this->pdf;
    }
}
