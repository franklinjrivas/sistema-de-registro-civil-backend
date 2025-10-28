<?php
    $APP_URL = 'http://127.0.0.1:8000';
    $URL_FRONTEND = 'http://localhost:4200';
    $HOST_INTRANET_MSB = 'https://qa-intranet.msb.gob.pe';
    $HOST_EXTRANET_MSB = 'https://qa-extranet.msb.gob.pe';
    $BASE_URL_AUTH = 'http://qa-apiautenticacion.msb.gob.pe';

    return [
<<<<<<< HEAD
        'SISTEMA_MSB' => 'SISRC',
=======
        'SISTEMA_MSB' => '',
>>>>>>> c24c53149c369447608b1a2d54bf721b20c1ae9a
        'APP_URL' => $APP_URL,
        'URL_FRONTEND' => $URL_FRONTEND,
        'HOST_INTRANET_MSB' => $HOST_INTRANET_MSB,
        'HOST_EXTRANET_MSB' => $HOST_EXTRANET_MSB,
        'BASE_URL_AUTH' => $BASE_URL_AUTH,
        'USER_BASIC_AUTH' => '4UTH3NT1C4C10N@MSB*2024_',
        'PWD_BASIC_AUTH' => '*mUnC!:SOH251MzX@nkU9Ann3',
        'GOOGLE_RECAPTCHA_VERIFY_URL' => 'https://www.google.com/recaptcha/api/siteverify',
<<<<<<< HEAD
        'GOOGLE_RECAPTCHA_KEY_PRIVATE' => '6LcugvIqAAAAAEdrmqhhyBxpRJ66k_lVkLOrxu6d',
=======
        'GOOGLE_RECAPTCHA_KEY_PRIVATE' => '',
>>>>>>> c24c53149c369447608b1a2d54bf721b20c1ae9a
        'MIN_SCORE_RECAPTCHA' => 0.5,

        // AUTH
        'URL_AUTH_LOGIN_API' => $BASE_URL_AUTH.'/api/auth/login',
        'URL_AUTH_LOGOUT_API' => $BASE_URL_AUTH.'/api/auth/logout',
        'URL_VALIDATE_JWT_API' => $BASE_URL_AUTH.'/api/auth/validate-jwt',
        'URL_CHECK_INTRANET_URL_API' => $BASE_URL_AUTH.'/api/auth/check-intranet-url',

        // HOME
        'URL_ROLES_USER_X_SISTEMA_API' => $BASE_URL_AUTH.'/api/home/roles-by-user-sistema',
        'URL_ROLES_GENERATE_MENU_API' => $BASE_URL_AUTH.'/api/home/generate-menu',
        'URL_CHANGE_ROL_API' => $BASE_URL_AUTH.'/api/home/change-rol',

        // FILE
        'URL_EXTENSIONES_METADATOS_API' => $BASE_URL_AUTH.'/api/extensiones-metadatos',
    ];
