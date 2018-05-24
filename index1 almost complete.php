<?php

	$itemsx = array();	

$html1 = file_get_contents("https://exchange.shopify.com/categories/dropshipping-websites-for-sale"); 
//init DOMDocument
$scriptDocument = new DOMDocument();
//disable libxml errors


libxml_use_internal_errors(TRUE); 
//check if any html is actually returned



if(!empty($html1)){ 
	//loadHTML
	$scriptDocument->loadHTML($html1);
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
		$itemsx[] = $row->getAttribute('href');
		//print_r($row);
		}
		//print_r($itemsx);
		
	}
	//print_r($items);	


}




header( "Content-Type: application/vnd.ms-excel" );
header( "Content-disposition: attachment; filename=spreadsheet.xls" );

   $urls=  $_SERVER["QUERY_STRING"];

for($z = 0 ;$z<count($itemsx) ; $z++){
//get the html returned from the following url
$html = file_get_contents('https://exchange.shopify.com'.$itemsx[$z]); 
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
	$items4 = array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items4[] = $row->nodeValue;
		}
	}

	$scriptRow = $scriptDOMXPath->query('//ul/div[@class="grid"]/div[@class="grid__item grid__item--tablet-up-half"]/li[@class="gutter-bottom"]');
	//check
	$items5= array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items5[] = $row->nodeValue;
		}
	}
	//print_r($items5);
	
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
	
	$scriptRow = $scriptDOMXPath->query('//div[@class="long-form-content"]/p');
	//check
	$items101= array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items101[] = $row->nodeValue;
		}
	}
	//print_r($items101);
	
	$scriptRow = $scriptDOMXPath->query('//div[@class="sidebar-box seller background-off-white"]/div[@class="seller__content"]');
	//check
	$items102= array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items102[] = $row->nodeValue;
		}
	}
	//print_r($items102);
	
	
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

<?php
}
	?>
<?php
$join1 = array();
for($x = 0 ; $x<count($items) ; $x++){
 $join1[] = $items[$x].":".$items1[$x]; } 
	
	//print_r($join1);
	$financial = array(join("\n", $join1));
	
$join2 = array();
for($x = 0 ; $x<count($items2) ; $x++){
 $join2[] = $items2[$x].":".$items21[$x]; } 
	
	//print_r($join2);
	$business = array(join("\n", $join2));
	
$join3 = array();
for($x = 0 ; $x<count($items4) ; $x++){
 $join3[] = $items4[$x]; } 
	
	//print_r($join3);
	$sales = array(join("\n", $join3));	
	
$join4 = array();
for($x = 0 ; $x<count($items5) ; $x++){
 $join4[] = $items5[$x]; } 
	
	//print_r($join4);
	$whatincludes = array(join("\n", $join4));	
	
	
$join5 = array();
for($x = 0 ; $x<count($items6) ; $x++){
 $join5[] = $items6[$x].":".$items7[$x]; } 
	
	//print_r($join5);
	$social = array(join("\n", $join5));
	$merge = array_merge($items8, $items9);
	
$join6 = array();
for($x = 0 ; $x<count($merge) ; $x++){
 $join6[] = $merge[$x]; } 
	
	//print_r($join6);
	$apps = array(join("\n", $join6));	
	
	
$join7 = array();
for($x = 0 ; $x<count($items101) ; $x++){
 $join7[] = $items101[$x]; } 
	
	//print_r($join7);
	$general = array(join("\n", $join7));
	
$join8 = array();
for($x = 0 ; $x<count($items102) ; $x++){
 $join8[] = $items102[$x]; } 
	
	//print_r($join8);
	$about = array(join("\n", $join8));	
	
	$final1 = array_merge($financial,$business);
	$final2 = array_merge($final1,$sales);
	$final3 = array_merge($final2,$whatincludes);
	$final4 = array_merge($final3,$social);
	$final5 = array_merge($final4,$apps);
	$final6 = array_merge($final5,$general);
	$final7 = array_merge($final6,$about);
	
	$itemsx[] = $final7;
?>
	
<table>
	<tr>
		<th>
			FINANCIALS AND TRAFFIC
		</th>
		<th>
			BUSINESS EXPENSES
		</th>
		<th>
			SALES AND MARKETING
		</th>
		<th>
			WHAT’S INCLUDED IN THE SALE
		</th>
		<th>
			SOCIAL MEDIA & FEATURES
		</th>
		<th>
			APPS
		</th>
		<th>
			GENERAL DESCRIPTION
		</th>
		<th>
			About the seller
		</th>
	</tr>
	<tr>
		<?php
			for($a = 0 ; $a<count($final7) ; $a++){
			echo "<td>".$final7[$a]."</td>";
			}
		?>
	</tr>
	</table>	
	
	</body>
</html>
