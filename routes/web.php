<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-13 09:47:29
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-13 14:59:40
 * @FilePath: \weibo\routes\web.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\UsersController;

Route::get('/', [StaticPagesController::class, 'home'])->name('home');
Route::get('/help', [StaticPagesController::class, 'help'])->name('help');
Route::get('/about', [StaticPagesController::class, 'about'])->name('about');
Route::get('signup',[UsersController::class,'create'])->name('signup');
Route::resource('users',UsersController::class);
