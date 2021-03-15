<?php 
//====================== Function With Argument /==============================

function sayHello($name)
{
	echo "Hello ". $name. " ,How are you? <br>";
}

sayHello("Fatma");

function calcSalary($name,$salary)
{
	echo "Hello ". $name . " ,Your Salary is " .($salary*100)."<br>";
}
calcSalary("Fatma",70);
calcSalary("Tarek",50);

//========================================================
function generateYears($i)
{
	echo "<select name = 'years'>";
    for(;$i<=2021;$i++)
	{
		echo"<option>".$i."</option>";
	}

	echo "</select>";

}
generateYears(2005);
//========================================================
function  CalculateYears2($start,$end)
{
	echo "<select name='year'>";
	for(;$start<=$end;$start++)
	{
		echo"<option>".$start."</option>";
	}
	echo "</select>";
}
CalculateYears2(2010,2015);

//========================================================
function  CalculateYourAge($age)
{
	echo "<br>". ($age*365)." day <br>";
}
CalculateYourAge(24);
