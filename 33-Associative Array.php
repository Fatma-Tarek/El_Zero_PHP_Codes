<?php
//============================================ Associative Array ====================================
// Array 
// [ 2 ] Associative Array
//Syntax array(
//	key1 => value1,
//	key2 => value2,
//	key3 => value3,
//	key4 => value4,
//  );
//======================================================================================================

//=============================================== Notes ================================================
//	key must be integer of string ----------> No Object or array 
//  Key must be unique no repeated unlike value 
//========================================================================================================

$langs = array(
	"Html"	 =>"60%",
	"Html5"  =>"50%",
	"Css"    =>"80%",
	"Css3"   =>"90%",
	"PHP"    =>"100%",
	"Python" =>"80%",
);

foreach($langs as $value)
{
	echo $value ."<br>";
}
//=====================================================
echo "<ul>";
foreach($langs as $key => $value)
{
	echo "<li>". $key ."      => ".$value ."</li>";
}
echo "</ul>";

//=====================================================
echo "<ul>";
foreach($langs as $key => $progress)
{
	echo "<li>". $progress ."</li>";
}
echo "</ul>";

//=====================================================
echo "<ul>";
foreach($langs as $key => $progress)
{
	echo "<li>". $key."</li>";
}
echo "</ul>";
//=====================================================
$langs[]="MySql"; //wrong logic 
$langs[]="MySql"; //wrong logic 
$langs[]="MySql"; //wrong logic 

$langs["MySql"]= "50%";
echo "<ul>";
echo "================== After Adding New items ==========================";
foreach($langs as $key => $value)
{
	echo "<li>". $key ."      => ".$value ."</li>";
}
echo "</ul>";

//=====================================================
//============================================================================
//	Notice different between 
//   "10.6"	 =>"60%",
//	  10.6	 =>"70%",
//  true     =>"80%",
//	false    =>"70%",
//	null      =>"Nothing",
//============================================================================
echo "	Notice different between \"10.6\" =>\"60%\" and  10.6 =>\"70%\",<br>";
echo "	Notice different between true =>\"80%\" and false =>\"70%\" and  null  =>\"Nothing\"<br>";
echo "	Notice same key of PHP \"PHP\"    =>\"100%\", \"PHP\"   =>\"50%\",	\"PHP\"    =>\"30%\",  So key must be unique <br><br>";
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
foreach($langs as $key => $value)
{
	echo "<li>". $key ."      => ".$value ."</li>";
}
echo "</ul>";


echo "<pre>";
print_r($langs);
echo "</pre>";
