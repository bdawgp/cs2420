<?php

class Sort {
  private static function compareSwap(array &$arr, $a, $b){
    if($arr[$a] < $arr[$b]){
      $tmp = $arr[$a];
      $arr[$a] = $arr[$b];
      $arr[$b] = $tmp;
      return true;
    }
    return false;
  }

  public static function bubble(array &$arr){
    for($max = sizeof($arr) - 1; $max > 0; $max--){
      $swap = false;
      for($i = 1; $i <= $max; $i++){
        if(self::compareSwap($arr, $i, $i-1)){
          $swap = true;
        }
      }
      if(!$swap) break;
    }
    return $arr;
  }

  public static function shaker(array &$arr){
    $min = 0;
    $max = sizeof($arr) - 1;
    for($t = 0; $t < sizeof($arr); $t++){
      $swap = false;
      if($t % 2 == 0){
        for($i = 1; $i <= $max; $i++){
          if(self::compareSwap($arr, $i, $i-1))
            $swap = true;
        }
        $max--;
      }else{
        for($i = $max - 1; $i >= $min; $i--){
          if(self::compareSwap($arr, $i+1, $i))
            $swap = true;
        }
        $min++;
      }
      if(!$swap) break;
    }
    return $arr;
  }

  public static function selection(array &$arr){
    for($min = 0; $min < sizeof($arr); $min++){
      $idx = $min;
      for($i = $min; $i < sizeof($arr); $i++){
        if($arr[$i] < $arr[$idx])
          $idx = $i;
      }
      self::compareSwap($arr, $idx, $min);
    }
    return $arr;
  }
}
