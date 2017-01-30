@extends('layout.mastah')
@section('title', 'Data transaksi')
@section('content')
<br>
<table class="table table-hover ">
	<thead>

		<tr>
			
			<th>id_transaksi</th>
			<th>Total</th>
			<th> Total Semua</th>
		</tr>
	</thead>
	<tbody>@foreach($user->orders as $tomer)
		<tr>
			<td><a href="/produk/transaksi_detail/{{$tomer->id}}">{{$tomer->id}}</a></td>
			<td>Rp. {{$tomer->zaz()}}</td>
			<td>Rp. {{$tomer->sas()}}</td>
		</tr>
			@endforeach</tbody>

			
			
			
			
			
</table>
@endsection