<?php
	$_POST[];
	$db = new PDO("mysql:dbname=vrajpal_seomoz;host=localhost",
		"vrajpal","ischoolhosting");
	$db->query("INSERT INTO Customer
				VALUES(cid, fname, lname, sdate, oneweek, threeweek, fourweek, pend, adate, plan, notes); ");
				
	$db->query("INSERT INTO Email
				VALUES(cid, email); ");
?>

