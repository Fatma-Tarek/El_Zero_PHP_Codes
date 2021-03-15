<?php
//=====================================================================
// Trim: trim(String , CharList)
// default charList: \0		 NULL 
//					 \t 	 New Line
//					 \r 	 Carriage Return 
//					 \x0B 	 vertical Tab
//					 " " 	 Space	
//
//
// Remove from head of String of Tail of String in between No 
// rtrim($str,"xxx");  //trim from right 
// ltrim($str,"HP");   //trim from left
//=====================================================================

$str ="I love PHP";
echo var_dump($str) ."<br>";

$str ="\x0B \x0B \x0B I love PHP \x0B \x0B";
echo var_dump($str) ."<br>";

$trimmed = trim($str);
echo var_dump($trimmed);

$str ="I love PHP";
echo var_dump($str) ."<br>";
$trimmed = trim($str,"I l");
echo var_dump($trimmed);

$str ="I love PHP";
echo "<br>";
$trimmed = rtrim($str,"HP");
echo var_dump($trimmed);

$str ="I love PHP";
echo "<br>";
$trimmed = ltrim($str,"I l");
echo var_dump($trimmed);

$str ="I love PHP";
echo "<br>";
$trimmed = ltrim($str,"HP");
echo var_dump($trimmed);


