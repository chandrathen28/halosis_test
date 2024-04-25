<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RequestJsonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(Request $request, Closure $next): \Illuminate\Http\JsonResponse
    {
        if (!$request) {
            return response()->json([
                'status' => 403,
                'message' => 'Parameters must be json.'
            ], 403);
        }

        return $next($request);
    }
}
