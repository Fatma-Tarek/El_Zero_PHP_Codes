<?php 
//=====================================
// 				Syntax
//	do{
//		//statements here
//	}while(Expression);
//
//           Don't Forget ; :)
//=====================================
$i =1;
do
{
	echo $i++ . "<br>"; # the value of $i changed so we don't need increment 
	//$i++;
}while($i <20);