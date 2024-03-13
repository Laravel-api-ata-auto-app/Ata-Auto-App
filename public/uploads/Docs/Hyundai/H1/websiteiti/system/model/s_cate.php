<?php

include_once("../../config.php");
if(isset($_POST['btncate'])){
	$catename = $_POST['catename'];
	$status = $_POST['txtstatus'];
	$sql = "insert into tbl_cate(cate_name,cate_status)values('".$catename."','".$status."')";
	$query = mysql_query($sql);
	
if($query){
		header("location:../index.php?p=2");
		
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
}
	


if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
		
		if(mysql_query("delete from tbl_cate where cate_id=".$id)){
			header("location:../index.php?p=2");
		}else{
			echo"<script>
			alert('Delete failed');
			</script>";
		}
	
}
	
	
	if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	
	$query1 = mysql_query("select * from tbl_cate where cate_id=".$id);
	$row = mysql_fetch_array($query1);
	echo $row['cate_id']."|".$row['cate_name']."|".$row['cate_status'];
	}

if(isset($_POST['updatecate'])){
	$id = $_POST['update1'];
	$catename = $_POST['catename'];	
	$status = $_POST['txtstatus'];
	$sql1 = "update tbl_cate set cate_name='".$catename."',cate_status='".$status."' where cate_id=".$id;	
	$query2 = mysql_query($sql1);
		if($query2){
			header("location:../index.php?p=2");
		}else{
			echo"update fail";
		}	
	
}
?>