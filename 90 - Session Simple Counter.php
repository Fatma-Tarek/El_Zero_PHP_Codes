<?php
//==========================================================================
// Session Training - Simple Counter
//==========================================================================
session_start();
$_SESSION['name'] = "fatma";
require_once '90 -counter.php';
echo "<br>";
echo "<a href='90 -count.php'>about</a>";