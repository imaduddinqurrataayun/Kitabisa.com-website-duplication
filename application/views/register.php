	
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<!DOCTYPE html>
	<html>
	<head>
		<title> Register</title>
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
		<div class='container large-padding'>
			<div class="row">
				<div class='col--m5 large-margin'>
					<div class='content-text'>
						<span class='text-26 text-black text-superslim'>Hai #OrangBaik!</span>
						<p class='text-superslim'>Selamat bergabung di Kitabisa, komunitas orang baik terbesar di Indonesia.</p>
					</div>
				</div>
				<div class='col--m6'>
					<div class='content-box'>
						<div class='box box-white box-inner'>
							<p class='text-22 text-black text-superslim align-center'> Daftar akun baru </p>
							<form class='large-margin-top' action="<?php echo site_url().'/Cregister/register';?>" method="POST">
								<fieldset>
									<div class='form-textfield'>
										<input maxlength="70" class="form-input" id="nama" name="nama" placeholder="Nama lengkap Anda" type="text">
									</div>
								</fieldset>
								<fieldset>
									<div class='form-textfield'>
										<input maxlength="50" class="form-input" id="username" name="username" placeholder="Nomor WhatsApp atau Email Anda" type="text">
									</div>
								</fieldset>
								<?php if ($this->session->flashdata('cekduplikat') == TRUE): ?>
								<fieldset>
									<div style="color:red;">
										<?php echo $this->session->flashdata('cekduplikat');?>
									</div>
								</fieldset>
							<?php endif;?>
								<fieldset>
									<button type="submit" class="btn-blue">
									<div>
										<span>DAFTAR</span>
									</div>
									</button>
									<p class="align-center">
										Sudah punya akun Kitabisa?
										<a href='<?php echo site_url().'/Clogin/index';?>'> Masuk</a>
									</p>
								</fieldset>
							</form>
						</div>
						<div class='box box-white box-inner large-margin-sc'>
							<div class='btn btn-fb'>
								<span>
									<i class="fab fa-facebook-square fa-lg align-center"></i>
								</span>
								<span class='text-14 text-superslim'>Daftar dengan Facebook
								</span>
							</div>
							<div class='btn btn-google'>
								<span>
									<i class="fab fa-google fa-lg"></i>
								</span>
								<span class='text-14 text-superslim'>Daftar dengan Google
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main> 
	</body>
	</html>