<?php

require_once('config.php');
$email = trim($_POST['email']);
$date = date('Y-m-d H:i:s');
$present = 'present';

$data = [
    'email' => $email,
    'date' => $date,
    'present' => $present,
   
];

$sql = "UPDATE tblupdatereg SET date=:date, present=:present WHERE email=:email";
$pdo->prepare($sql)->execute($data);
header('location:index-2.php');
?>