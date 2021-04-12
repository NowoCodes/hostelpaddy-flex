<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentHostelController extends Controller
{
    public function index()
    {
        return view('agents.viewhostels');
    }

    public function create()
    {
        //
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
