<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
	\App\Http\Middleware\VerifyCsrfToken::class,
        \App\Http\Middleware\PreflightResponse::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'xogonet'=> \App\Modules\XogonetModule\Middleware\XogonetMiddleware::class,
        'prevent-back-history' => \App\Http\Middleware\PreventBackHistory::class,
        'SuppplierMiddleware' => \App\Http\Middleware\SuppplierMiddleware::class,
        'BuyerMiddleware' => \App\Http\Middleware\BuyerMiddleware::class,
    ];
}
