<h1> Suppliers </h1>

<section>
  @if(count($suppliers) > 0 && count($suppliers) < 10)
    <h2>There are some registered suppliers.</h2>
  @elseif(count($suppliers) > 10)
    <h2>There are many registered suppliers.</h2> 
  @else
    <h2>There are no regitered suppliers.</h2>
  @endif

  <p>Supplier: {{ $suppliers[0]['name'] }}</p>
  <p>Status: {{ $suppliers[0]['status'] }}</p>

</section>
