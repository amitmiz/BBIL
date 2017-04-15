<!DOCTYPE html>
<html>

<head>
	<?php include("head.php") ?>
			<link rel="stylesheet" href="event_types.css">
		<?php include_once("analyticstracking.php") ?>
</head>

<body>
	<?php include("navbar.php") ?>
				<div id="aboutInfo" class="footerPadding belowNav">
					<div  class="row">
							<?php 
								foreach(glob("images/kinds/".'*') as $filename) :?>
								
								<div class="col-xs-6 col-sm-3 aboutThing">
									<div onclick=<?php echo "openGallery('$filename',this)" ?> class="card">
										<img height="150px" width="150px" src=<?php echo $filename."/cover.jpg" ?> alt="...">
											<p> <?php readfile($filename."/name.txt"); ?> </p>
									</div>
								</div>
				

								<?php endforeach; ?>
					</div>
				</div>
				
			<div id="gallery" >
			</div>
		
			
			<?php include("footer.php") ?>
			<script src="event_types.js"></script>
</body>

</html>