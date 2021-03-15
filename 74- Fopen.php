<?php
//========================================================================================================
//  Fopen : fopen(filename ,mode, include_path, context) : handle file only
// Fclose : fclose(fileHandle)
//  Modes : 
//			[  r  ]  Read Only Starting from begining of the file [ File Must Be Exist ]
//          [  r+ ]  Read & Write Starting From begining Of the File [ile Must Be Exist ]
//          [  w  ]  Write Only [ Open & Clear The Content] + [ Create the File If Not Exist ]
//          [  w+ ]  write & Read [ Open & Clear The Content] +[ Create the File if not Exist ]
// 			[  a  ]  Write Only [ Create the File if not Exist ] +[ append on content ]
// 			[  a+ ]  Write & Read [ Create the File if not Exist ] +[ append on content ]
//          [  x  ]  Write & Read create file  if exist will give you error must not be exist 
//========================================================================================================
// handleline End :
// 					unix: \n
//					windows: \r\n
//					Mac: \R
//========================================================================================================

$handle = fopen("74-fatma.txt",'r'); //read only 
$handle = fopen("74-fatma.txt",'r+'); // Read & Write 

$handle = fopen("74-fatma.txt",'w'); //Write Only 
$handle = fopen("74-fatma.txt",'w+'); //write & Read

$handle = fopen("74-fatma.txt",'a'); //Write Only 
$handle = fopen("74-fatma.txt",'a+'); //write & Read

// $handle = fopen("74-fatma.txt",'x'); //read only XXXX ERROR XXX