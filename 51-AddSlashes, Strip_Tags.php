<?php
//===========================================================================================================
//  AddSlashes : addSlashes(string)
// We use it because "" '' and character like \ can cause problems in DB save it 
//
//
// stripslashes:  stripslashes(String)
// To show pargrah without any charcter I added use AddSlashes from Array 
//
//
//  strip_tags(string,Allow)
//  remove Tags from input because it might cause problems in DB 
// Allow mean allow to Exist
//===========================================================================================================

$str = "I '\'wake/ up at 7 O'clock";
echo $str;
echo "<br>";
//====================================================
//  AddSlashes : addSlashes(string)
//====================================================
$slash = addslashes($str);
echo $slash;
echo "<br>";


//====================================================
// stripslashes:  stripslashes(String)
//====================================================
$clean = stripslashes($slash ); // remove backslash \ 
echo $clean;
echo "<br>";

//====================================================
// strip_tags(string,Allow)
//====================================================
$str ="I love <b>PHP</b> Gp to <a href='php.net'>PHP</a> To learn <i>PHP</i>";
echo $str ."<br>";
 $stripped =strip_tags($str);
echo  $stripped ."<br>";

echo $str ."<br>";
 $stripped =strip_tags($str ,"<b>");
echo  $stripped ."<br>";

echo $str ."<br>";
 $stripped =strip_tags($str ,"<b><i>");
echo  $stripped ."<br>";
