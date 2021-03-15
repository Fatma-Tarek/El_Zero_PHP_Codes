<?php

//========================== Syntax of Search Method ==========================================
//  [ 1 ] in_array(Needle ,Haystack ,Type)    // True or False
//		  Needle : Key look about it 
//		  Haystack : Array which search in 
//		  Type if true then mean identical
//		  if false then means not identical
//
//  [ 2 ] array_search(Needle ,HayStack ,Type)  //index of element if found
//
//  [ 3 ] array_key_exists(Needle ,HayStack )  //if indexed array check with index 0, 1, 2
//                                             //if assoative Array check with key
//==============================================================================================

$array =array(
	"Html",
	"CSS",
	"PHP",
	"JS",
	"MySql",
	"python",
	"10",
	10,
);

//========================== Syntax of in_array Method ==========================
//  [ 1 ] in_array(Needle ,Haystack ,Type)
//===============================================================================
$val = in_array("PhP",$array);
echo $val;
var_dump($val);
echo "<br>";

if(in_array("PHP",$array))
{
	echo "Yes <br>";
}
else {
	echo "No <br>";
}
//============================ Case senstive ==================================
if(in_array("Php",$array))
{
	echo "Yes <br>";
}
else {
	echo "No <br>";
}
//==============================================================================
if(in_array("10",$array,true))
{
	echo "Yes <br>";
}
else {
	echo "No <br>";
}
//==============================================================================
if(in_array(10,$array,true))
{
	echo "Yes <br>";
}
else {
	echo "No <br>";
}
//==============================================================================

//========================== Syntax of array_search Method ==========================
//  [ 2 ] array_search(Needle ,HayStack ,Type)  //index of element if found
//===================================================================================
$lang = array_search("CSS",$array,true);
var_dump($lang);
echo "<br>";
echo "Yes its Found In Index " . $lang . " And the Value Is " . $array[$lang];
	echo " <br>";	
	
//========================== Syntax of  array_key_exists Method ==========================
//  [ 3 ] array_key_exists(Needle ,HayStack )  //if indexed array check with index 0, 1, 2
//                                             //if assoative Array check with key
//                                             // result true or false boolean
//===================================================================================
var_dump(array_key_exists("CSS",$array));
echo "<br>";
if (array_key_exists("CSS",$array))
{
	echo "Yes <br>";
}
else 
{
	echo "No <br>";
}
if (array_key_exists("3",$array))
{
	echo "Yes <br>";
}
else 
{
	echo "No <br>";
}


$langs = array(
	"10.6"	 =>"60%",
	10.6	 =>"70%",
	"Html"	 =>"60%",
	"Html5"  =>"50%",
	"Css"    =>"80%",
	"Css3"   =>"90%",
	"PHP"    =>"100%",
	"PHP"    =>"50%",
	"PHP"    =>"30%",
	"Python" =>"80%",
	true     =>"80%",
	false    =>"70%",
	null      =>"Nothing",
	
);
if (array_key_exists(10.6,$langs))
{
	echo "Yes <br>";
}
else 
{
	echo "No";
}
if (array_key_exists("Python",$langs))
{
	echo "Yes <br>";
}
else 
{
	echo "No";
}
	
	
	
	
	
	
	
	
	
	
	




















	
