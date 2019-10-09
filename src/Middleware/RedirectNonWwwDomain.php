<?php

namespace Webflorist\Boilerplate\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class RedirectNonWwwDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $host = $request->getHttpHost();
        Log::info("RedirectNonWwwDomain: $host");
        if (substr($host, 0, 4) != 'www.') {
            $request->headers->set('host', 'www.'.$host);
            Log::info("Redirecting to: ".$request->fullUrl());
            return redirect($request->fullUrl(), 301);
        }
        return $next($request);
    }
}
