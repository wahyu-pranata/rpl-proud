<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Faculty extends Model
{
    protected $guarded = ['id'];

    public function majors(): HasMany
    {
        return $this->hasMany(Major::class);
    }
}