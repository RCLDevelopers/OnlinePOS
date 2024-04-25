<?php
//Get our database abstraction file
require('database.php');

if (isset($_GET['searchs']) && $_GET['searchs'] != '') {
	//Add slashes to any quotes to avoid SQL problems.
	$search = $_GET['searchs'];
	$suggest_query = db_query("SELECT * FROM productlist WHERE pcode like('" .$search . "%') ORDER BY pcode LIMIT 5");
	while($suggest = db_fetch_array($suggest_query)) {
		echo '<a href=auto.php?id=' . $suggest['id'] . '>' . $suggest['pcode'] . "</a>\n";
	}
}
?>