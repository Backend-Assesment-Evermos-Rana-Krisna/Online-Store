<?php

namespace App\Http\Middleware;
use Closure;

class RequestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public static $req_time,$mem_usage;
    public function handle($request, Closure $next)
    {
        global $req_time, $mem_usage;
        self::$req_time = microtime(true);
        self::$mem_usage = memory_get_usage();

        return $next($request);
    }
}
