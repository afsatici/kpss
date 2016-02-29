<?php
session_start();
//error_reporting(0);
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<?php
include "vtbaglan.inc";


$kullanici = $vt->real_escape_string($_POST["kullanici"]);
$sifre= sha1($_POST["sifre"]);

$sql = "SELECT uyeno,sifre FROM uyeler WHERE kullanici_adi like '$kullanici'";
$sonuc = $vt->query($sql);
//echo $sonuc->num_rows;
if ($vt->error) { 
    echo "Sorguyu çalıştırırken bir hata oluştu". $vt->error;
    echo "<br /> SQL Kodu: $sql";
}
while($satir = $sonuc->fetch_assoc()){
       if ($satir['sifre']==$sifre) {
                $_SESSION["yetki"]= true;
        $_SESSION["kullanici"]= $kullanici;
     
        $_SESSION["e_mail"]=$email;
		   $uyeno = $satir['uyeno'];  
                   $_SESSION["uyeno"]= $uyeno;
                   header ('Location: girissonrasi.php');
       } 
}

if (!isset($_SESSION["yetki"]) OR !($_SESSION["yetki"])){
       $_SESSION["yetki"]= false;
       echo " 
<script type='text/javascript'>  
alert('Kullanıcı adı ya da Şifre bilgileriniz hatalı!'); 
</script> 
";  
       header( "refresh:2;url=index.php" ); 
}
$vt->close();  

?>
    
    </body>
</html>
