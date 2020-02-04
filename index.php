<?php
	function quick_Sort($array){
		if(count($a)<=1){
			return $a;
		}
		else{
			$k=$a[0];
			$x=$y=array();
			for($i=1;$i<count($a);$i++){
				if($a[$i]<$k){
					$x[]=$a[$i];
				}
				else {
					$y[]=$a[$i];
				}
			}
		}
		return array_merge(quick_Sort($x),array($k),quick_Sort($y));
	}
	$arr = array(1,4,2,3,6,7);
	print_r(quick_Sort($arr)); 
?>