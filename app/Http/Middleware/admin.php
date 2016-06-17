<?php namespace App\Http\Middleware;

use Closure;
use Session;

class admin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{	
		$user_status = Session::get('admin');
		//dd($user_status);
		if(isset($user_status) and $user_status == 0){
			return redirect('/auth/signin');
		}
		return $next($request);
	}

}
