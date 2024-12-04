<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Registration extends Model
{
    protected $guarded = ['id'];

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }
}