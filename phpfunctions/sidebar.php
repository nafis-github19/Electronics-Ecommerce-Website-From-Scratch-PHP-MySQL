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




?>