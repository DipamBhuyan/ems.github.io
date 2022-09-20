<?php
session_start();
if(isset($_POST['username'])){
$dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
$user=$_POST['username'];
$password=$_POST['pwd'];
$stmt = $dbh->prepare("SELECT * FROM admin where username = ? and password = ?");
$stmt->bindParam(1, $user);
$stmt->bindParam(2, $password);
$stmt->execute();
if($stmt->rowCount()==0){
echo $msg = "<center>Wrong Username or Password</center>";
}
else{
$row = $stmt->fetch();
session_regenerate_id(); 
$_SESSION["uid"] = $row[0];
header("location: admin.php");
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Login</title>
    <style>
        body,html{
            height:100%;
            margin:0;
            font-family:Arial,Halvetica,sans-serif;
        }
        *{
            box-sizing:border-box;
        }
        .root{
            background-image: url(./image/college_bg.jpg);
            filter: blur(5px);
            -webkit-filter: blur(5px);
            height: 100%;
            background-position: "center";
            background-repeat: no-repeat;
            background-size: cover;
        }
        .form{
            background-color:rgb(0,0,0);
            background-color:rgba(0,0,0,0.4);
            color:white;
            box-shadow: 10px 10px 10px rgba(1, 0, 43, 0.993);
            font-weight:bold;
            border:3px solid #f1f1f1;
            position:absolute;
            top:50%;
            transform:translate(-50%,-50%);
            z-index: 2;
            width:35%;
            height:40%;
            padding:20px;
            text-align:center;
            margin-left:50%;
        }

    </style>
</head>
<body>
    <div class="root">
    </div>
    <div class="form">
    <form action="admin_login.php" method="post">
        <table align="center" cellpadding="10px" cellspacing="10px">
            <tr>
                <td>
                <label>Username</label>
                </td>
                <td>
                <input type="text" value="Username" name="username" required>
                </td>
            </tr>
            <tr>
                <td>
                <label>Password</label>
                </td>
                <td>
                <input type="password" value="Password" name="pwd" required>
                </td>
            </tr>
        </table>
        <button id="button" class="w3-button w3-white" type="submit" value="Submit" name="b1" style="margin-top:15px;border-radius:30px;height:35px;">Submit</button>
    </form> 
    </div>
      
</body>
</html>