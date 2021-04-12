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

  <a href="{{ route('agent.index') }}" role="button" class="btn btn-primary btn-sm">Back</a>

  <div class="table-responsive pt-3">
    <table class="table table-hover table-sm table-borderless">
      <thead>
        <tr>
          <th>S/N</th>
          <th>Student</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 1; $i <= 20; $i++)
          <tr>
            <td>{{ $i }}</td>
            <td>Samson Wahala</td>
          </tr>
        @endfor
      </tbody>
    </table>
  </div>

  <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
