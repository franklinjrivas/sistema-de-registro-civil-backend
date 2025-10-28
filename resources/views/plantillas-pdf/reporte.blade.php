<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <style>
        @page {
            margin: 80px 40px;
        }

        header {
            position: fixed;
            top: -60px;
            /* Puedes ajustar esto si es muy alto */
            left: 0;
            right: 0;
            height: 80px;
            text-align: center;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0;
            right: 0;
            height: 50px;
            font-size: 12px;
            text-align: center;
        }

        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            page-break-inside: auto;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 4px;
            text-align: left;
        }

        .page-break {
            page-break-after: always;
        }

        .fecha-group {
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .no-border-table,
        .no-border-table td,
        .no-border-table th {
            border: none !important;
        }

        .page-number {
            text-align: center;
        }

        .page-number:before {
            content: "Página " counter(page);
        }
    </style>
</head>

<body>
    <header>
        <div style="text-align: center;">
            <img src="img/logo-msb-5.png" alt=""
                style="height: 55px; width: 200px; position: absolute; top: -10px; left: 40px;">
            <br>
            <h2 style="margin: 0;">RELACIÓN DE MATRIMONIOS</h2>
            <p style="margin: 0;">FECHA  {{ $desde }} al {{ $hasta}} </p>

        </div>
    </header>
    <footer>
        <span class="page-number"></span>
        <p style="margin: 0; text-align: right"> Impreso el: {{ now()->setTimezone('America/Lima')->format('d/m/Y H:i:s') }}</p>
    </footer>

    <table style="font-size: 8px;">
        <thead>
            <tr>
                <th style="font-size: 10px !important;text-align:center">N°</th>
                <th style="font-size: 10px !important;text-align:center">EXP.</th>
                <th style="font-size: 10px !important;text-align:center">EL CONTRAYENTE</th>
                <th style="font-size: 10px !important;text-align:center">LA CONTRAYENTE</th>
                <th style="font-size: 10px !important;text-align:center">HORA</th>
                <th style="font-size: 10px !important;text-align:center">LUGAR</th>
                <th style="font-size: 10px !important;text-align:center">KITCHEN</th>
                <th style="font-size: 10px !important;text-align:center">CELEBRANTE</th>
                <th style="font-size: 10px !important;text-align:center">DIRECCIÓN</th>
            </tr>
        </thead>
        <tbody>
            @php
            $fila = 0;
            $groupedData = [];

            foreach ($data as $item) {
                $groupedData[$item->fecha_cere][] = $item;
            }

            ksort($groupedData);

            // Ordenar cada grupo por hora (con referencia)…
            foreach ($groupedData as &$matrimonios) {
                usort($matrimonios, function ($a, $b) {
                    return strcmp($a->hora, $b->hora);
                });
            }
            unset($matrimonios); // 👈 MUY IMPORTANTE: rompe la referencia
        @endphp

        @foreach ($groupedData as $fecha => $lista)  {{-- usa otro nombre: $lista --}}
            <tr style="background-color:#f2f2f2;">
                <td colspan="9" style="text-align:center;font-weight:bold;">FECHA DE CEREMONIA: {{ $fecha }}</td>
            </tr>

            @foreach ($lista as $item)
                @if ($fila > 0 && $fila % 47 == 0)
                        </tbody>
                    </table>
                    <div class="page-break"></div>
                    <table style="font-size:8px;">
                        <thead>
                            <tr>
                                <th style="font-size:10px !important;text-align:center">N°</th>
                                <th style="font-size:10px !important;text-align:center">EXP.</th>
                                <th style="font-size:10px !important;text-align:center">EL CONTRAYENTE</th>
                                <th style="font-size:10px !important;text-align:center">LA CONTRAYENTE</th>
                                <th style="font-size:10px !important;text-align:center">HORA</th>
                                <th style="font-size:10px !important;text-align:center">LUGAR</th>
                                <th style="font-size:10px !important;text-align:center">KITCHEN</th>
                                <th style="font-size:10px !important;text-align:center">CELEBRANTE</th>
                                <th style="font-size:10px !important;text-align:center">DIRECCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                @endif

                <tr>
                    <td style="text-align:center">{{ $item->ID }}</td>
                    <td>{{ $item->numero_expediente_tramite }}</td>
                    <td>{{ $item->nombre_del_contrayente ?? '' }}</td>
                    <td>{{ $item->nombre_de_la_contrayente ?? '' }}</td>
                    <td style="text-align:center">{{ substr($item->hora,0,2) }}:{{ substr($item->hora,2,2) }}</td>
                    <td style="text-align:center">{{ $item->lugar ?? '' }}</td>
                    <td style="text-align:center">{{ strtoupper($item->kitchen ?? '') }}</td>
                    <td style="text-align:center">{{ $item->celebrante ?? '' }}</td>
                    <td>{{ $item->direccion ?? '' }}</td>
                </tr>
                @php $fila++; @endphp
            @endforeach
        @endforeach
        </tbody>
    </table>


</body>

</html>
