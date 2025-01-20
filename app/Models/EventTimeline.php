<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventTimeline extends Model
{
    protected $guarded = ['id'];
    protected function casts() {
        return [
            'date' => 'date',
        ];
    }


    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
