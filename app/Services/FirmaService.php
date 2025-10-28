<?php

namespace App\Services;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class FirmaService
{
    public function guardar_firma(UploadedFile $file)
    {
        if (!$file) {
            throw new \Exception('No se permiten archivos vacíos');
        }
        // Carpeta de destino dentro de "public"
        $ruta = public_path('img/firma');
        // Crear carpeta si no existe
        if (!file_exists($ruta)) {
            mkdir($ruta, 0755, true);
        }
        // Nombre fijo del archivo
        $nombreArchivo = '1.png';
        // Mover y reemplazar si ya existe
        $file->move($ruta, $nombreArchivo);
        // Retornar la URL accesible públicamente
        $url = asset('img/firma/' . $nombreArchivo);

        return response()->json([
            'success' => true,
            'mensaje' => 'Firma guardada correctamente',
            'url' => $url
        ]);
    }

}
