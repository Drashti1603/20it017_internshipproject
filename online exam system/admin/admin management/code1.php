<?php
$conn = new mysqli("localhost","root","","examsystem");


if(isset($_POST['add_user'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO login (username,password) VALUES('$username','$password') ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script> alert('Data added successfully!');window.location='http://localhost/online%20exam%20system/admin/admin%20management/admin%20management.php' </script>";
        exit(0);
    }
    else{
        echo "<script> alert('No record found!');window.location='http://localhost/online%20exam%20system/admin/admin%20management/admin%20management.php' </script>";
        exit(0);
    }
        
        
}


?>