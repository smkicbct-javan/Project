@extends('layout.mastah')
@section('title', 'Penjualan') 
@section('content')

<h1> Edit Produk</h1>
	<form action="/produkpelanggan/{{$la->id}}" method="post" enctype="multipart/form-data">
	
	<div class="panel-body">
	<div class="form-group">
		
			Nama Pelanggan
			<input type="text" name="nama_pelanggan" value='{{$la->nama_pelanggan}}' class="form-control">
		

		
			Alamat
			<input type="text" name="alamat" value="{{$la->alamat}}" class="form-control">
		

		
			No telepon
			<input type="text" name="no_telepon" value="{{$la->no_telepon}}" class="form-control">
		

		
			Nama Produk
			<input type="text" name="nama_produk" value="{{$la->nama_produk}}" class="form-control">

			Harga Produk
			<input type="text" name="harga_produk" value="{{$la->harga_produk}}" class="form-control">

			Sisa Pembayaran
			<input type="text" name="total" value="{{$la->total}}" class="form-control">
		
			Pembayaran
			<input type="text" name="pembayaran" value="{{$la->pembayaran}}" class="form-control">
			
			<input type="submit" name="submit" value="edit" class="btn btn-primary">
			
					{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
		
		</div></div>
	</form>  
@endsection