<?php
	require 'config.php';
	
if (isset($_GET['remove'])) {
	  $id = $_GET['remove'];
	  

	$sql = "DELETE FROM tblappointment WHERE appointmentID='$id'";

  $pdo->exec($sql);
	  header('location:appointments.php');
	}



?>