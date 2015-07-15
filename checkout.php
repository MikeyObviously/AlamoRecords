<?php

// jCart v1.3
// http://conceptlogic.com/jcart/

// This file demonstrates a basic checkout page

// If your page calls session_start() be sure to include jcart.php first
include_once('jcart/jcart.php');

session_start();
?>

<?php
include('head-side-contact.htm');


?>

		
			<h2 align="center">Checkout</h2>

		
			<div id="content" align="center">
				<div id="jcart"><?php $jcart->display_cart();?></div>

				<p align="center"><a href="inventory.php">&larr; Continue shopping</a></p>

				<?php
					//echo '<pre>';
					//var_dump($_SESSION['jcart']);
					//echo '</pre>';
				?>
			</div>
			<div id="jcart-tooltip"></div>
			<div class="clear"></div>
		

		<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="jcart/js/jcart.min.js"></script>



  <!-- end .container --></div>
  
  </div>
  
</body>
</html>
