<?php
//===================================================================================
// switch(Expression){
//  	case:
//			//code
//			break;
//		}
//===================================================================================

$browser = "Google chrome";

switch($browser){
	case "Fire Fox":
	case "Fox":
		echo "Your Favourite Browser is Firefox";
		break;
		
	case "Google chrome":
	case "chrome":
		echo "Your Favourite Browser is Google chrome";
		break;
		
	case "Oera":
		echo "Your Favourite Browser is Opera";
		break;
	
	default:
		echo "Your Favourite Browser is not here";
		
}