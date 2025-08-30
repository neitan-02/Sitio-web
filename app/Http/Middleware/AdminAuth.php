<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica si el usuario está autenticado
        if (auth()->check()) {
            // Verifica si el usuario tiene el rol de administrador
            if (auth()->user()->role == 'admin') {
                return $next($request);
            }
        }
        
        // Si el usuario no está autenticado o no es administrador, redirige a la página de usuarios
        return redirect()->route('usuarios'); // Redirige a la ruta usuarios
    }
}
