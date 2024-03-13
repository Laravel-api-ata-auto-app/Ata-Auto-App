// JavaScript Document
$(document).ready(function(e) {
    $("#addsub").click(function(){
		$("#showsub").show("slow");	
		$(".div_view1").hide("slow");	
	});
	$("#addcate").click(function(){
		$("#div_2").show("slow");	
		$("#div_view2").hide("slow");
		$("#btncate").show();
		$("#updatecate").hide();
			
	});
	$("#addnewshort").click(function(){
		$("#div_3").show("slow");	
		$("#div_view3").hide("slow");	
	});
	$("#addshort").click(function(){
		$("#div_4").show("slow");	
		$("#div_view4").hide("slow");	
	});
	$("#addnewss").click(function(){
		$(".div_news").show("slow");	
		$(".view_news").hide("slow");
		$("#addnews").show("slow");	
	});
		$("#addab").click(function(){
			$("#div_about").show("slow");
			$("#view_about").hide("slow");
			$("#btnabout").show();
			$("#upnabout").hide();
		});
		$("#addmar").click(function(){
			$("#div_mar").show("slow");
			$("#view_mar").hide("slow");
			$("#btnupmar").hide();
			$("#btnmar").show();
		});
		
		$("#addadv").click(function(){
			$("#div_adv").show("slow");
			$("#viewadv").hide("slow");
		});
		
		$("#addword").click(function(){
			$("#div_word").show("slow");
			$("#viewword").hide("slow");
			$("#upword").hide();
			$("#btnword").show();
		});
		$("#academic").click(function(){
			$("#div_aca").show("slow");
			$("#viewaca").hide("slow");
			$("#btnaca").show();
			$("#upaca").hide();
		});
		$("#addre").click(function(){
			$("#div_re").show("slow");
			$("#viewre").hide("slow");
			$("#btnre").show();
			$("#upre").hide();
			
		});
			
			$("#addban").click(function(){
				$("#div_ban").show("slow");
				$("#view_ban").hide("slow");
			});
			
			$("#spadm").click(function(){
				$("#div_adm").show("slow");
				$("#view_adm").hide("slow");	
			});
			
			$("#spimgpart").click(function(){
				$("#div_imgpartner").show("slow");
				$("#view_imgpartner").show("slow");	
			});
			$("#addpdesc").click(function(){
				$("#div_pdesc").show("slow");
				$("#view_pdesc").hide("slow");
			});
			
		$("#btncanlcel").click(function(){
			$(".div_1").hide("slow");
			$(".div_view1").show("slow");
			$("#subjectname").val("");	
			tinyMCE.get('descript1').setContent("");
			tinyMCE.get('descript2').setContent("");
			$("#txtprice").val("");
			
		});
			
			$("#btncalcel2").click(function(){
				$("#div_2").hide("slow");
				$("#div_view2").show("slow");
				$("#catename").val("");	
				
			
			});
			
			
			$("#btncalcel3").click(function(){
				$("#div_3").hide("slow");
				$("#div_view3").show("slow");
				$("#shortname").val("");	
			});
			
			$("#btncancel4").click(function(){
				$("#div_4").hide("slow");
				$("#div_view4").show("slow");
			
			});
			$("#btncancelnews").click(function(){
				$(".div_news").hide("slow");
				$(".view_news").show("slow");
				$("#newstittle").val("");
				tinyMCE.get('newsdesc').setContent("");	
				$(".addnews").show("slow");			
			});
			$("#canabout").click(function(){
				$("#div_about").hide("slow");
				$("#view_about").show("slow");
				$("#destination").val("");
				$("#phone").val("");
				$("email").val("");
				tinyMCE.get('history').setContent("");
				tinyMCE.get('structure').setContent("");
				tinyMCE.get('vision').setContent("");
				tinyMCE.get('mission').setContent("");
				tinyMCE.get('goal').setContent("");
				tinyMCE.get('strategy').setContent("");
				tinyMCE.get('hr').setContent("");
				tinyMCE.get('sk').setContent("");
				tinyMCE.get('st_rs').setContent("");
			});
			
			$("#canadm").click(function(){
				$("#div_adm").hide("slow");
				$("#view_adm").show("slow");
				$("#txtadm").val("");
				tinyMCE.get('admdesc').setContent("");	
			});
			
			$("#canmar").click(function(){
				$("#div_mar").hide("slow");
				$("#view_mar").show("slow");
				$("#txtmarquee").val("");
			});
					$("#canadv").click(function(){
						$("#div_adv").hide("slow");
						$("#viewadv").show("slow");
						tinyMCE.get('txtadv').setContent("");
						});
						$("#canword").click(function(){
						$("#div_word").hide("slow");
						$("#viewword").show("slow");
						tinyMCE.get('txtword').setContent("");
					});
					
			$("#canaca").click(function(){
				$("#div_aca").hide("slow");
				$("#viewaca").show("slow");
				$("#acaname").val("");
			});
			
			$("#canre").click(function(){
				
				$("#div_re").hide("slow");
				$("#viewre").show("slow");
				$("#txtname").val("");
				$("#txtpos").val("");
				$("#txtdepart").val("");
			});
			$("#canban").click(function(){
				$("#div_ban").hide("slow");
				$("#view_ban").show("slow");
			
			});
			
			$("#canimgpartner").click(function(){
				$("#div_imgpartner").hide("slow");
				$("#view_imgpartner").show("slow");	
				$("#txtimgpartner").val("");
			});
			
			$("#canpdesc").click(function(){
				$("#div_pdesc").hide("slow");
				$("#view_pdesc").show("slow");
				tinyMCE.get('txtpdesc').setContent("");
			});
				
});
function clickurl(url){
	window.location = url;
}
function clickedit(index){
	
	$.ajax({
		type:"get",
		url:"model/s_subject.php",
		data:"evt=edit&id=" + index,
		success:function(result){
			
			$("#updatesubject").val(result.split('|')[0]);
			$("#subjectname").val(result.split('|')[1]);
			tinyMCE.get('descript1').setContent(result.split('|')[2]);
			tinyMCE.get('descript2').setContent(result.split('|')[3]);
			$("#txtprice").val(result.split('|')[4]);
			$("#img1").val(result.split('|')[5]);
			$("#img2").val(result.split('|')[6]);
			$("#img3").val(result.split('|')[7]);			
			$("#addsubject").hide();
			$("#btnupdate").show();
			$(".div_1").show("slow");
			$(".div_view1").hide("slow");
		}
		});
}

function clickremove(){
	var option = document.getElementById('select1');
	option.remove(0);
}

function clickedit1(index){
	
	$.ajax({
		type:"get",
		url:"model/s_cate.php",
		data:"evt=edit&id=" + index,
		success:function(result){
		
			$("#update1").val(result.split('|')[0]);
			$("#catename").val(result.split('|')[1]);
			$("#txtstatus").val(result.split('|')[2]);
					
			$("#btncate").hide();
			$("#updatecate").show();
			$("#div_2").show("slow");
			$("#div_view2").hide("slow");
		}
		});
}
function clickedit2(index){
	
	$.ajax({
		type:"get",
		url:"model/s_shortcourse.php",
		data:"evt=edit&id=" + index,
		success:function(result){
		
			$("#updateshortcourse").val(result.split('|')[0]);
			$("#shortname").val(result.split('|')[1]);
					
			$("#btnshort").hide();
			$("#updateshort").show();
			$("#div_3").show("slow");
			$("#div_view3").hide("slow");
		}
		});
}
function clickeditnews(index){
	
	$.ajax({
		type:"get",
		url:"model/s_news.php",
		data:"evt=edit&id=" + index,
		success:function(result){
	
			$("#newsup").val(result.split('|')[0]);
			$("#newstittle").val(result.split('|')[1]);
			tinyMCE.get('newsdesc').setContent(result.split('|')[2]);
			$("#img1").val(result.split('|')[3]);
			$("#img2").val(result.split('|')[4]);
			$("#img3").val(result.split('|')[5]);			
			$("#btnupdatenews").show();
			$("#addnews").hide();
			$("#div_news").show("slow");
			$("#view_news").hide("slow");
		}
		});
}
function clickeditab(index){
	$.ajax({
		type:"get",
		url:"model/s_about.php",
		data:"evt=edit&id=" + index,
		success: function(result){
			//alert(result);
			$("#btnupdateab").val(result.split('|')[0]);
			$("#destination").val(result.split('|')[1]);
			$("#phone").val(result.split('|')[2]);
			$("#email").val(result.split('|')[3]);
			tinyMCE.get('history').setContent(result.split('|')[4]);
			tinyMCE.get('structure').setContent(result.split('|')[5]);
			tinyMCE.get('vision').setContent(result.split('|')[6]);
			tinyMCE.get('mission').setContent(result.split('|')[7]);
			tinyMCE.get('goal').setContent(result.split('|')[8]);
			tinyMCE.get('strategy').setContent(result.split('|')[9]);
			tinyMCE.get('hr').setContent(result.split('|')[10]);
			tinyMCE.get('sk').setContent(result.split('|')[11]);
			tinyMCE.get('st_rs').setContent(result.split('|')[12]);
			$("#upnabout").show();
			$("#btnabout").hide();
			$("#div_about").show("slow");
			$("#view_about").hide("slow");
			
			
		}
		});
}

function clickeditadm(index){
	$.ajax({
		type:"get",
		url:"model/s_addmiss.php",
		data:"evt=edit&id=" + index,
		success: function(result){
			//alert(result);
			$("#hupadm").val(result.split('|')[0]);
			$("#txtadm").val(result.split('|')[1]);
			tinyMCE.get('admdesc').setContent(result.split('|')[2]);
			$("#div_adm").show("slow");
			$("#view_adm").hide("slow");
			$("#upadm").show();
			$("#btnadm").hide();
			
		}
	});
}

function clickeditadv(index){
	$.ajax({
		type:"get",
		url:"model/s_adv.php",
		data:"evt=edit&id=" + index,
		success: function(result){
			
			$("#updateadv").val(result.split('|')[0]);
			tinyMCE.get('txtadv').setContent(result.split('|')[1]);
			$("#advimg1").val(result.split('|')[2]);
			$("#upadv").show();
			$("#div_adv").show("slow");
		$("#viewadv").hide("slow");
		$("#btnadv").hide();
		}
		});
}
function clickeditmar(index){
	$.ajax({
		type:"get",
		url:"model/s_marquee.php",
		data:"evt=edit&id=" + index,
		success: function(result){
			//alert(result);
			$("#upmar").val(result.split('|')[0]);
			$("#txtmarquee").val(result.split('|')[1]);
			$("#btnmar").hide();
			$("#btnupmar").show();			
			$("#div_mar").show("slow");
		$("#view_mar").hide("slow");
		}
		});
}

function clickeditword(index){
	$.ajax({
		type:"get",
		url:"model/s_word.php",
		data:"evt=edit&id=" + index,
		success: function(result){
			
			$("#updateword").val(result.split('|')[0]);
			tinyMCE.get('txtword').setContent(result.split('|')[1]);
			$("#wordimg1").val(result.split('|')[2]);
			$("#upword").show("slow");
			$("#div_word").show("slow");
		$("#viewword").hide("slow");
		$("#btnword").hide();
		}
		});
}
function clickeditre(index){
	$.ajax({
		type:"get",
		url:"model/s_resource.php",
		data:"evt=edit&id=" + index,
		success: function(result){
						
			$("#updatere").val(result.split('|')[0]);
			$("#txtname").val(result.split('|')[1]);
			$("#txtpos").val(result.split('|')[2]);
			$("#txtdepart").val(result.split('|')[3]);
			$("#reimg1").val(result.split('|')[4]);
			
			$("#upre").show();
			$("#btnre").hide();
			$("#div_re").show("slow");
			$("#viewre").hide("slow");
			
		}
		});
}
function clickeditaca(index){
$.ajax({
	
	type:"get",
	url:"model/s_academic.php",
	data:"evt=edit&id=" + index,
	success: function(result){
		
	$("#updateaca").val(result.split('|')[0]);
	$("#acaname").val(result.split('|')[1]);
	$("#acaimg").val(result.split('|')[2]);
	$("#upaca").show();
	$("#btnaca").hide();
	$("#div_aca").show("slow");
	$("#viewaca").hide("slow");
	}
	});	
}
function clickeditban(index){
	$.ajax({
		type:"get",
		url:"model/s_baner.php",
		data:"evt=edit&id=" + index,
		success: function(result){
			
			$("#upban").val(result.split('|')[0]);
			$("#banimg").val(result.split('|')[1]);
			$("#partnerimg").val(result.split('|')[2]);
			$("#btnupban").show();
			$("#btnban").hide();
			$("#div_ban").show("slow");
				$("#view_ban").hide("slow");
			
		}
	});
}

function cliceditimgp(index){
	$.ajax({
		type:"get",
		url:"model/s_imgpartner.php",
		data:"evt=edit&id=" + index,
		success: function(result){
			
			$("#hupimgpartner").val(result.split('|')[0]);
			$("#txtimgpartner").val(result.split('|')[1]);
			$("#himgp_pic").val(result.split('|')[2]);
			$("#div_imgpartner").show("slow");
			$("#view_imgpartner").hide("slow");
			$("#upimgpartner").show();
			$("#btnimgpartner").hide();
		}
	});
}
function clickeditpdesc(index){
	$.ajax({
		type:"get",
		url:"model/s_partdesc.php",
		data:"evt=edit&id="	+ index,
		success: function(result){
			$("#hpdesc").val(result.split('|')[0]);
			tinyMCE.get('txtpdesc').setContent(result.split('|')[1]);
			$("#div_pdesc").show("slow");
			$("#view_pdesc").hide("slow");
			$("#btnpdesc").hide();
			$("#uppdesc").show();
		}
	});
}