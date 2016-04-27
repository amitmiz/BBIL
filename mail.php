<?php 
header('Content-Type: text/html; charset=utf-8');
?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php include("head.php"); ?>
			<link rel="stylesheet" href="mail.css" />
	</head>

	<body>
		<?php 
	if (!empty($_POST)) {

		$to = "bubbleboomsoccer@gmail.com";

		$name = $_POST['name'];
		$city = $_POST['city'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$datetime = $_POST['date'];
		$location = $_POST['location'];
		$moreInfo = $_POST['more'];

		$body = "From: $name\n E-Mail: $email\n Message:\n עיר:$city\n מספר:$phone\n תאריך:$datetime\n מיקום: $location\n הערות:$moreInfo";
		if (@mail($to,"השכרה",$body)) {
			echo '<div class="message">פרטיך נשלחו אלינו בהצלחה, נחזור אליך בהקדם האפשרי</div>';
		} else {
			echo '<div class="message">שגיאה, אנא נסה מאוחר יותר</div>';
		}
	} else {
		echo '<div class="message">אנא מלא את הטופס</div>';
	}
	?>
			<div class="message"> <a href="index.php">חזור לדף הראשי</a></div>
	</body>

	</html>