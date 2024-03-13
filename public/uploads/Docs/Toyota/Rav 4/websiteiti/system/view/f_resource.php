<div class="div_tittle"><span id="addre">Add Employee</span></div>
<div class="div_re" id="div_re">
 <form action="model/s_resource.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="updatere" id="updatere" />
  <input type="hidden" name="reimg1" id="reimg1" value="" />
<table class="tbl_view">   
            
            <tr>
            	<td>Name</td>
                <td>:</td>
                <td><input type="text" name="txtname" id="txtname"/></td>
            </tr>
            <tr>
            	<td>Position</td>
                <td>:</td>
                <td><input type="text" name="txtpos" id="txtpos"/></td>
            </tr>
            <tr>
            	<td>Department</td>
                <td>:</td>
                <td><input type="text" name="txtdepart" id="txtdepart"/></td>
            </tr>
            <tr>
            	<td>Choose a picture</td>
                <td>:</td>
                <td><input type="file" name="pic1"  /></td>
            </tr>
            
            <tr>
                <td colspan="3"><input type="submit" name="btnre" id="btnre" value="Add"  style="display:none;"/>
                				<input type="submit" name="upre" id="upre" value="Update" style="display:none;"/>
                				<input type="button" name="canre" id="canre" value="Cancel" />
                
                </td>
            </tr>
        </table>
    
    </form>
 </div>
 
 <div class="viewre" id="viewre">
 	<?Php

$sql = "select * from tbl_emp order by emp_depart asc";
$query = mysql_query($sql);
echo"<table class='tbl_view'>";
echo"<tr class='tr_head'>";
	echo"<td>Emp ID</td>";
	echo"<td>Emp Name</td>";
	echo"<td>Emp Position</td>";
	echo"<td>Emp Department</td>";
	echo"<td>Edit</td>";
	echo"<td>Delete</td>";

echo"</tr>";
	while($row = mysql_fetch_array($query)){
		echo"<tr>";
		echo"<td>".$row['emp_id']."</td>";
		echo"<td>".$row['emp_names']."</td>";
		echo"<td>".$row['emp_position']."</td>";
		echo"<td>".$row['emp_depart']."</td>";
		echo"<td><span onclick=\"clickeditre(".$row['emp_id'].")\">Edit</span></td>";
		echo"<td><a href='model/s_resource.php?evt=del&id=".$row['emp_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
		echo"</tr>";
	}

echo"</table>";


?>
 </div>
 
 
 
 
 
 