<?php
	$siteLang ="English";
//	$siteLang ="Franko";
//	$siteLang ="French";
if ($siteLang == "English")
{
	$lang1 = "Hello";
	$lang2 = "world";
}elseif ($siteLang == "Franko"){
	
	
	$lang1 = "Ahlan ";
	$lang2 = "Ya Allam ";
	
}else
{
	$lang1 = "no ";
	$lang2 = "no ";
}
//echo $siteLang ."<br>";
//echo $lang1 . "<br>";
//echo $lang2 . "<br>";

//======================================
//$siteTheme ="white";
$siteTheme ="Dark";
if ( $siteTheme == "white"){
	
	$css = "14-white.css";
		
}elseif( $siteTheme == "Dark"){
	
	$css = "14-main.css";
		
}else{
	$css = "main.css";
}
//======================================



?>
<!DOCTYPE Html>
<html>

<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link rel="stylesheet" href="<?php echo $css; ?>">
</head>

<body>
	<h1><?php echo $lang1 . " " . $lang2 ?></h1>
</body>



</html>
