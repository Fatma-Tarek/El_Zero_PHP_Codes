<?php
      $LessonName = "Concatentation";
      $homePage = "PHP - " . $LessonName;
      $heading  = "Welcome To ". $LessonName;;
      $breif    = "This Lesson Talk about ". $LessonName ." And How to use it ";
      $languages = "<ul>";
	  $languages .="<li>PHP</li>";
      $languages .="<li>Html</li>";
	  $languages .="<li>CSS</li>";
      $languages .="</ul>";

?>
<!DOCTYPE html>
<html>

<head>
	<!--    <title><?php echo $homePage ?> </title>-->
	<title><?php echo  $homePage ?> </title>
</head>

<body>
	<?php
       echo $heading;
       echo "<br>$breif ";
       echo "<br>Hello " . "Fatma Tarek<br>";
       echo $homePage ." lesson;";
	   echo "<br>";
       echo 1 . " " . 2 . " This if concatination  number with space between"; 
       echo "<br>";
       echo 1.2 ." This if float number"; 
	   echo "<br>";
	   echo 1 . 2 ." This is concatination  number<br>"; 
	   echo "<br> print list from PHP Variables";	
	   echo $languages;
	
	
	
    ?>


</body>

</html>
