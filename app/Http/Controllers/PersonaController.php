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
    }

}





