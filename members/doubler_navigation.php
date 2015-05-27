<?php
if ((($matrixenabled1 == "yes") and ($selldownline1 == "yes")) or (($matrixenabled2 == "yes") and ($selldownline2 == "yes")) or (($matrixenabled3 == "yes") and ($selldownline3 == "yes")) or (($matrixenabled4 == "yes") and ($selldownline4 == "yes")) or (($matrixenabled5 == "yes") and ($selldownline5 == "yes")) or (($matrixenabled6 == "yes") and ($selldownline6 == "yes")) or (($matrixenabled7 == "yes") and ($selldownline7 == "yes")) or (($matrixenabled8 == "yes") and ($selldownline8 == "yes")) or (($matrixenabled9 == "yes") and ($selldownline9 == "yes")) or (($matrixenabled10 == "yes") and ($selldownline10 == "yes")))
{
#############################################################
$orderurl = "doubler_order.php";
$ordertitle = "<b>Buy Positions</b>";
$doubler_orderbutton = ereg_replace("~DOUBLER_BUTTON_URL~", $orderurl, $doubler_button);
$doubler_orderbutton = ereg_replace("~DOUBLER_BUTTON_TITLE~", $ordertitle, $doubler_orderbutton);
echo $doubler_orderbutton;
#############################################################
$statsurl = "doubler_memberstats.php";
$statstitle = "<b>Downline Stats</b>";
$doubler_statsbutton = ereg_replace("~DOUBLER_BUTTON_URL~", $statsurl, $doubler_button);
$doubler_statsbutton = ereg_replace("~DOUBLER_BUTTON_TITLE~", $statstitle, $doubler_statsbutton);
echo $doubler_statsbutton;
#############################################################
if (($matrixenabled1 == "yes") and ($selldownline1 == "yes"))
{
$matrixurl1 = "doubler_downlines.php?m=1";
$matrixtitle1 = "<b>\$".$price1." Downline #1</b>";
$doubler_downline_button1 = ereg_replace("~DOUBLER_BUTTON_URL~", $matrixurl1, $doubler_button);
$doubler_downline_button1 = ereg_replace("~DOUBLER_BUTTON_TITLE~", $matrixtitle1, $doubler_downline_button1);
echo $doubler_downline_button1;
}
if (($matrixenabled2 == "yes") and ($selldownline2 == "yes"))
{
$matrixurl2 = "doubler_downlines.php?m=2";
$matrixtitle2 = "<b>\$".$price2." Downline #2</b>";
$doubler_downline_button2 = ereg_replace("~DOUBLER_BUTTON_URL~", $matrixurl2, $doubler_button);
$doubler_downline_button2 = ereg_replace("~DOUBLER_BUTTON_TITLE~", $matrixtitle2, $doubler_downline_button2);
echo $doubler_downline_button2;
}
if (($matrixenabled3 == "yes") and ($selldownline3 == "yes"))
{
$matrixurl3 = "doubler_downlines.php?m=3";
$matrixtitle3 = "<b>\$".$price3." Downline #3</b>";
$doubler_downline_button3 = ereg_replace("~DOUBLER_BUTTON_URL~", $matrixurl3, $doubler_button);
$doubler_downline_button3 = ereg_replace("~DOUBLER_BUTTON_TITLE~", $matrixtitle3, $doubler_downline_button3);
echo $doubler_downline_button3;
}
if (($matrixenabled4 == "yes") and ($selldownline4 == "yes"))
{
$matrixurl4 = "doubler_downlines.php?m=4";
$matrixtitle4 = "<b>\$".$price4." Downline #4</b>";
$doubler_downline_button4 = ereg_replace("~DOUBLER_BUTTON_URL~", $matrixurl4, $doubler_button);
$doubler_downline_button4 = ereg_replace("~DOUBLER_BUTTON_TITLE~", $matrixtitle4, $doubler_downline_button4);
echo $doubler_downline_button4;
}
if (($matrixenabled5 == "yes") and ($selldownline5 == "yes"))
{
$matrixurl5 = "doubler_downlines.php?m=5";
$matrixtitle5 = "<b>\$".$price5." Downline #5</b>";
$doubler_downline_button5 = ereg_replace("~DOUBLER_BUTTON_URL~", $matrixurl5, $doubler_button);
$doubler_downline_button5 = ereg_replace("~DOUBLER_BUTTON_TITLE~", $matrixtitle5, $doubler_downline_button5);
echo $doubler_downline_button5;
}
if (($matrixenabled6 == "yes") and ($selldownline6 == "yes"))
{
$matrixurl6 = "doubler_downlines.php?m=6";
$matrixtitle6 = "<b>\$".$price6." Downline #6</b>";
$doubler_downline_button6 = ereg_replace("~DOUBLER_BUTTON_URL~", $matrixurl6, $doubler_button);
$doubler_downline_button6 = ereg_replace("~DOUBLER_BUTTON_TITLE~", $matrixtitle6, $doubler_downline_button6);
echo $doubler_downline_button6;
}
if (($matrixenabled7 == "yes") and ($selldownline7 == "yes"))
{
$matrixurl7 = "doubler_downlines.php?m=7";
$matrixtitle7 = "<b>\$".$price7." Downline #7</b>";
$doubler_downline_button7 = ereg_replace("~DOUBLER_BUTTON_URL~", $matrixurl7, $doubler_button);
$doubler_downline_button7 = ereg_replace("~DOUBLER_BUTTON_TITLE~", $matrixtitle7, $doubler_downline_button7);
echo $doubler_downline_button7;
}
if (($matrixenabled8 == "yes") and ($selldownline8 == "yes"))
{
$matrixurl8 = "doubler_downlines.php?m=8";
$matrixtitle8 = "<b>\$".$price8." Downline #8</b>";
$doubler_downline_button8 = ereg_replace("~DOUBLER_BUTTON_URL~", $matrixurl8, $doubler_button);
$doubler_downline_button8 = ereg_replace("~DOUBLER_BUTTON_TITLE~", $matrixtitle8, $doubler_downline_button8);
echo $doubler_downline_button8;
}
if (($matrixenabled9 == "yes") and ($selldownline9 == "yes"))
{
$matrixurl9 = "doubler_downlines.php?m=9";
$matrixtitle9 = "<b>\$".$price9." Downline #9</b>";
$doubler_downline_button9 = ereg_replace("~DOUBLER_BUTTON_URL~", $matrixurl9, $doubler_button);
$doubler_downline_button9 = ereg_replace("~DOUBLER_BUTTON_TITLE~", $matrixtitle9, $doubler_downline_button9);
echo $doubler_downline_button9;
}
if (($matrixenabled10 == "yes") and ($selldownline10 == "yes"))
{
$matrixurl10 = "doubler_downlines.php?m=10";
$matrixtitle10 = "<b>\$".$price10." Downline #10</b>";
$doubler_downline_button10 = ereg_replace("~DOUBLER_BUTTON_URL~", $matrixurl10, $doubler_button);
$doubler_downline_button10 = ereg_replace("~DOUBLER_BUTTON_TITLE~", $matrixtitle10, $doubler_downline_button10);
echo $doubler_downline_button10;
}
} #
?>