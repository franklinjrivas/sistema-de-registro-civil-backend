<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;



class PDFService
{

    private $pantillasPDF;

    public function __construct()
    {
        $this->pantillasPDF = 'plantillas-pdf.';
    }

    public function formatos($tipo_pdf, $identificador, $output_base64 = true, $output_stream = false)
    {

        $detalle_partida = DB::select(
            'EXEC dbo.regcivil_detalle_partida_matrimonial ?',
            [$identificador]
        );
        $data = [
            'data' => $detalle_partida[0]
        ];

        switch ($tipo_pdf) {
            case '1':
                if ($output_base64) {
                    $pdf = PDF::loadView($this->pantillasPDF . 'solicitud-matrimonial', $data)->setPaper('a4');
                    $content = $pdf->output();
                    $base64 = base64_encode($content);
                    return $base64;
                }
                break;
            case '2':
                if ($output_base64) {
                    $pdf = PDF::loadView($this->pantillasPDF . 'edicto-matrimonial', $data)->setPaper('a4');
                    $content = $pdf->output();
                    $base64 = base64_encode($content);
                    return $base64;
                }
                break;
            case '3':
                if ($output_base64) {
                    $pdf = PDF::loadView($this->pantillasPDF . 'informe', $data)->setPaper('a4');
                    $content = $pdf->output();
                    $base64 = base64_encode($content);
                    return $base64;
                }
                break;
            case '4':
                if ($output_base64) {

                    $pdf = PDF::loadView($this->pantillasPDF . 'constancia-pre-matrimonial', $data)->setPaper('a4');
                    $content = $pdf->output();
                    $base64 = base64_encode($content);
                    return $base64;
                }
                break;
            case '5':
                if ($output_base64) {

                    $pdf = PDF::loadView($this->pantillasPDF . 'carton', $data)->setPaper('a4');
                    $content = $pdf->output();
                    $base64 = base64_encode($content);
                    return $base64;
                }
                break;
            case '6':
                if ($output_base64) {

                    $pdf = PDF::loadView($this->pantillasPDF . 'actacelebracion', $data)->setPaper('a4', 'landscape');
                    $content = $pdf->output();
                    $base64 = base64_encode($content);
                    return $base64;
                }
                break;
            case '7':
                if ($output_base64) {

                    $pdf = PDF::loadView($this->pantillasPDF . 'djdomicilioel', $data)->setPaper('a4');
                    $content = $pdf->output();
                    $base64 = base64_encode($content);
                    return $base64;
                }
                break;
            case '8':
                if ($output_base64) {

                    $pdf = PDF::loadView($this->pantillasPDF . 'djel', $data)->setPaper('a4');
                    $content = $pdf->output();
                    $base64 = base64_encode($content);
                    return $base64;
                }
                break;
            case '9':
                if ($output_base64) {

                    $pdf = PDF::loadView($this->pantillasPDF . 'djdomicilioella', $data)->setPaper('a4');
                    $content = $pdf->output();
                    $base64 = base64_encode($content);
                    return $base64;
                }
                break;
            case '10':
                if ($output_base64) {

                    $pdf = PDF::loadView($this->pantillasPDF . 'djella', $data)->setPaper('a4');
                    $content = $pdf->output();
                    $base64 = base64_encode($content);
                    return $base64;
                }
                break;
                case '11':
                    if ($output_base64) {

                        $pdf = PDF::loadView($this->pantillasPDF . 'textomatrimonial', $data)->setPaper('a4');
                        $content = $pdf->output();
                        $base64 = base64_encode($content);
                        return $base64;
                    }
                    break;
            default:
                validationError('error no se encontro el formato');
                break;
        }
        if ($output_stream) {
            return Pdf::loadView($this->pantillasPDF . $tipo_pdf, $data)
                ->setPaper('a4')
                ->stream('solicitud.pdf');
        }

    }
}
