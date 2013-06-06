<?php
session_start();
require('connection.php');
$query = "SELECT purse_lines.id, purse_lines.line, purse_lines.tagline, purse_lines.image
FROM `rosie`.`purse_lines`";
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
	<!-- script src="jquery.mobile.custom.min.js"></script -->
</head>
<body>
<!-- - - - - - - - - - - -  page 1  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<div data-role="page" id="page1">
    <div data-theme="a" data-role="header">
        <a href="#page1"><img src="images/icon-home.png" alt="Home Page"></a>
        <h3>
            Really Rosie
        </h3>
        <a href="mailto:krbartell@email.com"><img src="images/icon-email.png" alt="Contact Us"></a>
    </div> <!-- header -->

    <div data-role="content" id="rr-content"> <!-- start content -->
    	<img src="images/header.png" alt="Welcome to Really Rosie Designs" title="See our fashion purse lines below.">
    	<p>
    		Our purses are always beautiful, playful, and sophisticated. What's your mood today?
    	</p>
	    <div data-role="collapsible-set" data-theme="a" data-content-theme="a" data-collapsed-icon="plus" data-expanded-icon="star" data-iconpos="right"> <!-- start accordion -->
<?php
		foreach($purse_lines as $purse_line) 
		{
			$webpage = $purse_line['id'] + 2;	?>
				<div data-role="collapsible" data-collapsed="false"> <!--' . $purse_line['id'] . 'collapsible -->
	            <h3><?php echo $purse_line['line'] ?></h3>
	            	<div class="image_and_tagline">
	            		<div class="image_container">
	            			<a href="#page3"><img class="main_image" src="images/<?php echo $purse_line['image']?>" width="110" height="165" alt="<?php echo $purse_line['line']?>" data-transition="slide"></a>
	            		</div> <!-- .image_container -->
	            		<div class="tag_container"> 
	            			<?php echo $purse_line['tagline'] ?>
	            			<div class="next_arrow">
	            				<a href="#page3"><img class="right" src="images/next.png" width="25" height="25" alt="next" data-transition="slide"></a>
	            			</div>  <!-- .next_arrow -->
	             		</div> <!-- .tag_container -->
	            	</div> <!-- .image_and_tagline -->
	            	<div class="clear"></div>
	        </div> <!-- end first collapsible -->
<?php 	}       
  ?>      
        </div> <!-- end accordion --> 
    </div> <!-- end content -->

	<div data-theme="a" data-role="footer" data-position="fixed" id="rr-footer">
		<ul>
			<li>Home</li>
			<li><a href="#page2">About</a></li>
			<li><a href="#page3">Soft</a></li>
			<li><a href="#page4">Nautical</a></li>
			<li><a href="#page5">West</a></li>
    	</ul>
    </div>  <!-- #rr-footer -->
</div> <!-- #page1 Home-->

<!-- - - - - - - - - - - -  page 2  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<div data-role="page" id="page2">
    <div data-theme="a" data-role="header"> <!-- header -->
        <a href="#page1"><img src="images/icon-home.png" alt="Home Page"></a>
        <h3>
            About Us
        </h3>
        <a href="mailto:krbartell@email.com"><img src="images/icon-email.png" alt="Contact Us"></a>
    </div> <!-- end header -->
    <div data-role="content" id="rr-content"> <!--  - - - - - - - - - - page 2 content -->
    <h4>We are Really Rosie Designs</h4>
	<p>
	Our designs are eye-catching and attention-getting "fabric art." They are practical, comfortable to carry and always include a cell phone pocket.</p>
	<div class="paragraph_highlight italicize"> 
	Occasionally we develop a design that we like so much that we make a limited edition, no more than twenty-five bags. Our Coca-Cola bags and Pony bags are two examples.</p>
	</div> <!-- paragraph_highlight -->
	<p> 
	&#8230; and our handbags are exclusive. Most bags are unique&#8212;an overused word, yes, but true for Really Rosie Designs.</p>
	<h4>Where <span class="italicize">We</span> Can Be Seen</h4>
	<ul>
		<li><span class="italicize">Live Laugh Love Salon</span><br>206 Kensington Rd., Syracuse, NY</li>
		<li><span class="italicize">The Windmill Gift Shop</span><br>Ravalli, MT</li>
		<li><a href="http://www.etsy.com/shop/ReallyRosieDesigns?ref=search_shop_redirect">Etsy</a></li>
	</ul>
	<p style="text-align:center;"><a href="mailto:krbartell@email.com">Contact us.</a></p>
     </div> <!--  -  - - - - - - - - - - - - - - - - - - - - - - - - end page 2 content  -->
	<div data-theme="a" data-role="footer" data-position="fixed" id="rr-footer">
		<ul>
			<li><a href="#page1">Home</a></li><li>About</li><li><a href="#page3">Soft</a></li><li><a href="#page4">Nautical</a></li><li><a href="#page5">West</a></li>
        	</ul>
    </div>
</div> <!-- #page2 -->

<!-- - - - - - - - - - - -  page 3  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php
$query = "SELECT purses.id, purses.name, purses.photo1_desc, purses.photo1_url, purses.photo2_url, purses.purse_lines_id, purses.price, purses.availability
FROM `rosie`.`purses`";
$purses = fetchAll($query);
// echo '<pre>';
// var_dump($purses);
// echo '<p></p>';
// //var_dump($purse_lines);
// echo '</pre>';

/*Begin first loop to determine purse line: */
//foreach($purse_lines as $purse_line) 
//	{
		for ($i=1; $i<=3; $i++)
		{	
		if($purse_line['id'] == $i)
		{
		$webpage = $purse_line['id'] + 2;
?>
		<div data-role="page" id="<?php echo $webpage ?>">
    <div data-theme="a" data-role="header"> <!-- header -->
        <a href="#page1"><img src="images/icon-home.png" alt="Home Page"></a>
        <h3><?php echo $purse_line['line']?></h3>
        <a href="mailto:krbartell@email.com"><img src="images/icon-email.png" alt="Contact Us"></a>
    </div> <!-- end header -->
    <div data-role="content" id="rr-content"> <!--  - - - - - - - - - - page<?php $webpage ?> content -->
 <?php    		
    		foreach($purses as $purse)
    		{
    			if($purse['availability'] == 1)
    			{
    				$purse_status = "Available";
    			}
    			else
    			{
    				$purse_status = "Sold";
    			}
 ?>

<a href="#popupBasic" data-rel="popup">Open Popup</a>

<div data-role="popup" id="popupBasic">
	<p>This is a completely basic popup, no options set.<p>
</div>

<a href="#popup100" data-rel="popup"><img src="images/icon-popup.png" alt="Enlarge photo"></a> <!-- Icon for popup of image -->







    			<div class="image_and_tagline_small">
			<div class="image_container_small" data-role="popup" id="popup100"> <!-- Contents of this div should popup. -->
				<a href="#page<?php echo $purse['id'].$webpage?>"><img src="images/<?php echo $purse['photo2_url']?>" width="70" height="105" alt="<?php echo $purse['name']?>" data-transition="slide"></a>
			</div> <!-- .image_container_small -->
			
			<div class="tag_container_small">
				<h5><?php echo $purse['name']?></h5>
				<?php echo $purse['photo1_desc']?>
				<h5>#<?php echo $purse['id'] . ', $' . $purse['price'] . ', ' . $purse_status?></h5>
	 		</div> <!-- .tag_container -->
		</div> <!-- .image_and_tagline -->
		<div class="clear"></div>
<?php		
			} // end, foreach $purses as $purse
?>
    </div> <!--  -  - - - - - - - - - - - - - - - - - - - - - - - - end page' . $webpage . 'content -->
	<div data-theme="a" data-role="footer" data-position="fixed" id="rr-footer">
		<ul>
			<li>Home</li>
			<li><a href="#page2">About</a></li>
			<li><a href="#page3">Soft</a></li>
			<li><a href="#page4">Nautical</a></li>
			<li><a href="#page5">West</a></li>
        	</ul>
    </div>
</div> <!-- #page' . $webpage . ' -->
<?php
		} // end, if for purse lines
		} //end for loop
	//} //end, first foreach loop
?>

</body>
</html>