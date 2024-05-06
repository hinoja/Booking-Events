<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsParticipant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        if ($request->user()->role_id !== 3) {
            abort(403, 'Vous n\'avez pas le droit d\'acceder  a cette partie de la plateforme,Seuls les participants y sont autorisés');
        }

        return $next($request);
    }
}
