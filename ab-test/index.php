<?php 
/**
 * Description: Loading an php/html file depends of the percent to make an ABTest
 */
require_once('vendor/autoload.php');
require_once('libs/ABTest.php');

$data = new ABTest("1");
$data_info = $data->getData();
$rand = rand(1, 100);
$sum = 0;

switch ($rand) {
    case $rand <= $data_info[0]['splitPercent']:
        loadPage($data_info[0]['designId']);
        break;
    
    case $rand > $data_info[0]['splitPercent']:
        loadPage($data_info[1]['designId']);
        break;
    
    case $rand < $data_info[1]['splitPercent'] + $data_info[0]['splitPercent']:
        loadPage($data_info[1]['designId']);
        break;
    
    case $rand > $data_info[1]['splitPercent'] + $data_info[0]['splitPercent']:
        loadPage($data_info[2]['designId']);
        break;
    
    default:
        loadPage($data_info[0]['designId']);
        break;
}

/**
 * Undocumented function
 *
 * @param integer $id
 * @return void
 */
function loadPage(int $id){
    include("index".$id.".php");
}
