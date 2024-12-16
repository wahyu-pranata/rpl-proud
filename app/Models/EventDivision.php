<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventDivision extends Model
{
    protected $guarded = ['id'];

    public function eventUsers(): BelongsToMany
    {
        return $this->belongsToMany(EventUser::class, EventDivisionUser::class);
    }
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
    public function registrations(): BelongsToMany
    {
        return $this->belongsToMany(Registration::class, RegistrationEventDivision::class);
    }
    public function invitations(): HasMany
    {
        return $this->hasMany(Invitation::class);
    }
}
