<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Major extends Model
{
    protected $guarded = ['id'];

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
