    @if ($errors->any())
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif


    <div class="input-field-area">
      <form action="/clientmail" method="post" class="form-control">
        @csrf
        <input class="input" type="email" name="email" placeholder="Enter your email address here">
        <button class="submit">
          <img class="bell" src="{{ asset('files/assets/Bell.svg') }}" alt="bell icon"> notify me
        </button>
      </form>
    </div>
