<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/adminox_1.1/b4/default/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2017 11:39:42 GMT -->
<head>
<title>Bootstrap 3 Datepicker</title>
 <link rel="stylesheet" type="text/css" media="screen" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="css/prettify-1.0.css" rel="stylesheet">
        <link href="css/base.css" rel="stylesheet">
        <link href="../../cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
		<script type="text/javascript" src="../../code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
			<script src="../../cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
			<script src="../../cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
   <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <!--<div class="topbar-left">
                                <span>
                                    <img src="assets/images/logo.png" alt="" height="25">
                                </span>
                        <i>
                            <img src="assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>-->

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
                                <a href="javascript: void(0);">
                                    <a href="dashboard-2.html"><i class="fi-air-play"></i><span class="badge badge-success pull-right"></span><span> Dashboard </span></a>
                                </a>
                            </li>
                            <li>
                            
                            <li>
                                <a href="javascript: void(0);"><a href="../tables-layout2.php"><i class="fi-layout"></i> <span> EMPLOYEE </span> <span class="menu-arrow"></span></a>
       
                            </li>


                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
<!-- content-->
	<form action="index1.php" method="post">
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

<hr />
<h3 id="min-view-mode">SELECT DATE</h3>
	
<div class="container">
    <div class="col-sm-6" style="height:130px;">
        <div class="form-group">
            <div class="input-group date"  id="datetimepicker10">
		
                <input type="text" name="n1" id="n1" class="form-control"/>
				
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
				 </span>
                </span>
				
            </div>
        </div>
    </div><input type="submit" value="submit"/>
	</form>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'YYYY/MM/DD'
            });
        });
    </script>
</div>

<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>NAME</th> 
    <th>CHECK-IN</th>
	<th>CHECK-OUT</th>
	<th>STATUS</th>
  </tr>
</div>
</div>
<script src="js/prettify-1.0.min.js"></script>
<script src="js/base.js"></script>
<script>
$('#example').DataTable( {
        ajax: 'data.php',
        columns: [
            {data:'ID'},
            {data:'employee_name'},
            {data:'check_in'},
            {data:'check_out'},
			{data:'hours_present'},
			{data:'Attendence_Status'},
        ]
    } );

</script>				
<?php
$selectdate=$_POST['n1'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"wifi_rissi_mac");

$sql="SELECT t1.ID,t1.employee_name,t1.MAC_ID,t2.MAC,min(t2.time) as check_in,max(t2.Time) as check_out,TIMEDIFF(max(t2.Time),min(t2.time)) as hours_present, IF(TIME_TO_SEC(TIMEDIFF(max(t2.Time),min(t2.time)))>=28800,'Present','Absent') as Attendence_Status
         FROM registration t1,wifi_rissi_mac t2
		  where t1.MAC_ID=t2.MAC and date(t2.time)='$selectdate' group by t1.ID";
$Result=mysqli_query($link,$sql);

 
?>

  <?php while($rows = mysqli_fetch_array($Result)):?>

     <tr>
     <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['ID'];?>   </font></b></td>
     <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['employee_name'];?> </font></b></td>
	  <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['check_in'];?>   </font></b></td>
     <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['check_out'];?> </font></b></td>
	  <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['hours_present'];?>   </font></b></td>
     <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['Attendence_Status'];?> </font></b></td>
	 </tr>
 
 <?php endwhile;?>
</table><br><br>

    </body>
</html>


