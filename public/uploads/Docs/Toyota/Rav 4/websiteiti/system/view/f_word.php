<div class="div_tittle"><span id="addword">Word Description</span></div>
<div class="div_word" id="div_word">
 <form action="model/s_word.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="updateword" id="updateword" />
                    <input type="hidden" name="wordimg1" id="wordimg1" value="" />
<table class="tbl_view">   
            
            <tr>
            	<td>Marquee Description</td>
                <td>:</td>
                <td><textarea name="txtword" id="txtword"></textarea></td>
            </tr>
            <tr>
            	<td>Choose a picture</td>
                <td>:</td>
                <td><input type="file" name="pic1"  /></td>
            </tr>
            
            <tr>
                <td colspan="3"><input type="submit" name="btnword" id="btnword" value="Add"  />
                				<input type="submit" name="upword" id="upword" value="Update" style="display:none;"/>
                				<input type="button" name="canword" id="canword" value="Cancel" />
                
                </td>
            </tr>
        </table>
    
    </form>
 </div>
 <div class="viewword" id="viewword">
 	<?Php

$sql = "select * from tbl_word";
$query = mysql_query($sql);
echo"<table class='tbl_view'>";
echo"<tr class='tr_head'>";
echo"<td>Word ID</td>";
echo"<td>Word Description</td>";
echo"<td>Edit</td>";
echo"<td>Delete</td>";

echo"</tr>";
	while($row = mysql_fetch_array($query)){
		echo"<tr>";
		echo"<td>".$row['word_id']."</td>";
		echo"<td>".$row['word_desc']."</td>";
		echo"<td><span onclick=\"clickeditword(".$row['word_id'].")\">Edit</span></td>";
		echo"<td><a href='model/s_word.php?evt=del&id=".$row['word_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
		echo"</tr>";
	}

echo"</table>";


?>
 </div>