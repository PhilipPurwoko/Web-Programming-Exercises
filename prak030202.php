<?php
function hitungDenda($tglHarusKembali, $tglKembali){
    $tglKembali = date_create($tglKembali);
    $tglHarusKembali = date_create($tglHarusKembali);
    if ($tglKembali > $tglHarusKembali){
        $telat = date_diff($tglHarusKembali, $tglKembali)->format("%a");
        return $telat * 3000;
    } else {
        return 0;
    }
}

echo "Besarnya denda adalah: Rp.".hitungDenda("2021-01-03", "2021-01-05");
?>