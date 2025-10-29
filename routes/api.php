<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\BasicAuthentication;
use App\Http\Middleware\JWTAuthentication;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\FirmaController;
use App\Http\Middleware\AuditoriaEndpoint;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/extensiones-metadatos', [FileController::class, 'extesiones_metadatos'])->middleware(BasicAuthentication::class);

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->middleware(BasicAuthentication::class);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware(JWTAuthentication::class);
    Route::post('/check-intranet-url', [AuthController::class, 'check_intranet_url'])->middleware(JWTAuthentication::class);
    Route::post('/validate-jwt', [AuthController::class, 'validate_jwt'])->middleware(JWTAuthentication::class);
});

Route::middleware(JWTAuthentication::class)->prefix('home')->group(function () {
    Route::post('/roles', [HomeController::class, 'roles']);
    Route::post('/menu', [HomeController::class, 'menu']);
    Route::post('/change-rol', [HomeController::class, 'change_rol']);
});


Route::middleware(JWTAuthentication::class)->prefix('persona')->group(function () {
    Route::post('/list-personas', [PersonaController::class, 'list_personas']);
});
Route::middleware(JWTAuthentication::class)->prefix('registro')->group(function () {
    Route::post('/list-select', [RegistroController::class, 'list_selects']);
    Route::post('/list-dep', [RegistroController::class, 'list_dep']);
    Route::post('/list-prov', [RegistroController::class, 'list_prov']);
    Route::post('/list-dist', [RegistroController::class, 'list_dist']);
    Route::post('/guardar-matrimonio', [RegistroController::class, 'guardar_matrimonio'])->middleware([JWTAuthentication::class, AuditoriaEndpoint::class]);
    Route::post('/consultar-matrimonio', [RegistroController::class, 'consultar_matrimonio']);
    Route::post('/cerrar-proceso', [RegistroController::class, 'cerrar_proceso'])->middleware([JWTAuthentication::class, AuditoriaEndpoint::class]);
    Route::post('/estado-listado', [RegistroController::class, 'estado_listado']);
    Route::post('/buscar-departamentos', [RegistroController::class, 'buscar_departamentos']);
    Route::post('/buscar-provincias', [RegistroController::class, 'buscar_provincias']);
    Route::post('/buscar-distritos', [RegistroController::class, 'buscar_distritos']);
    Route::post('/grabar-departamentos', [RegistroController::class, 'grabar_departamentos'])->middleware([JWTAuthentication::class, AuditoriaEndpoint::class]);
    Route::post('/grabar-provincias', [RegistroController::class, 'grabar_provincias'])->middleware([JWTAuthentication::class, AuditoriaEndpoint::class]);
    Route::post('/grabar-distritos', [RegistroController::class, 'grabar_distritos'])->middleware([JWTAuthentication::class, AuditoriaEndpoint::class]);
    Route::post('/select-celebrante', [RegistroController::class, 'select_celebrante']);
    Route::post('/guardar-celebrante', [RegistroController::class, 'guardar_celebrante'])->middleware([JWTAuthentication::class, AuditoriaEndpoint::class]);
    Route::post('/buscar-celebrante', [RegistroController::class, 'buscar_celebrante']);
    Route::post('/save-firma', [RegistroController::class, 'guardar_firma']);
});
// GENERADOR DE PDF
Route::prefix('pdf')->group(function () {
    // Route::get('/{tipo_pdf}/{identificador}', [PDFController::class, 'buildPDF']);
    Route::get('/{tipo_pdf}/{identificador}', [PDFController::class, 'buildPDF']);

});

Route::middleware(JWTAuthentication::class)->prefix('firma')->group(function () {

    Route::post('/save-firma', [FirmaController::class, 'guardar_firma']);

});

