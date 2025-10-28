<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Services\DateTime;
use App\Services\DateTimeZone;
use Carbon\Carbon;
use DateTime as GlobalDateTime;
use DateTimeZone as GlobalDateTimeZone;
use App\Models\Departamentos;

class RegistroService
{
    private $auditoriaSistemaService;

    public function __construct(AuditoriaSistemaService $auditoriaSistemaService)
    {
        $this->auditoriaSistemaService = $auditoriaSistemaService;
    }

    public function  list_dep()
    {
        $dpto = DB::select(
            'exec dbo.rec_sp_dpto_lista ?',
            [null]
        );
        return [
            'dep' => $dpto,
        ];
    }

    public function buscar_departamentos(?string $dato)
    {
        $data = DB::select(
            'exec dbo.rec_sp_buscar_departamento ?',
            [$dato]
        );
        return [
            'dep' => $data,
        ];
    }

    public function buscar_provincias(?string $dato, ?int $id)
    {
        $data = DB::select(
            'exec dbo.rec_sp_buscar_provincia ?,?',
            [$dato, $id]
        );
        return [
            'prov' => $data,
        ];
    }

    public function buscar_distritos(?string $dato, ?int $id)
    {
        $data = DB::select(
            'exec dbo.rec_sp_buscar_distrito ?,?',
            [$dato, $id]
        );
        return [
            'dist' => $data,
        ];
    }

    public function grabar_departamentos(?string $dato)
    {
        $data = DB::select(
            'exec dbo.rec_sp_grabar_departamento ?',
            [$dato]
        );

        $modelo = Departamentos::where('CO_DPTO', Departamentos::max('CO_DPTO'))->first();

        $this->auditoriaSistemaService->save_log_auditoria_dml(null, $modelo, null, 'I');

        return [
            'dep' => $data,
        ];
    }

    public function grabar_provincias(?string $dato, ?int $id)
    {
        $data = DB::select(
            'exec dbo.rec_sp_grabar_provincia ?,?',
            [$dato, $id]
        );
        return [
            'pro' => $data,
        ];
    }

    public function grabar_distritos(?string $dato, ?int $id)
    {
        $data = DB::select(
            'exec dbo.rec_sp_grabar_distrito ?,?',
            [$dato, $id]
        );
        return [
            'dis' => $data,
        ];
    }

    public function select_celebrante()
    {
        $data = DB::select(
            'exec dbo.rec_sp_celebrante_lista',
            []
        );
        $tipodoc = DB::select(
            ' exec dbo.rec_sp_tipo_doc_lista',
            []
        );
        return [
            'celebrantes' => $data,
            'tdocumento' => $tipodoc,
        ];
    }

    public function guardar_celebrante(?array $datos)
    {
        $data = DB::select(
            'exec dbo.rec_sp_guardar_celebrante ?,?,?,?,?,?,?,?',
            [$datos["parameter"]["codigo"], $datos["parameter"]["apepcel"], $datos["parameter"]["apemcel"], $datos["parameter"]["celebrante"], $datos["parameter"]["cargocel"], fechaJuliana(Carbon::create(date('d-m-Y'))), null,  $datos["JWT_username"]]
        );
        return [
            'celebrantes' => $data,
        ];
    }

    public function buscar_celebrante(?array $datos)
    {
        $data = DB::select(
            'exec dbo.rec_sp_buscar_celebrante ?,?,?,?',
            [$datos["parameter"]["apepcel"], $datos["parameter"]["apemcel"], $datos["parameter"]["celebrante"], $datos["parameter"]["cargocel"]]
        );
        return [
            'celebrantes' => $data,
        ];
    }

    public function  list_prov(int $id)
    {
        $provincias = DB::select(
            'exec dbo.rec_sp_prov_lista ?,?',
            [$id, null]
        );
        return [
            'prov' => $provincias,
        ];
    }

    public function  list_dist(int $id)
    {
        $distrito = DB::select(
            'exec dbo.rec_sp_dist_lista ?,?',
            [$id, null]
        );
        return [
            'dist' => $distrito,
        ];
    }

    public function list_selects()
    {
        $dpto = DB::select(
            'exec dbo.rec_sp_dpto_lista ?',
            [null]
        );
        $lugar = DB::select(
            'exec dbo.rec_sp_lugar_lista',
            []
        );
        $celebrantes = DB::select(
            'exec dbo.rec_sp_celebrante_lista',
            []
        );
        $estados = DB::select(
            'exec dbo.rec_sp_estados_lista',
            []
        );
        $registradores = DB::select(
            'exec dbo.rec_sp_registradores_lista',
            []
        );
        $generos = DB::select(
            'exec dbo.rec_sp_generos_lista', /////**** */
            []
        );
        $macionalidades = DB::select(
            'exec dbo.rec_sp_nacionalidades_lista',
            []
        );
        $tipodoc = DB::select(
            ' exec dbo.rec_sp_tipo_doc_lista',
            []
        );
        $nivelinstru = DB::select(
            'exec dbo.rec_sp_instruccion_lista',
            []
        );
        $unionconyu = DB::select(
            'exec dbo.rec_sp_union_cony_lista',
            []
        );
        $estadocivil = DB::select(
            'exec dbo.rec_sp_estado_civil_lista',
            []
        );
        $leerescri = DB::select(
            'exec dbo.rec_sp_leer_escr_lista',
            []
        );
        return [
            'dpto' => $dpto,
            'lugar' => $lugar,
            'celebrantes' => $celebrantes,
            'estados' => $estados,
            'registradores' => $registradores,
            'generos' => $generos,
            'macionalidades' => $macionalidades,
            'tipodoc' => $tipodoc,
            'nivelinstru' => $nivelinstru,
            'unionconyu' => $unionconyu,
            'estadocivil' => $estadocivil,
            'leerescri' => $leerescri,
        ];
    }

    public function guardar_matrimonio(?array $datos)
    {
        $info = [];
        $info = $datos['info'];
        $el =  $info["apepatel"] . ' ' .  $info["apematel"]  . ', ' .  $info["nombreel"];
        $ella = $info["apepatella"] . ' ' .   $info["apematella"] . ', ' .   $info["nombreella"];
        $data = DB::select(
            'exec dbo.rec_sp_guardar_matrimonio ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?',
            [$info["tipo"], $info["id"], $info["anioexp"], $info["numeroexp"], $info["anio"], $info["libro"], $info["folio"], $el, $ella, intval($info["iddepcomple"]), intval($info["idprocomple"]), intval($info["iddiscomple"]), $info["orc"], fechaJuliana(Carbon::create($info["fecharegistro"])), intval($info["idlugar"]),  fechaJuliana(Carbon::create($info["fechacere"])), intval($info["costo"]), intval($info["idceleb"]), intval($info["estado"]), intval($info["idregistrador"]), $info["tmatrimonio"], $info["tconvivencia"], $info["thijo"], intval($info["nhijos"]), $info["apepatel"],  $info["apematel"],  $info["nombreel"], $info["direccionel"], intval($info["iddepel"]), intval($info["idproel"]), intval($info["iddisel"]), fechaJuliana(Carbon::create($info["fechanacel"])), intval($info["edadel"]), $info["generoel"], $info["nacel"], intval($info["iddepelnac"]), intval($info["idproelnac"]), intval($info["iddiselnac"]), intval($info["idtipodocel"]), $info["numerodoc"], intval($info["idinstruccionel"]), $info["ocupacionel"], $info["telefonoel"], $info["correoel"], intval($info["idunionel"]), intval($info["estadocivilel"]), $info["leerel"], $info["apepatella"], $info["apematella"], $info["nombreella"], $info["direccionella"], intval($info["iddepella"]), intval($info["idproella"]), intval($info["iddisella"]), fechaJuliana(Carbon::create($info["fechanacella"])), intval($info["edadella"]), $info["generoella"],  $info["nacella"], intval($info["iddepellanac"]), intval($info["idproellanac"]), intval($info["iddisellanac"]), intval($info["idtipodocella"]), $info["numerodocella"],  $info["idinstruccionella"], $info["ocupacionella"], $info["telefonoella"], $info["correoella"], $info["idunionella"], $info["estadocivilella"], $info["leerella"], $info["apepatteselsol"], $info["apematetselsol"], $info["nombretselsol"], $info["directeselsol"], intval($info["idtipodocteselsol"]), $info["numerodocteselsol"], $info["idnacteselsol"], $info["naturalteselsol"], $info["apepattesellasol"], $info["apematetsellasol"], $info["nombretsellasol"], $info["directesellasol"], intval($info["idtipodoctesellasol"]), $info["numerodoctesellasol"], $info["idnactesellasol"], $info["naturaltesellasol"], $info["apepatteselcre"], $info["apematetselcre"], $info["nombretselcre"], $info["directeselcre"], intval($info["idtipodocteselcre"]), $info["numerodocteselcre"], $info["idnacteselcre"], $info["naturalteselcre"], intval($info["edadteselcre"]), $info["apepattesellacer"], $info["apematetsellacer"], $info["nombretsellacer"], $info["directesellacer"], intval($info["idtipodoctesellacer"]), $info["numerodoctesellacer"], $info["idnactesellacer"], $info["naturaltesellacer"], intval($info["edadtesellacre"]), 1, $datos["JWT_username"], fechaJuliana(Carbon::create($info["fechacreado"])), str_replace(':', '', $info["horacere"]), $info["idkitcken"], $info["direccioncere"], $info["obs"], $info["aniotramexp"], $info["numerotramexp"]]

        );
        if (!$data) validationError('Error inesperado..');

        if ($data[0]->success !== '1') validationError($data[0]->mensaje);

        return [
            'respuesta' => $data,
        ];
    }

    public function consultar_matrimonio(?int $id)
    {
        $data = DB::select(
            'exec dbo.regcivil_editar_partida_matrimonial ?',
            [$id]
        );
        return [
            'consulta' => $data,
        ];
    }

    public function cerrar_proceso(?string $id)
    {
        $data = DB::select(
            'exec dbo.regcivil_cerrar_proceso_matrimonial ?',
            [$id]
        );
        return [
            'data' => $data,
        ];
    }

    public function estado_listado()
    {
        $estados = DB::select(
            'exec dbo.rec_sp_estados_lista',
            []
        );
        return [
            'estados' => $estados,
        ];
    }
}
