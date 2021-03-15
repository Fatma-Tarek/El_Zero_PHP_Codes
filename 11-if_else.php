<?php
$ticketPrice =1500;

if($ticketPrice >400 && $ticketPrice <500)
{
	echo "You have 15% discount";
}
elseif ($ticketPrice >= 500)
{
	echo "You have 25% discount";
}
else
{
	echo "You have No discount";
}

