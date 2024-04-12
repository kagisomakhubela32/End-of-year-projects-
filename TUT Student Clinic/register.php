<?php
session_start();
require_once('config.php');

if(isset($_POST['submit']))
{
    if(isset($_POST['department'],$_POST['doctor'],$_POST['date'],$_POST['time']) && !empty($_POST['department']) && !empty($_POST['doctor']) && !empty($_POST['date']) && !empty($_POST['time']))
    {
        $department = trim($_POST['department']);
        $doctor = trim($_POST['doctor']);
        $date = trim($_POST['date']);
        $time = trim($_POST['time']);
		$email = trim($_POST['email']);
        $cellphone = trim($_POST['cellphone']);
		$patientName = trim($_POST['patientName']);
        $sickness = trim($_POST['sickness']);
		$message = trim($_POST['message']);
        $randNum = (rand(10,10000));
		
		$rands = "APT-".$randNum;
  
                $sql = "insert into tblappointment (appointmentID, department, doctor, date, time,cellphone, message, patientName, sickness) values(:rands, :department,:doctor,:date,:time,:cellphone, :message, :patientName, :sickness)";
				
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
						':rands'=>$rands,
                        ':department'=>$department,
                        ':doctor'=>$doctor,
                        ':date'=>$date,
                        ':time'=>$time,						
                        ':cellphone'=>$cellphone,
						':message'=>$message,
						':patientName'=>$patientName,
						':sickness'=>$sickness
                    ];

                    $handle->execute($params);
                    
                    $success = 'User has been created successfully';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
       
	}
}?>
<!DOCTYPE html>
<html lang="en">


<!-- forgot-password24:03-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>TUT Student Clinic</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
                <div class="account-box">
                    <form class="form-signin" action="updateReg.php" method="post">
						<div class="account-logo">
                            <a href="index-2.php"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
						<div class="header-center">
							<a href="index-2.php" class="logo">
								<span style = "color:#009efb;">TUT Student Clinic</span>
							</a>
						</div>
                        <div class="form-group">
                            <label>Enter Your Email</label>
                            <input name="email" type="text" class="form-control" autofocus>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="submit" class="btn btn-primary account-btn" type="submit">Mark Register</button>
                        </div>
                        <div class="text-center register-link">
                            <a href="login.html">Back to Login</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- forgot-password24:03-->
</html>