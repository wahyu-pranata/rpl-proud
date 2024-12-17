<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $guarded = ['id'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(Message::class, EventUser::class)->withPivot('status');
    }
    public function divisions(): HasMany
    {
        return $this->hasMany(EventDivision::class);
    }
    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
    public function timelines(): HasMany
    {
        return $this->hasMany(EventTimeline::class);
    }
    public function invitations(): HasMany
    {
        return $this->hasMany(Invitation::class);
    }
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
