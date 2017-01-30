@extends('layout.mastah')
@section('title', 'Penjualan') 
@section('content')
<h1>Penjualan Produk</h1>
<h2> {{$produk->nama_produk}} !!</h2>
<hr>
<p>
	Spek = {{$produk->spek_produk}}
</p>

<p>
	Harga = {{$produk->harga_produk}}
</p>

@endsection