<?php

include_once("../../config.php");
if(isset($_POST['addsubject'])){
	$cate = $_POST['category'];
	$subname = $_POST['subjectname'];
	$desc1 = $_POST['descript1'];
	$desc2 = $_POST['descript2'];
	$price = $_POST['txtprice'];
	
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
	$sql = "insert into tbl_subject(subject_name,subject_desc1,subject_desc2,subject_price,subject_image,subject_image2,subject_image3,cate_id,subject_status)values('".$subname."','".$desc1."','".$desc2."','".$price."','".$img1."','".$img2."','".$img3."','".$cate."',1)";
	$query = mysql_query($sql);
	

	if($query){
		header("location:../index.php?p=1");
		
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
}	
	if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
	$photo = mysql_query("select * from tbl_subject where subject_id=".$id);
	$prow = mysql_fetch_array($photo);
	unlink("../upload/".$prow['subject_image']);
	unlink("../upload/".$prow['subject_image2']);
	unlink("../upload/".$prow['subject_image3']);
	
		if(mysql_query("delete from tbl_subject where subject_id=".$id)){
			header("location:../index.php?p=1");
		}else{
			echo"<script>
			alert('update failed');
			</script>";
		}
	
	}

if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	
	$query1 = mysql_query("select * from tbl_subject where subject_id=".$id);
	$row = mysql_fetch_array($query1);
	echo $row['subject_id']."|".$row['subject_name']."|".$row['subject_desc1']."|".$row['subject_desc2']."|".$row['subject_price']."|".$row['subject_image']."|".$row['subject_image2']."|".$row['subject_image3'];
}

if(isset($_POST['btnupdate'])){
	
	$id = $_POST['updatsubject'];
	$img1 = $_POST['img1'];
	$img2 = $_POST['img2'];
	$img3 = $_POST['img3'];
	
	$cate = $_POST['category'];
	$subname = $_POST['subjectname'];
	$desc1 = $_POST['descript1'];
	$desc2 = $_POST['descript2'];
	$price = $_POST['txtprice'];
	
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
	
	$sql = "update tbl_subject set subject_name='".$subname."',subject_desc1='".$desc1."',subject_desc2='".$desc2."', subject_price='".$price."',subject_image='".$img1."',subject_image2='".$img2."',subject_image3='".$img3."',cate_id='".$cate."' where subject_id=".$id;
	echo $sql;
	$query = mysql_query($sql);
	if($query){
		header("location:../index.php?p=1");
	}else{
		echo"update fail";
	}	
	
}

?>