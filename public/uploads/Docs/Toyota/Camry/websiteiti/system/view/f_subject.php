
<div class="addsubject"><span id="addsub">Add New Subject</span></div>
<div class="div_1" id="showsub">
    <form action="model/s_subject.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="updatsubject" id="updatesubject" />
                    <input type="hidden" name="img1" id="img1" value="" />
                     <input type="hidden" name="img2" id="img2" value="" />
                      <input type="hidden" name="img3" id="img3" value="" />
                       

    		<fieldset>
                        <legend>Adds New Subject:</legend>            
                        <select name="category" id="select1" style="width:170px; height:25px;" onChange="clickremove();" >
                    <option value="selectcategory" >select a category</option>
					<?php
					$query2 = mysql_query("select * from tbl_cate order by cate_id asc");
					while($row = mysql_fetch_array($query2)){
					echo"<option value=\"".$row['cate_id']."\">".$row['cate_name']."</option>";
					}
					
					?>
            </select>
            
            </fieldset>
  
    
        <table class="tbl_view">
            
            <tr>
                <td>Subject Name</td>
                <td>:</td>
                <td><input type="text" name="subjectname" id="subjectname" /></td>
            </tr>
            <tr>
                <td>Subject Description1</td>
                <td>:</td>
                <td><textarea name="descript1" id="descript1" > </textarea></td>
            </tr>
            <tr>
                <td>Subject Description2</td>
                <td>:</td>
                <td><textarea name="descript2" id="descript2" > </textarea></td>
            </tr>
            <tr>
                <td>Subject Price</td>
                <td>:</td>
                <td><input type="text" name="txtprice" id="txtprice" /></td>
            </tr>
            <tr>
            	<td>Choose a picture</td>
                <td>:</td>
                <td><input type="file" name="pic1"  /></td>
            </tr>
            <tr>
            	<td>Choose a picture</td>
                <td>:</td>
                <td><input type="file" name="pic2"  /></td>
            </tr>
            <tr>
            	<td>Choose a picture</td>
                <td>:</td>
                <td><input type="file" name="pic3"  /></td>
            </tr>
            
            <tr>
                <td colspan="3"><input type="submit" name="addsubject" id="addsubject" value="Add" />
                 <input type="submit"  name="btnupdate" id="btnupdate" value="Update" style="display:none;"/>
                <input type="button" name="btncancel" id="btncanlcel" value="Cancel" />
                </td>
            </tr>
        </table>
    
    </form>
</div>
<div class="div_view1" id="viewsub">
<?php

$sql = "select * from tbl_subject order by subject_id asc";
$query = mysql_query($sql);
echo"<table class='tbl_view'>";
	echo"<tr class='tr_head'>";
		echo"<td>Subject ID</td>";
		echo"<td>Subject Name</td>";
		echo"<td>Subject Description 1</td>";
		echo"<td>Subject Description 2</td>";
		echo"<td>Subject Price</td>";
		echo"<td>Edit</td>";
		echo"<td>Delete</td>";
	echo"</tr>";
	while($row = mysql_fetch_array($query)){
		echo"<tr>";
		echo"<td>".$row['subject_id']."</td>";
		echo"<td>".$row['subject_name']."</td>";
		echo"<td>".$row['subject_desc1']."</td>";
		echo"<td>".$row['subject_desc2']."</td>";
		echo"<td>".$row['subject_price']."</td>";
		echo"<td><span onclick=\"clickedit(".$row['subject_id'].")\">Edit</span></td>";
		echo"<td><a href='model/s_subject.php?evt=del&id=".$row['subject_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
		echo"</tr>";
	}

echo"</table>";


?>

</div>
