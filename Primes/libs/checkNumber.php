<?php
/**
 * Description: Class to check numbers
 * @author Rodrigo Antunes <rodrigoka4@gmail.com>:
 */

class checkNumber
{
   /**
    * Description: this is a function to check if the number is prime or not and return a boolean value
    * @param integer $num
    * @return boolean
    */
   public function isPrime(int $num): bool
   {
      if ($num == 1)
      return false;
      for ($i = 2; $i <= $num/2; $i++)
      {
         if ($num % $i == 0)
         return false;
      }
      return true;
   }
}