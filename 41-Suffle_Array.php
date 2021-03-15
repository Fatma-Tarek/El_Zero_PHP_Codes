<?php
//=============================================================================================
// array_reverse($langs); by default false so index from 0 --> end 
// array_reverse($langs,true);  so index from end --> 0
// Don't affect on main array 
//=============================================================================================

//=============================================================================================
// shuffle($langs); Randam ex question , kotshina 
//=============================================================================================

$langs =array(
	"Html",		 
	"CSS",	 
	"PHP",  		
	"JS",	     
	"MySql",     
	"python",     
);
echo "============= Main Array ===============<br>";
echo "<pre>";
print_r($langs);
echo "</pre>";

echo "============= Array after array_reverse but index from 0 to end ===============<br>";
$reversed = array_reverse($langs);
echo "<pre>";
print_r($reversed);
echo "</pre>";

echo "============= Array after array_reverse but index from end to 0 ===============<br>";
$reversed = array_reverse($langs,true);
echo "<pre>";
print_r($reversed);
echo "</pre>";

echo "======  shuffle Array  =====<br>";
shuffle($langs);
echo "<pre>";
print_r($langs);
echo "</pre>";


