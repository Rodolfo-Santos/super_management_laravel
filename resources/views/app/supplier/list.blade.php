@extends('app.layouts.basic') 

@section('title', 'Supplier')

@section('content')
<div class="page-content">
  <div class="page-title-2">
    <p>List Suppliers</p>
  </div>
  
  @include('app.supplier._partials.menu')

  <div class="page-info">
    <div style="width: 90%; margin: 0 auto;">
      <table border="1" width="100%">
        <thead>
          <tr>
            <th>Name</th>
            <th>Site</th>
            <th>UF</th>
            <th>E-mail</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($suppliers as $supplier)
            <tr>
              <td>{{ $supplier->name}}</td>
              <td>{{ $supplier->site}}</td>
              <td>{{ $supplier->uf}}</td>
              <td>{{ $supplier->email}}</td>
              <td><a href="{{ route('app.supplier.edit', $supplier->id) }}">Edit</a></td>
              <td>Delete</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      
      {{ $suppliers->appends($request)->links() }}
    </div>
  </div>
</div>
@endsection