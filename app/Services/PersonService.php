<?php

namespace App\Services;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class PersonService
{

    public function  list_personas(
        ?int $exp,
        ?int $anio,
        ?string $doc,
        ?string $nombre,
        ?string $fechadesde,
        ?string $fechahasta,
        ?string $estado,
        ?int $page = 1,
        ?int $item_x_page,
        ?string $formato
    ): array | string {
        $desde = $fechadesde ? fechaJuliana(Carbon::create($fechadesde)) : null;
        $hasta = $fechahasta ? fechaJuliana(Carbon::create($fechahasta)) : null;

        ini_set('memory_limit', '2048M');
        $item_x_page = $item_x_page ?? 10;
        $result = DB::select(
            'EXEC dbo.regcivil_listar_partida_matrimonial_2 ?, ?, ?, ?, ?, ?, ?, ?, ?, ?',
            [$exp, $anio, $doc, $nombre,  $desde,  $hasta, $estado, $page, $item_x_page, true]
        );

        if ($formato == 'pdf') {
            $param = [
                'data' => $result,
                'desde' => Carbon::create($fechadesde)->format('d/m/Y'),
                'hasta' => Carbon::create($fechahasta)->format('d/m/Y'),
            ];
            $pdf = PDF::loadView('plantillas-pdf.reporte', $param)->setPaper('a4', 'landscape');
            $content = $pdf->output();
            $base64 = base64_encode($content);
            return $base64;
        }

        $totalResultados = DB::select(
            'EXEC dbo.regcivil_total_partida_matrimonial ?, ?, ?, ?, ?, ?, ?',
            [$exp, $anio, $doc, $nombre,  $desde,  $hasta, $estado]
        );
        return [
            'data' => $result,
            'total' => (int)$totalResultados[0]->total,
            'item_x_page' => $item_x_page
        ];
    }
}
