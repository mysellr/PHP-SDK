<style>
pre{
	background-color:#F9F9F9;
	border:2px dashed #D0D0D0;
	color:#002166;
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
	
	echo "<h1>Get Store Info</h1>";
	$me = array();
	
	try
	{
		$me = $mysellr->api('/me');
	}
	catch (MySellrApiException $exc)
	{
		echo $exc->getMessage();
	}
	echo '<pre>';
	print_r($me);
	echo '</pre>';
}
