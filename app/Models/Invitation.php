<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invitation extends Model
{
    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
    public function eventDivision(): BelongsTo
    {
        return $this->belongsTo(EventDivision::class);
    }
    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
