<?php
//define constants for db_host, db_user, db_pass, and db_database
//adjust the values below to match your database settings
//THIS IS THE BASIC DATA FOR THE CONNECTION TO THE DATABASE:
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root'); //set DB_PASS as 'root' if you're using MAMP
define('DB_DATABASE', 'greenbelt');

//CONNECT TO THE DATABASE  H O S T:
$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to the database host (please double check the settings in connection.php): ' . mysql_error());

//CONNECT TO THE  D A T A B A S E:
$db_selected = mysql_select_db(DB_DATABASE, $connection) or die ('Could not find a database with the name "'.DB_DATABASE.'" (please double check your settings in connection.php): ' . mysql_error());
/*
1. To test this connection, use a sham file such as index.php with the following only:
<?php
	require("connection.php");
?>
test RB

2. After you invoke that through a browser (with the local host), you should see just "test RB". That means that the connection was successful.


If you see error messages, check the settings ("define" statements above), and check that that schema exists and is available. 

3a. Back in MySQL Workbench, you can test the queries.

3b. In the "index.php" file, create a $query, and then use the function fetch_all (below) to retrieve the data from the specified database. For example:
	$query = 'SELECT * from users ORDER BY id DESC';
	fetch_all($query); 
-----------------------------------------------------------------
THE FOLLOWING ARE USED TO GET THE DATA:
*/
//fetches all records from the query and returns an array with the fetched records
function fetch_all($query)
{
 $data = array();

 $result = mysql_query($query);
 while($row = mysql_fetch_assoc($result))
 {
  $data[] = $row;
 }
 return $data;
}
//fetch the first record obtained from the query
function fetch_record($query)
{
 $result = mysql_query($query);
 return mysql_fetch_assoc($result);
}
?>