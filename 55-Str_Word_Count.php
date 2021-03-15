<?php
//=======================================================================
// parse_str(String,Array)
// Arrar is a associative Array
//
//
// Nl2br New Line to break Tag 
// We will use it when someone press Enter in Text Area we print <br> instead 
//=======================================================================

$link = "name=fatma&age=24&year=2021&skill=2";

parse_str($link,$result);

echo "<pre>";
print_r($result);
echo "</pre>";

echo $result["name"] ."<br>";

$str = "Hello \n I love \n PHP";
echo nl2br($str,true);
echo "<br>";
echo nl2br($str,false);
