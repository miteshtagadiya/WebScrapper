<?php

	$itemsx = array();	
	$final = array();

//83
	$pages = 200;  

$limit = ceil($pages/24);
	$items = array();	
for($z = 61 ; $z <=73; $z++){

$html1 = file_get_contents("https://exchange.shopify.com/shops".'?page='.$z); 
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
}


//header( "Content-Type: application/vnd.ms-excel" );
//header( "Content-disposition: attachment; filename=spreadsheet.xls" );

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
			$items9[] = trim($row->nodeValue);
		}
	}
	
	$scriptRow = $scriptDOMXPath->query('//div[@class="long-form-content"]/p');
	//check
	$items101= array();
	if($scriptRow->length > 0){
	//echo "SOCIAL MEDIA"."<br/>";	
		foreach($scriptRow as $row){
			//echo $row->nodeValue . "<br/>";
			$items101[] = trim($row->nodeValue);
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
			$items102[] = trim($row->nodeValue);
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
<center>
<h2>
<?php
$name =$items0[0];	
$name1;
for($x = 0 ; $x<count($items0) ; $x++){
	$name1[] = array($items0[$x]);
// echo $items0[$x]."<br />"; 
} 
?>
</h2>
<!-- <h3>FINANCIALS AND TRAFFIC</h3> -->
<table style="border: 1px solid black">

	

<?php

$programme_array;	
	
for($x = 0 ; $x<count($items) ; $x++){
 //echo "<th>".$items[$x]."</th>"; 
	$programme_array[] = array(trim($items[$x]) => trim($items1[$x]));	
} 
//echo "<tr>";
for($y = 0 ; $y<count($items1) ; $y++){
 //echo "<td style='border: 1px solid black'>".$items1[$y]."</td>"; 
} 
//echo "</tr>";	
//echo json_encode($programme_array);
?>


</table>	

<!-- <h3>BUSINESS EXPENSES</h3> -->
<table style="border: 1px solid black">


<?php
$business;
	
for($x = 0 ; $x<count($items2) ; $x++){
 //echo "<th>".$items2[$x]."</th>";
	$business[] = array(trim($items2[$x]) => trim($items21[$x]));	
} 
//echo "<tr>";
for($y = 0 ; $y<count($items21) ; $y++){
 //echo "<td style='border: 1px solid black'>".$items21[$y]."</td>"; 
} 
//echo "</tr>";	
//	echo json_encode($business);
	
	

?>

</table>


<!-- <h3>SALES AND MARKETING</h3>-->
<table style="border: 1px solid black">


<?php
$marketing;
	
for($x = 0 ; $x<count($items3) ; $x++){
// echo "<th>".$items3[$x]."</th>"; 
} 
	
//echo "<tr>";
for($y = 0 ; $y<count($items4) ; $y++){
	$marketing[] = array(trim($items4[$y]));
 //echo "<td style='border: 1px solid black'>".$items4[$y]."</td>";
} 
//echo "</tr>";
//	echo json_encode($marketing);
?>
</table>

<!-- <h3>WHAT’S INCLUDED IN THE SALE</h3> -->
<table style="border: 1px solid black">


<?php
$included;
//echo "<tr>";
for($y = 0 ; $y<count($items5) ; $y++){
	$included[] = array(trim($items5[$y]));
 //echo "<td style='border: 1px solid black'>".$items5[$y]."</td>"; 
} 
//echo "</tr>";
//	echo json_encode($included);
?>
</table>

<!--
<h3>SOCIAL MEDIA & 
FEATURES</h3> -->
<table style="border: 1px solid black">

<?php

$social;
for($x = 0 ; $x<count($items6) ; $x++){
	$social[] = array(trim($items6[$x]) => trim($items7[$x]));
// echo "<th>".$items6[$x]."</th>"; 
} 
//echo "<tr>";
for($y = 0 ; $y<count($items7) ; $y++){
 //echo "<td style='border: 1px solid black'>".$items7[$y]."</td>"; 
} 
//echo "</tr>";	
//	echo json_encode($social);
?>
</table>


<!-- <h3>APPS</h3> -->
<table style="border: 1px solid black">

<?php
	
$apps1;	
$merge = array_merge($items8, $items9);

//echo "<tr>";
for($y = 0 ; $y<count($merge) ; $y++){
	$apps1[] = array(trim($merge[$y]));
 //echo "<td style='border: 1px solid black'>".$merge[$y]."</td>"; 
} 
//echo "</tr>";
//	echo json_encode($apps1);
?>
</table>

<!-- <h3>GENERAL DESCRIPTION</h3> -->
<table style="border: 1px solid black">

<?php
	
$general;	

//echo "<tr>";
for($y = 0 ; $y<count($items101) ; $y++){
	$general[] = array(trim($items101[$y]));
 //echo "<td style='border: 1px solid black'>".$items101[$y]."</td>";
} 
//echo "</tr>";
//	echo json_encode($general);
?>
</table>
	
<!-- <h3>About the seller</h3> -->
<table style="border: 1px solid black">

<?php

$about;	
//echo "<tr>";
for($y = 0 ; $y<count($items102) ; $y++){
	$about[] = array(trim($items102[$y]));
 //echo "<td style='border: 1px solid black'>".$items102[$y]."</td>"; 
} 
//echo "</tr>";	
//	echo json_encode($about);
?>
</table>
	
<table>
	<?php
	//echo json_encode(
    //array(
	//	'name' => $name,
      //  'FINANCIALS AND TRAFFIC' => $programme_array,
       //	'BUSINESS EXPENSES' => $business,
        //'SALES AND MARKETING' => $marketing,
		//'Included' => $included,
		//'socialmedia' => $social,
		//'apps' => $apps1,
		//'generaldesc' => $general,
		//'about' => $about
    //)
//);
	$link = 'https://exchange.shopify.com'.$itemsx[$z];
	echo $link;
	$merge1 = array_merge(array('name'=>$name),array('Financials'=>$programme_array));
	$merge2 = array_merge($merge1,array('business'=>$business));
	$merge3 = array_merge($merge2,array('marketing'=>$marketing));
	$merge4 = array_merge($merge3,array('included'=>$included));
	$merge5 = array_merge($merge4,array('socialmedia'=>$social));
	$merge6 = array_merge($merge5,array('apps'=>$apps1));
	$merge7 = array_merge($merge6,array('description'=>$general));
	$merge8 = array_merge($merge7,array('about'=>$about));
	$merge9 = array_merge($merge8,array('path'=>$link));
	
	
	$final[] =  $merge9;
	$name = [];
	$programme_array = [];
	$business = [];
	$marketing = [];
	$included = [];
	$social = [];
	$apps1 = [];
	$general = [];
	$about = [];
	
	?>
	</table>
<?php
}
echo "<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
echo json_encode($final);

	?>

</center>
</body>
</html>
