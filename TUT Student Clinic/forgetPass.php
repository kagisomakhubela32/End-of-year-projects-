<?php
require_once('config.php');

 $femail = trim($_POST['email']);
 
   $stmt = $pdo->query("SELECT * FROM tbluser where email ='$femail'");
	while ($row = $stmt->fetch()) {
	 $passwords = $row['password'];
	  header('location:login.php');
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $passwords);
	fclose($myfile);

}
?>