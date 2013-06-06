<html>
<head>
	<title></title>
</head>
<body>
	<h1>a new page</h1>
	<form action='main/go_to_new_view' method='post'> <!--this means go to the main controller, run the go_to_new_view function -->
		<input type='submit' value='Submit'/>
	</form>
	<?php
		var_dump($my_query); //this comes from $data['my_query'] in the controller. Recall that we refer to the variables we send to view by their INDEX.
	?>
</body>
</html>