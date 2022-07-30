<?php
$conn = new mysqli("localhost","root","","examsystem");
if (isset($_POST['edit_password']))
    {

	
    $student_id = $_POST['edit_password'];
	$op = $_POST['op'];
	$np = $_POST['np'];
	
    $sql = "SELECT password FROM student WHERE id='$student_id' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1 ){
        	
        	$sql_2 = "UPDATE student
        	          SET password='$np'
        	          WHERE id='$student_id'";
        	mysqli_query($conn, $sql_2);
        	echo "<script> alert('Data added successfully!');window.location='http://localhost/online%20exam%20system/student/mangementAccount/viewProfile/vp.php' </script>";
            exit(0);

        }
		else {
        	header("Location: http://localhost/online%20exam%20system/student/mangementAccount/viewProfile/vp.php");
	        exit();
        }

    }

    



?>