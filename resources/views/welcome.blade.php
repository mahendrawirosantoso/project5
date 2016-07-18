<!DOCTYPE html>
<html>
    <head>
		{!! Html::style(elixir('css/app.css')) !!}
		{!! Html::script(elixir('js/app.js')) !!}
        <title>Home</title>
		<style>
			.banner{
				background: url(image/acer.jpg);
			}
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
	<div class="container-fluid">
		<div class="banner text-center">
			<h1>Toko Asih Jaya Motor</h1>
			<p>Welcome To Our Shop<p>
		</div>
		<ul class="carousel-inner">
			<div class="col-sm-4 text-center"><a href="http://localhost:8000/product"><b class="caption test3">Eneos<br><br></b><img style="margin:0 auto" width="350" class="img-circle img-responsive" src="image/oil1.jpeg"></img><br><br><b class="caption test3"><i>Rp. 325.000,00</i></b></a></div>
			<div class="col-sm-4 text-center"><a href="http://localhost:8000/product"><b class="caption test3">Lupromax<br><br></b><img style="margin:0 auto" width="350" class="img-circle img-responsive" src="image/oil2.jpg"></img><br><br><b class="caption test3"><i>Rp. 365.000,00</i></b></a></div>
			<div class="col-sm-4 text-center"><a href="http://localhost:8000/product"><b class="caption test3">Caltex<br><br></b><img style="margin:0 auto" width="350" class="img-circle img-responsive" src="image/oil3.jpg"></img><br><br><b class="caption test3"><i>Rp. 100.000,00</b></i></a></div>
		</ul>
	</div>
	<br><br><br>
	<div class="copy text-right">
        <p> &copy; 2016 Asih Jaya Motor. All Rights Reserved | Design by Mahendra</p>
	</div>
    </body>
</html>
