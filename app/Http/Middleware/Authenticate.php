<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // if (Auth::check()) {
        //     if (Auth::user()->role_id == 1) {
        //     }
        // }
        return $request->expectsJson() ? null : route('login');
    }

    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role_id > 0) {
            if (!auth()->user()->email_verified_at) {
                return redirect()->to('/')->with('info', 'silahkan verifikasi email anda terlebih dahulu');
            }
            if (!auth()->user()->kriteria_id) {
                return redirect()->to('kriteria')->with('info', 'silahkan verifikasi email anda');
            }
        }
        return $next($request);
    }
}
