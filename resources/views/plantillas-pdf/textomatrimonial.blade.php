<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Matrimonio Civil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11.5pt;
            line-height: 1.4;
            margin: 40px;
        }
        .titulo {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            font-size: 14.5pt;
            margin-bottom: 20px;
        }
        .bold {
            font-weight: bold;
        }

        .center {
            text-align: center;
        }
        .line {
            text-decoration: underline;
        }
        p {
            text-align: justify;
            margin: 8px 0;
        }
        .imagen{
            margin-top: -20px;
            position: absolute;
            top: 10px;
            left: 10px;
            height: 70px;
            width: 180px;
        }
    </style>
</head>
<body>
    <img src="{{ public_path('img/logo-msb-5.png') }}" class="imagen">
    <div class="titulo">MATRIMONIO CIVIL</div>
    <p>
        Nos encontramos aquí presentes para celebrar la ceremonia del Matrimonio Civil del Señor:
        <span class="bold line"> &nbsp;&nbsp;{{ $data->nombre_del_contrayente }} &nbsp;&nbsp;</span>&nbsp; y de la Sra.
        <span class="bold line"> &nbsp;&nbsp;{{ $data->nombre_dela_contrayente }} &nbsp;&nbsp;</span>,&nbsp; quienes han manifestado su deseo de contraer Matrimonio Civil,
        han cumplido con todos los requisitos exigidos por la ley, y han sido declarados aptos, de conformidad con el Código Civil que nos rige, motivo por el cual procederemos a realizar esta celebración en presencia de sus testigos y amigos.
    </p>

    <p>
        * Sin embargo <span class="bold">EL CÓDIGO CIVIL</span> del Perú establece que antes de efectuar la ceremonia hagamos de conocimiento de los contrayentes, los deberes y derechos que nacen del Matrimonio, los mismos que a continuación detallamos
    </p>

    <p>* ART.287 <span class="bold">LOS CÓNYUGES</span> se obligan mutuamente por el hecho del matrimonio a alimentar y educar a los hijos.</p>
    <p>* ART.288 <span class="bold">LOS CÓNYUGES</span> se deben recíprocamente fidelidad y asistencia.</p>
    <p>* ART.289 <span class="bold">ES DEBER DE AMBOS</span> cónyuges hacer vida común en el domicilio conyugal. El Juez puede suspender este deber cuando su cumplimiento ponga en grave peligro la vida, la salud o el honor de cualquiera de los cónyugues o la actividad económica de la que depende el sostenimiento de la familia. </p>
    <p>* ART.290 <span class="bold">AMBOS CÓNYUGES</span> tienen el deber y el derecho de participar en el gobierno del hogar y de cooperar al mejor desenvolvimientodel mismo. A ambos compete, igualmente, fijar y mudar el domicilio conyugal y decidir las cuestiones referentes a la economía del hogar</p>
    <p>* ART.418 <span class="bold">POR LA PATRIA POTESTAD</span> los padres tienen el deber y el derecho de cuidar de la persona y bienes de sus hijos menores.</p>
    <p>* ART.419 <span class="bold">LA PATRIA POTESTAD</span> se ejerce conjuntamente por el padre y la madre durante el matrimonio correspondiendo a ambos la representación del hijo</p>
    <p>
        Enterados de los Artículos del Código Civil referente a los deberes y derechos que nacen del matrimonio,
        <span class="bold line">&nbsp;&nbsp;{{ $data->nombre_del_contrayente }}&nbsp;&nbsp;</span>&nbsp; acepta por esposa a <span class="bold line">&nbsp;&nbsp;{{ $data->nombre_dela_contrayente }}&nbsp;&nbsp;</span> y
        <span class="bold line">&nbsp;&nbsp;{{ $data->nombre_dela_contrayente }}&nbsp;&nbsp;</span>&nbsp; acepta por esposo a <span class="bold line">&nbsp;&nbsp;{{ $data->nombre_del_contrayente }}&nbsp;&nbsp;</span>.
    </p>
    <p>
        En atención a la respuesta favorable dada por Uds. y de conformidad con lo prescrito por el Código Civil del Perú;
        en nombre de la ley los declaro marido y mujer.
    </p>
    <br>
    <p class="center bold">PUEDE USTED BESAR A LA NOVIA.</p>

</body>
</html>
