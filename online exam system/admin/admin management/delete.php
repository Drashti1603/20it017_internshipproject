<?php
$conn = new mysqli("localhost","root","","examsystem");
$id = $_GET['id'];
$query = "DELETE FROM login where id='$id' ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script> alert('Data deleted successfully!');window.location='http://localhost/online%20exam%20system/admin/admin%20management/admin%20management.php' </script>";
        exit(0);
    }
    else{
        echo "<script> alert('No record found!');window.location='http://localhost/online%20exam%20system/admin/admin%20management/admin%20management.php' </script>";
        exit(0);
    }
    
?>