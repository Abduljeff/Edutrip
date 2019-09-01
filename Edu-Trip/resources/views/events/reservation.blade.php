@extends('layouts.frontLayout1.front_design')
@section('content')
<!-- Section: fill up -->
<section id="contact" class="section section-contact scrollspy">
  @if(Session::has('flash_message_error'))
  <div id="card-alert" class="card red lighten-5">
    <div class="card-content red-text">
      <p>{!! session('flash_message_error') !!}<a href="" type="button" class="close red-text right" data-dismiss="alert" aria-label="Close" onclick="document.getElementById('card-alert').style.display='none'">
        <span aria-hidden="true">X</span>
      </a></p>
    </div>
  </div>
  @endif  
  @if(Session::has('flash_message_success'))
  <div id="card-alert" class="card green lighten-5">
    <div class="card-content green-text">
      <p>{!! session('flash_message_success') !!}<button type="button" class="close green-text right" data-dismiss="alert" aria-label="Close" onclick="document.getElementById('card-alert').style.display='none'">
        <span aria-hidden="true">×</span>
      </button></p>
    </div>
  </div>
  @endif
  <div class="container">
    <div class="row grey lighten-3 hoverable" style="border-radius: 10px;">
      <div class="col s12 m4">
        <form action="{{ url('schedule-a-trip/'.$eventSched->id) }}" method="post">{{ csrf_field() }}
          <h5>Fill up form</h5>
          <br>
          <!-- magic codees -->
          <input type="hidden" name="event_id" value="{{ $eventSched->id }}">
          <input type="hidden" name="owner_id" value="{{ $eventSched->user_id }}">
          <!-- end magic codes -->
          <div class="input-field">
            <input type="text" id="event_name" name="event_name" value="{{ $eventSched->event_name }}" required>
            <label for="event_name">Title</label>
          </div>
          <div class="input-field">
            <input type="text" id="date" name="date" class="datepicker" required>
            <label for="date">Date</label>
          </div>
          <div class="input-field">
            <input type="text" id="nop" name="nop" required>
            <label for="nop">Number of people</label>
          </div>
          <input type="submit" value="Submit" class="btn">
        </form>
      </div>
      <div class="col s12 m6 right">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('images/backend_images/events/large/'.$eventSched->image) }}">
            <span class="card-title">{{ $eventSched->event_name }}</span>
          </div>
          <div class="card-content">
            <p>{{ $eventSched->description }}</p><br>
            <p><b>Address: </b>{{ $eventSched->event_address }}</p>
            <p><b>Schedule: </b>{{ $eventSched->event_schedule }}</p>
            <p><b>Fee: </b>₱ {{ $eventSched->price }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
