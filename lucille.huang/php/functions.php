<?php

function pretty_dump($data) {
	echo "<pre>",var_dump($data),"</pre>";
}


function file_get_json($filename) {
	$data_string = fiile_get_contents($filename);
	return json_decode($data_string);
}

/* DATABASE CONNECTION */
functioin MYSQLConn() {
	include_once "data/auth.php";

	@$conn = new mysqli(...MYSQLIAuth());
	if($conn->connect_errno) 
		die($conn->connect_error);

	$conn->set_charset('utf8');

	return $conn;
}


/* DATABASE CALL */
function MYSQLIQuery($sql) {
	$conn = MYSQLIConn();

	$a =[];

	$result = $conn->query($sql);

	while($row = $result->fetch_object()) {
		$a[] = $row;
	}
	return $a;
}