<?php

function pretty_dump($data) {
	echo "<pre>",var_dump($data),"</pre>";
}

function file_get_json($filename) {
	$data_string = file_get_contents($filename);
	return json_decode($data_string);
}