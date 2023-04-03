<?php
$date = date("j F Y H:i", strtotime($_POST["date"])); // save date and time
$url = $_POST["url"]; // save Google Maps URL to log file
$device = $_POST["device"]; // save user agent
$log = "$date|$url|$device\n";
$file = "log.txt";
$handle = fopen($file, 'a');
fwrite($handle, $log);
fclose($handle);
?>
