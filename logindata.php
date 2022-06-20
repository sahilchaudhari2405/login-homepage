<?php
$email=$_POST['emails'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost:3306","root","",'login') or die(mysql_error());
$sql="SELECT * FROM datatable WHERE Email ='$email' and Password='$pass'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
echo $count;
if($count<1)
    {echo "Wrong Login or Password";}
else
	{ 
		$_SESSION['user']=$F_name;
		header("location:home/index.php");
	} 

ob_end_flush();
?>