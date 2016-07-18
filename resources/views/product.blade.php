<!DOCTYPE html>
<html>
    <head>
		{!! Html::style(elixir('css/app.css')) !!}
		{!! Html::script(elixir('js/app.js')) !!}
        <title>Product</title>
		<style>
			.banner{
				background: url(image/acer.jpg);
		</style>
	</head>
	<body>
	<div class="navbar">
		<div class="container-fluid">
				<div class="col-sm-2 text-center">
					<h4><a href="http://localhost:8000" class="test1"><img style="margin:0 auto" width="40" class="img-circle img-responsive" src="image/oil.jpg"></img>Asih Jaya Motor Oil</a></h4>
				</div>
				<div class="col-sm-2">
				</div>
				<div class="col-sm-2 text-center">
					<h4><a href="http://localhost:8000" class="test1"><img style="margin:0 auto" width="40" class="img-circle img-responsive" src="image/home.png"></img>Home</a></h4>
				</div>
				<div class="col-sm-2 text-center">
					<h4><a href="http://localhost:8000/product" class="test1"><img style="margin:0 auto" width="40" class="img-circle img-responsive" src="image/bag.png"></img>Product</a></h4>
				</div>
				<div class="col-sm-2 text-center">
					<h4><a href="http://localhost:8000/about" class="test1"><img style="margin:0 auto" width="40" class="img-circle img-responsive" src="image/tanya.jpg"></img>About</a></h4>
				</div>
				<div class="col-sm-2 text-center">
					<h4><a href="http://localhost:8000/contact" class="test1"><img style="margin:0 auto" width="40" class="img-circle img-responsive" src="image/seru.png"></img>Contact Us</a></h4>
				</div>
		</div>
	</div>
	<div class="banner">
	<br><br><br>
	<div class="container">
		<ul>
			<div class="col-sm-3 test4">
					<h2 class="test1">Engine Motor Oil<hr></h2><br>
					<h4><a href="http://localhost:8000/product" class="test3">Eneos<hr></a></h4><br>
					<h4><a href="http://localhost:8000/product" class="test3">Lupromax<hr></a></h4><br>
					<h4><a href="http://localhost:8000/product" class="test3">Caltex<hr></a></h4><br>
					<h4><a href="http://localhost:8000/product" class="test3">Pertamina<hr></a></h4><br>
					<h4><a href="http://localhost:8000/product" class="test3">Castrol<hr></a></h4><br><br><br>
					<h2 class="test1">Gear Motor Oil</h2><br>
					<h4><a href="http://localhost:8000/product" class="test3">Eneos<hr></a></h4><br>
					<h4><a href="http://localhost:8000/product" class="test3">Lupromax<hr></a></h4><br>
					<h4><a href="http://localhost:8000/product" class="test3">Caltex<hr></a></h4><br>
					<h4><a href="http://localhost:8000/product" class="test3">Pertamina<hr></a></h4><br>
					<h4><a href="http://localhost:8000/product" class="test3">Castrol<hr></a></h4>
			</div>
			<div class="col-sm-3">
			<b class="text-left"><a href="http://localhost:8000" class="test3">Home</a>><a href="http://localhost:8000/product" class="test3"><u>Product</u></a></b>
			<br><br>
				<a href="http://localhost:8000/product" class="text-center text-uppercase test3"><img style="margin:0 auto" class="img-responsive" src="image/oil1.jpeg"></img><br>
					<h4><b>Eneos</b></h4><br>
					<p>Eneos</p><br>
					<h4><b><i>Rp. 325.000,00</i></b></h4><br><br>
				</a>
				<a href="http://localhost:8000/product" class="text-center text-uppercase test3"><img style="margin:0 auto" class="img-responsive" src="image/oil5.jpg"></img><br>
					<h4><b>Fatron Techno</b></h4><br>
					<p>Pertamina</p><br>
					<h4><b><i>Rp. 300.000,00</i></b></h4>
				</a>
			</div>
			<div class="col-sm-3">
			<br><br>
				<a href="http://localhost:8000/product" class="text-center text-uppercase test3"><img style="margin:0 auto" class="img-responsive" src="image/oil2.jpg"></img><br>
					<h4><b>Lupromax Aegle 5000</b></h4><br>
					<p>Lupromax</p><br>
					<h4><b><i>Rp. 365.000,00</i></b></h4><br><br>
				</a>
				<a href="http://localhost:8000/product" class="text-center text-uppercase test3"><img style="margin:0 auto" class="img-responsive" src="image/oil4.jpg"></img><br>
					<h4><b>Prima XP</b></h4><br>
					<p>Pertamina</p><br>
					<h4><b><i>Rp. 155.000,00</i></b></h4>
				</a>
			</div>
			<div class="col-sm-3">
			<b class="text-right"><a href="http://localhost:8000" class="test3">Back To Previous Page</a></b>
			<br><br>
				<a href="http://localhost:8000/product" class="text-center text-uppercase test3"><img style="margin:0 auto" class="img-responsive" src="image/oil3.jpg"></img><br>
					<h4><b>Caltex Havoline</b></h4><br>
					<p>Caltex</p><br>
					<h4><b><i>Rp. 100.000,00</i></b></h4><br><br>
				</a>
				<a href="http://localhost:8000/product" class="text-center text-uppercase test3"><img style="margin:0 auto" class="img-responsive" src="image/oil6.jpg"></img><br>
					<h4><b>Castrol Magnatec</b></h4><br>
					<p>Castrol</p><br>
					<h4><b><i>Rp. 375.000,00</i></b></h4>
				</a>
			</div>
			<div class="col-sm-12 text-right" style="margin-top: 50px">
				<b>Page: </b>
				<button><a href="http://localhost:8000/product" class="test2">1</a></button>
				<button><a href="http://localhost:8000/product" class="test2">2</a></button>
			</div>
		</ul>
	</div>
	<div class="copy text-right test3">
        &copy; 2016 Asih Jaya Motor. All Rights Reserved | Design by Mahendra
	</div>
	</div>
	</body>
</html>