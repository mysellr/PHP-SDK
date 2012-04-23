<style>
pre{
	background-color:#F9F9F9;
	border:2px dashed #D0D0D0;
	color:#002166;
	max-height:150px;
	overflow:auto;
}
</style>
<?php

include '../src/mysellr.php';

$mysellr = new MySellr(array(
	'appId' => '4',
	'secret' => 'SDtA7Q4MpV6jjJoNTbhBVvvM1kM2HUXA'
));

$user = $mysellr->getUser();

if(!empty($user)){
	
	echo "<h1>List All Products</h1>";
	$orders = array();
	
	try
	{
		$products = $mysellr->api('/products');
	}
	catch (MySellrApiException $exc)
	{
		echo $exc->getMessage();
	}
	echo '<pre>';
	print_r($products);
	echo '</pre>';
  
  echo "<h1>List Specific Product</h1>";
	$orders = array();
	
	try
	{
		$product = $mysellr->api('/products/20749');
	}
	catch (MySellrApiException $exc)
	{
		echo $exc->getMessage();
	}
	echo '<pre>';
	print_r($product);
	echo '</pre>';
  
}