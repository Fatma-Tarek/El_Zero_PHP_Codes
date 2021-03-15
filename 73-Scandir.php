<?php
//=====================================================================================
// Scandir :scandir(dir, sort, context)
//=====================================================================================

$link = __DIR__ .'/73-Fatma';

$files = scandir($link);
echo "<pre>";
print_r($files);
echo"</pre>";

foreach($files as $file)
{
	if(is_file($link .'/'.$file))
	{
		unlink($link. "/" .$file);
	}
}
echo "<pre>";
print_r($files);
echo"</pre>";