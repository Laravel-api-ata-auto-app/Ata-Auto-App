<div class="div_tittle"><span id="academic">ADD ACADEMIC PDF</span></div>
<div class="div_aca" id="div_aca">
 <form action="model/s_academic.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="updateaca" id="updateaca" />
  <input type="hidden" name="acaimg" id="acaimg" value="" />
<table class="tbl_view">   
            
            <tr>
            	<td>Name</td>
                <td>:</td>
                <td><input type="text" name="acaname" id="acaname"/></td>
            </tr>
            <tr>
               	<td>Choose a picture</td>
                <td>:</td>
                <td><input type="file" name="pic1"  /></td>
            </tr>
            
            <tr>
                <td colspan="3"><input type="submit" name="btnaca" id="btnaca" value="Add"  />
                				<input type="submit" name="upaca" id="upaca" value="Update" style="display:none;"/>
                				<input type="button" name="canaca" id="canaca" value="Cancel" />
                
                </td>
            </tr>
        </table>
    
    </form>
 </div>
 
 <div class="viewaca" id="viewaca">
 	<?Php

$sql = "select * from tbl_aca";
$query = mysql_query($sql);
echo"<table class='tbl_view'>";
echo"<tr class='tr_head'>";
echo"<td>ACA ID</td>";
echo"<td>ACA NAME</td>";
echo"<td>ACA PDF</td>";
echo"<td>EDIT</td>";
echo"<td>DELETE</td>";


echo"</tr>";
	while($row = mysql_fetch_array($query)){
		echo"<tr>";
		echo"<td>".$row['aca_id']."</td>";
		echo"<td>".$row['aca_name']."</td>";
		echo"<td>".$row['aca_pdf']."</td>";
		echo"<td><span onclick=\"clickeditaca(".$row['aca_id'].")\">Edit</span></td>";
		echo"<td><a href='model/s_academic.php?evt=del&id=".$row['aca_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
		echo"</tr>";
	}

echo"</table>";
