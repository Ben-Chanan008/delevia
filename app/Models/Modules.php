<?php

namespace App\Models;

use App\Models\SubModules;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modules extends Model
{
    use HasFactory;

    public function sub_modules() : HasMany
    {
        return $this->hasMany(SubModules::class);
    }
}
