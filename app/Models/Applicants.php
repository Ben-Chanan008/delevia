<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicants extends Pivot
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'applicants';

    public function application(): BelongsTo
    {
        return $this->belongsTo(Applications::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seeker_id');
    }

    public function getRouteKeyName(): string
    {
        return 'seeker_id';
    }

    public function getUserValue()
    {
        return $this->user;
    }
}
