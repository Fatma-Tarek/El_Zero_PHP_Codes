<?php
//===========================================================================
// Strcmp(String1,String2)
// 			=0 => The Two strings are Equal
// 			>0 => The String 1 is greater than String 2
// 			<0 => The String 1 is less than String 2
// StrnCmp(String1,String2,length)
// 			compare by length == no of character 
//
// StrRev(string) //Reverse String
//===========================================================================

//===========================================================================
// Strcmp(String1,String2)
// 			=0 => The Two strings are Equal
// 			>0 => The String 1 is greater than String 2
// 			<0 => The String 1 is less than String 2
//===========================================================================

echo " =============================== StrCmp ===============================<br>";
$str1 = "PHP";
$str2 = "PHP";
echo strcmp($str1 ,$str2);
echo "<br>";

$str1 = "PHP12";
$str2 = "PHP";
echo strcmp($str1 ,$str2);
echo "<br>";

//===========================================================================
// StrnCmp(String1,String2,length)
// 			compare by length == no of character 
//===========================================================================
echo " =============================== StrnCmp ===============================<br>";
$str1 = "PHP12";
$str2 = "PHP";
echo strncmp($str1 ,$str2,3);
echo "<br>";
echo strncmp($str1 ,$str2,4);
echo "<br>";



///===========================================================================
// StrRev(string) //Reverse String
//===========================================================================
echo " =============================== StrRev(string) ===============================<br>";
$str1 = "PoHP12";
echo $str1;
echo "<br>";
$str2 = StrRev($str1);
echo $str2;
echo "<br>";


