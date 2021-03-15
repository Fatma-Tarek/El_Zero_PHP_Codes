<?php
//=====================================================================================
// Copy(oldfile,newfile);
// Rename : rename(oldname , newname ,context)
//=====================================================================================

//copy('70-copy1.txt','70-copy1New.txt');

if(!copy('70-copy1.txt','70-copy1New.txt')){
	echo "Sorry File Not Copied";
}else {
	echo "File has been copied ";
}

//=====================================================================================
// Copy(oldfile,newfile); Good function
//=====================================================================================

function copyMe($extention){
	$original = __FILE__;
	echo __FILE__;
	return copy($original,$original.".".$extention);
}
copyMe('bak');


//=====================================================================================
// Rename : rename(oldname , newname ,context)
//=====================================================================================

rename('70-Rename, Copy.php.bak','70-Rename, Copy1.php');

mkdir("70-PHP");
copy(__FILE__,__DIR__.'/70-PHP/Backup.php');
