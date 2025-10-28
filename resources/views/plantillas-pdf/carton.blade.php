{{-- resources/views/informe.blade.php --}}
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Carton</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin: 50px;
        }

        .el {
            text-align: left;
            font-size: 16px;
            margin-top: 157px;
            text-transform: uppercase;
            margin-bottom: 23px;
        }

        .ella {
            text-align: left;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .fecha {
            text-align: right;
            line-height: 1.8;
        }
    </style>
</head>

<body>
    @php
        use Carbon\Carbon;
        setlocale(LC_TIME, 'es_ES.UTF-8'); // Para funciones como strftime si las usaras
        Carbon::setLocale('es'); // Para métodos de Carbon en español

        $fecha = Carbon::createFromFormat('d/m/Y', $data->fecha_ceremonia)
            ->locale('es')
            ->isoFormat('D [de] MMMM [de] YYYY');
    @endphp

    <div class="el">
        {{ $data->nombre_del_contrayente }}
    </div>
    <div class="ella">
        {{ $data->nombre_dela_contrayente }}
    </div>
    <div class="fecha">
        <b> San Borja, {{ $fecha }} </b>
    </div>

</body>

</html>
