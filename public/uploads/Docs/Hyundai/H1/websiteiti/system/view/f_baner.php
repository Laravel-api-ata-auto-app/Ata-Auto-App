<div class="div_tittle"><span id="addban">Add barnner</span></div>
<div class="div_ban" id="div_ban">
	<form action="model/s_baner.php" method="post" enctype="multipart/form-data">
    	<input type="hidden" name="upban" id="upban" />
        <input type="hidden" name="banimg" id="banimg" />
        <input type="hidden" name="partnerimg" id="partnerimg" />
        <table class="tbl_view">
        	<tr>
            	<td>Choose A Banner</td>
                <td>:</td>
                <td><input type="file" name="pic1" /></td>
            </tr>
            <tr>
            	<td>Choose A Partner IMG</td>
                <td>:</td>
                <td><input type="file" name="pic2" /></td>
            </tr>
            <tr>
            	<td colspan="3">
                <input type="submit" name="btnban" id="btnban" value="Add" />
                <input type="submit" name="btnupban" id="btnupban" value="Update" style="display:none;"/>
                <input type="button" name="canban" id="canban" value="Cancel" />
                </td>
            </tr>
        </table>
    </form>

</div>

<div class="view_ban" id="view_ban">
<?php
	$sql = "select * from tbl_baner";
	$query = mysql_query($sql);
	echo"<table class='tbl_view'>";
		echo"<tr>";
			echo"<td>Banner ID</td>";
			echo"<td>Banner IMG</td>";
			echo"<td>Partner IMG</td>";
			echo"<td>Edit</td>";
			echo"<td>Delete</td>";
		echo"</tr>";
		
			while($row = mysql_fetch_array($query)){
				echo"<tr>";
				echo"<td>".$row['ban_id']."</td>";
				echo"<td>".$row['ban_img']."</td>";
				echo"<td>".$row['partner_img']."</td>";
				echo"<td><span onclick=\"clickeditban(".$row['ban_id'].")\">Edit</span></td>";
				echo"<td><a href='model/s_baner.php?evt=del&id=".$row['ban_id']."' onclick=\"return confirm('Do You Want To Delete?')\">Delete</a></td>";
				echo"</tr>";
			}
		
	echo"</table>";
?>
</div>