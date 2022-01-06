@extends('site.layouts.basic')
@section('title', $title)

@section('content')
  <div class="page-content">
    <div class="page-title">
      <h1>Contact Us</h1>
    </div>

    <div class="page-information">
      <form action="{{ route('site.login') }}" method="POST" style="width: 30%; margin: 0 auto;">
        @csrf
        <input name="user" value="{{ old('user') }}" type="text" placeholder="User" class="black-border">
        {{ $errors->has('user') ? $errors->first('user') : '' }} 

        <input name="password" type="password" placeholder="Password" class="black-border">
        {{ $errors->has('password') ? $errors->first('password') : '' }} 

        <button type="submit" class="black-border">Acessar</button>
      </form>
      {{ isset($error) && $error != '' ? $error : '' }}
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
