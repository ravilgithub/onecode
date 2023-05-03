<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        info(__CLASS__, [$request->path()]);

        if (!$this->isActive($request))
            abort(403);

        return $next($request);
    }

    protected function isActive(Request $request): bool
    {
        /*$user = $request->user();
        return $user->active;*/

        return true;
    }
}
