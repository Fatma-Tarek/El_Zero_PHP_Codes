<?php
//========================================================================================================
//  Fopen : fopen(filename ,mode, include_path, context) : handle file only
//  Fread :fread(Handle , Length)
// Handle & length Mandotry 
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

$fileHandle = fopen("75-fatma.txt",'r');

$content = fread($fileHandle,filesize("75-fatma.txt"));

echo $content;
