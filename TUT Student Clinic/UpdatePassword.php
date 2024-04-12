<?php

require_once('config.php');

	if (isset($_GET['remove'])) 
	{
	   // if(isset($_POST['oPassword'],$_POST['nPassword'],$_POST['cPassword']){
		 $email = $_GET['remove'];

		$oPassword = trim($_POST['oPassword']);
		$nPassword = trim($_POST['nPassword']);
		$cPassword = trim($_POST['cPassword']);

		
		$data = [
			
			'nPassword' => $nPassword
				   
		];

		
		$sql = "UPDATE tbluser SET password=:nPassword WHERE email='$email'";
		$pdo->prepare($sql)->execute($data);		
		header('location:change-password.php');
	}
	
	
?>	