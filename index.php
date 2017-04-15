<!doctype html>
<html>

<head>
	<?php include("head.php"); ?>

		<link rel="stylesheet" href="index.css">
</head>

<body dir="rtl">
	<div>
		<?php include("navbar.php"); ?>
			<div id="videoContainer">
				<div id="videoOverlay"></div>
				<video width="100%" autoplay>
					<source src="bubble.mp4" type="video/mp4">
				</video>
				<div dir="rtl" id="videoText">
					<div id="logo"><img src="logo.png"></div>
					<p>
						<h2>הדבר החדש שהולך לשגע אתכם ולהעיף אתכם באוויר!
					<br>חוויה בלתי נשכחת שתשאיר לכם חיוך לאורך זמן!</h2>
					</p>

					<a href="buy.php" id="videoBuyButton">להשכרה</a>
					<div> לתמונות מאירועים <a style="color:#337ab7" href="https://www.facebook.com/%D7%91%D7%90%D7%91%D7%9C-%D7%91%D7%95%D7%9D-Bubble-Boom-1699631083625800">הכנסו לפייסבוק שלנו</a></div>
				</div>
				<div id="videoControl">
					<a class="videoButton play" style="display:none;"> <span class="glyphicon glyphicon-play"></span></a>
					<a class="videoButton pause"> <span class="glyphicon glyphicon-pause"></span></a>
					<a class="videoButton mute"> <span class="glyphicon glyphicon-volume-off"></span></a>
					<a class="videoButton unmute" style="display:none;"> <span class="glyphicon glyphicon-volume-up"></span></a>
				</div>
			</div>
	
			<!---<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->
			<?php include("footer.php") ?>
	</div>
</body>
<script src="index.js"></script>

</html>