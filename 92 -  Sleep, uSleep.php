<?php
//=====================================================================
// Misc Functions - Sleep, uSleep + Examples
// sleep(seconds);
// usleep(Microseconds);
// we can use sleep to request curl from google prevent you from blocking because you could send multirequest 
// time_sleep_until(time()+5);
//=====================================================================

//$name ="Fatma";
//echo $name ."<br>";
//sleep(5);
//echo 'sorry Forget to say Hi';

//function checkFile(){
//	if(file_exists('92- fatma.txt'))
//	{
//		echo "Good We find file";
//	}else{
//		sleep(5);
//		checkFile();
//	}}
//checkFile();

function checkFile(){
	if(file_exists('92- fatma.txt'))
	{
		echo "Good We find file";
	}else{
		time_sleep_until(time() +5); // Time from now + 5
		checkFile();
	}}
checkFile();