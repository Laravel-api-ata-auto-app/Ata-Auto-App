<?php
include_once("../config.php");

if(isset($_POST['btn_long'])){
	$name = $_POST['txtname'];
	$sex = $_POST['txtsex'];
	$dob = $_POST['dob'];
	$phone = $_POST['txtphone'];
	$addr = $_POST['addr'];
	$course = $_POST['re_long'];
	$date = date("Y-m-d");
	$sql = "insert into tbl_stregist(student_name,student_sex,student_birth,student_phone,student_addr,course,date,student_status)values('".$name."','".$sex."','".$dob."','".$phone."','".$addr."','".$course."','".$date."',1)";
	$query = mysql_query($query);
	if($query){
		header("location:");
	}else{		
		echo"
		<script>
		alert('Thank You for your registration');
		</script>
		";
	}
}

?>