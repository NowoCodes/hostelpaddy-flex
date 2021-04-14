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

  {{-- Print out error message from controller --}}
  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      {{ session('success') }}
    </div>
  @elseif (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert">X</button>
      {{ session('error') }}
    </div>
  @endif
  {{-- Print out error message from controller --}}

  {{-- Print out error message when validating form --}}
  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $errors)
        <li class="text-danger">{{ $errors }}</li>
      @endforeach
    </ul>
  @endif
  {{-- Print out error message when validating form --}}

  @yield('content')


  <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  </script>

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
