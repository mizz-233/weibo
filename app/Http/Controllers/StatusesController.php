<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;


class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:140'
        ]);

        $user = Auth::user();
        if ($user instanceof \App\Models\User) {
            // 确保 $user 是 User 实例
            $user->statuses()->create([
                'content' => $request['content']
            ]);
        } else {
            // 处理错误情况
            dd('User is not an instance of \App\Models\User');
        }

        session()->flash('success', '发布成功！');
        return redirect()->back();
    }
    public function destroy(Status $status)
    {
        $this->authorize('destroy', $status);
        $status->delete();
        session()->flash('success', '微博已被成功删除！');
        return redirect()->back();
    }
}
