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
        try {
            $listados = $this->registroService->list_selects();

            return response()->json([
                'success' => true,
                'mensaje' => 'Listados obtenidos con éxito',
                'data' => $listados
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function list_dep(Request $request)
    {
        try {
            $departamentos = $this->registroService->list_dep();

            return response()->json([
                'success' => true,
                'mensaje' => 'Listados Departamentos obtenidos con éxito',
                'data' => $departamentos
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function list_prov(Request $request)
    {
        try {
            $id = $request->id;
            $provincias = $this->registroService->list_prov($id);

            return response()->json([
                'success' => true,
                'mensaje' => 'Listados provincias obtenidos con éxito',
                'data' => $provincias
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function list_dist(Request $request)
    {
        try {
            $id = $request->id;
            $provincias = $this->registroService->list_dist($id);

            return response()->json([
                'success' => true,
                'mensaje' => 'Listados distritos obtenidos con éxito',
                'data' => $provincias
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function guardar_matrimonio(Request $request)
    {
        try {
            $datos =  $request->all();
            // $JWT_token = $request->JWT_token;
            // $usuario = $this->authService->user_magic_ad_match($JWT_token);
            $data = $this->registroService->guardar_matrimonio($datos);

            return response()->json([
                'success' => true,
                // 'mensaje' => 'Datos guardados con éxito',
                'mensaje' => $data['respuesta'][0]->mensaje,
                'data' => $data
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function consultar_matrimonio(Request $request)
    {
        try {

            $id = $request->id;
            $provincias = $this->registroService->consultar_matrimonio($id);

            return response()->json([
                'success' => true,
                'mensaje' => 'Listados distritos obtenidos con éxito',
                'data' => $provincias
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function cerrar_proceso(Request $request)
    {
        try {

            $data = $this->registroService->cerrar_proceso($request->id);

            return response()->json([
                'success' => true,
                'mensaje' => 'Procesados con éxito',
                'data' => $data
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }

    public function estado_listado(Request $request)
    {
        try {

            $data = $this->registroService->estado_listado();

            return response()->json([
                'success' => true,
                'mensaje' => 'lista de estados',
                'data' => $data
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }

    public function buscar_departamentos(Request $request)
    {
        try {
            $dpto = $request->dpto;

            $departamento = $this->registroService->buscar_departamentos($dpto);

            return response()->json([
                'success' => true,
                'mensaje' => 'Datos obtenidos con éxito',
                'data' => $departamento
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function buscar_provincias(Request $request)
    {
        try {
            $prov = $request->prov;
            $dep = $request->dep;

            $departamento = $this->registroService->buscar_provincias($prov, $dep);

            return response()->json([
                'success' => true,
                'mensaje' => 'Datos obtenidos con éxito',
                'data' => $departamento
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function buscar_distritos(Request $request)
    {
        try {
            $dist = $request->dist;
            $pro = $request->prov;

            $distritos = $this->registroService->buscar_distritos($dist, $pro);

            return response()->json([
                'success' => true,
                'mensaje' => 'Datos obtenidos con éxito',
                'data' => $distritos
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function grabar_departamentos(Request $request)
    {
        try {
            $dpto = $request->dpto;

            $departamento = $this->registroService->grabar_departamentos($dpto);


            return response()->json([
                'success' => true,
                'mensaje' => 'Datos obtenidos con éxito',
                'data' => $departamento
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function grabar_provincias(Request $request)
    {
        try {
            $prov = $request->prov;
            $dep = $request->id;
            $provincia = $this->registroService->grabar_provincias($prov, $dep);


            return response()->json([
                'success' => true,
                'mensaje' => 'Datos obtenidos con éxito',
                'data' => $provincia
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function grabar_distritos(Request $request)
    {
        try {
            $dist = $request->dist;
            $dep = $request->id;
            $distrito = $this->registroService->grabar_distritos($dist, $dep);


            return response()->json([
                'success' => true,
                'mensaje' => 'Datos obtenidos con éxito',
                'data' => $distrito
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function select_celebrante(Request $request)
    {
        try {

            $celebrantes = $this->registroService->select_celebrante();


            return response()->json([
                'success' => true,
                'mensaje' => 'Datos obtenidos con éxito',
                'data' => $celebrantes
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function guardar_celebrante(Request $request)
    {
        try {
            $datos =  $request->all();
            $guardado = $this->registroService->guardar_celebrante($datos);


            return response()->json([
                'success' => true,
                'mensaje' => 'Datos obtenidos con éxito',
                'data' => $guardado
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }
    public function buscar_celebrante(Request $request)
    {
        try {
            $datos =  $request->all();
            $guardado = $this->registroService->buscar_celebrante($datos);


            return response()->json([
                'success' => true,
                'mensaje' => 'Datos obtenidos con éxito',
                'data' => $guardado
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }




}
