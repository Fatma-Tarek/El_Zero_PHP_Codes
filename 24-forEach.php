<?php 
//===========================Special condition Loop with Array =================================


//============================ Syntax [1] For Indexed Arrays ===================================
//	
//	foreach ($array as $value)
//    {
//	 //code To be Executed 
//	  }
//===================================================================================================

//============================ Syntax [2] For Associative Arrays ====================================
//	Syntax [2] For Associative Arrays 
//	
//	foreach ($array as $key => $value)
//    {
//	 //code To be Executed 
//	}
//===================================================================================================


//========================================= Indexed Arrays ========================================================

$countries = array ("Eqypt","Sudan","Syria","Japan");
	foreach($countries as $value)
	{
		echo $value ."<br>";
	}


//================================================= Associative Array ==============================================

$countries1 = array (
	"Eg"=>"Eqypt",
	"su"=>"Sudan",
	"Sy"=>"Syria",
	"Jp"=>"Japan"
);
//================= Associative Array 1 ==============================
	foreach($countries1 as $key => $value)
	{
		echo $key ." => ". $value ."<br>";
	}
//================= Associative Array 2 ==============================
	foreach($countries1 as $key)
	{
		echo $key . "<br>";
	}
//================= Associative Array 3 ==============================
	foreach($countries1 as  $value)
	{
		echo $value ."<br>";
	}
//================= Associative Array 4==============================
	foreach($countries1 as $key => $value)
	{
		echo $key ."<br>";
	}
//================= Associative Array  5 ==============================
	foreach($countries1 as $value => $keyA )
	{
		echo $keyA ."<br>";
	}