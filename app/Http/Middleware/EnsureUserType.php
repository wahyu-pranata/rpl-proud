<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $userType): Response
    {
        $user = Auth::user();

        if($user->type == 'super_admin')
        {
            return $next($request);
        }

        if(!($user->type == $userType))
        {
            abort(403, "Access denied");
            return redirect('errors/403');
        }

        return $next($request);
    }
}
