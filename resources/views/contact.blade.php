<!DOCTYPE html>
<html>
    <head>
		{!! Html::style(elixir('css/app.css')) !!}
		{!! Html::script(elixir('js/app.js')) !!}
        <title>About Us</title>
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
	<div class="banner">
	<br><br><br>
		<div class="container">
			<div class="col-sm-8">
			<h2>Contact Us</h2>
			<i class="story">Ada keluhan atau pertanyaan silahkan kirimkan keluhan anda dengan form di bawah ini</i>
			<br><br>
			<i class="story">Anda dapat menghubungi kami melalui email,telepon,skype atau dapat mengunjungi toko kami langsung dialamat yang tertera</i>
			<br><br><br>
			<div class="col-sm-6">
				<label>Nama :</label><br>
				<textarea rows="1" cols="50"></textarea><br><br><br>
				<label>Kritik dan Saran :</label><br>
				<textarea rows="8" cols="105"></textarea>
			</div>
			<div class="col-sm-6">
				<label>Email : </label><br>
				<textarea rows="1" cols="50"></textarea>
			</div>
			<div style="margin-top: 20px" class="col-sm-12 text-right">
				<button class="btn-danger btn-lg"><a href="http://localhost:8000/contact" class="test3">Send</a></button>
			</div>
			</div>
			<div class="col-sm-1">
			</div>
			<div class="col-sm-3" style="margin-top: 10px">
				<h3 class="test2 text-uppercase">Email</h3>
				<h5><a href="email:rioyeriko@yahoo.co.id" class="test">rioyeriko@yahoo.co.id</a></h5><br>
				<h3 class="test2 text-uppercase">Telephone</h3>
				<h5 class="test">0857-5556-1990</h5><br>
				<h3 class="test2 text-uppercase">Skype</h3>
				<h5 class="test">@rioyeriko</h5><br>
				<h3 class="test2 text-uppercase">Address</h3>
				<h5 class="test">Jl.Diponegoro 124 Karangploso-Malang,Jawa Timur,Indonesia</h5><br><br><br>
				<div class="col-sm-4">
					<img style="margin:0 auto" width="45" class="img-responsive" src="image/fb.png"></img>
				</div>
				<div class="col-sm-4">
					<img style="margin:0 auto" width="45" class="img-responsive" src="image/path.png"></img>
				</div>
				<div class="col-sm-4">
					<img style="margin:0 auto" width="45" class="img-responsive" src="image/insta.png"></img>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br>
		<div class="copy text-right test1">
			&copy; 2016 Asih Jaya Motor. All Rights Reserved | Design by Mahendra
		</div>
		</div>
	</body>
</html>