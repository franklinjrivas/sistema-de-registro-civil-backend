{{-- resources/views/edicto.blade.php --}}
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Edicto Matrimonial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.3;
            margin: 40px;
        }
        h2 {
            text-align: center;
            text-transform: uppercase;
        }

        .info {
            display: flex;
            justify-content: space-between;
        }

        .col {
            width: 48%;
        }

        .bold {
            font-weight: bold;
        }

        .center {
            text-align: center;
        }

        .mt {
            margin-top: 20px;
            text-align: right;
        }
        .fila{
            text-align: left;
            vertical-align: top;
            padding: 2px 0;
            width: 50%;
        }


    </style>
</head>

<body>
    {{-- <pre>
        @php var_dump($data) @endphp
    </pre>S --}}
    <div class="header">
        <table style="width: 100%;">
            <tr class="no-border-table">
                <td width="60%" style="text-align: left !important;">
                    <img src="img/logo-msb-5.png" alt="" style="height: 70px; width: 180px;">
                </td>

                <td width="40%" style="text-align: right !important;">
                    <p><span class="bold">Exped. Nº <u>&nbsp;&nbsp;  <strong>{{$data->numero_expediente_tramite}} - {{$data->anio_expediente_tramite_dos_dig}}  </u></span></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center !important;">
                    <h3 style="margin: 0 auto;">EDICTO MATRIMONIAL</h4>
                </td>
            </tr>
        </table>
    </div>
    <div class="left">
        <p>De conformidad con lo dispuesto en el Artículo 250 del Código Civil; hago saber que:</p>
    </div>
    <table style="border-collapse: collapse;">
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Don <span class="bold">{{$data->nombre_del_contrayente}}</span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Doña <span class="bold">{{$data->nombre_dela_contrayente}}</span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Edad <span class="bold">{{$data->edad_del_contrayente}}</span> años </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Edad <span class="bold">{{$data->edad_dela_contrayente}}</span> años </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Estado Civil <span class="bold">{{$data->estado_civil_del_contrayente}}</span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Estado Civil <span class="bold">{{$data->estado_civil_dela_contrayente}}</span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Natural de <span class="bold"> {{$data->nac_departamento_del_c}}-{{$data->nac_provincia_del_c}}-{{$data->nac_distrito_del_c}}</span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Natural de <span class="bold">{{$data->nac_departamento_dela_c}}-{{$data->nac_provincia_dela_c}}-{{$data->nac_distrito_dela_c}}</span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Nacionalidad  <span class="bold">{{$data->nacion_del_contrayente == 'P'?'PERUANA':'EXTRANJERA'}}</span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Nacionalidad  <span class="bold">{{$data->nacion_dela_contrayente == 'P'?'PERUANA':'EXTRANJERA'}}</span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Ocupación <span class="bold">{{$data->o_del_contrayente}}</span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Ocupación <span class="bold">{{$data->o_dela_contrayente}}</span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Domicilio </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Domicilio </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;"><span class="bold">{{$data->dir_del_contrayente}}</span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;"><span class="bold">{{$data->dir_dela_contrayente}}</span> </p>
            </td>
        </tr>

    </table>

<br>
    <div style="text-align: justify; margin: 0; padding: 0;">
        <p style="margin: 0 0 5px 0; line-height: 1.2;">Pretenden contraer Matrimonio Civil en esta Municipalidad. Las personas que conozcan causales de impedimento
            podrán denunciarlas dentro del término de ocho días, en la forma prescrita en el Artículo 253 del Código
            Civil.</p>
            <br>
        <p class="mt"><span >San Borja, {{ \Carbon\Carbon::parse(str_replace('/', '-', $data->fecha_solicitud) )->locale('es')->isoFormat('D [de] MMMM [de] YYYY') }}</span></p>
    </div>
    <br>

    <table style="width: 100%; margin: 0 auto">
        <tr class="no-border-table">
            <td >
                <img src="img/firma/1.png" alt="" style="height: 120px; width: 220px; margin: 0 auto">
            </td>
        </tr>
    </table>
</body>

</html>
