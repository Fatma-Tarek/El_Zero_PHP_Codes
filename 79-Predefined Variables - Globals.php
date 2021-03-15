<?php
//================================== SUPER GLOBAL ================================
// Predefined Variables - Globals
// Super Global
//======================================================================================
// Global scope 
$name = "Fatma";

function testFunc(){
	
	//$name1 = "Tarek";
    $GLOBALS['name1'] = "Tarek";
}

testFunc();
echo $name1;
echo "<br>";
echo $name;
// echo $name1; // ERROR XXXX
echo "<br>";

$last = "Omran";
function test(){
	$last ="Omran 2";
	echo $name . "<br>"; /// ERROR will give us error 
	echo $GLOBALS['name'] ."<br>";
	echo "Local Variable: " . $last . "<br>";
	echo "Global Variable:" . $GLOBALS['last'];
	
}

test();