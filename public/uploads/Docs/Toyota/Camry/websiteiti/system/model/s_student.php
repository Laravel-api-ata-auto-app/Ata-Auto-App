<?php

include_once("../../config.php");

if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
			
	if(mysql_query("delete from tbl_stregist where student_id=".$id)){
		header("location:../index.php?p=14");
	}else{
		echo"<script>
		alert('update failed');
		</script>";
	}
	
}

?>