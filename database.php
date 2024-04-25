<?php

//Make the database connection.
db_connect() or die('Unable to connect to database server!');

function db_connect($server = 'localhost', $username = 'root', $password = '', $database = 'inventory', $link = 'db_link') {
    global $$link;
    $$link = mysql_connect($server, $username, $password);
    if ($$link) mysql_select_db($database);
    return $$link;
}

//Function to handle database errors.
function db_error($query, $errno, $error) { 
    die('Cannot connect to database');
}

//Function to query the database.
function db_query($query, $link = 'db_link') {
    global $$link;
    $result = mysql_query($query, $$link) or db_error($query, mysql_errno(), mysql_error());
    return $result;
}

//Get a row from the database query
function db_fetch_array($db_query) {
    return mysql_fetch_array($db_query, MYSQL_ASSOC);
}
?>