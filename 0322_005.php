<?php
	class house
	{
		public $house_id;
		public $addr;
		public $name;
		public $people;
		public $teacher;
		public $width;
		public $length;
		function __construct($house_id,$addr,$name,$people,$teacher,$width,$length)
		{
			$this->house_id =$house_id;
			$this->addr     =$addr;
			$this->name     =$name;
			$this->people   =$people;
			$this->teacher  =$teacher;
			$this->width    =$width;
			$this->length    =$length;
		}
		function say()
		{
			$str = array (
							'房间号'  =>$this->house_id,
							'地址'    =>$this->addr,
							'宿舍长'  =>$this->name,
							'入住人数'=>$this->people,
							'教官姓名'=>$this->teacher,
							'宽'      =>$this->width,
							'长'      =>$this->length
						);
			foreach($str as $k=>$v)
			{
				echo $k."-----".$v."<br>";
			}
			$a = '8';
			if($str['入住人数']==$a)
			{
				echo "入住人数已满8人";
			}
			else
			{
				echo "<hr>";
				echo "标准入住人数:".$a."人<br>";
				echo "实际入住人数:".$str['入住人数']."人<br>";
				echo "入住差额:".($a-$str['入住人数'])."人<br>";
			}
			echo "面积大小:长".$str['长']."*宽".$str['宽']."=".($str['长']*$str['宽'])."平米<br>";
			echo "人均平米:".substr(($str['长']*$str['宽']/$str['入住人数']),0,3);
			//$size= $this->width*$this->length;
			//echo "标准人数与入住人数差额:".($a-$this->people)."<br>";
			//echo "面积:".$size."<br>";
			//echo "人均平米:".($size/$this->people);
		}
	}
	$arr = new house(25,'F栋','武欣宜',7,'高教',5,8);
	$arr->say();
?>