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
	
	echo "<h1>List All Order</h1>";
	$orders = array();
	
	try
	{
		$orders = $mysellr->api('/orders');
	}
	catch (MySellrApiException $exc)
	{
		echo $exc->getMessage();
	}
	echo '<pre>';
	print_r($orders);
	echo '</pre>';
  
	
	echo "<h1>List Pending Order</h1>";
	$pendingOrders = array();
  
	try
	{
		$pendingOrders = $mysellr->api('/orders',array(
			'order_status' => 'pending'
		));
	}
	catch (MySellrApiException $exc)
	{
		echo $exc->getMessage();
	}
	echo '<pre>';
	print_r($pendingOrders);
	echo '</pre>';
	
	echo "<h1>List Unpaid Order</h1>";
	$unpaidOrders = array();
  
	try
	{
		$unpaidOrders = $mysellr->api('/orders',array(
			'payment' => 'unpaid'
		));
	}
	catch (MySellrApiException $exc)
	{
		echo $exc->getMessage();
	}
	echo '<pre>';
	print_r($unpaidOrders);
	echo '</pre>';
	
	echo "<h1>Show Order ID 1284</h1>";
	$order = array();
  
	try
	{
		$order = $mysellr->api('/orders/1284');
	}
	catch (MySellrApiException $exc)
	{
		echo $exc->getMessage();
	}
	echo '<pre>';
	print_r($order);
	echo '</pre>';
	
	
	echo "<h1>Accept Order ID 1284</h1>";
	
	try
	{
		$result = $mysellr->api('/orders/accept/1284','POST');
	}
	catch (MySellrApiException $exc)
	{
		echo $exc->getMessage();
	}
	echo '<pre>';
	print_r($result);
	echo '</pre>';
	
	echo "<h1>Set As Paid Order ID 1284</h1>";
	
	try
	{
		$result = $mysellr->api('/orders/paid/1284','POST');
	}
	catch (MySellrApiException $exc)
	{
		echo $exc->getMessage();
	}
	echo '<pre>';
	print_r($result);
	echo '</pre>';
  
  

}
