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

$length=$neckToWaist+$waistToHips+1;

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

$centerX=300;
$centerY=300;

$topY=$centerY-$length/2*10;

$image = Imagecreate(600, 600)or die ("Could not create image.");
$white = ImageColorAllocate($image,255,255,255);
$aqua = ImageColorAllocate($image,135,212,231);
$pink = ImageColorAllocate($image,255,128,128);
$black = ImageColorAllocate($image,0,0,0);	

$scale=8.3333333333;

ImageFilledRectangle($image,0,0,599,599,$white);

if ($units=="C")
{
	$step=6.6666666667;
}
else
{
	$step=$scale;
}

//Graph Paper

for ($i = 0; $i < 600; $i=$i+$step)
{
	ImageLine( $image, $i,0,$i,599, $aqua);
}			

for ($i = 0; $i < 600; $i=$i+$step)
{
	ImageLine( $image, 0,$i,599,$i,$aqua);
}

ImageLine( $image, 599,0,599,599-1,$aqua);
ImageLine( $image, 0,599,599,599,$aqua);

//Sloper

	//Neck

ImageLine($image,$centerX-$neck/2*$scale,$topY,$centerX+$neck/2*$scale,$topY,$pink);			
ImageLine($image,$centerX-$neck/2*$scale,$topY,$centerX-$neck/2*$scale,$topY+$scale,$pink);
ImageLine($image,$centerX+$neck/2*$scale,$topY,$centerX+$neck/2*$scale,$topY+$scale,$pink);
$currXLeft=$centerX-$neck/2*$scale;
$currXRight=$centerX+$neck/2*$scale;
$currY=$topY+$scale;

	//Shoulders

ImageLine($image,$currXLeft,$currY,$centerX-$shoulder*$scale,$currY+$shoulderSlant*$scale,$pink);
ImageLine($image,$currXRight,$currY,$centerX+$shoulder*$scale,$currY+$shoulderSlant*$scale,$pink);
$currXLeft=$centerX-$shoulder*$scale;
$currXRight=$centerX+$shoulder*$scale;
$currY+=$shoulderSlant*$scale;

	//Armholes

ImageLine($image,$currXLeft,$currY,$currXLeft,$currY+($neckToWaist+$shoulderSlant-$underarmToWaist)*$scale,$pink);
ImageLine($image,$currXRight,$currY,$currXRight,$currY+($neckToWaist+$shoulderSlant-$underarmToWaist)*$scale,$pink);
$currY =  $currY+($neckToWaist+$shoulderSlant-$underarmToWaist)*$scale;

	//Underarm to chest

ImageLine($image,$currXLeft,$currY, $centerX-$chest/2*$scale,$currY+($underarmToWaist-$chestToWaist)/2*$scale,$pink);
ImageLine($image,$currXRight,$currY, $centerX+$chest/2*$scale,$currY+($underarmToWaist-$chestToWaist)/2*$scale,$pink);
$currXLeft=$centerX-$chest/2*$scale;
$currXRight=$centerX+$chest/2*$scale;
$currY = $currY + ($underarmToWaist-$chestToWaist)/2*$scale;

	//Chest to waist

ImageLine($image,$currXLeft,$currY, $centerX-$waist/2*$scale,$currY+($chestToWaist)*$scale,$pink);
ImageLine($image,$currXRight,$currY, $centerX+$waist/2*$scale,$currY+($chestToWaist)*$scale,$pink);
$currXLeft=$centerX-$waist/2*$scale;
$currXRight=$centerX+$waist/2*$scale;
$currY=$currY+($chestToWaist)*$scale;

	//Waist to hips

ImageLine($image,$currXLeft,$currY, $centerX-$hips/2*$scale,$currY+($waistToHips)*$scale,$pink);
ImageLine($image,$currXRight,$currY, $centerX+$hips/2*$scale,$currY+($waistToHips)*$scale,$pink);
$currXLeft=$centerX-$hips/2*$scale;
$currXRight=$centerX+$hips/2*$scale;
$currY+=($waistToHips)*$scale;

	//Finish
ImageLine($image,$currXLeft,$currY,$currXRight,$currY,$pink);
$style = array ($pink,$pink,$pink,$pink,$pink,$white,$white,$white,$white,$white);
imagesetstyle ($image, $style);
imageline ($image, $centerX, $topY, $centerX, $currY, IMG_COLOR_STYLED);

	//Right Arm
imageline ($image, $centerX,$topY+$scale+$shoulderSlant*$scale,$centerX+$neckToWrist*$scale,$topY+$scale+$shoulderSlant*$scale,IMG_COLOR_STYLED);

imageline ($image, $centerX+$neckToWrist*$scale,$topY+$scale+$shoulderSlant*$scale-$wrist/2*$scale,$centerX+$neckToWrist*$scale,$topY+$scale+$shoulderSlant*$scale+$wrist/2*$scale,$pink);
imageline ($image, $centerX+$neckToWrist*$scale-$underarmToWrist*$scale,$topY+$scale-$upperarm/2*$scale+$shoulderSlant*$scale,$centerX+$neckToWrist*$scale-$underarmToWrist*$scale,$topY+$scale+$shoulderSlant*$scale+$upperarm/2*$scale,IMG_COLOR_STYLED);

imageline ($image, $centerX+$neckToWrist*$scale-$underarmToWrist*$scale,$topY+$scale-$upperarm/2*$scale+$shoulderSlant*$scale,$centerX+$neckToWrist*$scale,$topY+$scale+$shoulderSlant*$scale-$wrist/2*$scale,$pink);
imageline ($image, $centerX+$neckToWrist*$scale-$underarmToWrist*$scale,$topY+$scale+$upperarm/2*$scale+$shoulderSlant*$scale,$centerX+$neckToWrist*$scale,$topY+$scale+$shoulderSlant*$scale+$wrist/2*$scale,$pink);

	//Right Arm Cap

imagearc($image,$centerX+$neckToWrist*$scale-$underarmToWrist*$scale,$topY+$scale+$shoulderSlant*$scale,($neckToWrist*$scale-$underarmToWrist*$scale-$shoulder*$scale)*2,$upperarm*$scale,90,270,$pink);

	//Left Arm
imageline ($image, $centerX,$topY+$scale+$shoulderSlant*$scale,$centerX-$neckToWrist*$scale,$topY+$scale+$shoulderSlant*$scale,IMG_COLOR_STYLED);

imageline ($image, $centerX-$neckToWrist*$scale,$topY+$scale+$shoulderSlant*$scale-$wrist/2*$scale,$centerX-$neckToWrist*$scale,$topY+$scale+$shoulderSlant*$scale+$wrist/2*$scale,$pink);
imageline ($image, $centerX-$neckToWrist*$scale+$underarmToWrist*$scale,$topY+$scale-$upperarm/2*$scale+$shoulderSlant*$scale,$centerX-$neckToWrist*$scale+$underarmToWrist*$scale,$topY+$scale+$shoulderSlant*$scale+$upperarm/2*$scale,IMG_COLOR_STYLED);

imageline ($image, $centerX-$neckToWrist*$scale+$underarmToWrist*$scale,$topY+$scale-$upperarm/2*$scale+$shoulderSlant*$scale,$centerX-$neckToWrist*$scale,$topY+$scale+$shoulderSlant*$scale-$wrist/2*$scale,$pink);
imageline ($image, $centerX-$neckToWrist*$scale+$underarmToWrist*$scale,$topY+$scale+$upperarm/2*$scale+$shoulderSlant*$scale,$centerX-$neckToWrist*$scale,$topY+$scale+$shoulderSlant*$scale+$wrist/2*$scale,$pink);

	//Left Arm Cap

imagearc($image,$centerX-$neckToWrist*$scale+$underarmToWrist*$scale,$topY+$scale+$shoulderSlant*$scale,($neckToWrist*$scale-$underarmToWrist*$scale-$shoulder*$scale)*2,$upperarm*$scale,270,90,$pink);

//Sweater
	//Neck

switch($frontNeckline)
{

	case "B":
		ImageLine($image,$centerX-$NeckW1/2*$scale,$topY+$scale,$centerX+($NeckW1)/2*$scale,$topY+$scale,$black);
		break;
	case "R":
		imagearc($image,$centerX,$topY+$scale,$NeckW1*$scale,$NeckD*2*$scale,0,180,$black);
		break;
	case "V":
		ImageLine($image,$centerX-$NeckW1/2*$scale,$topY+$scale,$centerX,$topY+$scale+$NeckD*$scale,$black);
		ImageLine($image,$centerX+$NeckW1/2*$scale,$topY+$scale,$centerX,$topY+$scale+$NeckD*$scale,$black);
		break;
		
	case "S":
		ImageLine($image,$centerX-$NeckW1/2*$scale,$topY+$scale,$centerX-$NeckW2/2*$scale,$topY+$scale+$NeckD*$scale,$black);
		ImageLine($image,$centerX+$NeckW1/2*$scale,$topY+$scale,$centerX+$NeckW2/2*$scale,$topY+$scale+$NeckD*$scale,$black);
		ImageLine($image,$centerX-$NeckW2/2*$scale,$topY+$scale+$NeckD*$scale,$centerX+($NeckW2)/2*$scale,$topY+$scale+$NeckD*$scale,$black);
		break;
	
}

	//Shoulders

ImageLine($image,$centerX-$NeckW1/2*$scale,$topY+$scale,$centerX-($ShW)/2*$scale,$topY+$scale+$ShS*$scale,$black);
ImageLine($image,$centerX+$NeckW1/2*$scale,$topY+$scale,$centerX+($ShW)/2*$scale,$topY+$scale+$ShS*$scale,$black);

$currXLeft=$centerX-($ShW)/2*$scale;
$currXRight=$centerX+($ShW)/2*$scale;
$currY=$topY+$scale+$ShS*$scale;


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
	


	//Right Arm Cap
if ($SCD>0)
{
	$SB=$ShUArm*2;
	$C=$UAW-(($AHW2+$AHW1)*2);
	$H=$SCD;
	$R=($C*$C+4*$H*$H)/(8*$H);
	$S=$R*2*asin($C/(2*$R));
	$alpha = asin($C/(2*$R))*180/M_PI;

	$circleY=$topY+$scale+$shoulderSlant*$scale;
	$circleX=$centerX+($ShW/2)*$scale+$R*$scale;

	imagearc($image,$circleX, $circleY,$R*2*$scale,$R*2*$scale,180-$alpha,180+$alpha,$black);
	
}
else
{
	imageline($image,$centerX+($ShW/2)*$scale+$SCD*$scale,$topY+$scale+$shoulderSlant*$scale-($UAW-(($AHW2+$AHW1)*2))/2*$scale,$centerX+($ShW/2)*$scale+$SCD*$scale,$topY+$scale+$shoulderSlant*$scale+($UAW-(($AHW2+$AHW1)*2))/2*$scale, $black);
}
$currX=$centerX+($ShW/2)*$scale+$SCD*$scale;
$currTopY=$topY+$scale+$shoulderSlant*$scale-($UAW-(($AHW2+$AHW1)*2))/2*$scale;
$currBottomY=$topY+$scale+$shoulderSlant*$scale+($UAW-(($AHW2+$AHW1)*2))/2*$scale;

imageline($image, $currX,$currTopY,$currX+$AHD*$scale, $currTopY-$AHW1*$scale, $black);
imageline($image, $currX,$currBottomY,$currX+$AHD*$scale, $currBottomY+$AHW1*$scale, $black);

$currX=$currX+$AHD*$scale;
$currTopY=$currTopY-$AHW1*$scale;
$currBottomY=$currBottomY+$AHW1*$scale;

imageline($image, $currX,$currTopY,$currX, $currTopY-$AHW2*$scale, $black);
imageline($image, $currX,$currBottomY,$currX, $currBottomY+$AHW2*$scale, $black);

$currTopY=$currTopY-$AHW2*$scale;
$currBottomY=$currBottomY+$AHW2*$scale;
$currY=$topY+$scale+$shoulderSlant*$scale;

imageline($image, $currX,$currY+$UAW/2*$scale,$currX+$UAL*$scale, $currY+$MAW/2*$scale, $black);
imageline($image, $currX,$currY-$UAW/2*$scale,$currX+$UAL*$scale, $currY-$MAW/2*$scale, $black);

$currX=$currX+$UAL*$scale;

imageline($image, $currX,$currY+$MAW/2*$scale,$currX+$LAL*$scale, $currY+$LAW/2*$scale, $black);
imageline($image, $currX,$currY-$MAW/2*$scale,$currX+$LAL*$scale, $currY-$LAW/2*$scale, $black);

$currX=$currX+$LAL*$scale;

imageline($image, $currX, $currY+$LAW/2*$scale, $currX, $currY-$LAW/2*$scale,$black);


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