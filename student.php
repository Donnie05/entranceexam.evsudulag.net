<?php 
include_once('connect.php'); 
$query="SELECT * from student "; 
$result = mysqli_query($con,$query); 
?> 

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" a href="studentcss.css">
    
	<link rel="stylesheet" a href="css/all.css">
    
    <title>Student</title>
</head>
<body>
    
    <div class="header">
        <img class="logo" src="logo.png" alt="logo">
        <h1>Student</h1>
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
<div class="bod">
  <table class="content" align="center"> 
	<thead>
      <tr> 
			  <th> Name </th> 
        <th> Birthday </th>
        <th> Age </th>
			  <th> Gender </th> 
			  <th> Address </th> 
			  <th> Mobile Number </th> 
			  <th> Email Address  </th>
        <th> Course </th>
              <th> Date Registered  </th>
              <th> Actions  </th>
	    </tr> 
  </thead>
    <tbody>
		<?php 
    while($row=mysqli_fetch_assoc($result))
		{ 

      $studentname = $row['firstname']." ".$row['middlename']." ".$row['lastname'];
      $bday = $row['bday'];
      $age = $row['age'];
      $gender = $row['gender'];
      $address = $row['address'];
      $mobile = $row['mobile'];
      $email = $row['emailadd'];
      $course = $row['course'];
      $register = $row['registered'];
		?> 
		<tr>
      <td><?php echo $studentname ?></td> 
		  <td><?php echo $bday ?></td> 
          <td><?php echo $age ?></td> 
		  <td><?php echo $gender ?></td> 
		  <td><?php echo $address ?></td> 
          <td><?php echo $mobile ?></td> 
          <td><?php echo $email ?></td> 
          <td><?php echo $course ?></td>
          <td><?php echo $register ?></td>
      <td><a href="#" class="btn btn-pencil">Edit</a></td>
		</tr> 
	<?php 
               } 
          ?> 

              <tbody>
	</table>  
    
              </div>
</body>
</html>