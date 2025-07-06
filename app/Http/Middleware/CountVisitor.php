<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class CountVisitor
{
    public function handle($request, Closure $next)
    {
        // Simpan data ke cache (bisa ganti ke database nanti)
        $visits = Cache::get('visitor_count', 0);
        Cache::forever('visitor_count', $visits + 1);

        return $next($request);
    }
}
