@extends('layout.mastah')
@section('title', 'Penjulan Produk')
@section('content')
<html>
	<head>
	   <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
    
    <script type='text/javascript'>
    	 function simpleSlideshow(slideContainer, duration)
    {
        var currentSlide = $('img:nth-child(1)', slideContainer);
 

        $(currentSlide)
        .css({
            opacity: 0 
        	})
        .appendTo(slideContainer)
        .animate({
            opacity: 1
        }, 'normal', function(){
            setTimeout(function(){
         
                simpleSlideshow(slideContainer, duration);
            }, duration);
        })
    }
    $(function(){
        var duration = 3000; // millsecond        
        var slideContainer = $('#slideshow');
        simpleSlideshow(slideContainer, duration);
    });
        </script></head>

<h2>Selamat Datang Di Toko Online PT. Hendri Heryanto</h2>
 
		
@endsection
<div id='slideshow'>

    <img src='\css\barang11.png' class="njir">
    <img src='\css\barang2.jpg' class="njir">
    <img src='\css\barang3.jpg' class="njir">
    <img src='\css\barang4.jpg' class="njir">

</div>

</html>


