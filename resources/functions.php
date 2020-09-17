<?php 

// Redirect
function redirect($location) {
	header("Location: $location");
}

// Query
function query($sql) {
	global $connection;
	return mysql_query($connection, $sql);
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