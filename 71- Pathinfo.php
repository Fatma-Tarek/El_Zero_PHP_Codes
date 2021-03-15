<?php
//=================================================================================
//  Pathinfo(path ,options)
//=================================================================================

echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";


$links = pathinfo(__FILE__);
echo 'dirname               '.$links['dirname']."<br>";
echo 'basename             '.$links['basename']."<br>";
echo 'extension               '.$links['extension']."<br>";
echo 'filename              '.$links['filename']."<br>";