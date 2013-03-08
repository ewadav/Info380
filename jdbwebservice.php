<?php
	
	$db = new PDO("mysql:dbname=vrajpal_seomoz;host=localhost",
		"vrajpal","ischoolhosting");
	$db->query("INSERT INTO Customer
				VALUES('n/a', $_POST['fname'],$_POST['lname'], sdate, oneweek, threeweek, fourweek, pend, adate, 'plan', 'notes'); ");
				
	$db->query("INSERT INTO Email
				VALUES($_POST['email']); ");
?>

