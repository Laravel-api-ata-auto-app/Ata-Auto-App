<div class="div_tittle"><span id="spadm">Click To Add</span></div>

    <div class="div_adm" id="div_adm">
    <form action="model/s_addmiss.php" method="post" >
    <input type="hidden" name="hupadm" id="hupadm" />
    <table class="tbl_view">   
            <tr>
            	<td>Please Input Title</td>
                <td>:</td>
                <td><input type="text" name="txtadm" id="txtadm"/></td>
            </tr>
            <tr>
            	<td>Please Input Description</td>
                <td>:</td>
                <td><textarea name="admdesc" id="admdesc"></textarea></td>
            </tr>
            
            
            <tr>
                <td colspan="3"><input type="submit" name="btnadm" id="btnadm" value="Add"  />
                				<input type="submit" name="upadm" id="upadm" value="Update" style="display:none;"/>
                				<input type="button" name="canadm" id="canadm" value="Cancel" />
                
                </td>
            </tr>
        </table>
    
    
    
    </form>
    </div>

        <div class="view_adm" id="view_adm">
        
        	<?php
			
				$sql = "select * from tbl_adm";
				$query = mysql_query($sql);
				echo"<table class='tbl_view'>";
					echo"<tr class='tr_head'>";
					echo"<td>ADM ID</td>";
					echo"<td>ADM Title</td>";
					echo"<td>ADM Description</td>";
					echo"<td>EDIT</td>";
					echo"<td>DELETE</td>";
					echo"</tr>";
					
					while($row = mysql_fetch_array($query)){
						echo"<tr>";
							echo"<td>".$row['adm_id']."</td>";
							echo"<td>".$row['adm_title']."</td>";
							echo"<td>".$row['adm_desc']."</td>";
							echo"<td><span onclick=\"clickeditadm(".$row['adm_id'].")\">EDIT</span></td>";
							echo"<td><a href='model/s_addmiss.php?evt=del&id=".$row['adm_id']."' onclick=\"return confirm('Do You Want To Delete')\">DELET</a></td>";
						echo"</tr>";
					
					}
					
				echo"</table>";
			
			?>
        
        </div>