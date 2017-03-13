<?php

namespace clinica\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Session\Middleware\StartSession::class,
           \Illuminate\View\Middleware\ShareErrorsFromSession::class,


    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \clinica\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \clinica\Http\Middleware\VerifyCsrfToken::class,

        ],

        'auth' => [
            \clinica\Http\Middleware\Authenticate::class,



          ],

        'api' => [
            'throttle:60,1',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \clinica\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \clinica\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,

        'Admin'=> \clinica\Http\Middleware\AdminMiddleware::class,
        'Alumno'=> \clinica\Http\Middleware\AlumnoMiddleware::class,
        'Docente'=> \clinica\Http\Middleware\DocenteMiddleware::class,
        'Invitado'=> \clinica\Http\Middleware\InvitadoMiddleware::class,

    ];
}
