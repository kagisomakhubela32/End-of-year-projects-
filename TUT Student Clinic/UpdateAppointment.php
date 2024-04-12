<?php
require_once('config.php');

if(isset($_POST['submit']))
{
	//$appointmentID = 'APT-583';
  
        $department = trim($_POST['specialasation']);
		 $appointmentID = trim($_POST['appointmentID']);
        $doctor = trim($_POST['doctor']);
        $date = trim($_POST['date']);
        $time = trim($_POST['time']);
        $cellphone = trim($_POST['cellphone']);
		$patientName = trim($_POST['patientName']);
        $sickness = trim($_POST['sickness']);
		$message = trim($_POST['message']);

		
		
		$data = [
		
		'department' => $department,
       'doctor' => $doctor,
       'date' => $date,
       'time' => $time,
		'patientName'=>$patientName,
        'cellphone' => $cellphone, 
		'patientName' => $patientName, 
       'sickness' => $sickness,
		'message' => $message 
	   
	];
		
    $sql = "UPDATE tblappointment SET department=:department, doctor=:doctor, date=:date, time=:time, cellphone=:cellphone, patientName=:patientName, sickness=:sickness, message=:message  WHERE appointmentID ='$appointmentID'";
	$pdo->prepare($sql)->execute($data);
	  header('location:appointments.php');

     
	}
	
?>
