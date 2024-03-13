
<div class="div_tittle"><span id="addnewshort">Add New Short Course</span></div>

<div class="div_3" id="div_3">
<form action="model/s_shortcourse.php" method="post">
	<input type="hidden" name="updateshortcourse" id="updateshortcourse" />
    <table>
        <tr>
            <td>
                Add New Category :
            </td>
            <td>
                <input type="text" name="shortname" id="shortname" required="required" />
                
            </td>
        </tr>
        <tr>
            <td>
                
            </td>
            <td>
                <input type="submit" value="Add" name="btnshort" id="btnshort" />
                <input type="submit" value="Update" name="updateshort" id="updateshort" style="display:none;"/>
                <input type="button" value="Cancel" name="btncancel3" id="btncalcel3" />
                
            </td>
        </tr>
    
    </table>
</form>
</div>
<div class="div_view3" id="div_view3">
	<?php
	$query = mysql_query("select * from tbl_shortcourse order by short_id asc");
	echo "<table class='tbl_view' width='500px;'>
			<tr class='tr_head'>
				<td>Short Course ID</td>
				<td>Short Course_Name</td>
				<td>Edit</td>
				<td>Delete</td>
				
			</tr>
	
	";
	while($row=mysql_fetch_array($query)){
		echo"<tr>";
			echo"<td>".$row['short_id']."</td>";
			echo"<td>".$row['short_name']."</td>";
			echo"<td><span onclick=\"clickedit2(".$row['short_id'].")\">Edit</span></td>";
	
	echo "<td><a href='model/s_shortcourse.php?evt=del&id=".$row['short_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
	echo "</tr>";
	}
	
	echo"</table>";
	?>

</div>

