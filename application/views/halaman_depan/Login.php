<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Klinik Login Form </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Klinik Login Form"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Reem+Kufi&amp;subset=arabic" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>
		<span>F</span>orm
		<span>M</span>asuk
		<span>K</span>linik</h1>
	<!-- //title -->
	
	<!-- content -->
	<div class="sub-main-w3">
		<form action="<?php echo base_url()?>Main/login" method="post">
			<div class="form-style-agile">
				<!-- warning or success message -->
				<?php if($this->session->flashdata('warning'))
					{?>
						<div class="alert alert-danger"> <?php echo $this->session->flashdata('warning');?> </div><?php } ?>
				<?php if($this->session->flashdata('success'))
					{?>
						<div class="alert alert-success"> <?php echo $this->session->flashdata('success');?> </div><?php } ?>
				<!--/warning or success-->
			</div>
			<div class="form-style-agile">
				<label>
					Nama Pengguna
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Nama Pengguna" name="ed_nama" type="text" required>
			</div>
			<div class="form-style-agile">
				<label>
				Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="Password" name="ed_password" type="password" required>
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox">
							<span>Ingat Saya</span>
						</label>
					</li>
					<li>
						<a href="#">Lupa Password?</a>
					</li>
				</ul>
			</div>
			<!-- //checkbox -->
			<input type="submit" value="Masuk">
			<!-- social icons -->
			<div class="footer-social">
				<h2>Or</h2>
					<input type="submit" value="register" href="Daftar.php">
				</ul>
			</div>
			<!-- //social icons -->
		</form>
	</div>
	<!-- //content -->


</body>

</html>