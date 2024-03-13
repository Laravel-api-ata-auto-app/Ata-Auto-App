<?php 
	include_once("config.php");
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>វិទ្យាស្ថានបច្ចេកទេសឧស្សាហកម្ម</title>
<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="js/lb.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<link rel="stylesheet" type="text/css" href="css/cs.css"/>
   <!-- light box-->
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css"/>
    <link rel="stylesheet" type="text/css" href="css/lightbox.css"/>
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <link rel="stylesheet" type="text/css" href="css/screen.css"/>
    
    <!--end ligbox-->
 
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
  <script type="text/javascript">
$(document).ready(function(e) {
    $("#runtex").mouseover(function(){
		$(this).attr("scrollamount","2");
	});
	$("#runtex").mouseout(function(){
		$(this).attr("scrollamount","5");
		});
});
    

</script>
<style type="text/css">

	.scrollToTop{
	width:100px; 
	height:130px;
	padding:10px; 
	text-align:center; 
	background: whiteSmoke;
	font-weight: bold;
	color: #444;
	text-decoration: none;
	position:fixed;
	top:500px;
	right:30px;
	display:none;
	background: url('arrow_up.png') no-repeat 0px 20px;
}
.scrollToTop:hover{
	text-decoration:none;
	cursor:pointer;
}

</style>
<script type="text/javascript">
$(document).ready(function(e) {
    //Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
});
</script>

</head>

<body>

<div class="scrollToTop"><img src="images/top.png" width="100" height="100" /></div>
	<?php include_once("view/barner.php"); ?> 
     
     <div class="div_marquee"><marquee id="runtex"><?php include_once("view/marquee.php"); ?></marquee>
      
     </div>
     
     
	<!--start wrapper-->
    <div class="wrapper">
    <div class="regist"><a href="view/regist.php" target="_blank">ចុចត្រង់នេះដើម្បីចុះឈ្មោះសិក្សានៅវិទ្យាស្ថានបច្ចេកទេសឧស្សាហកម្ម</a></div>
    	<!--start barner-->
        	   
        	      <?php include_once("view/menu.php"); ?>   
            
        <!--End barner-->
       
        
       <!-- start content-->
       	<div class="content">
        	<!--start content left-->
        	<div class="contentleft">
            <?php include_once("view/contentleft.php"); ?>  
            </div>
            <!--end content left-->
            
            <!--start content right-->
            <div class="contentright">
            	<?php include_once("view/view.php"); ?> 
                             	
            </div>
            <div style="clear:both"></div> 
            
            
            <!--end content right-->
            
		</div> 
            
      <!-- end content-->
      
      <!--start footer-->
      
        <div class="footer">
        	
            <p>All Rights Reserved Copyright @ 2015 Industrial Technical Institute.</p>
            <p>មហាវិថីសហព័ន្ធរុស្សី សង្កាត់ទឹកថ្លា ខ័ណ្ឌសែនសុខ រាជធានីភ្នំពេញ</p>
             
            
    	</div>  
        
     <!-- endfooter-->
      
      </div>
   	<!-- end wrapper-->
   
</body>
</html>