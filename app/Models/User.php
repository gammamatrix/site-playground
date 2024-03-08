<?php
/**
 * Playground
 */
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum;
use Playground\Models\Interfaces\WithCreatorInterface;
use Playground\Models\Interfaces\WithModifierInterface;
use Playground\Models\Traits;
use Playground\Models\User as BaseUser;

/**
 * \App\Models\User
 *
 * This model includes RBAC and supports Sanctum.
 */
class User extends BaseUser implements MustVerifyEmail, Sanctum\Contracts\HasApiTokens, WithCreatorInterface, WithModifierInterface
{
    use Notifiable;
    use Sanctum\HasApiTokens;
    use SoftDeletes;
    use Traits\ScopeFilterColumns;
    use Traits\ScopeFilterDates;
    use Traits\ScopeFilterFlags;
    use Traits\ScopeFilterIds;
    use Traits\ScopeFilterTrash;
    use Traits\ScopeSort;
    use Traits\WithCreator;
    use Traits\WithModifier;
}
