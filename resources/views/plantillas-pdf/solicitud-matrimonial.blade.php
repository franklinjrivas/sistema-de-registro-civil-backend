<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Solicitud Matrimonial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11.5px;
            margin: 10px;
            line-height: 1.5;
        }

        h1 {
            text-align: center;
            text-transform: uppercase;
        }

        .section {
            margin-top: 13px;
        }

        .subsection {
            margin-top: 20px;
        }

        .firmas {
            display: flex;
            justify-content: space-between;
            margin-top: 28px;
        }
        .header {
            margin-top: 2px !important;
        }
        .bold {
            font-weight: bold;
        }
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
            font-size: 11.8px; }
    </style>
</head>

<body>


    <div class="titulo" >
        <img src="{{ public_path('img/logo-msb-5.png') }}" class="imagen">
        <div>
            <h2>SOLICITUD MATRIMONIAL</h2>
        </div>
    </div>



    Señor Alcalde de la Municipalidad de San Borja
    <br>

    <div class="section">
        <table style="border-collapse: collapse;">
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">El Contrayente </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">La Contrayente </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Yo <span class="bold">{{ $data->nombre_del_contrayente }}</span> </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Yo <span class="bold">{{ $data->nombre_dela_contrayente }}</span> </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Edad <span class="bold">{{ $data->edad_del_contrayente }}</span> años de
                        edad </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Edad <span class="bold">{{ $data->edad_dela_contrayente }}</span> años de
                        edad </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Estado Civil <span
                            class="bold">{{ $data->estado_civil_del_contrayente }}</span> </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Estado Civil <span
                            class="bold">{{ $data->estado_civil_dela_contrayente }}</span> </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Natural de <span class="bold">
                            {{ $data->nac_departamento_del_c }}-{{ $data->nac_provincia_del_c }}-{{ $data->nac_distrito_del_c }}</span>
                    </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Natural de <span
                            class="bold">{{ $data->nac_departamento_dela_c }}-{{ $data->nac_provincia_dela_c }}-{{ $data->nac_distrito_dela_c }}</span>
                    </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Nacionalidad <span
                            class="bold">{{ $data->nacion_del_contrayente == 'P' ? 'PERUANA' : 'EXTRANJERA' }}</span>
                    </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Nacionalidad <span
                            class="bold">{{ $data->nacion_dela_contrayente == 'P' ? 'PERUANA' : 'EXTRANJERA' }}</span>
                    </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Ocupación <span class="bold">{{ $data->o_del_contrayente }}</span> </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Ocupación <span class="bold">{{ $data->o_dela_contrayente }}</span> </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Identificación <span class="bold">{{ $data->di_del_contrayente }}</span>
                    </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Identificación <span class="bold">{{ $data->di_dela_contrayente }}</span>
                    </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Domicilio <span class="bold">{{ $data->dir_del_contrayente }}</span> </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Domicilio <span class="bold">{{ $data->dir_dela_contrayente }}</span> </p>
                </td>
            </tr>
        </table>
    </div>

    <div class="section">
        <p style="text-align: justify; margin: 0; padding: 0;">
            Que, deseando contraer Matrimonio Civil, nos dirigimos a vuestro Superior Despacho, acompañando a ésta
            Solicitud los documentos indicados en el Artículo 248 del Código Civil, y cuya veracidad declaramos bajo
            juramento.
        </p>

        <p>POR LO EXPUESTO:</p>

        <p style="text-align: justify; margin: 0; padding: 0;">
            Solicitamos a usted, se sirva recibir las Declaraciones de los Testigos, a fin de que disponga se nos
            proporcione el
            respectivo Edicto Matrimonial para su publicación, y cumplidos los trámites de ley se sirva declararnos
            expeditos
            para contraer Matrimonio Civil.
        </p>
<br>
<br>
        <div class="firmas">
            <table style="width: 100%;">
                <tr class="no-border-table">
                    <td width="5%"></td>
                    <td width="40%" style="text-align: center !important;border-top: 2px solid #000;">
                        <p>Firma del Contrayente</p>
                    </td>
                    <td width="10%"></td>
                    <td width="40%" style="text-align: center !important;border-top: 2px solid #000;">
                        <p>Firma de la Contrayente</p>
                    </td>
                    <td width="5%"></td>
                </tr>

            </table>
        </div>
    </div>

    <div class="section">
        <h2 style="text-align: center !important;">TESTIGOS</h2>
        <table style="border-collapse: collapse;">
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Ofrece la información testimonial de:  </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Ofrece la información testimonial de:  </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Don(ña) <span class="bold">{{ $data->pri_test_sol_nombre }}</span> </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Don(ña) <span class="bold">{{ $data->seg_test_sol_nombre }}</span> </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Natural de <span class="bold">
                            {{ $data->pri_test_sol_natural }}</span>
                    </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Natural de <span
                            class="bold">{{ $data->seg_test_sol_natural }}</span>
                    </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Identificado(a) con <span class="bold">{{ $data->pri_test_sol_di }}</span>
                    </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Identificado(a) con <span class="bold">{{ $data->seg_test_sol_di }}</span>
                    </p>
                </td>
            </tr>
            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">de Nacionalidad <span
                            class="bold">{{ $data->pri_test_sol_nacionalidad == 'P' ? 'PERUANA' : 'EXTRANJERA' }}</span>
                    </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">de Nacionalidad <span
                            class="bold">{{ $data->seg_test_sol_nacionalidad == 'P' ? 'PERUANA' : 'EXTRANJERA' }}</span>
                    </p>
                </td>
            </tr>

            <tr class="no-border-table" style="vertical-align: top; margin: 0; padding: 0;">
                <td class="fila">
                    <p style="margin: 0;">Domicilio(a) en <span class="bold">{{ $data->pri_test_sol_domicilio }}</span> </p>
                </td>
                <td class="fila">
                    <p style="margin: 0;">Domicilio(a) en <span class="bold">{{ $data->seg_test_sol_domicilio }}</span> </p>
                </td>
            </tr>

        </table>
        <br>
        <p style="text-align: justify; margin: 0; padding: 0;">
            Quienes declaramos conocer a los recurrentes don  <span class="bold">{{ $data->nombre_del_contrayente }}</span>  y doña <span class="bold">{{ $data->nombre_dela_contrayente }}</span> desde hace más de tres años, dando constancia de que son: <span class="bold">SOLTEROS </span>y que no
            tienen impedimento alguno para contraer Matrimonio Civil, lo cual ratificamos en nuestra Declaración y para
            dar
            fe de lo manifestado, firmamos la presente.
        </p>
        <br>
        <br>

        <div class="firmas">
            <table style="width: 100%;">
                <tr class="no-border-table">
                    <td width="5%"></td>
                    <td width="40%" style="text-align: center !important;border-top: 2px solid #000;">
                        <p>Firma del Testigo</p>
                    </td>
                    <td width="10%"></td>
                    <td width="40%" style="text-align: center !important;border-top: 2px solid #000;">
                        <p>Firma del Testigo</p>
                    </td>
                    <td width="5%"></td>
                </tr>

            </table>
        </div>
    </div>
    </div>
    <div style="page-break-before: always;">
    <div class="section">
        <p>PUBLICACIÓN DE EDICTOS MATRIMONIALES</p>
        {{-- <h3>PUBLICACIÓN DE EDICTOS MATRIMONIALES</h3> --}}

        <p>
            Publíquese los avisos de Ley, dejándose constancia.<br>
            San Borja,  <u>&nbsp;&nbsp;  {{ \Carbon\Carbon::parse(str_replace('/', '-', $data->fecha_solicitud) )->locale('es')->isoFormat('D [de] MMMM [de] YYYY') }}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><br><br><br><br>
            <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u>
        </p>
    </div>

    <div class="section">
        <P>CAPACIDAD DE LOS PRETENDIENTES</P>
        <p style="text-align: justify; margin: 0; padding: 0;">
            Efectuadas las publicaciones según consta en el expediente, y no habiéndose efectuado oposición alguna, declárese la capacidad de los pretendientes.
        </p>
        <p>
            Don <span class="bold">{{ $data->nombre_del_contrayente }}</span><br>
            Doña <span class="bold">{{ $data->nombre_dela_contrayente }}</span> <br><br>
            pudiendo contraer Matrimonio Civil dentro los cuatro meses siguientes a partir de la fecha según Ley.
        </p>
        <p>San Borja, ___________________________________</p>
    </div>
    <br>
    <table style="width: 100%; margin: 0 auto">
        <tr class="no-border-table">
            <td >
                <img src="img/firma/1.png" alt="" style="height: 120px; width: 220px; margin: 0 auto">
            </td>
        </tr>
    </table>
    <div class="section">
        <P>DISPENSA DE PUBLICACIÓN DE EDICTOS</P>
        <p style="text-align: justify; margin: 0; padding: 0;">
            Los pretendientes han sido dispensados de la publicación de Edictos Matrimoniales, por Resolución de Alcaldía Nº _____________ de fecha ________________________.
        </p>
        <p>Por lo tanto, procédase a la Celebración del Matrimonio Civil solicitado.</p><br><br><br>
        <p>_____________________________<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALCALDE</p>

        <p>Matrimonio celebrado el día ________ de _______________________ del ___________.</p>
    </div>
</div>
</body>

</html>
