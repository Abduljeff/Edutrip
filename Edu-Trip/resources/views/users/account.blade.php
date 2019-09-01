@extends('layouts.frontLayout1.front_design')
@section('content')
<!-- Section: Popular Places -->
<section id="popular" class="section section-popular scrollspy">
  <div class="container">
    <div class="row">
      <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width tab-demo grey lighten-3">
        <li class="tab col s3"><a href="#test-swipe-1">Messages</a></li>
        <li class="tab col s3"><a href="#test-swipe-2">profile</a></li>
        <li class="tab col s3"><a href="#test-swipe-3">Edit Profile</a></li>
      </ul>

      <div id="test-swipe-1" class="col s12">
        <ul class="collection">
          <li class="collection-item avatar">
            <img src="images/yuna.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>First Line <br>
               Second Line
            </p>
            <!-- <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> -->
          </li>
        </ul>
      </div>
      <div id="test-swipe-2" class="col s12">Test 2</div>
      <div id="test-swipe-3" class="col s12">Test 3</div>
    </div>
  </div>
</section>
@endsection