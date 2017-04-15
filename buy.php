<!doctype html>
<html>

<head>
	<?php include("head.php"); ?>
		<?php include_once("analyticstracking.php") ?>
			<link rel="stylesheet" href="buy.css" />

</head>

<body dir="rtl">
	<?php include("navbar.php"); ?>
		<div class="footerPadding belowNav">
			<div id="buy" class="container">
				<header>
					<h1 class="heading">השכרה</h1>
					<div class="line"></div>
				</header>
				<div class="row">
					<div class="col-sm-6">
						<form method="post" action="mail.php">
							<div class="form-group">
								<label>שם</label>
								<input name="name" type="text" class="form-control" placeholder="הכנס שם" required>
							</div>
							<div class="form-group">
								<label>עיר</label>
								<input name="city" type="text" class="form-control" placeholder="הכנס עיר" required>
							</div>
							<div class="form-group">
								<label>תאריך וזמן</label>
								<input name="date" type="date" class="form-control" placeholder="הכנס תאריך" required>
							</div>
							<div class="form-group">
								<label>דואר אלקטורני</label>
								<input name="email" type="email" class="form-control" placeholder="הכנס דואר אלקטורני" required>
							</div>
							<div class="form-group">
								<label>טלפון</label>
								<input name="phone" type="tel" class="form-control" placeholder="הכנס טלפון" required maxlength="10" pattern="\d{7,10}">
							</div>
							<div class="form-group">
								<label>מיקום האירוע</label>
								<div>
									<label>יש</label>
									<input type="radio" name="location" value="yes" required>
								</div>
								<div>
									<label>אין</label>
									<input type="radio" name="location" value="no" required>
								</div>
								<p>*מיקום האירוע חייב להיות על דשא/דשא סינטטי/פרקט</p>

							</div>

							<div class="form-group">
								<label>הערות</label>
								<textarea name="more" placeholder="ציין מיקום במידה ויש ופרטי האירוע" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label>קראתי את <a href="policy.html">התקנון</a></label>
								<input type="checkbox" id="policy" name="policy" />
							</div>

							<button id="submit" type="submit" class="btn btn-success" disabled>שלח</button>
						</form>
					</div>
					<div id="buyInfo" class="col-sm-6">
						<p>
							על מנת לבצע את הרכישה יש למלא את כל הפרטים ללא יוצא מן הכלל. נציג יחזור אליכם תוך 12 שעות ממעוד השליחה.
						</p>
						<div>
							או שניתן ליצור קשר איתנו,
							<ul>
								<li><span>אור:</span><a href="tel:0543291899">0503996662</a></li>
								<li>אימייל bubbleboomsoccer@gmail.com</li>
							</ul>
						</div>
						<br>
						<p>
							ההשכרה כוללת 10 חליפות בועה, 2 שערים, 2 כדורי כדורגל, קונוסים, גופיות להבחנה בין הקבוצות ומפעיל מטעמנו שיוודא את ביטחונכם.
						</p>
						<p><b>יש לעדכן את הנציג בסוג האירוע ובאורכו בכדי שידע להתאים בשבלכם את החבילה המתאימה ביותר. </b> על הנציג לדעת את כמות המשתתפים ואת גילם.</p>
						<p><strong>המחירים נכונים למגרש הבית שלנו - "ספורט כיף ראשון לציון", מיקום אחר כרוך בתוספת תשלום</strong></p>

					</div>
				</div>
			</div>
		</div>
		<?php include("footer.php") ?>
			<script src="buy.js"></script>

</body>

</html>