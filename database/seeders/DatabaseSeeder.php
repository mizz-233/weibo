<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-13 09:47:29
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-14 11:36:37
 * @FilePath: \weibo\database\seeders\DatabaseSeeder.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}
