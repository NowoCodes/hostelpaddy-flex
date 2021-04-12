<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentHostelController extends Controller
{
    public function index()
    {
        return view('agents.hostels.index');
    }

    public function create()
    {
        return view('agents.hostels.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Agent $agent)
    {
        //
    }

    public function edit(Agent $agent)
    {
        //
    }

    public function update(Request $request, Agent $agent)
    {
        //
    }

    public function destroy(Agent $agent)
    {
        //
    }
}
