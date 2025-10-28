{{-- resources/views/constancia.blade.php --}}

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Constancia Pre Matrimonial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
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

        .uppercase {
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="header">
        <table>
            <tr class="no-border-table">
                <td width="100%">
                    <img src="img/logo-msb-5.png" alt="" height="80px" width="170px">
                </td>
            </tr>
        </table>
    </div>
    <h3 class="center uppercase" style="text-decoration: underline">Constancia Pre Matrimonial</h3>
    <br>
    <spam style="text-align: justify">EL JEFE DE LA OFICINA DE TRAMITE DOCUMENTARIO Y ARCHIVO QUE SUSCRIBE EL PRESENTE DOCUMENTO, DEJA CONSTANCIA QUE:
    </spam>
    <p>
        DON &nbsp;&nbsp;: &nbsp;<span class="bold">{{ $data->nombre_del_contrayente }} </span><br>
        DOÑA&nbsp;: &nbsp;<span class="bold">{{ $data->nombre_dela_contrayente }}</span></p>

    <p style="text-align: justify">MEDIANTE EXPEDIENTE MATRIMONIAL Nº <span
            class="bold">{{$data->numero_expediente_tramite}} - {{$data->anio_expediente_tramite}}</span> HAN INICIADO LOS TRÁMITES PARA CONTRAER MATRIMONIO CIVIL, A LLEVARSE A CABO EL  <span>{{ strtoupper(\Carbon\Carbon::parse(str_replace('/', '-', $data->fecha_ceremonia) )->locale('es')->isoFormat('D [de] MMMM [de] YYYY')) }}</span>
        A LAS <span>{{ substr($data->Hora_Ceremonia, 0, 2) . ':' . substr($data->Hora_Ceremonia, 2, 2) }}</span>.
    </p>

    <p style="text-align: justify">SE EXPIDE LA PRESENTE CONSTANCIA A SOLICITUD DE LA PARTE INTERESADA, PARA LOS FINES QUE ESTIMEN PERTINENTES.</p>
    <br>
    <p class="mt"><span>SAN BORJA,
            {{ strtoupper(\Carbon\Carbon::now()->locale('es')->isoFormat('D [de] MMMM [de] YYYY')) }}</span></p>
    <br>
    <p class="center uppercase, mt">ATENTAMENTE,</p>
    <br>
    <table style="width: 100%; margin: 0 auto">
        <tr class="no-border-table">
            <td style="text-align: center; display: flex; justify-content: center">
                <img src="img/firma/1.png" alt="" style="height: 120px; width: 200px; margin: 0 auto">
            </td>
        </tr>
    </table>

</body>

</html>
