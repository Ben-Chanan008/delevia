<?php

namespace App\Models;

use App\Models\Modules;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SubModules extends Model
{
    use HasFactory;

    public function modules() : BelongsTo
    {
        return $this->belongsTo(Modules::class);
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Roles::class);
    }
}
