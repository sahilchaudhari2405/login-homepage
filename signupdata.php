<?php
$F_name=$_POST['firstnm'];
$L_name=$_POST['lastnm'];
$email=$_POST['emails'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost:3306","root","",'login') or die(mysql_error());
$query="insert into datatable values('$F_name','$L_name','$email','$pass')";
if(mysqli_query($conn,$query)){
	header("location:login.php");
}
ob_end_flush();
?>