<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applications extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function applicants(): HasMany
    {
        return $this->hasMany(Applicants::class);
    }
}
