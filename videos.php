<!DOCTYPE html>
<html>

<head>
	<?php include("head.php") ?>
			<link rel="stylesheet" href="videos.css">
		<?php include_once("analyticstracking.php") ?>
</head>

<body>
	<?php include("navbar.php") ?>
			
			<div id="vidoes" class="footerPadding belowNav">
					<header>
					<h1 class="heading">סרטונים</h1>
					<div class="line"></div>
				</header>
			
			<?php $videosText = readfile("images/videoLinks.txt"); 
			$links = explode("@", $videosText);
			
			foreach ($links as $link): ?>
			
			
			<?php echo $link ?>
			
			
			<?php endforeach ?>
			
			
			</div>
			
			<?php include("footer.php") ?>
			
</body>

</html>