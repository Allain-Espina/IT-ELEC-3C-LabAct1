<?php

use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\VerifyAdmin;
use App\Http\Middleware\VerifyRole;
use App\Http\Middleware\VerifyUser;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //Assigned to all Routes Automatically
        //$middleware->append(EnsureTokenIsValid::class);

        //Middleware Aliases
        // $middleware->alias([
        //     'role' => VerifyRole::class,
        //     'validity' => EnsureTokenIsValid::class
        // ]);

        $middleware->alias([
            'hasRole' => VerifyRole::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
