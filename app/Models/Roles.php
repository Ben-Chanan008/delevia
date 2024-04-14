<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Roles extends Model
{
    use HasFactory;
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_user')->using(RoleUser::class);
    }

    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Modules::class, 'role_access')->using(RolesAccess::class);
    }
}
