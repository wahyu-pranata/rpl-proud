<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RolePermission extends Model
{
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }
}
