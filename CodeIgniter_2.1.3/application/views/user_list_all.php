<!DOCTYPE html>
<html>
<head>
	<title>Putting the V in View</title>
</head>
<body>
	<h1>User List</h1>
<?php


echo "Hi, Bob<br>";

var_dump($users);
echo "<br>" . $message;
echo "<p></p>";

// List all the users (from the other file):
echo "<table><thead><th>Name</th><th>Action</th> </thead>";
foreach($users as $user)
{
echo "<tr><td>{$user}</td></tr>";
}

?>
</table>
</body>
</html>