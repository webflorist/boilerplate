<?php

namespace Webflorist\Boilerplate\Middleware;

use Closure;

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
        if (substr($host, 0, 4) != 'www.') {
            $request->headers->set('host', 'www.'.$host);
            return redirect($request->fullUrl(), 301);
        }
        return $next($request);
    }
}
