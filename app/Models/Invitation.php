<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invitation extends Model
{
    protected $guarded = ['id'];
    protected $table = 'invitations';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'target_user_id');
    }
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
    public function eventDivision(): BelongsTo
    {
        return $this->belongsTo(EventDivision::class, 'event_division_id');
    }
    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class, 'message_id');
    }
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
