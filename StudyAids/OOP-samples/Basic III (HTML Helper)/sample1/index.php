<?php
	require_once('html_helper.php');
	$html_helper = new Html_helper();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>HTML Helper</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<!-- for generating table with user information-->
		<form id="generate_table" action="index.php" method="post">
			<fieldset>
				<legend><h1>Create a Table</h1></legend>
				<div>
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" id="first_name">
				</div>
				<div>
					<label for="last_name">Last Name</label>
					<input type="text" name="last_name" id="last_name">
				</div>
				<div>
					<label for="nickname">Nickname</label>
					<input type="text" name="nickname" id="nickname">
				</div>
				<input type="submit" value="Generate Table">
			</fieldset>
		</form>
<?php
		if(isset($_POST))
		{
			echo $html_helper->print_table($_POST);
		}
?>		
		<!-- for adding options to select box-->
		<form id="add_list_option" action="index.php" method="get">
			<fieldset>
				<legend><h1>Create a Dropdownlist</h1></legend>
				<label for="list_option">Add a list option</label>
				<input type="text" name="list_option" id="list_option">
				<input type="submit" value="Add">
			</fieldset>
		</form>	
<?php
		if(count($_GET) > 0)
		{
			echo $html_helper->print_select($_GET); 
		}
?>
	</body>
</html>