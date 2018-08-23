<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login_user'])){
header('location: index.php');
}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                           <!-- <li class="menu-title">Navigation</li>-->
                            <li>
                              
                                <a href="../dashboard-2.php"><i class="fi-air-play"></i><span> Dashboard </span></a>
                            </li>
							<li>
                                <a href="tables-layout2.php"><i class="fi-layout"></i> <span> EMPLOYEE </span> </a>
       
                            </li>


                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">DETAILS</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Employee</a></li>
                                        <li class="breadcrumb-item"><a href="#">Details</a></li>
										<li class="breadcrumb-item"><a style="aling:left;" href="../logout.php"><i class="fi-layout"></i> <span> logout </span> </a> </li></ol>

                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
						<div class="row">
						<div class="col-sm-12">
						<div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="m-b-30">
                                                <button id="add" class="btn btn-success waves-effect waves-light" onclick="location.href='form-layouts.php';">Add </button>
                                            </div>
                                        </div>
                                    </div>
				


                           
                                             <table class="table table-striped add-edit-table table-bordered" id="datatable-editable">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Employee name</th>
                                            <th>Category</th>
                                            <th>Department</th>
											 
                                        
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
     <td bgcolor="#Fdf5e6"><b><font  color='#000080'>  <?php echo $rows['ID'];?>   </font></b></td>
     <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['employee_name'];?> </font></b></td>
	  <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['category'];?>   </font></b></td>
     <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['department'];?> </font></b></td>
	 
	 </tr>
 
 <?php endwhile;?>
</tbody>
</table>
                                </div>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->


                    </div> <!-- container -->

                </div> <!-- content -->

               
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


    </body>

<!-- Mirrored from coderthemes.com/adminox_1.1/b4/default/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2017 11:44:42 GMT -->
</html>