<?php
include_once("../../config.php");
	if(isset($_POST['btnpdesc'])){
		$pdesc = $_POST['txtpdesc'];
		$sql = "insert into tbl_pdesc(pdesc_desc)values('".$pdesc."')";
		$query = mysql_query($sql);
		if($query){
			header("location:../index.php?p=17");
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
		if(mysql_query("delete from tbl_pdesc where pdesc_id=".$id)){
			header("location:../index.php?p=17");
		}else{
			echo "
			<script>
				alert('Delete Failed');
			</script>
			";
		}
	}
	
	if(isset($_GET['evt']) && $_GET['evt']=='edit'){
		$id = $_GET['id'];
		$query1 = mysql_query("select * from tbl_pdesc where pdesc_id=".$id);
		$row = mysql_fetch_array($query1);
		echo $row['pdesc_id']."|".$row['pdesc_desc'];
	}
	
	if(isset($_POST['uppdesc'])){
		$id = $_POST['hpdesc'];
		$pdesc = $_POST['txtpdesc'];
		$sql = "update tbl_pdesc set pdesc_desc='".$pdesc."' where pdesc_id=".$id;
		$query = mysql_query($sql);
		if($query){
			header("location:../index.php?p=17");
		}else{
			echo"
				<script>
					alert('Update Failed');
				</script>
			";
		}
	}
?>