<?php
//========================================================================================================
//  Fopen : fopen(filename ,mode, include_path, context) : handle file only
//  Fread : fread(Handle , Length)
// Handle & length Mandotry 
// Fwrite : fwrite(Handle, string, Length) //Handle  & string Mandatory --- Length not mandatory 
// To Know Length of file then use ; filesize(NameOfFile)
//  Modes : 
//			[  r  ]  Read Only Starting from begining of the file [ File Must Be Exist ]
//          [  r+ ]  Read & Write Starting From begining Of the File [ile Must Be Exist ]
//          [  w  ]  Write Only [ Open & Clear The Content] + [ Create the File If Not Exist ]
//          [  w+ ]  write & Read [ Open & Clear The Content] +[ Create the File if not Exist ]
// 			[  a  ]  Write Only [ Create the File if not Exist ] +[ append on content ]
// 			[  a+ ]  Write & Read [ Create the File if not Exist ] +[ append on content ]
//          [  x  ]  Write & Read create file  if exist will give you error must not be exist 
//========================================================================================================

$fileHandle = fopen('76-fatma.txt','r+');

$read = fread($fileHandle, filesize('76-fatma.txt'));

echo $read;

$write = fwrite($fileHandle ,"Hello");