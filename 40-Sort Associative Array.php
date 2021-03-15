<?php
//===========================Sort Associative Array ==========================================
// asort($array_name);           // sort Alphabet men so3'er ll kebir 3la hasb el value not key 
// asort($array,SORT_REGULAR);
// asort($array,SORT_STRING);    // deal with all elements as string even if it is integers
//
//
// arsort($array_name);          // sort Alphabet men kebir ll so3'er
// arsort($array,SORT_REGULAR);
// arsort($array,SORT_STRING); 
//
//
//
// ksort($array_name);          // sort Alphabet men so3'er ll kebir 3la hasb el key not value 
// ksort($array,SORT_REGULAR);
// ksort($array,SORT_STRING);    // deal with all elements as string even if it is integers
//
//
// krsort($array_name);          // sort key Alphabet men kebir ll so3'er
// krsort($array,SORT_REGULAR);
// krsort($array,SORT_STRING); 
//=================================================================================
$array =array(
	"Html"		 =>80,
	"CSS" 		 =>10,
	"PHP"  		 =>55,
	"JS"	     =>50,
	"MySql"      =>20,
	"python"     =>30,
);
//=================================================================================
 echo "<pre>";
 print_r($array);
 echo "</pre>";

 echo"==================== Sort associative array depend on value  SORT_REGULAR ==================== <br>";
asort ($array,SORT_REGULAR);
 echo "<pre>";
 print_r($array);
 echo "</pre>";

 echo"==================== reverse Sort associative array depend on value  SORT_REGULAR ==================== <br>";
arsort ($array,SORT_REGULAR);
 echo "<pre>";
 print_r($array);
 echo "</pre>";
//sort ($array,SORT_REGULAR);
//
// echo "<pre>";
// print_r($array);
// echo "</pre>";
//=================================================================================
 echo"==================== Sort key array SORT_REGULAR ==================== <br>";
 ksort($array,SORT_REGULAR);
 echo "<pre>";
 print_r($array);
 echo "</pre>";

 echo"==================== Sort key  reverse array SORT_REGULAR ============== <br>";
 krsort($array,SORT_REGULAR);
 echo "<pre>";
 print_r($array);
 echo "</pre>";






