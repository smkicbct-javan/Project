@extends('layout.mastah')
@section('title', 'Penjulan Produk')
@section('content')


<div class="container">
	
	<hr>
	<!-- Panel -->
	
	<div class="panel">
		<div class="panel-heading">Shopping Cart</div>
		<table class="table table-striped m-b-none text-sm">
          <thead>
            <tr>
              <th width="8">No</th>
              <th width="300">Product Name</th>                    
              <th>Price</th>
              <th width="100">Quantity</th>
              <th width="200">Action</th>
              
            </tr>
          </thead>
          <tbody>


          <?php $i = 1; ?>
          @foreach($cart_content as $cart)
          	<tr>
          		<td>{{ $i }}</td>
          		<td>{{ $cart->name }}</td>
          		<td>{{ $cart->price }}</td>
              <td>{{ $cart->qty }}</td>
           
              


          		<td>
          			<a href="{{ url('cart/delete/'.$cart->rowId) }}" class="btn btn-warning">Delete</a>
          		</td>
          	</tr>
          <?php $i++; ?>
          @endforeach

          </tbody>
      </table>
      <div class="panel-footer">
      	<a href="/produkpelanggan/" class="btn btn-info">Continue Shopping</a>
        <a href="{{ url('cart/checkout') }}" class="btn btn-info">Checkout</a>
      


      </div>
	</div>
    <!-- / Panel -->
</div>

@endsection

