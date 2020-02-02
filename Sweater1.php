<?php
$relPath='../../';
$units=$HTTP_GET_VARS['Units'];
$neck=$HTTP_GET_VARS['Neck'];
$shoulders=$HTTP_GET_VARS['Shoulders'];
$chest=$HTTP_GET_VARS['Chest'];
$waist=$HTTP_GET_VARS['Waist'];
$hips=$HTTP_GET_VARS['Hips'];
$upperarm=$HTTP_GET_VARS['Upperarm'];
$wrist=$HTTP_GET_VARS['Wrist'];
$shoulderSlant=$HTTP_GET_VARS['ShoulderSlant'];
$neckToWaist=$HTTP_GET_VARS['NeckToWaist'];
$neckToWrist=$HTTP_GET_VARS['NeckToWrist'];
$underarmToWaist=$HTTP_GET_VARS['UnderarmToWaist'];
$underarmToWrist=$HTTP_GET_VARS['UnderarmToWrist'];
$chestToWaist=$HTTP_GET_VARS['ChestToWaist'];
$waistToHips=$HTTP_GET_VARS['WaistToHips'];

$swatchWidth=$HTTP_GET_VARS['SwatchWidth'];
$swatchLength=$HTTP_GET_VARS['SwatchLength'];
$stitchCount=$HTTP_GET_VARS['StitchCount'];
$rowCount=$HTTP_GET_VARS['RowCount'];

$frontNeckline=$HTTP_GET_VARS['FrontNeckline'];
$backNeckline=$HTTP_GET_VARS['BackNeckline'];
$sleeve=$HTTP_GET_VARS['Sleeve'];
$oldSleeve=$HTTP_GET_VARS['OldSleeve'];

$FrNeckW1=$HTTP_GET_VARS['FrNeckW1'];
$FrNeckW2=$HTTP_GET_VARS['FrNeckW2'];
$FrNeckD=$HTTP_GET_VARS['FrNeckD'];
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

$BkNeckW1=$HTTP_GET_VARS['BkNeckW1'];
$BkNeckW2=$HTTP_GET_VARS['BkNeckW2'];
$BkNeckD=$HTTP_GET_VARS['BkNeckD'];

$UAL=$HTTP_GET_VARS['UAL'];
$LAL=$HTTP_GET_VARS['LAL'];
$UAW=$HTTP_GET_VARS['UAW'];
$LAW=$HTTP_GET_VARS['LAW'];
$MAW=$HTTP_GET_VARS['MAW'];
$SCD=$HTTP_GET_VARS['SCD'];

$sub=$HTTP_GET_VARS['sub'];

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

if (strcmp($sub,"Start")==0)
{
$tab=0;
$frontNeckline="R";
$backNeckline="R";
$sleeve="S";
$swatchWidth=4;
$swatchLength=4;
$units="I";
$stitchCount=44;
$rowCount=44;
$neck=13.5;
$neckToWaist=15;
$neckToWrist=27;
$shoulders=13;
$shoulderSlant=1;
$chest=38;
$chestToWaist=8.5;
$waist=32;
$waistToHips=8;
$hips=41;
$upperarm=13;
$wrist=6.5;
$underarmToWrist=17;
$underarmToWaist=12;

$FrontNeckline="R";
$BackNeckline="R";
$Sleeve="S";
$SwatchWidth=4;
$SwatchLength=4;
$Units="I";
$StitchCount=44;
$RowCount=44;
$Neck=13.5;
$NeckToWaist=15;
$NeckToWrist=27;
$Shoulders=13;
$ShoulderSlant=1;
$Chest=38;
$ChestToWaist=8.5;
$Waist=32;
$WaistToHips=8;
$Hips=41;
$Upperarm=13;
$Wrist=6.5;
$UnderarmToWrist=17;
$UnderarmToWaist=12;

$FrNeckW1=$neck/3.14+4;
$FrNeckW2=$neck/3.14+4;
$FrNeckD=3;
$BkNeckW1=$neck/3.14+4;
$BkNeckW2=$neck/3.14+4;
$BkNeckD=3;
$ShS=$shoulderSlant;
$ShW=$shoulders;		
$ShUArm=4;
$AHD=4;
$AHW1=2;
$AHW2=1;
$SCD=1;

$AWL=8;
$WW=$waist/2+4;
$WHL=8;
$HW=$hips/2+2;
$UAL=$underarmToWrist/2-1;
$LAL=$underarmToWrist/2-1;
$UAW=$upperarm+2;
$LAW=$wrist;
$MAW=($UAW+$LAW)/2;
$oldSleeve=$sleeve;
switch($sleeve)
{
	case "S":
		$ShW=$shoulders;		
		$ShUArm=4;
		$AHD=4;
		$AHW1=2;
		$AHW2=1;
		$SCD=1;
		break;
	case "D1":
		$ShW=$shoulders+6;
		$ShUArm=10;
		$AHD=0;
		$AHW1=0;
		$AHW2=0;
		$SCD=0;
		break;
	case "R":
		$ShW=$FrNeckW1;
		$ShUArm=0;
		$AHD=8;
		$AHW1=4;
		$AHW2=1;
		$SCD=0;
		break;
	case "D2":
		$ShW=$shoulders+5;
		$ShUArm=10;
		$AHD=0;
		$AHW1=0;
		$AHW2=1;
		$SCD=0;
		break;
	case "D3":
		$ShW=$shoulders+2;
		$ShUArm=4;
		$AHD=4;
		$AHW1=4;
		$AHW2=1;
		$SCD=0;
		break;
}
}
if (strcmp($sub,"Update Essentials")==0)
	{
		$tab=1;

		if ($oldSleeve!=$sleeve)
		{
			$oldSleeve=$sleeve;
			switch($sleeve)
				{
					case "S":
						$ShW=$shoulders;		
						$ShUArm=4;
						$AHD=4;
						$AHW1=2;
						$AHW2=1;
						$SCD=1;
						break;
					case "D1":
						$ShW=$shoulders+6;
						$ShUArm=10;
						$AHD=0;
						$AHW1=0;
						$AHW2=0;
						$SCD=0;
						break;
					case "R":
						$ShW=$FrNeckW1;
						$ShUArm=0;
						$AHD=8;
						$AHW1=4;
						$AHW2=1;
						$SCD=0;
						break;
					case "D2":
						$ShW=$shoulders+5;
						$ShUArm=10;
						$AHD=0;
						$AHW1=0;
						$AHW2=1;
						$SCD=0;
						break;
					case "D3":
						$ShW=$shoulders+2;
						$ShUArm=4;
						$AHD=4;
						$AHW1=4;
						$AHW2=1;
						$SCD=0;
						break;
				}
		}
	}
if (strcmp($sub,"Update Pattern Front")==0){$tab=1;}
if (strcmp($sub,"Update Pattern Sleeve")==0){$tab=2;}
if (strcmp($sub,"Update Pattern Back")==0){$tab=3;}

$length=$neckToWaist+$waistToHips+1;

//Calculate sleeve cap as percentage of armhole
if ($sleeve=="S")
{
	$C=$UAW-(($AHW2+$AHW1)*2);
	$H=$SCD;
	$R=($C*$C+4*$H*$H)/(8*$H);
	$S=$R*2*asin($C/(2*$R))+sqrt($AHW2*$AHW2+$AHD*$AHD)*2+$AHW1*2;  //sleeve cap length
}
else
{
	$S=($UAW-$AHW2-$AHW1)+sqrt($AHW2*$AHW2+$AHD*$AHD)*2+$AHW1*2;
}

$A=sqrt($AHW2*$AHW2+$AHD*$AHD)*2+$AHW1*2+$ShUArm*2; //armhole circumfrence
$SCP=floor($S/$A*100);

?>
<!DOCTYPE html>
<html lang="en">
 	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php print $relPath.'css/bikibird.css';?>">

		<title>Pullover</title>
	</head>
	<body>
		<?php include $relPath.'navbar.php';?>
 		<div class='container'>
			<div class='row' >
				<div class="col-xs-12 col-sm-12">
					<div class='row' >
						<h1>Pullover</h1>
					</div>
					<div class='row'>
						<ul class="nav nav-tabs nav-biki">
                            <li class="<?php if($tab==0){print "active";}?>"><a href="#tab0info" data-toggle="tab">Essentials</a></li>
                            <li class="<?php if($tab==1){print "active";}?>"><a href="#tab1info" data-toggle="tab">Front Alterations</a></li>
                            <li class="<?php if($tab==2){print "active";}?>"><a href="#tab2info" data-toggle="tab">Sleeve Alterations</a></li>
                            <li class="<?php if($tab==3){print "active";}?>"><a href="#tab3info" data-toggle="tab">Back Alterations</a></li>
                            <li class="<?php if($tab==4){print "active";}?>"><a href="#tab4info" data-toggle="tab">Pattern</a></li>
                        </ul>
                        <div class="panel panel-info biki-no-top">
							<div class="panel-body">
								<div class="tab-content">
										<div class="tab-pane fade<?php if($tab==0){print " in active";}?>" id="tab0info">
											<form action="Sweater1.php" method="get" role="form" >
												<legend>Style</legend>
												<div class="form-group">
													<div class="col-sm-4">
														<label>Front Neckline
															<select name="FrontNeckline" class="form-control" id="FrontNeckline">
																<option value="R" <?php if ($frontNeckline=="R"){print "selected";} ?>>Round</option>
																<option value="V" <?php if ($frontNeckline=="V"){print "selected";} ?>>V-Neck</option>
																<option value="S" <?php if ($frontNeckline=="S"){print "selected";} ?>>Square</option>
																<option value="B" <?php if ($frontNeckline=="B"){print "selected";} ?>>Boat</option>
															</select>
														</label>
													</div>
													<div class="col-sm-4">
														<label>Back Neckline
															<select name="BackNeckline" class="form-control" id="BackNeckline">
																<option value="R" <?php if ($backNeckline=="R"){print "selected";} ?>>Round</option>
																<option value="V" <?php if ($backNeckline=="V"){print "selected";} ?>>V-Neck</option>
																<option value="S" <?php if ($backNeckline=="S"){print "selected";} ?>>Square</option>
																<option value="B" <?php if ($backNeckline=="B"){print "selected";} ?>>Boat</option>
															</select>
														</label>
													</div>
													<div class="col-sm-4">
														<label for="Sleeve">Sleeve 
															<select name="Sleeve" class="form-control" id="Sleeve">
																<option value="S" <?php if ($sleeve=="S"){print "selected";} ?>>Set-in</option>
																<option value="D1" <?php if ($sleeve=="D1"){print "selected";} ?>>Drop</option>
																<option value="R" <?php if ($sleeve=="R"){print "selected";} ?>>Raglan</option>
																<option value="D2" <?php if ($sleeve=="D2"){print "selected";} ?>>Semi-drop</option>
																<option	value="D3" <?php if ($sleeve=="D3"){print "selected";} ?>>Semi-fitted</option>
															</select>
														</label>
													</div>
    			   								</div>
												<legend>Gauge</legend>
    											<div class="form-group">
    												<div class="col-sm-4"> 
            											<label>Swatch Width <input name="SwatchWidth" class="form-control" id="SwatchWidth" step=".25" type="number" step="any" min="0" value="<?php print $swatchWidth; ?>"></label>
       									 			</div>
    												<div class="col-sm-4"> 
    													<label>Swatch Length <input name="SwatchLength" class="form-control" id="SwatchLength" step=".25" type="number" step="any" min="0" value="<?php print $swatchLength; ?>"></label>
													</div>
													<div class="col-sm-4">
														<label>Units
															<select name="Units" class="form-control" id="Units">
																<option value="I" <?php if ($units=="I"){print "selected";} ?>>Inches</option>
																<option value="C" <?php if ($units=="C"){print "selected";} ?>>Centimeters</option>
															</select>
														</label>
													</div>
       											</div>
												<div class="form-group">
													<div class="col-sm-4"> 
														<label>Stitch Count <input name="StitchCount" type="number" step="any" min="0" min="1" class="form-control" id="StitchCount" value="<?php print $stitchCount; ?>"></label>
													</div>
    												<div class="col-sm-4"> 
            											<label>Row Count<input name="RowCount" type="number" step="any" min="0" min="1" class="form-control" id="RowCount" value="<?php print $rowCount; ?>"></label>
   		   											</div>
   		   											<div class="col-sm-4">
   		   											</div>
 			   									</div>
 			   									<legend>Body Measurements</legend>
			      								<div class="form-group">
			      									<div class="col-sm-4"> 
    													<label>Neck <input name="Neck" class="form-control" id="Neck"  value="13.5" data-toggle="tooltip" title="Measure around your neck." type="number" step="any" min="0" min="1" step=".25" value="<?php print $neck; ?>"></label>
													</div>
    			   									<div class="col-sm-4">
														<label>Back Neck to Waist <input name="NeckToWaist" class="form-control" id="NeckToWaist"  value="15" data-toggle="tooltip" title="Measure from the bone at the base of the back of your neck down to your natural waist." type="number" step="any" min="0" min="1" step=".25" value="<?php print $neckToWaist; ?>"></label>
													</div>
       												<div class="col-sm-4"> 
														<label>Back Neck to Wrist <input name="NeckToWrist" class="form-control" id="NeckToWrist"  value="27" data-toggle="tooltip" title="Bend your arm slightly.  Measure from the bone at the base of the back of your neck over the outside edge of the arm down to your wrist." type="number" step="any" min="0" min="1" step=".25" value="<?php print $neckToWrist; ?>"></label>
													</div>
												</div>
												<div class="form-group">
    												<div class="col-sm-4"> 
            											<label>Shoulders <input name="Shoulders" class="form-control" id="Shoulders" value="13" data-toggle="tooltip" title="Measure the distance between your shoulders." type="number" step="any" min="0" min="1" step=".25" value="<?php print $shoulders; ?>"></label>
       												</div>
    	   												<div class="col-sm-4"> 
            											<label>Shoulder Slant <input name="ShoulderSlant" class="form-control" id="ShoulderSlant" value="1" data-toggle="tooltip" title="Place a ruler at the base of neck horizontal with floor.  Measure the gap between the shoulder and the ruler at the outside edge." type="number" step="any" min="0" min="1" step=".25" value="<?php print $shoulderSlant; ?>"></label>
    	   											 </div>
    												<div class="col-sm-4"> 
    													<label>Bust/Chest <input name="Chest" class="form-control" id="Chest" value="38" data-toggle="tooltip" title="Measure around the fullest portion of the bust/chest." type="number" step="any" min="0" min="1" step=".25" value="<?php print $chest; ?>"></label>
													</div>
												</div>
												<div class="form-group">	
													<div class="col-sm-4">
														<label>Chest to Waist <input name="ChestToWaist" class="form-control" id="ChestToWaist" value="8.5" data-toggle="tooltip" title="Measure from the center of your chest to your natural waist." type="number" step="any" min="0" min="1" step=".25" value="<?php print $chestToWaist; ?>"></label>
													</div>
      												<div class="col-sm-4"> 
            											<label>Waist <input name="Waist" class="form-control" id="Waist" value="32" data-toggle="tooltip" title="Measure around your natural waist." type="number" step="any" min="0"  min="1" step=".25" value="<?php print $waist; ?>"></label>
       												</div>
    												<div class="col-sm-4"> 
    													<label>Waist to Hips <input name="WaistToHips" class="form-control" id="WaistToHips" value="8" data-toggle="tooltip" title="Measure from your natural waist to your hips." type="number" step="any" min="0" min="1" step=".25" value="<?php print $waistToHips; ?>"></label>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-4">
														<label>Hips <input name="Hips" class="form-control" id="Hips" value="41" data-toggle="tooltip" title="Measure around the fullest part of your hips.  Generally 7 to 9 inches below your natural waist." type="number" step="any" min="0" min="1" step=".25" value="<?php print $hips; ?>"></label>
													</div>
    	   											<div class="col-sm-4"> 
            											<label>Upper Arm <input name="Upperarm" class="form-control" id="Upperarm" value="13" data-toggle="tooltip" title="Measure around the fullest part of your upper arm." type="number" step="any" min="0"  min="1" step=".25"value="<?php print $upperarm; ?>"></label>
       												</div>
  		  											<div class="col-sm-4"> 
    													<label>Wrist <input name="Wrist" class="form-control" id="Wrist" value="6.5" step=.25 data-toggle="tooltip" title="Measure around your wrist." type="number" step="any" min="0" min="1" step=".25" value="<?php print $wrist; ?>"></label>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-4">
														<label>Underarm to Wrist <input name="UnderarmToWrist" class="form-control" id="UnderarmToWrist" value="17" data-toggle="tooltip" title="Measure from your underarm to your wrist." type="number" step="any" min="0" min="1" step=".25" value="<?php print $underarmToWrist; ?>"></label> 
													</div>
       												<div class="col-sm-4"> 
            											<label>Underarm to Waist <input name="UnderarmToWaist" class="form-control" id="UnderarmToWaist" value="12" data-toggle="tooltip" title="Measure from your underarm to your natural waist." type="number" step="any" min="0" min="1" step=".25" value="<?php print $underarmToWaist; ?>"></label>
       												</div>
       												<input name="FrNeckW1" type="hidden" value="<?php print $FrNeckW1; ?>">
													<input name="FrNeckW2" type="hidden" value="<?php print $FrNeckW2; ?>">
													<input name="FrNeckD" type="hidden" value="<?php print $FrNeckD; ?>">
													<input name="ShW" type="hidden" value="<?php print $ShW; ?>">
													<input name="ShS" type="hidden" value="<?php print $ShS; ?>">
													<input name="ShUArm" type="hidden" value="<?php print $ShUArm; ?>">
													<input name="AHD" type="hidden" value="<?php print $AHD; ?>">
													<input name="AHW1" type="hidden" value="<?php print $AHW1; ?>">
													<input name="AHW2" type="hidden" value="<?php print $AHW2; ?>">
													<input name="AWL" type="hidden" value="<?php print $AWL; ?>">
													<input name="WW" type="hidden" value="<?php print $WW; ?>">
													<input name="WHL" type="hidden" value="<?php print $WHL; ?>">
													<input name="HW" type="hidden" value="<?php print $HW; ?>">
       												<input name="UAL" type="hidden" value="<?php print $UAL; ?>"/>
													<input name="LAL" type="hidden" value="<?php print $LAL; ?>"/>
													<input name="UAW" type="hidden" value="<?php print $UAW; ?>"/>
													<input name="MAW" type="hidden" value="<?php print $MAW; ?>"/>
													<input name="LAW" type="hidden" value="<?php print $LAW; ?>"/>
													<input name="SCD" type="hidden" value="<?php print $SCD; ?>"/>

													<input name="BkNeckW1" type="hidden" value="<?php print $BkNeckW1; ?>"/>
													<input name="BkNeckW2" type="hidden" value="<?php print $BkNeckW2; ?>"/>
													<input name="BkNeckD" type="hidden" value="<?php print $BkNeckD; ?>"/>
													<input name="OldSleeve" type="hidden" value="<?php print $oldSleeve; ?>"/>
       												<div class="col-sm-4">
    													<label>Submit
            												<input name="sub" type="submit" value="Update Essentials" id="sub" class="form-control btn btn-info">
														</label>
    												</div>
    											</div>	
    										</form>
										</div>		
                        				<div class="tab-pane fade<?php if($tab==1){print " in active";}?>" id="tab1info">
											<form action="Sweater1.php" method="get" role="form" class="form-horizontal">
	                   							<div class="<div col-sm-6">
													<div class="form-group">
														<img class="img-responsive" src="<?php
print "sweaterpng.php?Units=".$units."&Neck=".$neck."&Shoulders=".$shoulders;
print "&FrontNeckline=".$frontNeckline."&BackNeckline=".$backNeckline."&Sleeve=".$sleeve;
print "&Chest=".$chest."&Waist=".$waist."&Hips=".$hips."&Upperarm=".$upperarm;
print "&Wrist=".$wrist."&ShoulderSlant=".$shoulderSlant."&NeckToWaist=".$neckToWaist;
print "&NeckToWrist=".$neckToWrist."&UnderarmToWrist=".$underarmToWrist;
print "&UnderarmToWaist=".$underarmToWaist."&ChestToWaist=".$chestToWaist;
print "&WaistToHips=".$waistToHips;
print "&BkNeckW1=".$BkNeckW1."&BkNeckW2=".$BkNeckW2;
print "&BkNeckD=".$BkNeckD;
print "&FrNeckW1=".$FrNeckW1."&FrNeckW2=".$FrNeckW2;
print "&FrNeckD=".$FrNeckD."&ShW=".$ShW."&ShS=".$ShS;
print "&ShUArm=".$ShUArm."&AHD=".$AHD."&AHW1=".$AHW1;
print "&AHW2=".$AHW2."&AWL=".$AWL."&WW=".$WW."&HW=".$HW;
print "&WHL=".$WHL."&UAL=".$UAL."&LAL=".$LAL."&UAW=".$UAW."&LAW=".$LAW;
print "&MAW=".$MAW."&SCD=".$SCD."&Highlight="."F";?>" />
											</div>
                       							</div>
                       							<div class="col-sm-6">
                       								<div class="form-group">
                   	    								<label for="HW" class="control-label col-sm-6">Hip Width</label>
														<div class="col-sm-6">
															<input name="HW" class="form-control" id="HW" value="<?php print $HW; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                   	    								<label for="WHL" class="control-label col-sm-6">Length, Waist to Hips</label>
														<div class="col-sm-6">
															<input name="WHL" class="form-control" id="WHL" value="<?php print $WHL; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                   	    								<label for="WW" class="control-label col-sm-6">Waist Width</label>
														<div class="col-sm-6">
															<input name="WW" class="form-control" id="WW" value="<?php print $WW; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                   	    								<label for="AWL" class="control-label col-sm-6">Length, Armhole to Waist</label>
														<div class="col-sm-6">
															<input name="AWL" class="form-control" id="AWL" value="<?php print $AWL; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                   	    								<label for="AHW2" class="control-label col-sm-6">Armhole Bind Off</label>
														<div class="col-sm-6">
															<input name="AHW2" class="form-control" id="AHW2" value="<?php print $AHW2; ?>" data-toggle="tooltip" title="Bind Off" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                   	    								<label for="AHW1" class="control-label col-sm-6">Armhole Decrease</label>
														<div class="col-sm-6">
															<input name="AHW1" class="form-control" id="AHW1" value="<?php print $AHW1; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                   	    								<label for="AHD" class="control-label col-sm-6">Lower Armhole Length</label>
														<div class="col-sm-6">
															<input name="AHD" class="form-control" id="AHD" value="<?php print $AHD; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                   	    								<label for="ShUArm" class="control-label col-sm-6">Upper Armhole Length</label>
														<div class="col-sm-6">
															<input name="ShUArm" class="form-control" id="ShUArm" value="<?php print $ShUArm; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                   	    								<label for="ShW" class="control-label col-sm-6">Shoulder Width</label>
														<div class="col-sm-6">
															<input name="ShW" class="form-control" id="ShW" value="<?php print $ShW; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                   	    								<label for="ShS" class="control-label col-sm-6">Shoulder Slant</label>
														<div class="col-sm-6">
															<input name="ShS" class="form-control" id="ShS" value="<?php print $ShS; ?>" type="number" step="any" min="0">
														</div>
													</div>
                       								<div class="form-group">
                       									<label for="FrNeckW1" class="control-label col-sm-6">Neckline Top Width</label>
														<div class="col-sm-6">
															<input name="FrNeckW1" class="form-control" id="FrNeckW1" value="<?php print $FrNeckW1; ?>" type="number" step="any" min="0" step="any" min="0"/>
														</div>
													</div>
													<div class="form-group">
           	            								<label for="FrNeckW2" class="control-label col-sm-6">Neckline Bottom Width</label>
														<div class="col-sm-6">
															<input name="FrNeckW2" class="form-control" id="FrNeckW2" value="<?php print $FrNeckW2; ?>" data-toggle="tooltip" title="Applies Square Neck Only." type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                       									<label for="FrNeckD" class="control-label col-sm-6">Neckline Depth</label>
														<div class="col-sm-6">
															<input name="FrNeckD" class="form-control" id="FrNeckD" value="<?php print $FrNeckD; ?>" type="number" step="any" min="0">
														</div>
													</div>
													
													<input name="Units" type="hidden" value="<?php print $units;?>">
													<input name="SwatchWidth" type="hidden" value="<?php print $swatchWidth;?>">
													<input name="SwatchLength" type="hidden" value="<?php print $swatchLength;?>">
													<input name="StitchCount" type="hidden" value="<?php print $stitchCount;?>">
													<input name="RowCount" type="hidden" value="<?php print $rowCount;?>">

													<input name="Neck" type="hidden" value="<?php print $neck; ?>"/>
													<input name="Shoulders" type="hidden" value="<?php print $shoulders; ?>"/>
													<input name="Chest" type="hidden" value="<?php print $chest; ?>"/>
													<input name="Waist" type="hidden" value="<?php print $waist; ?>"/>
													<input name="Hips" type="hidden" value="<?php print $hips; ?>"/>
													<input name="Upperarm" type="hidden" value="<?php print $upperarm; ?>"/>
													<input name="Wrist" type="hidden" value="<?php print $wrist; ?>"/>
													<input name="ShoulderSlant" type="hidden" value="<?php print $shoulderSlant; ?>"/>
													<input name="NeckToWaist" type="hidden" value="<?php print $neckToWaist; ?>"/>
													<input name="NeckToWrist" type="hidden" value="<?php print $neckToWrist; ?>"/>
													<input name="UnderarmToWaist" type="hidden" value="<?php print $underarmToWaist; ?>"/>
													<input name="UnderarmToWrist" type="hidden" value="<?php print $underarmToWrist; ?>"/>
													<input name="ChestToWaist" type="hidden" value="<?php print $chestToWaist; ?>"/>
													<input name="WaistToHips" type="hidden" value="<?php print $waistToHips; ?>"/>
													<input name="BackNeckline" type="hidden" value="<?php print $backNeckline; ?>">
													<input name="FrontNeckline" type="hidden" value="<?php print $frontNeckline; ?>">
													<input name="Sleeve" type="hidden" value="<?php print $sleeve; ?>">
												
													<input name="UAL" type="hidden" value="<?php print $UAL; ?>"/>
													<input name="LAL" type="hidden" value="<?php print $LAL; ?>"/>
													<input name="UAW" type="hidden" value="<?php print $UAW; ?>"/>
													<input name="MAW" type="hidden" value="<?php print $MAW; ?>"/>
													<input name="LAW" type="hidden" value="<?php print $LAW; ?>"/>
													<input name="SCD" type="hidden" value="<?php print $SCD; ?>"/>

													<input name="BkNeckW1" type="hidden" value="<?php print $BkNeckW1; ?>"/>
													<input name="BkNeckW2" type="hidden" value="<?php print $BkNeckW2; ?>"/>
													<input name="BkNeckD" type="hidden" value="<?php print $BkNeckD; ?>"/>
													<input name="OldSleeve" type="hidden" value="<?php print $oldSleeve; ?>"/>

													<div class="form-group">
 														<label for="sub" class="control-label col-sm-6">Refresh</label>
														<div class="col-sm-6">
															<button name="sub" class="btn btn-info form-control col-sm-6" id="sub" value="Update Pattern Front" type="submit">Update Pattern Front</button>
														</div>
													</div>
                       							</div>	
    										</form>
                        				</div>
                        				<div class="tab-pane fade<?php if($tab==2){print " in active";}?>" id="tab2info">
                        					<form action="Sweater1.php" method="get" role="form" class="form-horizontal">
	                   							<div class="<div col-sm-6">
													<div class="form-group">
														<img class="img-responsive" src="<?php
print "sweaterpng.php?Units=".$units."&Neck=".$neck."&Shoulders=".$shoulders;
print "&FrontNeckline=".$frontNeckline."&BackNeckline=".$backNeckline."&Sleeve=".$sleeve;
print "&Chest=".$chest."&Waist=".$waist."&Hips=".$hips."&Upperarm=".$upperarm;
print "&Wrist=".$wrist."&ShoulderSlant=".$shoulderSlant."&NeckToWaist=".$neckToWaist;
print "&NeckToWrist=".$neckToWrist."&UnderarmToWrist=".$underarmToWrist;
print "&UnderarmToWaist=".$underarmToWaist."&ChestToWaist=".$chestToWaist;
print "&WaistToHips=".$waistToHips;
print "&BkNeckW1=".$BkNeckW1."&BkNeckW2=".$BkNeckW2;
print "&BkNeckD=".$BkNeckD;
print "&FrNeckW1=".$FrNeckW1."&FrNeckW2=".$FrNeckW2;
print "&FrNeckD=".$FrNeckD."&ShW=".$ShW."&ShS=".$ShS;
print "&ShUArm=".$ShUArm."&AHD=".$AHD."&AHW1=".$AHW1;
print "&AHW2=".$AHW2."&AWL=".$AWL."&WW=".$WW."&HW=".$HW;
print "&WHL=".$WHL."&UAL=".$UAL."&LAL=".$LAL."&UAW=".$UAW."&LAW=".$LAW;
print "&MAW=".$MAW."&SCD=".$SCD."&Highlight="."S";?>" />
													</div>
                       							</div>
                       							<div class="col-sm-6">
                       								<div class="form-group">
                       									<label for="UAL" class="control-label col-sm-6">Upperarm Length</label>
														<div class="col-sm-6">
															<input name="UAL" class="form-control" id="UAL" value="<?php print $UAL; ?>" type="number" step="any" min="0"/>
														</div>
													</div>
													<div class="form-group">
           	            								<label for="LAL" class="control-label col-sm-6">Lowerarm Length</label>
														<div class="col-sm-6">
															<input name="LAL" class="form-control" id="LAL" value="<?php print $LAL; ?>" data-toggle="tooltip" title="Applies Square Neck Only." type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                       									<label for="UAW" class="control-label col-sm-6">Upperarm Width</label>
														<div class="col-sm-6">
															<input name="UAW" class="form-control" id="UAW" value="<?php print $UAW; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                       									<label for="MAW" class="control-label col-sm-6">Mid-arm Width</label>
														<div class="col-sm-6">
															<input name="MAW" class="form-control" id="MAW" value="<?php print $MAW; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                       									<label for="LAW" class="control-label col-sm-6">Lowerarm Width</label>
														<div class="col-sm-6">
															<input name="LAW" class="form-control" id="LAW" value="<?php print $LAW; ?>" type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                   	    								<label for="Hint" class="control-label col-sm-6">Hint</label>
														<div class="col-sm-6">
															<p id="Hint" class="form-control-static">Sleeve cap is <?php print $SCP; ?> percent of the armhole.</p>
														</div>
													</div>
													<div class="form-group">
                       									<label for="SCD" class="control-label col-sm-6">Sleeve Cap Curve Depth</label>
														<div class="col-sm-6">
															<input name="SCD" class="form-control" id="SCD" value="<?php print $SCD; ?>" type="number" step="any" min="0">
														</div>
													</div>

													<input name="Units" type="hidden" value="<?php print $units;?>">
													<input name="SwatchWidth" type="hidden" value="<?php print $swatchWidth;?>">
													<input name="SwatchLength" type="hidden" value="<?php print $swatchLength;?>">
													<input name="StitchCount" type="hidden" value="<?php print $stitchCount;?>">
													<input name="RowCount" type="hidden" value="<?php print $rowCount;?>">

													<input name="Neck" type="hidden" value="<?php print $neck; ?>"/>
													<input name="Shoulders" type="hidden" value="<?php print $shoulders; ?>"/>
													<input name="Chest" type="hidden" value="<?php print $chest; ?>"/>
													<input name="Waist" type="hidden" value="<?php print $waist; ?>"/>
													<input name="Hips" type="hidden" value="<?php print $hips; ?>"/>
													<input name="Upperarm" type="hidden" value="<?php print $upperarm; ?>"/>
													<input name="Wrist" type="hidden" value="<?php print $wrist; ?>"/>
													<input name="ShoulderSlant" type="hidden" value="<?php print $shoulderSlant; ?>"/>
													<input name="NeckToWaist" type="hidden" value="<?php print $neckToWaist; ?>"/>
													<input name="NeckToWrist" type="hidden" value="<?php print $neckToWrist; ?>"/>
													<input name="UnderarmToWaist" type="hidden" value="<?php print $underarmToWaist; ?>"/>
													<input name="UnderarmToWrist" type="hidden" value="<?php print $underarmToWrist; ?>"/>
													<input name="ChestToWaist" type="hidden" value="<?php print $chestToWaist; ?>"/>
													<input name="WaistToHips" type="hidden" value="<?php print $waistToHips; ?>"/>
													<input name="BackNeckline" type="hidden" value="<?php print $backNeckline; ?>">
													<input name="FrontNeckline" type="hidden" value="<?php print $frontNeckline; ?>">
													<input name="Sleeve" type="hidden" value="<?php print $sleeve; ?>">
													
													<input name="FrNeckW1" type="hidden" value="<?php print $FrNeckW1; ?>">
													<input name="FrNeckW2" type="hidden" value="<?php print $FrNeckW2; ?>">
													<input name="FrNeckD" type="hidden" value="<?php print $FrNeckD; ?>">
													<input name="ShW" type="hidden" value="<?php print $ShW; ?>">
													<input name="ShS" type="hidden" value="<?php print $ShS; ?>">
													<input name="ShUArm" type="hidden" value="<?php print $ShUArm; ?>">
													<input name="AHD" type="hidden" value="<?php print $AHD; ?>">
													<input name="AHW1" type="hidden" value="<?php print $AHW1; ?>">
													<input name="AHW2" type="hidden" value="<?php print $AHW2; ?>">
													<input name="AWL" type="hidden" value="<?php print $AWL; ?>">
													<input name="WW" type="hidden" value="<?php print $WW; ?>">
													<input name="WHL" type="hidden" value="<?php print $WHL; ?>">
													<input name="HW" type="hidden" value="<?php print $HW; ?>">

													<input name="BkNeckW1" type="hidden" value="<?php print $BkNeckW1; ?>"/>
													<input name="BkNeckW2" type="hidden" value="<?php print $BkNeckW2; ?>"/>
													<input name="BkNeckD" type="hidden" value="<?php print $BkNeckD; ?>"/>
													<input name="OldSleeve" type="hidden" value="<?php print $oldSleeve; ?>"/>

													<div class="form-group">
 														<label for="sub" class="control-label col-sm-6">Refresh</label>
														<div class="col-sm-6">
															<button name="sub" class="btn btn-info form-control col-sm-6" id="sub" value="Update Pattern Sleeve" type="submit">Update Pattern Sleeve</button>
														</div>
													</div>
                       							</div>	
    										</form>
                        				</div>
                        				<div class="tab-pane fade<?php if($tab==3){print " in active";}?>" id="tab3info">
                        					<form action="Sweater1.php" method="get" role="form" class="form-horizontal">
	                   							<div class="<div col-sm-6">
													<div class="form-group">
														<img class="img-responsive" src="<?php
print "sweaterpng.php?Units=".$units."&Neck=".$neck."&Shoulders=".$shoulders;
print "&FrontNeckline=".$frontNeckline."&BackNeckline=".$backNeckline."&Sleeve=".$sleeve;
print "&Chest=".$chest."&Waist=".$waist."&Hips=".$hips."&Upperarm=".$upperarm;
print "&Wrist=".$wrist."&ShoulderSlant=".$shoulderSlant."&NeckToWaist=".$neckToWaist;
print "&NeckToWrist=".$neckToWrist."&UnderarmToWrist=".$underarmToWrist;
print "&UnderarmToWaist=".$underarmToWaist."&ChestToWaist=".$chestToWaist;
print "&WaistToHips=".$waistToHips;
print "&BkNeckW1=".$BkNeckW1."&BkNeckW2=".$BkNeckW2;
print "&BkNeckD=".$BkNeckD;
print "&FrNeckW1=".$FrNeckW1."&FrNeckW2=".$FrNeckW2;
print "&FrNeckD=".$FrNeckD."&ShW=".$ShW."&ShS=".$ShS;
print "&ShUArm=".$ShUArm."&AHD=".$AHD."&AHW1=".$AHW1;
print "&AHW2=".$AHW2."&AWL=".$AWL."&WW=".$WW."&HW=".$HW;
print "&WHL=".$WHL."&UAL=".$UAL."&LAL=".$LAL."&UAW=".$UAW."&LAW=".$LAW;
print "&MAW=".$MAW."&SCD=".$SCD."&Highlight="."B";?>" />
													</div>
                       							</div>
                       							<div class="col-sm-6">
                       								<div class="form-group">
                       									<label for="BkNeckW1" class="control-label col-sm-6">Neckline Top Width</label>
														<div class="col-sm-6">
															<input name="BkNeckW1" class="form-control" id="BkNeckW1" value="<?php print $BkNeckW1; ?>" type="number" step="any" min="0"/>
														</div>
													</div>
													<div class="form-group">
           	            								<label for="BkNeckW2" class="control-label col-sm-6">Neckline Bottom Width</label>
														<div class="col-sm-6">
															<input name="BkNeckW2" class="form-control" id="BkNeckW2" value="<?php print $BkNeckW2; ?>" data-toggle="tooltip" title="Applies Square Neck Only." type="number" step="any" min="0">
														</div>
													</div>
													<div class="form-group">
                       									<label for="BkNeckD" class="control-label col-sm-6">Neckline Depth</label>
														<div class="col-sm-6">
															<input name="BkNeckD" class="form-control" id="BkNeckD" value="<?php print $BkNeckD; ?>" type="number" step="any" min="0">
														</div>
													</div>
													
													<input name="Units" type="hidden" value="<?php print $units;?>">
													<input name="SwatchWidth" type="hidden" value="<?php print $swatchWidth;?>">
													<input name="SwatchLength" type="hidden" value="<?php print $swatchLength;?>">
													<input name="StitchCount" type="hidden" value="<?php print $stitchCount;?>">
													<input name="RowCount" type="hidden" value="<?php print $rowCount;?>">

													<input name="Neck" type="hidden" value="<?php print $neck; ?>"/>
													<input name="Shoulders" type="hidden" value="<?php print $shoulders; ?>"/>
													<input name="Chest" type="hidden" value="<?php print $chest; ?>"/>
													<input name="Waist" type="hidden" value="<?php print $waist; ?>"/>
													<input name="Hips" type="hidden" value="<?php print $hips; ?>"/>
													<input name="Upperarm" type="hidden" value="<?php print $upperarm; ?>"/>
													<input name="Wrist" type="hidden" value="<?php print $wrist; ?>"/>
													<input name="ShoulderSlant" type="hidden" value="<?php print $shoulderSlant; ?>"/>
													<input name="NeckToWaist" type="hidden" value="<?php print $neckToWaist; ?>"/>
													<input name="NeckToWrist" type="hidden" value="<?php print $neckToWrist; ?>"/>
													<input name="UnderarmToWaist" type="hidden" value="<?php print $underarmToWaist; ?>"/>
													<input name="UnderarmToWrist" type="hidden" value="<?php print $underarmToWrist; ?>"/>
													<input name="ChestToWaist" type="hidden" value="<?php print $chestToWaist; ?>"/>
													<input name="WaistToHips" type="hidden" value="<?php print $waistToHips; ?>"/>
													<input name="BackNeckline" type="hidden" value="<?php print $backNeckline; ?>">
													<input name="FrontNeckline" type="hidden" value="<?php print $frontNeckline; ?>">
													<input name="Sleeve" type="hidden" value="<?php print $sleeve; ?>">
													
													<input name="FrNeckW1" type="hidden" value="<?php print $FrNeckW1; ?>">
													<input name="FrNeckW2" type="hidden" value="<?php print $FrNeckW2; ?>">
													<input name="FrNeckD" type="hidden" value="<?php print $FrNeckD; ?>">
													<input name="ShW" type="hidden" value="<?php print $ShW; ?>">
													<input name="ShS" type="hidden" value="<?php print $ShS; ?>">
													<input name="ShUArm" type="hidden" value="<?php print $ShUArm; ?>">
													<input name="AHD" type="hidden" value="<?php print $AHD; ?>">
													<input name="AHW1" type="hidden" value="<?php print $AHW1; ?>">
													<input name="AHW2" type="hidden" value="<?php print $AHW2; ?>">
													<input name="AWL" type="hidden" value="<?php print $AWL; ?>">
													<input name="WW" type="hidden" value="<?php print $WW; ?>">
													<input name="WHL" type="hidden" value="<?php print $WHL; ?>">
													<input name="HW" type="hidden" value="<?php print $HW; ?>">

													<input name="UAL" type="hidden" value="<?php print $UAL; ?>"/>
													<input name="LAL" type="hidden" value="<?php print $LAL; ?>"/>
													<input name="UAW" type="hidden" value="<?php print $UAW; ?>"/>
													<input name="MAW" type="hidden" value="<?php print $MAW; ?>"/>
													<input name="LAW" type="hidden" value="<?php print $LAW; ?>"/>
													<input name="SCD" type="hidden" value="<?php print $SCD; ?>"/>
													<input name="OldSleeve" type="hidden" value="<?php print $oldSleeve; ?>"/>

													<div class="form-group">
 														<label for="sub" class="control-label col-sm-6">Refresh</label>
														<div class="col-sm-6">
															<button name="sub" class="btn btn-info form-control col-sm-6" id="sub" value="Update Pattern Back" type="submit">Update Pattern Back</button>
														</div>
													</div>
                       							</div>	
    										</form>
	                       				</div>
                        				<div class="tab-pane fade " id="tab4info">
                        					<div class="row">
                        						<div class="col-sm-12">
                        							<small>
                        								<a href="javascript:;" class="btn btn-info" id="biki-print">Print</a>
                        								<a href="javascript:;" class="btn btn-info" id="biki-addmystuff">Add To My Stuff</a>
                        							</small>
                        						</div>
                        					</div>
                        					<div class="col-sm-12" id="biki-mystuff">	
                        						<?php include 'sweaterpattern.php';?>
                        					</div>
										</div>
                        			</div>	
                     		</div>
        				</div>
    				</div>
    				<div class="row">
                        			Sponsored Content
                        			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- biki neo border -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8632041780575483"
     data-ad-slot="1096474001"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        		</div>
        		</div>
 			</div>
  		</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="http://bikibird.com/neo/js/bootbox.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73392356-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="../../js/drum.js"></script>
<script src="../../js/biki.js"></script>
<script src="../../js/hammer.min.js"></script>
<script src="../../js/hammer.fakemultitouch.js"></script>

</body>
</html>
