<?php 
//=================================== Indexed Array ==================================================
// sort($array_name);          // sort Alphabet men so3'er ll kebir
// sort($array,SORT_REGULAR);
// sort($array,SORT_STRING);    // deal with all elements as string even if it is integers
//
//
// rsort($array_name);          // sort Alphabet men kebir ll so3'er
// rsort($array,SORT_REGULAR);
// rsort($array,SORT_STRING); 
//=======================================================================================================


$array =array(
	"Html",
	"CSS",
	"PHP",
	"JS",
	"MySql",
	"python",
);

echo "<pre>";
print_r ($array);  // The Main Array 
echo "</pre>";

sort($array);
echo "================== SORT_ALPHABET ==================<br>";
echo "<pre>";
print_r ($array);  // The Main Array after sorting
echo "</pre>";


//===================================================================
$array =array(
	"Html",
	"CSS",
	"PHP",
	10,
	"JS",
	"MySql",
	5,
	"python",
	2,
);

sort($array);

echo "<pre>";
print_r ($array);  // The Main Array after sorting
echo "</pre>";


//===================================================================
echo "================== SORT_REGULAR ==================<br>";
sort($array,SORT_REGULAR);
echo "<pre>";
print_r ($array);  // The Main Array after sorting
echo "</pre>";

echo "================== SORT_STRING ==================<br>";
sort($array,SORT_STRING);
echo "<pre>";
print_r ($array);  // The Main Array after sorting
echo "</pre>";

//===============================================================================================================

$array =array(
	"Html",
	"CSS",
	"PHP",
	"JS",
	"MySql",
	"python",
	10, 
	35,
	8,
);

rsort($array);

echo "<pre>";
print_r ($array);         // The Main Array after rsorting
echo "</pre>";


//=============================================================================================================

echo "================== RSORT_REGULAR ==================<br>";
rsort($array,SORT_REGULAR);
echo "<pre>";
print_r ($array);         // The Main Array after sorting
echo "</pre>";

echo "================== RSORT_STRING ==================<br>";
rsort($array,SORT_STRING);
echo "<pre>";
print_r ($array);        // The Main Array after sorting
echo "</pre>";

