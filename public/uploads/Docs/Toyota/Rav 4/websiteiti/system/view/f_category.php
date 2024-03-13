
<div class="div_tittle"><span id="addcate">Add New Category</span></div>

<div class="div_2" id="div_2">
<form action="model/s_cate.php" method="post">
	<input type="hidden" name="update1" id="update1" />
    <table>
        <tr>
            <td>
                Add New Category :
            </td>
            <td>
                <input type="text" name="catename" id="catename" required="required" /><span id="sp2"></span>
                
            </td>
        </tr>
        <tr>
            <td>
                Add Status :
            </td>
            <td>
                <input type="number" name="txtstatus" id="txtstatus" required="required" /><span id="sp2"></span>
                
            </td>
        </tr>
        <tr>
            <td>
                
            </td>
            <td>
                <input type="submit" value="Add" name="btncate" id="btncate" />
                <input type="submit" value="Update" name="updatecate" id="updatecate" style="display:none;"/>
                <input type="button" value="Cancel" name="btncancel2" id="btncalcel2" />
                
            </td>
        </tr>
    
    </table>
</form>
</div>
<div class="div_view2" id="div_view2">
	<?php
	$query = mysql_query("select * from tbl_cate order by cate_status asc");
	echo "<table class='tbl_view' width='500px;'>
			<tr class='tr_head'>
				<td>No</td>
				<td>Title</td>
				<td>status</td>
				<td>Edit</td>
				<td>Delete</td>				
			</tr>	
	";
	while($row=mysql_fetch_array($query)){
		echo"<tr>";
			echo"<td>".$row['cate_id']."</td>";
			echo"<td>".$row['cate_name']."</td>";
			echo"<td>".$row['cate_status']."</td>";
			echo"<td><span onclick=\"clickedit1(".$row['cate_id'].")\">Edit</span></td>";	
	echo "<td><a href='model/s_cate.php?evt=del&id=".$row['cate_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
	echo "</tr>";
	}
	
	echo"</table>";
	?>

</div>

