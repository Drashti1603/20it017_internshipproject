<?php
$conn = new mysqli("localhost","root","","examsystem");

if(isset($_POST['update_student'])){
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $subname = $_POST['subname'];
    $subcode = $_POST['subcode'];
    $date = $_POST['date'];
    $dept = $_POST['dept'];
    $college = $_POST['college'];
    $query = "UPDATE student SET name='$name',username='$username',password='$password',subname='$subname', subcode='$subcode',date='$date',dept='$dept',college='$college' where id='$student_id' ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script> alert('Data updated successfully!');window.location='http://localhost/online%20exam%20system/admin/student%20management/stu.php' </script>";
        exit(0);
    }
    else{
        echo "<script> alert('No record found!');window.location='http://localhost/online%20exam%20system/admin/student%20management/stu.php' </script>";
        exit(0);
    }
        
}

if(isset($_POST['add_student'])){
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $subname = $_POST['subname'];
    $subcode = $_POST['subcode'];
    $date = $_POST['date'];
    $dept = $_POST['dept'];
    $college = $_POST['college'];

    $query = "INSERT INTO student (name,username,password,subname,subcode,date,dept,college) VALUES('$name','$username','$password','$subname','$subcode','$date','$dept','$college') ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo "<script> alert('Data added successfully!');window.location='http://localhost/online%20exam%20system/admin/student%20management/stu.php' </script>";
        exit(0);
    }
    else{
        echo "<script> alert('No record found!');window.location='http://localhost/online%20exam%20system/admin/student%20management/stu.php' </script>";
        exit(0);
        
    }
}
?>