<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkIfUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $user = $request->user();

        if (is_null($user)){
            abort(404);
        }

        if ($user->role == "admin"){
            return $next($request);
        }

        abort(403);

    }
}
