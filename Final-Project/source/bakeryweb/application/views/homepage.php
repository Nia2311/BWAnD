<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Halaman Depan</title>
</head>

<body>
	<div class="main">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="<?php echo base_url(); ?>assets/images/bakery-white.png" style="width: 150px;">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<!--<ul class="navbar-nav">
						<li class="nav-item mr-5 ml-5">
							<a class="nav-link" href="#">Produk</a>
						</li>
						<li class="nav-item mr-5 ml-5">
							<a class="nav-link" href="#">Tentang Kami</a>
						</li>
						<li class="nav-item mr-5 ml-5">
							<a class="nav-link" href="#">Kontak</a>
						</li>
					</ul> -->
					<a href="<?= base_url(); ?>login_armada" class="btn btn-md btn-primary ml-5 mt-3"> Login Mitra</a>
				</div>
			</div>
		</nav>
		<div class="container text-white mt-5" style="font-size: 400%; text-shadow: 2px 3px black; ">Harga Kaki Lima <br> Kualitas Bintang Lima</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
	<style>
		body {
			font-family: poppins;
			background-image: url('<?= base_url() ?>assets/images/bg.png');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}

		.main {
			background: rgba(0, 0, 0, 0.5);
			
			background-size: cover;
			height: 100% !important;
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
	</script>
</body>

</html>