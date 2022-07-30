<?php
$conn = new mysqli("localhost","root","","examsystem");
if(isset($_POST['update_user'])){
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE login SET username='$username', password='$password' where id='$user_id' ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script> alert('Data updated successfully!');window.location='http://localhost/online%20exam%20system/admin/admin%20management/admin%20management.php' </script>";
        exit(0);
    }
    else{
        echo "<script> alert('No record found!');window.location='http://localhost/online%20exam%20system/admin/admin%20management/admin%20management.php' </script>";
        exit(0);
    }
}
?>