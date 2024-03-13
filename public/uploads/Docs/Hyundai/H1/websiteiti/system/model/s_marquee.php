<?php
include_once("../../config.php");
if(isset($_POST['btnmar'])){
	$mardesc = $_POST['txtmarquee'];
	$sql = "insert into tbl_marquee(mar_desc)values('".$mardesc."')";
	$query = mysql_query($sql);

echo $sql;
if($query){
		header("location:../index.php?p=8");
		
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
}

if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
		
	if(mysql_query("delete from tbl_marquee where mar_id=".$id)){
		header("location:../index.php?p=8");
	}else{
		echo"<script>
		alert('Delete failed');
		</script>";
	}
	
}

if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	
	$query1 = mysql_query("select * from tbl_marquee where mar_id=".$id);
	$row = mysql_fetch_array($query1);
	echo $row['mar_id']."|".$row['mar_desc'];
}

if(isset($_POST['btnupmar'])){
$id = $_POST['upmar'];
	$mardesc = $_POST['txtmarquee'];
	
	$sql = "update tbl_marquee set mar_desc='".$mardesc."' where mar_id=".$id;
	$query = mysql_query($sql);
	if($query){
		header("location:../index.php?p=8");
	}else{
		echo"update fail";
	}	
}

?>