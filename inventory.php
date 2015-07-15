<?php
include('head-side-contact.htm');
error_reporting(0);
//RETRIEVE AND FORMAT ARTIST
$art = $_GET['art'];
if (!isset($art)){
	$art=0;
	}
	else{
$art=str_replace(" ", "%20", $art);	
}
$artstring = "1&art=$art";	
$cdstring="1&format=2";
$vinylstring="1&format=1";
?>
<div class="sidebar">
  <h2>Filter Inventory</h2>
<p>By Format:
      <select name="format" id="format" onchange='getdata("1&format=",this.value, "&dec=", decade.value)'>
        <option value='0'>Both</option>
        <option  value='1'>Vinyl</option>
        <option  value='2'>CD</option>
      </select>
 &nbsp;&nbsp;&nbsp;By Decade:
      <select name="decade" id="decade" onchange='getdata("1&format=", format.value, "&dec=",this.value)'>
        <option value='0'>All</option>
        <option value='1960'>1960s</option>
        <option  value='1970'>1970s</option>
        <option  value='1980'>1980s</option>
        <option  value='1990'>1990s</option>
        <option  value='2000'>2000s</option>
        <option  value='2010'>2010s</option>
      </select>  


</div>


<div class="content2">
  <h2>Browse Full Inventory</h2>
  <p>Go digging through all our crates, or select a filter to narrow results.
</div>


<!--INVENTORY TABLE-->

  <div id="retrieved-data">
    <img id="ajaxLoader" src="images/ajax-loader.gif" />
  </div>



<script type = "text/javascript">
//LOAD INVENTORY TABLE ON STARTUP
$(function() {
  getdata("<?php echo $artstring;?>", "", "", "");
});

//LOADS INVENTORY
function getdata( pageno, extra, extra2, extra3 ){                     
  var targetURL = "query.php?page=" + pageno + extra + extra2 + extra3; 
  $('#retrieved-data').html('<p><img src="images/ajax-loader.gif" /></p>');       
  $('#retrieved-data').load( targetURL ).hide().fadeIn('slow');
}     
</script>
  
<!--END CONTAINER-->
</div>


