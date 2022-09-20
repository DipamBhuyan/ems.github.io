<?php
    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
    if(isset($_POST['studentname'])){
    echo $q = "Insert into student (student_name, student_rollno, branch, semester, phone_no, email, address) values ('$_POST[studentname]','$_POST[studentrollno]','$_POST[branch]','$_POST[semester]','$_POST[phoneno]','$_POST[email]','$_POST[address]')";
	$stmt = $dbh->prepare($q);	
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
    <title>Student</title>
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
    <form id="student_form" action="add_student.php" method="post">
        <center><h3><u>Student</u></h3></center>
        <table align="center" cellpadding="10px" cellspacing="10px">
            <tr>
                <td>
                    <label>Student Name: </label>
                </td>
                <td>
                    <input type="text" value="" name="studentname" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Student Roll no: </label>
                </td>
                <td>
                    <input type="text" value="" name="studentrollno" required>
                </td>
            </tr>
            <tr>
                <td>
                <label>Branch: </label>
                </td>
                <td>
                    <select name="branch">
                    <option value="Printing Technology">Printing Technology</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Semester: </label>
                </td>
                <td>
                    <input type="text" value="" name="semester" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Phone no: </label>
                </td>
                <td>
                    <input type="text" value="" name="phoneno" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email: </label>
                </td>
                <td>
                    <input type="text" value="" name="email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Address: </label>
                </td>
                <td>
                    <input type="text" value="" name="address" required>
                </td>
            </tr>
        </table>
        <button id="button" type="submit" value="Submit" name="b1">Submit</button>
    </form> 
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
    <script>
    jquery('#student_form').validate({
    rules:{
        branchid:"required",
        studentname:"required",
        studentrollno:"required",
        branch:"required",
        semester:"required",
        phoneno:"required",
        email:{
            required:true,
            email:true,
        },
        address:"required",
    },messages:{
        branchid:"Please enter the branch id",
        studentname:"Please enter student's name",
        studentrollno:"Please enter student's roll no",
        branch:"Please enter student's branch",
        semester:"Please enter student's semester",
        phoneno:"Please enter student's phone no",
        email:{
            required:"Please enter student's email",
            email:"Please enter valid email",
        },
        address:"Please enter student's address",
    },submitHandler:function(form){
        form.submit();
    }
    });
    </script> 
</body>
</html>