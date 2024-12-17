<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EventDivisionUser extends Model
{
    protected $guarded = ['id'];

    public function eventUser(): BelongsTo
    {
        return $this->belongsTo(EventUser::class);
    }
    public function eventDivision(): BelongsTo
    {
        return $this->belongsTo(EventDivision::class);
    }
    public function eventDivisionUserRoles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, EventDivisionUserRole::class);
    }
}
