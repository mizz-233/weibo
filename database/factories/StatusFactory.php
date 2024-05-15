<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-15 15:31:16
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-15 15:31:45
 * @FilePath: \weibo\database\factories\StatusFactory.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    protected $model = Status::class;

    public function definition()
    {
        $date_time = $this->faker->date . ' ' . $this->faker->time;
        return [
            'user_id'    => $this->faker->randomElement(['1', '2', '3']),
            'content'    => $this->faker->text(),
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ];
    }
}
