<?php
session_start();
//error_reporting(0);
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
                  alert("Şifreleriniz farklı, iki şifreyide aynı girmelisiniz!");
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
			<p> Kpss ile ilgili soru eklemek istiyorsan hemen sitemize üye ol ve soruları eklemeye ve mevcut sorulara yorum yapmaya başla.</p>
            <p><h5> Üye olmak için aşağıdaki formu doldurman yeterli.</h5></p>
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
					<h2>Kayıt Formu<em><br /></em></h2>
					<p><strong class="txt1">Bu siteye kayıt olmanızın nedeni </strong>  bilen üyeler ile aranızdaki etkileşimi ve bilgi alışverişini sağlamak ve  birbirinize yardımcı olmanızdır. İlginizden dolayı teşekkür ederiz.</p> 
					
                        <div class="img-box">
					<div class="box">
					<form action="uyeolma.php"  name="login_form" method="post" onSubmit="return BilgiDogrula()">
						<fieldset>
                                                    <table>
                                                        <tr> <div class="field"><label for="text"><td>Ad:</td></label><td><input type="text"class="text" name="ad" required></input></td></div> </tr> 
                        <tr> <div class="field"><label for="text"><td>Soyad:</td><td><input type="text" class="text" name="soyad" required></input></td></div></tr> 
						<tr>	<div class="field"><label for="text"><td>Kullanıcı Adı:</td></label><td><input type="text" class="text" name="kadi" required></input></td></div></tr> 
                           <tr> <div class="field"><label for="text"><td>E-mail:</td><td><input type="email" class="text" name="eposta" required></input></td></div></tr> 
                            <tr><div class="field"><label for="text"><td>E-mail(Tekrar):</td></label><td><input type="email" class="text" name="eposta2" required></input></td></div></tr> 
                           <tr> <div class="field"><label for="text"><td>Şifre:</td></label><td><input type="password" class="password" name="sifre"required></input></td></div></tr> 
                           <tr> <div class="field"><label for="text"><td>Şifre(Tekrar):</td></label><td><input type="password" class="password" name="sifre2"required></input></td></div></tr> 
                                <tr> <div class="field"><label for="text"><td>Gizli Soru:</td></label><td><input type="text" class="text" name="gizlisoru"required></input></td></div></tr> 
                           <tr> <div class="field"><label for="text"><td>Cevap:</td></label><td><input type="text" class="text" name="gizlicevap"required></input></td></div></tr> 
                          <div class="wrapper">
							<br/>	
                           <tr>   <div class="wrapper"><td><input type="submit" name="kayit" value="Kayıt Ol" /></td></div></tr> 
							</div>
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