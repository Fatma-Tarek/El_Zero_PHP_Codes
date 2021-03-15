<?php
//================================ Arrays ===============================
// [ 1 ] Indexed Array
// [ 2 ] Associative Array 
// [ 3 ] Multidiminsional Array 
//=======================================================================

//================================ Notes ================================
// echo string array can't print 
//=======================================================================


//================================ Syntax ================================
// $workers = array("fatma","tarek","omran");
// $workers[] = "Fatma";
//=======================================================================

/*

$worher1 = "Fatma";
$worher2 = "Tarek";
$worher3 = "Omran";


echo "<ul>";
echo "<li>". $worher1 ."</li>";
echo "<li>". $worher2 ."</li>";
echo "<li>". $worher3 ."</li>";
echo "</ul>";

*/

$workers = array("Fatma","Tarek","Abdallah","Sherif","Omran");
//error echo $workers;
print_r($workers);

//===================== Nice Format =====================================
echo "<pre>";
print_r($workers);
echo "</pre>";
echo $workers[2];
echo "<br>";
echo $workers[3];
//========================================================================
echo "<br>";
$arr[]="work";
$arr[]="job";
print_r($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
//========================================================================
$workers = array("Fatma","Tarek","Abdallah","Sherif","Omran");
$workers[]="Hi";
$workers[]="Hello";
$workers[]="welcome";
echo "<pre>";
print_r($workers);
echo "</pre>";
//========================================================================
$workers[12]="welcome";
echo "<pre>";
print_r($workers);
echo "</pre>";
//================================ Notes ================================
//echo $workers[10];  //Undefined array key 10

//==============================Integer Array ================================
$workers1 = array(1,2,3,4);
echo gettype($workers1);
echo "<br>";
var_dump($workers1);
echo "<br>";

//============================= Mixed Array ================================
$workers2 = array(1,2,3,4,"Fatma","Tarek");
echo "<br>";
echo gettype($workers2);
echo "<br>";
var_dump($workers2);
echo "<br>";

//===========================================================================
$langs = array("Html","Html5","Css","Css3",array("JQuery","AngularJs","Ajax"),"PHP","Python");
echo "<pre>";
print_r($langs);
echo "</pre>";
echo $langs[4][0];
echo "<br>";
print_r($langs[4][0]);
echo "<br>";
//==========================================================================
echo "============================ForEach ============================<br>";
$langs = array("Html","Html5","Css","Css3","PHP","Python");
foreach($langs as $value)
{
	echo $value ."<br>";
}
echo "============================ForEach with List ============================<br>";
$langs = array("Html","Html5","Css","Css3","PHP","Python");
$langs[] = "bootstap";
$langs[] = "MySql";
$langs[0] = "Hml";
$langs[count($langs)-1] = "Html";

echo "<ul>";
foreach($langs as $value)
{
	echo "<li>" . $value ."</li>";
}
echo "</ul>";	

for($lang=0 ;$lang < count($langs);$lang++)
{
	echo "<li>". $langs[$lang]. "</li>";
	
}
	echo "</ul>";
	
	
	
	
	
	
	
	