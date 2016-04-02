<!doctype html>
<html>

<head>
	<?php include("head.php"); ?>
		<link rel="stylesheet" href="buy.css" />
</head>

<body>
	<?php include("navbar.php"); ?>
		<div class="belowNav">
			<div id="buy" class="container">
				<header>
					<h1 class="heading">השכרה</h1>
					<div class="line"></div>
				</header>
				<div class="row">
					<div class="col-sm-6">
						<form dir="rtl" method="post" action="mail.php">
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
								<label>אימייל</label>
								<input name="email" type="email" class="form-control" placeholder="הכנס אימייל" required>
							</div>
							<div class="form-group">
								<label>טלפון</label>
								<input name="phone" type="tel" class="form-control" placeholder="הכנס טלפון" required maxlength="10" pattern="\d{7,10}">
							</div>
							<div class="form-group">
								<label>מיקום האירוע</label>
								<select class="form-control" required>
									<option value="דשא">דשא</option>
									<option value="דשא סינטטי">דשא סינטטי</option>
									<option value="פרקט">פרקט</option>
									<option value="אולם ספורט">אולם ספורט</option>
								</select>
							</div>
							<div class="form-group">
								<label>הערות</label>
								<textarea class="form-control"></textarea>
							</div>
							<button type="submit" class="btn btn-success">שלח</button>
						</form>
					</div>
					<div class="col-sm-6">
						<p>
							על מנת לבצע את הרכישה יש למלא את כל הפרטים ללא יוצא מן הכלל. נציג יחזור אליכם תוך 12 שעות ממעוד השליחה.
						</p>
						<p>
							או שניתן ליצור קשר למספר 0543291899
							<br> אימייל BUBBLEBALLISRAEL@gmail.com
						</p>
						<p>
							ההשכרה כוללת 10 חליפות בועה, 2 שערים, 2 כדורי כדורגל, קונוסים, גופיות להבדלה בין הקבוצות ומפעיל מטעמנו שיוודא את ביטחונכם.
						</p>
						<p><b>יש לעדכן את הנציג בסוג האירוע ובאורכו בכדי שידע להתאים בשבלכם את החבילה המתאימה ביותר. </b> על הנציג לדעת את כמות המשתתפים ואת גילם.</p>


					</div>
				</div>
			</div>
		</div>
		<?php include("footer.php") ?>
			<script src="navbar.js"></script>
</body>


</html>