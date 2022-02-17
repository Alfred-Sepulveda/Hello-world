<?php

// Read the JSON file
$json_file = file_get_contents('my_data.json');

// Decode the JSON file
$json_data = json_decode($json_file,true);

?>