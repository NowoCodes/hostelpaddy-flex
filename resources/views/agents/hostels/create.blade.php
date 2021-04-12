<html>

<head>
  <link rel="stylesheet" href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


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


  <div class="card mb-3">
    <div class="card-header">
      <a href="{{ route('agent.hostels.index') }}" role="button" class="btn btn-sm btn-primary float-left">Back</a>
      <h3 class="mx-auto text-center">Add Hostel</h3>

    </div>
    <div class="card-body">
      <form action="" enctype="multipart/form-data">
        @csrf
        
        @include('agents.hostels.form')
        
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add Your Hostel</button>
        </div>
      </form>
    </div>
  </div>

  <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

  <script>
    $(document).ready(function() {
      $(".mul-select").select2({
        placeholder: "select hostel amenities", //placeholder
        tags: true,
        tokenSeparators: ['/', ',', ';', " "]
      });
    })

  </script>
</body>

</html>
