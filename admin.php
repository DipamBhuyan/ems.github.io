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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin</title>
</head>
<style>
.w3-bottom {
   position: fixed;
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

<!--tasks-->
<div class="w3-bar w3-border w3-card-4 " style="padding-top:0px;height:38px;background-color:#007373;color:white">
  <a class="w3-bar-item w3-button" href="./ncdc.php">NC/DC List</a>
  <a class="w3-bar-item w3-button" href="#">Invigilator Duty</a>
  <a class="w3-bar-item w3-button" href="#">Seat Plan</a>
  <a class="w3-bar-item w3-button" href="#">Attendance Sheet</a>
  <div class="w3-dropdown-click">
    <button onclick="myFunction1()" class="w3-button">Add Information<i class="fa fa-caret-down"></i></button>
    <div id="info" class="w3-dropdown-content w3-bar-block w3-border w3-card-4 w3-animate-zoom">
      <a class="w3-bar-item w3-button" href="./add_branch.php">Branch</a>
      <a class="w3-bar-item w3-button" href="./add_subject.php">Subject</a>
      <a class="w3-bar-item w3-button" href="./add_student.php">Student</a>
      <a class="w3-bar-item w3-button" href="./add_room.php">Room</a>
      <a class="w3-bar-item w3-button" href="./add_faculty.php">Faculty</a>
    </div>
  </div>
  <div class="w3-dropdown-click">
    <button onclick="myFunction2()" class="w3-button">Print<i class="fa fa-caret-down"></i></button>
    <div id="print" class="w3-dropdown-content w3-bar-block w3-border w3-card-4 w3-animate-zoom">
      <a class="w3-bar-item w3-button" href="./">TL record</a>
      <a class="w3-bar-item w3-button" href="./topsheet.php">Top Sheet</a>
    </div>
  </div>
</div>

<!--marquee for notices-->
<marquee width = "100%" height="50%" direction="left" scrolldelay = "3" scrollamount = "5" hspace = "10" vspace="10"><b>Notice related to Examinations || Notice related to Examinations || Notice related to Examinations || Notice related to Examinations<b></marquee>

<!--Extra links-->
<div style="width:17%;float:right;" class="w3-card-4">
  <div style="text-align:center;background-color:black;color:white;margin:0px;width:100%;position:relative;padding: 3%;"><b>Database Links</b></div>
    <div class="links" style="border:5px white ridge;">
        <span class="w3-button w3-block w3-teal" style="margin-bottom:1%"><a href="./branch.php" style="text-decoration:none;">Branch</a></span>
        <span class="w3-button w3-block w3-teal" style="margin-bottom:1%"><a href="./subject.php" style="text-decoration:none;">Subject List</a></span>
        <span class="w3-button w3-block w3-teal" style="margin-bottom:1%"><a href="./student.php" style="text-decoration:none;">Student List</a></span>
        <span class="w3-button w3-block w3-teal" style="margin-bottom:1%"><a href="./faculty.php" style="text-decoration:none;">Faculty List</a></span>
        <span class="w3-button w3-block w3-teal" style="margin-bottom:1%"><a href="./room.php" style="text-decoration:none;">Rooms</a></span>
    </div>
</div>

<!--footer-->
<div class="w3-bottom">
  <a href="mailto: nalbaripolytechnic@gmail.com"><img src="./contact/g.png" alt=""></a>
  <a href="https://www.facebook.com/Nalbaripolytechnicofficial/"><img src="./contact/facebook.png" alt=""></a>
  <a href="https://goo.gl/maps/PDhbQTuNMTyPWxbo9"><img src="./contact/location.png" alt=""></a>
<div style="background-color:white;color:black;"><small><center>Copyright© 2022 Nalbari Polytechnic</center></small></div>
</div>

<script>
function myFunction1() {
  var x = document.getElementById("info");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
};
function myFunction2() {
  var y = document.getElementById("print");
  if (y.className.indexOf("w3-show") == -1) {
    y.className += " w3-show";
  } else { 
    y.className = y.className.replace(" w3-show", "");
  }
};
</script>
</body>
</html>