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
<h3>Hasil Pencarian Pelanggan</h3>
<div id="nyari">
  <form action="/hasil2" action="POST">
          <input type = "text" id = "cari2" name = "cari2" placeholder="Search (Pelanggan)..." class="cariweh2"> 
           <input class = "tombol2" type="submit" value = "Search Human" class="geser"> </form></div>
<table class = "table table-hover table-bordered">
<thead>
        <tr>
               <th>id</th>
                <th>Nama Pelanggan</th>
              <th>Alamat</th>
                <th>No Telepon</th>
              <th>Nama Produk</th>
               <th>Harga Produk</th>
               <th>Pembayaran</th>
             <th>Sisa Pembayaran</th>
               <th>Tanggal Transaksi</th>
                   <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @if (count($name)>0)
              @foreach($name as $data)
        <tr>
               <td>{{$data->id}}</td>
      <td>{{$data->nama_pelanggan}}</td>
      <td >{{$data->alamat}}</td>
      <td>{{$data->no_telepon}}</td>
      <td>{{$data->nama_produk}}</td>
      <td>Rp.{{$data->harga_produk}}</td>
      <td>Rp.{{$data->pembayaran}}</td>
      <td>Rp.{{$data->total}}</td>
      <td>{{$data->created_at}}</td>
      <td><a href="/produkpelanggan/{{$data->id}}/editutang"><input type="submit" name="utang" value="Pembayaran" class="btn btn-primary"></a></td>

        </tr>             

              @endforeach
        @else
        Data tidak ditemukan
        @endif
        </tbody>
        </table>
    </div>
    </body>
    </html> 

    @endsection                