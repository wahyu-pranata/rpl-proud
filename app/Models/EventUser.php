<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function role(): HasMany
    {
        return $this->hasMany(Role::class);
    }
}