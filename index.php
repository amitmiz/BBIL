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
					<a name="about"><h1 class="heading"><span class="hidden-xs">אודות</span><span class="visible-xs">Bubble Boom</span></h1></a>
					<div class="line"></div>
					<p>
						<span class="hidden-xs">Bubble Boom (באבל בום)</span> היא החברה המובילה שהביאה את משחק <strong>כדור הבועה</strong> לישראל
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
							<i class="fa fa-child" aria-hidden="true"></i>
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
								<h1 class="heading">על הכדור</h1>
								<div class="line"></div>
							</div>
							<p>
								כדור הבועה הוא שינוי במסורת משחק הכדור שמתפשט באירופה ובעולם וכעת גם מגיע לישראל. כדור הבועה הוא חוויה עצומה מלאת אדרנלין שלא תוכלו להפסיק לצחוק בגללה. למשחק חוקים פשוטים וקלים. אתם נמצאים בתוך בועה גדולה מתנפחת שמכסה אתכם ומגנה עליכם. הקפיצות,ההתגלגלויות,וההתנגשויות הן אלה שיגרמו לך לאושר ולצחוק בלתי פוסק עם שאר הצוות וכל זה בבטיחות מלאה! לכדור הבועה שימושים מגוונים: משחק כדורגל,קרבות סומו,״החזק שורד״,באולינג וכל העולה בדמיונכם. נציג מטעמנו ישגיח בכל משחק ויבטיח את ביטחונכם. אנו מבטיחים לכם הנאה מקסימלית. מה שנותר לכם הוא רק להיכנס לבועה ולהנות...אז קדימה! הכנסו <strong><a href="buy.php">והזמינו</a></strong>


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
							<h2>האם המשחק בטוח?</h2>
							<p>המשחק בטיחותי יותר ממשחקי כדור אחרים מכיוון שהמשתתף נמצא בתוך כדור בועה שמכסה את גופו ומגן עליו. נציג מטעמינו נמצא בזמן הפעילות ודואג לבטחונכם. כל משתתף מבוטח.</p>
						</div>
						<div class=" question">
							<h2>מה צריך ללבוש?</h2>
							<p>בגדי ספורט(לא מכנסי ג׳ינס),נעליים סגורות חובה</p>
							<p>לא ניתן להיכנס לבועה עם תכשיטים(צמידים,שעונים,שרשראות וטבעות)
							</p>
						</div>
						<div class=" question">
							<h2>למי מיועד המשחק?</h2>
							<p>גברים ונשים כאחד</p>
						</div>
						<div class=" question">
							<h2>מהי כמות האנשים המינימאלית?</h2>
							<p> בכל סבב של פעילות, 8 אנשים לפחות </p>
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
						<!--
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						</ol>
-->




						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="1.jpg" alt="...">
								<div class="carousel-caption"></div>
							</div>
							<?php 
								foreach(glob("images/".'*') as $filename) : ?>
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
			<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
			<?php include("footer.php") ?>
	</div>
</body>
<script src="index.js"></script>

</html>