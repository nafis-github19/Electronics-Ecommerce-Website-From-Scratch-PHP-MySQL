<!DOCTYPE html>
<?php
	include("phpfunctions/sidebar.php");
?>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="main-container">
	<header>
		<div class="logo">
			<a href="index.html"><img src="images/logo.jpg"></a>
		</div>

		<div calss="slogan">
			<h2>BestBuy: Where Technology is innovated</h2>
			
		</div>
		<div class="new">
			
		</div>
	</header>

	<nav>
		<ul class="navigation">
			<li><a href="">Home</a></li>
			<li><a href="">All Products</a></li>
			<li><a href="">My Account</a></li>
			<li><a href="">Sign Up</a></li>
			<li><a href="">Shopping Cart</a></li>
			<li><a href="">Contact Us</a></li>
		</ul>


		<div class="search-bar">
			<input type="search" placeholder="Search Item">

			<input type="submit" name="" value="Go">
			
		</div>

		<div class="c"></div>
	</nav>


	<section class="sidebar">
		<h2>Categories</h2>
		<ul class="categories">
			<?php getCat(); ?>
		</ul>

		<h2>Brands</h2>
		<ul class="brands">

			<?php getBrand(); ?>
			<!-- <li><a href="">HP</a></li>
			<li><a href="">Dell</a></li>
			<li><a href="">Asus</a></li>
			<li><a href="">Samsung</a></li>
			<li><a href="">Lenovo</a></li>
			<li><a href="">Apple</a></li> -->
		</ul>
		
	</section>

	<section class="main-content">
		<h1>Hellow</h1>
		
	</section>

	<footer>
		<h2>All Rights Reserved</h2>
	</footer>
	</div>
</body>
</html>