<?php
/**
 * Description: Class ABTest to connect to Exads Data and bring information about what design use
 * @author Name <email@email.com>
 */
use Exads\ABTestData;

/**
 * Undocumented class
 */
class ABTest
{

  public $promoId;

  /**
   * Description: Construct function to apply the id and use it to get data
   *
   * @param integer $promoId
   */
  public function __construct(int $promoId)
  {
    $this->promoId = $promoId;
  }

  /**
   * Description: Get all data about ABTest on Exads to send the information to be used
   *
   * @return void
   */
  public function getData()
  {
    $abTest = new ABTestData($this->promoId);
    $promotion = $abTest->getPromotionName();
    $designs = $abTest->getAllDesigns();
    return $designs;
  }
}