
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" a href="studreg.css">
    
	<link rel="stylesheet" a href="css/all.css">
    
    <title>Student</title>
</head>
<body>
    
    <div class="header">
        <img class="logo" src="logo.png" alt="logo">
        <h1>Student Registration</h1>
        <div class="dot">
           
            <div class="drop"></div>
                <i class="fas fa-ellipsis-v" onclick="dropmenu()"></i>
                <div class="dropdown-content" id="dropdownmenu">
                    <a href="#">Registration</a>
                    <a href="#">About</a>
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
<div class="regarea">
    <div class="wrapper">
        <div class="head">
             <h1>Registration Form</h1>  
        </div>

    <div class="regbox">
        <form method="POST" action="register.php">
			<input type="text" name="firstname" placeholder="Enter First Name" class="box" require><br>
			<input type="text" name="middlename" placeholder="Enter Middle Name" class="box"><br>
            <input type="text" name="lastname" placeholder="Enter Last Name" class="box"><br>
            <input type="date" name="birthday"  class="bdate"><br>
            <label class="birth">Date of Birth</label>
            <input type="text" name="age" placeholder="Enter Age" class="box"><br>
            <select class="option" name="gender">
                    <option disabled="disabled" selected="selected"  ><p>Gender</p></option>
                  
                    <option>Male</option>
                    <option>Female</option>
                </select><br>
            <input type="text" name="address" placeholder="Enter Address" class="box"><br>
            <input type="text" name="mobile" placeholder="Enter Mobile Number" class="box"><br>
            <input type="text" name="emailadd" placeholder="Enter Email Address" class="box"><br>
            <select class="option1" name="course" >
                    <option disabled="disabled" selected="selected" >Preferred Course</option>
                  
                    <option>BSIT(Bachelor of Science in Information Technology</option>
                    <option>Office Administration</option>
                    <option>Entrepreneur</option>
                </select></br>
            <input class="reg" type="submit" name="submit" value="Register">
			
		</form>
    </div>
    </div>
</div>
</body>
</html>