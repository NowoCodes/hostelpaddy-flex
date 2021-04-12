<html>

<head>
  <link rel="stylesheet" href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}">
</head>

<body class="container mt-5">

  <h1>Hello {{ Auth::guard('agent')->user()->name }}</h1>
  <a href="{{ route('search') }}">Search for your preferred hostel</a>
  <form method="POST" action="{{ route('agent.logout') }}">
    @csrf
    <a href="{{ route('agent.logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();">
      {{ 'Logout' }}
    </a>
  </form>

    <a href="{{ route('agent.index') }}" role="button" class="btn btn-primary btn-sm mb-2">Back</a>

  <div class="card">
    <div class="card-header">
      <a href="{{ route('hostels.create') }}" class="float-right btn btn-sm btn-primary">Add New</a>
      <h3 class="mx-auto text-center">Hostel Information</h3>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-sm table-hover">
          <thead>
            <th>S/N</th>
            <th>Hostels</th>
            <th>Actions</th>
          </thead>
          <tbody>
            @for ($i = 1; $i <= 10; $i++)
              <tr>
                <td>{{ $i }}</td>
                <td>ParkView Hostels</td>
                <td>
                  <a href="#" class="btn btn-sm btn-secondary">Show</a>
                  <a href="#" class="btn btn-sm btn-secondary">Edit</a>
                  <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>



  <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
