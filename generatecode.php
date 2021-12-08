<?php
$mysqli = mysqli_connect("localhost","root","","entranceexam" );

$stud_name = $mysqli->query("SELECT * FROM student");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" a href="genecode.css">
    
	<link rel="stylesheet" a href="css/all.css">
    
    <title>Generate Code</title>
</head>
<body>
    
    <div class="header">
        <img class="logo" src="logo.png" alt="logo">
        <h1>Generate Code</h1>
        <div class="dot">
           
            <div class="drop"></div>
                <i class="fas fa-ellipsis-v" onclick="dropmenu()"></i>
                <div class="dropdown-content" id="dropdownmenu">
                    <a href="#">Back</a>
                    <a href="#">Help</a>
                  </div>
            </div>
            <script>
                function dropmenu() {
                  document.getElementById("dropdownmenu").classList.toggle("show");
                }
                window.onclick = function(e) {
                  if (!e.target.matches('.fas')) {
                  var dropdownmenu = document.getElementById("dropdownmenu");
                    if (dropdownmenu.classList.contains('show')) {
                        dropdownmenu.classList.remove('show');
                    }
                  }
                }
                </script>

</div>
<div class="genarea">
    <div class="wrapper">
        <div class="head">
             <h1>Generate Code</h1>  
        </div>

    <div class="genbox">
        <form method="POST" action="generate.php">
                 <select id="stud" class="option" name="student" onchange="selectcourse()">
                 <option disabled="disabled" selected="selected" >Student's Name</option>
                   <?php
                        while($rows = $stud_name->fetch_assoc())
                        {
                            $studentname = $rows['firstname']." ".$rows['middlename']." ".$rows['lastname'];
                            echo"<option value='$studentname'>$studentname</option>";
                        }
                   ?>
                </select><br>
            
            <input type="date" name="examdate"  class="exdate"><br>
            <label class="examlabel">Exam Date</label>
            <input type="text" name="course" placeholder=" " class="coursebox" ><br>          
            <label class="courselabel">Course</label>
            <input class="gen" type="submit" name="submit" value="Generate Code">
			
		</form>
        <script>
                function selectcourse()
                {
                    document.getElementById("stud").value
                }

        </script>
    </div>
    </div>
</div>
</body>
</html>