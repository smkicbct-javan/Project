@extends('layout.mastah')
@section('title', 'Penjualan') 
@section('content')
<head><script type="text/javascript"> 
function displayResult(frm){ 
var sia="";
var sia2="";
var sia3="";
 for (i = 0; i < frm.length; i++)
 	{ 
  if (frm[i].checked){   
   sia += frm[i].value +"{{Auth::user()->name}}";
   sia2 += frm[i].value +"{{Auth::user()->alamat}}";
   sia3 += frm[i].value +"{{Auth::user()->no_telepon}}";
  }
    }
    document.getElementById("order").value=sia;
    document.getElementById("order1").value=sia2;
    document.getElementById("order2").value=sia3;
}
</script></head>
<h1>Penjualan Produk</h1>
<h2> {{$produk->nama_produk}} !!</h2>
<hr>

<img src="{{ url('uploadgambar') }}/{{ $produk->file_gambar }}" width="400" height="300" class="john">
<table  width="400px" height="100px">
	<tr>
		<td>Spek Produk</td>
		<td>: {{$produk->spek_produk}}</td>
	</tr>

	<tr>
		<td>Harga Produk</td>
		<td>:Rp. {{$produk->harga_produk}}</td>
</tr>
</table>
	
@endsection

<div id="contentv2">

	<form action="/produkpelanggan" method="POST">
	<center><p class="one"><br>FORM PEMBELIAN</p></center>

		<table height="300px" width="400px" >
			<tr>

				<td>Nama* </td>
				
				<td><input type="text" name="nama_pelanggan"  id="order"> <input type="checkbox" onclick="displayResult(this.form)" value="">*isi</td>
			</tr>

			<tr>
				<td>Alamat* </td>
				<td><input type="text" name="alamat" id="order1"></td>
			</tr>
			
			<tr>
				<td>No Telepon </td>
				<td><input type="text" name="no_telepon" id="order2"></td>
			</tr>

			<tr>
				<td>Nama Barang </td>
				<td><input type="text" name="nama_produk" value="{{$produk->nama_produk}}" readonly="true"></td>
			</tr>

			<tr>
				<td>Harga Barang </td>
				<td><input type="text" name="harga_produk" value="{{$produk->harga_produk}}" readonly="true"></td>
			</tr>

			<tr>
				<td>Pembayaran</td>
				<td>:<input type="text" name="pembayaran" placeholder="Pembayaran" value=""></td>
			</tr>

			
				
			
			{{csrf_field()}}

			<tr>

		
		<td></td>
		<td><input type="submit" name="transaksi" value="Transaksi" class="btn btn-primary"> <input type="reset" name="reset" value="reset" class="btn btn-primary"></td>

		</table>
	</form>
</div>
