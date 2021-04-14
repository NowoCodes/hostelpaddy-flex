@extends('agents.hostels.app')

@section('content')
  <div class="card mb-3">
    <div class="card-header">
      <a href="{{ route('agent.hostels.index') }}" role="button" class="btn btn-sm btn-primary float-left">Back</a>
      <h3 class="mx-auto text-center">Edit Hostel</h3>

    </div>
    <div class="card-body">
      {{-- get hostel by id --}}
      <form action="{{ route('agent.hostels.update', [$hostel]) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')

        @include('agents.hostels.form')

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Edit Hostel</button>
        </div>
      </form>
    </div>
  </div>
@endsection