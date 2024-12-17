<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventDivisionRole extends Model
{
    public function eventDivision(): BelongsTo
    {
        return $this->belongsTo(EventDivision::class);
    }
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
