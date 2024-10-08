<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //redirect(url('/login'));
        
        // dd("Hello from Token Middleware!");

        // if ($request->input('token') !== 'my-secret-token') {
        //     return redirect('/home');
        // }

        //Example
        if ($request->input('token') !== '123') {
            return dd('Token is INVALID!');
        }

        return $next($request);
    }
}

//Token Format in URL -> http://127.0.0.1:8000/?token=123
//Multiple Token Format in URL -> http://127.0.0.1:8000/?token=123&token=456