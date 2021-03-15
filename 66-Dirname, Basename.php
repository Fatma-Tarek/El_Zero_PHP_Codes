<?php
//===================================================================================
// Dirname    #pint folder of existing file
// Basename : basename(Path,suffex)
//            suffex:mean extention
//===================================================================================

echo __FILE__;
echo "<br>";

echo dirname(__FILE__);
echo "<br>";


//require_once (dirname(__FILE__)."/../66-inc/66-text.php");
require_once __DIR__."/../66-inc/66-text.php";
echo "<br>";


echo basename(__FILE__) ."<br>";
echo basename(__FILE__,".php") ."<br>";
echo basename(__FILE__,".css") ."<br>";