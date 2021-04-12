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


  <a href="{{ route('agent.index') }}" role="button" class="my-4 btn btn-primary">Back</a>
  <a href="" role="button" class="align-middle float-right btn btn-primary">Add</a>


  <div class="card mb-3">
    <div class="card-header">
        <h3 class="mx-auto text-center">Hostel Information</h3>

      </div>
      <div class="card-body">
        <form action="" enctype="multipart/form-data" >
          @csrf
          <div class="form-group">
            <label for="hname">Hostel Name</label>
            <input type="text" class="form-control" id="hname" placeholder="Type your hostel name here">
          </div>
          <div class="form-group">
            <label for="hostelname">University Name</label>
            <select name="hostelname" class="form-control">
              <option>Select your university name</option>
              <option>Legacy University, Okija</option>
              <option>Madonna University, Okija</option>
              <option>Nnamdi Azikiwe University</option>
              <option>Tansian University</option>
              <option>Eastern Palm University</option>
              <option>Federal University of Technology, Owerri</option>
              <option>Federal University of Technology, Minna</option>
              <option>Imo State University</option>
              <option>Ignatius Ajuru University of Education</option>
              <option>Rivers State University	</option>
              <option>University of Port Harcourt	</option>
            </select>
          </div>

          <div class="row">
            <div class="col-6">

                <div class="form-group">
                    <label for="state">State</label>
                    <select class="form-control" id="sel1" name="state">
                      <option selected>Select one</option>
                      <option value="Ogun">Ogun</option>
                      <option value="Calabar">Calabar</option>
                      <option value="Osun">Osun</option>
                      <option value="Lagos">Lagos</option>
                    </select>
                  </div>

              {{-- <div class="form-group">
                <label for="hname">State</label>
                <input type="text" class="form-control" id="hname">
              </div> --}}


              <div class="form-group">
                <label for="hosteladdress">Hostel Address</label>
                <input type="text" class="form-control" id="pwd" name="address" placeholder="What’s your hostel address">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="city">City or Town</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter city or town">
              </div>
              <div class="form-group">
                <label for="price">Hostel Price</label>
                <input type="text" class="form-control" id="price" placeholder="₦ 250,000 ">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="details">Hostel Details</label>
            <textarea class="form-control" name="details" id="details" placeholder="Tell us more about your hostel"></textarea>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="favour@gmail.com">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
              </div>
            </div>
          </div>

          <h5>Hostel Amenities</h5>
          <label>Select your hostel amenities below</label>
          <div class="form-group">
            <select class="form-control mul-select" multiple="true" name="amenities[]">
              <option>Select Amenities</option>
              <option value="transformer">Transformer</option>
              <option value="waterwell">Water Well</option>
              <option value="waterpump">Water Pump</option>
              <option value="generator">Generator</option>
              <option value="kitchen">Kitchen</option>
              <option value="toilet">Toilet</option>
              <option value="wardrobe">Wardrobe</option>
              <option value="balcony">Balcony</option>
              <option value="bathroom">Bathroom</option>
            </select>

          <h5 class="mt-2">Upload Hostel Images</h5>
          <div class="custom-file mb-3" >            
            <label class="custom-file-label" for="customFile">Choose file</label>
            <input type="file" class="custom-file-input" id="customFile" name="filename" >
          </div>
        </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Your Hostel</button>
          </div>
      </form>
    </div>
  </div>

  <script src="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}"></script>

<script>
  $(document).ready(function(){
    $(".mul-select").select2({
      placeholder: "select hostel amenities", //placeholder
      tags: true,
      tokenSeparators: ['/',',',';'," "] 
        });
    })
    </script>
</body>

</html>
