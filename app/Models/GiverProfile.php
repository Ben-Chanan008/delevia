<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GiverProfile extends Model
{
    public $table = 'givers_profile';

    use HasFactory, SoftDeletes;

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}