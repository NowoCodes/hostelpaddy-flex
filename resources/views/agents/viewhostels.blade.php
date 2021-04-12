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


  <a href="{{ route('agent.index') }}" role="button" class="my-4 btn btn-primary">Back</a>
  <a href="" role="button" class="align-middle float-right btn btn-primary">Add</a>


  <div class="card mb-3">
    <div class="card-header">
        <h3 class="mx-auto text-center">Hostel Information</h3>

      </div>
      <div class="card-body">
        <form action="">
          @csrf
          <div class="form-group">
            <label for="hname">Hostel Name</label>
            <input type="text" class="form-control" id="hname">
          </div>
          <div class="form-group">
            <label for="pwd">University Name</label>
            <input type="text" class="form-control" id="pwd">
          </div>

          <div class="row">
            <div class="col-6">

                <div class="form-group">
                    <label for="sel1">State</label>
                    <select class="form-control" id="sel1" name="sellist1">
                      <option selected>Select one</option>
                      <option>Ogun</option>
                      <option>Calabaar</option>
                      <option>Osun</option>
                      <option>Lagos</option>
                    </select>
                  </div>

              {{-- <div class="form-group">
                <label for="hname">State</label>
                <input type="text" class="form-control" id="hname">
              </div> --}}


              <div class="form-group">
                <label for="pwd">Hostel Address</label>
                <input type="text" class="form-control" id="pwd">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="hname">City or Town</label>
                <input type="text" class="form-control" id="hname">
              </div>
              <div class="form-group">
                <label for="pwd">Hostel Price</label>
                <input type="text" class="form-control" id="pwd">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="det">Hostel Details</label>
            <textarea class="form-control" name="details" id="det" cols="30" rows="6"></textarea>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="hname">Email Address</label>
                <input type="text" class="form-control" id="hname">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="hname">Phone Number</label>
                <input type="text" class="form-control" id="hname">
              </div>
            </div>
          </div>

          <h1>Hostel Amenities</h1>
          <label for="sel2">Select your hostel amenities below:</label>
          <select multiple class="form-control" id="sel2" name="sellist2">
            <option>1</option>
            <option>2</option>
          </select>

          <h1 class="mt-2">Upload Hostel Images</h1>
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="filename">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>

      </div>
      <button type="submit" class="btn btn-primary">Add Your Hostel</button>
      </form>
    </div>
  </div>

  <script src="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}"></script>
</body>

</html>
