<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Currencies extends Model
{
    use HasFactory;

    public function jobs() : BelongsTo
    {
        return $this->belongsTo(Jobs::class);
    }
}
