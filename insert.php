
<?php
header( "refresh:5; url=Fitness and Health.php");
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$confirm=$_POST['confirm'];
$Email=$_POST['Email'];
$Gender=$_POST['Gender'];
$weight=$_POST['weight'];
$height=$_POST['height'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"signup_table");

$select="insert into signup_table(Username,password,confirm,email,gender,weight,height)values('".$Username."','".$Password."','".$confirm."','".$Email."','".$Gender."','".$weight."','".$height."')";
$sql=mysqli_query($con,$select);


print '<script type="text/javascript">';
print 'alert("The data is inserted correctly..")';
print '</script>';

mysqli_close($con);




?>