<?php

include_once("../../config.php");
if(isset($_POST['btnadv'])){
	$advdesc = $_POST['txtadv'];
	
	
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = "";
	}
	
	$sql = "insert into tbl_adv(adv_desc,adv_img)values('".$advdesc."','".$img1."')";
	$query = mysql_query($sql);
	
	if($query){
		header("location:../index.php?p=7");
		
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
}

if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
	$photo = mysql_query("select * from tbl_adv where adv_id=".$id);
	$prow = mysql_fetch_array($photo);
	unlink("../upload/".$prow['adv_img']);
		
	if(mysql_query("delete from tbl_adv where adv_id=".$id)){
		header("location:../index.php?p=7");
	}else{
		echo"<script>
		alert('update failed');
		</script>";
	}
	
}

if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	
	$query1 = mysql_query("select * from tbl_adv where adv_id=".$id);
	$row = mysql_fetch_array($query1);
	echo $row['adv_id']."|".$row['adv_desc']."|".$row['adv_img'];
}
if(isset($_POST['upadv'])){
$id = $_POST['updateadv'];
	$advdesc = $_POST['txtadv'];
	$img1 = $_POST['advimg1'];
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			unlink("../upload/".$_POST['advimg1']);
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = $_POST['advimg1'];
	}
	$sql = "update tbl_adv set adv_desc='".$advdesc."',adv_img='".$img1."' where adv_id=".$id;
	$query = mysql_query($sql);
	if($query){
		header("location:../index.php?p=7");
	}else{
		echo"update fail";
	}	
}
?>