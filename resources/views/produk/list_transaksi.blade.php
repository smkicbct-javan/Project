
@extends('layout.mastah')
@section('title', 'Data transaksi')
@section('content')
<br>

<table class="table table-hover ">
	<thead>

		<tr>
			
			<th>Nama User</th>
		</tr> {{Auth::user()->admin== 0}}
	</thead>
	<tbody>@foreach ($user as $val)
		<tr>	
			<td><a href="/produk/data_transaksi/{{$val->id}}">{{$val->name}}<br></td>
		</tr>	
		@endforeach
	
		

	
	</tbody>
</table>









@endsection