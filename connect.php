<?php

date_default_timezone_set("Asia/Kolkata");
session_start();
if($_SERVER['HTTP_HOST']=="localhost"){$connect=mysqli_connect("localhost","u500757179_mybuzi","KaushalP@001","u500757179_mybuzi") or die ('Database not available...');}else {$connect=mysqli_connect("localhost","u500757179_mybuzi","KaushalP@001","u500757179_mybuzi") or die ('Connection issue #567844 Error');}
$date=date('Y-m-d H:i:s');

// token users 






?>

<title> <?php echo $_SERVER['HTTP_HOST']; ?> || Digital Visiting Card</title>

<head>

<link rel="icon" href="images/favicon.png" type="image/png">

 <meta name="keywords" content="Digital Visiting Card Online, Business Card Online, Visiting card, v card">
 
 <meta name="description" content="Best digital visiting card online with many designs, Now create in just 5 minutes and get it instantly.">
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <link rel='stylesheet' href='panel/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  
  <link rel="stylesheet" href="panel/awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <meta      name='viewport'      content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />

<link rel="stylesheet" href="css.css" >
<link rel="stylesheet" href="mobile_css.css" >
<script src="master_js.js"></script>


</head>

