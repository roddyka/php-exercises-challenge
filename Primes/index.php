<?php
/**
 * Description: Using the class to check if the number is Prime or not and show the result
 * @author Rodrigo Antunes <rodrigoka4@gmail.com>:
 */

require('libs/checkNumber.php');

$checkNumber = new checkNumber();

for($num = 1; $num <= 100; $num++) {
    if ($checkNumber->isPrime($num)) {
    //   echo $num."\n".nl2br("[PRIME]");
        echo "$num [PRIME]\n";
    } else {
        echo "$num \n";
    }
}

?>
