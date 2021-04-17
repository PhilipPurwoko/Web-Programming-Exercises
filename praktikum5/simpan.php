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
	$str_mhs = 'datamhs.dat';
	// Update data
	$add_mhs = fopen($str_mhs, 'a') or die('Tidak bisa buka file!');
	$new_mhs = PHP_EOL.implode('|', array_slice($_POST, 0, 4));
	fwrite($add_mhs, $new_mhs);
	fclose($add_mhs);

	// Read data & iteration
	$file_mhs = fopen($str_mhs, 'r') or die('Tidak bisa buka file!');
	$arr_mhs = explode(PHP_EOL, fread($file_mhs, filesize($str_mhs)));
	$jml_mhs = count($arr_mhs);
	echo "<h1>DATA MAHASISWA</h1>";
	echo "<table>";
	echo "<tr><th>No</th><th>NIM</th><th>Nama Mhs</th><th>Tanggal Lahir</th><th>Tempat Lahir</th><th>Usia (thn)</th></tr>";
	for($i=0; $i < $jml_mhs; $i++){
		echo "<tr>";
		$curr_mhs = explode('|', $arr_mhs[$i]);
		$index = $i+1;
		echo "<td>".$index."</td>";
		for($j=0; $j < count($curr_mhs); $j++){	
			echo "<td>".$curr_mhs[$j]."</td>";
		}
		echo "<td>".date_diff(date_create($curr_mhs[2]), date_create(date('Y-m-d')))->format("%y")."</td>";
		echo "</tr>";
	}
    echo "</table>";
    echo "Jumlah Data : ".$jml_mhs;
	fclose($file_mhs);
?>