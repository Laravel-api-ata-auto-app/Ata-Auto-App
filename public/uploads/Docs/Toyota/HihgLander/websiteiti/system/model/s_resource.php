<?Php
include_once("../../config.php");
if(isset($_POST['btnre'])){
	$names = $_POST['txtname'];
	$postion = $_POST['txtpos'];
	$depart = $_POST['txtdepart'];
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = "";
	}
	
	$sql = "insert into tbl_emp(emp_names,emp_position,emp_depart,emp_img)values('".$names."','".$postion."','".$depart."','".$img1."')";
	$query = mysql_query($sql);
	
	if($query){
		header("location:../index.php?p=12");
		
	}else{
		echo"<script>
		alert('insert failed');
		</script>";
	}
}

if(isset($_GET['evt']) && $_GET['evt']=='del'){
	$id = $_GET['id'];
	$photo = mysql_query("select * from tbl_emp where emp_id=".$id);
	$prow = mysql_fetch_array($photo);
	unlink("../upload/".$prow['emp_img']);
			
	if(mysql_query("delete from tbl_emp where emp_id=".$id)){
		header("location:../index.php?p=12");
	}else{
		echo"<script>
		alert('update failed');
		</script>";
	}
	
}

if(isset($_GET['evt']) && $_GET['evt']=='edit'){
	$id = $_GET['id'];
	$query1 = mysql_query("select * from tbl_emp where emp_id=".$_GET['id']);
	$row = mysql_fetch_array($query1);
	echo $row['emp_id']."|".$row['emp_names']."|".$row['emp_position']."|".$row['emp_depart']."|".$row['emp_img'];
}

if(isset($_POST['upre'])){
	$id = $_POST['updatere'];
	$names = $_POST['txtname'];
	$postion = $_POST['txtpos'];
	$depart = $_POST['txtdepart'];
	$img1 = $_POST['reimg1'];
	
	if(isset($_FILES['pic1'])){
		if($_FILES['pic1']['name'] !="" ){
			list($name,$ext) = explode(".",$_FILES['pic1']['name']);
			$img1 = md5(uniqid()).".".$ext;
			unlink("../upload/".$_POST['reimg1']);
			move_uploaded_file($_FILES['pic1']['tmp_name'],"../upload/".$img1);
		}
	}else{
		$img1 = $_POST['reimg1'];
	}
	
	$sql = "update tbl_emp set emp_names='".$names."',emp_position='".$postion."',emp_depart='".$depart."',emp_img='".$img1."' where emp_id=".$id;
	
	echo $sql;
	$query = mysql_query($sql);
	
	if($query){
		header("location:../index.php?p=12");
	}else{
		echo"
		<script>
		alert(update failed);
		</script>
		";
	}
}
?>