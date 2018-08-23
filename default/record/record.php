

<?php
/*Include the `fusioncharts.php` file that contains functions
	to embed the charts.
*/
  include("fusioncharts.php");
   
  /* The following 4 code lines contain the database connection information. Alternatively, you can move these code lines to a separate file and include the file here. You can also modify this code based on your database connection.   */

   $hostdb = "localhost";  // MySQl host
   $userdb = "ellipson_lovin";  // MySQL username
   $passdb = "LOVINm2xwell";  // MySQL password
   $namedb = "ellipson_wifi";  // MySQL database name

   // Establish a connection to the database
   $dbhandle = mysqli_connect($hostdb, $userdb, $passdb, $namedb);

   // Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect
   if ($dbhandle->connect_error) {
  	exit("There was an error with your connection: ".$dbhandle->connect_error);
   }
   
?>
<html>
   <head>
  	<title>FusionCharts XT - Column 2D Chart - Data from a database</title>
	  <link  rel="stylesheet" type="text/css" href="cssfile/style.css" />

	<!--  Include the `fusioncharts.js` file. This file is needed to render the chart. Ensure that the path to this JS file is correct. Otherwise, it may lead to JavaScript errors. -->

      <script src="js/fusioncharts.js"></script>
   </head>
   <body style="background-color:''"></style>
   <input type="submit" name="submit" value="BACK" onclick="location.href='datepic.php'">

  	<?php 
 //session_start();
// exec('/wifidemo.v2/default/tables-editable.php');
	global $id;
	global $dat;
//$id=isset($_GET['id']) ? $_GET['id'] : '';
		
			 
		 
	$id=$_GET["id"];
	$dat=$_GET["dat"];
     	// Form the SQL query that returns the top 10 most populous countries
     	//$strQuery ="SELECT ABS(RSSI) As RISSI,Time FROM registration,wifi_rissi_mac WHERE MAC='$id' LIMIT 1 AND Time='$dat'";
		
		$strQuery ="SELECT ABS(RSSI) As RISSI,Time FROM registration,wifi_rissi_mac WHERE  MAC='$id' and date(Time)='$dat'";

		 
     	$result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
		
        	// If the query returns a valid response, prepare the JSON string
			
     	if ($result) {
        	// The `$arrData` array holds the chart attributes and data
        	$arrData = array(
                "chart" => array(
                    "caption" => "Bar chart",
                    "showValues"=> "SELECT Time FROM wifi_rissi_mac  WHERE MAC='$id'and date(Time)='$dat'"
                    //"theme"=> "0"
              	)
           	);
$arrData["data"] = array();
     	

	// Push the data into the array

		while($row = mysqli_fetch_array($result)) {
		
           	array_push($arrData["data"], array(
			
			        "label" => $row["Time"],
              "value" => $row["Time"],
			   "value" => $row["RISSI"]
            // "link" => "countryDrillDown.php?country=".$row['Code']
			
              	)
           	);
			
		}
		

        	/*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

        	$jsonEncodedData = json_encode($arrData);

        	/*Create an object for the column chart. Initialize this object using the FusionCharts PHP class constructor. The constructor is used to initialize the chart type, chart id, width, height, the div id of the chart container, the data format, and the data source. */

        	$columnChart = new FusionCharts("column2D", "DetailsChart" , 1000, 600, "chart-1", "json", $jsonEncodedData);

        	// Render the chart
        	$columnChart->render();

        	// Close the database connection
        	$dbhandle->close();

     	}

  	?>
	
   
  	<div id="chart-1"><!-- Fusion Charts will render here--></div>
  </body>
</html>