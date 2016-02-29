<?php
session_start();
//error_reporting(0);
?>
<html>
<head>
        <meta charset="utf-8">
</head>
<?php
// http://www.php.net/manual/en/ref.mail.php adresinden alinmistir. 
// MAIL.php dosyasini dosyamiza dahil etmemiz gerekiyor. 
require_once 'eposta/MAIL.php';
$m = new MAIL; // Mail sinifini baslat
$m->From('kullanici.php@gmail.com', 'kpss admin'); // Kimden gönderilecek
$m->AddTo($_SESSION['email'], 'kullanici'); // Kime gönderilecek
$m->Subject('Şifre Değiştirme İşlemi Sonucu'); // Konu
// Mesaj (html kodu da kullanabilirsiniz) (text/html)
$m->HTML('<b>Şifreniz Başarıyla Değiştirilmiştir.</b>');

/*
$c ismini verdigimiz bir baglanti için ayarlarini yapiyoruz. ePosta Transfer uygulamasinin yüklü oldugu
sunucunun adresi 'smtp.gmail.com', baglanacagimiz port '465', SSL yani 'tls' kodlamasini kullanacagiz
baglanti için kullanici hesabi 'kullanici@gmail.com' ve 'parola' gereklidir. Baglanti 10 saniye içerisinde
kurulamazsa hata verecektir, baglandigimiz sunucunun ismi 'localhost' onaylama için 'plain'i kullaniyoruz.
Ayrica, php uzantilarindan OpenSSL modülü yüklü olmalidir. Yoksa hata verir. 
*/
$c = $m->Connect('smtp.gmail.com', 465, 'kullanici.php@gmail.com', 'internet.parola',
'tls', 10, 'localhost', null, 'plain') or die(print_r($m->Result));

// '$c' ismini verdigimiz baglantiyla maili gönder....
echo $m->Send($c) ? "<script type=\"text/javascript\"> alert(\"Şifreniz başarıyla değiştirildi.\"); window.location.href='index.php';  </script> " : 'HATA!!!';

// Sunucuyla baglantiyi kes...
$m->Disconnect();
?>
</html>