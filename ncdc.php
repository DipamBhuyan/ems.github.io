<?php
session_start();
if(isset($_SESSION['uid'])){
    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
    if(isset($_POST['noofsubject'])){
        echo($_POST['noofsubject']);
        $stmt = $dbh->prepare("Insert into ncdc (semester, branch, roll_no, name, ncdcac, no_of_subject) values ('$_POST[semester]','$_POST[branch]','$_POST[studentrollno]','$_POST[studentname]','$_POST[ncdcac]','$_POST[noofsubject]')");	
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>NC/DC List</title>
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
    <center>
        <form class="ncdc_sorting" action="ncdc.php" method="post">
        <header style="line-height:20px;margin-bottom:3%">
            <h5>List of NC Students <br>
            <label>Branch:</label>
            <select class="filter" name="branch" style="height:4%">
                <option value="" selected disabled hidden>--Select the Branch--</option>
                <option value="Computer Science & Engineering" name="cse">Computer Science & Engineering</option>
                <option value="Electrical Engineering" name="ee">Electrical Engineering</option>
                <option value="Printing Technology"name="pt">Printing Technology</option>
            </select><br>
            <label>Semester:</label>
            <select name="semester" style="height:4%">
                <option value="" selected disabled hidden>--Select the Semester--</option>
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
                <option value="fourth">Fourth</option>
                <option value="fifth">Fifth</option>
                <option value="sixth">Sixth</option>
            </select><br>
            <label>Year:</label><input type="text" name="year" style="height:4%;width:5%" required>
            </h5>
            <button id="print" class="w3-button w3-teal" style="text-decoration:none;margin-top:1%">Search</button>
        </header>
        </form>
        <div class="w3-container">
            <form class="ncdc" action="ncdc.php" method="post">
            <table id="table" cellspacing="0" cellpadding="5%" style="width:80%;border:1px solid black;border-collapse:collapse;">
            <thead>
                <tr align="center" style="border-bottom:1px solid black">
                    <th style="border-right:1px solid black">SL NO</th>
                    <th style="border-right:1px solid black">Roll No</th>
                    <th style="border-right:1px solid black">Name</th>
                    <th style="border-right:1px solid black">NC/DC/AC</th>
                    <th style="border-right:1px solid black">No of subject</th>
                </tr>
            </thead>
                <?php
                if ($_POST['branch'] == 'Computer Science & Engineering'){
                $q = "SELECT * FROM project.student where branch='Computer Science & Engineering' order by  branch asc, semester asc, idstudent asc";
                if ($_POST['semester'] == 'first'){
                    $q = "SELECT * FROM project.student where branch='Computer Science & Engineering' && semester=1 order by  branch asc, idstudent asc";
                }
                else if ($_POST['semester'] == 'second'){
                    $q = "SELECT * FROM project.student where branch='Computer Science & Engineering' && semester=2 order by  branch asc, idstudent asc";
                }
                else if ($_POST['semester'] == 'third'){
                    $q = "SELECT * FROM project.student where branch='Computer Science & Engineering' && semester=3 order by  branch asc, idstudent asc";
                }
                else if ($_POST['semester'] == 'fourth'){
                    $q = "SELECT * FROM project.student where branch='Computer Science & Engineering' && semester=4 order by  branch asc, idstudent asc";
                }
                else if ($_POST['semester'] == 'fifth'){
                    $q = "SELECT * FROM project.student where branch='Computer Science & Engineering' && semester=5 order by  branch asc, idstudent asc";
                }
                else if ($_POST['semester'] == 'sixth'){
                    $q = "SELECT * FROM project.student where branch='Computer Science & Engineering' && semester=6 order by  branch asc, idstudent asc";
                }
                }
                else if($_POST['branch'] == 'Electrical Engineering'){
                    $q = "SELECT * FROM project.student where branch='Electrical Engineering' order by  branch asc, semester asc, idstudent asc";
                    if ($_POST['semester'] == 'first'){
                        $q = "SELECT * FROM project.student where branch='Electrical Engineering' && semester=1 order by  branch asc, idstudent asc";
                    }
                    else if ($_POST['semester'] == 'second'){
                        $q = "SELECT * FROM project.student where branch='Electrical Engineering' && semester=2 order by  branch asc, idstudent asc";
                    }
                    else if ($_POST['semester'] == 'third'){
                        $q = "SELECT * FROM project.student where branch='Electrical Engineering' && semester=3 order by  branch asc, idstudent asc";
                    }
                    else if ($_POST['semester'] == 'fourth'){
                        $q = "SELECT * FROM project.student where branch='Electrical Engineering' && semester=4 order by  branch asc, idstudent asc";
                    }
                    else if ($_POST['semester'] == 'fifth'){
                        $q = "SELECT * FROM project.student where branch='Electrical Engineering' && semester=5 order by  branch asc, idstudent asc";
                    }
                    else if ($_POST['semester'] == 'sixth'){
                        $q = "SELECT * FROM project.student where branch='Electrical Engineering' && semester=6 order by  branch asc, idstudent asc";
                    }
                }
                else if($_POST['branch'] == 'Printing Technology'){
                    $q = "SELECT * FROM project.student where branch='Printing Technology' order by  branch asc, semester asc, idstudent asc"; 
                    if ($_POST['semester'] == 'first'){
                        $q = "SELECT * FROM project.student where branch='Printing Technology' && semester=1 order by  branch asc, idstudent asc";
                    }
                    else if ($_POST['semester'] == 'second'){
                        $q = "SELECT * FROM project.student where branch='Printing Technology' && semester=2 order by  branch asc, idstudent asc";
                    }
                    else if ($_POST['semester'] == 'third'){
                        $q = "SELECT * FROM project.student where branch='Printing Technology' && semester=3 order by  branch asc, idstudent asc";
                    }
                    else if ($_POST['semester'] == 'fourth'){
                        $q = "SELECT * FROM project.student where branch='Printing Technology' && semester=4 order by  branch asc, idstudent asc";
                    }
                    else if ($_POST['semester'] == 'fifth'){
                        $q = "SELECT * FROM project.student where branch='Printing Technology' && semester=5 order by  branch asc, idstudent asc";
                    }
                    else if ($_POST['semester'] == 'sixth'){
                        $q = "SELECT * FROM project.student where branch='Printing Technology' && semester=6 order by  branch asc, idstudent asc";
                    }
                }
                else{
                    $q = "SELECT * FROM project.student order by  branch asc, semester asc, idstudent asc"; 
                }
                $i=1;
                foreach($dbh->query($q) as $r) {
                ?>
            <tbody>
                <tr align="center" style="border-bottom:1px solid black">
                    <td style="border-right:1px solid black"><?php echo($i);?></td>
                    <td style="border-right:1px solid black"><?php echo($r[2])?></td>
                    <td style="border-right:1px solid black"><?php echo($r[1])?></td>
                    <td style="border-right:1px solid black;min-width:15%">
                        AC<input type="radio" name="<?php echo($i);?>ncdcac" value="AC">
                        NC<input type="radio" name="<?php echo($i);?>ncdcac" value="NC">
                        DC<input type="radio" name="<?php echo($i);?>ncdcac" value="DC">
                    </td>
                    <td>
                        <input type="text" name="noofsubject" value="" maxlength="2" size="2">
                    </td>
                </tr>
            </tbody>
                <?php
                $i++;
                }
                ?>
            </table>  
        <button id="print" class="w3-button w3-teal" style="text-decoration:none;margin-top:1%">Print</button>
            </form>
        </div>
    </div>
    </center> 
    <script src="jquery-3.6.0.min.js"></script>
    <script src="printThis.js"></script>
    <script>
        $('#print').click(function(){
            $('.ncdc_form').printThis({
                debug:false,
                importCSS:true,
                importStyle:false,
                loadCSS:"https://www.w3schools.com/w3css/4/w3.css",
                pageTitle:"NC/DC List",
                removeInline:false,
                printDelay:333.
                header:"<h5 class="w3-center">List of NC Students<h5>",
                footer:null,
                formValues:true,
                canvas:false,
                base:false,
                doctypeString:'<!DOCTYPE html>',
                removeScripts:false,
                copyTagClasses:false
            });
        })
    </script>
</body>
</html>
<?php
}
else{
    header("location: admin_login.php");
}
?>