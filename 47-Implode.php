<?php
//==================================================================
// Implode : implode(Seperator ,Array)
// Join    : join(seperator ,Array)
//==================================================================

$arr =array("Fatma","Tarek","Abdallah","Sherif");

$str = implode($arr);
echo $str ."<br>";

$str = implode(" ",$arr);
echo $str ."<br>";

$str = implode(",",$arr);
echo $str ."<br>";
echo "Our bosses are" . $str;
echo "<br>";

$str = join(" & ",$arr);
echo $str ."<br>";