<?php
$username = $_POST['username'];
$password = $_POST['password'];
    $conn = new mysqli("localhost","root","","examsystem");
    if($conn->connect_error){
        die("Failed to connect:".$conn->connect_error);
    }
    else{
        $sql = "select * from login where username='$username' and password ='$password'";
        $result = mysqli_query($conn,$sql);
         
        if(mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {
                header("Location:http://localhost/online%20exam%20system/admin/admin%20management/admin%20management.php");
                
            }
            else {
                echo '<script>alert("WRONG INFORMATION")</script>';
                
            }
    }
        
    
    }
?>