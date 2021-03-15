<?php
//==========================================================
//  Cookies - Set Cookie
// setcookie(name, value, expire, path, domain, secure, httponly)
// Name mandontary only 
// Name :name of cookie
// Value: content of the cookie
// Expire: Expiration Date 
// secure: true or false
// httponly: true or false 
//===========================================================

setcookie("Twitter","Fatma",time()+86400,"/","localhost");
setcookie("Facebook","Trial",time()+86400,"/","localhost");
// 86400 = (60*60) mean hour *24 hours mean whole day
//var_dump(time());
//setcookie("Fatma","Face book",time()+86400,"/","Fatma.info", TRUE);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";