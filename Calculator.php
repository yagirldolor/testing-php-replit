<?php

class Calculator
{
  function add($a, $b) {
		return $a + $b;
  }
  
  function multiply($a, $b) {
		return $a * $b;
  }
  
  function divide($a, $b) {
    if($b==0){return "ERR";}
       return $a / $b;
  }


}