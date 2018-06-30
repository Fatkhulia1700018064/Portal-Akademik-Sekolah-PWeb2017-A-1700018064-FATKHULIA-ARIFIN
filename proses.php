<?php 
$user=$_POST['username'];
$password=$_POST['passwd'];
if($user=="ADMIN" && $password=="123" or $user=="admin"){
	echo "<script>alert('SUSKES')</script>";
	include 'admin.php';
}
else{
	echo "<script>alert('GAGAL')</script>";	
}
 ?>


