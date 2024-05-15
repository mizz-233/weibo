<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-15 16:23:07
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-15 16:24:09
 * @FilePath: \weibo\app\Policies\StatusPolicy.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use App\Models\Status;

class StatusPolicy
{
    use HandlesAuthorization;

    public function destroy(User $user, Status $status)
    {
        return $user->id === $status->user_id;
    }
}
