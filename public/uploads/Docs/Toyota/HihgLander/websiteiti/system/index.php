<?php
include_once("../config.php");
session_start();
if(!isset($_SESSION['login'])){
	header("location:login.php");
}

function menulight($index){
		if(isset($_GET['p'])){
			if($_GET['p']==$index){
				echo"click";
			}else{
				echo"normal";
			}
		}
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administration</title>
<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="js/lb.js"></script>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles/temp.css"/>

<script type="text/javascript">
tinymce.init({
	selector: "textarea"
	});
$(document).ready(function(e) {
    $(".tbl_view tr:odd").css({"background-color":"#FFF"});
	 $(".tbl_view tr:even").css({"background-color":"#9F6","color":"#000"});
	 
});
</script>


</head>

<body>

	<div class="div_top"> User Login : <?php echo $_SESSION['login']?> || <a href="model/f_login.php?logout">Logout</a></div>
<!--Start Manage-->
	<div class="d_cover">
        <div class="div_manage">
            <ul>
                <li onclick="clickurl('index.php?p=1');" class="<?php menulight(1); ?>">Manage Subject</li>
                <li onclick="clickurl('index.php?p=2');" class="<?php menulight(2); ?>">Manage Long Course</li>
                 <li onclick="clickurl('index.php?p=3');" class="<?php menulight(3); ?>">Manage Short Couse</li>
                 <li onclick="clickurl('index.php?p=4');" class="<?php menulight(4); ?>">Manage Short Couse Detail</li>
                 <li onclick="clickurl('index.php?p=5');" class="<?php menulight(5); ?>">Manage News</li>
                 <li onclick="clickurl('index.php?p=6');" class="<?php menulight(6); ?>">Manage About</li>
                 <li onclick="clickurl('index.php?p=7');" class="<?php menulight(7); ?>">Manage Advertise</li>
                 <li onclick="clickurl('index.php?p=8');" class="<?php menulight(8); ?>">Manage Marquee</li>
                 <li onclick="clickurl('index.php?p=9');" class="<?php menulight(9); ?>">Update Password</li>
                 <li onclick="clickurl('index.php?p=10');" class="<?php menulight(10); ?>">Manage Word</li>
                 <li onclick="clickurl('index.php?p=11');" class="<?php menulight(11); ?>">Manage Academic</li>   
                 <li onclick="clickurl('index.php?p=12');" class="<?php menulight(12); ?>">Manage Resource</li>
                 <li onclick="clickurl('index.php?p=13');" class="<?php menulight(13); ?>">Manage Banner</li> 
                 <li onclick="clickurl('index.php?p=14');" class="<?php menulight(14); ?>">Manage Student Regist</li>
                 <li onclick="clickurl('index.php?p=15');" class="<?php menulight(15); ?>">Manage Addmission</li> 
                 <li onclick="clickurl('index.php?p=16');" class="<?php menulight(16); ?>">Manage IMG Partner</li>
                 <li onclick="clickurl('index.php?p=17');" class="<?php menulight(17); ?>">Manage Partner Description</li>       
            </ul>
        </div>
    
<!--End Manage-->


	<div class="div_detail">
<?php
if(isset($_GET['p'])){
	if($_GET['p']==1){
	include_once ("view/f_subject.php");
	}else if($_GET['p']==2){
	include_once ("view/f_category.php");
	}else if($_GET['p']==3){
	include_once ("view/f_shortcourse.php");
	}else if($_GET['p']==4){
	include_once ("view/short_detail.php");
	}else if($_GET['p']==5){
	include_once ("view/news.php");
	}else if($_GET['p']==6){
	include_once ("view/f_about.php");
	}else if($_GET['p']==7){
	include_once ("view/adv.php");
	}else if($_GET['p']==8){
	include_once ("view/marquee.php");
	}else if($_GET['p']==9){
	include_once ("view/f_password.php");
	}else if($_GET['p']==10){
	include_once ("view/f_word.php");
	}else if($_GET['p']==11){
	include_once ("view/f_academic.php");
	}else if($_GET['p']==12){
	include_once ("view/f_resource.php");
	}else if($_GET['p']==13){
	include_once ("view/f_baner.php");
	}else if($_GET['p']==14){
	include_once ("view/f_student.php");
	}else if($_GET['p']==15){
	include_once ("view/f_addmiss.php");
	}else if($_GET['p']==16){
	include_once ("view/f_imgpartner.php");
	}else if($_GET['p']==17){
	include_once ("view/f_partdesc.php");
	}				
}else{
echo"<div class=\"div_top\">Welcome To Manage Your Site</div>";
}

?>
	</div>

	<div style="clear:both;"></div>
</div>
</body>
</html>