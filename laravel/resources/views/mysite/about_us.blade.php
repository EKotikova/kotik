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
						<h1>Latest News</h1>
						<span class="span_dat">Apr. 11, 2010</span><img src="<?=asset("images/img14.jpg")?>" class="img_l" alt="" /><br/>
						<span class="span_cont">Suspendisse rutrum interdum lacinia.</span><div style="height:5px"></div>
						Suspendisse tempus aliquet elit sit amet pellentesque. Donec iaculis pulvinar mauris, ac vulputate justo pretium quis.
						<div class="read_l"><a href="#">read more</a></div>
						<span class="span_dat">Apr. 10, 2010</span><br/>
						<span class="span_cont">Duis a molestie massa.</span><div style="height:5px"></div>
						Nullam imperdiet vulputate volutpat. Nunc consectetur mattis accumsan. Etiam
						<div class="read_l"><a href="#">read more</a></div>
					</div>
				<div id="left">
							<h1>About Us</h1>
							<img src="<?=asset("images/img41.jpg")?>" alt="" />
								<div class="text_ind3">
								<span class="span_cont">Nullam fringilla dolor sit amet nulla dictum porttitor a at orci.</span><br/>
								Fusce at tortor est. Morbi eget leo vitae nibh aliquam elementum in id mauris. Fusce in elit nec lectus mollis bibendum. Integer eu lectus at tortor vestibulum rutrum. Pellentesque rutrum, ipsum eu adipiscing ornare, elit erat dignissim mi, vitae <br/>
								<img src="<?=asset("images/img42.jpg")?>" class="img_l" alt="" /><span class="span_cont">Cras volutpat dui sit amet eros bibendum volutpat.</span><br/>
								Curabitur eu lectus mi, in volutpat eros. Morbi ornare mattis libero, vulputate vulputate velit sollicitudin vel. In auctor mattis nisi et malesuada. Proin sed mi sapien.<br/>
								Nulla accumsan mattis elementum. <br/><div style="height:5px"></div>
								<img src="<?=asset("images/img43.jpg")?>" class="img_l" alt="" /><div style="height:5px"></div><span class="span_cont">Pellentesque luctus enim non eros pellentesque molestie. Mauris vulputate aliquam mattis. </span><br/>
								Donec varius, tortor sed aliquam accumsan, dolor est suscipit ante, quis molestie quam sapien a dolor. <br/>
								Morbi id lobortis urna. Aliquam at porta mi. Aenean varius. lectus sit amet felis rhoncus consectetur. Donec<br/>interdum blandit augue, vel ullamcorper dolor aliquet vestibulum. Quisque est lacus, dictum in suscipit non, adipiscing.
						</div>

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