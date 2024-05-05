<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'company_id',
        'tags',
        'date_of_post',
        'location',
        'description',
        'experience',
        'salary',
        'rate',
        'job_type',
        'needed_skills',
        'currency',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currencies::class);
    }
}
