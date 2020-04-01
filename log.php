<?php
header( "refresh:5; url=Fitness and Health.php");
$username=$_POST['UserName'];
$password=$_POST['Passwordd'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"signup_table");//data base name
$select="insert into log(username,password)
values('".$username ."','". $password ."')";
$sql=mysqli_query($con,$select);
print '<script type="text/javascript">';
print 'alert("The data is inserted correctly..")';
print '</script>';
mysqli_close($con);
?>