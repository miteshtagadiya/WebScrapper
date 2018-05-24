<?php

		header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=spreadsheet.xls" );

   $urls=  $_SERVER["QUERY_STRING"];


//get the html returned from the following url
$html = file_get_contents('https://exchange.shopify.com'.$urls); 
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
		
	$scriptRow = $scriptDOMXPath->query('//h1');
	//check
	$items0 = array();	
	if($scriptRow->length > 0){

	//echo "FINANCIALS AND TRAFFIC"."<br/>";	

		foreach($scriptRow as $row){
		//echo $row->nodeValue . "<br />";
		$items0[] = $row->nodeValue;
		}
		
	}
		
	

	$scriptRow = $scriptDOMXPath->query('//div[@class="block__content gutter-bottom--reset"]/p[@class="text-grey-lightish gutter-bottom--reset"]');
	//check
	$items = array();	
	if($scriptRow->length > 0){

	//echo "FINANCIALS AND TRAFFIC"."<br/>";	

		foreach($scriptRow as $row){
		//echo $row->nodeValue . "<br />";
		$items[] = $row->nodeValue;
		}
		
	}
	//print_r($items);	


	$scriptRow = $scriptDOMXPath->query('//div[@class="block__content gutter-bottom--reset"]/p[@class="heading--3 font-regular"]');
	//check
	$items1 = array();	
	if($scriptRow->length > 0){

	//echo "FINANCIALS AND TRAFFIC"."<br/>";	

		foreach($scriptRow as $row){
		//echo $row->nodeValue . "<br />";
		$items1[] = $row->nodeValue;
		}
		
	}
	//print_r($items1);	


	$scriptRow = $scriptDOMXPath->query('//tbody/tr/th');
	//check
	$items2 = array();
	if($scriptRow->length > 0){
	//echo "<br />"."BUSINESS EXPENSES"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items2[] = $row->nodeValue;
		}
	}


	$scriptRow = $scriptDOMXPath->query('//tbody/tr/td');
	//check
	$items21 = array();
	if($scriptRow->length > 0){
	//echo "<br />"."BUSINESS EXPENSES"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items21[] = $row->nodeValue;
		}
	}

	// marketing values
	$scriptRow = $scriptDOMXPath->query('//div[@class="grid"]/div[@class="grid__item grid__item--tablet-up-half"]/h4');
	//check
	$items3 = array();
	if($scriptRow->length > 0){
	//echo "SALES AND MARKETING"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items3[] = $row->nodeValue;
		}
	}
//	print_r($scriptRow)

	$scriptRow = $scriptDOMXPath->query('//div[@class="grid"]/div[@class="grid__item grid__item--tablet-up-half"]/p[@class="gutter-bottom"]');
	//check
	$str;
	$items4 = array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items4[] = $row->nodeValue;
		}
		
		$str = join(',', $items4);
		
		
	}
	//echo $str;
	//print_r($items41);

	$scriptRow = $scriptDOMXPath->query('//ul/div[@class="grid"]/div[@class="grid__item grid__item--tablet-up-half"]/li');
	//check
	$str1;
	$items5= array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items5[] = $row->nodeValue;
		}
		$str1 = join(',', $items5);
	}
	
	$scriptRow = $scriptDOMXPath->query('//div[@class="grid"]/div[@class="grid__item grid__item--tablet-up-half gutter-bottom"]/h4[@class="body-text text-grey-lightish gutter-bottom--quarter"]');
	//check
	$items6= array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items6[] = $row->nodeValue;
		}
	}
	
	$scriptRow = $scriptDOMXPath->query('//div[@class="grid"]/div[@class="grid__item grid__item--tablet-up-half gutter-bottom"]/p[@class="heading--4 gutter-bottom--reset"]');
	//check
	$items7= array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items7[] = $row->nodeValue;
		}
	}	

	$scriptRow = $scriptDOMXPath->query('//div[@class="gutter-bottom"]/p[@class="heading--4 gutter-bottom--quarter"]');
	//check
	$items8= array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items8[] = $row->nodeValue;
		}
	}	

	$scriptRow = $scriptDOMXPath->query('//p[@class="heading--4 gutter-bottom"]');
	//check
	$items9= array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items9[] = $row->nodeValue;
		}
	}

	//$scriptRow = $scriptDOMXPath->query('//p[@class="heading--3 font-regular"]');
	//check
	//if($scriptRow->length > 0){
	//	foreach($scriptRow as $row){
	//		echo $row->nodeValue . "<br/>";
	//	}
	//}

	//get all the h1's
	//$scriptRow = $scriptDOMXPath->query('//h1');
	//check
	//if($scriptRow->length > 0){
	//	foreach($scriptRow as $row){
	//		echo $row->nodeValue . "<br/>";
	//	}
	//}
}
?>
<html>
<body>
<center>
<h2>
<?php

for($x = 0 ; $x<count($items0) ; $x++){
 echo $items0[$x]."<br />"; } 
?>
</h2>
<h3>FINANCIALS AND TRAFFIC</h3>
<table style="border: 1px solid black">


<?php

for($x = 0 ; $x<count($items) ; $x++){
 echo "<th>".$items[$x]."</th>"; } 
echo "<tr>";
for($y = 0 ; $y<count($items1) ; $y++){
 echo "<td style='border: 1px solid black'>".$items1[$y]."</td>"; } 
echo "</tr>";	
?>

</tr>
</table>


<h3>BUSINESS EXPENSES</h3>
<table style="border: 1px solid black">


<?php

for($x = 0 ; $x<count($items2) ; $x++){
 echo "<th>".$items2[$x]."</th>"; } 
echo "<tr>";
for($y = 0 ; $y<count($items21) ; $y++){
 echo "<td style='border: 1px solid black'>".$items21[$y]."</td>"; } 
echo "</tr>";	
?>

</tr>
</table>


<h3>SALES AND MARKETING</h3>
<table style="border: 1px solid black">

<th>Marketing strategies & Online selling methods</th>
<?php

//for($x = 0 ; $x<count($items3) ; $x++){
// echo "<th>".$items3[$x]."</th>"; } 
echo "<tr>";
//for($y = 0 ; $y<count($items4) ; $y++){
 echo "<td style='border: 1px solid black'>".$str."</td>"; 
echo "</tr>";	
?>

</tr>
</table>

<h3>WHAT’S INCLUDED IN THE SALE</h3>
<table style="border: 1px solid black">


<?php

echo "<tr>";
//for($y = 0 ; $y<count($items5) ; $y++){
 echo "<td style='border: 1px solid black'>".$str."</td>"; 
echo "</tr>";	
?>

</tr>
</table>


<h3>SOCIAL MEDIA & 
FEATURES</h3>
<table style="border: 1px solid black">

<?php


for($x = 0 ; $x<count($items6) ; $x++){
 echo "<th>".$items6[$x]."</th>"; } 
echo "<tr>";
for($y = 0 ; $y<count($items7) ; $y++){
 echo "<td style='border: 1px solid black'>".$items7[$y]."</td>"; } 
echo "</tr>";	
?>
</tr>
</table>


<h3>APPS</h3>
<table style="border: 1px solid black">

<?php
$merge = array_merge($items8, $items9);
$str2 = join(',', $merge);	
	
echo "<tr>";
//for($y = 0 ; $y<count($merge) ; $y++){
 echo "<td style='border: 1px solid black'>".$str2."</td>"; 
echo "</tr>";	
?>
</tr>
</table>


</center>

<br />
<br />

<table>
<?php

$title0 = array("Marketing strategies & Online selling methods");
$title1 = array("WHAT’S INCLUDED IN THE SALE");
$title2 = array("APPS");

$merge1 = array_merge($items,$items2);
$merge11 = array_merge($merge1,$title0);
$merge2 = array_merge($merge11,$title1);
$merge3 = array_merge($merge2,$items6);
$merge4 = array_merge($merge3,$title2);

for($y = 0 ; $y<count($merge4) ; $y++){
 echo "<th style='border: 1px solid black'>".$merge4[$y]."</th>"."\t"; } 
?>
<tr>

<?php
for($y = 0 ; $y<count($items1) ; $y++){
 echo "<td style='border: 1px solid black'>".$items1[$y]."</td>"; }

for($y = 0 ; $y<count($items21) ; $y++){
 echo "<td style='border: 1px solid black'>".$items21[$y]."</td>"; } 

?>
<td style='border: 1px solid black'>
<?php

//for($y = 0 ; $y<count($items4) ; $y++){
 echo $str."<br />";

?>
</td>

<td style='border: 1px solid black'>
<?php

//for($y = 0 ; $y<count($items5) ; $y++){
 echo $str1."<br />"; 

?>
</td>

<?php

for($y = 0 ; $y<count($items7) ; $y++){
 echo "<td style='border: 1px solid black'>".$items7[$y]."</td>"; } 
?>

<td style='border: 1px solid black'>
<?php

//for($y = 0 ; $y<count($merge) ; $y++){
 echo $str2."<br />";

?>
</td>

</tr>

</table>

</body>
</html>