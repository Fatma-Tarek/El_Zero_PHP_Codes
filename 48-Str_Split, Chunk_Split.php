<?php
//==========================================================================================================
// str_split : str_split(string ,length)
// length not mandotary
//
//
// chunk_split: chunk_split(string [ default value 76],length [default value \r\n]);
//
//==========================================================================================================

$str = "Hello I Love PHP";
echo $str."<br>";
$arr =str_split($str);
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr =str_split($str,2);
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr =str_split($str,5);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "======================= chunck_split ================= <br>";
$arr =chunk_split($str);
echo "<pre>";
echo($arr);
echo "</pre>";

$arr =chunk_split($str,2);
echo "<pre>";
echo($arr);
echo "</pre>";

$arr =chunk_split($str,4);
echo "<pre>";
echo($arr);
echo "</pre>";

$arr =chunk_split($str,4,"-");
echo "<pre>";
echo($arr);
echo "</pre>";




