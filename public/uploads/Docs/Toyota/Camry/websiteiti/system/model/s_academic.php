<?Php
include_once("../../config.php");
if(isset($_POST['btnaca'])){
	$names = $_POST['acaname'];
	
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = "";
	}
	
	$sql = "insert into tbl_aca(aca_name,aca_pdf)values('".$names."','".$img1."')";
	$query = mysql_query($sql);
	
	if($query){
		header("location:../index.php?p=11");
		
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
}

if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
	$photo = mysql_query("select * from tbl_aca where aca_id=".$id);
	$prow = mysql_fetch_array($photo);
	unlink("../upload/".$prow['aca_pdf']);
			
	if(mysql_query("delete from tbl_aca where aca_id=".$id)){
		header("location:../index.php?p=11");
	}else{
		echo"<script>
		alert('update failed');
		</script>";
	}
	
}

if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	$query1 = mysql_query("select * from tbl_aca where aca_id=".$_GET['id']);
	$row = mysql_fetch_array($query1);
	echo $row['aca_id']."|".$row['aca_name']."|".$row['aca_pdf'];
}

if(isset($_POST['upaca'])){
	$id = $_POST['updateaca'];
	$names = $_POST['acaname'];
	$img1 = $_POST['acaimg'];
	
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			unlink("../upload/".$_POST['acaimg']);
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = $_POST['acaimg'];
	}
	
	$sql = "update tbl_aca set aca_name='".$names."',aca_pdf='".$img1."' where aca_id=".$id;
	
	$query = mysql_query($sql);
	
	if($query){
		header("location:../index.php?p=11");
	}else{
		echo"
		<script>
		alert(update failed);
		</script>
		";
	}
}
?>