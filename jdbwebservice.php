<?php
	print_r($_POST);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];

	$db = new PDO("mysql:dbname=vrajpal_seomoz;host=localhost",
		"vrajpal","ischoolhosting");
	$query = "INSERT INTO  `vrajpal_seomoz`.`Customer` (
`CustomerCompany_ID` ,
`FirstName` ,
`LastName` ,
`StartDate` ,
`OneWeek` ,
`ThreeWeek` ,
`FourWeek` ,
`ProjectedEnd` ,
`ActualEnd` ,
`Plan` ,
`Notes`
)
VALUES (  'foo',  '$fname',  '$lname',  '2013-03-05',  '2013-03-06',  '2013-03-29',  '2013-03-14',  '2013-03-28',  '2013-03-31',  'word life',  'word life'
);";


	print($query);
	$db->query($query);
				
	$db->query("INSERT INTO Email
	 			VALUES($email); ");


?>


