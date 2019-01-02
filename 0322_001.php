<?php
	class student
	{
		public $name;		
		function __construct($a)//本行定义了带一个形参的构造函数
		{
			$this->name = $a;//传递参数给类中的$name属性
		}
		/*function getInfo($a,$b,$c)//自定义获取属性值的方法
		{
			$this->name=$a;
		}*/
		function say()
		{
			echo "姓名:".$this->name."<br>";
		}
	}
	//对象实例化时，自动调用构造函数并传参给类中的属性
	$abc = new student('王五');
	//$abc->getInfo('王五');//对象调用获取属性值的方法
	$abc->say();
?>