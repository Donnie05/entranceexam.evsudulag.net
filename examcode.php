
<?php 
include_once('connect.php'); 
$query="SELECT * from student ORDER BY id DESC "; 
$result = mysqli_query($con,$query); 
?> 



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" a href="codecss.css">
    
	<link rel="stylesheet" a href="css/all.css">
    
    <title>Exam Code</title>
</head>
<body>
    
    <div class="header">
        <img class="logo" src="logo.png" alt="logo">
        <h1>Exam Code</h1>
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
                
			  <th>Student </th>
        <th> Course </th>
			  <th> Code </th> 
			  <th> Valid Until </th> 
			  <td> Actions  </td>
           
	    </tr> 
  </thead>
    <tbody>
		<?php 
    while($row=mysqli_fetch_assoc($result))
		{ 

  
      $student = $row['firstname']." ".$row['middlename']." ".$row['lastname'];
      $course = $row['course'];
      $code = $row['code'];
      $validuntil = $row['validuntil'];
		?> 
		<tr>
     
		  <td><?php echo $student ?></td> 
      <td><?php echo $course ?></td>
		  <td><?php echo $code ?></td> 
		  <td><?php echo $validuntil ?></td> 
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