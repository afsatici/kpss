<?php
$vt = new mysqli('localhost', 'root','', 'kpss');
if ($vt->connect_error) {echo $vt->connect_error;die;}

$vt->set_charset('utf8');
if ($vt->error) { echo "Karakter seti ayarlanamadý.". $vt->error;}

?>