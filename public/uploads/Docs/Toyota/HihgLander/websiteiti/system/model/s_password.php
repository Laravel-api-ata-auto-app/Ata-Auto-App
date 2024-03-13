<?php
session_start();
include_once("../../config.php");
if(isset($_POST['btnpass'])){
	$oldpass = md5($_POST['oldpass']);
	$newpass = md5($_POST['newpass']);
	$sql = "update tbl_admin set user_pass='".$newpass."' where user_pass='".$oldpass."' and user_name='".$_SESSION['login']."'";
	mysql_query($sql);
	if(mysql_affected_rows()){
		//header("location:../index.php?p=5&1");
		echo"<script>
			alert('update success');
			window.location='../index.php?p=5';
		</script>";
	}else{
		//header("location:../index.php?p=5&2");
		echo"<script>
			alert('do you forget your password ?');
			window.location='../index.php?p=5';
		</script>";
	}
}
?>