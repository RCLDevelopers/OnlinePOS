<?php
//Get our database abstraction file
require('database.php');

if (isset($_GET['search']) && $_GET['search'] != '') {
	//Add slashes to any quotes to avoid SQL problems.
	$search = $_GET['search'];
	$suggest_query = db_query("SELECT * FROM customer WHERE name like('" .$search . "%') ORDER BY name");
	while($suggest = db_fetch_array($suggest_query)) {
		echo '<a href=auto.php?id2=' . $suggest['id'] . '>' . $suggest['name'] .' '. $suggest['mname'] .' '. $suggest['lname'] . "</a>\n";
	}
}
?>