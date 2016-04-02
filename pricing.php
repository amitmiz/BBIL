<!DOCTYPE html>
<html>

<head>
	<?php include("head.php") ?>
		<link rel="stylesheet" href="pricing.css">
</head>

<body>
	<?php include("navbar.php") ?>
		<div class="container belowNav">
			<div class="row">
				<div class="col-sm-4">
					<div id="basic" class="pricingCard">
						<div class="pricingHour">Basic</div>
						<div class="pricingPrice">
							<span>800&#8362;</span>
							<div> 400&#8362; לשעה</div>
						</div>
						<div class="description">
							<ul>
								<li>
									השכרה לשעתיים
								</li>
								<li>10 כדורים</li>
							</ul>

						</div>
						<div class="pricingBuy">
							<a href="buy.php">להשכרה</a>
						</div>
					</div>

				</div>
				<div class="col-sm-4">
					<div id="starter" class="pricingCard">
						<div class="pricingHour">Starter</div>
						<div class="pricingPrice">
							<span>530&#8362;</span>
						</div>
						<div class="description">
							<ul>
								<li>
									השכרה לשעה
								</li>
								<li>10 כדורים</li>
							</ul>

						</div>
						<div class="pricingBuy">
							<a href="buy.php">להשכרה</a>
						</div>
					</div>

				</div>
				<div class="col-sm-4">
					<div id="pro" class="pricingCard">
						<div class="pricingHour">Pro</div>
						<div class="pricingPrice">
							<span>1100&#8362;</span>
							<div> 366&#8362; לשעה</div>
						</div>
						<div class="description">
							<ul>
								<li>
									השכרה לשלוש שעות
								</li>
								<li>10 כדורים</li>
							</ul>

						</div>
						<div class="pricingBuy">
							<a href="buy.php">להשכרה</a>
						</div>
					</div>

				</div>
			</div>

		</div>



		<?php include("footer.php") ?>
			<script src="navbar.js"></script>
</body>

</html>