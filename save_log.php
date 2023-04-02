<?php
$date = date("j F Y H:i", strtotime($_POST["date"])); // menyimpan tanggal dan jam
$url = $_POST["url"]; // menyimpan URL Google Maps ke file log
$device = $_POST["device"]; // menyimpan user agent
$log = "$date|$url|$device\n";
$file = "log.txt";
$handle = fopen($file, 'a');
fwrite($handle, $log);
fclose($handle);
?>
