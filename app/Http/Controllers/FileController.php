<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\FilesService;

class FileController extends Controller
{
    private $filesService;

    public function __construct(FilesService $filesService)
    {
        $this->filesService = $filesService;
    }

    public function extesiones_metadatos(Request $request)
    {
        $data = $this->filesService->extesiones_metadatos();

        return response()->json($data);
    }
}
