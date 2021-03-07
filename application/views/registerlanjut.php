<!DOCTYPE html>
<html>
<head>
	<title> Kitabisa!-Pendaftaran Berhasil</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url();?>css/registerstyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<header>
	<div class='container'>
		<div class='head-logo'>
			<div href="#">
				<img src="<?php echo base_url(); ?>img/logo-register.png" alt='Kitabisa Header Logo'>
			</div>
		</div>
	</div>
</header>
<main class='main-site'>
	<div class='container-480 large-padding'>
		<div class='content-box-reg'>
			<div class='box box-white box-inner padding-60'>
				<p class='text-20 text-black text-superslim align-center'> Verifikasi Email Anda </p>
				<p class='text-18 text-black text-superslim'>Cek email Anda dan klik link aktivasi akun Kitabisa.</p>
				<form action="<?php echo site_url().'/Cregister/registerlanjutan'?>" method="">
				<button class="btn-blue">
					<div>
						<span>KEMBALI KE HALAMAN UTAMA</span>
					</div>
				</button>
			</form>
			</div>
		</div>
	</div>
</main>
</body>
</html>