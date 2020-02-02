<?php

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
$SCD=$HTTP_GET_VARS['SCD'];

$stitchCount=$HTTP_GET_VARS['StitchCount'];
$rowCount=$HTTP_GET_VARS['RowCount'];
$swatchWidth=$HTTP_GET_VARS['SwatchWidth'];
$swatchLength=$HTTP_GET_VARS['SwatchLength'];

$length=$ShS+$ShUArm+$AHD+$AWL+$WHL;
$width=max($WW,$HW,$AHW1,$AHW2);

$stitchGauge=$stitchCount/$swatchWidth;
$rowGauge=$rowCount/$swatchLength;
$topY=0;
$centerX=$width*$stitchGauge/2;

$length=$ShS+$ShUArm+$AHD+$AWL+$WHL;

$rows=round($length*$rowGauge)+1;
$stitches=round($width*$stitchGauge)+1;

$image = Imagecreate($stitches, $rows)or die ("Could not create image.");
$white = ImageColorAllocate($image,255,255,255);
$black = ImageColorAllocate($image,0,0,0);	
ImageFilledRectangle($image,0,0,$stitches-1,$rows-1,$white);


switch($frontNeckline)
{

	case "B":
		ImageLine($image,round($centerX-$NeckW1/2*$stitchGauge),round($topY),round($centerX+($NeckW1)/2*$stitchGaugeround),round($topY),$black);
		break;
	case "R":
		imagearc($image,round($centerX),round($topY),round($NeckW1*$stitchGauge),round($NeckD*2*$rowGauge),0,180,$black);
		break;
	case "V":
		ImageLine($image,round($centerX-$NeckW1/2*$stitchGauge),round($topY),round($centerX),round($topY+$NeckD*$rowGauge),$black);
		ImageLine($image,round($centerX+$NeckW1/2*$stitchGauge),round($topY),round($centerX),round($topY+$NeckD*$rowGauge),$black);
		break;
		
	case "S":
		ImageLine($image,round($centerX-$NeckW1/2*$stitchGauge),round($topY),round($centerX-$NeckW2/2*$stitchGauge),round($topY+$NeckD*$rowGauge),$black);
		ImageLine($image,round($centerX+$NeckW1/2*$stitchGauge),round($topY),round($centerX+$NeckW2/2*$stitchGauge),round($topY+$NeckD*$rowGauge),$black);
		ImageLine($image,round($centerX-$NeckW2/2*$stitchGauge),round($topY+$NeckD*$rowGauge),round($centerX+($NeckW2)/2*$stitchGauge),round($topY+$NeckD*$rowGauge),$black);
		break;
	
}
ImageLine($image,round($centerX-$NeckW1/2*$stitchGauge),round($topY),round($centerX-($ShW)/2*$stitchGauge),round($topY+$ShS*$rowGauge),$black);
ImageLine($image,round($centerX+$NeckW1/2*$stitchGauge),round($topY),round($centerX+($ShW)/2*$stitchGauge),round($topY+$ShS*$rowGauge),$black);

$currXLeft=$centerX-($ShW)/2*$stitchGauge;
$currXRight=$centerX+($ShW)/2*$stitchGauge;
$currY=$topY+$ShS*$rowGauge;


	//Armhole

ImageLine($image,round($currXLeft),round($currY),round($currXLeft),round($currY+$ShUArm*$rowGauge),$black);
ImageLine($image,round($currXRight),round($currY),round($currXRight),round($currY+$ShUArm*$rowGauge),$black);
$currY =  $currY+$ShUArm*$rowGauge;

ImageLine($image,round($currXLeft),round($currY),round($currXLeft-$AHW1*$stitchGauge),round($currY+$AHD*$rowGauge),$black);
ImageLine($image,round($currXRight),round($currY),round($currXRight+$AHW1*$stitchGauge),round($currY+$AHD*$rowGauge),$black);

$currXLeft=$currXLeft-$AHW1*$stitchGauge;
$currXRight=$currXRight+$AHW1*$stitchGauge;
$currY=$currY+$AHD*$rowGauge;

ImageLine($image,round($currXLeft),round($currY),round($currXLeft-$AHW2*$stitchGauge),round($currY),$black);
ImageLine($image,round($currXRight),round($currY),round($currXRight+$AHW2*$stitchGauge),round($currY),$black);

$currXLeft=$currXLeft-$AHW2*$stitchGauge;
$currXRight=$currXRight+$AHW2*$stitchGauge;

	//Armhole to Waist

ImageLine($image,round($currXLeft),round($currY),round($centerX-$WW/2*$stitchGauge),round($currY+$AWL*$rowGauge),$black);
ImageLine($image,round($currXRight),round($currY),round($centerX+$WW/2*$stitchGauge),round($currY+$AWL*$rowGauge),$black);
$currXLeft=$centerX-$WW/2*$stitchGauge;
$currXRight=$centerX+$WW/2*$stitchGauge;
$currY=$currY+$AWL*$rowGauge;

	//Waist to Hips

ImageLine($image,round($currXLeft),round($currY),round($centerX-$HW/2*$stitchGauge),round($currY+$WHL*$rowGauge),$black);
ImageLine($image,round($currXRight),round($currY),round($centerX+$HW/2*$stitchGauge),round($currY+$WHL*$rowGauge),$black);
$currXLeft=$centerX-$HW/2*$stitchGauge;
$currXRight=$centerX+$HW/2*$stitchGauge;
$currY=$currY+$WHL*$rowGauge;

	//Hem

ImageLine($image,round($currXLeft),$rows-1,round($currXRight),$rows-1,$black);

ImageFill($image,$centerX,$currY-5,$black);

/*
imagefilledrectangle ($image,10,0,20,$rows-1,$black);
imagefilledrectangle ($image,50,0,60,$rows-1,$black);
imagefilledrectangle ($image,10,50,60,$rows-1,$black);
*/



header("Content-type: image/png");
imagepng($image);
imagedestroy($image);

?>