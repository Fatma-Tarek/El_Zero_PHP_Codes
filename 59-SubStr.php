<?php
//===========================================================================
// SubStr(string[Required] ,Start_index [Required],length[optional])
//
//===========================================================================

$str ="I love PHP so Much because PHP is Famous And cool";
$piece = substr($str, 18);
echo $piece;
echo "<br>";

$piece = substr($str, 18,12);
echo $piece;
echo "<br>";

#start from inexe -6 from right then get 4 Character only 
$piece = substr($str,-6,4);
echo $piece;
echo "<br>";
#start from inexe -6 from right then remove 4 Character from last 
$piece = substr($str,-6,-4);
echo $piece;
echo "<br>";

$piece = substr($str,-6);
echo $piece;
echo "<br>";