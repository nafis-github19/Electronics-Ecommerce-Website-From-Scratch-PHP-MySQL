<!DOCTYPE html>

<?php
include("includes/db.php");
?>
<html>
<head>
	<title>Insert Product Page</title>
	<link rel="stylesheet" type="text/css" href="insert_product.css">
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>

	<center><h1>Insert Products to Database</h1></center>

	<form action="insert_product.php" method="post" enctype="multipart/form-data">

		<h2 id="insert_prod">Insert Products Post Here</h2>

	<table>
		
		<!-- <tr>
			<td><strong>Product ID</strong></td>
			<td><input type="" name="product_id"></td>
		</tr> -->
		<tr>
			<td><strong>Product Category</strong></td>
			<td>
				<select name="product_cat" required>
					<option>Select Category</option>
					<?php 
						$get_cat = "select * from categories"; 

						$run_cat  = mysqli_query($con, $get_cat);
						

						while ($row_cat = mysqli_fetch_array($run_cat)){

							$cat_id = $row_cat["cat_id"];
							$cat_name = $row_cat["cat_name"];

						echo "<option value='$cat_id'>$cat_name</option>";

						}

					?>
				</select>
			</td>
		</tr>
		<tr>
			<td><strong>Product Brand</strong></td>
			<td>
				<select name="product_brand" required>
					<option>Select Brand</option>
					<?php
					$get_brand = "select * from brands"; 

					$run_brand  = mysqli_query($con, $get_brand);
					

					while ($row_brand = mysqli_fetch_array($run_brand)){

						$brand_id = $row_brand["brand_id"];
						$brand_name = $row_brand["brand_name"];

					echo "<option value='$brand_id'>$brand_name</option>";

					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td><strong>Product Name</strong></td>
			<td><input type="text" name="product_name" size="45px" required></td>
		</tr>
		<tr>
			<td><strong>Product Price</strong></td>
			<td><input type="text" name="product_price" required></td>
		</tr>
		<tr>
			<td><strong>Product Description</strong></td>
			<td><textarea name="product_desc" cols="30" rows="5"></textarea></td>
		</tr>
		<tr>
			<td><strong>Product Keywords</strong></td>
			<td><input type="text" name="product_keywords" size="45px" required></td>
		</tr>
		<tr>
			<td><strong>Product Images</strong></td>
			<td><input type="file" name="product_image"></td>
		</tr>

	</table>
	<br><br>

	<input id="submit-button" type="submit" name="insert_post" value="Insert Product">

	</form>

</body>
</html>


<?php
	if(isset($_POST["insert_post"])){

		//getting the text data from the fields

		$product_name = $_POST["product_name"];
		$product_cat = $_POST["product_cat"];
		$product_brand = $_POST["product_brand"];
		$product_price = $_POST["product_price"];
		$product_desc = $_POST["product_desc"];
		$product_keywords = $_POST["product_keywords"];


		//getting the image from the field

		$product_image = $_FILES["product_image"]["name"];
		$product_image_tmp = $_FILES["product_image"]["tmp_name"];

		move_uploaded_file(product_image_tmp, "product_images/$product_image");

		$insert_product = "insert into products (prod_cat, prod_brand, prod_name, prod_price, prod_desc, prod_keywords, prod_image) values ('$product_cat','$product_brand', '$product_name', '$product_price', '$product_desc', '$product_keywords', '$product_image')";

		echo $insert_product;

		$insert_pro = mysqli_query($con, $insert_product);


		if($insert_pro){
			echo "<script>alert('Product Has been Inserted!')</script>";
			echo "<script>window.open('insert_product.php','_self')</script>";
		}


	}

?>