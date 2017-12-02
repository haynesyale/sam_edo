<?php

namespace App\Http\Middleware;

use Closure;

class Checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $re = \Auth::guard('admin_accounts')->check();
        if(!$re){
            flash()->overlay('不是管理员请勿乱闯','警告！');
            return redirect('/admin/login');
        }
        return $next($request);
    }
}
