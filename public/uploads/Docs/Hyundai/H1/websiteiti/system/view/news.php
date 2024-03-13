<div class="addnewss"><span id="addnewss">Add News</span></div>
<div class="div_news" id="div_news">
<form action="model/s_news.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="newsup" id="newsup" />
                    <input type="hidden" name="img1" id="img1" value="" />
                     <input type="hidden" name="img2" id="img2" value="" />
                      <input type="hidden" name="img3" id="img3" value="" />
		<table class="tbl_view">
            
            <tr>
                <td>News Tittle</td>
                <td>:</td>
                <td><input type="text" name="newstittle" id="newstittle" required="required"/></td>
            </tr>
            <tr>
                <td>News Descript</td>
                <td>:</td>
                <td><textarea name="newsdesc" id="newsdesc" > </textarea></td>
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
                <td><input type="file" name="pic3" /></td>
            </tr>
            
            
            <tr>
                <td colspan="3"><input type="submit" name="addnews" id="addnews" value="Add" />
                 <input type="submit"  name="updatenews" id="btnupdatenews" value="Update" style="display:none;"/>
                <input type="button" name="btncancelnews" id="btncancelnews" value="Cancel" />
                </td>
            </tr>
        </table>
</form>
</div>


<div class="view_news" id="view_news">

<?php
$query = mysql_query("select * from tbl_news where news_status=1 order by news_id desc");

echo"<table class='tbl_view'>";
echo"<tr class='tr_head'>";
echo"<td>News ID</td>";
echo"<td>News Tittle</td>";
echo"<td>News Date</td>";
echo"<td>Edit</td>";
echo"<td>Delete</td>";
echo"</tr>";
while($row = mysql_fetch_array($query)){
	echo"<tr>";
	echo"<td>".$row['news_id']."</td>";
	echo"<td>".$row['news_title']."</td>";
	echo"<td>".$row['news_date']."</td>";
	echo"<td><span onclick=\"clickeditnews(".$row['news_id'].")\">Edit</span></td>";
		echo"<td><a href='model/s_news.php?evt=del&id=".$row['news_id']."' onclick=\"return confirm('Do you want to Delete?')\">Delete</a></td>";
	echo"</tr>";
}
echo"</table>";
?>

</div>