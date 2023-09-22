<?php

// Declare a variable called $var and assign the string 'hola' to it
$var = 'hola';

// Define a constant called 'variable' with the value 'sale'
define('variable', 'sale');

// Output the value of $var followed by " amigo!"
echo $var . " amigo!"; // This will display "hola amigo!"

// Attempting to redefine a constant will result in an error
// Uncommenting the next line will result in an error.
// define('variable', 'hola');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Primer script con variables</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<!-- Output the value of the 'variable' constant within an HTML <h1> tag -->
	<h1><?php echo variable; ?></h1> <!-- This will display "sale" -->
</body>
</html>
