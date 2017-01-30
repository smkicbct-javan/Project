<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Upload Gambar dengan Laravel 5.2 &raquo; Jaranguda.com</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h3>Gallery</h3>
            <hr>
 
<div class="row">
  <div class="col-md-6">
    @if(count($gambar) > 0)
 
        @foreach ($gambar as $file)
        <img src="{{ url('uploadgambar') }}/{{ $file->file_gambar }}" class="img-responsive">
        @endforeach
 
    @endif
  </div>
</div>
 
 
    </body>
</html>