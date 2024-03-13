<div class="addabout"><span id="addab">Add About</span></div>
<div class="div_about" id="div_about">
    <form action="model/s_about.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="btnupdateab" id="btnupdateab" />
    	<table class="tbl_view">
        	<tr>
            	<td>ទីតាំង</td>
                <td>:</td>
                <td><input type="text" name="destination" id="destination" required="required" /></td>
            </tr>
            <tr>
            	<td>លេខទូរស័ព្ទ</td>
                <td>:</td>
                <td><input type="text" name="phone" id="phone" required="required" /></td>
            </tr>
             <tr>
            	<td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" id="email" required="required" /></td>
            </tr>
            <tr>
            	<td>History</td>
                <td>:</td>
                <td><textarea name="history" id="history"></textarea></td>
            </tr>
            <tr>
            	<td>រចនាសម្ព័ន្ធ</td>
                <td>:</td>
                <td><textarea name="structure" id="structure"></textarea></td>
            </tr>
            <tr>
            	<td>Vision</td>
                <td>:</td>
                <td><textarea name="vision" id="vision"></textarea></td>
            </tr>
            <tr>
            	<td>Mission</td>
                <td>:</td>
                <td><textarea name="mission" id="mission"></textarea></td>
            </tr>
            <tr>
            	<td>Goal</td>
                <td>:</td>
                <td><textarea name="goal" id="goal"></textarea></td>
            </tr>
            <tr>
            	<td>Strategy</td>
                <td>:</td>
                <td><textarea name="strategy" id="strategy"></textarea></td>
            </tr>
            <tr>
            	<td>Human Resource</td>
                <td>:</td>
                <td><textarea name="hr" id="hr"></textarea></td>
            </tr>
            <tr>
            	<td>Skill</td>
                <td>:</td>
                <td><textarea name="sk" id="sk"></textarea></td>
            </tr>
            <tr>
            	<td>Student Resource</td>
                <td>:</td>
                <td><textarea name="st_rs" id="st_rs"></textarea></td>
            </tr>
            <tr>
                	<td colspan="3">
                <input type="submit" name="btnabout" id="btnabout" value="Add" style="display:none;" />
                 <input type="submit" name="upabout" id="upnabout" value="Update" style="display:none;" />
                  <input type="button" name="canabout" id="canabout" value="Cancel"/>
                </td>
            </tr>
        </table>
    </form>
</div>

<div class="view_about" id="view_about">
	<?php
$sql = "select * from tbl_about";
$query = mysql_query($sql);
echo"<table class='tbl_view'>";
	echo"<tr class='tr_head'>";
		echo"<td>About ID</td>";
		echo"<td>Destination</td>";
		echo"<td>Phone</td>";
		echo"<td>Email</td>";
		echo"<td>Edit</td>";
		echo"<td>Delete</td>";
	echo"</tr>";

	while($row = mysql_fetch_array($query)){
	echo"<tr>";
		echo"<td>".$row['about_id']."</td>";
		echo"<td>".$row['destination']."</td>";
		echo"<td>".$row['phone']."</td>";
		echo"<td>".$row['email']."</td>";
		
		echo"<td><span onClick=\"clickeditab(".$row['about_id'].");\">Edit</span></td>";
		echo"<td><a href='model\s_about.php?evt=del&id=".$row['about_id']."' onClick=\"return confirm('Do you want to Delete');\">Delete</a></td>";
	echo"</tr>";
	}

echo"</table>";
	?>
</div>