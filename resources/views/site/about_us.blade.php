@extends('site.layouts.basic')
@section('title', 'About Us')

@section('content')
  <div class="page-content">
    <div class="page-title">
      <h1>Hello, i'm the Super Management</h1>
    </div>

    <div class="page-information">
      <p>Super Management is the online administrative control system that can transform and empower business
         of your company.</p>
      <p>Developed with the latest tecnology for you to take care of what is most important, your business!</p>
    </div>
  </div>

  <div class="footer">
    <div class="social-networks">
      <h2>Social Networks</h2>
      <img src="{{ asset('img/facebook.png') }}">
      <img src="{{ asset('img/linkedin.png') }}">
      <img src={{ asset('img/youtube.png') }}">
    </div>
    <div class="area-contact">
      <h2>Contact</h2>
      <span>(11) 3333-4444</span>
      <br>
      <span>supergestao@dominio.com.br</span>
    </div>
    <div class="location">
      <h2>Location</h2>
      <img src={{ asset('img/mapa.png') }}>
    </div>
  </div>
@endsection
