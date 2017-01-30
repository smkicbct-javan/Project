@extends('layout.mastah')
@section('title', 'Penjualan') 
@section('content')

<h1> Edit Produk</h1>
	<form action="/produk/{{$produk->id}}" method="post" enctype="multipart/form-data">
	
	<div class="panel-body">
	<div class="form-group">
		
			Nama Produk
			<input type="text" name="nama_produk" value='{{$produk->nama_produk}}' class="form-control">
		

		
			Speksifikasi Produk
			<textarea name="spek_produk" class="form-control">{{$produk->spek_produk}}</textarea>
		

		
			Harga Barang
			<input type="text" name="harga_produk" value="{{$produk->harga_produk}}" class="form-control">
		

		
			Gambar
			<input type="file" id="file_gambar" name="file_gambar" >
		
			
			<input type="submit" name="submit" value="edit" class="btn btn-primary">
			
					{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
		
		</div></div>
	</form>  
@endsection