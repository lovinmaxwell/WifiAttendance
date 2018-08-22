
<?php

$id=$_POST['id'];
$device1=$_POST['device1'] ;
$name=$_POST['name'] ;
$selectdate=date("Y/m/d") ;
$category=$_POST['category'] ;
$department=$_POST['department'] ;

$link=mysqli_connect("localhost","ellipson_lovin","LOVINm2xwell");
mysqli_select_db($link,"ellipson_wifi");

$sql="INSERT INTO registration (ID, MAC_ID,employee_name,joindate,category,department)
VALUES ('$id', '$device1','$name','$selectdate','$category','$department')";
if(mysqli_query($link, $sql)){

    header("Location:form-layouts.php");

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
?>

 
