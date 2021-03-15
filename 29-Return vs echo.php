<?php

 $views = 150;
function increaseViews ($views){
	return $views +1;
}
increaseViews($views);
echo increaseViews($views);
echo "<br>";
var_dump(increaseViews ($views));
echo "<br>";
//==========================================
function increaseViews1 ($views){
	echo $views +1;
}
increaseViews1($views);
echo "<br>";
var_dump(increaseViews1 ($views));