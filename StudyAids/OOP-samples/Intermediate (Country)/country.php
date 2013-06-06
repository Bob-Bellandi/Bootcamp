<?php
	include_once("class_lib.php");

	session_start();

	if(!isset($_SESSION['logged_in']))
	{
		header("Location: index.php");
	}
	$country = new Country();

	$countries = $country->getCountries();
?>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript">

	$(document).ready(function(){
		$('#country_dropdown').change(function(){
			$('#country_form').submit();
		});

		$('#country_form').submit(function(){
			$.post(
				$(this).attr('action'),
				$(this).serialize(),
				function(data){
					$('#results').html(data.html);
				},
				"json"
				)
			return false;
		});
		$('#country_form').submit();
	});
	</script>
</head>
<body>

Welcome <?= $_SESSION['user']['first_name'] ." " . $_SESSION['user']['last_name'] ?>!

<a href="process.php">Log Off</a>


<h3>Select Country:</h3>
<form id="country_form" action="process.php" method="post">
<input type="hidden" name="action" value="GetCountryInfo" />
<select name="country" id='country_dropdown'>

<?php
	foreach($countries as $country) {?>
	<option value="<?= $country['Name']; ?>"><?= $country['Name']; ?></option>
<?php
	}	?>
</select>
<!-- <input type="submit" value="Check Info" /> -->
</form>

<div id="results">
</div>

</body>
</html>
