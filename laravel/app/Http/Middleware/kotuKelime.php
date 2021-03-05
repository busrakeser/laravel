<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class kotuKelime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
//        if(2>1){
//            return redirect()->to('/');
//        }
        $kotuKelime=['elma', 'armut', 'çilek'];
//        dd($request->request);
        if(in_array($request->kadi,$kotuKelime)){
            return redirect()->back()->withErrors("Yasaklı kelime kullandın");
        }
//        echo "yok"; die();
        return $next($request);
    }
}
