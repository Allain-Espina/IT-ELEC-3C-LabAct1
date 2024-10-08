<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // if ($request->input('role') !== 'admin') {
        //     return dd('Unauthorized Access!');
        // }

        if(!Auth::check()){
            return redirect("login");
        }

        //Middleware Parameters
        //$role !== 'user';
        //$role !== Auth::user()->role
        if (Auth::user()->role !== $role) {
            // return dd('Unauthorized Access!');
            return redirect(url('/'));
        } 
        
        return $next($request);

        // if (Auth::user()->role == 'user') {
        //     // return redirect(url('/'));
        //     return dd('Unauthorized Access!');
        // }

        // Condition 2: Redirect users with a specific permission to /user/profile
        // if (Auth::user()->role == 'admin') {
        //     return $next($request);
        // }

        // Default redirect path
        //return redirect()->route('home');
    }
}
