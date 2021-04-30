<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Hostel;
use App\Models\Amenity;
use App\Http\Requests\HostelRequest;
use App\Models\Tag;
use App\Models\Tags;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgentHostelController extends Controller
{
    //use compact() to reduce the stress of turning a string to a variable manually

    public function __construct()
    {
        $this->authorizeResource(Hostel::class, 'hostel');
    }

    public function index(Agent $agent)
    {
        // fetch hostels from table
        $hostels = Hostel::where('agent_id', Auth::guard('agent')->user()->id)
            ->orderBy('id', 'ASC')
            ->Paginate(10);
        return view('agents.hostels.index', compact('hostels'));
    }

    public function create()
    {
        $hostel = new Hostel;
        // fetch amenities, state, university from db
        $amenities = Amenity::get();
        $tags = Tag::get();
        $state = DB::select('SELECT * FROM states');
        $university = DB::select('SELECT * FROM universities');
        return view(
            'agents.hostels.create',
            compact('hostel', 'amenities', 'state', 'university', 'tags'),
        );
    }

    public function store(HostelRequest $request)
    {
        if (Auth::guard('agent')->check()) {
            $hostel = Auth::guard('agent')->user()->hostelFunc()->create($request->validated());

            $hostel->amenities()->sync($request->amenities);
            $hostel->tags()->sync($request->tags);

            return redirect()->route('agent.hostels.index')
                ->with('status', 'Hostel Added Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'A problem occured');
        }
    }

    public function show(Hostel $hostel)
    {
        dd($hostel);
        return view('agents.hostels.show', compact('hostel'));
    }

    public function edit(Hostel $hostel, Agent $agent)
    {
        // fetch amenities, state, university from db
        $amenities = Amenity::get();
        $tags = Tag::get();
        $state = DB::select('SELECT * FROM states');
        $university = DB::select('SELECT * FROM universities');

        return view(
            'agents.hostels.edit',
            compact('hostel', 'amenities', 'state', 'university', 'tags')
        );
    }

    public function update(HostelRequest $request, Hostel $hostel)
    {
        $hostel->update($request->validated());
        $hostel->amenities()->sync($request->amenities);
        $hostel->tags()->sync($request->tags);

        return redirect()->route('agent.hostels.index')
            ->with('success', 'Hostel Updated Successfully');
    }

    public function destroy(Hostel $hostel)
    {
        $hostel->delete();
        return redirect()->route('agent.hostels.index')
            ->with('success', 'Hostel Deleted Successfully');
    }
}
