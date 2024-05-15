<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-15 15:31:57
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-15 15:32:47
 * @FilePath: \weibo\database\seeders\StatusesTableSeeder.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    public function run()
    {
        Status::factory()->count(100)->create();
    }
}
