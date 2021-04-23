<?php
setcookie('namauser', null, -1, '/');
// setcookie("namauser", "", time() - 3600);
// redirect ke halaman login
header("Location: form.html");

?>
