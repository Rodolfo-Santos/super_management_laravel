@extends('app.layouts.basic') 

@section('title', 'Supplier')

@section('content')
<div class="page-content">
  <div class="page-title-2">
    <p>List Suppliers</p>
  </div>
  
  @include('app.supplier._partials.menu')

  <div class="page-info">
    <div style="width: 30%; margin: 0 auto;">
      --- List ---
    </div>
  </div>
</div>
@endsection