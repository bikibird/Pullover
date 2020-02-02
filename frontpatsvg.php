<?php
$scale=8.3333333333;
$length=$ShS+$ShUArm+$AHD+$AWL+$WHL;
$width=max($WW,$HW,($ShW+$AHW1+$AHW2));
print "<svg width='33%' height='33%' viewBox='0 0 ".($width*$scale+5)." ".($length*$scale+5)."'><filter id='dropShadow'>
    <feGaussianBlur in='SourceAlpha' stdDeviation='1'/>
    <feMerge>
    <feOffset dx='1' dy='1' />
        <feMergeNode />
        <feMergeNode in='SourceGraphic'/>
    </feMerge>
  </filter>
  <path filter='url(#dropShadow)' stroke='#20859E' fill='#5bc0de' d='";

$centerX=$width/2*$scale+2.5;
$centerY=$length/2*$scale+2.5;

$topY=$centerY-$length/2*$scale;

//Sweater
	//Neck

print "M ".($centerX-$FrNeckW1/2*$scale)." ".$topY." ";

switch($frontNeckline)
{
	case "B":
		print "l ".($FrNeckW1*$scale)." 0 ";
		break;
	case "R":
		print "a ".($FrNeckW1*$scale/2)." ".($FrNeckD*$scale)." 0 0 0 ".(($FrNeckW1)*$scale)." 0 ";
		break;
	case "V":
		print "l ".($FrNeckW1/2*$scale)." ".($FrNeckD*$scale)." ";
		print "l ".($FrNeckW1/2*$scale)." ".(-$FrNeckD*$scale)." ";
		break;
		
	case "S":
		print "l 0 ".($FrNeckD*$scale)." ";
		print "l ".($FrNeckW1*$scale)." 0 ";
		print "l 0 ".(-$FrNeckD*$scale)." ";
		break;
}

//shoulder
print "l ".(($ShW-$FrNeckW1)/2*$scale)." ".($ShS*$scale);

//armhole
print "l 0 ".($ShUArm*$scale)." ";
print "l ".($AHW1*$scale)." ".($AHD*$scale)." ";
print "l ".($AHW2*$scale)." 0 ";

//Armhole to Waist

$armholeToWaist=($WW-$ShW)/2-$AHW1-$AHW2;

print "l ".(($armholeToWaist)*$scale)." ".($AWL*$scale)." ";


//Waist to Hips
print "l ".(($HW-$WW)/2*$scale)." ".($WHL*$scale)." ";

//Hem
print "l ".(-$HW*$scale)." 0 ";

//Hips to Waist
print "l ".(($HW-$WW)/2*$scale)." ".(-$WHL*$scale)." ";

//Waist to armhole
print "l ".($armholeToWaist*$scale)." ".(-$AWL*$scale)." ";

//Armhole
print "l ".($AHW2*$scale)." 0 ";
print "l ".($AHW1*$scale)." ".(-$AHD*$scale)." ";
print "l 0 ".(-$ShUArm*$scale)." ";

//Shoulders

print "Z'>Please upgrade your browser to see patttern piece.</svg>";
?>