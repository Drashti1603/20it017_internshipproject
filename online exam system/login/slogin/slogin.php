<?php
$username = $_POST['username'];
$password = $_POST['password'];
    $conn = new mysqli("localhost","root","","examsystem");
    if($conn->connect_error){
        die("Failed to connect:".$conn->connect_error);
    }
    else{
        $sql = "select username,password from student where username='$username' and password ='$password'";
        $result = mysqli_query($conn,$sql);
         
        if(mysqli_num_rows($result)===1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {
                header("Location:http://localhost/online%20exam%20system/student/Dashboard/dd.html");
            }
            else {
                echo "alert('WRONG INFORMATION')";
                echo "</script>";
                die();
            }
    }
        
    
    }
?>