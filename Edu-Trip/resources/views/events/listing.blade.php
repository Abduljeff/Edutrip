@extends('layouts.frontLayout1.front_design')
@section('content')
<!-- Section: Search -->
<section id="search" class="section section-search teal darken-1 white-text center scrollspy">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h3>Search Destinations</h3>
        <div class="input-field">
          <input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="Aruba, Cancun, etc...">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Popular Places -->
<section id="popular" class="section section-popular scrollspy">
  <div class="container">
    <div class="row">
      <h4 class="center">
        <span class="teal-text">Popular</span> Places</h4>
        @foreach($eventsAll as $event)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{ asset('images/backend_images/events/large/'.$event->image) }}" alt="">
              <a href="{{ url('event/'.$event->id) }}"><span class="card-title"><b>{{ $event->event_name }}</b></span></a>
            </div>
            <div class="card-content">
              <p class="truncate">
              {{ $event->description }}
              </p>
            </div>
            <a href="{{ url('schedule-a-trip/'.$event->id) }}"><input type="submit" value="Schedule a trip" class="btn"></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endsection