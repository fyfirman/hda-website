<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Himatif Database</title>
	
	<link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url()?>/assets/css/owl-carousel/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>/assets/css/owl-carousel/owl.theme.default.min.css" rel="stylesheet">

	<script src="<?php echo base_url()?>/assets/js/jquery-3.3.1.min.js"></script>  
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script> 
    <script src="<?php echo base_url()?>/assets/js/Costum.js" type="text/javascript" ></script> 
    <script src="<?php echo base_url()?>/assets/js/owl-carousel/owl.carousel.min.js"></script> 
</head>
<body>
	<!-- Start of navbar -->
<header>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" >
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url()?>">Himatif Database</a>

			<!-- Navbar -->
			<ul class="navbar-nav">
				<!-- Menu Anggota-->
				<li class="nav-link dropdown dropdown-hover no-arrow">
					<span class="dropdown-toggle">
						<a href="<?php echo site_url('/anggota'); ?>">Anggota</a>
					</span>

					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo site_url('/anggota/2012'); ?>">2012 - Circle</a>
						<a class="dropdown-item" href="<?php echo site_url('/anggota/2013'); ?>">2013 - Pascal</a>
						<a class="dropdown-item" href="<?php echo site_url('/anggota/2014'); ?>">2014 - Assembly</a>
						<a class="dropdown-item" href="<?php echo site_url('/anggota/2015'); ?>">2015 - Binary</a>
						<a class="dropdown-item" href="<?php echo site_url('/anggota/2016'); ?>">2016 - Cyber</a>
						<a class="dropdown-item" href="<?php echo site_url('/anggota/2017'); ?>">2017 - Delphi</a>
						<a class="dropdown-item" href="<?php echo site_url('/anggota/2018'); ?>">2018 - Eclipse</a>
					</div>
				</li>

				<!-- Menu KKM-->
				<li class="nav-item dropdown dropdown-hover no-arrow">
					<a class="nav-link" href="<?php echo site_url('/kkm'); ?>">
						KKM
					</a>
				</li>

				<!-- Menu BK -->
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('/bk'); ?>">BK</a>
				</li>
			</ul>

			<!-- Dropdown profile -->
			<ul class="navbar-nav  ml-auto">	
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						<?php echo $this->session->userdata('nama'); ?>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Edit Profile</a>
						<div class="dropdown-divider"></div> 
						<a class="dropdown-item" href="<?php echo site_url('/login/logout');?>">Logout</a>
					</div>
				</li>
			</ul>
			</div>
	</nav>
</header>

