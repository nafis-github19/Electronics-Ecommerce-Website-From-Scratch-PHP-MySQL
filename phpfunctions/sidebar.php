<?php

$con = mysqli_connect("localhost","root","","ecommerce");


//function for php

function getCat(){
	global $con;

	$get_cat = "select * from categories"; 

	$run_cat  = mysqli_query($con, $get_cat);
	

	while ($row_cat = mysqli_fetch_array($run_cat)){

		$cat_id = $row_cat["cat_id"];
		$cat_name = $row_cat["cat_name"];

	echo "<li><a href='#'>$cat_name</a></li>";

	}

}




function getBrand(){
	global $con;

	$get_brand = "select * from brands"; 

	$run_brand  = mysqli_query($con, $get_brand);
	

	while ($row_brand = mysqli_fetch_array($run_brand)){

		$brand_id = $row_brand["brand_id"];
		$brand_name = $row_brand["brand_name"];

	echo "<li><a href='#'>$brand_name</a></li>";

	}

}

function getPro(){

	global $con;
	$get_pro = "select * from products order by RAND() LIMIT 0,6";

	$run_pro = mysqli_query($con, $get_pro);

	while($row_pro = mysqli_fetch_array($run_pro)){

		$pro_id = $row_pro["prod_id"];
		$pro_cat = $row_pro["prod_cat"];
		$pro_brand = $row_pro["prod_brand"];
		$pro_name = $row_pro["prod_name"];
		$pro_price = $row_pro["prod_price"];
		$pro_image = $row_pro["prod_image"];


		echo "

			<div id='single_product'>

				<h3>$pro_name</h3>
				<img src='admin_area/product_images/$pro_image' width = '180px' height = '180px'>
				<p><strong>$$pro_price</strong></p>

				<a href='details.php?pro_id=$pro_id'>Details</a>
				<a href='index.php?pro_id=$pro_id'><button>Add to Cart</button></a>







			</div>


		";

	}
}




?>