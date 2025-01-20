<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MessageAttachment extends Model
{
    protected $guarded = ['id'];
    protected $table = 'message_attachments';

    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
