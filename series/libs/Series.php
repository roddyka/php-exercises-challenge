<?php 
/**
 * Description: Class Series will help us to connect to database
 * @author Name <email@email.com>
 */

require_once 'db/Database.php';
require_once 'helper.php';


class Series
{

  /**
   * Description: This is a function to search for the next week series
   *
   * @return void
   */
  public function nextSerieForTheWeek()
  {
    // $obj = new Database();
    $tempDate = '2022-12-05';
    $weekDay = '';
    $time = date("H:i");

    $week_day = dayStringToNumber(date("l"));

    $db = new Database();
    return $db->getDataNextSerie($week_day['int'], $time);
  }

  /**
   * Description: Search for all series
   *
   * @return void
   */
  public function allSeries(){
    $db = new Database();
    return  $db->getData();
  }

  /**
   * Description: Search serie by title sending the title string to complete the action
   *
   * @param string $title
   * @return void
   */
  public function serieByTitle(string $title)
  {
    $db = new Database();
    return $db->getDataByTitle($title);
  }
}