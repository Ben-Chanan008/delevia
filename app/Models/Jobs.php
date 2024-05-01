<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jobs extends Model
{
    use HasFactory;

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function company(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    public function currency(): HasMany
    {
        return $this->hasMany(Currencies::class);
    }
}
