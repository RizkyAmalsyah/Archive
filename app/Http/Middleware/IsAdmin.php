<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      if ($request->user()->role == 'ADMIN') {
        return $next($request);
      }

      return redirect('user');
      // abort(403, 'Anda tidak memiliki hak mengakses laman tersebut!');
      }
}
