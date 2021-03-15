<?php
//===============================================================================================
// Cookies:
//			can make different of someone to another using cookies :)
//			Like setting in facebook darkmood For example
// 			if you remove this cookie then server will not know you :(
//			must be before File HTML it is IMPORTANT BABY 
//      
//			C:\Users\LENOVO\AppData\Local\Google\Chrome\User Data\Default
//===============================================================================================
//setcookie(Name of cookie,value,Time, path);
//setcookie("Fatma","Test",time()+3600, "/");

if(count($_COOKIE)>0){
	
	echo " Good cookie is here";
}
else 
{
	"cookie is not here sorry ";
}
