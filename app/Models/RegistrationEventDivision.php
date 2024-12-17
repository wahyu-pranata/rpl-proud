<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegistrationEventDivision extends Model
{
    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }
    public function eventDivision(): BelongsTo
    {
        return $this->belongsTo(EventDivision::class);
    }
}
