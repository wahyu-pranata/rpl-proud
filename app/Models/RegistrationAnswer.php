<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RegistrationAnswer extends Model
{
    protected $guarded = ['id'];

    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
