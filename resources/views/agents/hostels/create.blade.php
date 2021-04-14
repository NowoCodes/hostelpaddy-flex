@extends('agents.hostels.app')

@section('content')
  <div class="card mb-3">
    <div class="card-header">
      <a href="{{ route('agent.hostels.index') }}" role="button" class="btn btn-sm btn-primary float-left">Back</a>
      <h3 class="mx-auto text-center">Add Hostel</h3>

    </div>
    <div class="card-body">
      <form action="{{ route('agent.hostels.store') }}" enctype="multipart/form-data" method="POST">
        @csrf

        @include('agents.hostels.form')

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add Your Hostel</button>
        </div>
      </form>
    </div>
  </div>
@endsection