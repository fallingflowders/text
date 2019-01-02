<?php
	class type
	{
		public $services;//军种
		public $post;//岗位
		public $arms;//武器
		function __construct($a,$b,$c)
		{
			$this->services=$a;
			$this->post=$b;
			$this->arms=$c;
		}
		function say()
		{
			echo "军种:".$this->services."<br>";
			echo "岗位:".$this->post."<br>";
			echo "武器:".$this->arms."<br>";
			echo "<hr color='red'>";
		}
	}
	$arr = new type('侦察兵','战场','冲锋枪');
	$arr->say();
	$arr = new type('潜水兵','水下','水枪');
	$arr->say();
	$arr = new type('国旗兵','升旗台','步枪');
	$arr->say();
?>