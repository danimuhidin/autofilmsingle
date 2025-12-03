<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheStaticAssets
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        if (preg_match('/\.(css|js|jpg|jpeg|png|gif|svg|woff2|ttf|eot)$/i', $request->getPathInfo())) {
            $response->header('Cache-Control', 'max-age=31536000, public, immutable');
            $response->header('Expires', gmdate('D, d M Y H:i:s \G\M\T', time() + 31536000));
        }

        return $response;
    }
}
