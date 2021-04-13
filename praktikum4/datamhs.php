<style>
	table, th, td {
		border: 1px solid black;
	}
</style>

<?php
	$str_mhs = 'datamhs.dat';
	$file_mhs = fopen($str_mhs, 'r') or die('Tidak bisa buka file!');
	$arr_mhs = explode(PHP_EOL, fread($file_mhs, filesize($str_mhs)));
	echo "<table>";
	echo "<tr><th>No</th><th>NIM</th><th>Nama Mhs</th><th>Tanggal Lahir</th><th>Tempat Lahir</th><th>Usia (thn)</th></tr>";
	for($i=0; $i < count($arr_mhs); $i++){
		echo "<tr>";
		$curr_mhs = explode('|', $arr_mhs[$i]);
		$index = $i+1;
		echo "<td>".$index."</td>";
		for($j=0; $j < count($arr_mhs); $j++){
			echo "<td>".$curr_mhs[$j]."</td>";
		}
		echo "<td>".date_diff(date_create($curr_mhs[2]), date_create(date('Y-m-d')))->format("%y")."</td>";
		echo "</tr>";
	}
    echo "</table>";
	fclose($file_mhs);	
?>