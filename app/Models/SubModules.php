<?php

namespace App\Models;

use App\Models\Modules;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubModules extends Model
{
    use HasFactory;

    public function modules() : BelongsTo
    {
        return $this->belongsTo(Modules::class);
    }
}
