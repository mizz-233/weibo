<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-14 11:34:52
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-14 11:35:42
 * @FilePath: \weibo\database\seeders\UsersTableSeeder.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = 'Summer';
        $user->email = 'summer@example.com';
        $user->save();
    }
}
