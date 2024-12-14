<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function studentDetails(): HasOne
    {
        return $this->hasOne(StudentDetails::class);
    }
    public function organizationDetails(): HasOne
    {
        return $this->hasOne(OrganizationDetails::class);
    }
    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
    public function eventStatus(): HasMany
    {
        return $this->hasMany(EventUser::class);
    }
    public function invitation(): HasMany
    {
        return $this->hasMany(Invitation::class);
    }
    public function roles(): HasMany
    {
        return $this->hasMany(Role::class);
    }
}
