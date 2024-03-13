<?php
include_once("../../config.php");

if(isset($_POST['btnimgpartner'])){
	$class = $_POST['txtimgpartner'];
	
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = "";
	}
	
	$sql = "insert into tbl_imgp(imgp_class,imgp_pic)values('".$class."','".$img1."')";
	$query = mysql_query($sql);
	echo $sql;
	if($query){
		header("location:../index.php?p=16");
	}else{
		echo"
		<script>
			alert('Insert Failed');
		</script>
		";
	}
}


if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
	$photo = mysql_query("select * from tbl_imgp where imgp_id=".$id);
	$prow = mysql_fetch_array($photo);
	unlink("../upload/".$prow['imgp_pic']);
		
	if(mysql_query("delete from tbl_imgp where imgp_id=".$id)){
		header("location:../index.php?p=16");
	}else{
		echo"<script>
		alert('Delete failed');
		</script>";
	}
	
}

if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	$query1 = mysql_query("select * from tbl_imgp where imgp_id=".$id);
	$row = mysql_fetch_array($query1);
	echo $row['imgp_id']."|".$row['imgp_class']."|".$row['imgp_pic'];
}

if(isset($_POST['upimgpartner'])){
	$id = $_POST['hupimgpartner'];
	$class = $_POST['txtimgpartner'];
	
	$img1 = $_POST['himgp_pic'];
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			unlink("../upload/".$_POST['himgp_pic']);
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = $_POST['himgp_pic'];
	}
	
	$sql = "update tbl_imgp set imgp_class='".$class."',imgp_pic='".$img1."' where imgp_id=".$id;
	$query = mysql_query($sql);
	if($query){
		header("location:../index.php?p=16");
	}else{
		echo"
		<script>
			alert('Update Failed');
		</script>
		";
	}
}
?>