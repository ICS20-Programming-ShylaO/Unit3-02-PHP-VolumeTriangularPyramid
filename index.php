<!DOCTYPE html>
<!-- ICS20-Programming-Unit3-02-PHP-VolumeTriangularPyramid -->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Right Triangular Pyramid, Using PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon[1].png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32[1].png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16[1].png">
    <link rel="manifest" href="./favicon/site[1].webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Volume of a Right Triangular Pyramid, Using PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Calculating the Volume of a Right Triangular Pyramid, Using PHP</h1>";
			echo "<h3>This program will calculate the volume of a right triangular pyramid in cm<sup>3</sup>.</h3>";
		?>
    <center>
    <img src="./images/triangle_pyramid.jpg" alt="Volume of a Right Triangular Pyramid" width="50%" height="50%">
    </center>
		<!-- form to get a, b, and height of trapezoid from the user -->
    <form action="./answers.php" method="post" target="results">
      <label for="lblSideA">a (cm):</label>
      <input type="text" id="side-a-tri-pyramid" placeholder="Enter Side a (cm)..." name="side-a-tri-pyramid"><br><br>
      <label for="lblSideB">b (cm):</label>
      <input type="text" id="side-b-tri-pyramid" placeholder="Enter Side b (cm)..." name="side-b-tri-pyramid"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="text" id="height" placeholder="Enter the height (cm)..." name="height"><br><br>

      <input type="submit" value="Calculate Volume">
		</form>

			<!-- iframe for the results to show on the web page. -->
      <center>
			<iframe id="results" name="results">	
				The volume of the right triangular pyramid is " $volumeRounded" cm<sup>3</sup>.
	    </iframe>
      </center>
	</body>
</html>