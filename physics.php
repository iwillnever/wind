<?php
header("Content-type:text/html;charset = utf-8");
//题目：如述所示的电路中:R1与R2并联，A1测通过R1的电流，A在干路上测总电流，电阻R1的阻值为10欧姆,
//闭合开关S，电流表A1的示数为0.3A，电流表A的示数为0.5A.
//求:(1)通过电阻R2的电流.(2)电源电压.(3)电阻R2的阻值
class solve_problems{
	static $R1 = 10;
	var $R2;
	static $I1 = 0.3;
	var $I2;
	static $I = 0.5;
	var $E;
	public function question1(){
		$I = self::$I; 
		$I1 = self::$I1;
		$I2 = $I - $I1;
		return $I2;
	}
	function question2(){
		$R1 = self::$R1;
		$I1 = self::$I1;
		$E = $R1*$I1;
		return $E;
	} 
	function question3(){
		$I2 = self::question1();
		$E = self::question2();
		$R2 = $E/$I2;
                return $R2;
	}
}
$I2 = solve_problems::question1();
$E = solve_problems::question2();
$R2 = solve_problems::question3();
echo "通过R2的电流是: $I2"."A<br>";
echo "电源电压是：$E"."V<br>";
echo "R2的阻值是：$R2"."欧<br>";
?>
