<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserAccess extends Model
{
    use HasFactory;

    public function role(): HasMany
    {
        return $this::hasMany(Roles::class);
    }
    public function user(): HasMany
    {
        return $this::hasMany(User::class);
    }
}
