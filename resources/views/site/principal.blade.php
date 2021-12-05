@extends('site.layouts.basic')
@section('title', 'Principal')

@section('content')
  <div class="featured-content">

    <div class="left">
      <div class="information">
        <h1>Super Management System</h1>
        <p>Business management software ideal for your company<p>
            <div class="check">
              <img src="{{ asset('img/check.png') }}">
              <span class="white-text">Complete and uncomplicated management </span>
            </div>
            <div class="check">
              <img src="{{ asset('img/check.png') }}">
              <span class="white-text">Your Company in the cloud</span>
            </div>
      </div>

      <div class="video">
        <img src="{{ asset('img/player_video.jpg') }}">
      </div>
    </div>

    <div class="right">
      <div class="contact">
        <h1>Contact</h1>
        <p>If you have any questions, please contact our team using the form below.<p>
          @component('site.layouts._components.contact_form', ['class' => 'white-border'])
          @endcomponent
      </div>
    </div>
  </div>
@endsection