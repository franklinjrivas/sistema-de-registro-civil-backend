<?php

namespace App\Http\Controllers;

use App\Services\PDFService;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    protected $pdfService;

    public function __construct(PDFService $pdfService)
    {
        $this->pdfService = $pdfService;
    }

    public function buildPDF( $tipo_pdf, $identificador)
    {
        $base64 = $this->pdfService->formatos( $tipo_pdf, $identificador);
        if (!isset($base64) || empty($base64)) validationError('El servicio no trae información ...');

        return response()->json([
            'success' => true,
            'mensaje' => 'PDF Generado Correctamente',
            'pdf_base64' => $base64
        ]);
    }

}
