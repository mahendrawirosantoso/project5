<!DOCTYPE html>
<html>
    <head>
		{!! Html::style(elixir('css/app.css')) !!}
		{!! Html::script(elixir('js/app.js')) !!}
        <title>Home</title>
		<style>
			.banner{
				margin-top: -40px;
				margin-left: -20px;
				margin-right: -20px;
				background: url(image/acer.jpg);
				background-size: cover;
				color: #000;
				min-height: 650px;
			}
			.banner h1{
				font-size: 63px; 
			}
			.banner p {
				margin-bottom: 15px;
				font-size: 21px;
				font-weight: 200; 
			}
			.navbar{
				background: #000;
			}
			.test{
				color: #000;
			}
			.caption{
				font-size: 20px;
			}
			.test1{
				color: #fffaf0;
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
			<div class="col-sm-4 text-center"><a href="http://localhost:8000/product"><b class="caption test">Eneos<br><br></b><img style="margin:0 auto" width="350" class="img-circle img-responsive" src="image/oil1.jpeg"></img><br><br><b class="caption test"><i>Rp. 325.000,00</i></b></a></div>
			<div class="col-sm-4 text-center"><a href="http://localhost:8000/product"><b class="caption test">Lupromax<br><br></b><img style="margin:0 auto" width="350" class="img-circle img-responsive" src="image/oil2.jpg"></img><br><br><b class="caption test"><i>Rp. 365.000,00</i></b></a></div>
			<div class="col-sm-4 text-center"><a href="http://localhost:8000/product"><b class="caption test">Caltex<br><br></b><img style="margin:0 auto" width="350" class="img-circle img-responsive" src="image/oil3.jpg"></img><br><br><b class="caption test"><i>Rp. 100.000,00</b></i></a></div>
		</ul>
	</div>
	<br><br><br>
	<div class="copy text-right">
        <p> &copy; 2016 Asih Jaya Motor. All Rights Reserved | Design by Mahendra</p>
	</div>
    </body>
</html>
