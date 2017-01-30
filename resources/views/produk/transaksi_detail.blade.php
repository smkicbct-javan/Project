@extends('layout.mastah')
@section('title', 'Data transaksi')
@section('content')
<br>
<table class="table table-hover ">
	<thead>

		<tr>
			<th>id</th>
			<th>nama produk</th>
			<th>kuantitas</th>
			<th>Harga</th>
			<th>total</th>
			
			
		</tr>
	</thead>
	<tbody>@foreach($detail->orders_detail as $dtl)
		<tr>
			
			
			<td>{{$dtl->id}}</td>
			<td>{{$dtl->getname()}}</td>
			<td>{{$dtl->kuantitas}}</td>
			<td>{{$dtl->getharga()}}</td>
			<td>{{$dtl->total}}</td>

			
			
		</tr>
			@endforeach
			
		
	
	</tbody>
</table>
@endsection