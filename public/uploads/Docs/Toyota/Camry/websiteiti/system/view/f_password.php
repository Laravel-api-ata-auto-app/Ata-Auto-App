<?php

$sql = "select * from tbl_admin where user_status=1";
$query = mysql_query($sql);
while($row = mysql_fetch_array($query)){
?>

<form action="model/s_password.php" method="post">
<input type="hidden" name="updatepass"  />
<table>
	<tr>
    	<td>Old Password</td>
        <td> : </td>
        <td><input type="password" name="oldpass" id="oldpass" required="required"/></td>
        
    </tr>
    <tr>
    	<td>New Password</td>
        <td> : </td>
        <td><input type="password" name="newpass" id="newpass" required="required"/></td>
        
    </tr>
    <tr>
    	<td>Confirm Password</td>
        <td> : </td>
        <td><input type="password" name="vnewpass" id="newpass" /></td>        
    </tr>
    <tr>
    	<td colspan="3" align="center"><input type="submit" name="btnpass" value="Update" /></td>
    </tr>
</table>




</form>

<?php
}
?>