<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Himatif Database</title>
	
	<link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">

	<script src="<?php echo base_url()?>/assets/js/jquery-3.3.1.min.js"></script>  
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script> 
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
