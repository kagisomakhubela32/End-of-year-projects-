<?php
session_start();

require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- tabs23:58-->
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
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>TUT Student Clinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <!--<li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">L</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">G</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>-->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
					
                    <?php
						$namePrifile = $_SESSION["name"];
						$surnamePrifile = $_SESSION["surname"];
						
						$profileName = $_SESSION["name"]." ".$_SESSION["surname"];?>
                        <span><?php echo 'Login Success, Welcome - '.$profileName.'';?></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profileP.php">My Profile</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                   <a class="dropdown-item" href="profileP.php">My Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
                        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="tabs.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="appointmentsP.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
						<li>
                            <a href="searchClinic.html"><i class="fa fa-calendar"></i> <span>Search Clinic</span></a>
                        </li>
						<li>
                            <a href="appointmentsP.php"><i class="fa fa-calendar"></i> <span>Update Appointments</span></a>
                        </li>
						<li>
                            <a href="profileP.php"><i class="fa fa-calendar"></i> <span>Update Appointments</span></a>
                        </li>
						 <li>
                            <a href="change-password.php"><i class="fa fa-key"></i> <span>Change Password</span></a>
                        </li>
						 <li>
                            <a href="forgot-password.html"><i class="fa fa-key"></i> <span>Forgot Password</span></a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Medical History for Patient</h4>
                    </div>
                </div>
                <div class="row">
					<div class="col-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="card member-panel">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0">Doctors Available</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
								  <?php
									$dates = date('Y-m-d');								
								    $stmt = $pdo->query("SELECT * FROM tblupdatereg");
									while ($row = $stmt->fetch()) {
									$dtPresent = $row['date'];
									?>
											
                                    <li>
									<?php
											if($dates == $dtPresent) {
											
									?>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis"><?php  echo $row['name']." ".$row['surname'];?></span>
                                                <span class="contact-date">MBBS, MD</span>
                                            </div>
										</div>
										<?php
										}
										else if($dates != $dtPresent) {
										
											?>
										 <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis"><?php  echo $row['name']." ".$row['surname'];?></span>
                                                <span class="contact-date">MD</span>
                                            </div>
                                        </div>
										<?php }?>
									</li>
									<?php }?>
                                    <li>
                                       <!--  <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Matimba Baloyi</span>
                                                <span class="contact-date">MD</span>
                                            </div>
                                        </div>
                                    </li>
                                   <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status away"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Richard Molefe</span>
                                                <span class="contact-date">BMBS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Lee Moloi</span>
                                                <span class="contact-date">MS, MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Nhlanhla Gunguluza</span>
                                                <span class="contact-date">MBBS</span>
                                            </div>
                                        </div>
                                    </li>
                                   -->
                                </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="doctors.html" class="text-muted">View all Doctors</a>
                            </div>
                        </div>
                    </div>
				<div class="col-4 col-md-4 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="appointments.html" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="d-none">
											<tr>
												<th>Patient Name</th>
												<th>Doctor Name</th>
												<th>Timing</th>
												<th class="text-right">Status</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$stmt = $pdo->query("SELECT * FROM tblappointment where patientName = '$profileName' ");
                             
											while ($row = $stmt->fetch()) {
										
											?>
                               
											<tr>               
												<td>
													<h5 class="time-title p-0">Appointment With</h5>
													<p> <?php echo $row['doctor'];?></p>
												</td>
												<td>
													<h5 class="time-title p-0">Timing</h5>
													<p><?php echo $row['date']." ".$row['time'];?></p>
												</td>
												<td class="text-right">
													<a href="appointmentsP.php" class="btn btn-outline-primary take-btn">Edit</a>
												</td>
											</tr><?php }?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
                   
                </div>
				
                <div class="row">
					<?php
					$x =0;
					
				$stmt = $pdo->query("SELECT * FROM tbladulttriangleform where name = '$namePrifile' and surname = '$surnamePrifile'");
				while ($row = $stmt->fetch()) {
					$x = $x +1;

				?>
                    <div class="col-md-6">
				
                        <div class="card-box">
                            <h4 class="card-title">Case <?php echo $x?></h4>
                            <ul class="nav nav-tabs nav-tabs-top">
                                <li class="nav-item"><a class="nav-link active" href="#top-tab1" data-toggle="tab">Case</a></li>
                                <li class="nav-item"><a class="nav-link" href="#top-tab2" data-toggle="tab">Treatment</a></li>
                                <li class="nav-item"><a class="nav-link" href="#top-tab3" data-toggle="tab">Progress</a></li>
                            </ul>
							
                            <div class="tab-content">
                                <div class="tab-pane show active" id="top-tab1">
								
								

								<option> <?php echo "Complaints :". $row['CurrentComplaints'];?></option>
								<option> <?php echo "Date :". $row['Date'];?></option>
								<option> <?php echo "Mode of Arrival :". $row['ModeofArrival']."\n";?></option>
								<option> <?php echo "Accompanied By :". $row['AccompaniedBy']."\n";?></option>
								<option> <?php	echo "Allergies :". $row['Allergies']."\n";?></option>
								<option> <?php echo "Pulse :". $row['Pulse']."\n";?></option>
								<option> <?php echo "BP :". $row['BP'];?></option>
				
								
                                </div>
                                <div class="tab-pane" id="top-tab2">
							
									
									
								<option> <?php echo "medPrescription :". $row['medPrescription'];?></option>
								<option> <?php echo "Ward :". $row['ward'];?></option>
								
                                </div>
                                <div class="tab-pane" id="top-tab3">
                                 <option> <?php echo "Progress Name :". $row['progressName']."\n";?></option>
								<option> <?php echo "Investigation Outcome :". $row['investigationResult']."\n";?></option>
								<option> <?php echo "Date of Investigation Result :". $row['Date']."\n";?></option>
							
                                </div>
									</div>
                        </div>
                    </div>
			<?php }?>
                   
               <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="card-title">Solid Rounded</h4>
                            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-tab1" data-toggle="tab">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#solid-rounded-tab2" data-toggle="tab">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="#solid-rounded-tab3" data-toggle="tab">Messages</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="solid-rounded-tab1">
                                    Tab content 1
                                </div>
                                <div class="tab-pane" id="solid-rounded-tab2">
                                    Tab content 2
                                </div>
                                <div class="tab-pane" id="solid-rounded-tab3">
                                    Tab content 3
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="card-title">Rounded justified</h4>
                            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-toggle="tab">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-toggle="tab">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab3" data-toggle="tab">Messages</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                                    Tab content 1
                                </div>
                                <div class="tab-pane" id="solid-rounded-justified-tab2">
                                    Tab content 2
                                </div>
                                <div class="tab-pane" id="solid-rounded-justified-tab3">
                                    Tab content 3
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
         
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- tabs23:59-->
</html>
