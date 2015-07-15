<?php
include('head-side-contact.htm');
include('databaseconnect.php');
error_reporting(0);
?>  


<div class="contentMain">
  <h2>What We Are</h2>
  <p>Alamo Records sells used vinyl records and compact discs over the net.  Our inventory is a personal collection; we currently have 324 items for sale.  We have long hair, denim vests, and terrible tattoos.  Welcome to our table at the internet record swap.</p>
  <a href="inventory.php"><img class="browsebutton" src="images/inventory.png" /></a>
</div>   

<div class="sidebar2">
<?php
include('artistmenu.htm'); 
?>
</div> 

<div class="content">
  <h2>Recommendations</h2>
  
  <div id="carousel">
     <img onfocus="descrip()" class="slide" src="images/bob250.png" />
     <img onfocus="descrip()" class="slide" src="images/jay250.png" />
     <img onfocus="descrip()" class="slide" src="images/david250.png" />
     <img onfocus="descrip()" class="slide" src="images/steely250.png" />
     <img onfocus="descrip()" class="slide" src="images/billy250.png" />
     <img onfocus="descrip()" class="slide" src="images/lips250.png" />      
     <img onfocus="descrip()" class="slide" src="images/bruce250.png" />
     <img onfocus="descrip()" class="slide" src="images/cars250.png" />
  </div>

  <ul id="carousel-descriptions">

    <li class="desc current">
    <strong>Bob Dylan - Nashville Skyline</strong><br />
    An easy-going country record on which Dylan's singing style is more "sing-y."<br>
    Highlights: Lay Lady Lay | Tonight I'll Be Staying Here With You<br>
    Vinyl | $30 | 
<form method='post' action='' class='jcart homepageAdd' id='addtocart'>
  <fieldset>
    <input type='hidden' name='my-item-id' value='Bob Dylan - Lay Lady Lay' />
    <input type='hidden' name='my-item-name' value='Bob Dylan - Lay Lady Lay' />
    <input type='hidden' name='my-item-price' value='30' />
    <input type='hidden' name='my-item-qty' value='1' />
    <input type='hidden' name='my-item-url' value='' />
    <input type='submit' name='my-add-button' value='Add to cart' class='button' />
  </fieldset>
</form>

    </li>
    <li class="desc">
    <strong>Jay Z - American Gangster</strong><br />
    Nimble wordplay describing the hustle over classic, triumphant beats.<br>
	Highlights: No Hook | Hello Brooklyn 2.0 | Roc Boys (And the Winner Is)<br>
	Vinyl | $15 |
		<form method='post' action='' class='jcart homepageAdd' id='addtocart'>
			<fieldset>
				<input type='hidden' name='my-item-id' value='Jay Z - American Gangster' />
				<input type='hidden' name='my-item-name' value='Jay Z - American Gangster' />
				<input type='hidden' name='my-item-price' value='15' />
				<input type='hidden' name='my-item-qty' value='1' />
				<input type='hidden' name='my-item-url' value='' />
				<input type='submit' name='my-add-button' value='Add to cart' class='button' />
			</fieldset>
		</form>
    </li>
    <li class="desc">
    <strong>Fucked Up - David Comes To Life</strong><br />
    A 4 act concept album that shows impressive range for a hardcore punk band.<br>
    Highlights: Turn the Season | Serve Me Right | Life in Paper | One More Night<br>
    Vinyl | $15 |
		<form method='post' action='' class='jcart homepageAdd' id='addtocart'>
			<fieldset>
				<input type='hidden' name='my-item-id' value='Fucked Up - David Comes To Life' />
				<input type='hidden' name='my-item-name' value='Fucked Up - David Comes To Life' />
				<input type='hidden' name='my-item-price' value='15' />
				<input type='hidden' name='my-item-qty' value='1' />
				<input type='hidden' name='my-item-url' value='' />
				<input type='submit' name='my-add-button' value='Add to cart' class='button' />
			</fieldset>
		</form>	
    </li>
    <li class="desc">
    <strong>Steely Dan - Can't Buy A Thrill</strong><br />
    Breezy yet complex jazz-rock.<br>
	Highlights: Dirty Work | Do It Again | Reelin' in the Years<br>
	Vinyl | $15 |
		<form method='post' action='' class='jcart homepageAdd' id='addtocart'>
			<fieldset>
				<input type='hidden' name='my-item-id' value='Steely Dan - Can't Buy A Thrill' />
				<input type='hidden' name='my-item-name' value='Steely Dan - Can't Buy A Thrill' />
				<input type='hidden' name='my-item-price' value='15' />
				<input type='hidden' name='my-item-qty' value='1' />
				<input type='hidden' name='my-item-url' value='' />
				<input type='submit' name='my-add-button' value='Add to cart' class='button' />
			</fieldset>
		</form>	
	</li>
	
    <li class="desc">
    <strong>Billy Joel - The Stranger</strong><br />
    Classically-trained storyteller Joel at his best.<br>
	Highlights: Movin' Out (Anthony's song) | Scenes from an Italian Restaurant<br>
	Vinyl | $100 |
		<form method='post' action='' class='jcart homepageAdd' id='addtocart'>
			<fieldset>
				<input type='hidden' name='my-item-id' value='Billy Joel - The Stranger' />
				<input type='hidden' name='my-item-name' value='Billy Joel - The Stranger' />
				<input type='hidden' name='my-item-price' value='100' />
				<input type='hidden' name='my-item-qty' value='1' />
				<input type='hidden' name='my-item-url' value='' />
				<input type='submit' name='my-add-button' value='Add to cart' class='button' />
			</fieldset>
		</form>	
    </li>
    <li class="desc">
    <strong>Black Lips - Arabia Mountain</strong><br />
    Latest release from the American revivalist garage punks.<br>
	Highlights: Family Tree | Modern Art | Bicentennial Man<br>
	Vinyl | $20 |
		<form method='post' action='' class='jcart homepageAdd' id='addtocart'>
			<fieldset>
				<input type='hidden' name='my-item-id' value='Black Lips - Arabia Mountain' />
				<input type='hidden' name='my-item-name' value='Black Lips - Arabia Mountain' />
				<input type='hidden' name='my-item-price' value='20' />
				<input type='hidden' name='my-item-qty' value='1' />
				<input type='hidden' name='my-item-url' value='' />
				<input type='submit' name='my-add-button' value='Add to cart' class='button' />
			</fieldset>
		</form>	
	</li>    
    <li class="desc">
    <strong>Bruce Springsteen - Nebraska</strong><br />
    Stripped-down folk songs about the dark side of American living.<br>
	Highlights: Atlantic City | Johnny 99 | Highway Patrolman<br>
	Vinyl | $25 |
		<form method='post' action='' class='jcart homepageAdd' id='addtocart'>
			<fieldset>
				<input type='hidden' name='my-item-id' value='Bruce Springsteen - Nebraska' />
				<input type='hidden' name='my-item-name' value='Bruce Springsteen - Nebraska' />
				<input type='hidden' name='my-item-price' value='25' />
				<input type='hidden' name='my-item-qty' value='1' />
				<input type='hidden' name='my-item-url' value='' />
				<input type='submit' name='my-add-button' value='Add to cart' class='button' />
			</fieldset>
		</form>
	</li>
    <li class="desc">
    <strong>The Cars - Candy-O</strong><br />
    Spazzed-out new wave with rockin' hooks.<br>
	Highlights: Let's Go | Candy-O | Lust for Kicks<br>
	Vinyl | $20 |
		<form method='post' action='' class='jcart homepageAdd' id='addtocart'>
			<fieldset>
				<input type='hidden' name='my-item-id' value='The Cars - Candy-O' />
				<input type='hidden' name='my-item-name' value='The Cars - Candy-O' />
				<input type='hidden' name='my-item-price' value='20' />
				<input type='hidden' name='my-item-qty' value='1' />
				<input type='hidden' name='my-item-url' value='' />
				<input type='submit' name='my-add-button' value='Add to cart' class='button' />
			</fieldset>
		</form>
	</li>
  </ul>
</div>
<div id="jcart-tooltip">Item Added!</div>    
<?php
include('side2-footer.htm'); 
?>