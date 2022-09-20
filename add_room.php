<?php
    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
if(isset($_POST['roomid'])){
    $stmt = $dbh->prepare("Insert into room (room_id, room_no) values ('$_POST[roomid]','$_POST[roomno]')");
		$stmt->execute();
        header("location:success.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
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
            background-image: url(./bg/7.jpg);
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
            height:65;
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
    <form action="add_room.php" method="post">
    <center><h3><u>Room</u></h3></center>
        <table align="center" cellpadding="10px" cellspacing="10px">
            <tr>
                <td>
                <label>Room id: </label>
                </td>
                <td>
                    <input type="text" value="" name="roomid" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Room no: </label>
                </td>
                <td>
                    <input type="text" value="" name="roomno" required>
                </td>
            </tr>
        </table>
        <button id="button" type="submit" value="Submit" name="b1">Submit</button>
    </form> 
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
    <script>
    jquery('#subject_form').validate({
    rules:{
        roomid:"required",
        roomno:"required",
    },messages:{
        roomid:"Please enter the room id",
        roomno:"Please enter room no",
    },submitHandler:function(form){
        form.submit();
    }
    });
    </script> 
</body>
</html>