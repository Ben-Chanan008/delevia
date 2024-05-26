<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobs extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'company_id',
        'tags',
        'date_of_post',
        'location',
        'description',
        'degree_req',
        'experience',
        'salary',
        'rate',
        'job_type',
        'needed_skills',
        'currency',
    ];

    public function user(): BelongsTo
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

    public function user_applicants(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'applicants', 'job_id')->using(Applicants::class);
    }

    public function scopeFilter($query, array $filters) {
        // dd($filters['search']);
        if($filters['search'] ?? false)
            $query->where('title', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%')->orWhere('tags', 'like', '%' . request('search') . '%')->orWhere('degree_req', 'like', '%' . request('search') . '%')->orWhere('experience', 'like', '%' . request('search') . '%')->orWhere('location', 'like', '%' . request('search') . '%');
    
    }
}