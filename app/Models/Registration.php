<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    protected $guarded = ['id'];

    public function questions(): HasMany
    {
        return $this->hasMany(User::class);
    }
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
    public function registration_divisions(): BelongsToMany
    {
        return $this->belongsToMany(EventDivision::class, RegistrationEventDivision::class);
    }
}
