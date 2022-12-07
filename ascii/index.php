<?php
/**
 * Description: Write a PHP script to generate a random array containing all the ASCII characters from comma (“,”) to
 * pipe (“|”). Then randomly remove and discard an arbitrary element from this newly generated array.
 * Rodrigo: Sorry I didn't generate the characters at random
 * @author Rodrigo Antunes <rodrigoka4@gmail.com>
 */

require('lib/ascii.php');

$ascii = new ascii();
var_dump($ascii->asciiResultBetweenTwoChar(0,255,",","|"));
?>

