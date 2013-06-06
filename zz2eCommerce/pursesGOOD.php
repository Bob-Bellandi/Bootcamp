<?php

$query = "SELECT purses.id, purses.name, purses.photo1_desc, purses.photo1_url, purses.photo2_url, purses.purse_lines_id, purses.price, purses.availability
		  FROM `rosie`.`purses`";

$purses = fetchAll($query);

/*Begin first loop to determine purse line: */
foreach($purse_lines as $purse_line) 
{	?>
	<div data-role="page" id="page<?php echo $purse_line['id'] + 2; ?>">
	    <div data-theme="a" data-role="header"> <!-- header -->
	        <a href="#page1"><img src="images/icon-home.png" alt="Home Page"></a>
	        <h3><?php echo $purse_line['line']?></h3>
	        <a href="mailto:krbartell@email.com"><img src="images/icon-email.png" alt="Contact Us"></a>
	    </div> <!-- end header -->
	    <div data-role="content" id="rr-content">
<?php   foreach($purses as $purse)
    	{
    		if($purse['purse_lines_id'] == $purse_line['id'])
    		{
	    		//ternary
	    		$purse_status = ($purse['availability'] == 1) ? "Available" : "Sold";
?>
		    	<div class="image_and_tagline_small">
					<div class="image_container_small" data-role="popup" id="popup100">
						<a href="#page<?php echo $purse['id']?>"><img src="images/<?php echo $purse['photo2_url']?>" width="70" height="105" alt="<?php echo $purse['name']?>" data-transition="slide"></a>
					</div> <!-- .image_container_small -->
					<div class="tag_container_small">
						<h5><?php echo $purse['name']?></h5>
						<p><?php echo $purse['photo1_desc']?></p>
						<h5>#<?php echo $purse['id'] . ', $' . $purse['price'] . ', ' . $purse_status?></h5>
			 		</div> <!-- .tag_container -->
				</div> <!-- .image_and_tagline -->
				<div class="clear"></div>
<?php		}
		}	?>
   		 </div>
   	</div> 
<?php
	include('footer.php');
}

?>