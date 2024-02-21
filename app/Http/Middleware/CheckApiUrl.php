<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckApiUrl
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
        if (strpos($request->url(), '/api') !== false) {
            return response()->json(['error' => 'API routes are not accessible.'], 403);
        }

        return $next($request);
    }
}
