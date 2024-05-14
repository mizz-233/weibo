<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-14 14:00:02
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-14 14:00:51
 * @FilePath: \weibo\database\migrations\2024_05_14_060002_add_activation_to_users_table.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('activation_token')->nullable();
            $table->boolean('activated')->default(false);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('activation_token');
            $table->dropColumn('activated');
        });
    }
};
