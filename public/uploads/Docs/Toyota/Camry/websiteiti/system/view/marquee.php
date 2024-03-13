<div class="div_tittle"><span id="addmar">Marquee Description</span></div>
<div class="div_mar" id="div_mar">
 <form action="model/s_marquee.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="upmar" id="upmar" />
<table class="tbl_view">
            
            
            <tr>
            	<td>Marquee Description</td>
                <td>:</td>
                <td><input type="text"  name="txtmarquee" id="txtmarquee" class="marquee" /></td>
            </tr>
            
            
            <tr>
                <td colspan="3"><input type="submit" name="btnmar" id="btnmar" value="Add" style="display:none;"/>
                				<input type="submit" name="btnupmar" id="btnupmar" value="Update" style="display:none;"/>
                				<input type="button" name="canmar" id="canmar" value="Cancel" />
                
                </td>
            </tr>
        </table>
    
    </form>
 </div>
 
 <div class="view_mar" id="view_mar">
 <?Php

$sql = "select * from tbl_marquee";
$query = mysql_query($sql);
echo"<table class='tbl_view'>";
echo"<tr class='tr_head'>";
echo"<td>Marquee ID</td>";
echo"<td>Marquee Description</td>";
echo"<td>Edit</td>";
echo"<td>Delete</td>";
echo"</tr>";
	while($row = mysql_fetch_array($query)){
		echo"<tr>";
		echo"<td>".$row['mar_id']."</td>";
		echo"<td>".$row['mar_desc']."</td>";
		echo"<td><span onclick=\"clickeditmar(".$row['mar_id'].")\">Edit</span></td>";
		echo"<td><a href='model/s_marquee.php?evt=del&id=".$row['mar_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
		echo"</tr>";
	}

echo"</table>";

?>
 </div>