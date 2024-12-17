<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Message extends Model
{
    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function attachments(): HasMany
    {
        return $this->hasMany(MessageAttachment::class);
    }
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
    public function invitation(): HasOne
    {
        return $this->hasOne(Invitation::class);
    }
}
