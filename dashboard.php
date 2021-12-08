<?php

session_start();
if($_SESSION["status"]=false){

    header("Location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" a href="dash.css">
    
	<link rel="stylesheet" a href="css/all.css">
    
    <title>Dashboard</title>

    <script type="text/javascript">
	<script language="javascript" type="text/javascript">
	window.history.forward();
	</script>
</head>
<body>
    
    <div class="header">
        <img class="logo" src="logo.png" alt="logo">
        <h1>HOME DASHBOARD</h1>
        <div class="dot">
           
            <div class="drop"></div>
                <i class="fas fa-ellipsis-v" onclick="dropmenu()"></i>
                <div class="dropdown-content" id="dropdownmenu">
                    <a href="#">Exam Code</a>
                    <a href="#">Subject</a>
                    <a href="#">Student</a>
                    <a href="#">Result</a>
                    <a href="logout.php">Logout</a>
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
    
    </div>
	    <div class="menu-container">
            <div class="menu-item menu-item-1" onclick=window.location.href="examcode.php">
                <div class="content" >
                    <h1>Exam Code</h1>
                    <p>Everything to do with managing the Exam Codes in the database</p>
                </div>
            </div>
            <div class="menu-item menu-item-2" >
                <div class="content">
                    <h1>Questions</h1>
                    <p>Everything to do with managing the Questions in the database</p>
                </div>
            </div>
            <div class="menu-item menu-item-3" onclick=window.location.href="student.php">
                <div class="content">
                <h1>Student</h1>
                <p>Everything to do with managing the Students in the database</p>
            </div>
            </div>
            <div class="menu-item menu-item-4">
                <div class="content">
                <h1>Result</h1>
                    <p>Everything to do with managing the Result in the database</p>
                </div>
            </div>
        </div>
  
</body>
</html>