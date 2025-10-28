<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acta de Matrimonio</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        .imagen{
            margin-top: -20px;
            position: absolute;
            top: 10px;
            left: 10px;
            height: 70px;
            width: 180px;
        }
        .titulo { text-align: center;
            /* font-weight: bold;  */
            font-size: 11px; }
        .seccion { margin-top: 10px; }
        .col { display: inline-block; width: 48%; vertical-align: top; }
        .firma { text-align: center; margin-top: 40px; }
        .subrayado { border-bottom: 1px dotted #000; display: inline-block; min-width: 100px; }
        .fila{
            width: 50%;
            vertical-align: top;"
        }

        .bold{
            font-size: 14px !important;
        }
        .table {
            border-collapse:collapse;
            width: 100%;
            font-size: 12px;
        }


    </style>
</head>
<body>
    <div class="titulo" >
        <img src="{{ public_path('img/logo-msb-5.png') }}" class="imagen">
        <div>
            <strong>DISTRITO DE SAN BORJA</strong><br>
            <small>OFICINA DE REGISTRO DEL ESTADO CIVIL DE SAN BORJA</small><br>
            <small>AÑO {{ now()->format('Y') }} LIMA - PERÚ</small><br>
            <strong>ACTA DE CELEBRACIÓN DE MATRIMONIO CIVIL</strong>
        </div>
    </div>
{{--
    <pre>

        @dump($data)


    </pre> --}}
    @php
    $fecha1 =  $data->fecha_ceremonia;
    $fechael =  $data->fecha_nacimientoel;
    $fechaella =  $data->fecha_nacimientoella;


    $date1 = DateTime::createFromFormat('d/m/Y', $fecha1);
    $date2 = DateTime::createFromFormat('d/m/Y', $fechael);
    $date3 = DateTime::createFromFormat('d/m/Y', $fechaella);


    $md1 = (string)$date1->format('md'); // ejemplo: "0420"
    $md2 = (string)$date2->format('md'); // ejemplo: "0715"
    $md3 = (string)$date3->format('md'); // ejemplo: "0715"


    $edadel =  $md1 > $md2 ? $data->edad_del_contrayente : $data->edad_del_contrayente + 1;
    $edadella =  $md1 > $md3 ? $data->edad_dela_contrayente : $data->edad_dela_contrayente + 1;


    // if ($md1 >= $md2) {
    //     echo "La fecha 1 ($fecha1) es mayor.";
    // } elseif ($md1 < $md2) {
    //     echo "La fecha 2 ($fecha2) es mayor.";
    // } else {
    //     echo "Ambas fechas tienen el mismo día y mes.";
    // }
@endphp
    {{-- <pre>
        @php var_dump($data) @endphp
    </pre>S --}}

    <table  class="table" style="border-top: 1px solid black">
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td   class="fila">
                <p style="margin: 0;">Don <span class="bold">{{$data->nombre_del_contrayente  }} </span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Doña <span class="bold">{{$data->nombre_dela_contrayente}}  </span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td class="fila"  >
                <p style="margin: 0;">Estado Civil <span class="bold">{{$data->estado_civil_del_contrayente}}</span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Estado Civil <span class="bold">{{$data->estado_civil_dela_contrayente}}</span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila"  >
                {{-- <p style="margin: 0;">Edad <span class="bold">{{$data->edad_del_contrayente}}  {{ $edadel }}  {{ $data->fecha_nacimientoel }}  {{ $data->fecha_nacimientoel }}</span> años </p> --}}
                <p style="margin: 0;">Edad <span class="bold"> {{ $edadel }}</span> años </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Edad <span class="bold">{{ $edadella }}</span> años </p>
                {{-- <p style="margin: 0;">Edad <span class="bold">{{$data->edad_dela_contrayente}}  {{ $edadella }} {{ $data->fecha_nacimientoella }}</span> años </p> --}}
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
            <td class="fila"  >
                <p style="margin: 0;">Nacionalidad  <span class="bold">{{$data->nacion_dela_contrayente == 'P'?'PERUANA':'EXTRANJERA'}}</span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Ocupación <span class="bold">{{$data->o_del_contrayente}}</span> </p>
            </td>
            <td class="fila"  >
                <p style="margin: 0;">Ocupación <span class="bold">{{$data->o_dela_contrayente}}</span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Documento de Identidad <span class="bold">{{ $data->di_del_contrayente}}</span> </p>
            </td>
            <td class="fila"  >
                <p style="margin: 0;">Documento de Identidad <span class="bold">{{ $data->di_dela_contrayente}}</span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Domicilio  <span class="bold"> {{$data->dir_del_contrayente}}</span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Domicilio  <span class="bold"> {{$data->dir_dela_contrayente}}</span> </p>
            </td>
        </tr>
    </table>
    <p style="margin-top: 10px;">
        Se presentaron ante la autoridad competente para contraer matrimonio y cumplidos los requisitos de ley,
        según consta en el Exp. Nº <strong>{{$data->numero_expediente_tramite}} - {{$data->anio_expediente_tramite}}</strong>, y declarada la capacidad por informe
        de fecha <strong>{{ $data->fecha_ceremonia}}</strong>,
        se dio lectura a los Art. del 287 al 290, 418 y 419 del Código Civil, en presencia de los testigos:
    </p>

    <table  class="table">
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td   class="fila">
                <p style="margin: 0;">DON / DOÑA <span class="bold">{{$data->pri_test_cerem_nombre}}</span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">DON / DOÑA <span class="bold">{{$data->seg_test_cerem_nombre}}</span> </p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila"  >
                <p style="margin: 0;">Edad <span class="bold">{{$data->pri_test_cerem_edad}} </span> años </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Edad <span class="bold">{{$data->seg_test_cerem_edad}}</span> años </p>
            </td>
        </tr>
        {{-- <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila"  >
                <p style="margin: 0;">Edad <span class="bold">{{$data->pri_test_cerem_edad}}  {{ $edadel }}  {{ $data->fecha_nacimientoel}}</span> años </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Edad <span class="bold">{{$data->seg_test_cerem_edad}}  {{ $edadella }}  {{ $data->fecha_nacimientoel }}</span> años </p>
            </td>
        </tr> --}}




        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td class="fila"  >
                <p style="margin: 0;">Documento de Identidad <span class="bold">{{$data->pri_test_cerem_di}}</span></p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Documento de Identidad <span class="bold">{{$data->seg_test_cerem_di}}</span></p>
            </td>
        </tr>
        <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
            <td  class="fila" >
                <p style="margin: 0;">Domicilio  <span class="bold"> {{$data->pri_test_cerem_domicilio}}</span> </p>
            </td>
            <td  class="fila" >
                <p style="margin: 0;">Domicilio  <span class="bold"> {{$data->seg_test_cerem_domicilio}}</span> </p>
            </td>
        </tr>
    </table>
    <p style="margin-top: 10px;">
        y preguntando a cada uno de los contrayentes si persisten en su voluntad de celebrar el matrimonio y respondiendo ambos afirmativamente, los declaro casados, extendiendo la presente acta en la que se deja constancia de que se ha cumplido con todos los requisitos que señala la ley, firmando los intervinientes conforme a lo dispuesto por el Art. 259 del Código Civil, que suscriben a horas <strong>{{ substr($data->Hora_Ceremonia, 0, 2) . ':' . substr($data->Hora_Ceremonia, 2, 2) }}</strong> del día <strong>{{ \Carbon\Carbon::createFromFormat('d/m/Y', $data->fecha_ceremonia)->locale('es')->isoFormat('DD') }}</strong> del mes de <strong>{{ mb_strtoupper(\Carbon\Carbon::createFromFormat('d/m/Y', $data->fecha_ceremonia)->locale('es')->isoFormat('MMMM')) }}</strong> del año <strong>{{ \Carbon\Carbon::createFromFormat('d/m/Y', $data->fecha_ceremonia)->locale('es')->isoFormat('YYYY') }}</strong>.
    </p>
    Observaciones:   {{$data->observaciones_ceremonia}}
    <br>
    <br>
    <table style="border-collapse: collapse; border: none;width: 100%">
        <tr>
            <th style="width: 6%; border: none;"></th>
            <th style="width: 27%; border: none;"></th>
            <th style="width: 6%; border: none;"></th>
            <th style="width: 28%; border: none;"></th>
            <th style="width: 6%; border: none;"></th>
            <th style="width: 27%; border: none;"></th>
            <th style="width: 6%; border: none;"></th>
        </tr>
<br>
<br>
        <tr>
            <td style="border: none; "></td>
            <td style="text-align: center;  border-top: 1px solid black; border-left: none;  border-right: none; border-bottom: none">EL CONTRAYENTE<br><br><br><br></td>
            <td style="border: none;"></td>
            <td ></td>
            <td style="border: none;"></td>
            <td style="text-align: center;  border-top: 1px solid black; border-left: none;  border-right: none; border-bottom: none">LA CONTRAYENTE<br><br><br><br></td>
            <td ></td>
        </tr>
        <br>
        <tr >
            <td style="border: none;"></td>
            <td style="text-align: center;  border-top: 1px solid black; border-left: none;  border-right: none; border-bottom: none">EL TESTIGO</td>
            <td style="border: none;"></td>
            <td  style="text-align: center;  border-top: 1px solid black; border-left: none;  border-right: none; border-bottom: none">AUTORIDAD CELEBRANTE</td>
            <td style="border: none;"></td>
            <td style="text-align: center;  border-top: 1px solid black; border-left: none;  border-right: none; border-bottom: none">EL TESTIGO</td>
            <td  style=" border: none;"></td>
        </tr>
    </table>
</body>
</html>
