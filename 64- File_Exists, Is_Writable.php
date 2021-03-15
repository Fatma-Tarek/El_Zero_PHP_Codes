<?php
//======================================================================================
// File System 
//  File_Exists
// Is_Writable ----> able to write in 
//======================================================================================

echo dirname(__FILE__)."<br>";
$file = "64-fatma1.txt";
$file = dirname(__FILE__)."/64-fatma1.txt";

if(file_exists($file)){
	echo "Found file";
	file_put_contents($file,"Added by File Put Content") ."<br>";
}else 
{
	echo "can't found file";
	file_put_contents($file,"Created by Method php")."<br>";
}


//========================================================

if(is_writable($file)){
    echo "can write in file";
	file_put_contents($file,"Added 1 by File Put Content")."<br>";
}else 
{
	echo "can't write in file";
	file_put_contents($file,"Created 1 by Method php")."<br>";
}
