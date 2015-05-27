<?php
if($offer['doubler1_num'])
{
$matrixnumber = 1;
$won .= " ".$offer['doubler1_num']." \$" . $price1 . " Downline Position(s) ";
$count = $offer['doubler1_num'];
	while($count > 0)
	{
	$positioncount = 1;
	include "doubler_add.php";
	mysql_query("INSERT INTO prizetrans VALUES ('id', '".$userid."','".$won."','".time()."')");
	$count--;
	}
}
if($offer['doubler2_num'])
{
$matrixnumber = 2;
$won .= " ".$offer['doubler2_num']." \$" . $price2 . " Downline Position(s) ";
$count = $offer['doubler2_num'];
	while($count > 0)
	{
	$positioncount = 1;
	include "doubler_add.php";
	mysql_query("INSERT INTO prizetrans VALUES ('id', '".$userid."','".$won."','".time()."')");
	$count--;
	}
}
if($offer['doubler3_num'])
{
$matrixnumber = 3;
$won .= " ".$offer['doubler3_num']." \$" . $price3 . " Downline Position(s) ";
$count = $offer['doubler3_num'];
	while($count > 0)
	{
	$positioncount = 1;
	include "doubler_add.php";
	mysql_query("INSERT INTO prizetrans VALUES ('id', '".$userid."','".$won."','".time()."')");
	$count--;
	}
}
if($offer['doubler4_num'])
{
$matrixnumber = 4;
$won .= " ".$offer['doubler4_num']." \$" . $price4 . " Downline Position(s) ";
$count = $offer['doubler4_num'];
	while($count > 0)
	{
	$positioncount = 1;
	include "doubler_add.php";
	mysql_query("INSERT INTO prizetrans VALUES ('id', '".$userid."','".$won."','".time()."')");
	$count--;
	}
}
if($offer['doubler5_num'])
{
$matrixnumber = 5;
$won .= " ".$offer['doubler5_num']." \$" . $price5 . " Downline Position(s) ";
$count = $offer['doubler5_num'];
	while($count > 0)
	{
	$positioncount = 1;
	include "doubler_add.php";
	mysql_query("INSERT INTO prizetrans VALUES ('id', '".$userid."','".$won."','".time()."')");
	$count--;
	}
}
if($offer['doubler6_num'])
{
$matrixnumber = 6;
$won .= " ".$offer['doubler6_num']." \$" . $price6 . " Downline Position(s) ";
$count = $offer['doubler6_num'];
	while($count > 0)
	{
	$positioncount = 1;
	include "doubler_add.php";
	mysql_query("INSERT INTO prizetrans VALUES ('id', '".$userid."','".$won."','".time()."')");
	$count--;
	}
}
if($offer['doubler7_num'])
{
$matrixnumber = 7;
$won .= " ".$offer['doubler7_num']." \$" . $price7 . " Downline Position(s) ";
$count = $offer['doubler7_num'];
	while($count > 0)
	{
	$positioncount = 1;
	include "doubler_add.php";
	mysql_query("INSERT INTO prizetrans VALUES ('id', '".$userid."','".$won."','".time()."')");
	$count--;
	}
}
if($offer['doubler8_num'])
{
$matrixnumber = 8;
$won .= " ".$offer['doubler8_num']." \$" . $price8 . " Downline Position(s) ";
$count = $offer['doubler8_num'];
	while($count > 0)
	{
	$positioncount = 1;
	include "doubler_add.php";
	mysql_query("INSERT INTO prizetrans VALUES ('id', '".$userid."','".$won."','".time()."')");
	$count--;
	}
}
if($offer['doubler9_num'])
{
$matrixnumber = 9;
$won .= " ".$offer['doubler9_num']." \$" . $price9 . " Downline Position(s) ";
$count = $offer['doubler9_num'];
	while($count > 0)
	{
	$positioncount = 1;
	include "doubler_add.php";
	mysql_query("INSERT INTO prizetrans VALUES ('id', '".$userid."','".$won."','".time()."')");
	$count--;
	}
}
if($offer['doubler10_num'])
{
$matrixnumber = 10;
$won .= " ".$offer['doubler10_num']." \$" . $price10 . " Downline Position(s) ";
$count = $offer['doubler10_num'];
	while($count > 0)
	{
	$positioncount = 1;
	include "doubler_add.php";
	mysql_query("INSERT INTO prizetrans VALUES ('id', '".$userid."','".$won."','".time()."')");
	$count--;
	}
}
?>