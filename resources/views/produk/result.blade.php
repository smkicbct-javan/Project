@extends('layout.mastah')

@section('title','result')

@section('content')
<head>
       <meta charset = "utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name = "viewport" content="width=device-width, initial-scale=1">
       <title>pencarian</title>
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class = "container">
<h3>Hasil Pencarian</h3>
<table class = "table table-hover table-bordered">
<thead>
        <tr>
               <th>Id</th>
               <th>Nama Produk</th>
               <th>Deskripsi</th>
               <th>Harga Produk</th>
               <th>gambar</th>
               <th colspan="2">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @if (count($name)>0)
              @foreach($name as $data)
        <tr>
               <td>{{ $data->id }}</td>
               <td>{{ $data->nama_produk }}</td>
               <td>{{ $data->spek_produk }}</td>
              <td>Rp. {{ $data->harga_produk }}</td>
              <td><img src="{{ url('uploadgambar') }}/{{ $data->file_gambar }}" width="200px" height="100px"></td>
             

            @if(Auth::user()->admin == 0)
              <td><a href="/produk/{{$data->id}}"><input type="submit" name="beli" value="Beli" class="btn btn-primary"></a></td>
              <td><a class="btn btn-info pull-right" href="{{ url('produk/cart/'.$data->id) }}"><i class="fa fa-shopping-cart"></i> add to cart</a></td>
            @endif 


             @if(Auth::user()->admin == 1)
            <td><center><a href="/produk/{{$data->id}}/edit"><input type="submit" name="edit" value="Edit" class="btn btn-primary"></a></center></td>
      <td><form action="/produk/{{$data->id}}" method="post">
          <center><input type="submit" name="submit" value="Delete" class="btn btn-primary"></center>
          {{csrf_field()}}
          <input type="hidden" name="_method" value="DELETE"></form></td>
             @endif

        </tr>             

              @endforeach
        @else
        <td colspan="6"><center>Data tidak ditemukan</center></td>
        @endif
        </tbody>
        </table> 
    </div>
    </body>
    </html> 

    @endsection                