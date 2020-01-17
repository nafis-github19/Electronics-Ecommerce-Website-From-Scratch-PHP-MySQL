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

		<div id="shopping_cart">

			<span style="float:right; font-size: 18px; padding: 10px; line-height: 30px; ">Welcome Guest! <span style="color: yellow">Shopping Cart</span> - Total Items: Total Price: <a href="cart.php" style="color: yellow">Go to Cart</a> </span>

		</div>
		<div id="product_box">

			<?php
				if(isset($_GET['pro_id'])){

					$product_id = $_GET['pro_id'];



					$get_pro = "select * from products where prod_id = '$product_id'";

					$run_pro = mysqli_query($con, $get_pro);

					while($row_pro = mysqli_fetch_array($run_pro)){

						$pro_id = $row_pro["prod_id"];
						
						$pro_name = $row_pro["prod_name"];
						$pro_price = $row_pro["prod_price"];
						$pro_image = $row_pro["prod_image"];
						$pro_desc = $row_pro["prod_desc"];


						echo "

							<div id='single_product'>

								<h3>$pro_name</h3>
								<img src='admin_area/product_images/$pro_image' width='300px' >
								<p><strong>$$pro_price</strong></p>

								<p id='detail_pro'>$pro_desc</p>

								<a href='index.php?pro_id=$pro_id'>Go Back</a>
								<a href='index.php?pro_id=$pro_id'><button>Add to Cart</button></a>







							</div>


						";

					}
				}

			?>
					
		</div>
		
	</section>

	<footer>
		<h2>All Rights Reserved</h2>
	</footer>
	</div>
</body>
</html>