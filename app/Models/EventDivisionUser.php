<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
