@extends('agents.hostels.app')

@section('content')
  <div class="card mb-3">
    <div class="card-header">
      <a href="{{ route('agent.hostels.index') }}" role="button" class="btn btn-sm btn-primary float-left">Back</a>
      <h3 class="mx-auto text-center">Show Hostel Details</h3>

    </div>
    <div class="card-body">
      <ul>
        <li>Hostel Name: {{ $hostel->hostel_name }}</li>
        <li>Town: {{ $hostel->town }}</li>
        <li>State: {{ $hostel->state }}</li>
        <li>Address: {{ $hostel->address }}</li>
        <li>Property: {{ $hostel->property }}</li>
        <li>Rooms: {{ $hostel->roomNum }}</li>
        <li>Amount: {{ $hostel->amount }}</li>
        <li>Period: {{ $hostel->period }}</li>
        <li>Amenities: {{ $hostel->amenities }}</li>
        <li>Utilities: {{ $hostel->utilities }}</li>
        <li>Rules: {{ $hostel->rules }}</li>
        <li>Tenants: {{ $hostel->tenantType }}</li>
        <li>Image: {{ $hostel->image_name }}</li>
      </ul>
    </div>
  </div>
@endsection
