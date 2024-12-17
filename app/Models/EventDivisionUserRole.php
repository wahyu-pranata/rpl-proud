<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventDivisionUserRole extends Model
{
    protected $guarded = ['id'];

    public function eventDivisionUser(): BelongsTo
    {
        return $this->belongsTo(EventDivisionUser::class);
    }
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
