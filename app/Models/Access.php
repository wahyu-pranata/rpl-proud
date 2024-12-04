<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Access extends Model
{
    protected $guarded = ['id'];
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
}