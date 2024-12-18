<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventUserRole extends Model
{
    protected $guarded = ['id'];

    public function eventUser(): BelongsTo
    {
        return $this->belongsTo(EventUser::class);
    }
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
