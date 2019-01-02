<?php
	class school
	{
		public $name;
		public $address;
		public $direction;//方向
		public $people;
		public $time;
		public $host;
		public $size;
		public $education;
		function __construct($a,$b,$c,$d,$e,$f,$g,$h)
		{
			$this->name=$a;
			$this->address=$b;
			$this->direction=$c;
			$this->people=$d;
			$this->time=$e;
			$this->host=$f;
			$this->size=$g;
			$this->education=$h;
		}
		function say()
		{
			/*echo "校名:".$this->name."<br>";
			echo "校址:".$this->address."<br>";
			echo "教学方向:".$this->direction."<br>";
			echo "在校人数:".$this->people."<br>";
			echo "建校时间:".$this->time."<br>";
			echo "现任院长:".$this->host."<br>";
			echo "占地面积:".$this->size."<br>";
			echo "学历层次:".$this->education."<br>";*/
			$str = array(
							'校名'=>$this->name,
							'校址'=>$this->address,
							'教学方向'=>$this->direction,
							'在校人数'=>$this->people,
							'建校时间'=>$this->time,
							'现任院长'=>$this->host,
							'占地面积'=>$this->size,
							'学历层次'=>$this->education
						);
			//print_r($str);
			//echo "<hr color='blue'>";
			foreach($str as $k=>$v)
			{
				echo $k.'------'.$v.'<br>';
			}
			$year = date('Y');
			//echo "当前年份:".$year."<br>";
			echo "<font color='red'><b>办学历史:".($year-$this->time)."年</b></font>";
			echo "<hr color='blue'>";
		}
	}
	$arr = new school('中央音乐学院','北三环中路85号','国家音乐人才及培训基地',15000,'1950年','XXX','120亩','本科及以上');
	$arr->say();
	$arr2 = new school('北京大学','北五环东路','综合性大学',23000,'1898年','XXX2','200亩','本科及以上');
	$arr2->say();

	
?>