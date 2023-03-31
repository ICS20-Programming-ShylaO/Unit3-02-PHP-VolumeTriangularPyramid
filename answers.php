<?php
	// get the side a, b, and height from the textfields
	$sideA = $_POST['side-a-tri-pyramid'];
	$sideB = $_POST['side-b-tri-pyramid'];
	$height = $_POST['height'];

	// calculate the area
	$volume = (1/6 * $sideA * $sideB * $height);
  $volumeRounded = round($volume, 2);
?>
<h3>Results:</h3>
The volume of the right triangular pyramid is <?php echo "$volumeRounded" ?>cm<sup>3</sup>.