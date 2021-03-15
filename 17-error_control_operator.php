<?php

//================ Error control Operator ==============
//  How to stop error in production not develop period 
//  To save server and no one know pathes
// 				 [ @ ] Error control Operator
//======================================================
//======================================================

//=========================== File Open Load Error ============================================
// $file = @fopen("9-fatm.txt","r");
// or die ("This File is not Found"); this will appear message 
// to protect server 
//$file2 = @fopen ("9-fatm.txt","r") or die ("This File is not Found");
//=============================================================================================


//=========================== Include Error ====================================================
//include("17-inc.php");
//(@include("17-incc.php")) or die (" From include Section This File is not Found");
//=============================================================================================



//=========================== Database Load Error ============================================
$server = "localhost";
$user = "root";
$pass = "items";
$db  ="ourDatabase";

@mysqli_connect($server,$user,$pass,$db) or die ("Cann't connect to databse");
//=============================================================================================














