<?php

      $LessonName = "Data Types";
      $homePage = "PHP - " . $LessonName;
      $heading  = "Welcome To ". $LessonName;
      $breif    = "This Lesson Talk about ". $LessonName; 


	  $var1 ="I love PHP"; # Data Type [1] String
	  $var2 = 100;         # Data Type [2] Integer
	  $var3 = TRUE;        # Data Type [3] Boolean
 	  $var4 =  24.5;       # Data Type [4] floating Point Number 
      $var5 = array(
	  		 "A" => "Val1",
	  		 "B" => "Val1",
		     "C" => "Val1",
	  ); # Data Type [5] Array 

      $var6 = NULL;        # Data Type [6] floating 
      class Book {
		  function Book() {
			  $this->genre = "Advanture";
			  //$var11 ="hi";
		  }
	  }

      $var7 = new Book();   # Data Type [7] object
	  $var8 = mysqli_connect("localhost","fatma","1234","mydb"); # Data Type [8] resource
      $var9 = fopen('9-fatma.txt','r');   # Data Type [8] resource
		  
		  
	  echo "<h1>Get Type</h1>";
      echo gettype($var1) ."<br>";
      echo gettype($var2) ."<br>";
	  echo gettype($var3) ."<br>";
      echo gettype($var4) ."<br>";
	  echo gettype($var5) ."<br>";
      echo gettype($var6) ."<br>";
	  echo gettype($var7) ."<br>";
      echo gettype($var8) ."<br>"; //will print bollean because connection failed if scusses it will print rsourse
      echo gettype($var9) ."<br>";

      echo "<h1>Variable Dump</h1>";
      var_dump($var1); echo "<br>";
      var_dump($var2); echo "<br>";
	  var_dump($var3); echo "<br>";
      var_dump($var4); echo "<br>";
	  var_dump($var5); echo "<br>";
	  var_dump($var6); echo "<br>";
      var_dump($var7); echo "<br>";
	  var_dump($var8); echo "<br>";
	  var_dump($var9); echo "<br>";


//============================== Notice That =================================
$var1 = 1;
$var2 = 2;
$var3 = $var1 . $var2;
echo gettype($var3) . "<br>";
var_dump ($var3);

