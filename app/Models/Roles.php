<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Roles extends Model
{
    use HasFactory;
    public function role_access(): HasMany
    {
        return $this::hasMany(RolesAccess::class);
    }

    public function user_access(): HasMany
    {
        return $this::hasMany(UserAccess::class);
    }
}
