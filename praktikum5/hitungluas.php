<?php
	if (isset($_GET['n'])) {
    	if (isset($_GET['d'])) {
    		$r = $_GET['d'] / 2;
    		if (isset($_GET['t'])) {
    			$pi = 3.14159;
    			$luas = (2 * $pi * $r * $_GET['t']) + (2 * $pi * $r * $r);
    			echo "Luas tabung ".$_GET['n']." dengan diameter ".$_GET['d']." dan tinggi ".$_GET['t']." adalah ".$luas." satuan luas";
    		}
    	}
    }
?>