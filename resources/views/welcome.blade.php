@extends('layouts.home')
<div class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
</div>

@section('content')
  @include('compo.countdown')

  <!-- Coming soon content -->
  <div class="coming-soon-content">
    <div class="container">
      <div class="row">
        <!-- Coming soon content text -->
        <div class="col-12 col-md-8 col-lg-8">
          <div class="website">
            WEBSITE
          </div>
          <div class="launching-soon">
            LAUNCHING SOON
          </div>

          <div class="newsletter-container">
            <div class="newsletter-description">
              Get an apartment early by signing up to our mailing list
            </div>

            @include('clientmail')

          </div>
        </div>
        <!-- /Coming soon content text -->

        <!-- Coming soon content image -->
        <div class="col-12 col-md-4 col-lg-4 coming-soon-image">
          <img src="{{ asset('files/assets/side-image.svg') }}" alt="lodges">
        </div>
        <!-- /Coming soon content image -->
      </div>
    </div>
  </div>
  <!-- /Coming soon content -->

  @include('compo.social')

  @include('compo.copyright')
@endsection
