<?php
$conn = new mysqli("localhost","root","","examsystem");
$id = $_GET['id'];
$query = "DELETE FROM subject where id='$id' ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script> alert('Data deleted successfully!');window.location='http://localhost/online%20exam%20system/admin/subject%20management1/sub.php' </script>";
        exit(0);
    }
    else{
        echo "<script> alert('No record found!');window.location='http://localhost/online%20exam%20system/admin/subject%20management1/sub.php' </script>";
        exit(0);
    }
?>