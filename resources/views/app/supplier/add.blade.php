@extends('app.layouts.basic') 

@section('title', 'Supplier')

@section('content')
<div class="page-content">
  <div class="page-title-2">
    <p>Add Supplier</p>
  </div>

  @include('app.supplier._partials.menu')

  <div class="page-info">
    {{ $message ?? '' }}
    <div style="width: 30%; margin: 0 auto;">
      <form action="{{ route('app.supplier.add') }}" method="post">
        <input type="hidden" value="{{ $supplier->id ?? old('id') }}" name="id" id="id">
        @csrf
        <input type="text" value="{{ $supplier->name ?? old('name') }}" name="name" id="name" placeholder="Name" class="black-border">
        {{ $errors->has('name') ? $errors->first('name') : '' }} 

        <input type="text" value="{{ $supplier->site ?? old('site') }}" name="site" id="site" placeholder="Site" class="black-border">
        {{ $errors->has('site') ? $errors->first('site') : '' }} 

        <input type="text" value="{{ $supplier->uf ?? old('uf') }}" name="uf" id="uf" placeholder="UF" class="black-border">
        {{ $errors->has('uf') ? $errors->first('uf') : '' }} 

        <input type="text" value="{{ $supplier->email ?? old('email') }}" name="email" id="email" placeholder="E-mail" class="black-border">
        {{ $errors->has('email') ? $errors->first('email') : '' }} 

        <button type="submit" class="black-border">Save</button>
      </form>
    </div>
  </div>
</div>
@endsection