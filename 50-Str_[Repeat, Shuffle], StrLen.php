<?php
//===========================================================================
// Str_repeat: str_repeat(String[required], Repeat[Required]);
// Str_suffle :str_suffle(string)  //random passowrd application 
// StrLen : strlen(string)
//===========================================================================

$str = "Fatma <br>";
$repeat = str_repeat($str,5);
echo $repeat;

$str= "Fatma Tarek";
$shuffle = str_shuffle($str);
echo $shuffle;

echo "<br>";
$len =strlen($str);
echo $len;