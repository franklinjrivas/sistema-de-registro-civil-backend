<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Declaración Jurada de Estado Civil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin: 50px;
        }

        .logo {
            height: 70px;
            margin-bottom: 10px;
        }

        .titulo {
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            margin-top: 20px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .campo {
            font-weight: bold;
            background-color: #eee;
            padding: 2px 4px;
            display: inline-block;
        }

        .seccion {
            margin-top: 20px;
            text-align: justify;
            line-height: 1.8;
            font-size: 14px;
        }

        .firma {
            margin-top: 40px;
            text-align: center;
        }

        .firma span {
            display: inline-block;
            border-top: 1px solid black;
            width: 300px;
            margin-top: 20px;
        }

        .fecha {
            margin-top: 40px;
            text-align: right;
        }

        .descripcion {
            margin-top: -22px;
            text-align: left;
            font-size: 11px;
            margin-bottom: 40px;

        }

        .fecha {
            margin-top: 40px;
            text-align: right;
            font-size: 14px;
        }
    </style>
</head>

<body>
    @php
        use Carbon\Carbon;
        setlocale(LC_TIME, 'es_ES.UTF-8'); // Para que los meses salgan en español
        $fecha = Carbon::now()->locale('es')->isoFormat('D [DE] MMMM [DE] YYYY');
    @endphp
    {{-- <pre>
        @php var_dump($data) @endphp
    </pre> --}}


    <img src="img/logo-msb-5.png" alt="" style="height: 70px; width: 160px;">

    <div class="titulo"><h2>DECLARACIÓN JURADA</h2></div>

    <div class="seccion">
        Yo, <b> <u> &nbsp;&nbsp;&nbsp;&nbsp;{{ $data->nombre_del_contrayente }} &nbsp;&nbsp;&nbsp;&nbsp; </u></b>&nbsp;,
        identificado con DNI No. <b> <u> &nbsp;&nbsp;&nbsp;&nbsp;{{ $data->di_del_contrayente }}
                &nbsp;&nbsp;&nbsp;&nbsp; </u></b>&nbsp;, con domicilio en <b> <u>
                &nbsp;&nbsp;&nbsp;&nbsp;{{ $data->dir_del_contrayente }} &nbsp;&nbsp;&nbsp;&nbsp; </u></b>&nbsp;,
        declaro bajo juramento que mi estado civil es <b> <u>
                &nbsp;&nbsp;&nbsp;&nbsp;{{ $data->estado_civil_del_contrayente }} &nbsp;&nbsp;&nbsp;&nbsp;
            </u></b>&nbsp;, y que no tengo impedimento alguno para contraer Matrimonio Civil.<br><br>

        En caso de comprobárseme falsedad alguna estoy sometiéndome a las sanciones contempladas en el Art. 427° del
        Código Penal.
    </div>

    <div class="fecha">
        San Borja, {{ \Carbon\Carbon::parse(str_replace('/', '-', $data->fecha_solicitud) )->locale('es')->isoFormat('D [de] MMMM [de] YYYY') }}
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<table style="width: 100%; border-collapse: collapse; text-align: center;">
    <tr>
        <th style="width: 10%;"></th>
        <th style="width: 35%; border-top: 1px solid black;"></th>
        <th style="width: 10%;"></th>
        <th style="width: 35%; border-top: 1px solid black;"></th>
        <th style="width: 10%;"></th>
    </tr>
    <tr>
        <td></td>
        <td>FIRMA</td>
        <td></td>
        <td>HUELLA DIGITAL</td>
        <td></td>

    </tr>
</table>
</body>

</html>
