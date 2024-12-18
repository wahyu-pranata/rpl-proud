<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EventUser extends Model
{
    protected $guarded = ['id'];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function eventDivisions(): BelongsToMany
    {
        return $this->belongsToMany(EventDivision::class, EventDivisionUser::class);
    }
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, EventUserRole::class);
    }
}
