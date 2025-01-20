<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $guarded = ['id'];

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }
    public function eventUsers(): BelongsToMany
    {
        return $this->belongsToMany(EventUser::class, EventUserRole::class);
    }
    public function invitations(): HasMany
    {
        return $this->hasMany( Invitation::class);
    }
}
