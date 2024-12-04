<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Message extends Model
{
    protected $guarded = ['id'];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
    public function files(): HasMany
    {
        return $this->hasMany(MessageFile::class);
    }
}