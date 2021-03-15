<?php
//======================================================================================
// array_unique(Array , Sorting Type) الليمتكرر بيشلوه 
//======================================================================================

$array =array("Fatma","Tarek","Ahmed","osama","BAta","Fatma","Tarek",10,"10");
echo "<pre>";
print_r ($array);
echo "</pre>";

$unique = array_unique($array);
echo "<pre>";
print_r ($unique );
echo "</pre>";

$unique = array_unique($array,SORT_STRING);
echo "<pre>";
print_r ($unique );
echo "</pre>";

$unique = array_unique($array,SORT_REGULAR);
echo "<pre>";
print_r ($unique );
echo "</pre>";

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
//Remove Elements from Associative Array depend on value not key 
$unique = array_unique($langs,SORT_REGULAR);
echo "<pre>";
print_r ($unique );
echo "</pre>";
