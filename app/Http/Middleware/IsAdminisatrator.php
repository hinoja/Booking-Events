<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdminisatrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //avoid to admin
        if ($request->user()->role_id == 1) {
            abort(403, 'Les Administrateurs ne sont pas autorisés pour d\'accéder à cette page ');
        }

        return $next($request);
    }
}
