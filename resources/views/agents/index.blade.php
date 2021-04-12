<html>
    <head>
        <link rel="stylesheet" href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}">
    </head>

    <body class="container mt-5">

        <h1>Hello {{ Auth::guard('agent')->user()->name }}</h1>
        <a href="{{ route('search') }}">Search for your preferred hostel</a>
        <form method="POST" action="{{ route('agent.logout') }}">
            @csrf
            <a class="float-right" href="{{ route('agent.logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ ('Logout') }}
            </a>
        </form>

        <div class="btn-group btn-group-lg">
            {{-- <a href="{{ route('viewstudents') }}" role="button" class="btn btn-primary mr-3">Students</a> --}}
            <a href="{{route('students.index')}}" role="button" class="btn btn-primary mr-3">Students</a>
            <a href="{{ route('hostels.index') }}" role="button" class="btn btn-primary">Hostels</a>
        </div>


        <script src="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}"></script>
    </body>
</html>
