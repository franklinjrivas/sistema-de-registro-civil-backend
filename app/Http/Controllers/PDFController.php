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

    public function buildPDF( $tipo_pdf, $identificador) {
        try {
            $base64 = $this->pdfService->formatos( $tipo_pdf, $identificador);
            return response()->json([
                'success' => true,
                'mensaje' => 'PDF Generado Correctamente',
                'pdf_base64' => $base64
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }

}
