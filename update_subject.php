<?php
    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');

    if(isset($_POST['b1'])){
       $q="update subject set branch ='$_POST[branch]',  subject_name ='$_POST[subjectname]', subject_code ='$_POST[subjectcode]' where idsubject = '$_POST[bid]'";
        $stmt = $dbh->prepare($q);
		$stmt->execute();
        header("location:success.php");
        
die();
    }
    $stmt = $dbh->prepare("SELECT * FROM subject where idsubject = $_GET[bid]");
    $stmt->execute();
    $r = $stmt->fetch();
?>

<?php
    if(isset($_GET['s'])){
        echo("<h4>Updated</h4>");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
</head>
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
<body>
    <div class="root">
    </div>
    <div class="form" method="post">
    <form id="subject_form" action="update_subject.php" method="post">
    <center><h3><u>Subject</u></h3></center>
        <table align="center" cellpadding="10px" cellspacing="10px">
            <tr>
                <td>
                <label>Branch: </label>
                </td>
                <td>
                    <select value="<?php echo($r[1]) ?>" name="branch">
                        <option>Computer Science & Engineering</option>
                        <option>Electrical Engineering</option>
                        <option>Printing Technology</option>
                    </select>
                </td>
            </tr>
            <!--<tr>
                <td>
                <label>Branch id: </label>
                </td>
                <td>
                    <input type="text" value="Branch id" name="branchid" required>
                </td>
            </tr>-->
            <tr>
                <td>
                    <label>Subject Name: </label>
                </td>
                <td>
                    <input type="text" value="<?php echo($r[2]) ?>" name="subjectname" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Subject Code: </label>
                </td>
                <td>
                    <input type="text" value="<?php echo($r[3]) ?>" name="subjectcode" required>
                </td>
            </tr>
        </table>
        <button id="button" type="submit" value="Submit" name="b1">Submit</button>
        <input type="hidden" name="bid" value="<?php echo($r[0]) ?>" />
    </form> 
    </div>   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
    <script>
    jquery('#subject_form').validate({
    rules:{
        branchid:"required",
        branchname:"required",
        branchcode:"required",
    },messages:{
        branchid:"Please enter the branch id",
        branchname:"Please enter the branch name",
        branchcode:"Please enter the branch code",
    },submitHandler:function(form){
        form.submit();
    }
    });
    </script> 
</body>
</html>
