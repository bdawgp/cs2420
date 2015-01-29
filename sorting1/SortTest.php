<?php
require_once('sort.php');

class SortTest extends \PHPUnit_Framework_TestCase {
  private function generateNumbers($size){
    $arr = array();
    for($i = 0; $i < $size; $i++){
      array_push($arr, rand(1, $size)); 
    }
    return $arr;
  }

  public function testBubbleSort(){
    $arr = $this->generateNumbers(20);
    $acp = $arr; // make a copy
    Sort::bubble($arr);
    sort($acp);

    $this->assertEquals($arr, $acp); 
  }

  public function testShakerSort(){
    $arr = $this->generateNumbers(20);
    $acp = $arr; // make a copy
    Sort::shaker($arr);
    sort($acp);

    $this->assertEquals($arr, $acp); 
  }

  public function testSelectionSort(){
    $arr = $this->generateNumbers(20);
    $acp = $arr; // make a copy
    Sort::selection($arr);
    sort($acp);

    $this->assertEquals($arr, $acp); 
  }
}
