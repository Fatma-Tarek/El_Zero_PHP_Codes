<?php
//============================== Syntax Multidiminsional Array ============================
// Arrays
// [ 3 ] Multidiminsional Array
/*
	array(
		array(Element,Element,Element),
		array(Element,Element,Element),
		array(Element,Element,Element)	
	);
*/

$diet = array(
	array("Apple","Banana","Milk"), //0
	array("Meat","Apple","Egg"),    //1
	array("Apple","Fish"),          //2
	array("Rice","Apple"),          //3
	array("Apple","Bread","Milk"),  //4
	array(                          //5
		array(1,2,3)                //5 0
	),
	array(                          //6
		array("Fatma","Tarek","Omran"),// 6 0
		array("Manal","Manar","Mohamed"),// 6 1
	),
);

echo "<pre>";
print_r($diet);
echo "</pre>";

echo $diet[2][1] ."<br>";
echo $diet[5][0][1] ."<br>";
echo $diet[6][0][1];

//============================= Associative Array ============
$diet2 =array(
	"Day one" => array("Milk","banana","Kiwi"),
	"Day two" => array("Meat","water","Mango"),
	"Day three" => array("rice","chicken","juice",
					array(
					"salt" => "10%",
					"suger" => "20%",
					"water" => "30%"
					),
	            ),
 );
echo "<br>";
echo $diet2["Day one"][1];
echo $diet2["Day three"][3]["suger"]."<br>";




$diet3 = array(
    "Day one" => array("Milk","banana","Kiwi"),
	"Day two" => array("Meat","water","Mango"),
	"Day three" => array("rice","chicken","juice"));

foreach($diet3 as $key => $value)
{
	echo "<h3>".$key."</h3>";
	foreach($diet3[$key] as $value2)
	{
	    echo "-" . ($value2)."<br>";
	}
	
}


