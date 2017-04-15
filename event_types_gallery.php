			<div style="text-align:center">
			<a id="galleryExit" onclick="closeGallery()"><i class="glyphicon glyphicon-remove"> </i></a> <h1 style="display: inline-block;" class="heading">גלריה</h1>
					<div class="line"></div>	
				</div>	
					
<div class="row">
	<div  class="col-md-8">
				<a name="gallery" </a>
					<div style="max-width: 55%;margin:0 auto;" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src=<?php echo $_GET['type']."/cover.jpg" ?> alt="...">
								<div class="carousel-caption"></div>
							</div>
							<?php
								foreach(glob($_GET['type']."/images/".'*') as $filename) :  ?>
								
								<div class="item">
									<img src=<?php echo $filename ?> alt="...">
									<div class="carousel-caption"></div>
								</div>

								<?php endforeach; ?>
						</div>
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-4" id="typeInfo"> 	<?php  readfile($_GET['type']."/info.txt") ?></div>
			</div>
			
		
