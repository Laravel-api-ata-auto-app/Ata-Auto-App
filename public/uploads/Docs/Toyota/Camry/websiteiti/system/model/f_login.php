<?php
session_start();
include_once("../../config.php");
if(isset($_POST['btnlogin'])){
	$user = mysql_real_escape_string($_POST['txtuser']);
	$pass = mysql_real_escape_string(md5($_POST['txtpassword']));
	$query = mysql_query("select * from tbl_admin where user_status=1");
	$crow = 0;
	while($row = mysql_fetch_array($query)){
		if($row['user_name']==$user && $row['user_pass']==$pass){
			$crow = $crow + 1;
		}
	}
	if($crow>0){
		$_SESSION['login'] = $user;
		header("location:../index.php");
		exit();
	}else{
	header("location:../login.php");	
	}
}

if(isset($_GET['logout'])){
	session_destroy();
	header("location:../login.php");
}
?>