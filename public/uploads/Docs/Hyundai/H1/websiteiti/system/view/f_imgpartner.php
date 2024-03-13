<div class="div_tittle"><span id="spimgpart">ADD Image For Partnership</span></div>

<div class="div_imgpartner" id="div_imgpartner">

<form action="model/s_imgpartner.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="hupimgpartner" id="hupimgpartner" />
                    <input type="hidden" name="himgp_pic" id="himgp_pic" value="" />
	<table class="tbl_view">   
            
            <tr>
            	<td>Marquee Description</td>
                <td>:</td>
                <td><input type="text" name="txtimgpartner" id="txtimgpartner" /></td>
            </tr>
            <tr>
            	<td>Choose a picture</td>
                <td>:</td>
                <td><input type="file" name="pic1"  /></td>
            </tr>
            
            <tr>
                <td colspan="3"><input type="submit" name="btnimgpartner" id="btnimgpartner" value="Add"  />
                				<input type="submit" name="upimgpartner" id="upimgpartner" value="Update" style="display:none;"/>
                				<input type="button" name="canimgpartner" id="canimgpartner" value="Cancel" />
                
                </td>
            </tr>
        </table>

</form>
</div>

<div class="view_imgpartner" id="view_imgpartner">'
	<?php
	$sql = "select * from tbl_imgp";
	$query = mysql_query($sql);
		echo"<table class='tbl_view'>";
			echo"<tr class='tr_head'>";
				echo"<td>IMGP ID</td>";
				echo"<td>IMGP Class</td>";
				echo"<td>IMGP PIC</td>";
				echo"<td>EDIT</td>";
				echo"<td>DELETE</td>";
			echo"</tr>";
			
			while($row = mysql_fetch_array($query)){
				echo"<tr>";
				
					echo"<td>".$row['imgp_id']."</td>";
					echo"<td>".$row['imgp_class']."</td>";
					echo"<td>".$row['imgp_pic']."</td>";
					echo"<td><span onclick=\"cliceditimgp(".$row['imgp_id'].")\">EDIT</span></td>";
			echo"<td><a href='model/s_imgpartner.php?evt=del&id=".$row['imgp_id']."' onclick=\"return confirm('Do You Want To Delete?')\">DELETE</a></td>";
					
				echo"</tr>";
			}
					
		echo"</table>";
		
	?>
</div>