<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'company_name',
        'company_logo'
    ];
    public $table = 'company';

    public function jobs(): HasMany
    {
        return $this->hasMany(Jobs::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}