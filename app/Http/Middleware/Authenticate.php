<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->to('/')->with('info', 'silahkan login terlebih dahulu');
        }
        if (auth()->user()->role_id == 1) {
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
