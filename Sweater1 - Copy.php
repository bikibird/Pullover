<?php
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

if (strcmp($sub,"Continue")==0)
{

	$FrNeckW1=$neck/3.14+4;
	$FrNeckW2=$neck/3.14+4;
	$FrNeckD=3;
	
	$ShS=$shoulderSlant;

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
	$AWL=8;
	$WW=$waist/2+4;
	$WHL=8;
	$HW=$hips/2+2;

	$BkNeckW1=$neck/3.14+4;
	$BkNeckW2=$neck/3.14+4;
	$BkNeckD=3;

	$UAL=$underarmToWrist/2-1;
	$LAL=$underarmToWrist/2-1;
	$UAW=$upperarm+2;
	$LAW=$wrist;
	$MAW=($UAW+$LAW)/2;


}

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
		<link rel="stylesheet" href="../../css/bikibird.css">

		<title>Pullover Design Form Part Two</title>
	</head>
	<body ng-app="">
		<div ng-include src="'../../navbar.html'"></div>
 		<div class='container'>
			<div class='row' >
				<div class="col-xs-12 col-md-8">
					<div class='row' >
						<h1>Pullover Design Form Part Two</h1>
					</div>
					<div class='row'>
						<ul class="nav nav-tabs nav-biki">
                            <li class="active"><a href="#tab1info" data-toggle="tab">Front</a></li>
                            <li><a href="#tab2info" data-toggle="tab">Sleeve</a></li>
                            <li><a href="#tab3info" data-toggle="tab">Back</a></li>
                        </ul>
                        <div class="panel panel-info biki-no-top">
							<div class="panel-body">
								<div class="tab-content">
                        				<div class="tab-pane fade in active" id="tab1info">
	<form action="Sweater1.php" method="get" role="form" class="form-inline">										
                        					<div class="col-xs-12 col-md-6">
											<img class="img-responsive" src="<?php
print "Frontpng.php?Units=".$units."&Neck=".$neck."&Shoulders=".$shoulders;
print "&Chest=".$chest."&Waist=".$waist."&Hips=".$hips."&UpperArm=".$upperarm;
print "&Wrist=".$wrist."&ShoulderSlant=".$shoulderSlant."&NeckToWaist=".$neckToWaist;
print "&NeckToWrist=".$neckToWrist."&UnderarmToWrist=".$underarmToWrist;
print "&UnderarmToWaist=".$underarmToWaist."&ChestToWaist=".$chestToWaist;
print "&WaistToHips=".$waistToHips;
print "&FrNeckD=".$FrNeckD."&FrShW=".$FrShW."&FrShS=".$FrShS;
print "&FrShUArm=".$FrShUArm."&FrAHD=".$FrAHD."&FrAHW1=".$FrAHW1;
print "&FrAHW2=".$FrAHW2."&FrAWL=".$FrAWL."&FrWW=".$FrWW;
print "&FrWHL=".$FrWHL."&UAL=".$UAL."&LAL=".$LAL."&UAW=".$UAW."&LAW=".$LAW."&MAW=".$MAW;
print "&ASC=".$ASC."&SCB=".$SCB."&SCD=".$SCD;
?>"/>
<button name="sub" class="btn btn-info col-md-6" id="sub" value="Update Image" type="submit">Update Image</button>

                        					</div>	
                        					<div class="col-md-6">


	<div class="form-control"><label for="FrNeckW1" class="col-md-8">Neckline Top Width</label><input name="FrNeckW1" class="form-control col-md-4" id="FrNeckW1" value="<?php print $FrNeckW1; ?>" type="number"></div>
	<div class="form-control"><label for="FrNeckW2" class="col-md-8">Neckline Bottom Width</label><input name="FrNeckW2" class="form-control col-md-4" id="FrNeckW2" value="<?php print $FrNeckW2; ?>" data-toggle="tooltip" title="Applies Square Neck Only." type="number"></div>
	<div class="form-control"><label for="FrNeckD" class="col-md-8">Neckline Depth</label><input name="FrNeckD" class="form-control col-md-4" id="FrNeckD" value="<?php print $FrNeckD; ?>" type="number"></div>
	<div class="form-control"><label for="ShW" class="col-md-8">Shoulder Width</label><input name="ShW" class="form-control col-md-4" id="ShW" value="<?php print $ShW; ?>" type="number"></div>
	<div class="form-control"><label for="ShS" class="col-md-8">Shoulder Slant</label><input name="ShS" class="form-control col-md-4" id="ShS" value="<?php print $ShS; ?>" type="number"></div>
	<div class="form-control"><label for="ShUArm" class="col-md-8">Shoulder to Underarm</label><input name="ShUArm" class="form-control col-md-4" id="ShUArm" value="<?php print $ShUArm; ?>" type="number"></div>
	<div class="form-control"><label for="AHD" class="col-md-8">Armhole Height</label><input name="AHD" class="form-control col-md-4" id="AHD" value="<?php print $AHD; ?>" type="number"></div>
	<div class="form-control"><label for="AHW1" class="col-md-8">Armhole Width 1</label><input name="AHW1" class="form-control col-md-4" id="AHW1" value="<?php print $AHW1; ?>" type="number"></div>
	<div class="form-control"><label for="AHW2" class="col-md-8">Armhole Width 2</label><input name="AHW2" class="form-control col-md-4" id="AHW2" value="<?php print $AHW2; ?>" data-toggle="tooltip" title="Bind Off" type="number"></div>
	<div class="form-control"><label for="AWL" class="col-md-8">Length, Armhole to Waist</label><input name="AWL" class="form-control col-md-4" id="AWL" value="<?php print $AWL; ?>" type="number"></div>
	<div class="form-control"><label for="WW" class="col-md-8">Waist Width</label><input name="WW" class="form-control col-md-4" id="WW" value="<?php print $WW; ?>" type="number"></div>
	<div class="form-control"><label for="WHL" class="col-md-8">Length, Waist to Hips</label><input name="WHL" class="form-control col-md-4" id="WHL" value="<?php print $WHL; ?>" type="number"></div>
	<div class="form-control"><label for="HW" class="col-md-8">Hip Width</label><input name="HW" class="form-control col-md-4" id="HW" value="<?php print $HW; ?>" type="number"></div>
	
                        					</div>	
</form>

                        				</div>
                        				<div class="tab-pane fade" id="tab2info">
     										tab 2                   			
                        				</div>
                        				<div class="tab-pane fade" id="tab3info">
          									tab 3              				
                        				</div>
                        		</div>
                    		</div>
                    		<div class="panel-heading panel-info">
                    			footer
							</div>
        				</div>
    				</div>
        		</div>
   			  	<div class="col-md-3 col-md-offset-1">
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
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</body>
</html>
