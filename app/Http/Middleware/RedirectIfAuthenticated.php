<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-13 09:47:29
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-14 11:26:20
 * @FilePath: \weibo\app\Http\Middleware\RedirectIfAuthenticated.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                session()->flash('info', '您已登录，无需再次操作。');
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
