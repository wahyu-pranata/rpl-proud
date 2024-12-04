<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $guarded = ['id'];

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }
    public function userStatus(): HasMany
    {
        return $this->hasMany(EventUser::class);
    }
    public function invitation(): HasMany
    {
        return $this->hasMany(Invitation::class);
    }
    public function timelines(): HasMany
    {
        return $this->hasMany(EventTimeline::class);
    }
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}