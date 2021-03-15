<?php
//==============================================================================
// str_word_count(String[required], Format[Optional],CharList[Optional]);
// Format if 0 --> number of words in string 
//			 1 --> indexed Array
// 			 2 --> Associative Array its key is postion of word in string 
// by default do not count charlist with it like $ , & , etc 
//==============================================================================

$str ="I love PHP so Much";

$word1= str_word_count($str);
echo ($word1);

$word1= str_word_count($str,1);
echo "<pre>";
print_r($word1);
echo "</pre>";

$word1= str_word_count($str,2);
echo "<pre>";
print_r($word1);
echo "</pre>";

$word1= str_word_count($str,2);
echo "<pre>";
print_r($word1);
echo "</pre>";

$str ="I love PHP & so Much";
$word1= str_word_count($str);
echo ($word1);
echo "<br>";
$word1= str_word_count($str,1,"&");
print_r($word1);
echo "<br>";
$word1= str_word_count($str,0,"&");
print_r($word1);