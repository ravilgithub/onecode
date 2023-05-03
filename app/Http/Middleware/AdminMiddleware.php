<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        info(__CLASS__, [$request->path()]);

        if (!$this->isAdmin($request)) {
//            return redirect()->route('message', ['action' => 'denied']);
            throw new AuthorizationException();
        }

        return $next($request);
    }

    protected function isAdmin(Request $request): bool
    {
//        return $request->user()->admin;

        return true;
    }
}
