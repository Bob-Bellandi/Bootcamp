<?php
session_start();
require_once('connection.php');

$query = "SELECT purse_lines.id, purse_lines.line, purse_lines.tagline, purse_lines.image
		  FROM purse_lines";
$purse_lines = fetchAll($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Really Rosie Designs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.mobile.custom.structure.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.mobile.custom.theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css"> <!-- Must follow jQuery styles -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
	<script src="jquery.mobile.custom.js"></script>
	<script type="text/javascript">
		$( document ).on( "pageinit", function() {
    		$( ".photopopup" ).on({
        		popupbeforeposition: function() {
            	var maxHeight = $( window ).height() - 100 + "px";
            	//On June 4, the word "var" above was corrected from "viewportar".
            	$( ".photopopup img" ).css( "max-height", maxHeight );
        		}
    		});
		});
	</script>
</head>
<body>
<!-- page 1, home page -->
<?php require_once('home_page.php'); ?>

<!-- page 2, about us -->
<?php require_once('aboutus_page.php'); ?>

<!-- pursline pages -->
<?php include('purses.php');?>

<!-- footer -->
<?php include('footer.php');?>
</body>
</html>