<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        info(__CLASS__, [$request->path()]);
        foreach ($guards as $guard) {
            // Если аутентифицирован
            if (Auth::guard($guard)->check()) {
                // return redirect(RouteServiceProvider::HOME);

                // В кабинет пользователя
                return redirect()->route('user');
            }
        }

        // Переход по маршруту
        return $next($request);
    }
}
