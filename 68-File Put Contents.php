<?php
//=================================================================================
// File Put Contents: file_put_contents(file,data,mode,context)
// Mode: [ 1 ]  File_append
// 		 [ 2 ]  Lock_ex  :Mean if one change file with ME so lock writable on it until I finish with this file
//		 [ 3 ]  file_use_include_path
//
//
// if file is not existed then created 
//=================================================================================


// Overwrite in File 
file_put_contents("68-fatma.txt","New file created");
file_put_contents("68-fatma.txt","Data Changed");


file_put_contents("68-fatma.txt","\nFile appened",FILE_APPEND);

file_put_contents("68-fatma.txt","\nFile appened for twice",FILE_APPEND | LOCK_EX);


