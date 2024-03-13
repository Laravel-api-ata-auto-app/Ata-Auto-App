<?php
include_once("../../config.php");

if(isset($_POST['btnban'])){
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = "";
	}
	
	if(isset($_FILES['pic2'])){
		if($_FILES['pic2']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic2']['name']);
			$img2 = md5(uniqid()).".".$ext;
			move_uploaded_file($_FILES['pic2']['tmp_name'],"../upload/".$img2);
		}
	}else{
		$img2 = "";
	}
	$sql = "insert into tbl_baner(ban_img,partner_img)values('".$img1."','".$img2."')";
	$query = mysql_query($sql);
	if($query){
		header("location:../index.php?p=13");
	}else{
	echo"
	<script>
		alert('insert failed');
	</script>
	";
	}
}

if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
	$photo = mysql_query("select * from tbl_baner where ban_id=".$id);
	$prow = mysql_fetch_array($photo);
	unlink("../upload/".$prow['ban_img']);
	unlink("../upload/".$prow['partner_img']);
			
	if(mysql_query("delete from tbl_baner where ban_id=".$id)){
		header("location:../index.php?p=13");
	}else{
		echo"<script>
		alert('update failed');
		</script>";
	}
	
}

if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	$query1 = mysql_query("select * from tbl_baner where ban_id=".$id);
	$row = mysql_fetch_array($query1);
	echo $row['ban_id']."|".$row['ban_img']."|".$row['partner_img'];
}

if(isset($_POST['btnupban'])){
	$id = $_POST['upban'];
	$img1 = $_POST['banimg'];
	$img2 = $_POST['partnerimg'];
	
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			unlink("../upload/".$_POST['banimg']);
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = $_POST['banimg'];
	}
	if(isset($_FILES['pic2'])){
		if($_FILES['pic2']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic2']['name']);
			$img2 = md5(uniqid()).".".$ext;
			unlink("../upload/".$_POST['partnerimg']);
			move_uploaded_file($_FILES['pic2']['tmp_name'],"../upload/".$img2);
		}
	}else{
		$img2 = $_POST['partnerimg'];
	}
	$sql = "update tbl_baner set ban_img='".$img1."',partner_img='".$img2."' where ban_id=".$id;
	$query = mysql_query($sql);
	if($query){
		header("location:../index.php?p=13");
	}else{
		echo"
			<script>
				alert('update failed');
			</script>
		";
	}
}
?>