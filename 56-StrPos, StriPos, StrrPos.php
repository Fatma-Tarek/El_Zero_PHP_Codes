<?php
//====================================================================================================
// StrPos(String[required] , Find[Required], offest[optional]) // case sensetive 
// StriPos(String[required] , Find[Required], offest[optional]) // case insensetive
// StrrPos(String[required] , Find[Required], offest[optional]) // search from right 
//====================================================================================================

$str = "I love PHP so Much because PHP is Famous and cool Language";
//==================================================================================================== 
// stipos(String[required] , Find[Required], offest[optional]) // case insensetive
//==================================================================================================== 
$pos = strpos($str,"PHP");
echo $pos ."<br>";
$pos = strpos($str,"PHP",8);
echo $pos ."<br>";

//==================================================================================================== 
// stripos(String[required] , Find[Required], offest[optional]) // case insensetive
//==================================================================================================== 

$pos = stripos($str,"phP");
echo $pos ."<br>";
$pos = stripos($str,"PhP",8);
echo $pos ."<br>";

//====================================================================================================
// StrrPos(String[required] , Find[Required], offest[optional]) // search from right 
//====================================================================================================

$pos = strrpos($str,"is");
echo $pos ."<br>";
$pos = strrpos($str,"cool",8);
echo $pos ."<br>";
$pos = strrpos($str,"PHP",-35);  //skip these postion from right 
echo $pos ."<br>";