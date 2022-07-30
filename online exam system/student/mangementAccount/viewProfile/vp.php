
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A powerful, useful, responsive, ideal online exam web portal for your school">
    <meta name="keywords" content="asp.net online exam, school online exam, school announcement, exam">
    <title>View Profile</title>
    <link href="/Content/kendo/css?v=EoExtBXPj2-aKNmGkf9v2h7GdE-upcXSBgqXerfBZ-41" rel="stylesheet"/>
    <link href="http://localhost/online%20exam%20system/student/announcements/a.css" rel="stylesheet"/>
    <link href="http://localhost/online%20exam%20system/student/mangementAccount/viewProfile/vp.css" rel="stylesheet"/>
    <link href="http://localhost/online%20exam%20system/home/home.css" rel="stylesheet"/>
    <link href="http://localhost/online%20exam%20system/student/mangementAccount/viewProfile/vp.css" rel="stylesheet"/>


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
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" /> <!--browser's tab icon-->
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
        <span class="w3-bar-item w3-right"><form action="/Account/LogOff" class="navbar-right" id="logoutForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="WTvkZe9Wl22xE1wCjYYvLSVXR1-V_H6Yy8S38IBSTMD2PfzLRR9WijpOaE4zzfj2fXdnNCl6opQY7oGfAXxEAK6wHTVY6s0pcmi7_mDhUhkgrbMBL4F5QB9mJUt2zbCgUN79dM14ExLRbvQA2Y8F5A2" />    <ul style="list-style:none" class="btn btn-menu">
        <li class="menu-item" id="userNameMenu"><i class="glyphicon glyphicon-user"></i></li>
    </ul>
        <ul style="list-style:none" class="btn btn-menu">
            <li id="logOffMenu"><a href="http://localhost/online%20exam%20system/home/home.html">Log out</a></li>
        </ul> 
</form>
<script>
    $(document).ready(function () {
        if ('ViewProfile' == 'TakeExam') {
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
student2                    </strong>
                </span>
                <br>
            </div>
        </div>
        <hr>
        <div class="w3-bar-block">
            
            <!--when student is sitting for an exam, the menu did not show the other
link to prevent student exit the exam accidentally, since a student only has one attempt-->

<a href="http://localhost/online%20exam%20system/student/examrules/e.html" class="w3-bar-item w3-button w3-padding "><i class="fa fa-warning"></i><span style="padding-left: 10px;">General Exam Rules</span></a>
<a href="http://localhost/online%20exam%20system/student/availableExams/ae.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-certificate"></i><span style="padding-left:10px;">Available Exams</span></a>

<a href="http://localhost/online%20exam%20system/student/Dashboard/dd.html" class="w3-bar-item w3-button w3-padding "><i class="fa fa-dashboard"></i><span style="padding-left:10px;">Dashboard</span></a>
<button href="#" class="w3-bar-item w3-button w3-padding " onclick="displayItems()"><i class="fa fa-cog"></i><span style="padding-left:10px;">Manage Account</span> <i class="fa fa-sort-down" id="downIcon"></i><i class="fa fa-sort-asc" id="upIcon" style="display:none"></i></button>
<div id="manageAccountItems" style="display: flex;">
<ul style="list-style:none">
<li>
<a href="http://localhost/online%20exam%20system/student/mangementAccount/viewProfile/vp.php" class="w3-bar-item w3-button w3-padding w3-blue "><i class="fa fa-user"></i><span style="padding-left:10px;">View Profile</span></a>
</li>

</ul>
</div>

<br />
</div>
    </nav>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div id="mainContainerLayout" class="w3-main">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Student Management</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Students</h3>

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Department</th>
                                        <th>College</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conn = new mysqli("localhost","root","","examsystem");
                                    $query = "select id,name,username,dept,college from student";
                                    $query_run = mysqli_query($conn,$query);
                                    if(mysqli_num_rows($query_run)>0){
                                        foreach($query_run as $row){
                                            ?>
                                            <tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['username']; ?></td>
                                                <td><?= $row['dept']; ?></td>
                                                <td><?= $row['college']; ?></td>
                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="5">No record found</td>
                                        </tr>
                                        <?php

                                    }
                                    ?>
                                    
                                    
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        
        
              
            
    </div>
</body>
</html>
