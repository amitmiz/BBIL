<!DOCTYPE html>
<html>

<head>
	<?php include("head.php") ?>
		<link rel="stylesheet" href="pricing.css">
		<?php include_once("analyticstracking.php") ?>
</head>

<body>
	<?php include("navbar.php") ?>
		<div dir="rtl" class="container belowNav">
			<div class="row">

				<div class="col-sm-4">
					<div id="starter" class="pricingCard">
						<div class="pricingHour">Starter</div>
						<div class="pricingPrice">
							<span>1200&#8362;</span>
						</div>
						<div class="description">
							<ul>
								<li><strong>השכרה לשעה</strong></li>
								<li>10 כדורים</li>
								<li>2 שערים</li>
								<li>2 כדורי כדוררגל</li>
								<li>קונוסים</li>
								<li>גופיות להבחנה בין הקבוצות</li>
							</ul>
						</div>
						<div class="pricingBuy">
							<a href="buy.php">להשכרה</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div id="basic" class="pricingCard">
						<div class="pricingHour">Basic</div>
						<div class="pricingPrice">
							<span>1800&#8362;</span>
						</div>
						<div class="description">
							<ul>
								<li><strong>השכרה לשעתיים</strong></li>
								<li>10 כדורים</li>
								<li>2 שערים</li>
								<li>2 כדורי כדוררגל</li>
								<li>קונוסים</li>
								<li>גופיות להבחנה בין הקבוצות</li>

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
							<span>2200&#8362;</span>
						</div>
						<div class="description">
							<ul>
								<li><strong>השכרה לשלוש שעות</strong></li>
								<li>10 כדורים</li>
								<li>2 שערים</li>
								<li>2 כדורי כדוררגל</li>
								<li>קונוסים</li>
								<li>גופיות להבחנה בין הקבוצות</li>
							</ul>
						</div>
						<div class="pricingBuy">
							<a href="buy.php">להשכרה</a>
						</div>
					</div>

				</div>
			</div>
			<div id="moreInfo">
				<h2>הערות:</h2>
				<ul>
					<li>המחירים כוללים מע"מ</li>
					<li style="font-weight: bolder;">המחירים נכונים למגרש הבית שלנו - "ספורט כיף ראשון לציון", מיקום אחר כרוך בתוספת תשלום</li>
					<li>ההשכרה כוללת מפעיל מטעמנו שיוודא את ביטחונכם לאורך הפעילות</li>
					<li>יש אפשרות להשכיר למשך זמן רב יותר</li>
					<li>ט.ל.ח</li>
				</ul>
			</div>

		</div>
		<?php include("footer.php") ?>
</body>

</html>