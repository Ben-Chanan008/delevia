<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\RoleUser;
use App\Models\Roles;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_key'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Roles::class, 'role_user')->using(RoleUser::class);
    }

    public function job_applicants(): BelongsToMany
    {
        return $this->belongsToMany(Jobs::class, 'applicants', 'seeker_id')->using(Applicants::class);
    }

    public function user_acesses(): HasMany
    {
        return $this->hasMany(UserAccess::class);
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Applications::class);
    }

    public function jobs(): HasMany
    {
        return $this->hasMany(Jobs::class);
    }

    public function company(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    public function seekers_profile(): HasMany
    {
        return $this->hasMany(SeekerProfile::class);
    }

    public function givers_profile(): HasMany
    {
        return $this->hasMany(GiverProfile::class);
    }
}