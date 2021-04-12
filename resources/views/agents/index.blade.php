<html>
    <head>
        <link rel="stylesheet" href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}">
    </head>

    <body class="container mt-5">

        <h1>Hello {{ Auth::guard('agent')->user()->name }}</h1>
        <a href="{{ route('search') }}">Search for your preferred hostel</a>
        <form method="POST" action="{{ route('agent.logout') }}">
            @csrf
            <a href="{{ route('agent.logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ ('Logout') }}
            </a>
        </form>

        <div class="btn-group btn-group-lg">
            <a href="{{ route('agentstudent.index') }}" role="button" class="btn btn-primary mr-3" style="height: 200px; width: 200px">Students</a>
            <a href="{{ route('agenthostel.index') }}" role="button" class="btn btn-primary" style="height: 200px; width: 200px">Hostels</a>
            
            {{-- <a href="{{ route('agent.students.index') }}" role="button" class="btn btn-primary mr-3" style="height: 200px; width: 200px">Students</a> --}}

            {{-- <a href="{{ route('agent.hostels.index') }}" role="button" class="btn btn-primary" style="height: 200px; width: 200px">Hostels</a> --}}
          </div>


          <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    </body>
</html>
