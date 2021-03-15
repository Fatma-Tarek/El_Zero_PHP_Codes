<?php
//=============================================================================
// MkDir
// RmDir 
// Is_Dir
//=============================================================================

$name = 'fatma';
mkdir($name);

if(is_dir($name))
{
	echo "Folder existed";
	echo "<br>";
}
rmdir($name);

if(!(is_dir($name)))
{
	echo "Folder removed sucessfully";
	echo "<br>";
}