<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticationMiddleware {
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next, $auth_method, $perfil) {
    echo $auth_method . '-' . $perfil . '<br>';
    if ($auth_method === 'default') echo 'Verify User and Password at Database' . '-' . $perfil . '<br>';
    if ($auth_method === 'ldap') echo 'Verify User and Password at AD' . '-' . $perfil . '<br>';

    if (true) return $next($request);
    else return Response('Access denied! Route needs authentication.');
  }
}
