<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $guarded = ['id'];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
    public function accesses(): HasMany
    {
        return $this->hasMany(Access::class);
    }
    public function eventUser(): BelongsToMany
    {
        return $this->belongsToMany(EventUser::class);
    }
}