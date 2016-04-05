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
					<h1>Bubble Ball Israel</h1>
					<p>
						<h2>הדבר החדש שהולך לשגע אתכם ולהעיף אתכם באוויר!
					<br>חוויה בלתי נשכחת שתשאיר לכם חיוך לאורך זמן!</h2>
					</p>

					<a href="buy.php" id="videoBuyButton">להשכרה (החל מה- 1.5)</a>
				</div>
				<div id="videoControl">
					<a class="videoButton play" style="display:none;"> <span class="glyphicon glyphicon-play"></span></a>
					<a class="videoButton pause"> <span class="glyphicon glyphicon-pause"></span></a>
					<a class="videoButton mute"> <span class="glyphicon glyphicon-volume-off"></span></a>
					<a class="videoButton unmute" style="display:none;"> <span class="glyphicon glyphicon-volume-up"></span></a>
				</div>
			</div>

			<div id="about" class="block">
				<div class="container"></div>
				<div>
					<a name="about"><h1 class="heading"><span class="hidden-xs">אודות</span><span class="visible-xs">Bubble Ball Israel</span></h1></a>
					<div class="line"></div>
					<p>
						היא החברה הראשונה המובילה שהביאה משחק כדורגל הבועה לישראל <span class="hidden-xs">Bubble Ball Israel</span>
					</p>
				</div>
				<div class="container">
					<div id="aboutInfo" class="row">
						<div class="col-xs-6 col-sm-4 aboutThing">
							<i class="fa fa-suitcase"></i>
							<p>ארועי עסקים</p>
						</div>
						<div class="col-xs-6 col-sm-4 aboutThing">
							<i class="fa fa-birthday-cake"></i>
							<p>ימי הולדת</p>
						</div>
						<div class="col-xs-6 col-sm-4 aboutThing">
							<i class="fa fa-graduation-cap"></i>
							<p>ארועי בית ספר</p>
						</div>

						<div class="col-xs-6 col-sm-4 aboutThing">
							<i class="fa fa-futbol-o"></i>
							<p>משחקי ליגה</p>
						</div>
						<div class="col-xs-6 col-sm-4 aboutThing">
							<i class="fa fa-money"></i>
							<p>מחיר זול עם שירות לקוחות יוצא דופן</p>
						</div>
						<div class="col-xs-6 col-sm-4 aboutThing">
							<i class="fa fa-shield"></i>
							<p>ביטוח למשתתפים</p>
						</div>
					</div>
				</div>
			</div>
			<div id="gameInfo">
				<a name="theGame"></a>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5 col-sm-5 hidden-xs">
							<img src="ball.jpg">
						</div>
						<div style="padding-top:10%;" class="col-md-7 col-sm-7 ">
							<div>
								<h1 class="heading">המשחק</h1>
								<div class="line"></div>
							</div>
							<p>
								כדור הבועה היא שינוי במסורת הכדורגל שמתפשטת באירופה ובעולם וכעת גם מגיעה לישראל!! כדור הבועה היא חווית כדורגל עצומה ומלאת אדרנלין שלא תוכל להפסיק לצחוק בגללה. למשחק חוקים פשוטים וקלים, זהים לזה של כדורגל למעט העובדה שאתה נמצא בתוך בועה גדולה מתנפחת שמכסה אותך ומגנה עליך. הקפיצות, ההתגלגלויות וההתנגשויות הן אלו שיגרמו לך לאושר ולצחוק בלתי פוסק עם שאר הצוות וכל זה בבטיחות מלאה! המשחק משוחק במגרש מסומן וכמובן המטרה היא להבקיע כמה שיותר שערים מבלי לספוג... מלבד ההתנגשויות והקפיצות במשחק ישנם המון חלקים טקטיים שכן חלק גדול מהמשחק הוא להיות יצירתי ולזהות איך לפצח את הגנת היריב... כמובן שבכדור קיימים שימושים נוספים כמו קרבות סומו, כולם על כולם(קבוצה של אנשים במגרש מסויים שהמטרה היא להעיף אחד את השני מהתחום המסומן),באולינג וכן, כל העולה ברוחכם... נציג מטעמנו ישגיח בכל משחק ויבטיח את ביטחונכם והפקת הנאה מקסימלית מהמשחק. מה שנותר לכם הוא רק להיכנס לבועה ולהנות.... אז קדימה!!!!
							</p>
						</div>
					</div>
				</div>
			</div>
			<div id="faq" class="block">
				<div>
					<a name="faq"><h1 class="heading">שאלות נפוצות</h1></a>
					<div class="line"></div>
				</div>
				<div class="container">
					<div class="row">
						<div class="question">
							<h2>האם השמחק בטוח?</h2>
							<p>המשחק הינו בטיחותי יותר ממשחקי כדור אחרים מכיוון שהמשתף נמצא בתוך חליפת בועה שמכסה את גופו ומגנה עליו. יש לזכור שכמו בכל ענף ספורט קיימת האפשרות לפציעה אך כל משתתף מבוטח ונציג מטעמנו יוודא את ביטחונכם במהלך כל הפעילות</p>
						</div>
						<div class=" question">
							<h2>מה צריך ללבוש?</h2>
							<p>בגדי ספורט ,נעליים סגורות חובה</p>
							<p> לא ניתן להיכנס לבועה עם תכשיטים(צמידים, שעונים, שרשראות וטבעות) וכן ג'ינסים
							</p>
						</div>
						<div class=" question">
							<h2>למי מיועד המשחק?</h2>
							<p>גברים ונשים כאחד</p>
						</div>
						<div class=" question">
							<h2>מהי כמות השחקנים המינימאלית?</h2>
							<p> 8 שחקנים לפחות </p>
						</div>
						<div class=" question">
							<h2>איפה אפשר לשחק?</h2>
							<p>במקומות מישוריים העשויים דשא/ דשא סינטטי/ פרקט/ אולם ספורט</p>
						</div>
						<div class=" question">
							<h2>מי לא רשאי להשתתף?</h2>
							<p>לקראית התקנון <strong><a href="policy.html">לחץ כאן</a></strong></p>
						</div>
						<div class=" question">
							<h2>איך עושים הזמנה?</h2>
							<p>להסבר על הזמנות ורכישות <strong><a href="buy.php">לחץ כאן</a></strong></p>
						</div>

					</div>

				</div>
			</div>
			<div id="gallery" class="block">
				<a name="gallery" </a>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="1.jpg" alt="...">
								<div class="carousel-caption"></div>
							</div>
							<div class="item">
								<img src="2.jpg" alt="...">
								<div class="carousel-caption"></div>
							</div>
							<div class="item">
								<img src="3.jpg" alt="...">
								<div class="carousel-caption"></div>
							</div>
							<div class="item">
								<img src="4.jpg" alt="...">
								<div class="carousel-caption"></div>
							</div>
							<div class="item">
								<img src="5.jpg" alt="...">
								<div class="carousel-caption"></div>
							</div>
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
			<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
			<?php include("footer.php") ?>
	</div>
</body>
<script src="index.js"></script>
<script src="navbar.js"></script>

</html>