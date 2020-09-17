<?php 

// =============== HELPER FUNCTIONS ================

// Redirect
function redirect($location) {
	header("Location: $location");
}

// Query
function query($sql) {
	global $connection;
	return mysqli_query($connection, $sql);
}

// Confirm function
function confirm($result) {
	global $connection;
	if(!$result){
			die("QUERY FAILED" . mysqli_error($connection));
	}
}

// Escape string value
function escape_string($string) {
	global $connection;
	return mysqli_real_escape_string($connection, $string);
}

// Fetch array
function fetch_array($result) {
	return mysqli_fetch_array($result);
}


// =============== GET PRODUCTS FUNCTIONS ================

// Get products
function get_products() {
	$query = query("SELECT * FROM products");
	confirm($query);

	while ($row = fetch_array($query)) {
		$product = <<<DELIMETER
			<div class="col-sm-4 col-lg-4 col-md-4">
			   <div class="thumbnail">
			      <img src="http://placehold.it/320x150" alt="">
			      <div class="caption">
			         <h4 class="pull-right">$ {$row['product_price']}</h4>
			         <h4><a href="#">Fifth Product</a>
			         </h4>
			         <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>
			         <a class="btn btn-primary" target="_blank" href="">Add to cart</a></p>
			      </div>
			   </div>
			</div>

DELIMETER;

echo $product;
	}
}

