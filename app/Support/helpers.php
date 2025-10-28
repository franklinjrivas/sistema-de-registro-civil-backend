<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Services\AuthService;
use Carbon\Carbon;
=======
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Services\AuthService;
>>>>>>> c24c53149c369447608b1a2d54bf721b20c1ae9a

if (!function_exists('log_info')) {
    function log_info($message)
    {
        Log::info($message);
    }
}

if (!function_exists('datos_for_aduditoria')) {
    function datos_for_aduditoria(Request $request)
    {
        $authService = App::make(AuthService::class);
        $auth = $authService->validateJWT($request->JWT_token);
        $username = 'system';

        if (!$auth || !$auth['success'] || !$auth['data']) {
            log_info('helpers -> datos_for_aduditoria -> $auth:');
            log_info($auth);
        } else {
            $username = $auth['data']['username'] ?? 'system';
        }

        return [
            'ip' => request()->ip(),
            'user_agent' => request()->header('User-Agent'),
            'username' => $username
        ];
    }
<<<<<<< HEAD
    if (!function_exists('fechaJuliana')) {
        function fechaJuliana(Carbon $fecha): int
        {
            $fechaFormateada = $fecha->format('d-m-Y');

            $rs = DB::connection('sqlsrv')->select('SELECT dbo.fecha_magic_int(?) AS resultado', [
                $fechaFormateada
            ]);

            return (int)$rs[0]->resultado ?? 0;
        }
    }

=======
>>>>>>> c24c53149c369447608b1a2d54bf721b20c1ae9a
}
