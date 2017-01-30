@extends('layout.mastah')
@section('title', 'Penjulan Produk')
@section('content')
	
		
<div class="container">
<br>
	<h3>Table Produk</h3>
	<table class="table table-hover ">
	<thead>
		<tr>
			
			<th>Nama Produk</th>
			<th>Speksifikasi</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th colspan="2"><center>Aksi</center></th>
		
			
		</tr>
	</thead>
	<tbody>
	<?php $no = $produk->first() ; ?>
	@foreach ($produk as $prd)
	<?php $no++ ;?>
		<tr>
			
			<td >{{$prd->nama_produk}}</td>
			<td>{{$prd->spek_produk}}</td>
			<td>Rp.{{$prd->harga_produk}}</td>
			<td><img src="{{ url('uploadgambar') }}/{{ $prd->file_gambar }}" max-width="250px" height="120px" ></td>
			<td><center><a href="/produk/{{$prd->id}}/edit"><input type="submit" name="edit" value="Edit" class="btn btn-primary"></a></center></td>
			<td><form action="/produk/{{$prd->id}}" method="post">
					<center><input type="submit" name="submit" value="Delete" class="btn btn-danger"></center>
					{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE"></form></td>
				
		
		</tr>

	@endforeach
	</tbody>
</table><?php echo str_replace('/?', '?', $produk->render()); ?>
</div>
@endsection 



