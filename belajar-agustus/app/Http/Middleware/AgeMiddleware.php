<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // aturan untuk mengkases route terntu.
        // kondisi

        $umur = $request->session()->get('umur'); //nilai yang kita inputkan di form.

        if ($umur < 18) {
            return redirect()
            ->route('age.form')
            ->with('gagal', 'Anda belum cukup umur');
            // kalo kurang dari 18, akan dikembalikan ke halaman form
        }

        // jika 18 tahun ke 
        return $next($request);
        // respon untuk mengizinkan ke route selanjutnya

    }
}
