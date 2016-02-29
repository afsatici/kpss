<?php
session_start();
//error_reporting(0);
?>
<html>
<head>
        <meta charset="utf-8">
</head>

<?php  
include 'vtbaglan.inc';

//error_reporting(0);
$ad=$vt->real_escape_string($_POST["ad"]);

$soyad=$vt->real_escape_string($_POST["soyad"]);

$kadi=$vt->real_escape_string($_POST["kadi"]);

$email=$vt->real_escape_string($_POST["eposta"]);

$email2=$vt->real_escape_string($_POST["eposta2"]);

$sifre=sha1($_POST["sifre"]);
$_SESSION['sifre']=$sifre;

$sifre2=sha1($_POST["sifre2"]);

$sql = "INSERT INTO uyeler (kullanici_adi,sifre,ad,soyad,e_mail,gizlisoru,gizlicevap) VALUES ('$kadi','$sifre','$ad','$soyad','$email','$gizlisoru','$gizlicevap');";
$vt->query($sql);

if($email != $email2)
{
	echo "<script>alert('message');
window.location = 'uyeol.html';</script>";
}

if ($vt->error) { 
    echo "Sorguyu çalıştırırken bir hata oluştu". $vt->error;
    echo "<br/> SQL Kodu: $sql";
    } else { header ('Location: uyelik.php');
       
    }

$vt->close();
?>
</html>