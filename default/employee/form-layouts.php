<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login_user'])){
header('location: index.php');
}
?>
<html class=" ">
    
<!-- Mirrored from jaybabani.com/complete-admin/v4.2/preview/fixedmenu/blo-category-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 09:30:33 GMT -->
<head>
        <!-- 
         * @Package: Complete Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 2.2
         * This file is part of Complete Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Complete Admin : Add Blog Category</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="../../assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="../../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        
        
<link href="../../assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen"/>

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="../../assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->
 <body class=" "><!-- START TOPBAR -->
<div class='page-topbar '>
    <div>

    </div>
    <div class='quick-area'>
	<div class='pull-right'>
            <ul class="info-menu right-links list-inline list-unstyled">
                <li class="profile">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <img src="../data/profile/admin-icon.png" alt="user-image" class="img-circle img-inline">
                        <span>Admin<i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu profile animated fadeIn">
                        <li>
                            <a href="#profile">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li class="last">
                            <a href="logout.php">
                                <i class="fa fa-lock"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>			
        </div>
        
                		
        </div>	  
			
              
        </div>		
<!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-container row-fluid container-fluid">

    <!-- SIDEBAR - START -->

<div class="page-sidebar fixedscroll">

    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

        <!-- USER INFO - START -->
        <div class="profile-info row">

            <div class="profile-image col-xs-4">
               <!-- <a href="ui-profile.html">
                    <img alt="" src="../data/profile/profile-blog.jpg" class="img-responsive img-circle">
                </a>-->
            </div>

           
        </div>
        <!-- USER INFO - END -->



        <ul class='wraplist'>	

            
                    <li class="open"> 
                    <a href="../dashboard-2.php">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                        </a>
                    </li>
					<li class="hover"> 
                    <a href="../employee/tables-layout2.php">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Empolyee</span>
                        </a>
                    </li>
					<li class=""> 
                    <a href="index-blog.html">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Coming soon</span>
                        </a>
                    </li>
					<li class=""> 
                    <a href="index-blog.html">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Coming soon</span>
                        </a>
                    </li>
                    <li class=""> 
                    <a href="index-blog.html">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Coming soon</span>
                        </a>
                    </li>
					<li class=""> 
                    <a href="index-blog.html">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Coming soon</span>
                        </a>
                    </li>
                    
                    
    </div>

    </div>
    <!-- MAIN MENU - END -->



</div>
<!--  SIDEBAR - END -->
   
    <!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START --><h1 class="title">Add device</h1><!-- PAGE HEADING TAG - END -->                            </div>

                            <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="blo-categories.html">Employee</a>
                        </li>
                        <li class="active">
                            <strong>Add </strong>
                        </li>
                    </ol>
                </div>
                                
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    <div class="col-xs-12">
    <section class="box ">
            <div class="content-body">
    <div class="row">
    <form role="form" action="add.php" method="POST">
                    <div class="col-xs-12 col-sm-9 col-md-8">
                                    <div class="form-group">
                            <label class="form-label" for="field-12300">Name</label>
                            <span class="desc"></span>
                            <div class="controls">
                                <input type="text" name="name" value="" class="form-control" id="field-12300">
                            </div>
                        </div>

            <div class="form-group">
                            <label class="form-label" for="field-119333">ID</label>
                            <span class="desc"></span>
                            <div class="controls">
                                <input type="text" name="id" value="" class="form-control" id="field-119333">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="form-label" >Category</label>
                            <span class="desc"></span>
                            <div class="controls">
                                <input type="text" name="category" value="" class="form-control" id="field-12300">
                            
                            </div>
                        </div>
						<div class="form-group">
                            <label class="form-label" >Department</label>
                            <span class="desc"></span>
                            <div class="controls">
                                <input type="text" name="department" value="" class="form-control" id="field-12300">
                            
                            </div>
                        </div>
						<div class="form-group">
                            <label class="form-label" >Device1</label>
                            <span class="desc"></span>
                            <div class="controls">
                                <input type="text" name="device1" value="" class="form-control" id="field-12300">
                            
                            </div>
                        </div>
						<!--<div class="form-group">
                            <label class="form-label" >Device2</label>
                            <span class="desc"></span>
                            <div class="controls">
                                <input type="text" name="device2" value="" class="form-control" id="field-12300">
                            
                            </div>
                        </div>-->



                    </div>
                    
                        <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                            	<div class="text-left">
                                <input type="submit" class="btn btn-primary"></input>
                                <button type="button" class="btn" onClick="window.location='#';">Cancel</button>
                            </div>
                        </div>
                    </form>
    </div>


    </div>
        </section></div>


<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>
    <!-- END CONTENT -->
   

<div class="chatapi-windows ">




</div>    </div>
    <!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


<!-- CORE JS FRAMEWORK - START --> 
<script src="../../assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
<script src="../../assets/js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="../../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
<script>window.jQuery||document.write('<script src="../assets/js/jquery-1.11.2.min.js"><\/script>');</script>
<!-- CORE JS FRAMEWORK - END --> 


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 

<script src="../../assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script> <script src="../assets/plugins/autosize/autosize.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE TEMPLATE JS - START --> 
<script src="../../assets/js/scripts.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS - END --> 

</body>

<!-- Mirrored from jaybabani.com/complete-admin/v4.2/preview/fixedmenu/blo-category-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 09:30:33 GMT -->
</html>



