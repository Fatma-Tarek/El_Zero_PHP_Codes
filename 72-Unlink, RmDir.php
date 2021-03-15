<?php
//=====================================================================================
// Unlink : unlink(filename, context)  remove file from server ex:facebook , if no activity in some file so it will remove 
// RmDir  : rmdit(directory) //must be empty 
//=====================================================================================
//
//$file = '72-fatma.txt';
//@file_put_contents($file,"Hello Fatma");
//
//if(is_writable($file))
//{
//	unlink($file);
//}
//else{
//	echo 'Sorry The File is not writable <br>';
//}

$file ="72-fatma1.txt";
@file_put_contents($file,"Hello Fatma");
if(is_writable($file) && file_exists($file))
{
	unlink($file);
}
else{
	if(file_exists($file))
	{
		echo "The file is not writable I will change the premission <br>Please reload Again ";
		chmod($file,0777);
		
	}
}



mkdir("72-PHP");
rmdir("72-PHP");