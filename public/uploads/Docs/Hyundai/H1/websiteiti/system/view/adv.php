<div class="div_tittle"><span id="addadv">Advertise Description</span></div>
<div class="div_adv" id="div_adv">
 <form action="model/s_adv.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="updateadv" id="updateadv" />
                    <input type="hidden" name="advimg1" id="advimg1" value="" />
<table class="tbl_view">   
            
            <tr>
            	<td>Marquee Description</td>
                <td>:</td>
                <td><textarea name="txtadv" id="txtadv"></textarea></td>
            </tr>
            <tr>
            	<td>Choose a picture</td>
                <td>:</td>
                <td><input type="file" name="pic1"  /></td>
            </tr>
            
            <tr>
                <td colspan="3"><input type="submit" name="btnadv" id="btnadv" value="Add"  />
                				<input type="submit" name="upadv" id="upadv" value="Update" style="display:none;"/>
                				<input type="button" name="canadv" id="canadv" value="Cancel" />
                
                </td>
            </tr>
        </table>
    
    </form>
 </div>
 <div class="viewadv" id="viewadv">
 	<?Php

$sql = "select * from tbl_adv";
$query = mysql_query($sql);
echo"<table class='tbl_view'>";
echo"<tr class='tr_head'>";
echo"<td>Adv ID</td>";
echo"<td>Adv Description</td>";
echo"<td>Edit</td>";
echo"<td>Delete</td>";

echo"</tr>";
	while($row = mysql_fetch_array($query)){
		echo"<tr>";
		echo"<td>".$row['adv_id']."</td>";
		echo"<td>".$row['adv_desc']."</td>";
		echo"<td><span onclick=\"clickeditadv(".$row['adv_id'].")\">Edit</span></td>";
		echo"<td><a href='model/s_adv.php?evt=del&id=".$row['adv_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
		echo"</tr>";
	}

echo"</table>";


?>
 </div>