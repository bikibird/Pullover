<?php

$units=$HTTP_GET_VARS['Units'];
$neck=$HTTP_GET_VARS['Neck']/M_PI;
$shoulder=$HTTP_GET_VARS['Shoulders']/2;
$chest=$HTTP_GET_VARS['Chest']/2;
$waist=$HTTP_GET_VARS['Waist']/2;
$hips=$HTTP_GET_VARS['Hips']/2;
$upperarm=$HTTP_GET_VARS['Upperarm'];
$wrist=$HTTP_GET_VARS['Wrist'];
$shoulderSlant=$HTTP_GET_VARS['ShoulderSlant'];
$neckToWaist=$HTTP_GET_VARS['NeckToWaist'];
$neckToWrist=$HTTP_GET_VARS['NeckToWrist'];
$underarmToWaist=$HTTP_GET_VARS['UnderarmToWaist'];
$underarmToWrist=$HTTP_GET_VARS['UnderarmToWrist'];
$chestToWaist=$HTTP_GET_VARS['ChestToWaist'];
$waistToHips=$HTTP_GET_VARS['WaistToHips'];

$frontNeckline=$HTTP_GET_VARS['FrontNeckline'];
$backNeckline=$HTTP_GET_VARS['BackNeckline'];
$sleeve=$HTTP_GET_VARS['Sleeve'];
$style=$HTTP_GET_VARS['Style'];

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
$MAW=$HTTP_GET_VARS['MAW'];
$LAW=$HTTP_GET_VARS['LAW'];
$SCD=$HTTP_GET_VARS['SCD'];

$length=$SCD+$UAL+$LAW+$AHD;

if ($units=="C")
{
	$neck=$neck/2.5;
	$shoulder=$shoulder/2.5;
	$chest=$chest/2.5;
	$waist=$waist/2.5;
	$hips=$hips/2.5;
	$upperarm=$upperarm/2.5;
	$wrist=$wrist/2.5;
	$shoulderSlant=$shoulderSlant/2.5;
	$neckToWaist=$neckToWaist/2.5;
	$neckToWrist=$neckToWrist/2.5;
	$underarmToWaist=$underarmToWaist/2.5;
	$underarmToWrist=$underarmToWrist/2.5;
	$chestToWaist=$chestToWaist/2.5;

	$waistToHips=$waistToHips/2.5;
	$length=$length/2.5;
}

$centerX=200;
$centerY=200;

$scale=8.3333333333;

$topY=$centerY-$length/2*$scale;

$image = Imagecreate(400, 400)or die ("Could not create image.");
$white = ImageColorAllocate($image,255,255,255);
$aqua = ImageColorAllocate($image,135,212,231);
$pink = ImageColorAllocate($image,255,128,128);
$black = ImageColorAllocate($image,0,0,0);	

ImageFilledRectangle($image,0,0,399,399,$white);

if ($units=="C")
{
	$step=6.6666666667;
}
else
{
	$step=$scale;
}

//Graph Paper

for ($i = 0; $i < 400; $i=$i+$step)
{
	ImageLine( $image, $i,0,$i,399, $aqua);
}			

for ($i = 0; $i < 400; $i=$i+$step)
{
	ImageLine( $image, 0,$i,399,$i,$aqua);
}

ImageLine( $image, 399,0,399,399-1,$aqua);
ImageLine( $image, 0,399,399,399,$aqua);

if ($SCD > 0)
{
	$SB=$ShUArm*2;
	$C=$UAW-(($AHW2+$AHW1)*2);
	$H=$SCD;
	$R=($C*$C+4*$H*$H)/(8*$H);
	$S=$R*2*asin($C/(2*$R));
	$alpha = asin($C/(2*$R))*180/M_PI;
	$circleY=$topY+$R*$scale;
	$circleX=$centerX;
	imagearc($image,$circleX, $circleY,$R*2*$scale,$R*2*$scale,270-$alpha,270+$alpha,$black);
	
}
else
{
	imageline($image,$centerX-($UAW-(($AHW2+$AHW1)*2))/2*$scale,$topY+$SCD*$scale,$centerX+($UAW-(($AHW2+$AHW1)*2))/2*$scale,$topY+$SCD*$scale,$black);
}

$currY=$topY+$SCD*$scale;
$currLeftX=$centerX-($UAW-(($AHW2+$AHW1)*2))/2*$scale;
$currRightX=$centerX+($UAW-(($AHW2+$AHW1)*2))/2*$scale;

imageline($image, $currLeftX,$currY,$currLeftX-$AHW1*$scale, $currY+$AHD*$scale, $black);
imageline($image, $currRightX,$currY,$currRightX+$AHW1*$scale, $currY+$AHD*$scale, $black);

$currY=$currY+$AHD*$scale;
$currLeftX=$currLeftX-$AHW1*$scale;
$currRightX=$currRightX+$AHW1*$scale;


imageline($image, $currLeftX,$currY,$currLeftX-$AHW2*$scale, $currY, $black);
imageline($image, $currRightX,$currY,$currRightX+$AHW2*$scale, $currY, $black);

$currLeftX=$currLeftX-$AHW2*$scale;
$currRightX=$currRightX+$AHW2*$scale;

imageline($image, $currLeftX,$currY,$centerX-$MAW/2*$scale, $currY+$UAL*$scale, $black);
imageline($image, $currRightX,$currY,$centerX+$MAW/2*$scale, $currY+$UAL*$scale, $black);

$currLeftX=$centerX-$MAW/2*$scale;
$currRightX=$centerX+$MAW/2*$scale;
$currY=$currY+$UAL*$scale;

imageline($image, $currLeftX,$currY,$centerX-$LAW/2*$scale, $currY+$LAL*$scale, $black);
imageline($image, $currRightX,$currY,$centerX+$LAW/2*$scale, $currY+$LAL*$scale, $black);

$currLeftX=$centerX-$LAW/2*$scale;
$currRightX=$centerX+$LAW/2*$scale;
$currY=$currY+$LAL*$scale;

imageline($image, $currLeftX, $currY, $currRightX, $currY,$black);

header("Content-type: image/png");
imagepng($image);
imagedestroy($image);

function getAlpha($C, $S)
{
	$K=$C/$S;
	for ($i=1; $i<=180; $i++)
	{
		//print "\n".abs($K-$ratio);
		$ratio = sin($i*M_PI/180)/($i*M_PI/180);
		if (abs($K-$ratio) < 0.01)
		{
		
			break;
		}	
	}
	return $i;
}
?>