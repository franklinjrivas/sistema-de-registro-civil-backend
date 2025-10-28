<?php

namespace App\Services;

class FilesService
{
    protected $httpService;
    private $user_basic;
    private $pwd_basic;
    private $url_extensiones_metadatos;

    public function __construct(
        HttpService $httpService,
    )
    {
        $this->httpService = $httpService;
        $this->user_basic = config('environment.USER_BASIC_AUTH');
        $this->pwd_basic = config('environment.PWD_BASIC_AUTH');
        $this->url_extensiones_metadatos= config('environment.URL_EXTENSIONES_METADATOS_API');
    }

    public function extesiones_metadatos(): array
    {
        $params = [
            'auth' => [
                $this->user_basic,
                $this->pwd_basic,
            ],
        ];

        return $this->httpService->sendRequest('post', $this->url_extensiones_metadatos, $params, null);
    }
}
