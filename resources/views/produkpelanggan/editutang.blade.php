@extends('layout.mastah')
@section('title', 'Penjualan') 
@section('content')

<h1> Pembayaran Hutang Terutang</h1>

	<form action="/produkpelanggan/{{$pelanggan->id}}" method="post">
	
	<div class="panel-body">
	<div class="form-group">
		
			Nama Pelanggan
			<input type="text" name="nama_pelanggan" value='{{$pelanggan->nama_pelanggan}}' class="form-control" readonly="true">
			
		

		
			
		

		
			Nama Produk
			<input type="text" name="nama_produk" value="{{$pelanggan->nama_produk}}" class="form-control" readonly="true">

			Harga Produk
			<input type="text" name="harga_produk" value="{{$pelanggan->harga_produk}}" class="form-control" readonly="true">

			Sisa Pembayaran
			<input type="text" name="total" value="{{$pelanggan->total}}" class="form-control" readonly="true">

			Pembayaran
			<input type="text" name="pembayaran" class="form-control"> @if($errors->has('edan'))
                  <p> Masukan Pembayaran yang Sesuai</p>
                    @endif


			<input type="text" name="alamat" value="{{$pelanggan->alamat}}" class="form-control ilang" readonly="true" >

			<input type="text" name="no_telepon" value="{{$pelanggan->no_telepon}}" class="form-control ilang" readonly="true">
			<br>
			<input type="submit" name="submit" value="Pembayaran" class="btn btn-primary">
			
					{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
		
		</div>
		</div>
		
	</form>  

@endsection

