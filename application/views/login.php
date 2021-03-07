<?php

defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
<head>
	<title> Kitabisa!-Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/loginstyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<header>
	<div class='container'>
		<div class='head-logo'>
			<a href="#">
				<img src="<?php echo base_url(); ?>img/logo-register.png" alt='Kitabisa Header Logo'>
			<a>
		</div>
	</div>
</header>
<main class='main-site'>
	<div class='container large-padding'>
		<div class='grid'>
			<div class='content-box'>
				<div class='box box-white box-inner'>
					<p class='text-22 text-black text-superslim'> Masuk ke akun Anda </p>
						<form class='large-margin-top' action="<?php echo site_url().'/Clogin/login';?>" method="POST">
							<fieldset>
								<div class='form-textfield'>
									<input maxlength="70" class="form-input" placeholder="Nomor WhatsApp atau Email Anda" type="text" id="usernamelogin" name="usernamelogin">
								</div>
							</fieldset>
							<?php if ($this->session->flashdata('cekLoginUser') == TRUE): ?>
							<fieldset>
									<div style="color:red;font-size: smaller;">
										<?php echo $this->session->flashdata('cekLoginUser');?>
									</div>
								</fieldset>
							<?php endif;?>
							<fieldset>
								<div class='form-textfield'>
									<input maxlength="50" class="form-input" placeholder="Password" type="Password" id="passwordlogin" name="passwordlogin">
									<span class='fa fa-eye-slash' >	
									</span>
								</div>
							</fieldset>
							<?php if ($this->session->flashdata('cekLoginPass') == TRUE): ?>
							<fieldset>
									<div style="color:red;font-size: smaller;">
										<?php echo $this->session->flashdata('cekLoginPass');?>
									</div>
								</fieldset>
							<?php endif;?>
							<fieldset>
								<div class="row">
									<div class='col-ingat no-margin-left'>
										<div class='checkbox-ingat'>
											<input type="checkbox" id="ingatsaya" name="check">
											<label id="login" for="ingatsaya" class="checkbox-content">
												<span class="material-icons">check</span>
											</label>

											<span class="text-14">
												<p>Ingat Saya</p>
											</span>
										</div>
									</div>
									<div class='col-lupa'>
										<a class="float-right" href='<?php echo site_url().'/Clogin/lupaPassword';?>'>Lupa Password?</a>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<button type="submit" class="btn-blue">
								<div>
									<span>Masuk</span>
								</div>
								</button>
								<p class="align-center">
									Belum punya akun Kitabisa?
									<a href='<?php echo site_url().'/Cregister/index';?>'> Daftar</a>
								</p>
							</fieldset>
						</form>
						<hr class="border-form-sosmed" data-content="atau">
						</hr>
						<div class='btn btn-fb'>
							<span>
								<i class="fab fa-facebook-square fa-lg align-center"></i>
							</span>
							<span class='text-14 text-superslim'>Masuk dengan Facebook
							</span>
						</div>
						<div class='btn btn-google'>
							<span>
								<i class="fab fa-google fa-lg"></i>
							</span>
							<span class='text-14 text-superslim'>Masuk dengan Google
							</span>
						</div>
					</p>
				</div>
			</div>
		</div>
	</div>
</main>
</body>
</html>