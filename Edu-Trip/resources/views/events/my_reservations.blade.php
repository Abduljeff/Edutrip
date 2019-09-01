@extends('layouts.frontLayout1.front_design')
@section('content')

<!-- Section: fill up -->
<section id="contact" class="section section-contact scrollspy">
  <div style="width: 85%;" class="container">
    <div class="row grey lighten-3 hoverable" style="border-radius: 10px;">
      <div class="col s12 m6">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
      </div>
      <div class="col s12 m6 z-depth-2">
      	<table class="responsive-table highlight centered">
        <thead>
          <tr>
              <th>Title</th>
              <th>Date</th>
              <th>Status</th>
              <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $dat)
          <tr>
            <td>{{ $dat->title }}</td>
            <td>{{ $dat->start_date }}</td>
            <td>{{ $dat->status }}</td>
            <td>
              <a class="waves-effect waves-light btn-small" href="{{ url('event/'.$dat->event_id) }}">View</a>
              <a class="waves-effect waves-light btn-small red darken-2">Cancel</a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
      </div>
    </div>
  </div>
</section>
@endsection
