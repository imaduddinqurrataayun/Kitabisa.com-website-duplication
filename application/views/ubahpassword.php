<!DOCTYPE html>
<html>
<head>
	<title> Kitabisa!-Buat Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/registerstyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<header>
	<div class='container'>
		<div class='head-logo'>
			<div href="#">
				<img src="<?php echo base_url(); ?>img/logo-register.png" alt='Kitabisa Header Logo'>
				<!--<?= $this->session->userdata('usernama');?> -->
			</div>
		</div>
	</div>
</header>
<main class='main-site'>
	<div class='container-480 large-padding'>
		<div class='content-box-reg'>
			<div class='box box-white box-inner padding-60'>
				<form class="form" action="<?php echo site_url().'/Clogin/ubahpassword';?>" method="POST">
					<p class="text-20 align-center text-superslim">
						Lupa Password?
					</p>
					<p class="text-18 text-superslim">
						Masukkan Nomor WhatsApp atau Email Anda yang telah terdaftar di Kitabisa.com. Kami akan mengirimkan petunjuk untuk mengubah password Anda.
					</p>
					<fieldset>
						<div class='form-textfield2'>
							<input maxlength="50" class="form-input" placeholder="Nomor WhatsApp atau Email Anda" type="text" name="username">
						</div>
					</fieldset>					
				
				<button class="btn-blue">
					<div>
						<span>UBAH PASSWORD</span>
					</div>
				</button>
				</form>
			</div>
		</div>
	</div>
</main>
</body>
</html>