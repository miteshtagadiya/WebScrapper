<?php
//get the html returned from the following url
if(isset($_POST['submit'])){
	$url = $_POST['url'];
	$pages = $_POST['pages'];  

$limit = ceil($pages/24);
	$items = array();	
for($z = 1 ; $z <$limit; $z++){
$html = file_get_contents($url.'?page='.$z); 
//init DOMDocument
$scriptDocument = new DOMDocument();
//disable libxml errors


libxml_use_internal_errors(TRUE); 
//check if any html is actually returned



if(!empty($html)){ 
	//loadHTML
	$scriptDocument->loadHTML($html);
	//clear errors for yucky html
	libxml_clear_errors(); 
	//init DOMXPath
	$scriptDOMXPath = new DOMXPath($scriptDocument);
	//get all the h2's with an id
		

	$scriptRow = $scriptDOMXPath->query('//div[@class="grid grid--equal-height"]/div[@class="grid__item grid__item--tablet-up-third grid__item--desktop-up-quarter grid__item--wide-up-quarter gutter-bottom category-tile-grid-item layout-flex"]/a[@class="layout-fill-space shop-tile"]');
	//check

	if($scriptRow->length > 0){

	//echo "FINANCIALS AND TRAFFIC"."<br/>";	

		foreach($scriptRow as $row){
		$row->getAttribute('href') . "<br />";
		$items[] = $row->getAttribute('href');
		//print_r($row);
		}
		
	}
	//print_r($items);	

}
}
}
?>
<html>
<body>
<center>

<table>
<?php

for($y = 0 ; $y<count($items) ; $y++){
?><form method="get" action=""> <?php
 echo "<tr>"."<td style='border: 1px solid black'>"."<input type=hidden name=url value=<?= $items[$y];  ?>"."<button type='submit' name='submit' value=<?= $items[$y]; ?>".'<a href="' . htmlspecialchars("index1.php?" .$items[$y]) . '">'.$items[$y]."</button>"."</td>"."</tr>"; 
?>
</form>
<?php
} 

?>
</table>





</center>
</body>
</html>
