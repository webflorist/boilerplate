<?php

namespace Webflorist\Boilerplate\Middleware;

use Closure;
use DeviceDetector\Parser\Client\Browser;
use Illuminate\Support\Facades\Log;

class BrowserNotSupported
{

    private $infoNode = 'browser-not-supported';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$this->isBrowserSupported() && !$this->isInfoRoute()) {
            return redirect(route_node($this->infoNode)->getUrl());
        }
        return $next($request);
    }

    /**
     * @return bool
     */
    private function isBrowserSupported(): bool
    {
        return \Browser::browserFamily() !== 'Internet Explorer';
    }

    /**
     * @return bool
     */
    private function isInfoRoute(): bool
    {
        return route_node()->getId() === $this->infoNode;
    }
}
