<?php 
//======================================
// 				For Loop
//	for (Exp1;Exp2;Exp3)
//	{ Statemnt To execute;}
//=======================================
/*
for ($i=1; $i<=20 ; $i++)
{
	echo $i."<br>";
}

*/
?>
<!--==================== Select days , Monthes ,Years ===========================-->
<select>
	<?php
	for($day=1;$day<=31;$day++){
	echo "<option value='$day'>".$day."</option>";
	}
?>
</select>


<select>
	<?php
	for($month=12; $month>=1 ;$month--){
	echo "<option value='$month'>".$month."</option>";
	}
?>
</select>




<select name="year">
	<?php
	for($year=1990;$year <=2021;$year++)
	{
		echo "<option value='$year'>" . $year ."</option>";
	}
	echo "<br>";
	?>
</select>
<!--===================== End of select days , Monthes ,Years ============================-->


<!--========================= Print List from array using PHP ============================-->
<?php
$langs =array ("HTML","CSS","Ruby","Ajax");
echo "<ul>";
for ($i = 0; $i<count($langs) ;$i++)
{
	echo "<li>" . $langs[$i] . "</li>";
}
echo "</ul>";
?>
<!--===================== End of Print List from array using PHP ========================-->


<?php 
$i = 1; #First Expression 
for(;;)
{
	if($i > 20){ break;} #Second Expression
	echo $i . "<br>";
	$i++; #Third Expression
}
?>