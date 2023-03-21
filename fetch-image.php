<?php
header('Access-Control-Allow-Origin: *'); // set the CORS header to allow access from any domain
$imageUrl = $_GET['url']; // get the image URL from the query string
header('Content-Type: image/jpeg'); // set the content type to image/jpeg
echo file_get_contents($imageUrl); // output the image contents
?>