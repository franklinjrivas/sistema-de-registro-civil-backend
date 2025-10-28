<?php

namespace App\Http\Controllers;
use App\Services\FirmaService;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class FirmaController extends Controller
{
    protected $firmaService;

    public function __construct(FirmaService $firmaService)
    {
        $this->firmaService = $firmaService;
    }
    private UploadedFile $firma;
    public function guardar_firma(Request $request)
    {
        $this->firma =  $request->file('firma');

        $guardado = $this->firmaService->guardar_firma( $this->firma);
        return response()->json([
            'success' => true,
            'mensaje' => 'Datos obtenidos con éxito',
            'data' => $guardado
        ]);
    }
}
