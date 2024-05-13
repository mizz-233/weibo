<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-13 11:42:34
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-13 13:37:50
 * @FilePath: \weibo\app\Http\Controllers\StaticPagesController.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }
    public function help()
    {
        return view('static_pages/help');
    }
    public function about()
    {
        return view('static_pages/about');
    }
}
