@extends('app.layouts.basic') 

@section('title', 'Supplier')

@section('content')
<div class="page-content">
  <div class="page-title-2">
    <p>Add Supplier</p>
  </div>

  @include('app.supplier._partials.menu')

  <div class="page-info">
    <div style="width: 30%; margin: 0 auto;">
      <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Name" class="black-border">
        <input type="text" name="site" id="site" placeholder="Site" class="black-border">
        <input type="text" name="uf" id="uf" placeholder="UF" class="black-border">
        <input type="text" name="email" id="email" placeholder="E-mail" class="black-border">
        <button type="submit" class="black-border">Add</button>
      </form>
    </div>
  </div>
</div>
@endsection