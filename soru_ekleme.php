<?php
session_start();
//error_reporting(0);
include 'vtbaglan.inc';
$sorumetni=$_POST['soru'];
$soru = $vt->real_escape_string($sorumetni);

$alan = (int) $_POST['alan'];
$uyeno=$_SESSION['uyeno'];
$tarih=$_POST['tarih'];
if(!empty($soru))
{
	$vt->query("insert into sorular(sorumetni,alanno,ciktigi_tarih,uyeno) values ('".$soru."','".$alan."','".$tarih."','".$uyeno."')");
	
	$ins_id = $vt->insert_id;
	
	foreach($_POST['siklar'] as $num => $val)
	{
		if($_POST['dogru'] == ($num+1))
		{$dogru = 1;}
		else
		{$dogru = 0;}
		
		$vt->query("insert into secenekler(secenekmetni,soruno,dogru_cevap) values ('".htmlentities($val)."','".$ins_id."','".$dogru."')");
	}
	
	header('location: eklendi.php');
	
}

else {
	header('location: soru_ekle.php?eklendi=0');
}
?>