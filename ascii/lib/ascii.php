<?php
/**
 * Description: Ascii class to work with characters
 * @author Name <email@email.com>
 */

 class ascii {

    /**
     * Description: Function to show the result between two char on Ascii letters and symbols, using a range of numbers 0-255 and two char you want to search
     *
     * @param integer $rangeA
     * @param integer $rangeB
     * @param string $charA
     * @param string $charB
     */
    public function asciiResultBetweenTwoChar(int $rangeA, int $rangeB, string $charA, string $charB)
    {
        $array = array();
        $rangeCharacters =  range ($rangeA , $rangeB);
        $chars = array_map('chr', $rangeCharacters);

        $searchComma = array_search($charA, $chars);
        $searchPipe = array_search($charB, $chars);

        print($charA." array index in all characteres: ".$searchComma);
        print("\n");
        print($charB." array index in all characters: ".$searchPipe);
        print("\n");

        $comma_array = array_slice($chars, $searchComma);

        $searchPipe = array_search($charB, $comma_array);
        print($charB." array index in '".$charA."(comma)' array: ".$searchPipe);
        print("\n");

    
        print("Result between ".$charA." and ".$charB."");
        print("\n");

        $result = array_slice($comma_array, 0, $searchPipe+1);

        print("\n");
        print_r($result);

        $searchComma = array_search($charA, $comma_array);
        return $this->removeRandomItemFromArray($searchComma, $searchPipe, $result);
    }


    /**
     * Description: Choosing between two numbers to create a random index to remove a item from array
     *
     * @param integer $minToRand
     * @param integer $maxToRand
     * @param array $array
     * @return array
     */
    private function removeRandomItemFromArray(int $minToRand, int $maxToRand, array $array): array
    {
        print("Random number between ".$minToRand ." to ".$maxToRand.": ");
        print("\n");
        $rand =  rand(1, (int)$maxToRand);
        print($rand);
        print("\n");
        
        $searchNewItem = $array[$rand];
        print("Char removed from array: ".$searchNewItem);
        print("\n");

        unset($array[$rand]);
        return $array;
    }
 }
?>