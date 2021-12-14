@extends('site.layouts.basic')
@section('title', 'Contact')

@section('content')
  <div class="page-content">
    <div class="page-title">
      <h1>Contact Us</h1>
    </div>

    <div class="page-information">
      <div class="contact-principal">
        @component('site.layouts._components.contact_form', ["class" => 'black-border', "reason_list" => $reason_list ])
          <p>Our team will analize your message and we will respond as soon as possible</p>
          <p>Our average time is 48 hours </p>
        @endcomponent
      </div>
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
