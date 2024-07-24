<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GuardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $guard = $this->getGuard($request);

        if($guard == 'admin' && !auth()->guard($guard)->check()) {
            return redirect('/admin/login');
        }

        if($guard == 'seller' && !auth()->guard($guard)->check()) {
            return redirect('/seller/login');
        }

        return $next($request);
    }

    protected function getGuard(Request $request)
    {
        if($request->route()->signatureMatches(['admin/*'])) {
            return 'admin';
        }

        return 'seller';
    }
}
