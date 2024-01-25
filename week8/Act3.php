<!DOCTYPEmar html>
<html>

<style>

</style>

<head>

<title>Activity</title>
<?php 
echo "<h1>Pongos, Ichiro Emmanuel</h1>";
?>
</head>
<body>

<?php
// introduction
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
?> 

<?php
// variables and operators
$testtitle = "Variables";
$txt2 = "x is 10 and y is 6, Summed to: ";
$x = 10;
$y = 6;
$Total = $x + $y;

echo "<h3>" . $testtitle . "</h3>";

echo "x = " . $x . "<br>";
echo "y = " . $y . "<br>";
echo $txt2 . $Total . "<br>";
echo "x + y" . "<br>";
?> 

<?php

echo "<h3> Loop and Function Test </h3>";

// Functions and Loops
function addTillTen(){
	$i = 0;
	while ($i < 10){
		++$i;
		echo $i . " Loop" . "<br>";
	}	
}
addTillTen();
?> 


</body>



</html>