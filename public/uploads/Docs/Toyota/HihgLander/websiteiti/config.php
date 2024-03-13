<?php
$con = mysql_connect("localhost","root","");
if($con){
$select_db = mysql_select_db("iti",$con);
}
?>