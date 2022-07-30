<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A powerful, useful, responsive, ideal online exam web portal for your school">
    <meta name="keywords" content="asp.net online exam, school online exam, school announcement, exam">
    <title>User Management</title>
    <link href="/Content/kendo/css?v=EoExtBXPj2-aKNmGkf9v2h7GdE-upcXSBgqXerfBZ-41" rel="stylesheet"/>

    <link href="http://localhost/online%20exam%20system/admin/admin%20management/am.css" rel="stylesheet"/>
    <link href="http://localhost/online%20exam%20system/admin/admin.css" rel="stylesheet"/>
    <link href="http://localhost/online%20exam%20system/home/home.css" rel="stylesheet"/>
    <link href="http://localhost/online%20exam%20system/admin/manageAccount/viewprofile/vp.css" rel="stylesheet"/>
    
    <link href="/Content/css?v=swnb8zh305zK-3mIXp0qqqIEgfQUQj75fDVruZFNMN01" rel="stylesheet"/>

    <script src="/bundles/modernizr?v=inCVuEFe6J4Q07A0AcRsbJic_UE5MwpRMNGcOtk94TE1"></script>

    <script src="/bundles/jquery?v=2u0aRenDpYxArEyILB59ETSCA2cfQkSMlxb6jbMBqf81"></script>

    <script src="/bundles/kendo?v=NNn02k7MwRlKsxfLcThtev7vwOHQIwyHm8q-V0YT69Y1"></script>

    <script src="/bundles/custom?v=l1TvQEcyYMEAd8gYAJ3Pci5cNxDOkAY80o3igK4NUSs1"></script>

    <script src="/bundles/pako?v=AiINIs2SjJPxaUkuoDBvrG4-7iBN-jdwhvOswC72N1o1"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 <!-- Load Pako ZLIB library to enable PDF compression -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" /> <!--browser's tab icon-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.4.0/jszip.min.js"></script>
    <!--export to pdf template-->
    <script type="x/kendo-template" id="page-template">
        <div class="page-template">
            <div class="header">
                <div style="float: right">Page #: pageNum # of #: totalPages #</div>
                Exam
            </div>
            <div class="footer">
                Page #: pageNum # of #: totalPages #
            </div>
        </div>
    </script>
    <style>
        #mainContainerLayout{
            margin-left:290px;
            margin-top:15px;
            margin-right:10px;
        }
    </style>
</head>
<body class="w3-light-grey">

    <!-- Top container -->
    <div id="topBar" class="w3-bar w3-top w3-black w3-large" style="z-index:4">
   
        <button type="button" class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right"><form action="/Account/LogOff" class="navbar-right" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="RI66QZ1YzJNhzxStfq9ZgoYdsBBCXovmY_UUoj-gOZzX-_lyVy_KB4NdO5g4YrgRv400MSx4Mrfv0z4sCqWs3X_Eis2XMGPqTDG8UzHPDjDnLKqxwKEwdBq1PCudUSCcjAi3ztPZ8MdooKqqhI4mIA2" />    <ul style="list-style:none" class="btn btn-menu">
        <li class="menu-item" id="userNameMenu"><i class="glyphicon glyphicon-user"></i></a></li>
    </ul>
        <ul style="list-style:none" class="btn btn-menu">
            <li id="logOffMenu"><a href="http://localhost/online%20exam%20system/home/home.html">Log out</a></li>
        </ul> 
</form>
<script>
    $(document).ready(function () {
        if ('UserManagement' == 'TakeExam') {
            //$('#userNameMenu').hide();
            $('#logOffMenu').hide();
            //document.getElementById("userNameMenu").disabled = true;
            //document.getElementById("logOffMenu").disabled = true;
        }
    });
</script>
</span>

    </div>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:280px;overflow-y: scroll !important;max-height: 95% !important;" id="mySidebar">
        <br>
        <div class="w3-container w3-row" style="padding-top:0;padding-bottom:0">
            <div class="w3-col s4">
                <img src="http://localhost/online%20exam%20system/img/oe2.png" class="w3-margin-right logoLeftNav">                
            </div>
            <div class="w3-col s8 w3-bar" style="padding-top:0;padding-bottom:0">
                <span>
                    Welcome,
                    <strong><br>
admin                    </strong>
                </span>
                <br>
            </div>
        </div>
        <hr>
        <div class="w3-bar-block">
            
                <a class="w3-bar-item w3-button w3-padding w3-blue" href="http://localhost/online%20exam%20system/admin/admin%20management/admin%20management.php"><i class="glyphicon glyphicon-user"></i>  Admin Management</a>
                <a href="http://localhost/online%20exam%20system/admin/subject%20management1/sub.php" class="w3-bar-item w3-button w3-padding "><i class="glyphicon glyphicon-book"></i><span style="padding-left:10px;">Subject management</span></a>
                <a class="w3-bar-item w3-button w3-padding " href="http://localhost/online%20exam%20system/admin/student%20management/stu.php"><i class="fa fa-child"></i> Student Management</a>
                <a class="w3-bar-item w3-button w3-padding " href="http://localhost/online%20exam%20system/admin/mcqs/add_updatequestions.php"><i class="fa fa-child"></i> Add Questions</a>
                <a href="http://localhost/online%20exam%20system/admin/dashboard/d.html" class="w3-bar-item w3-button w3-padding "><i class="glyphicon glyphicon-dashboard"></i><span style="padding-left:10px;">Dashboard</span></a>
                
                <a href="http://localhost/online%20exam%20system/admin/userdirectory/ud.html" class="w3-bar-item w3-button w3-padding "><i class="fa fa-address-card"></i><span style="padding-left:10px;">User Directory</span></a>
                
            <br />
        </div>
    </nav>


    
    <!-- !PAGE CONTENT! -->
    
    <div id="mainContainerLayout" class="w3-main">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add Questions</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                
                            </h3>

                        </div>
                        <div class="card-body">
                        <form action="code1.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="">Add Question</label>
                                                <input type="text" name="AddQuestion"   class="form-control" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="">Option 1</label>
                                                <input type="text" name="option1" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="">Option 2</label>
                                                <input type="text" name="option2" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="">Option 3</label>
                                                <input type="text" name="option3" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="">Option 4</label>
                                                <input type="text" name="option4" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="">Answer</label>
                                                <input type="text" name="answer" class="form-control" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <button type="submit" name="add_question" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        
        
              
            
    </div>
<?php
$conn = new mysqli("localhost","root","","examsystem");    
if(isset($_POST['add_question'])){
    $id = $_POST['id'];
    $exam_category = $row['category'];
    $loop=0;
        $count=0;
        $res=mysqli_query($link,"select * from questions where category='$exam_category' order by id asc") or die (mysqli_error($link));
        $count=mysqli_num_rows($res);
        if($count==0){

        }
        else{
            while($row=mysqli_fetch_array($res)){
                $loop=$loop+1;
                mysqli_query($link,"update questions set q_no='$loop' where id=$row[id]");
            }
        }
        $loop=$loop+1;
        mysqli_query($link,'insert into questions values('NULL','$loop','$_POST['AddQuestion']','$_POST['option1']','$_POST['option2']','$_POST['option3']','$_POST['option4']','$_POST['answer']')');

    ?>
    <script type="text/javascript">
        alert("Question added successfully");
        window.location.href=window.location.href;
    </script>
    <?php    
}

?>
    
</body>
</html>
