<?php
/*
$units=$HTTP_GET_VARS['Units'];
$frontNeckline=$HTTP_GET_VARS['FrontNeckline'];
$NeckW1=$HTTP_GET_VARS['FrNeckW1'];
$NeckW2=$HTTP_GET_VARS['FrNeckW2'];
$NeckD=$HTTP_GET_VARS['FrNeckD'];
$ShW=$HTTP_GET_VARS['ShW'];
$ShS=$HTTP_GET_VARS['ShS'];
$ShUArm=$HTTP_GET_VARS['ShUArm'];
$AHD=$HTTP_GET_VARS['AHD'];
$AHW1=$HTTP_GET_VARS['AHW1'];
$AHW2=$HTTP_GET_VARS['AHW2'];
$AWL=$HTTP_GET_VARS['AWL'];
$WW=$HTTP_GET_VARS['WW'];
$WHL=$HTTP_GET_VARS['WHL'];
$HW=$HTTP_GET_VARS['HW'];

$UAL=$HTTP_GET_VARS['UAL'];
$LAL=$HTTP_GET_VARS['LAL'];
$UAW=$HTTP_GET_VARS['UAW'];
$LAW=$HTTP_GET_VARS['LAW'];
$MAW=$HTTP_GET_VARS['MAW'];
$SCD=$HTTP_GET_VARS['SCD'];

$length=$ShS+$ShUArm+$AHD+$AWL+$WHL;

*/

print "<html><body><p>aaaa</p><svg height=400 width=400><path stroke='blue' fill='none' d='"
/*
$centerX=200;
$centerY=200;
$scale=8.3333333333;
$topY=$centerY-$length/2*$scale;

//Sweater
	//Neck

switch($frontNeckline)
{
	print "M ".$centerX-$NeckW1/2*$scale." ".$topY." "
	case "B":
		print "l ".($NeckW1)*$scale." 0 "
		break;
	case "R":
		print "a ".$NeckW1*$scale/2." ".$NeckD*$scale." 0 0 0 ".($NeckW1)*$scale." ".0." "
		break;
	case "V":
		print "l ".$centerX." ".$NeckD*$scale." "
		print "l ".$NeckW1/2*$scale." ".-$NeckD*$scale." "
		break;
		
	case "S":
		print "l 0 ".$NeckD*$scale." "
		print "l ".$NeckW1*$scale." 0 "
		print "l 0 ".-$NeckD*$scale." "
		break;
	
}

//shoulder
print "l ".($ShW-$NeckW1)/2*$scale." ".$ShS*$scale

//armhole
print "l 0 ".$ShUArm*$scale." "
print "l ".$AHW1*$scale." ".$AHD*$scale." "
print "l ".$AHW2*$scale." 0 "

//Armhole to Waist
print "l ".$WW/2*$scale." ".$AWL*$scale." "

//Waist to Hips
print "l ".$HW/2*$scale." ".$WHL*$scale." "

//Hem
print "l ".-$HW*$scale." 0 "

//Waist to armhole
print "l ".-$WW/2*$scale." ".-$AWL*$scale." "

//Armhole
print "l ".$AHW2*$scale." 0 "
print "l ".$AHW1*$scale." ".-$AHD*$scale." "
print "l 0 ".-$ShUArm*$scale." "

//Shoulders
*/
print "Z'></svg></body></html>"
?>