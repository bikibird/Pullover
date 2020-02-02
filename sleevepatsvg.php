<?php
/*$UAL=$HTTP_GET_VARS['UAL'];
$LAL=$HTTP_GET_VARS['LAL'];
$UAW=$HTTP_GET_VARS['UAW'];
$MAW=$HTTP_GET_VARS['MAW'];
$LAW=$HTTP_GET_VARS['LAW'];
$SCD=$HTTP_GET_VARS['SCD'];
*/
$scale=8.3333333333;
$length=$SCD+$UAL+$LAL+$AHD;
$width=max($UAW,$LAW,$MAW);

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

$topY=$centerY-$length*$scale/2;


print "M ".($centerX-(($UAW-($AHW2+$AHW1)*2)*$scale/2))." ".($topY+$SCD*$scale)." ";
if ($SCD > 0)
{
	print "a ".(($UAW-($AHW2+$AHW1)*2)*$scale/2)." ".($SCD*$scale)." 0 0 1 ".(($UAW-($AHW2+$AHW1)*2)*$scale)." 0 ";
}
else
{
	print "l ".(($UAW-($AHW2+$AHW1)*2)*$scale)." 0 ";
}

//armhole1
print "l ".($AHW1*$scale)." ".($AHD*$scale)." ";

//armhole2
print "l ".($AHW2*$scale)." 0 ";

//upperarm
print "l ".(($MAW-$UAW)/2*$scale)." ".($UAL*$scale)." ";

//lowerarm
print "l ".(($LAW-$MAW)/2*$scale)." ".($LAL*$scale)." ";

///hem
print "l ".(-$LAW*$scale)." 0 ";

//lowerarm
print "l ".(-($MAW-$LAW)/2*$scale)." ".(-$LAL*$scale)." ";

//upperarm
print "l ".(-($UAW-$MAW)/2*$scale)." ".(-$UAL*$scale)." ";

//armhole2
print "l ".($AHW2*$scale)." 0 ";

//Armhole1
print "Z'>Please upgrade your browser to see patttern piece.</svg>";
?>