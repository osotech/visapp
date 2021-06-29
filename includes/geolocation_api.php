<?php 


include 'class.IPInfoDB.php';

$myApiKey = "0e2bf5aab076a485c88e9bf9ac986ebf75948aa6e42e01f8be8ee4f7bd04a66e";
$MyServerIp = "197.210.79.182";
// Load the class
$ipinfodb = new IPInfoDB('YOUR_API_KEY');

$results = $ipinfodb->getCity($_SERVER['REMOTE_ADDR']);

// Getting the result
echo "Result
\n";
if (!empty($results) && is_array($results)) {
	foreach ($results as $key => $value) {
		echo $key . ' : ' . $value . "
\n";
	}
}

 ?>

 <?php
/* 
Putting The Geolocation Data In A Cookie
If you use our API to track your website visitors geolocation, we highly recommend that you put the geolocation data in a cookie (or in a database...). This way, you only query our servers for new visitors, not all page view. To achieve this, here is a quick sample in PHP and ASP how to set the country code in a cookie:


*/
include 'class.IPInfoDB.php';

//Set geolocation cookie
if (!isset($_COOKIE['geolocation'])) {
	$ipinfodb = new IPInfoDB('0e2bf5aab076a485c88e9bf9ac986ebf75948aa6e42e01f8be8ee4f7bd04a66e');

	$result = $ipinfodb->getCountry($_SERVER['REMOTE_ADDR']);

	if ($result['statusCode'] == 'OK') {
		$data = base64_encode(serialize($result));
		setcookie('geolocation', $data, time() + 3600 * 24 * 7); // Set cookie for 1 week
	}
} else {
	$result = unserialize(base64_decode($_COOKIE['geolocation']));
}

var_dump($result);