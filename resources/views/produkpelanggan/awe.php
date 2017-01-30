@extends('layout.mastah')
@section('title', 'Penjulan Produk')
@section('content')
<html>
<head>
	
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/jquery.livequery.js"></script>

<script type="text/javascript">


$(document).ready(function() {
	
	var Arrays=new Array();
	
	$('#wrap li').mousemove(function(){
		
		var position = $(this).position();
		
		$('#cart').stop().animate({
																									
				left   : position.left+'px',
				
			},250,function(){
			
		});			
	}).mouseout(function(){
		
	});	
	
	$('#wrap li').click(function(){
		
		var thisID = $(this).attr('id');
		
		var itemname  = $(this).find('div .name').html();
		var itemprice = $(this).find('div .price').html();
			
		if(include(Arrays,thisID))
		{
			var price 	 = $('#each-'+thisID).children(".shopp-price").find('em').html();
			var quantity = $('#each-'+thisID).children(".shopp-quantity").html();
			quantity = parseInt(quantity)+parseInt(1);
			
			var total = parseInt(itemprice)*parseInt(quantity);
			
			$('#each-'+thisID).children(".shopp-price").find('em').html(total);
			$('#each-'+thisID).children(".shopp-quantity").html(quantity);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)-parseInt(price);
			
			prev_charges = parseInt(prev_charges)+parseInt(total);
			$('.cart-total span').html(prev_charges);
			
			$('#total-hidden-charges').val(prev_charges);
		}
		else
		{
			Arrays.push(thisID);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)+parseInt(itemprice);
			
			$('.cart-total span').html(prev_charges);
			$('#total-hidden-charges').val(prev_charges);
			
			$('#left_bar .cart-info').append('<div class="shopp" id="each-'+ thisID +'"><div class="label">'+ itemname +'</div><div class="shopp-price"> Rp.<em>'+ itemprice +'</em></div><span class="shopp-quantity">1</span><img src="/css/remove.png" class="remove" /><br class="all" /></div>');
			
			$('#cart').css({'-webkit-transform' : 'rotate(20deg)','-moz-transform' : 'rotate(20deg)' });
		}
		
		setTimeout('angle()',200);
	});	
	
	
	$('.remove').livequery('click', function() {
		
		var deduct = $(this).parent().children(".shopp-price").find('em').html();
		var prev_charges = $('.cart-total span').html();
		
		var thisID = $(this).parent().attr('id').replace('each-','');
		
		var pos = getpos(Arrays,thisID);
		Arrays.splice(pos,1,"0")
		
		prev_charges = parseInt(prev_charges)-parseInt(deduct);
		$('.cart-total span').html(prev_charges);
		$('#total-hidden-charges').val(prev_charges);
		$(this).parent().remove();
		
	});	
	
	$('#Submit').livequery('click', function() {
		
		var totalCharge = $('#total-hidden-charges').val();
		
		$('#left_bar').html('Total Charges: Rp. '+totalCharge);
		
		return false;
		
	});	
	
});

function include(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return true;
  }
}
function getpos(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return i;
  }
}
function angle(){$('#cart').css({'-webkit-transform' : 'rotate(0deg)','-moz-transform' : 'rotate(0deg)' });}

</script>
</head>
<body>
<div class="container">

	<h3>Daftar Cart</h3>
  <ul class="left_menu">
<div id="left_bar"> 
		
		<form action="#" id="cart_form" name="cart_form">
		
		<div class="cart-info"></div>
		
		<div class="cart-total">
		
			<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> Rp.<span>0</span>
			
			<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" />
		</div>
		
		<button type="submit" id="Submit" >CheckOut</button>
		
		</form>
		
	</div> </ul>


	<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th><center>Nama Produk <br> Harga</center></th>
			<th>Speksifikasi</th>
			<th>Gambar</th>
			<th ><center>Aksi</center></th>
		
		</tr>
	</thead>
	<tbody>
	<?php $no = $produk->first() ; ?>
	@foreach ($produk as $prd)
	<?php $no++ ;?>
		<tr>
			<td>{{$prd->id}}</td>
			<td><div id="wrap" align="right"><ul><li id="{{$prd->id}}"><div><span class="name">{{$prd->nama_produk}}</span>
			<br>Rp.<span class="price">{{$prd->harga_produk}}</span></div></li></ul></div></td>
			<td>{{$prd->spek_produk}}</td>
			<td><img src="{{ url('uploadgambar') }}/{{ $prd->file_gambar }}" width="300px" height="200px"></td>
			<td><center><a href="/produk/{{$prd->id}}"><input type="submit" name="beli" value="Beli" class="btn btn-primary"></a>

			<a class="btn btn-info pull-right" href="{{ url('produk/cart/'.$prd->id) }}"><i class="fa fa-shopping-cart"></i> add to cart</a>

			</center></td>
			 
		</tr></a>

	@endforeach
	</tbody>
</table><?php echo str_replace('/?', '?', $produk->render()); ?>
</div>
</body>
</html>
@endsection 




