<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeekerProfile extends Model
{
    public $table = 'seekers_profile';

    use HasFactory, SoftDeletes;

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}