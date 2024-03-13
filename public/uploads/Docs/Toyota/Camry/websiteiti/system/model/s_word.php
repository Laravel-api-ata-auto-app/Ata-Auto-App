<?php

include_once("../../config.php");
if(isset($_POST['btnword'])){
	$worddesc = $_POST['txtword'];
	
	
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = "";
	}
	
	$sql = "insert into tbl_word(word_desc,word_img)values('".$worddesc."','".$img1."')";
	$query = mysql_query($sql);
	echo $sql;

	if($query){
		header("location:../index.php?p=10");
		
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
}

if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
	$photo = mysql_query("select * from tbl_word where word_id=".$id);
	$prow = mysql_fetch_array($photo);
	unlink("../upload/".$prow['word_img']);
		
	if(mysql_query("delete from tbl_word where word_id=".$id)){
		header("location:../index.php?p=10");
	}else{
		echo"<script>
		alert('update failed');
		</script>";
	}
	
}

if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	
	$query1 = mysql_query("select * from tbl_word where word_id=".$id);
	$row = mysql_fetch_array($query1);
	echo $row['word_id']."|".$row['word_desc']."|".$row['word_img'];
}
if(isset($_POST['upword'])){
$id = $_POST['updateword'];
	$worddesc = $_POST['txtword'];
	$img1 = $_POST['wordimg1'];
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			unlink("../upload/".$_POST['wordimg1']);
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = $_POST['wordimg1'];
	}
	$sql = "update tbl_word set word_desc='".$worddesc."',word_img='".$img1."' where word_id=".$id;
	$query = mysql_query($sql);
	if($query){
		header("location:../index.php?p=10");
	}else{
		echo"update fail";
	}	
}
?>