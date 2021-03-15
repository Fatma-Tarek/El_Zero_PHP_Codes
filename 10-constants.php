<?php  


//===========================================================================================
//                              Scope of constants :: Global                               ==
//                      Can Use it inside function and outside function                    ==
//                      Can't re_-assign the value of constant only one and only           ==
//                      constant is ued in configurations of files                         ==
//                              define("Name","VAlue",false);                              ==
//                                const SITE_STATUS =false;                                ==
//===========================================================================================




//====================================== ERROR #1 ===========================================
//echo FIRST_NAMe ."<br>";   #error because I defined false first so it is case sensitive  ==
//if I write True so we  can write variable with no sensitive case                         ==
//===========================================================================================


//====================================== ERROR #2 ===========================================
//============================   Case Senstive Can't Supported  =============================
// define ("SECOND_NAME1","fatma",true); #Not supported in Xamapp                          ==
//echo SECOND_NAME1 ."<br>";                                                               ==
//===========================================================================================

//====================================== ERROR #3 ===========================================
//============================ can't define constant twice  =================================                      
//define ("FIRST_NAME","fatma1"); //by default false                                       ==
//echo FIRST_NAME ."<br>";        //Error :(                                               ==
//===========================================================================================


//define ("SITE_STATUS","open");
//define ("SITE_STATUS","closed");
define ("SITE_STATUS",true);

if (SITE_STATUS == true)
{
	
define ("FIRST_NAME","fatma",false);
echo FIRST_NAME ."<br>";

define ("FIRST_NAME1","fatma1"); //by default false
echo FIRST_NAME1 ."<br>";


$firstName ="Tarek";
echo $firstName;


echo "<br>";
echo PHP_INT_MIN ."<br>";
echo PHP_INT_MAX ."<br>";

//========================================
echo __FILE__; // path of current file
echo "<br>";
echo __DIR__;  // path of current folder
echo "<br>";
echo __LINE__;
//========================================

}else
{
	echo "Site is closed for maintannce ";
}