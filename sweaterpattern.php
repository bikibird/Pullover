<?php

$length=$ShS+$ShUArm+$AHD+$AWL+$WHL;
$width=max($WW,$HW,$AHW1,$AHW2);

$stitchGauge=$stitchCount/$swatchWidth;
$rowGauge=$rowCount/$swatchLength;

$rows=round($length*$rowGauge);
$stitches=round($width*$stitchGauge);

$topY=0;
$centerX=$stitches/2;

$image = Imagecreate($stitches, $rows)or die ("Could not create image.");
$white = ImageColorAllocate($image,255,255,255);
$black = ImageColorAllocate($image,0,0,0);	
$red = ImageColorAllocate($image,255,0,0);	
ImageFilledRectangle($image,0,0,$stitches-1,$rows-1,$white);
imagesetthickness ( $image, 1);

switch($frontNeckline)
{

	case "B":
		ImageLine($image,$centerX-$FrNeckW1/2*$stitchGauge,$topY,$centerX+($FrNeckW1)/2*$stitchGauge,$topY,$black);
		break;
	case "R":
		imagearc($image,$centerX,$topY,$FrNeckW1*$stitchGauge,$FrNeckD*2*$rowGauge,0,180,$black);
		break;
	case "V":
		ImageLine($image,$centerX-$FrNeckW1/2*$stitchGauge,$topY,$centerX,$topY+$FrNeckD*$rowGauge,$black);
		ImageLine($image,$centerX+$FrNeckW1/2*$stitchGauge,$topY,$centerX,$topY+$FrNeckD*$rowGauge,$black);
		break;
		
	case "S":
		ImageLine($image,$centerX-$FrNeckW1/2*$stitchGauge,$topY,$centerX-$FrNeckW2/2*$stitchGauge,$topY+$FrNeckD*$rowGauge,$black);
		ImageLine($image,$centerX+$FrNeckW1/2*$stitchGauge,$topY,$centerX+$FrNeckW2/2*$stitchGauge,$topY+$FrNeckD*$rowGauge,$black);
		ImageLine($image,$centerX-$FrNeckW2/2*$stitchGauge,$topY+$FrNeckD*$rowGauge,$centerX+($FrNeckW2)/2*$stitchGauge,$topY+$FrNeckD*$rowGauge,$black);
		break;
	
}

ImageLine($image,$centerX-$FrNeckW1/2*$stitchGauge,$topY,$centerX-($ShW)/2*$stitchGauge,$topY+$ShS*$rowGauge,$black);
ImageLine($image,$centerX+$FrNeckW1/2*$stitchGauge,$topY,$centerX+($ShW)/2*$stitchGauge,$topY+$ShS*$rowGauge,$black);

$currXLeft=$centerX-($ShW)/2*$stitchGauge;
$currXRight=$centerX+($ShW)/2*$stitchGauge;
$currY=$topY+$ShS*$rowGauge;


	//Armhole

ImageLine($image,$currXLeft,$currY,$currXLeft,$currY+$ShUArm*$rowGauge,$black);
ImageLine($image,$currXRight,$currY,$currXRight,$currY+$ShUArm*$rowGauge,$black);
$currY =  $currY+$ShUArm*$rowGauge;

ImageLine($image,$currXLeft,$currY,$currXLeft-$AHW1*$stitchGauge,$currY+$AHD*$rowGauge,$black);
ImageLine($image,$currXRight,$currY,$currXRight+$AHW1*$stitchGauge,$currY+$AHD*$rowGauge,$black);

$currXLeft=$currXLeft-$AHW1*$stitchGauge;
$currXRight=$currXRight+$AHW1*$stitchGauge;
$currY=$currY+$AHD*$rowGauge;

ImageLine($image,$currXLeft,$currY,$currXLeft-$AHW2*$stitchGauge,$currY,$black);
ImageLine($image,$currXRight,$currY,$currXRight+$AHW2*$stitchGauge,$currY,$black);

$currXLeft=$currXLeft-$AHW2*$stitchGauge;
$currXRight=$currXRight+$AHW2*$stitchGauge;

	//Armhole to Waist

ImageLine($image,$currXLeft,$currY,$centerX-$WW/2*$stitchGauge,$currY+$AWL*$rowGauge,$black);
ImageLine($image,$currXRight,$currY,$centerX+$WW/2*$stitchGauge,$currY+$AWL*$rowGauge,$black);
$currXLeft=$centerX-$WW/2*$stitchGauge;
$currXRight=$centerX+$WW/2*$stitchGauge;
$currY=$currY+$AWL*$rowGauge;

	//Waist to Hips

ImageLine($image,$currXLeft,$currY,$centerX-$HW/2*$stitchGauge,$currY+$WHL*$rowGauge,$black);
ImageLine($image,$currXRight,$currY,$centerX+$HW/2*$stitchGauge,$currY+$WHL*$rowGauge,$black);
$currXLeft=$centerX-$HW/2*$stitchGauge;
$currXRight=$centerX+$HW/2*$stitchGauge;
$currY=$currY+$WHL*$rowGauge;

	//Hem

ImageLine($image,$currXLeft,$rows-1,$currXRight,$rows-1,$black);

ImageFillToBorder($image,$centerX,$currY-5,$black, $black);

$frontInstructions = getInstructions($image, $stitches, $rows);

imageDestroy($image);

$image = Imagecreate($stitches, $rows)or die ("Could not create image.");
$white = ImageColorAllocate($image,255,255,255);
$black = ImageColorAllocate($image,0,0,0);
	
ImageFilledRectangle($image,0,0,$stitches-1,$rows-1,$white);
imagesetthickness ( $image, 1);

switch($backNeckline)
{

	case "B":
		ImageLine($image,$centerX-$BkNeckW1/2*$stitchGauge,$topY,$centerX+($BkNeckW1)/2*$stitchGaugeround,$topY,$black);
		break;
	case "R":
		imagearc($image,$centerX,$topY,$BkNeckW1*$stitchGauge,$BkNeckD*2*$rowGauge,0,180,$black);
		break;
	case "V":
		ImageLine($image,$centerX-$BkNeckW1/2*$stitchGauge,$topY,$centerX,$topY+$BkNeckD*$rowGauge,$black);
		ImageLine($image,$centerX+$BkNeckW1/2*$stitchGauge,$topY,$centerX,$topY+$BkNeckD*$rowGauge,$black);
		break;
		
	case "S":
		ImageLine($image,$centerX-$BkNeckW1/2*$stitchGauge,$topY,$centerX-$BkNeckW2/2*$stitchGauge,$topY+$BkNeckD*$rowGauge,$black);
		ImageLine($image,$centerX+$BkNeckW1/2*$stitchGauge,$topY,$centerX+$BkNeckW2/2*$stitchGauge,$topY+$BkNeckD*$rowGauge,$black);
		ImageLine($image,$centerX-$BkNeckW2/2*$stitchGauge,$topY+$BkNeckD*$rowGauge,$centerX+($BkNeckW2)/2*$stitchGauge,$topY+$BkNeckD*$rowGauge,$black);
		break;
	
}

ImageLine($image,$centerX-$BkNeckW1/2*$stitchGauge,$topY,$centerX-($ShW)/2*$stitchGauge,$topY+$ShS*$rowGauge,$black);
ImageLine($image,$centerX+$BkNeckW1/2*$stitchGauge,$topY,$centerX+($ShW)/2*$stitchGauge,$topY+$ShS*$rowGauge,$black);

$currXLeft=$centerX-($ShW)/2*$stitchGauge;
$currXRight=$centerX+($ShW)/2*$stitchGauge;
$currY=$topY+$ShS*$rowGauge;


	//Armhole

ImageLine($image,$currXLeft,$currY,$currXLeft,$currY+$ShUArm*$rowGauge,$black);
ImageLine($image,$currXRight,$currY,$currXRight,$currY+$ShUArm*$rowGauge,$black);
$currY =  $currY+$ShUArm*$rowGauge;

ImageLine($image,$currXLeft,$currY,$currXLeft-$AHW1*$stitchGauge,$currY+$AHD*$rowGauge,$black);
ImageLine($image,$currXRight,$currY,$currXRight+$AHW1*$stitchGauge,$currY+$AHD*$rowGauge,$black);

$currXLeft=$currXLeft-$AHW1*$stitchGauge;
$currXRight=$currXRight+$AHW1*$stitchGauge;
$currY=$currY+$AHD*$rowGauge;

ImageLine($image,$currXLeft,$currY,$currXLeft-$AHW2*$stitchGauge,$currY,$black);
ImageLine($image,$currXRight,$currY,$currXRight+$AHW2*$stitchGauge,$currY,$black);

$currXLeft=$currXLeft-$AHW2*$stitchGauge;
$currXRight=$currXRight+$AHW2*$stitchGauge;

	//Armhole to Waist

ImageLine($image,$currXLeft,$currY,$centerX-$WW/2*$stitchGauge,$currY+$AWL*$rowGauge,$black);
ImageLine($image,$currXRight,$currY,$centerX+$WW/2*$stitchGauge,$currY+$AWL*$rowGauge,$black);
$currXLeft=$centerX-$WW/2*$stitchGauge;
$currXRight=$centerX+$WW/2*$stitchGauge;
$currY=$currY+$AWL*$rowGauge;

	//Waist to Hips

ImageLine($image,$currXLeft,$currY,$centerX-$HW/2*$stitchGauge,$currY+$WHL*$rowGauge,$black);
ImageLine($image,$currXRight,$currY,$centerX+$HW/2*$stitchGauge,$currY+$WHL*$rowGauge,$black);
$currXLeft=$centerX-$HW/2*$stitchGauge;
$currXRight=$centerX+$HW/2*$stitchGauge;
$currY=$currY+$WHL*$rowGauge;

	//Hem

ImageLine($image,$currXLeft,$rows-1,$currXRight,$rows-1,$black);

ImageFillToBorder($image,$centerX,$currY-5,$black, $black);



$backInstructions = getInstructions($image, $stitches, $rows);


//Sleeve
imageDestroy($image);


$length=$UAL+$LAL+$SCD+$AHD;
$width=max($LAW,$MAW,$UAW);
$rows=round($length*$rowGauge);
$stitches=round($width*$stitchGauge);

$image = Imagecreate($stitches, $rows)or die ("Could not create image.");
$white = ImageColorAllocate($image,255,255,255);
$black = ImageColorAllocate($image,0,0,0);	

ImageFilledRectangle($image,0,0,$stitches-1,$rows-1,$white);
imagesetthickness ( $image, 1);

$topY=0;
$centerX=$stitches/2;

imageline($image,$centerX-($UAW-(($AHW2+$AHW1)*2))/2*$stitchGauge,$topY+$SCD*$rowGauge,$centerX+($UAW-(($AHW2+$AHW1)*2))/2*$stitchGauge,$topY+$SCD*$rowGauge,$black);	
If ($SCD > 0)
{
	$SB=$ShUArm*2;
	$C=$UAW-(($AHW2+$AHW1)*2);
	$H=$SCD;
	$R=($C*$C+4*$H*$H)/(8*$H);
	$S=$R*2*asin($C/(2*$R));
	$alpha = asin($C/(2*$R))*180/M_PI;
	$circleY=$topY+$R*$rowGauge;
	$circleY=$topY+$H*$rowGauge;
	$circleX=$centerX;
	//imagearc($image,$circleX, $circleY,$R*2*$stitchGauge,$R*2*$rowGauge,270-$alpha,270+$alpha,$black);
	imagearc($image,$circleX, $circleY,$C*$stitchGauge,$H*2*$rowGauge,180,0,$black);
	imageFillToBorder($image,$centerX,$topY+$H*$rowGauge-1,$black,$black);
}
else
{
	imageline($image,$centerX-($UAW-(($AHW2+$AHW1)*2))/2*$stitchGauge,0,$centerX+($UAW-(($AHW2+$AHW1)*2))/2*$stitchGauge,0,$black);
}

$currY=$topY+$SCD*$rowGauge;
$currLeftX=$centerX-($UAW-(($AHW2+$AHW1)*2))/2*$stitchGauge;
$currRightX=$centerX+($UAW-(($AHW2+$AHW1)*2))/2*$stitchGauge;

imageline($image, $currLeftX,$currY,$currLeftX-$AHW1*$stitchGauge, $currY+$AHD*$rowGauge, $black);
imageline($image, $currRightX,$currY,$currRightX+$AHW1*$stitchGauge, $currY+$AHD*$rowGauge, $black);

$currY=$currY+$AHD*$rowGauge;
$currLeftX=$currLeftX-$AHW1*$stitchGauge;
$currRightX=$currRightX+$AHW1*$stitchGauge;

imageline($image, $currLeftX,$currY,$currLeftX-$AHW2*$stitchGauge, $currY, $black);
imageline($image, $currRightX,$currY,$currRightX+$AHW2*$stitchGauge, $currY, $black);

$currLeftX=$currLeftX-$AHW2*$stitchGauge;
$currRightX=$currRightX+$AHW2*$stitchGauge;

imageline($image, $currLeftX,$currY,$centerX-$MAW/2*$stitchGauge, $currY+$UAL*$rowGauge, $black);
imageline($image, $currRightX,$currY,$centerX+$MAW/2*$stitchGauge, $currY+$UAL*$rowGauge, $black);

$currLeftX=$centerX-$MAW/2*$stitchGauge;
$currRightX=$centerX+$MAW/2*$stitchGauge;
$currY=$currY+$UAL*$rowGauge;

imageline($image, $currLeftX,$currY,$centerX-$LAW/2*$stitchGauge, $currY+$LAL*$rowGauge, $black);
imageline($image, $currRightX,$currY,$centerX+$LAW/2*$stitchGauge, $currY+$LAL*$rowGauge, $black);

$currLeftX=$centerX-$LAW/2*$stitchGauge;
$currRightX=$centerX+$LAW/2*$stitchGauge;
$currY=$currY+$LAL*$rowGauge;

imageline($image, $currLeftX, $currY, $currRightX, $currY,$black);
imageFillToBorder($image,$centerX,$currY-5,$black,$black);

$sleeveInstructions = getInstructions($image, $stitches, $rows);
imageDestroy($image);

function getInstructions($image, $stitches, $rows)
{
	//Make perfectly symetrical
	for ($i = $rows-1; $i>=0; $i--) 
	{
		for ($j=0; $j<$stitches; $j++)
		{
			if (imagecolorat($image,$j,$i)==1)		
			{
				imagesetpixel($image,$stitches-1-$j,$i,1);
			}
		}	
	}

	$newRow="";
	$rowCount2=0;
	$rowCount1=1;
	$rowText="A";
	for ($i = $rows-1; $i>=0; $i--) 
	{
		$currColorBlack=false;
		$newRow="";
		for ($j=0; $j<$stitches; $j++)
		{
			$x=$j-floor($stitches/2);
			if (imagecolorat($image,$j,$i)==1)
			{	
			 	if ($currColorBlack == false)
				{
					if ($x<0)
					{
						$needle = "L".(-$x+1);		
					}
					if ($x==0)
					{
						$needle ="L1";
					}
					if ($x>0)
					{
						$needle ="R".($x);
					}
					$newRow=$newRow.$needle."-";
					$currColorBlack=true;	
				}			
			}
			else
			{
				if ($currColorBlack == true)
				{	
					if ($x<=0)
					{
						$needle = "L".(-$x+2);		
					}
					if ($x==1)
					{
						$needle ="L1";
					}
					if ($x>1)
					{
						$needle ="R".($x-1);
					}
					$newRow=$newRow.$needle." ";
					$currColorBlack=false;				
				}	
			}
		}
		if ($currColorBlack==true)
		{	
			$x=$stitches-floor($stitches/2);
			$needle ="R".($x);
			$newRow=$newRow.$needle." ";
		}
		if ((strcmp($newRow,$rowText)<>0)and (strcmp($rowText,"A")<>0))
		{
			$rowCount2=$rows-$i;
			$instructions=$instructions."<tr><td>RC ".$rowCount1."-".$rowCount2.":  </td><td>".$rowText."</td></tr>";
			$rowText=$newRow;
			$rowCount1=$rowCount2+1;
		}

		if (strcmp($rowText,"A")==0)
		{	
			$rowText=$newRow;
		}	
	}	
	$rowCount2=$rows+1;
	$instructions=$instructions."<tr><td>RC ".$rowCount1."-".$rowCount2.":  </td><td>".$rowText."</td></tr>";
	return $instructions;
}

?>
	<div class="row">
		<div class="row">
			<div class="col-sm-12">
				<h1 id="biki-mystuff-title" contenteditable>Type Your Title Here</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p contenteditable> Type here to add your own instructions. The instructions below are provided on an as-is basis.  While they are believed to be accurate and complete, there is no guarantee that they will suitable for your purposes or that you will like what you knit.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<small>
					<table class="table table-info table-striped table-responsive table-condensed">
						<caption><?php include 'frontpatsvg.php';?> Front</caption>
						<?php print $frontInstructions;?>
					</table>
				</small>
			</div>
			<div class="col-sm-4">
				<small>
					<table class="table table-responsive table-striped table-condensed table-info">
						<caption><?php include 'sleevepatsvg.php';?> Sleeve</caption>
						<?php print $sleeveInstructions;?>
					</table>
				</small>
			</div>	
			<div class="col-sm-4">
				<small>	
					<table class="table table-responsive table-striped table-condensed table-info">
						<caption><?php include 'backpatsvg.php';?> Back</caption>
						<?php print $backInstructions;?>
					</table>
				</small>
			</div>
		</div>
	</div>
