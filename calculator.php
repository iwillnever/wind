<?php
header("Content-type:text/html;charset =utf-8");
class calculator{
	public $num1;
	public $num2;
	var $add;
	var $dec;
	var $multi;
	var $chu;
	function __construct($a,$b){
		$this->num1 = $a;
		$this->num2 = $b;
		$this->add = $a + $b;
		$this->dec = $a - $b;
		$this->multi = $a*$b;
		$this->chu = $a/$b;
	}
	function calculate(){
		$num1 = $this->num1;
	    $num2 = $this->num2;
	    $add = $this->add;
	    $multi = $this->multi;
	    $dec = $this->dec;
	    $chu = $this->chu;
		echo "$num1 + $num2 = $add"."<br>";
	    echo "$num1 - $num2 = $dec"."<br>";
	    echo "$num1 * $num2 = $multi"."<br>";
	    echo "$num1 / $num2 = $chu"."<br>";
    }
}
    $gr = new calculator(333,777);
	$gr->calculate();
?>

