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
    	<p>Our purses are always beautiful, playful, and sophisticated. What's your mood today?</p>
	    <div data-role="collapsible-set" data-theme="a" data-content-theme="a" data-collapsed-icon="plus" data-expanded-icon="star" data-iconpos="right"> <!-- start accordion -->
<?php   foreach($purse_lines as $purse_line) 
		{	?>
				<div data-role="collapsible" data-collapsed="false">
	            <h3><?php echo $purse_line['line'] ?></h3>
	            	<div class="image_and_tagline">
	            		<div class="image_container">
	            			<a href="#page3"><img class="main_image" src="images/<?php echo $purse_line['image']?>" width="110" height="165" alt="<?php echo $purse_line['line']?>" data-transition="slide"></a>
	            		</div>
	            		<div class="tag_container"> 
	            			<?php echo $purse_line['tagline'] ?>
	            			<div class="next_arrow">
	            				<a href="#page<?php echo $purse_line['id'] + 2 ?>"><img class="right" src="images/next.png" width="25" height="25" alt="next" data-transition="slide"></a>
	            			</div>
	             		</div>
	            	</div> 
	            	<div class="clear"></div>
	        </div>
<?php 	}   ?>
        </div> 
    </div>
<?php include('footer.php');?>
</div>