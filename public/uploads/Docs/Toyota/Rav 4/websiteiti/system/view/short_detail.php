
<div class="div_tittle"><span id="addshort">Add Short Course Detail</span></div>
<div class="div_4" id="div_4">
    <form action="model/s_shortdetail.php" method="post" enctype="multipart/form-data">
    
                       

    		<fieldset>
                        <legend>Adds New Subject:</legend>            
                        <select name="shortcourse" id="select1" style="width:170px; height:25px;" onChange="clickremove();" >
                    <option value="selectcategory" >select a category</option>
					<?php
					$query2 = mysql_query("select * from tbl_shortcourse order by short_id asc");
					while($row = mysql_fetch_array($query2)){
					echo"<option value=\"".$row['short_id']."\">".$row['short_name']."</option>";
					}
					
					?>
            </select>
            
            </fieldset>
  
    
        <table class="tbl_view">
            
            
            <tr>
            	<td>Choose a picture</td>
                <td>:</td>
                <td><input type="file" name="pic1"  /></td>
            </tr>
            
            
            <tr>
                <td colspan="3"><input type="submit" name="btndetail" id="btndetail" value="Add" />
                				<input type="button" name="btncancel4" id="btncancel4" value="Cancel" />
                
                </td>
            </tr>
        </table>
    
    </form>
</div>
<div class="div_view4" id="div_view4">
<?Php

$sql = "select * from tbl_shortdetail order by shortdetail_id asc";
$query = mysql_query($sql);
echo"<table class='tbl_view'>";
echo"<tr class='tr_head'>";
echo"<td>Short Detail ID</td>";
echo"<td>Short Detail IMG</td>";
echo"<td>Short ID</td>";
echo"<td>Edit</td>";

echo"</tr>";
	while($row = mysql_fetch_array($query)){
		echo"<tr>";
		echo"<td>".$row['shortdetail_id']."</td>";
		echo"<td>".$row['shortdetail_img']."</td>";
		echo"<td>".$row['short_id']."</td>";
		echo"<td><a href='model/s_shortdetail.php?evt=del&id=".$row['shortdetail_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
		echo"</tr>";
	}

echo"</table>";


?>

</div>
