
<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login_user'])){
header('location: index.php');
}
?>
<html class=" ">
    
<!-- Mirrored from jaybabani.com/complete-admin/v4.2/preview/fixedmenu/index-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 09:28:10 GMT -->
<head>
        <!-- 
         * @Package: Complete Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 2.2
         * This file is part of Complete Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="../assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
		<link href="tcss.css" rel="stylesheet" type="text/css" media="screen"/>
        
        <link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        
        
<link href="../assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/rickshaw-chart/css/graph.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/rickshaw-chart/css/detail.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/rickshaw-chart/css/legend.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/rickshaw-chart/css/extensions.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/rickshaw-chart/css/rickshaw.min.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/rickshaw-chart/css/lines.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen"/>

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
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
                    <a href="dashboard-2.php">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                        </a>
                    </li>
					<li class="hover"> 
                    <a href="employee/tables-layout2.php">
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
        
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    

<div class="col-lg-12">
    <section class="box nobox ">
                <div class="content-body">

    <div class="row">
       <div class="col-md-3 col-sm-6 col-xs-12">
            
				<div class="button-list">
                
                 <center><h4><strong><button type="button" class="btn btn-pink  btn-rounded w-md waves-effect waves-light" id='blorun' onclick="location.href='#';">COMING SOON</button>
					</strong></h4></center>
                
			</div>
		</div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            
				<div class=class="button-list">
                
                 <center><h4><strong><button type="button" class="btn btn-pink  btn-rounded w-md waves-effect waves-light btn-success:hover" id='blorun' onclick="location.href='#';">COMING SOON</button>
					</strong></h4></center>
                
			</div>
        </div><div class="col-md-3 col-sm-6 col-xs-12">
            
				<div class=class="button-list">
                
                 <center><h4><strong><button type="button" class="btn btn-pink  btn-rounded w-md waves-effect waves-light" id='blorun' onclick="location.href='record/datepic1.php';">RECORD</button>
					</strong></h4></center>
                
			</div>
        </div>
		<div class="col-md-3 col-sm-6 col-xs-12">
            
				<div class=class="button-list">
                
                 <center><h4><strong><button type="button" class="btn btn-pink btn-rounded w-md waves-effect waves-light" id='blorun' onclick="location.href='present2day/tables-editable.php';">PRESENT TODAY</button>
					</strong></h4></center>
                
			</div>
        </div>
        </div> <!-- End .row -->    



    <div class="row">



        <div class="col-xs-12">
            <div class="r1_maingraph db_box">
                <span class='pull-left'>
                    <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>PAGE VIEWS</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>UNIQUE VISITORS</small>
                </span>
                <div id="db_morris_area_graph" style="height:272px;width:100%;"></div>
            </div>
        </div>

    </div> <!-- End .row -->


    <div class="row">
        <div class="col-xs-12">
            <div class="wid-vectormap db_box">
                <h4>Visitor's Statistics</h4>
                            <div class="row">
                    <div class="col-xs-12 col-sm-9">
                        <figure>
                            <div id="db-world-map-markers" style="width: 100%; height: 300px"></div>        
                        </figure>
                    </div>
                    <div class="map_progress col-xs-12 col-sm-3">
                        <h4>Unique Visitors</h4>
                        <span class='text-muted'><small>Last Week Rise by 62%</small></span>
                        <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div></div>
                        <br>
                        <h4>Registrations</h4>
                        <span class='text-muted'><small>Up by 57% last 7 days</small></span>
                        <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div></div>
                        <br>
                        <h4>Direct Sales</h4>
                        <span class='text-muted'><small>Last Month Rise by 22%</small></span>
                        <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div></div>
                    </div>
                </div>
                </div>
        </div>		
		

    </div> <!-- End .row -->
<div class="clearfix spacer20"></div>
<div class="row">
        <div class="col-xs-12 col-md-6">

            <div class="r1_graph1 db_box db_box_large">
                <span class='bold'>98.95%</span>
                <span class='pull-right'><small>SERVER UP</small></span>
                <div class="clearfix"></div>
                <span class="db_dynamicbar">Loading...</span>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">

            <div class="r1_graph2 db_box db_box_large">
                <span class='bold'>2332</span>
                <span class='pull-right'><small>USERS ONLINE</small></span>
                <div class="clearfix"></div>
                <span class="db_linesparkline">Loading...</span>
            </div>

        </div>
</div>
    </div>
        </section></div>



<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>
    <!-- END CONTENT -->
    <div class="page-chatapi hideit">

    <div class="search-bar">
        <input type="text" placeholder="Search" class="form-control">
    </div>

    <div class="chat-wrapper">
        <h4 class="group-head">Groups</h4>
        <ul class="group-list list-unstyled">
            <li class="group-row">
                <div class="group-status available">
                    <i class="fa fa-circle"></i>
                </div>
                <div class="group-info">
                    <h4><a href="#">Work</a></h4>
                </div>
            </li>
            <li class="group-row">
                <div class="group-status away">
                    <i class="fa fa-circle"></i>
                </div>
                <div class="group-info">
                    <h4><a href="#">Friends</a></h4>
                </div>
            </li>

        </ul>


        <h4 class="group-head">Favourites</h4>
        <ul class="contact-list">

                <li class="user-row " id='chat_user_1' data-user-id='1'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Clarine Vassar</a></h4>
                        <span class="status available" data-status="available"> Available</span>
                    </div>
                    <div class="user-status available">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_2' data-user-id='2'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Brooks Latshaw</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_3' data-user-id='3'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-3.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Clementina Brodeur</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>

        </ul>


        <h4 class="group-head">More Contacts</h4>
        <ul class="contact-list">

                <li class="user-row " id='chat_user_4' data-user-id='4'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-4.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Carri Busey</a></h4>
                        <span class="status offline" data-status="offline"> Offline</span>
                    </div>
                    <div class="user-status offline">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_5' data-user-id='5'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-5.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Melissa Dock</a></h4>
                        <span class="status offline" data-status="offline"> Offline</span>
                    </div>
                    <div class="user-status offline">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_6' data-user-id='6'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Verdell Rea</a></h4>
                        <span class="status available" data-status="available"> Available</span>
                    </div>
                    <div class="user-status available">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_7' data-user-id='7'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Linette Lheureux</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_8' data-user-id='8'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-3.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Araceli Boatright</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_9' data-user-id='9'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-4.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Clay Peskin</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_10' data-user-id='10'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-5.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Loni Tindall</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_11' data-user-id='11'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Tanisha Kimbro</a></h4>
                        <span class="status idle" data-status="idle"> Idle</span>
                    </div>
                    <div class="user-status idle">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row " id='chat_user_12' data-user-id='12'>
                    <div class="user-img">
                        <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Jovita Tisdale</a></h4>
                        <span class="status idle" data-status="idle"> Idle</span>
                    </div>
                    <div class="user-status idle">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>

        </ul>
    </div>

</div>


<div class="chatapi-windows ">




</div>    </div>
    <!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


<!-- CORE JS FRAMEWORK - START --> 
<script src="../assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
<script src="../assets/js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
<script src="../assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
<script>window.jQuery||document.write('<script src="../assets/js/jquery-1.11.2.min.js"><\/script>');</script>
<!-- CORE JS FRAMEWORK - END --> 


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 

<script src="../assets/plugins/rickshaw-chart/vendor/d3.v3.js" type="text/javascript"></script> <script src="../assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script> <script src="../assets/plugins/rickshaw-chart/js/Rickshaw.All.js"></script>
<script src="../assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="../assets/plugins/easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="../assets/plugins/morris-chart/js/raphael-min.js" type="text/javascript"></script>
<script src="../assets/plugins/morris-chart/js/morris.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="../assets/plugins/gauge/gauge.min.js" type="text/javascript"></script>
<script src="../assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
<script src="../assets/js/blo-dashboard.js" type="text/javascript"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE TEMPLATE JS - START --> 
<script src="../assets/js/scripts.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS - END --> 


<!-- General section box modal start -->
<div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog animated bounceInDown">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Section Settings</h4>
            </div>
            <div class="modal-body">

                Body goes here...

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                <button class="btn btn-success" type="button">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
</body>

<!-- Mirrored from jaybabani.com/complete-admin/v4.2/preview/fixedmenu/index-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 09:28:10 GMT -->
</html>





<script type="text/javascript">


</script>