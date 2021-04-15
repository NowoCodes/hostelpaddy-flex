@extends('agents.hostels.app')

@section('content')
  <a href="{{ route('agent.index') }}" role="button" class="btn btn-primary btn-sm mb-2">Back</a>

  <div class="card">
    <div class="card-header">
      <a href="{{ route('agent.hostels.create') }}" class="float-right btn btn-sm btn-primary">Add New</a>
      <h3 class="mx-auto text-center">Hostel Information</h3>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-sm table-hover">
          <thead>
            <th>S/N</th>
            <th>Hostel Name</th>
            <th>Town</th>
            <th>State</th>
            <th>Price</th>
            {{-- <th>Amenities</th> --}}
            <th>utilities</th>
            {{-- <th>Rules</th> --}}
            <th>TennantType</th>
            <th>Actions</th>
          </thead>
          <tbody>
            {{-- Fetch data from hostels table --}}
            @foreach ($hostels as $hostel)
              <tr>
                {{-- display the s/n as id just to know the exact hostel belonging to the agent. we will change it later to normal incremented number (1,2,3,4,5,6) --}}
                <td>{{ $hostel->id }}</td>
                <td>{{ $hostel->hostel_name }}</td>
                <td>{{ $hostel->town }}</td>
                <td>{{ $hostel->state }}</td>
                <td>{{ $hostel->amount }}</td>
                {{-- <td>{{ $hostel->amenities }}</td> --}}
                <td>{{ $hostel->utilities }}</td>
                {{-- <td>{{ $hostel->rules }}</td> --}}
                <td>{{ $hostel->tenantType }}</td>
                <td>
                  <a href="{{ route('agent.hostels.show', [$hostel]) }}" class="btn btn-sm btn-secondary">Show</a>
                  <a href="{{ route('agent.hostels.edit', [$hostel]) }}" class="btn btn-sm btn-secondary">Edit</a>

                  <form action="{{ route('agent.hostels.destroy', [$hostel]) }}" method="POST" class="d-inline-flex">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-sm btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        {{-- Show Pagination --}}
        {{ $hostels->links() }}
      </div>
    </div>
  </div>
@endsection
