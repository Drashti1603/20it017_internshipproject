<?php
$conn = new mysqli("localhost","root","","examsystem");

if(isset($_POST['update_course'])){
    $course_id = $_POST['course_id'];
    $subname = $_POST['subname'];
    $subcode = $_POST['subcode'];
    $date = $_POST['date'];

    $query = "UPDATE subject SET subname='$subname', subcode='$subcode',date='$date' where id='$course_id' ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script> alert('Data updated successfully!');window.location='http://localhost/online%20exam%20system/admin/subject%20management1/sub.php' </script>";
        exit(0);
    }
    else{
        echo "<script> alert('No record found!');window.location='http://localhost/online%20exam%20system/admin/subject%20management1/sub.php' </script>";
        exit(0);
    }
        
}


if(isset($_POST['add_course'])){
    $subname = $_POST['subname'];
    $subcode = $_POST['subcode'];
    $date = $_POST['date'];

    $query = "INSERT INTO subject (subname,subcode,date) VALUES('$subname','$subcode','$date') ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script> alert('Data added successfully!');window.location='http://localhost/online%20exam%20system/admin/subject%20management1/sub.php' </script>";
        exit(0);
    }
    else{
        echo "<script> alert('No record found!');window.location='http://localhost/online%20exam%20system/admin/subject%20management1/sub.php' </script>";
        exit(0);
    }
        
}

?>