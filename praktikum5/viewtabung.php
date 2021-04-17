<style>
	table, th, td {
		border: 1px solid black;
	}
	body {
		text-align: center;
	}
	table {
		margin: auto;
	}
</style>

<?php
	$str_tabung = 'datatabung.dat';
	$file_tabung = fopen($str_tabung, 'r') or die('Tidak bisa buka file!');
	$arr_tabung = explode(PHP_EOL, fread($file_tabung, filesize($str_tabung)));
	echo "<h1>DATA UKURANG TABUNG</h1>";
	echo "<table>";
	echo "<tr><th>NAMA TABUNG</th><th>DIAMETER</th><th>TINGGI</th><th>LUAS</th></tr>";
	for($i=0; $i < count($arr_tabung); $i++){
		echo "<tr>";
		$curr_tabung = explode(',', $arr_tabung[$i]);
		$n = $curr_tabung[0];
		$d = $curr_tabung[1];
		$t = $curr_tabung[2];
		for($j=0; $j < count($curr_tabung); $j++){
			echo "<td>".$curr_tabung[$j]."</td>";
		}
		echo '<td><a href="hitungluas.php/?n='.$n.'&d='.$d.'&t='.$t.'">View</a></td>';
		echo "</tr>";
	}
    echo "</table>";
	fclose($file_tabung);	
?>