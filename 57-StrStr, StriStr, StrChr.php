<?php
//==========================================================
// StrStr(string [Required], Search [Required], Before_Search[ Optional]) // case sensetive 
//
// StriStr(string [Required], Search [Required], Before_Search[ Optional]) //case Insenstive
//
// StrChr // Same as StrStr
//==========================================================

$str ="I love PHP so much because PHP is cool";
echo $str ."<br>";
//==========================================================
// StrStr(string [Required], Search [Required], Before_Search[ Optional])
//==========================================================
$char =strstr($str,"so"); #return from so to end of string default value is false 
echo $char ."<br>";
$char =strstr($str,"so",false);
echo $char ."<br>";
$char =strstr($str,"so",true);
echo $char ."<br>";

$str ="Fatma@gmail.com";
$char =strstr ($str,"@");
echo $char ."<br>";
$char =strstr ($str,"@",true);
echo $char ."<br>";

//==========================================================
// StriStr(string [Required], Search [Required], Before_Search[ Optional]) //case Insenstive
//==========================================================
$str ="I love PHP so much because PHP is cool";
$char =stristr($str,"SO"); #return from so to end of string default value is false 
echo $char ."<br>";


