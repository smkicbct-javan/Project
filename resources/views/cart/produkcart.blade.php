<div class="container">
	<h4><i class="fa fa-shopping-cart"></i> cart</h4>
	<hr>
	<!-- Panel -->
	
	<div class="panel">
		<div class="panel-heading">Cart</div>
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
          			<a href="{{ url('cart/delete/'.$cart->rowid) }}">delete</a>
          		</td>
          	</tr>
          <?php $i++; ?>
          @endforeach

          </tbody>
      </table>
      <div class="panel-footer">
      	<a href="/produkpelanggan/" class="btn btn-white">Continue Shopping</a>
      	
      </div>
	</div>
    <!-- / Panel -->
</div>