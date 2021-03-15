<?php
//============================================================================
// str_Replace: str_replace(search , Replace ,string ,count)
// search mandatory 
// Replace mandatory 
// string mandatory 
// count not mandatory 
// not affect on string or array  
//============================================================================

$str = "I love PHP too much because PHP is goog and easy language";

echo $str ."<br>";
$str2 = str_replace("PHP","JS",$str,$i);

echo $str2;
echo "Replacement count Is " .$i ."<br>";
echo $str ."<br>";


// explode convert string to array 

$str =explode (" ",$str);
echo "<pre>";
print_r($str);
echo "</pre>";


// str_replace on array 
$str = str_replace("PHP","JS",$str);
echo "<pre>";
print_r($str);
echo "</pre>";



// Implode convert array to string 

$str =implode (" ",$str);
echo "<pre>";
echo $str;
echo "</pre>";


$str = "I=loved=PHP=too+much-because-PHP-is good and@easy-language";
$str =str_replace(array("-","+","@","=")," ",$str);
echo "<pre>";
echo $str;
echo "</pre>";



//========================= Notice this example ===========================
//=========================================================================
$str = "I=loved=PHP=too+much-because-PHP-is good and@easy-language";
$str =str_replace(array("-","+","@","="),array(" A "," B "," C "," D "),$str);
echo "<pre>";
echo $str;
echo "</pre>"; 
//=========================================================================

$str = "I=loved=PHP=too+much-because-PHP-is good and@easy-language";
echo "<pre>";
echo $str;
echo "</pre>";
$str =str_replace(array("-","+","@","="),array(" A "," B "),$str);
echo "<pre>";
echo $str;
echo "</pre>";
//================================================================
$str ="line 1\n\rline 2 \nline3\r";
echo $str ."<br>";
$order = array("\n","\n\r","\r");
$str =str_replace($order,"<br>",$str);
echo $str;





















