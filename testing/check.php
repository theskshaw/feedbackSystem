<?php
session_start();
$ar=array();
$ar=$_SESSION['stored'][0][0];
$ar2=$_SESSION['stored'][1][1];
echo $ar;
echo $ar2;
?>