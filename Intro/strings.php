<?php

// Create an array called $string1 with three elements
$string1 = ['hola', 1, 'adios'];

// Output the second element of the array (index 1)
echo $string1[1]; // This will display "1" on the screen

// Calculate and output the length (number of characters) of the string in $stringlen
$stringlen = "Hola amigos";
echo "<br>" . strlen($stringlen); // This will display the length of the string

// Convert the string in $stringop to uppercase and output it
$stringop = "Hola, este texto debe estar en mayusculas";
echo '<br>' . strtoupper($stringop); // This will display the string in uppercase

// Replace 'r' with 's' in the string $stringrep and output the result
$stringrep = "rodar";
echo '<br>' . str_replace('r', 's', $stringrep); // This will display "sodas"

?>
