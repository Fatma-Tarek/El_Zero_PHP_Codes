<?php
/*

Increment / deDecrement operators 

[ ++ var ] pre Increment 

[ var ++ ] post  Increment 

[ -- var ] pre decrement 

[ var -- ] post decrement 

*/
/*
 	like & Dislike 
	Counter 
	buy products 

*/
//============================ NOTES ========================
// INCREMENT AND DECREMENT NOT AFFECTS ARRAY OR OBJECTS 
// DECREMENT NOT AFFECTS ON NULL
// INCREMENT AFFECTS ON NULL =1
// INCREMENT AND DECREMENT only DEAL WITH NUMBERS & ARRAYS
//===========================================================
echo " pre Increment  \$var = 10 <br>";
$var = 10;
echo ++$var ."<br>"; //11
echo ++$var ."<br>"; //12
echo " post  Increment \$var2 = 20 <br>";
$var2 = 20;
echo $var2++ ."<br>";
echo $var2++ ."<br>";

echo " pre decrement  \$var = $var  <br>"; //11
echo --$var ."<br>";
echo --$var ."<br>";
echo " post decrement \$var2 = $var2 <br>";
echo $var2-- ."<br>";
echo $var2-- ."<br>";


echo " post decrement \$var3 = NULL <br>";
$var3 =NULL;
echo "Inecrement on NULL ". --$var3 ."<br>";
echo ++$var3 ."<br>";













