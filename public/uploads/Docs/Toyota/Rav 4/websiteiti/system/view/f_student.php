 <div class="viewst" id="viewst">
 	<?Php

$sql = "select * from tbl_stregist";
$query = mysql_query($sql);
echo"<table class='tbl_view'>";
echo"<tr class='tr_head'>";
echo"<td>ID</td>";
echo"<td>Name</td>";
echo"<td>Sex</td>";
echo"<td>DOB</td>";
echo"<td>Phone</td>";
echo"<td>Course</td>";
echo"<td>Address</td>";
echo"<td>Date Register</td>";
echo"<td>Delete</td>";

echo"</tr>";
	while($row = mysql_fetch_array($query)){
		echo"<tr>";
		echo"<td>".$row['student_id']."</td>";
		echo"<td>".$row['student_name']."</td>";
		echo"<td>".$row['student_sex']."</td>";
		echo"<td>".$row['student_dob']."</td>";
		echo"<td>".$row['student_phone']."</td>";
		echo"<td>".$row['course']."</td>";
		echo"<td>".$row['student_addr']."</td>";
		echo"<td>".$row['date']."</td>";
		echo"<td><a href='model/s_student.php?evt=del&id=".$row['student_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
		echo"</tr>";
	}

echo"</table>";


?>
 </div>