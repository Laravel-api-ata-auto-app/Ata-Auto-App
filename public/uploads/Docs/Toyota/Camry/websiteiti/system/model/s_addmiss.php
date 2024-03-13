<?php
include_once("../../config.php");

	if(isset($_POST['btnadm'])){
		$txtadm = $_POST['txtadm'];
		$admdesc = $_POST['admdesc'];
		$sql = "insert into tbl_adm(adm_title,adm_desc)values('".$txtadm."','".$admdesc."')";
		$query = mysql_query($sql);
		if($query){
		header("location:../index.php?p=15");
		}else{
			echo"
			<script>
				alert('Insert Failed');
			</script>
			";
		}
	}

	if(isset($_GET['evt']) && $_GET['evt']=='del'){
		$id = $_GET['id'];
		if(mysql_query("delete from tbl_adm where adm_id=".$id)){
			header("location:../index.php?p=15");
		}else{
			echo"<script>
			alert('Delete Failed');
			</script>";
		}
	}
	
		if(isset($_GET['evt']) && $_GET['evt']=='edit'){
			$id = $_GET['id'];
			$query1 = mysql_query("select * from tbl_adm where adm_id=".$id);
			$row = mysql_fetch_array($query1);
			echo $row['adm_id']."|".$row['adm_title']."|".$row['adm_desc'];			
		}
		
		if(isset($_POST['upadm'])){
			$id = $_POST['hupadm'];
			$txtadm = $_POST['txtadm'];
			$admdesc = $_POST['admdesc'];
			$sql = "update tbl_adm set adm_title='".$txtadm."',adm_desc='".$admdesc."' where adm_id=".$id;
			$query = mysql_query($sql);
			
			if($query){
				header("location:../index.php?p=15");
			}else{
				echo"<script>
					alert('Update Failed');
				</script>";
			}
			
		}
		
		
		
?>