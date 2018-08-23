
<!DOCTYPE html>
<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login_user'])){
header('location: ../index.php');
}
?>

<html class=" ">
    
<!-- Mirrored from jaybabani.com/complete-admin/v4.2/preview/fixedmenu/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 09:47:56 GMT -->
<head>
        <!-- 
         * @Package: Complete Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 2.2
         * This file is part of Complete Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Complete Admin : Responsive Tables</title>
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
        
        
<link href="../../assets/plugins/responsive-tables/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen"/>

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="../../assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->


    
    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
<div class='page-topbar '>
    <div>

    </div>
    <div class='quick-area'>
	<div class='pull-right'>
            <ul class="info-menu right-links list-inline list-unstyled">
                <li class="profile">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <img src="../../data/profile/admin-icon.png" alt="user-image" class="img-circle img-inline">
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
                            <a href="../logout.php">
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
                    <a href="tables-layout2.php">
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

            

                            <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        
                        <li class="active">
                            <strong> Tables</strong>
                        </li>
                    </ol>
                </div>
                                
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    
<div class="col-lg-12">
    <section class="box ">
            <div class="content-body">    <div class="row">
        <div class="col-xs-4">
		<div class="pull-right hidden-xs">
			<button type="button" class="btn btn-default" onclick="location.href='form-layouts.php';">ADD</button>
		</div></div>
		<div class="table-responsive" data-pattern="priority-columns">
                <table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                    <thead>
                        <tr>
                            
                            <th>ID</th>
                            <th data-priority="3">Employee_name</th>
                            <th data-priority="1">Category</th>
                            <th data-priority="3">Department</th>
                            
                        </tr>
                    </thead>
                    
                            
                     <?php
$selectdate=date("Y/m/d") ;
$link=mysqli_connect("localhost","ellipson_lovin","LOVINm2xwell");
mysqli_select_db($link,"ellipson_wifi");

$sql="SELECT *FROM registration ";
$Result=mysqli_query($link,$sql);

 
?>

  <?php while($rows = mysqli_fetch_array($Result)):?>
	<tbody>
     <tr>
     <th bgcolor="#Fdf5e6"><b><font  color='#000080'>  <?php echo $rows['ID'];?>   </font></b></th>
     <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['employee_name'];?> </font></b></td>
	  <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['category'];?>   </font></b></td>
     <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['department'];?> </font></b></td>
	 </tr>
 
 <?php endwhile;?>
</tbody>
                </table>
            </div>  


        </div>
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

<script src="../../assets/plugins/responsive-tables/js/rwd-table.min.js" type="text/javascript"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE TEMPLATE JS - START --> 
<script src="../../assets/js/scripts.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS - END --> 


<!-- General section box modal start -->
<!-- modal end -->
</body>

<!-- Mirrored from jaybabani.com/complete-admin/v4.2/preview/fixedmenu/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 09:48:01 GMT -->
</html>



