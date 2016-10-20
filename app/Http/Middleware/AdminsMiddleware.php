<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminsMiddleware {
	public function handle($request, Closure $next) {
		if (Auth::user()) {
			if (!Auth::user()->IsAdmin()) {
				Auth::logout();
				return redirect('/');

			}
		}

		return $next($request);
	}
}
