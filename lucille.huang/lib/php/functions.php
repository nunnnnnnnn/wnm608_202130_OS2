<?php

function pretty_dump($data) {
	echo "<pre>",var_dump($data),"</pre>";
}

function file_get_json($filename) {
	$data_string = file_get_contents($filename);
	return json_decode($data_string);
}


// DATABASE CONNECTION //
function MYSQLIConn() {
	include_once "data/auth.php";
	$servername = "localhost";
	  $username = "nunu01_wnm608";
	  $password = "%-S{Of4^4.].";
	  $dbname = "nunu_wnm608";

	// @$conn = new mysqli(...MYSQLIAuth());
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if($conn->connect_errno) 
		die($conn->connect_error);

	$conn->set_charset('utf8');

	return $conn;
}

// DATABASE CALL //
function MYSQLIQuery($sql) {
	$conn = MYSQLIConn();

	$a = [];

	$result = $conn->query($sql);

	while($row = $result->fetch_object()) {
		$a[] = $row;
	}

	return $a;

}