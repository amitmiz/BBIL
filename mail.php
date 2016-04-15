<?php 
header('Content-Type: text/html; charset=utf-8');

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
	echo "פרטיך נשלחו אלינו בהצלחה, נחזור אליך בהקדם האפשרי";
} else {
	echo "שגיאה, אנא נסה מאוחר יותר";
}

?>