@extends('site.layouts.basic')
@section('title', 'Contact')

@section('content')
  <div class="page-content">
    <div class="page-title">
      <h1>Contact Us</h1>
    </div>

    <div class="page-information">
      <div class="contact-principal">
        <form>
          <input type="text" placeholder="Name" class="black-border">
          <br>
          <input type="text" placeholder="Phone" class="black-border">
          <br>
          <input type="text" placeholder="E-mail" class="black-border">
          <br>
          <select class="black-border">
            <option value="">What is the contact reason?</option>
            <option value="">Doubt</option>
            <option value="">Praise</option>
            <option value="">Complaint</option>
          </select>
          <br>
          <textarea class="black-border">Fill your message here</textarea>
          <br>
          <button type="submit" class="black-border">Send</button>
        </form>
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
