<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Metamorphosis Design Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?=asset("styles.css")?>" rel="stylesheet" type="text/css" />

<!-- Pirobox setup and styles -->
<script type="text/javascript" src="<?=asset("lib/jquery-1.3.2.min.js")?>"></script>
<script type="text/javascript" src="<?=asset("lib/pirobox.js")?>"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 400, //animation speed
			bg_alpha: 0.1, //background opacity
			slideShow : false, // true == slideshow on, false == slideshow off
			slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
			close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox

	});
});
</script>

<link href="<?=asset("images/style.css")?>" rel="stylesheet" type="text/css" />
<link href="<?=asset("css.css")?>" rel="stylesheet" type="text/css" />

<!-- Pirobox setup and styles end-->

</head>
<body>

<div id="main_bg">
<div id="main">
<!-- header -->
<div id="header">
	<div id="logo">
		<a href="#">metamorph_sunbeam</a>
		<h2><a href="http://www.metamorphozis.com/" id="metamorph">Design by Metamorphosis Design</a></h2>
	</div>
 <div id="buttons">
	<a href="<?=asset("index.blade.php")?>" class="but" title="">Home</a><div class="but_razd"></div>
	<a href="<?=asset("blog.blade.php")?>" class="but" title="">Blog</a><div class="but_razd"></div>
	<a href="<?=asset("gallery.blade.php")?>" class="but" title="">Gallery</a><div class="but_razd"></div>
	<a href="<?=asset("about_us.blade.php")?>" class="but" title="">About us</a><div class="but_razd"></div>
	<a href="<?=asset("contact_us.blade.php")?>" class="but" title="">Contact us</a>
	</div>
</div><div class="inner_copy"><div class="inner_copy">Бесплаьные шаблоны сайтов на www.cooltemplates.ru</div></div>
<!-- / header -->
<!-- content -->
				<div class="cont_top"></div>
				<div id="content">
					<div id="cont_razd">
					<div id="right">
						<h1>Find Us</h1>
						<img src="<?=asset("images/img51.jpg")?>" alt="" height="229" width="255" />
						<a href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=40.719388,-74.003005&amp;sspn=0.020426,0.045447&amp;ie=UTF8&amp;hq=&amp;hnear=Westminster,+London,+United+Kingdom&amp;ll=51.499981,-0.127373&amp;spn=0.025647,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed?iframe=true" class="wiew_map">View Larger Map</a>

						<div style="height:15px"></div>
						<h1>Our Info</h1>
						1234 SomeStreet<br/>
						Brooklyn, NY 11201<br/>
						Phone: 1(234) 567 8910<br/>
						Fax: 1(234) 567 8910<br/>
						E-mail: companyname@yahoo.com
						</div>
						<div id="left">
						<h1>Contact Us</h1>
						<span class="span_cont">Nullam fringilla dolor sit amet nulla dictum porttitor a at orci. </span><br/>
								Fusce at tortor est. Morbi eget leo vitae nibh aliquam elementum in id mauris. Fusce in elit nec lectus mollis bibendum. Integer eu lectus at tortor vestibulum rutrum. Pellentesque rutrum, ipsum eu adipiscing ornare, elit erat dignissim mi, vitae... <br/>
						<div style="height:15px"></div>
							<form action="" method="post">
							<div><input class="input_txt2" value="Name" name="Name2" type="text" /></div><div style="height:5px"></div>
							<div><input class="input_txt2" value="E-mail" name="Name" type="text" /></div><div style="height:5px"></div>
							<div><input class="input_txt2" value="Subject" name="Name" type="text" /></div><div style="height:5px"></div>
							<div><textarea class="text_area2" cols="32" rows="3" name="Message">Message</textarea></div><div style="height:8px"></div>
							<div><input class="submit2" name="Submit2" type="submit" value="Submit" /></div>
							</form>


					</div>
					<div style="clear: both"></div>
					</div>
				</div>
				<div class="cont_bot"></div>
<!-- / content -->
	<div style="height:15px"></div>
<!-- bottom -->
	<div id="bottom">
		<div id="b_col1">
		<h1>Recent Posts</h1>
			<ul>
				<li><a href="#">Free Website Templates</a></li>
									<li><a href="#">Free Flash Templates</a></li>
									<li><a href="#">Easy Flash Templates</a></li>
		<li><a href="#">Top Hosting Providers</a></li>
									<li><a href="#">Free Fonts</a></li>
									<li><a href="#">Free Icons</a></li>
									<li><a href="#">Free Photoshop Brushes</a></li>
									<li><a href="#">RSS Subscribe</a></li>
			</ul>
		</div>
		<div id="b_col2">
			<h1>Follow Us</h1>
			<ul>
				<li><img src="<?=asset("images/fu_i1.gif")?>" class=" fu_i" alt="" /><a href="#">Lorem ipsum dolor</a></li>
				<li><img src="<?=asset("images/fu_i2.gif")?>" class=" fu_i" alt="" /><a href="#">Maecenas in turpis </a></li>
				<li><img src="<?=asset("images/fu_i3.gif")?>" class=" fu_i" alt="" /><a href="#">Morbi fringilla libero</a></li>
				<li><img src="<?=asset("images/fu_i4.gif")?>" class=" fu_i" alt="" /><a href="#">In venenatis metus vel </a></li>
			</ul>

	</div>
		<div id="b_col3">
			<h2>Latest Projects</h2>
			<a href="<?=asset("images/project1.jpg")?>" class="pirobox_footer" title="First Project Screenshot"><img src="<?=asset("images/bottom_i1.jpg")?>" alt="" /></a><div style="height:10px"></div>
			<a href="<?=asset("images/project2.jpg")?>" class="pirobox_footer" title="Second Project Screenshot"><img src="<?=asset("images/bottom_i2.jpg")?>" alt="" /></a>
		</div>
	<div id="b_col4">
			<h2>Send a Message</h2>
			<form action="" method="post">
					<div><input class="input_txt" value="Name" name="Name" type="text" /></div><div style="height:5px"></div>
					<div> <input class="input_txt" value="E-mail" name="E-mail" type="text" /></div><div style="height:5px"></div>
					<div><input class="input_txt" value="Subject" name="Subject" type="text" /></div><div style="height:5px"></div>
					<div><textarea class="text_area" cols="32" rows="3" name="Message">Message</textarea></div>
				<div><input class="submit" name="Submit" type="submit" value="Submit" /></div>
		</form>
	</div>
	<div style="clear: both"></div>
	</div>

<!-- / bottom -->
<!-- footer -->
	<div id="footer">
		<p>Copyright statement. Designed by <a href="http://www.metamorphozis.com">Flash Templates</a></p>
		<p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
		<p><a href="http://makecorpsite.ru/">makecorpsite.ru</a> - как создать сайт-визитку.</p>
	</div>
<!-- / footer -->
</div>

</div>

</body>
</html>
