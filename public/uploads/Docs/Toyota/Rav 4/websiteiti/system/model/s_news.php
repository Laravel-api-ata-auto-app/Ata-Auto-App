<?php
include_once("../../config.php");
if(isset($_POST['addnews'])){
	$tittle = $_POST['newstittle'];
	$desc = $_POST['newsdesc'];
	$date = date("Y-m-d");	
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
	if(isset($_FILES['pic3'])){
		if($_FILES['pic3']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic3']['name']);
			$img3 = md5(uniqid()).".".$ext;
			move_uploaded_file($_FILES['pic3']['tmp_name'],"../upload/".$img3);
		}
	}else{
		$img3 = "";
	}
	
	$sql = "insert into tbl_news(news_title,news_desc,news_date,news_img,news_img2,news_img3,news_status)values('".$tittle."','".$desc."','".$date."','".$img1."','".$img2."','".$img3."',1)";
	$query = mysql_query($sql);
	echo $sql;
	if($query){
		header("location:../index.php?p=5");
		
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
}

if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
	$photo = mysql_query("select * from tbl_news where news_id=".$id);
	$prow = mysql_fetch_array($photo);
	unlink("../upload/".$prow['news_img']);
	unlink("../upload/".$prow['news_img2']);
	unlink("../upload/".$prow['news_img3']);
	
		if(mysql_query("delete from tbl_news where news_id=".$id)){
			header("location:../index.php?p=5");
		}else{
			echo"<script>
			alert('Delete failed');
			</script>";
		}
	
	}
	
	if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	
	$query1 = mysql_query("select * from tbl_news where news_id=".$id);
	$row = mysql_fetch_array($query1);
	echo $row['news_id']."|".$row['news_title']."|".$row['news_desc']."|".$row['news_img']."|".$row['news_img2']."|".$row['news_img3'];
}

if(isset($_POST['updatenews'])){
	
	$id = $_POST['newsup'];
	$img1 = $_POST['img1'];
	$img2 = $_POST['img2'];
	$img3 = $_POST['img3'];
	
	$tittle = $_POST['newstittle'];
	$desc = $_POST['newsdesc'];
	$date = date("Y-m-d");	
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			unlink("../upload/".$_POST['img1']);
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = $_POST['img1'];
	}
	if(isset($_FILES['pic2'])){
		if($_FILES['pic2']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic2']['name']);
			$img2 = md5(uniqid()).".".$ext;
			unlink("../upload/".$_POST['img2']);
			move_uploaded_file($_FILES['pic2']['tmp_name'],"../upload/".$img2);
		}
	}else{
		$img2 = $_POST['img2'];
	}
	if(isset($_FILES['pic3'])){
		if($_FILES['pic3']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic3']['name']);
			$img3 = md5(uniqid()).".".$ext;
			unlink("../upload/".$_POST['img3']);
			move_uploaded_file($_FILES['pic3']['tmp_name'],"../upload/".$img3);
		}
	}else{
		$img3 = $_POST['img3'];
	}
	
	$sql = "update tbl_news set news_title='".$tittle."',news_desc='".$desc."',news_date='".$date."',news_img='".$img1."',news_img2='".$img2."',news_img3='".$img3."' where news_id=".$id;
	echo $sql;
	$query = mysql_query($sql);
	if($query){
		header("location:../index.php?p=5");
	}else{
		echo"update fail";
	}	
	
}

?>