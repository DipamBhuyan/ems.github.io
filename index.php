<?php

    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Examination Management System</title>
</head>
<style>
  body {
  margin:0;
  font-family: Arial, Helvetica, sans-serif;
}

.header-image {
  background-image: url("./image/college.jpg");
  background-blend-mode: overlay;
  background-color: #3d3d3d;
  height: 400px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.body-header-text {
  text-align: center;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
    .w3-bottom {
   position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: teal;
   color: white;
   text-align: center;
   margin-top:10%;
}
</style>
<body bgcolor="#e8ffff">
<!--header-->
<div class="w3-container w3-teal">
<center>
    <h2 style="width:68%;font-size:25px;margin-top:1%;padding:0;line-height:10px;"><b>Examination Management System</h2>
    <h4 style="width:68%;font-size:20px;margin-top:2%;padding:0;line-height:10px;">Nalbari Polytechnic</b></h4>
    <h6 style="width:68%;font-size:15px;">CHANDKUCHI | E.S.T.D-2017</h6>
</center>
</div>
<!--navbar-->
<div class="w3-bar w3-border w3-card-4 " style="height:50px;background-color:#005959;;color:white">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="admin_login.php" class="w3-bar-item w3-button w3-padding-16">Admin</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-16">Faculty</a>
</div>
<!--background-->
<div class="header-image">
  <div class="body-header-text">
    <h1 style="font-size:75px;font-weight:700;letter-spacing:1px;">Examination Cell</h1>
  </div>
</div>
<center>
  <div style="text-align:center;width:80%;">
    <h1 style="font-weight:600;">Office of The Exam Cell</h1>
    <p style="font-size:18px;">The Examination Cell of (Exam Cell) in VASTTC is headed by the Principal and support
    by a team of examination cell members. The team consists of the senior faculty as a coordinator
    who is assisted by one faculty from each department. The prime responsibility of the Examination
    Cell is to conduct all the examinations (both internal and external examinations) in a fair and
    systematic manner. Examination cell will have appropriate infrastructure for generating question
    papers and other relevant confidential materials.</p>
  </div>
</center>
<hr style="width:70%;border: 3px solid #005959;border-radius: 5px;margin:auto;margin-top:3%;margin-bottom:1%;">
<center>
  <div class="w3-row" style="">
    <h1 style="font-weight:600;margin-bottom:3%;">Members</h1>
    <div class="w3-col w3-card-4" style="width:250px;margin-left:120px;">
      <img src="./image/college.jpg" alt="Alps" style="height:300px;width:250px">
      <div class="w3-container w3-center">
        <p>The Italian / Austrian Alps</p>
      </div>
    </div>
    <div class="w3-col w3-card-4" style="width:250px;margin-left:80px;">
      <img src="./image/college.jpg" alt="Alps" style="height:300px;width:250px">
      <div class="w3-container w3-center">
        <p>The Italian / Austrian Alps</p>
      </div>
    </div>
    <div class="w3-col w3-card-4" style="width:250px;margin-left:80px;">
      <img src="./image/college.jpg" alt="Alps" style="height:300px;width:250px">
      <div class="w3-container w3-center">
        <p>The Italian / Austrian Alps</p>
      </div>
    </div>
    <div class="w3-col w3-card-4" style="width:250px;margin-left:80px;">
      <img src="./image/college.jpg" alt="Alps" style="height:300px;width:250px">
      <div class="w3-container w3-center">
        <p>The Italian / Austrian Alps</p>
      </div>
    </div>
  </div>
</center>

  
<!--footer-->
<div class="w3-bottom">
  <a href="mailto: dipam.bhuyan15@gmail.com"><img src="./contact/g.png" alt=""></a>
  <a href="http://www.facebook.com/dipam.bhuyan.1"><img src="./contact/facebook.png" alt=""></a>
  <a href="https://twitter.com/BhuyanDipam?t=tcoxA1rwnUoyh-yMOj2cug&s=08"><img src="./contact/twitter.png" alt=""></a>
  <a href="https://goo.gl/maps/YKrTwbtzRECV3BVa6"><img src="./contact/location.png" alt=""></a>
</div>
<small><center>Copyright© 2022 Nalbari Polytechnic</center></small>
</body>
</html>