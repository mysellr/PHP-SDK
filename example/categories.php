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
	
	echo "<h1>List All Categories</h1>";
	$categories = array();
	
	try
	{
		$categories = $mysellr->api('/categories');
	}
	catch (MySellrApiException $exc)
	{
		echo $exc->getMessage();
	}
	echo '<pre>';
	print_r($categories);
	echo '</pre>';
  

}
