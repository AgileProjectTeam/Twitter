<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>My Page</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=1.0.7" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.47" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1491683596" rel="stylesheet" type="text/css" />
	<link href="css/8.css?ts=1491683596" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance39" class="wb_element"><ul class="hmenu"><li><a href="%C4%B0ndex/" target="_self" title="İndex">İndex</a></li><li><a href="Log-in/" target="_self" title="Log in">Log in</a></li><li><a href="Following-x/" target="_self" title="Following (x)">Following (x)</a></li><li><a href="Following-y/" target="_self" title="Following (y)">Following (y)</a></li><li class="active"><a href="My-Page/" target="_self" title="My Page">My Page</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance41" class="wb_element wb_element_picture"><img alt="gallery/rcajbm7cl" src="gallery_gen//6d1a9f0bf48dc54a64b3dae19409c0b3_154x165.png"></div><div id="wb_element_instance42" class="wb_element wb_element_picture"><img alt="gallery/rcajbm7cl (copy)" src="gallery_gen//b0a1dee6299f426b530f6116822cc3de_154x165.png"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance40" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance43" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">Our new web site is coming very soon</h1></div><div id="wb_element_instance44" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance45" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance46" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle" style="text-align: center;">Welcome</h5></div><div id="wb_element_instance48" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(8);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance48");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance48").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 291px;">
	
<div id="wb_element_instance47" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">Contact us</h1>

<p class="wb-stl-normal"><strong>Address:</strong></p>

<p>Bahçeşehir University</p>

<p>İSTANBUL</p>

<p class="wb-stl-normal"><strong>Phone:</strong></p>

<p class="wb-stl-normal">+90 212 212 12 12</p>

<p class="wb-stl-normal"><strong>E-mail:</strong></p>

<p class="wb-stl-normal">bahcesehir@bau.edu.tr</p>
</div><div id="wb_element_instance49" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(305);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
