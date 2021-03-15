<?php 
//========================================================================================================
//  Fopen : fopen(filename ,mode, include_path, context) : handle file only
// Fseek : fseek(handle, offset, whence) => SEEK_SET, SEEK_CUR, SEEK_END
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

$fileHandle = fopen('77-fatma.txt','r+');

fseek($fileHandle,2,SEEK_SET); //SEEK_SET BY DEFAULT

$write = fwrite($fileHandle, 't');

fseek($fileHandle,8,SEEK_CUR); // start fro, last postion which is 2 in line 21

$write = fwrite($fileHandle, 'z');

fseek($fileHandle, -1,SEEK_END);
$write = fwrite($fileHandle, 'z');
var_dump($write);
