<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Declaración Jurada de Domicilio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            margin: 40px;
        }

        .titulo {
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 3px;
        }

        .subtitulo {
            text-align: center;
            font-size: 14px;
            margin-bottom: 60px;
            font-weight: bold;
        }

        .campo {
            font-weight: bold;
        }

        .contenido {
            margin-top: 20px;
        }

        .firma-section {
            display: flex;
            /* justify-content: space-between; */
            margin-top: 60px;
            text-align: center;
        }

        .firma {
            text-align: center;
            width: 45%;
        }

        .fecha {
            margin-top: 40px;
            text-align: right;

        }

        .resaltado {
            background-color: #eaeaea;
            padding: 2px 4px;
            display: inline-block;
        }

        .justificado {
            text-align: justify;
            line-height: 1.8;
            /* Puedes ajustar este valor según lo que necesites */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            vertical-align: middle;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
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
    </pre>S --}}

    <div style="text-align: left;">
        <img src="{{ public_path('img/logo-msb-5.png') }}" alt="Logo" height="80">
    </div>

    <h2 class="titulo"> <u>&nbsp;DECLARACIÓN JURADA DE DOMICILIO&nbsp;</u></h2>
    <div class="subtitulo">(Ley No.28862, Modificada por la Ley No.28882 Art.1)</div>

    <div class="justificado">
        YO, <b><u>
            &nbsp;&nbsp;&nbsp;&nbsp;{{ $data->nombre_del_contrayente }}</u>&nbsp;&nbsp;&nbsp;&nbsp;</u></b>
        DE NACIONALIDAD <b><u>
                &nbsp;&nbsp;&nbsp;&nbsp;{{ $data->nacion_del_contrayente == 'P' ? 'PERUANA' : 'EXTRANJERA' }}
                &nbsp;&nbsp;&nbsp;&nbsp; </u></b> CON DOCUMENTO DE IDENTIDAD
        No. <b> <u> &nbsp;&nbsp;&nbsp;&nbsp;{{ $data->di_del_contrayente }} &nbsp;&nbsp;&nbsp;&nbsp; </u></b>
    </div>

    <h3 class="titulo" style="margin-top: 30px;">DECLARO BAJO JURAMENTO</h3><br><br>

    <p class="justificado">
        QUE, MI DOMICILIO HABITUAL Y DE PERMANENCIA ES EN: <b><u>
                &nbsp;&nbsp;&nbsp;&nbsp;{{ $data->dir_del_contrayente }} &nbsp;&nbsp;&nbsp;&nbsp; </u></b> PARA CUYO
        EFECTO Y EN SEÑAL DE CONFORMIDAD, CONSIGNO MI FIRMA EN EL PRESENTE DOCUMENTO.
    </p>
    <br>
    <div class="fecha">
        San Borja, {{ \Carbon\Carbon::parse(str_replace('/', '-', $data->fecha_solicitud) )->locale('es')->isoFormat('D [de] MMMM [de] YYYY') }}
    </div>
    <br>
    <br>

    <br>


<table style="border-collapse: collapse; border: none;">
    <tr>
        <th style="width: 6%; border: none;"></th>
        <th style="width: 20%; border: none;"></th>
        <th style="width: 21%; border: none;"></th>
        <th style="width: 6%; border: none;"></th>
        <th style="width: 20%; border: none;"></th>
        <th style="width: 21%; border: none;"></th>
        <th style="width: 6%; border: none;"></th>
    </tr>
    <br>
<br>
<br>
<br>
    <tr>
        <td style="border: none;"></td>
        <td colspan="2" style="text-align: center;  border-top: 1px solid black; border-left: none;  border-right: none; border-bottom: none">FIRMA</td>
        <td style="border: none;"></td>
        <td colspan="2"  style="text-align: center;  border-top: 1px solid black; border-left: none;  border-right: none; border-bottom: none">HUELLA DIGITAL</td>
        <td style="border: none;"></td>
    </tr>
</table>



</body>

</html>
