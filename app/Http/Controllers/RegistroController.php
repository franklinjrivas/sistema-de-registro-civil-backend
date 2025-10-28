<?php

namespace App\Http\Controllers;

use App\Services\RegistroService;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    private $registroService;
    private $authService;
    public function __construct(RegistroService $registroService)
    {
        $this->registroService = $registroService;
    }

    public function list_selects(Request $request)
    {
        $listados = $this->registroService->list_selects();

        return response()->json([
            'success' => true,
            'mensaje' => 'Listados obtenidos con éxito',
            'data' => $listados
        ]);
    }

    public function list_dep(Request $request)
    {
        $departamentos = $this->registroService->list_dep();

        return response()->json([
            'success' => true,
            'mensaje' => 'Listados Departamentos obtenidos con éxito',
            'data' => $departamentos
        ]);
    }

    public function list_prov(Request $request)
    {
        $id = $request->id;
        $provincias = $this->registroService->list_prov($id);

        return response()->json([
            'success' => true,
            'mensaje' => 'Listados provincias obtenidos con éxito',
            'data' => $provincias
        ]);
    }

    public function list_dist(Request $request)
    {
        $id = $request->id;
        $provincias = $this->registroService->list_dist($id);

        return response()->json([
            'success' => true,
            'mensaje' => 'Listados distritos obtenidos con éxito',
            'data' => $provincias
        ]);
    }

    public function guardar_matrimonio(Request $request)
    {
        $datos =  $request->all();
        $data = $this->registroService->guardar_matrimonio($datos);

        return response()->json([
            'success' => true,
            'mensaje' => $data['respuesta'][0]->mensaje,
            'data' => $data
        ]);
    }

    public function consultar_matrimonio(Request $request)
    {
        $id = $request->id;
        $provincias = $this->registroService->consultar_matrimonio($id);

        return response()->json([
            'success' => true,
            'mensaje' => 'Listados distritos obtenidos con éxito',
            'data' => $provincias
        ]);
    }

    public function cerrar_proceso(Request $request)
    {
        $data = $this->registroService->cerrar_proceso($request->id);

        return response()->json([
            'success' => true,
            'mensaje' => 'Procesados con éxito',
            'data' => $data
        ]);
    }

    public function estado_listado(Request $request)
    {
        $data = $this->registroService->estado_listado();

        return response()->json([
            'success' => true,
            'mensaje' => 'lista de estados',
            'data' => $data
        ]);
    }

    public function buscar_departamentos(Request $request)
    {
        $dpto = $request->dpto;

        $departamento = $this->registroService->buscar_departamentos($dpto);

        return response()->json([
            'success' => true,
            'mensaje' => 'Datos obtenidos con éxito',
            'data' => $departamento
        ]);
    }
    public function buscar_provincias(Request $request)
    {
        $prov = $request->prov;
        $dep = $request->dep;

        $departamento = $this->registroService->buscar_provincias($prov, $dep);

        return response()->json([
            'success' => true,
            'mensaje' => 'Datos obtenidos con éxito',
            'data' => $departamento
        ]);
    }

    public function buscar_distritos(Request $request)
    {
        $dist = $request->dist;
        $pro = $request->prov;

        $distritos = $this->registroService->buscar_distritos($dist, $pro);

        return response()->json([
            'success' => true,
            'mensaje' => 'Datos obtenidos con éxito',
            'data' => $distritos
        ]);
    }
    public function grabar_departamentos(Request $request)
    {
        $dpto = $request->dpto;

        $departamento = $this->registroService->grabar_departamentos($dpto);

        return response()->json([
            'success' => true,
            'mensaje' => 'Datos obtenidos con éxito',
            'data' => $departamento
        ]);
    }

    public function grabar_provincias(Request $request)
    {
        $prov = $request->prov;
        $dep = $request->id;
        $provincia = $this->registroService->grabar_provincias($prov, $dep);

        return response()->json([
            'success' => true,
            'mensaje' => 'Datos obtenidos con éxito',
            'data' => $provincia
        ]);
    }

    public function grabar_distritos(Request $request)
    {
        $dist = $request->dist;
        $dep = $request->id;
        $distrito = $this->registroService->grabar_distritos($dist, $dep);

        return response()->json([
            'success' => true,
            'mensaje' => 'Datos obtenidos con éxito',
            'data' => $distrito
        ]);
    }

    public function select_celebrante(Request $request)
    {
        $celebrantes = $this->registroService->select_celebrante();

        return response()->json([
            'success' => true,
            'mensaje' => 'Datos obtenidos con éxito',
            'data' => $celebrantes
        ]);
    }
    public function guardar_celebrante(Request $request)
    {
        $datos =  $request->all();
        $guardado = $this->registroService->guardar_celebrante($datos);

        return response()->json([
            'success' => true,
            'mensaje' => 'Datos obtenidos con éxito',
            'data' => $guardado
        ]);
    }

    public function buscar_celebrante(Request $request)
    {
        $datos =  $request->all();
        $guardado = $this->registroService->buscar_celebrante($datos);

        return response()->json([
            'success' => true,
            'mensaje' => 'Datos obtenidos con éxito',
            'data' => $guardado
        ]);
    }
}
