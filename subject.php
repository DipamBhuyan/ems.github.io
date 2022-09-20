<?php
session_start();
if(isset($_SESSION['uid'])){
    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Subject</title>
</head>
<style>
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
<body>
    <!--header-->
    <div class="w3-container w3-teal">
        <center>
            <h1><b>Examination Management System</h1>
            <h3>Nalbari Polytechnic</b></h3>
            <h5>CHANDKUCHI</h5>
            <h5>E.S.T.D-2017</h5>
        </center>
    </div>

    <center>
    <div class="w3-card-4" style="width:60%; margin-top:5%">
        <header class="w3-container w3-teal">
            <h3><b>Subject List</b></h3>
        </header>
        <form id="subject_form" action="subject.php" method="post">
            <table cellspacing="20%" cellpadding="15%" style="width:100%;border: 1px solid #ddd;border-collapse:collapse;">
                <tr align="center" style="border-bottom:1px solid #ddd">
                    <th style="border-right:1px solid #ddd">SL NO</th>
                    <th style="border-right:1px solid #ddd">Branch</th>
                    <th style="border-right:1px solid #ddd">Subject Name</th>
                    <th style="border-right:1px solid #ddd">Subject Code</th>
                    <th>Action</th>
                </tr>
                <?php
                $q = "SELECT * FROM subject order by branch asc";
                $i=1;
                foreach($dbh->query($q) as $r) {
                ?>
                <tr align="center" style="border-bottom:1px solid #ddd">
                    <td style="border-right:1px solid #ddd"><?php echo($i);?></td>
                    <td style="border-right:1px solid #ddd"><?php echo($r[1])?></td>
                    <td style="border-right:1px solid #ddd"><?php echo($r[2])?></td>
                    <td style="border-right:1px solid #ddd"><?php echo($r[3])?></td>
                    <td>
                        <a id="button1" class="w3-button w3-teal" href="update_subject.php?bid=<?php echo($r[0]) ?>"  style="width:79px">Edit</a><br>
                        <form action="delete_subject.php" method="post">
                            <input type="hidden" name="bid" value="<?php echo($r[0]) ?>">
                            <button id="button1" class="w3-button w3-teal" type="submit" value="Delete" name="b1" style="margin-left:0;margin-top:4%">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
                $i++;
                }
                ?>
            </table>  
            </form>
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
<?php
}
else{
    header("location: admin_login.php");
}
?>