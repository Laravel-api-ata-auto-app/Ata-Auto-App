<?php

include_once("../../config.php");
if(isset($_POST['btndetail'])){
	$shortdetail = $_POST['shortcourse'];
	
	
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = "";
	}
	
	$sql = "insert into tbl_shortdetail(shortdetail_img,short_id)values('".$img1."','".$shortdetail."')";
	$query = mysql_query($sql);
	

	if($query){
		header("location:../index.php?p=4");
		
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
}	
	if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
	$photo = mysql_query("select * from tbl_shortdetail where shortdetail_id=".$id);
	$prow = mysql_fetch_array($photo);
	unlink("../upload/".$prow['shortdetail_img']);
		
	if(mysql_query("delete from tbl_shortdetail where shortdetail_id=".$id)){
		header("location:../index.php?p=4");
	}else{
		echo"<script>
		alert('update failed');
		</script>";
	}
	
}



?>