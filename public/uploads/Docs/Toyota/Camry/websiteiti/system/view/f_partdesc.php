<div Class="div_tittle"><span id="addpdesc">Add Partner Description</span></div>
<div class="div_pdesc" id="div_pdesc">
	<form action="model/s_partdesc.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="hpdesc" id="hpdesc" />
        <table class="tbl_view"> 
            <tr class="tr_head">
                <td>Partner Description</td>
                <td>:</td>
                <td><textarea name="txtpdesc" id="txtpdesc"></textarea></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="btnpdesc" id="btnpdesc" value="Add"/>
                    <input type="submit" name="uppdesc" id="uppdesc" style="display:none;" value="Update"/>
                    <input type="button" name="canpdesc" id="canpdesc" value="Cancel" />
                </td>
            </tr>
        </table>
	</form>
</div>
<div class="view_pdesc" id="view_pdesc">
	<?php
		$sql = "select * from tbl_pdesc";
		$query = mysql_query($sql);
		echo "<table class='tbl_view'>";
			echo "<tr class='tr_head'>";
				echo"<td>PDESC ID</td>";
				echo"<td>Partner Description</td>";
				echo"<td>EDIT</td>";
				echo"<td>DELETE</td>";
			echo "</tr>";
			
			while($row = mysql_fetch_array($query)){
				echo "<tr>";
					echo"<td>".$row['pdesc_id']."</td>";
					echo"<td>".$row['pdesc_desc']."</td>";
					echo"<td><span onclick=\"clickeditpdesc(".$row['pdesc_id'].")\">EDIT</span></td>";
					echo"<td><a href='model/s_partdesc.php?evt=del&id=".$row['pdesc_id']."' onclick=\"return confirm('Do You Want To Delete ?')\">DELETE</a></td>";
					
				echo "</tr>";
			}
		echo "</table>";
	?>
</div>