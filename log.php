<?php 

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $_SESSION["status"]=false;

    $con = new mysqli("localhost","root","","entranceexam");
    if($con->connect_error){
        die("Failed to Connect : ".$con->connect_error); 
    }else{
        $stmt = $con->prepare("select * from admin where username = ?" );
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){

                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                $_SESSION["status"]=true;
                header("location:dashboard.php");
            }
            else{
                echo "<script> alert('Wrong username and password!');window.location='login.php' </script>";
            }
        }
        else{
            echo "<script> alert('Wrong username and password!');window.location='login.php' </script>";
        }
    }

        
?>