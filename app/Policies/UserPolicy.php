<?php
/*
 * @Author: mizz-233 3409133605@qq.com
 * @Date: 2024-05-14 13:51:58
 * @LastEditors: mizz-233 3409133605@qq.com
 * @LastEditTime: 2024-05-15 17:22:42
 * @FilePath: \weibo\app\Policies\UserPolicy.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class UserPolicy
{
    use HandlesAuthorization;

    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    public function destroy(User $currentUser, User $user)
    {
        return $currentUser->is_admin && $currentUser->id !== $user->id;
    }
    public function follow(User $currentUser, User $user)
    {
        return $currentUser->id !== $user->id;
    }
}
