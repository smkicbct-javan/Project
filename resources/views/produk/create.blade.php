@extends('layout.mastah')
@section('title', 'Create New Product') 
@section('content')

<h1> Input Produk</h1><hr>
	<form action="/produk" method="post" enctype="multipart/form-data" >

	<div class="panel-body">
	<div class="form-group">
		<div class="col-md-6">
		Nama Produk
		 
		<input type="text" name="nama_produk" placeholder="Nama Produk" class="form-control" >
		 @if($errors->has('nama_produk'))  
                    {{$errors->first('nama_produk')}}
                    @endif
		</div>
	

	<div class="col-md-6">
		Speksifikasi Produk
		 
		<textarea name="spek_produk" colspan="10" rowspan="40" placeholder="Speksifikasi Produk" class="form-control"></textarea>@if($errors->has('spek_produk'))  
                    {{$errors->first('spek_produk')}}
                    @endif
		</div>

	<div class="col-md-6">
		Harga Produk
		 
		<input type="text" name="harga_produk" placeholder="Harga Produk" class="form-control">
		@if($errors->has('harga_produk'))  
                    {{$errors->first('harga_produk')}}
                    @endif
		</div>

		 <div class="col-md-6">
		 <br>
		Gambar Produk
		
		<input type="file" id="file_gambar" name="file_gambar">
					@if($errors->has('file_gambar'))
                    {{$errors->first('file_gambar')}}
                    @endif
		</div>
	 <div class="col-md-6"><br>
	<input type="submit" name="submit" value="Create" class="btn btn-primary">
		<input type="reset" name="reset" value="Reset" class="btn btn-default">
	</div>
	{{csrf_field()}}
	</div></div></form>  
	


@endsection