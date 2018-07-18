<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Himatif Database</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<script src="js/jquery-3.3.1.min.js"></script>  
    <script src="bootstrap/js/bootstrap.min.js"></script> 
</head>
<body>
	<!-- Start of navbar -->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" >
		<div class="container">
			<a class="navbar-brand" href="#">Himatif Database</a>

			<!-- Navbar -->
			<ul class="navbar-nav">
				<!-- Menu Anggota-->
				<li class="nav-item dropdown dropdown-hover no-arrow">
					<a class="nav-link dropdown-toggle" href="hello-bootsrap.html" id="navbardrop" data-toggle="dropdown">
						Anggota
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">2012 - Circle</a>
						<a class="dropdown-item" href="#">2013 - Pascal</a>
						<a class="dropdown-item" href="#">2014 - Assembly</a>
						<a class="dropdown-item" href="#">2015 - Binary</a>
						<a class="dropdown-item" href="#">2016 - Cyber</a>
						<a class="dropdown-item" href="#">2017 - Delphi</a>
						<a class="dropdown-item" href="#">2018 - Eclipse</a>
					</div>
				</li>

				<!-- Menu KKM-->
				<li class="nav-item dropdown dropdown-hover no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						KKM
					</a>
					<div class="dropdown-menu">
						<div class="dropdown-header">Olahraga</div> 
						<a class="dropdown-item" href="#">IFC</a>
						<a class="dropdown-item" href="#">IBC</a>
						<a class="dropdown-item" href="#">IBT</a>
						<div class="dropdown-header">TI</div> 
						<a class="dropdown-item" href="#">DevCom</a>
						<a class="dropdown-item" href="#">IRC</a>
						<a class="dropdown-item" href="#">IDeA</a>
					</div>
				</li>

				<!-- Menu BK -->
				<li class="nav-item">
					<a class="nav-link" href="#">BK</a>
				</li>
			</ul>

			<!-- Dropdown profile -->
			<ul class="navbar-nav  ml-auto">	
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Firmansyah Yanuar
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Edit Profile</a>
						<div class="dropdown-divider"></div> 
						<a class="dropdown-item" href="#">Logout</a>
					</div>
				</li>
			</ul>
			</div>
		</div>
	</nav>
	<!-- End of Navbar -->

	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid mb-0">
		<div class="container d-flex align-items-center h-100">
			<!-- Row -->
			<div class="row">
				<!-- Column untuk teks awal-->
				<div class="col-md-8">
					<h1>Welcome to HDA</h1>
					<p>Himatif Database Application adalah database online yang berisikan informasi mengenai Mahasiswa S-1 Teknik Informatika Unpad</p>
				</div>

				<!-- Column untuk form login-->
				<div class="col-md-4">
					<!-- Form -->
					<form method="POST" action="<?php echo base_url('index.php/auth') ?>">
						<!-- NPM -->
						<div class="form-group">
							<label for="text">NPM</label>
							<input type="text" class="form-control" id="npm" placeholder="Masukkan NPM" name="npm">
						</div>

						<!-- Password -->
						<div class="form-group">
							<label for="pwd">Password</label>
							<input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="password">
						</div>

						<!-- Checkbox 'Remember me'-->
						<div class="form-group form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="remember"> Remember me
							</label>
						</div>

						<!-- Submit buton -->
						<button type="login" class="btn btn-primary">Login</button>
					</form>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="border bg-dark border-bottom-0 border-left-0 border-right-0 pt-3 pb-3 text-white">
		<div class="container">
			<!-- <div class="col-md-6"> -->
				<span>
					&copy; Tim HDA Delphi, 2018. Himatif FMIPA Unpad
				</span>
				<span class="float-right">
					<a href="#">Credit</a>
				</span> 
			<!-- </div>			 -->
		</div>
	</footer>
</body>
</html>
