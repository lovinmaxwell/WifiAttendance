<!DOCTYPE html>

<?php
session_start();
if(!isset($_SESSION['login_user'])){
header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from eonasdan.github.io/bootstrap-datetimepicker/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:36:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
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
        <link rel="stylesheet" href="../../plugins/morris/morris.css">

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../assets/js/modernizr.min.js"></script>
<script type="text/javascript">
$('#submit').click(function()
{
    $.ajax({
        url: datepic.php,
        type:'POST',
        data:
        {
            n1:$('#n1')},
        success: function(msg)
        {

            alert('Email Sent');
        }               
    });
});
</script>
   
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        
        <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.html">
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.html">
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.html">
		<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.html">
		<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.html">
		<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.html">
		<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.html">
		<link rel="icon" type="image/png" href="favicon-196x196.html" sizes="196x196">
		<link rel="icon" type="image/png" href="favicon-160x160.html" sizes="160x160">
		<link rel="icon" type="image/png" href="favicon-96x96.html" sizes="96x96">
		<link rel="icon" type="image/png" href="favicon-16x16.html" sizes="16x16">
		<link rel="icon" type="image/png" href="favicon-32x32.html" sizes="32x32">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="msapplication-TileImage" content="../mstile-144x144.html">

        <title></title>

        <link rel="stylesheet" type="text/css" media="screen" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="css/prettify-1.0.css" rel="stylesheet">
        <link href="css/base.css" rel="stylesheet">
        <link href="cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<script type="text/javascript" src="code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
			<script src="cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
			<script src="cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
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
                                <a href="../employee/tables-layout2.php"><i class="fi-layout"></i> <span> EMPLOYEE </span> </a>
       
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

            		
<div class="container">
			<h3 id="min-view-mode">SELECT DATE</h3>

    <div class="col-sm-6" style="height:225px;">
        <form action="datepic.php" method="POST">
		<div class="form-group">
            <div class="input-group date"  id="datetimepicker10">
		
                <input type="text" name="n1" id="n1" value="value" class="form-control"/>
				
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
				 </span>
                </span>
				
            </div>
        </div>
    <input type="submit" value="submit"/>
	</form>
	</div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'YYYY-MM-DD'
            });
        });
    </script>
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


<table style="width:100%">
  <tr>
    <th><font color='block'>ID </font></th>
    <th><font color='block'>NAME</font></th> 
    <th><font color='block'>CHECK-IN<font></th>
	<th><font color='block'>CHECK-OUT<font></th>
	<th><font color='block'>PRESENT HOURS<font></th>
	<th><font color='block'>STATUS<font></th>
  </tr>

			
<?php
$selectdate=$_POST['n1'];
include 'connect.php';
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
     <td bgcolor="#Fdf5e6"><b><font color='#000080' >  <?php echo $rows['ID'];?>   </font></b></td>
     <td bgcolor="#Fdf5e6"><b><font color='#000080' >  <?php echo $rows['employee_name'];?> </font></b></td>&nbsp&nbsp&nbsp
	  <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['check_in'];?>   </font></b></td>
     <td bgcolor="#Fdf5e6"><b><font color='#000080' >  <?php echo $rows['check_out'];?> </font></b></td>
	  <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['hours_present'];?>   </font></b></td>&nbsp&nbsp&nbsp
     <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo $rows['Attendence_Status'];?> </font></b></td>
	 <td bgcolor="#Fdf5e6"><b><font color='#000080'>  <?php echo '<a href="' . htmlspecialchars("record.php?id=".html_entity_decode($pid)) .'&dat=' . html_entity_decode($selectdate). '">';?> details </a></font></b></td>
	 </tr>
 
 <?php endwhile;?>
</table><br><br>
</div>
</div>
</div>
</div>
</div>
 </div>   </body>

<!-- Mirrored from eonasdan.github.io/bootstrap-datetimepicker/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:37:15 GMT -->
</html>