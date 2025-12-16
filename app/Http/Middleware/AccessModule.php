<?php

namespace App\Http\Middleware;

use App\Models\Todo;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessModule
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $record = Todo::find(id: 10);
        if ($record) {
            return $next($request);
        } else {
            return response()->json([
                'status' => "FAIL",
                'message' => 'Tidak ditemukan akses',
            ]);
        }
    }
}
