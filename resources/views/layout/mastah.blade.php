<html>
		<head>
			<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		
		<link rel="stylesheet" type="text/css" href="/css/master.css">

	<title>@yield('title')</title>

<meta name="csrf-token" content="{{ csrf_token() }}">
					 <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
		</head>
	<body>
<div id="wrapper">
	<div id="menu_atas_v2">
	<h1> 
	<img src="/css/l1.jpg" width="100px" height="50px">
	<img src="/css/l2.jpg" width="100px" height="50px">
	<img src="/css/l3.jpg" width="100px" height="50px">
	Penjualan Produk Elektronik OnLine
	<img src="/css/l4.jpg" width="100px" height="50px">
	
	<img src="/css/l6.jpg" width="100px" height="50px">
	
	<img src="/css/l8.jpg" width="100px" height="50px"></h1>
	<div id="menu_atas">
	 @if(Auth::user()->admin == 1)
			<a href="/homes"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
			<a href="/produk"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> Produk</a>
			<a href="/produk/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Input Produk</a>
			<a href="/produk/list_transaksi"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Data Transaksi</a>
			<a href="/homes/contact"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact Us</a>
			


			<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
            <font color="white">Admin {{Auth::user()->name}} </font>


			 <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}</form>
	
	 @endif

	 	 @if(Auth::user()->admin == 0)
			<a href="/homes">
			<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>

			<a href="/produkpelanggan">
			<span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> Produk</a>
			
			<a href="/homes/contact">
			<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact Us</a>
			
			<a href="/produkpelanggan/produkcart">
			<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart</a>
			

			<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
            <font color="white">User {{Auth::user()->name}} </font> 
			 <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}</form>
			

	 @endif
	
			

            <form action="/hasil" action="POST">
           <font color="white"><?php echo date('D, d M Y  ');?></font><input type = "text" id = "cari" name = "cari" placeholder="Search..." class="cariweh">
          
    <input class = "tombol2" type="submit" value = "Search" class="btn btn-primary"></form>
</div></div>
			<div id="content">
				@yield('content')
			</div>
		
		<div id="footer">
			<p>
			&copy; Hendri Heryanto 2017
			</p>
		</div>
</div>
	</body>
</html>

