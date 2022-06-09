<?php
//calculator-subtract-test.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase {
	function subtract() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->subtract(4.2,2.1), 2.1, "4.2 - 2.1");
	  $this->assertEqual($myCalc->subtract(4,2), 2, "4 - 2");
	}
}