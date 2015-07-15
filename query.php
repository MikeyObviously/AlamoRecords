<script type="text/javascript" src="thickbox.js"></script>

 <?php
 error_reporting(0);
//CONNECT TO SQL DATABASE

include 'databaseconnect.php';
//CLASS FOR PAGINATION
include 'ps_pagination.php';

//GETS WITH FORMATTING
$decade = $_GET['dec'];
$art = $_GET['art'];
$format = $_GET['format'];
$pagetemp = $_GET['page'];
$pagevinyl = $pagetemp . "'&format='vinyl''";
$pagecd = $pagetemp . "&format='CD'";

if (!isset($decade)){
  $decade=0;
}
if (!isset($art)){
  $art=0;
}
if (!isset($format)){
  $format=0;
}
	
//SQL QUERIES BASED ON PARAMETERS	
if ($decade==0){
  $sql="SELECT * FROM records WHERE artist = $art AND format = $format ORDER BY TRIM( LEADING 'a ' FROM TRIM( LEADING 'an ' FROM TRIM( LEADING 'the ' FROM LOWER( artist ) ) ) )";	
  
  if($format==2){
	$sql="SELECT * FROM records WHERE artist = $art AND format = 'CD' ORDER BY TRIM( LEADING 'a ' FROM TRIM( LEADING 'an ' FROM TRIM( LEADING 'the ' FROM LOWER( artist ) ) ) )";			
  }
  if($format==1){
	$sql="SELECT * FROM records WHERE artist = $art AND format = 'vinyl' ORDER BY TRIM( LEADING 'a ' FROM TRIM( LEADING 'an ' FROM TRIM( LEADING 'the ' FROM LOWER( artist ) ) ) )";			
  }
}
	
else{
  $sql="SELECT * FROM records WHERE format = $format AND year IN ($decade, $decade +1, $decade +2, $decade +3, $decade +4, $decade +5, $decade +6, $decade +7, $decade +8, $decade +9) ORDER BY TRIM( LEADING 'a ' FROM TRIM( LEADING 'an ' FROM TRIM( LEADING 'the ' FROM LOWER( artist ) ) ) )";	

  if($format==2){
	$sql="SELECT * FROM records WHERE format = 'CD' AND year IN ($decade, $decade +1, $decade +2, $decade +3, $decade +4, $decade +5, $decade +6, $decade +7, $decade +8, $decade +9) ORDER BY TRIM( LEADING 'a ' FROM TRIM( LEADING 'an ' FROM TRIM( LEADING 'the ' FROM LOWER( artist ) ) ) )";	
  }
  if($format==1){
	$sql="SELECT * FROM records WHERE format = 'vinyl' AND year IN ($decade, $decade +1, $decade +2, $decade +3, $decade +4, $decade +5, $decade +6, $decade +7, $decade +8, $decade +9) ORDER BY TRIM( LEADING 'a ' FROM TRIM( LEADING 'an ' FROM TRIM( LEADING 'the ' FROM LOWER( artist ) ) ) )";	
  }	
}

//PAGINATOR
$pager = new PS_Pagination($con, $sql, 25, 4, "&format=$format&dec=$decade"); // (CON,QUERY,RESULTS/PAGE,#PAGE LINKS,EXTRA PAR)
$rs = $pager->paginate(); 
$num = mysql_num_rows( $rs );  

//DISPLAY PAGE NAV IF NECESSARY
if($pager->total_rows > 25){
  echo "<div align='center' class='page-nav'>";
  echo $pager->renderFullNav();
  echo "</div>";
}
//CREATE EMPTY DIV OF SAME HEIGHT IF NOT
else {
  echo "<div style='height:26px;'> </div>";
}

echo "<div id='jcart-tooltip'>Item Added!</div>";

//START TABLE
echo "<table id='myTable' class='altrowstable'><thead>
<tr>
<th class='artistcol'>Artist</th>
<th class='albumcol'>Album</th>
<th class='yearcol'>Year</th>
<th class='formatcol'>Format</th>
<th class='pricecol'>Price</th>
</tr></thhead><tbody>";

//HELPER VARS
$altcount=1;
$rowid=1;

//LOOPING THROUGH RESULTS
while($row = mysql_fetch_array($rs)){

//MAKES ALTERNATING ROW CLASSES	
  if($altcount%2){
	echo "<tr class='oddrow'>";
  }
  else{
	echo "<tr class='evenrow'>";
  }
  echo "<td>" . $row['Artist'] . "</td>";
  echo "<td><a class='thickbox' href='albuminfo.php?artist=" . $row['Artist'] . "&album=" . $row['Album'] . "&height=500&width=700'>" . $row['Album'] . "</a></td>";
  echo "<td align='center'>" . $row['Year'] . "</td>";
  echo "<td align='center'>" . $row['Format'] . "</td>";

//ADD TO CART BUTTON
  echo "<td align='center'>\$" . $row['Price'] . "
<form method='post' action='' class='jcart' >
  <fieldset>
    <input type='hidden' name='my-item-id' value='" . $row['Artist'] . " - " . $row['Album'] . "' />
    <input type='hidden' name='my-item-name' value='" . $row['Artist'] . " - " . $row['Album'] . "' />
    <input type='hidden' name='my-item-price' value='" . $row['Price'] ."' />
    <input type='hidden' name='my-item-qty' value='1' />
    <input type='hidden' name='my-item-url' value='' />
    <input type='submit' name='my-add-button' value='Add to cart' class='button' />
  </fieldset>
</form>";

  echo "</tr>";	
  $rowid++;	
  $altcount++;
}

echo "</tbody></table>";



//DISPLAY PAGE NAV IF NECESSARY
if($pager->total_rows > 25){
  echo "<div align='center' class='page-nav'>";
  echo $pager->renderFullNav();
  echo "</div>";
}
//CREATE EMPTY DIV OF SAME HEIGHT IF NOT
else {
  echo "<div style='height:26px;'> </div>";
}

mysql_close($con);
?>