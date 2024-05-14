<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-14 09:42:53
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-14 10:46:19
 * @FilePath: \weibo\app\Http\Controllers\SessionsController.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            session()->flash('success', '欢迎回来！');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }
    }
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}
