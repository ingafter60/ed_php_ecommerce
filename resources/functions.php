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
		echo $row['product_price'];
	}
}