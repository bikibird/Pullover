<?php

$units=$HTTP_GET_VARS['Units'];
$backNeckline=$HTTP_GET_VARS['BackNeckline'];
$NeckW1=$HTTP_GET_VARS['BkNeckW1'];
$NeckW2=$HTTP_GET_VARS['BkNeckW2'];
$NeckD=$HTTP_GET_VARS['BkNeckD'];
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
$SCD=$HTTP_GET_VARS['SCD'];

$length=$ShS+$ShUArm+$AHD+$AWL+$WHL;

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

ImageLine( $image, 399,0,399,399,$aqua);
ImageLine( $image, 0,399,399,399,$aqua);

//Sweater
	//Neck

switch($backNeckline)
{

	case "B":
		ImageLine($image,$centerX-$NeckW1/2*$scale,$topY,$centerX+($NeckW1)/2*$scale,$topY,$black);
		break;
	case "R":
		imagearc($image,$centerX,$topY,$NeckW1*$scale,$NeckD*2*$scale,0,180,$black);
		break;
	case "V":
		ImageLine($image,$centerX-$NeckW1/2*$scale,$topY,$centerX,$topY+$NeckD*$scale,$black);
		ImageLine($image,$centerX+$NeckW1/2*$scale,$topY,$centerX,$topY+$NeckD*$scale,$black);
		break;
		
	case "S":
		ImageLine($image,$centerX-$NeckW1/2*$scale,$topY,$centerX-$NeckW2/2*$scale,$topY+$NeckD*$scale,$black);
		ImageLine($image,$centerX+$NeckW1/2*$scale,$topY,$centerX+$NeckW2/2*$scale,$topY+$NeckD*$scale,$black);
		ImageLine($image,$centerX-$NeckW2/2*$scale,$topY+$NeckD*$scale,$centerX+($NeckW2)/2*$scale,$topY+$NeckD*$scale,$black);
		break;
	
}

	//Shoulders

ImageLine($image,$centerX-$NeckW1/2*$scale,$topY,$centerX-($ShW)/2*$scale,$topY+$ShS*$scale,$black);
ImageLine($image,$centerX+$NeckW1/2*$scale,$topY,$centerX+($ShW)/2*$scale,$topY+$ShS*$scale,$black);

$currXLeft=$centerX-($ShW)/2*$scale;
$currXRight=$centerX+($ShW)/2*$scale;
$currY=$topY+$ShS*$scale;


	//Armhole

ImageLine($image,$currXLeft,$currY,$currXLeft,$currY+$ShUArm*$scale,$black);
ImageLine($image,$currXRight,$currY,$currXRight,$currY+$ShUArm*$scale,$black);
$currY =  $currY+$ShUArm*$scale;

ImageLine($image,$currXLeft,$currY,$currXLeft-$AHW1*$scale,$currY+$AHD*$scale,$black);
ImageLine($image,$currXRight,$currY,$currXRight+$AHW1*$scale,$currY+$AHD*$scale,$black);

$currXLeft=$currXLeft-$AHW1*$scale;
$currXRight=$currXRight+$AHW1*$scale;
$currY=$currY+$AHD*$scale;

ImageLine($image,$currXLeft,$currY,$currXLeft-$AHW2*$scale,$currY,$black);
ImageLine($image,$currXRight,$currY,$currXRight+$AHW2*$scale,$currY,$black);

$currXLeft=$currXLeft-$AHW2*$scale;
$currXRight=$currXRight+$AHW2*$scale;

	//Armhole to Waist

ImageLine($image,$currXLeft,$currY,$centerX-$WW/2*$scale,$currY+$AWL*$scale,$black);
ImageLine($image,$currXRight,$currY,$centerX+$WW/2*$scale,$currY+$AWL*$scale,$black);
$currXLeft=$centerX-$WW/2*$scale;
$currXRight=$centerX+$WW/2*$scale;
$currY=$currY+$AWL*$scale;

	//Waist to Hips

ImageLine($image,$currXLeft,$currY,$centerX-$HW/2*$scale,$currY+$WHL*$scale,$black);
ImageLine($image,$currXRight,$currY,$centerX+$HW/2*$scale,$currY+$WHL*$scale,$black);
$currXLeft=$centerX-$HW/2*$scale;
$currXRight=$centerX+$HW/2*$scale;
$currY=$currY+$WHL*$scale;

	//Hem

ImageLine($image,$currXLeft,$currY,$currXRight,$currY,$black);


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