<?php

include_once("../../config.php");
if(isset($_POST['btnshort'])){
	$shortname = $_POST['shortname'];
	$sql = "insert into tbl_shortcourse(short_name,short_status)values('".$shortname."',1)";
	$query = mysql_query($sql);


	if($query){
		header("location:../index.php?p=3");
		
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
	
}

if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
		
		if(mysql_query("delete from tbl_shortcourse where short_id=".$id)){
			header("location:../index.php?p=3");
		}else{
			echo"<script>
			alert('Delete failed');
			</script>";
		}
	
}
	
	
	if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	
	$query1 = mysql_query("select * from tbl_shortcourse where short_id=".$id);
	$row = mysql_fetch_array($query1);
	echo $row['short_id']."|".$row['short_name'];
	}

if(isset($_POST['updateshort'])){
	$id = $_POST['updateshortcourse'];
	$shortname = $_POST['shortname'];
	
	
	
	$sql1 = "update tbl_shortcourse set short_name='".$shortname."' where short_id=".$id;
	echo $sql1;
	$query2 = mysql_query($sql1);
		if($query2){
			header("location:../index.php?p=3");
		}else{
			echo"update fail";
		}	
	
}

?>
