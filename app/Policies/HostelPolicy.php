<?php

namespace App\Policies;

use App\Models\Hostel;
use App\Models\Agent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class HostelPolicy
{
    use HandlesAuthorization;

    public function viewAny(Agent $agent)
    {
        return true;
    }

    public function view(Agent $agent , Hostel $hostel)
    {
        return $agent->id === $hostel->agent_id;
    }

    public function create(Agent $agent)
    {
        return true;
    }

    public function update(Agent $agent, Hostel $hostel)
    {
        return $agent->id === $hostel->agent_id;
    }

    public function delete(Agent $agent, Hostel $hostel)
    {
        return $agent->id === $hostel->agent_id;
    }

    public function restore(Agent $agent, Hostel $hostel)
    {
        //
    }

    public function forceDelete(Agent $agent, Hostel $hostel)
    {
        //
    }
}
