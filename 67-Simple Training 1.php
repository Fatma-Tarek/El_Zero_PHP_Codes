<?php
//=======================================================================================
//	[ 1 ] check If the Directory is exits or NO
//  [ 2 ] Make the Directory 
//  [ 3 ] Assign the Directory to variable
//  [ 4 ] create A File Inside this directory 
//  [ 5 ] Assign the File to variable
//  [ 6 ] Change Mode of This File To be Read only
//  [ 7 ] Check If this File Is Writable
//  [ 8 ] Change Mode of This File and Make It writable
//  [ 9 ] Include this File
//
//   Note: linux use / in directory 
//   Note: windows user \ in directory 
//======================================================================================= 

echo __DIR__;
echo "<br>";

if (file_exists(__DIR__."/67-PHP/"))
{
	echo "Sorry The file is existed already .<br>";
}else{
	mkdir(__DIR__."/67-PHP/");
}


$directory = __DIR__."/67-PHP/";
echo $directory;
echo "<br>";


file_put_contents($directory."67-text.php","Hello");

$file = $directory ."67-text.php";
echo $file;
echo "<br>";

chmod($file,0444);//read only 
//file_put_contents($file,"hi1");
if(is_writable($file))
{
	file_put_contents($file,"hi1");
}else{
	chmod($file,0755); //change mode 
		file_put_contents($file,"<?php echo \"Training is done :)\";?>");

}

require_once("67-PHP/67-text.php");





