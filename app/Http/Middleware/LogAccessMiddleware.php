<?php

namespace App\Http\Middleware;

use Closure;

class LogAccessMiddleware {
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next) {
    // return $next($request);
    return Response('We arrived at middleware and ended up in the middleware itself.');
  }
}
