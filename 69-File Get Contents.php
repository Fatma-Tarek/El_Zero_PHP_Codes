<?php
//=================================================================================
// File Get Contents :file_get_contents(path, include_path, offset, max_length) //get content of file or url
//=================================================================================

echo file_get_contents("69-FileGetContents.txt");
echo "<br>";
$name = file_get_contents("69-FileGetContents.txt",false,NULL,5,5);
file_put_contents("69-write.txt",$name);