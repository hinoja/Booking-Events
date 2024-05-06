<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsOrganisator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        if ($request->user()->role_id !== 2) {
            abort(403, 'Vous n\'avez pas le droit d\'acceder  a cette partie de la plateforme,Seuls les Organisateurs d\'évènements  y sont autorisés');
        }

        return $next($request);

    }
}
