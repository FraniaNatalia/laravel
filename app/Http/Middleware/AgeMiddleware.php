<?php

namespace Creativeobd\Http\Middleware;

use Closure;

class AgeMiddleware
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
