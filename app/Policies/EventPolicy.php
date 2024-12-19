<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Event;
use App\Models\EventUserRole;
use App\Models\EventUser;
use App\Models\EventDivisionUser;
use Illuminate\Auth\Access\Response;
use Illuminate\Database\Eloquent\Builder;

class EventPolicy
{
    /**
     * Perform pre-authorization checks.
     */
    public function before(User $user, string $ability): bool|null
    {
        if ($user->type == 'super_admin')
        {
            return true;
        }
        return null;
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Event $event): bool
    {
        $user_division = $user->eventDivisions()->where('event_id', '=', $event->id);
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->type == 'organization';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Event $event): bool
    {
        if (EventUserRole::join('roles', 'roles.id', '=', 'event_user_roles.role_id')
            ->select(['roles.name', 'event_user_roles.user_id', 'event_user_roles.event_id'])
            ->where(function ($query) use ($user, $event) {
                $query->where('event_user_roles.user_id', '=', $user->id)
                ->where('event_user_roles.event_id', '=', $event->id);
            })
            ->where(function ($query) use ($user, $event) {
                $query->where('roles.name', '=', 'panitia_inti')
                    ->orWhere('roles.name', '=', 'organisasi')
                    ->orWhere('roles.name', '=', 'panitia_ketua');
            })
            ->exists()
        )
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Event $event): bool
    {
        if (EventUserRole::join('roles', 'roles.id', '=', 'event_user_roles.role_id')
            ->select(['roles.name', 'event_user_roles.user_id', 'event_user_roles.event_id'])
            ->where('event_user_roles.user_id', '=', $user->id)
            ->where('event_user_roles.event_id', '=', $event->id)
            ->where('roles.name', '=', 'organisasi')
            ->exists()
        )
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Event $event): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Event $event): bool
    {
        return false;
    }
}
