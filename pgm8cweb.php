<?php
	function pr($a){
		foreach ($a as $b) {
		foreach ($b as $c) {
		echo $c ." ";
		}echo "<br>";
		}echo "<br>";
		}
		$a = [[1,1,1],[1,1,1],[1,1,1]];
		$b = [[1,1,1],[1,1,1],[1,1,1]];
		echo "<b>First Matrix : </b><br>" ; pr($a);
		echo "<b>Second Matrix : </b><br>"; pr($b);
		
		for ($i=0; $i < 3; $i++)
			for ($j=0; $j < 3; $j++)
				$c[$i][$j] = $a[$i][$j] + $b[$i][$j];

		echo "<b>Addition Of Two Matrix : </b><br>"; pr($c);
?>