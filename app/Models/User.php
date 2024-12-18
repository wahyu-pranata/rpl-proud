<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
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

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }
    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }
    public function studentDetails(): HasOne
    {
        return $this->hasOne(StudentDetails::class);
    }
    public function organizationDetails(): HasOne
    {
        return $this->hasOne(OrganizationDetails::class);
    }
    public function registrationAnswers(): HasMany
    {
        return $this->hasMany(RegistrationAnswer::class);
    }
    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, EventUser::class)->withPivot('status');
    }
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
    public function invitations(): HasMany
    {
        return $this->hasMany(Invitation::class);
    }
    public function eventDivisions(): HasManyThrough
    {
        return $this->hasManyThrough(EventDivision::class, EventDivisionUser::class);
    }
}
