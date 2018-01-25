<?php

require_once('Mapbox.php');
$mapbox = new Mapbox("pk.eyJ1IjoiamlnZW43IiwiYSI6ImNqY3U0N2N5cDFuYnMycXMwMXN4c2JkcGoifQ.nTWkzpX7zmpKeacQ5sy-jw");



//reverse geocode
	$longitude = 121.049389;
	$latitude = 14.556014;
	$res = $mapbox->reverseGeocode($longitude, $latitude);

  //view results for debugging
  echo "<pre>";
	print_r($res->getData());



?>
