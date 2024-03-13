<?php
include_once("../../config.php");
if(isset($_POST['btnabout'])){
	$dest = $_POST['destination'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$history = $_POST['history'];
	$structure = $_POST['structure'];
	$vision = $_POST['vision'];
	$mission = $_POST['mission'];
	$goal = $_POST['goal'];
	$strategy = $_POST['strategy'];
	$hr = $_POST['hr'];
	$sk = $_POST['sk'];
	$st_rs = $_POST['st_rs'];
	$sql="insert into tbl_about(destination,phone,email,history,structure,vision,mission,goal,strategy,hr,skill,st_resource)values('".$dest."','".$phone."','".$email."','".$history."','".$structure."','".$vision."','".$mission."','".$goal."','".$strategy."','".$hr."','".$sk."','".$st_rs."')";
	$query = mysql_query($sql);
	if($query){
		header("location:../index.php?p=6");
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
}

if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
		
		if(mysql_query("delete from tbl_about where about_id=".$id)){
			header("location:../index.php?p=6");
		}else{
			echo"<script>
			alert('Delete failed');
			</script>";
		}
	
}

if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	$query1 = mysql_query("select * from tbl_about where about_id=".$id);
	$row = mysql_fetch_array($query1);
	echo $row['about_id']."|".$row['destination']."|".$row['phone']."|".$row['email']."|".$row['history']."|".$row['structure']."|".$row['vision']."|".$row['mission']."|".$row['goal']."|".$row['strategy']."|".$row['hr']."|".$row['skill']."|".$row['st_resource'];
}

if(isset($_POST['upabout'])){
$id = $_POST['btnupdateab'];
$dest = $_POST['destination'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$history = $_POST['history'];
	$structure = $_POST['structure'];
	$vision = $_POST['vision'];
	$mission = $_POST['mission'];
	$goal = $_POST['goal'];
	$strategy = $_POST['strategy'];
	$hr = $_POST['hr'];
	$sk = $_POST['sk'];
	$st_rs = $_POST['st_rs'];
	$sql1 ="update tbl_about set destination='".$dest."',phone='".$phone."',email='".$email."',history='".$history."',structure='".$structure."',vision='".$vision."',mission='".$mission."',goal='".$goal."',strategy='".$strategy."',hr='".$hr."',skill='".$sk."',st_resource='".$st_rs."' where about_id=".$id;
	//echo $sql1;
	$query = mysql_query($sql1);	
	if($query){
		header("location:../index.php?p=6");		
	}else{
		echo"
		
		<script>
			alert('Update fail');
		</script>
		
		";
	}
}

?>
