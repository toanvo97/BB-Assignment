<?php

namespace App\Http\Middleware;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Closure;
use Illuminate\Http\Request;

class CheckLoginMiddleware
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
        if (Sentinel::check()) :
            return $next($request);

        else :
            if ($request->is('api/*')) :
                return response()->json(['error' => true, 'message' => 'Please Login', 'data' => ''], 401);
            endif;
            return redirect()->route('user.client.login.index');
        endif;
    }
}
