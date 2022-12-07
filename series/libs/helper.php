<?php
/**
 * Description: Helper to transform day numbers to string and string to numbers and help us to manage our information
 * @author Rodrigo Antunes <rodrigoka4@gmail.com>
 */


/**
 * Undocumented function
 *
 * @param string $dayString
 * @return array
 */
function dayStringToNumber(string $dayString): array
{
    $week_day = array();

    switch ($dayString) {
        case 'Sunday':
            $week_day['int'] = 0;
            $week_day['string'] = 'Sunday';
            break;
        case 'Monday':
            $week_day['int'] = 1;
            $week_day['string'] = 'Monday';
            break;
        case 'Tuesday':
            $week_day['int'] = 2;
            $week_day['string'] = 'Tuesday';
            break;
        case 'Wednesday':
            $week_day['int'] = 3;
            $week_day['string'] = 'Wednesday';
            break;
        case 'Thursday':
            $week_day['int'] = 4;
            $week_day['string'] = 'Thursday';
            break;
        case 'Friday':
            $week_day['int'] = 5;
            $week_day['string'] = 'Friday';
            break;
        case 'Saturday':
            $week_day['int'] = 6;
            $week_day['string'] = 'Saturday';
            break;
        }

        return $week_day;
}

/**
 * Undocumented function
 *
 * @param integer $int
 * @return array
 */
function numberToDayString(int $int): array
{
    $week_day = array();

    switch ($int) {
        case 0:
            $week_day['int'] = 0;
            $week_day['string'] = 'Sunday';
            break;
        case 1:
            $week_day['int'] = 1;
            $week_day['string'] = 'Monday';
            break;
        case 2:
            $week_day['int'] = 2;
            $week_day['string'] = 'Tuesday';
            break;
        case 3:
            $week_day['int'] = 3;
            $week_day['string'] = 'Wednesday';
            break;
        case 4:
            $week_day['int'] = 4;
            $week_day['string'] = 'Thursday';
            break;
        case 5:
            $week_day['int'] = 5;
            $week_day['string'] = 'Friday';
            break;
        case 6:
            $week_day['int'] = 6;
            $week_day['string'] = 'Saturday';
            break;
        }

        return $week_day;
}
