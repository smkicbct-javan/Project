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
            <h3>Gambar</h3>
            <hr>
 
    <form action="{{ url('gambar') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
 
                <div class="form-group">
                    <label for="judul">Judul Gambar</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Gambar">
                </div>
 
                <div class="form-group">
                    <label for="file_gambar">Judul Gambar</label>
                    <input type="file" id="file_gambar" name="file_gambar">
                </div>
 
                <input class="btn btn-primary" type="submit" value="Upload">
            </form>
 
        @if(count($errors) > 0)
            <div class="row">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
            </div>
        @endif
 
        </div>
    </body>
</html>