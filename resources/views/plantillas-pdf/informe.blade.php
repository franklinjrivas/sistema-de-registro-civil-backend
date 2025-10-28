{{-- resources/views/informe.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe Matrimonial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .center {
            text-align: center;
        }
        .bold {
            font-weight: bold;
        }
        .mt {
            margin-top: 20px;
        }
        .footer {
            margin-top: 60px;
            font-size: 0.9em;
            border-top: 1px solid #333;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <table style="width: 100%;">
            <tr class="no-border-table">
                <td width="60%" style="text-align: left !important;">
                    <img src="img/logo-msb-5.png" alt="" style="height: 70px; width: 180px;">
                </td>

                <td width="40%" style="text-align: right !important;">

                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center !important;">
                    <h3 style="margin: 0 auto;">INFORME Nº{{$data->numero_expediente}}-MSB-OGSCM-OTDA</h4>
                </td>
            </tr>
        </table>
    </div>

<br>
    <p><span class="bold">SEÑOR<br>
    MARCO ANTONIO ÁLVAREZ VARGAS<br>
    ALCALDE DE LA MUNICIPALIDAD DE SAN BORJA</span></p>

    <p class="mt">Los contrayentes:<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="bold">{{$data->nombre_del_contrayente}}</span><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="bold">{{$data->nombre_dela_contrayente}}</span><br><br>
    han solicitado se les declare APTOS para contraer Matrimonio Civil en esta Municipalidad.</p>

    <p style="text-align: justify; margin: 0; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;De conformidad con la documentación presentada que obra en el presente <span class="bold"> Exp. Matrimonial Nº &nbsp;<strong> {{$data->numero_expediente_tramite}} - {{$data->anio_expediente_tramite}} </span >, se acredita que se ha dado cumplimiento a todos los requisitos establecidos en el Art. 248 del Código Civil.</p>
<br>
    <p style="text-align: justify; margin: 0; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Por lo anteriormente expuesto, su Despacho puede declarar a los contrayentes <span class="bold">APTOS</span> y
    <span class="bold">AUTORIZAR</span> la celebración de la Ceremonia Civil, el día <span class="bold"><u>&nbsp;&nbsp;&nbsp;{{$data->fecha_ceremonia}}&nbsp;&nbsp;&nbsp;</u></span> &nbsp;a horas <span class="bold"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ substr($data->Hora_Ceremonia, 0, 2) }}:{{ substr($data->Hora_Ceremonia, 2, 2) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></span>.</p>

    <p class="mt" style="text-align: right;"><span>
        San Borja, {{ \Carbon\Carbon::parse(str_replace('/', '-', $data->fecha_solicitud) )->locale('es')->isoFormat('D [de] MMMM [de] YYYY') }}</span></p>
<br>
    <table style="width: 100%; margin: 0 auto">
        <tr class="no-border-table">
            <td style="text-align: center; display: flex; justify-content: center">
                <img src="img/firma/1.png" alt="" style="height: 140px; width: 240px; margin: 0 auto">
            </td>
        </tr>
    </table>


    <div class="footer" style="position: fixed; bottom: 0; width: 94%; margin-rigt: 40%; text-align: center; padding: 10px 0; background: white;">
        Av. Joaquín Madrid 200 - San Borja
    </div>
</body>
</html>
