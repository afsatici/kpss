<?php
session_start();
//error_reporting(0);
include 'vtbaglan.inc';
if(isset($_GET['send'])){
if($_GET['send'] == 1)
{
	$email = $vt->real_escape_string($_POST["email"]);
	$q = $vt->query("select * from uyeler where e_mail = '$email'")->fetch_assoc();
}
}
?>
<html> 
<head>
<title>Kpss Soruları</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
            function BilgiDogrula()
                {
                  var sifre=document.forms["login_form"]["sifre"].value;
                  var sifre2=document.forms["login_form"]["sifre2"].value;
 var eposta=document.forms["login_form"]["eposta"].value;
                  var eposta2=document.forms["login_form"]["eposta2"].value;
                  if (sifre!=sifre2)
                  {
                  alert("�?ifreleriniz farklı, iki şifreyide aynı girmelisiniz!");
                  document.forms["login_form"]["sifre"].focus();
                  return false;
                  }  if (eposta!=eposta2)
                  {
                  alert("E-mail bilgileriniz farklı, iki mail adresini de aynı girmelisiniz!");
                  document.forms["login_form"]["eposta"].focus();
                  return false;
                  }
                return true;
          }
              
          </script>
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page1">
<!-- header -->
<div id="header">
	<div class="container">
<!-- .logo -->
		<div class="logo">
			<a href="index.html"><img src="images/kpss1.jpg" alt=""  width="180" height="70"/></a>
		</div>
<!-- /.logo -->
			<form action="arama.php" id="search-form" method="get">
			<fieldset>
				<input type="text" class="text"name="soru"/><input type="submit" value="ARAMA" class="submit" />
			</fieldset>
		</form>
<!-- .nav -->
		<ul class="nav">
			<li><a href="index.php" class="current"><span>ANASAYFA</span></a></li>
			<li><a href="hakkimizda.php"><span>HAKKIMIZDA</span></a></li>
			<li><a href="sorular.php"><span>KPSS</span></a></li>
            <li><a href="iletisim.php"><span>İLETİŞİM</span></a></li>
            <li><?php if(isset($_SESSION["yetki"])){
            if ($_SESSION["yetki"]==true){ echo '<a href="cikis.php"><span>ÇIKIŞ</span></a>';}} else{echo '<a href="uyeol.php"><span>ÜYE OL</span></a>';}?>
                            </li>
		</ul>
<!-- /.nav -->
<!-- .extra-box -->
		<div class="extra-box">
			<div class="inner">
				<h2>Kamu Personeli <span>Seçme Sınavı</span></h2>
				<ul>
					<li><a href="sorular.php">Sorular</a></li>
				 <li><a href="soru_ekle.php">Soru Ekleme</a></li>
					<li><a href="cevaplar.php">Cevap Anahtarı</a></li>
					 <li><a href="anketform.php">Anket</a></li>
					
				</ul>
				<div class="wrapper"><a href="#" class="link1"><em><b>Diğer Sınavlar</b></em></a></div>
			</div>
		</div>
<!-- /.extra-box -->
<!-- .intro-text -->
		<div class="intro-text">
			<h4>Merhaba, KPSS Adayı<span></span><em></em></h4>
			<p> Kpss ile ilgili soruları çözmek istiyorsan hemen sitemize üye ol ve soruları çözmeye başla.</p>
		</div>
<!-- /.intro-text -->
	</div>
</div>
<!-- content -->
<div id="content"><div class="ic"></div>
	<div class="container">
		<div class="wrapper">
			<div class="aside">
				<div class="indent">
					<ul>
					</ul>
				</div>
<!-- .box -->
				<div class="box">
					<h3>NEDEN KPSS?</h3>
					<form action="" id="login-form">
						<div class="img-box">
                        <img src="images/a.jpg" width="200" height="515" />
                        </div>
					</form>
				</div>
<!-- /.box -->
			</div>
                    
			<div class="mainContent">
				<div class="article">
					<h2>Şifremi Unuttum<em><br /></em></h2>
					<?php if(isset($_GET['onay'])) { if($_GET['onay'] == 1) { ?>
						<p><strong class="txt1">Şifreniz </strong>başarıyla değiştirilmiştir. Giriş Yapabilirsiniz.</p>
					<?php } else { ?> 
					<p><strong class="txt1">Cevabınız </strong>hatalı lütfen yeniden deneyiniz.</p>
					<?php } } else { ?> 
					<p><strong class="txt1">Lütfen </strong>aşağıdaki alana E-posta adresinizi giriniz.</p> 
					
                        <div class="img-box">
					<div class="box">
					<form action="<?php if(isset($_GET['send'])) echo "sifremiunuttumdegistir.php"; else echo "sifremiunuttum.php?send=1";?>"  name="login_form" method="post">
						<fieldset>
                                                    <table>
                                                        <tr> <div class="field"><label for="text"><td>E-Posta Adresi:</td></label><td><input type="text" class="text" value="<?php if(isset($_GET['send'])) echo $q['e_mail']; ?>" name="email" required></input></td></div> </tr> 
                                                        
                          <?php if(isset($_GET['send'])) { ?>
                          	
                           <tr> <div class="field"><label for="text"><td>Gizli Sorunuz:</td></label><td><?php echo $q['gizlisoru']; ?></td></div> </tr> 	
                           
                            <tr> <div class="field"><label for="text"><td>Cevabınız:</td></label><td><input type="text" class="text" value="" name="gizlicevap" required></input></td></div> </tr> 
                            <tr> <div class="field"><label for="text"><td>Yeni Şifreniz:</td></label><td><input type="password"  value="" name="yenisifre" required></input></td></div> </tr> 
                          	
                          <?php } ?>
                          <div class="wrapper">
							<br/>	
                           <tr>   <div class="wrapper"><td><input type="submit" value="Devam Et" /></td></div></tr> 
							</div>                          <?php } ?>

                                                    </table>
						</fieldset>
					</form>
				</div>
					</div>
					
				</div>
				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- footer -->
<div id="footer">
	<div class="container">
		<a rel="nofollow" href="http://sonmezsinem.blogspot.com/" target="_blank">Sinem Sönmez</a> Web Tasarım Geliştirme http://sonmezsinem.blogspot.com/<br />
        <a rel="nofollow" href="">Tuğba Geçer</a> Web Tasarım Geliştirme http://gecertugba.blogspot.com/<br />
   <a href="http://www.templates.com/product/3d-models/" target="_blank">Kpss Soruları</a> geliştirilmiştir.  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>