<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListPersonRequest;
use App\Services\PersonService;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    private $personService;

    public function __construct(PersonService $personService)
    {
        $this->personService = $personService;
    }

    public function list_personas(ListPersonRequest $request)
    {
        try {

            // $files = $request->files[0];
            $anio = $request->anio;
            $exp = $request->exp;
            $doc = $request->doc;
            $nombre = $request->nombre;
            $fechadesde = $request->fechadesde;
            $fechahasta = $request->fechahasta;
            $estado = $request->estado;
            $page = $request->page;
            $item_x_page = $request->item_x_page;
            $formato = $request->formato;


            $data = $this->personService->list_personas($exp, $anio, $doc, $nombre, $fechadesde, $fechahasta, $estado,$page, $item_x_page, $formato);

            return response()->json([
                'success' => true,
                'mensaje' => $formato == 'pdf' ? 'PDF Generado con éxito' : 'Personas listadas con éxito',
                'data' => $data
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'mensaje' => $e->getMessage()
            ]);
        }
    }



//     public function saveRequisitosSolicitud(Request $request)
//     {
//         try {
//             $JWT_data = $request->JWT_data;
//             $files = $request->file('files')[0];

//             $savedRequisitos = $this->requisitosSolicitudService->saveRequisitos_by_Solicitud($files);

//             return response()->json([
//                 'success' => true,
//                 'mensaje' => 'Requisitos Guardados Correctamente'
//             ]);
//         } catch (\Throwable $e) {
//             return response()->json([
//                 'success' => false,
//                 'mensaje' => $e->getMessage()
//             ]);
//         }
//     }


//     // img/fotos/firma/ffsdfsdf.img
//     public function saveFile(string $ruta, UploadedFile $file): Files
//     {
//         try {
//             if (!$file) throw new \Exception('No se permiten archivos vacíos');

//             $path = $file->store($ruta);


//             $originalName = $file->getClientOriginalName();

//             if (!$path) throw new \Exception('Error al guardar el archivo: ' . $originalName);

//             [$size, $unidad] = $this->helperService->formatFileSize($file->getSize());

//             return Files::create([
//                 // 'nombre_original' => $originalName,
//                 // 'url_file' => dirname(Storage::url($path)),
//                 // 'storage_path' => dirname($path),
//                 'nombre_file' => basename($path),
//                 // 'size' => $size,
//                 // 'unidad' => $unidad,
//                 // 'mime' => $file->getMimeType()
//             ]);
//         } catch (\Throwable $e) {
//             if (isset($path)) Storage::delete($path);
//             throw new \Exception($e->getMessage());
//         }
//     }
// // php artisan storage:link
}





