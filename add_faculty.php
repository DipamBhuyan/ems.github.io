<?php
$dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');   
if(isset($_POST['facultyname'])){
    $file_loc = "faculty_image/";
    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
    $allowedExts = array("jpg", "jpeg", "gif", "png", "pdf", "JPG", "JPEG", "GIF");
        $x=$_FILES["img"]["name"];
	    $getext = explode(".", $_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $file_loc . $x);
        print_r($getext);
    $stmt = $dbh->prepare("Insert into faculty (faculty_name, faculty_branch, faculty_designation, faculty_phone, faculty_email, faculty_photo) values ('$_POST[facultyname]','$_POST[facultybranch]','$_POST[facultydesignation]','$_POST[facultyphone]','$_POST[facultyemail]','$x')");
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
    <title>Faculty</title>
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
    <form id="faculty_form" action="add_faculty.php" method="post" enctype="multipart/form-data">
    <center><h3><u>Faculty</u></h3></center>
        <table align="center" cellpadding="10px" cellspacing="10px">
            <tr>
                <td>
                <label>Faculty Name: </label>
                </td>
                <td>
                    <input type="text" value="" name="facultyname" required>
                </td>
            </tr>
            <tr>
                <td>
                <label>Branch: </label>
                </td>
                <td>
                    <select name="facultybranch">
                        <option>Computer Science & Engineering</option>
                        <option>Electrical Engineering</option>
                        <option>Printing Technology</option>
                        <option>Science</option>
                        <option>Humanities</option>
                        <option>Workshop</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Designation: </label>
                </td>
                <td>
                    <input type="text" value="" name="facultydesignation" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Phone no: </label>
                </td>
                <td>
                    <input type="text" value="" name="facultyphone" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email: </label>
                </td>
                <td>
                    <input type="text" value="" name="facultyemail" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Image: </label>
                </td>
                <td>
                    <input type="file" id="id" accept="image/png,image/jpeg,image/jpg" name="img" value="">
                </td>
            </tr>
        </table>
        <button id="button" type="submit" value="Submit" name="b1">Submit</button>
    </form> 
    </div>  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
    <script>
    jquery('#faculty_form').validate({
    rules:{
        facultyname:"required",
        facultybranch:"required",
        facultydesignation:"required",
        facultyphone:"required",
        facultyemail:{
            required:true,
            email:true,
        },
        img:"required",
    },messages:{
        facultyname:"Please enter the name",
        facultybranch:"Please enter the branch",
        facultydesignation:"Please enter the designation",
        facultyphone:"Please enter the phone no",
        facultyemail:{
            required:"Please enter faculty's email",
            email:"Please enter valid email",
        },
    },submitHandler:function(form){
        form.submit();
    }
    });
    </script> 
</body>
</html>