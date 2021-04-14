@extends('agents.hostels.app')

@section('content')
  <div class="card mb-3">
    <div class="card-header">
      <a href="{{ route('agent.hostels.index') }}" role="button" class="btn btn-sm btn-primary float-left">Back</a>
      <h3 class="mx-auto text-center">Show Hostel</h3>

    </div>
    <div class="card-body">
      <ul>
        <li>Hostel Name: {{ $hostel->hostel_name }}</li>
        <li>University: {{ $hostel->uni_name }}</li>
        <li>State: {{ $hostel->state }}</li>
        <li>City: {{ $hostel->city }}</li>
        <li>Address: {{ $hostel->address }}</li>
        <li>Price: {{ $hostel->price }}</li>
        <li>Description: {{ $hostel->description }}</li>
        <li>Amenities: {{ $hostel->amenities }}</li>
        <li>Image: {{ $hostel->image_name }}</li>
      </ul>
    </div>
  </div>
@endsection
