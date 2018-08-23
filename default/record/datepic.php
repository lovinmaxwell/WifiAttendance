
<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login_user'])){
header('location: index.php');
}
?>
<html class=" ">
    
<!-- Mirrored from jaybabani.com/complete-admin/v4.2/preview/fixedmenu/form-components-datepicker.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 09:43:43 GMT -->
<head>
        <!-- 
         * @Package: Complete Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 2.2
         * This file is part of Complete Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Datepicker</title>
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
        
        
<link href="../../assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="../../assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen"/>

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
                <!-- PAGE HEADING TAG - START --><h1 class="title"></h1><!-- PAGE HEADING TAG - END -->                            </div>

                            <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="#"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li class="active">
                            <strong>Date picker</strong>
                        </li>
                    </ol>
                </div>
                                
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    
<div class="col-xs-12">
    <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Date Picker</h2>
                
            </header>
            <div class="content-body">    <div class="row">
        <div class="col-lg-12">


            <div class="form-group">
                <label class="form-label" >Date Format</label>
                <div class="controls">
                    <input type="text" class="form-control datepicker" data-format="D, dd MM yyyy" value="Mon, 02 February 2015">
                </div>
            </div>

    <section class="box ">
            <div class="content-body">    <div class="row">
        <div class="col-xs-12">
		<div class="table-responsive" data-pattern="priority-columns">
                <table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                    <thead>
                        <tr>
                            
                            
                            <th><font color='block'>ID </font></th>
							<th data-priority="3"><font color='block'>NAME</font></th> 
							<th data-priority="4" ><font color='block'>CHECK-IN<font></th>
							<th data-priority="5"><font color='block'>CHECK-OUT<font></th>
							<th data-priority="6"><font color='block'>PRESENT HOURS<font></th>
							<th data-priority="7"><font color='block'>STATUS<font></th>
                            
                        </tr>
                    </thead>
					<?php
$selectdate=$_POST['n1'];
$link=mysqli_connect("localhost","ellipson_lovin","LOVINm2xwell");
mysqli_select_db($link,"ellipson_wifi");
$sql="SELECT t1.ID,t1.employee_name,t1.MAC_ID,t2.MAC,min(t2.time) as check_in,max(t2.Time) as check_out,TIMEDIFF(max(t2.Time),min(t2.time)) as hours_present, IF(TIME_TO_SEC(TIMEDIFF(max(t2.Time),min(t2.time)))>=28800,'Present','Absent') as Attendence_Status
         FROM registration t1,wifi_rissi_mac t2
		  where t1.MAC_ID=t2.MAC and date(t2.time)='$selectdate' group by t1.ID";
$Result=mysqli_query($link,$sql);

 
?>

  <?php while($rows = mysqli_fetch_array($Result)):?>
		<?php $pid=$rows['MAC_ID'];  ?>
     <tr>
     <th bgcolor="#Fdf5e6"><b><font color='#000080' >  <?php echo $rows['ID'];?>   </font></b></th>
     <td bgcolor="#Fdf5e6"><b><font color='#000080' >  <?php echo $rows['employee_name'];?> </font></b></td>&nbsp&nbsp&nbsp
	  <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['check_in'];?>   </font></b></td>
     <td bgcolor="#Fdf5e6"><b><font color='#000080' >  <?php echo $rows['check_out'];?> </font></b></td>
	  <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['hours_present'];?>   </font></b></td>&nbsp&nbsp&nbsp
     <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['Attendence_Status'];?> </font></b></td>
	 <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo '<a href="' . htmlspecialchars("record.php?id=".html_entity_decode($pid)) .'&dat=' . html_entity_decode($selectdate). '">';?> details </a></font></b></td>
	 </tr>
 
 <?php endwhile;?>
</table>
           

        </div>
    </div>
    </div>
        </section></div>
</div>

<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>
    <!-- END CONTENT -->
    <div class="page-chatapi hideit">

    <div class="search-bar">
        <input type="text" placeholder="Search" class="form-control">
    </div>

   
</div>


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

<script src="../../assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script> 
<script src="../../assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script> <script src="../assets/plugins/autosize/autosize.min.js" type="text/javascript"></script>
<script src="../../assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE TEMPLATE JS - START --> 
<script src="../assets/js/scripts.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS - END --> 


<!-- General section box modal start -->

<!-- modal end -->
</body>

<!-- Mirrored from jaybabani.com/complete-admin/v4.2/preview/fixedmenu/form-components-datepicker.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 09:43:44 GMT -->
</html>



