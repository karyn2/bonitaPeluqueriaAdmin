<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (auth()->check()) {
            $userRole = auth()->user()->role;

            if (in_array($userRole, $roles)) {
                // Usuario con el rol permitido, continuar con la solicitud
                return $next($request);
            } elseif ($userRole === 'admin') {
                // Usuario con el rol de "admin", redirigir a HOME
                return redirect()->route('home'); 
            }
        }

        // Usuario no autenticado o sin el rol correcto, redirigir a '/'
        return redirect()->to('/');
        
    }
}
