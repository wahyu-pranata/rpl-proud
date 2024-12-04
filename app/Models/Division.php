<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Division extends Model
{
    protected $guarded = ['id'];

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class);
    }

    public function registrations(): BelongsToMany
    {
        return $this->belongsToMany(Registration::class);
    }

    public function roles(): HasMany
    {
        return $this->hasMany(Role::class);
    }
}