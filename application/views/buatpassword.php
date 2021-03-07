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
			</div>
		</div>
	</div>
</header>
<main class='main-site'>
	<div class='container-480 large-padding'>
		<div class="box box-green text-14 align-center ">
			<img width="16" src="<?php echo base_url();?>img/icon__check-success.svg" alt='Checklist'>
			<span class="small-margin-left"> Email anda sudah terverifikasi</span>
		</div>
		<div class='content-box-reg'>
			<div class='box box-white box-inner padding-60'>
				<form class="form" action="<?php echo site_url().'/Cregister/completeregister'?>" method="POST">
					<p class="text-20 align-center text-superslim">
						Tentukan password demi keamanan akun Anda
					</p>
					<fieldset>
						<div class='form-textfield2'>
							<input maxlength="50" class="form-input" placeholder="Minimal 6 karakter" type="Password" name="password" id="password">
							<span class='fa fa-eye-slash' >	
							</span>
						</div>
					</fieldset>					
				
				<button class="btn-blue">
					<div>
						<span>SELESAI</span>
					</div>
				</button>
				</form>
			</div>
		</div>
	</div>
</main>
</body>
</html>