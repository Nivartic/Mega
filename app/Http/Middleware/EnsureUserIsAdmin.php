<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if (!$user) {
            abort(403);
        }

        $role = $user->role ?? null;
        $isAdmin = ($role === 'admin') || (property_exists($user, 'is_admin') && (bool) $user->is_admin);

        if (!$isAdmin) {
            abort(403);
        }

        return $next($request);
    }
}

