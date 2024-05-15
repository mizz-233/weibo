<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-15 16:55:53
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-15 16:56:58
 * @FilePath: \weibo\database\migrations\2024_05_15_085553_create_followers_table.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('followers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->integer('follower_id')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('followers');
    }
};
