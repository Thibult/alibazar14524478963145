<?php
$ip = $_SERVER['REMOTE_ADDR'];
$file = 'visitor_ips.txt';

// Open the file for appending
$handle = fopen($file, 'a');
if ($handle) {
    fwrite($handle, $ip . "\n");
    fclose($handle);
}
?>
