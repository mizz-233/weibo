<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-15 15:26:38
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-15 15:27:09
 * @FilePath: \weibo\database\migrations\2024_05_15_072638_create_statuses_table.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('user_id')->index();
            $table->index(['created_at']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('statuses');
    }
};
