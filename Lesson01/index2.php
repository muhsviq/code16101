<?php
	// this is first comment
	//echo "First php lesson 2<br>";

	
	$secondVar="This is second variable";
	$firstVar="This is diffrent first variable";
	$firstNum='89';
	$secondNum='11';
	$sumNum=$firstNum-$secondNum;
	

	

	function firstFunc(){
        global $firstVar;
        return $firstVar;
		$firstVar='This is first variable<br>';
		return $firstVar;
		//echo $secondVar;
		//echo $thirdVar;

	}

	
	$thirdVar="<b>$firstVar </b> is my first var <b>$secondVar</b> is my second var";
    
    for ($i=0; $i < 45; $i++) { 
    	 echo "<i>$firstVar</i>".$i."<br>";
    }
   

	


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><?php echo firstFunc(); ?></h1>
<h2><?php echo "<i>$firstVar</i>"; ?></h2>
</body>
</html>