<?php
session_start();
//error_reporting(0);
include 'vtbaglan.inc';

	$email		 = $vt->real_escape_string($_POST["email"]);
	$gizlicevap	 = $vt->real_escape_string($_POST["gizlicevap"]);
	$sifre		 = sha1($_POST["yenisifre"]);
	
	
	$say = $vt->query("select * from uyeler where e_mail = '$email' and gizlicevap='$gizlicevap'")->num_rows;
	$_SESSION['email']=$email;
	if($say>0)
	{
		$vt->query("update uyeler set sifre = '$sifre' where e_mail='$email'");
		
                               header("location: email.php");
             
	}
	else {
		header("location: sifremiunuttum.php?onay=0");
	}
?>