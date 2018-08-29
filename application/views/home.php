<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Software Engineer Test</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?php echo base_url('assets'); ?>/css/materialize.css" type="text/css" rel="stylesheet"
		  media="screen,projection"/>
	<link href="<?php echo base_url('assets'); ?>/css/style.css" type="text/css" rel="stylesheet"
		  media="screen,projection"/>

	<link rel="stylesheet" href="<?php echo base_url('plugins'); ?>/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="<?php echo base_url('plugins'); ?>/fullcalendar/fullcalendar.print.css" media="print">
	<link rel="apple-touch-icon" sizes="57x57"
		  href="<?php echo base_url('assets'); ?>/image/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60"
		  href="<?php echo base_url('assets'); ?>/image/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72"
		  href="<?php echo base_url('assets'); ?>/image/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76"
		  href="<?php echo base_url('assets'); ?>/image/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114"
		  href="<?php echo base_url('assets'); ?>/image/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120"
		  href="<?php echo base_url('assets'); ?>/image/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144"
		  href="<?php echo base_url('assets'); ?>/image/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152"
		  href="<?php echo base_url('assets'); ?>/image/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180"
		  href="<?php echo base_url('assets'); ?>/image/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"
		  href="<?php echo base_url('assets'); ?>/image/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32"
		  href="<?php echo base_url('assets'); ?>/image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96"
		  href="<?php echo base_url('assets'); ?>/image/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16"
		  href="<?php echo base_url('assets'); ?>/image/favicon/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url('assets'); ?>/image/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
<nav class="white" role="navigation">
	<div class="nav-wrapper container">
		<a id="logo-container" href="#" class="brand-logo"><img
				src="<?php echo base_url('assets'); ?>/image/lemonilo-com.png"></a>
	</div>
</nav>
<div class="section no-pad-bot" id="index-banner">
	<div class="container">


		<br><br>

		<div class="row center">

		</div>
		<div class="col s12">
			<h4 class="header center green-text">Kalkulator Bahasa Indonesia</h4>
		</div>

		<br><br>

		<div class="row center">
			<div class="col s12">
				<img src="<?php echo base_url('assets'); ?>/image/logo.png" class="responsive-img">
			</div>
		</div>

		<br><br>
		<div class="row center" id="main-content">
			<form class="col s12">
				<div class="">
					<div class="input-field col s10">
						<input placeholder="Contoh : dua tambah dua" id="input" name="input" type="text">
						<label class="green-text" for="first_name">Tuliskan operasi matematika dalam kalimat </label>
					</div>
					<div class="col s2">
						<a class="waves-effect waves-light btn green" id="calculate" onclick="calculate()">Hitung</a>
					</div>
				</div>
			</form>

		</div>

		<div class="row center" id ="loader">

			<br>
			<br>

			<div class="preloader-wrapper small active">
				<div class="spinner-layer spinner-green-only">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div><div class="gap-patch">
						<div class="circle"></div>
					</div><div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>

			<div>
				<h6 class="center green-text">Menghitung....</h6>
			</div>


			<br>
			<br>

		</div>

		<br><br>
	</div>


</div>

<footer class="page-footer green">
	<div class="container">
		<div class="row">
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			Dibuat oleh <a class="white-text text-lighten-3" href="https://www.linkedin.com/in/muhammad-daniel-8b7b7570/">Muhammad Daniel</a>
		</div>
	</div>
</footer>


<!--  Scripts-->
<script src="<?php echo base_url('plugins'); ?>/jQuery/jQuery-2.1.3.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/materialize.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/init.js"></script>
<script src="<?php echo base_url('plugins'); ?>/chartjs/Chart.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#loader").hide();
	});
</script>
<script>
	function calculate() {
		$("#loader").show();
		var value = document.getElementById('input').value;
		$.ajax({
			url: "<?php echo base_url();?>/home/calculate",
			type: "POST",
			data : {"value" : value},
			success:function(data) {
				$("#loader").hide();
				var result = JSON.parse(data);
				alert(result);
			}
		});
	}
</script>

</body>
</html>
