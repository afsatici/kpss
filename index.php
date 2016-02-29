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
			<h2>KPSS<span></span><em>Sorularınız için dogru yerdesiniz</em></h2>
			<p> Kamu Personeli Seçme Sınavı olup Öğrenci seçme ve yerleştirme merkezi (ÖSYM) tarafından yılda bir defa düzenlenir.</p>
			<div class="wrapper"><a href="#" class="button">Devamı için...</a></div>
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
					<h3>Giriş Formu</h3>
					<form action="uyegiris.php" id="login-form" method="post">
						<fieldset>
							<div class="field"><label for="text">Kullanıcı Adı :</label><input type="text" class="text" name="kullanici"/></div>
							<div class="field"><label for="text">Şifre :<br/></label><input type="password" class="password" name="sifre"/></div>
							<div class="wrapper">
							<form><table>
							<tr><td><input type="submit" value="Giriş" class="submit fleft"/></td>
							<td><div class="wrapper"><a href="sifremiunuttum.php" class="button">Şifremi Unuttum</a></div></td>
                            <tr><div class="wrapper"><a href="uyeol.php" class="button">KAYIT OL</a></div></tr>
							</table>	
							</div>
						</fieldset>
					
					</form>
				</div>
<!-- /.box -->
			</div>
			<div class="mainContent">
				<div class="article">
					<h2>Hoşgeldiniz<em><br /></em></h2>
					<p><strong class="txt1">Kamu Personeli Seçme Sınavı</strong>  olup Öğrenci seçme ve yerleştirme merkezi (ÖSYM) tarafından yılda bir defa düzenlenir..</p> 
					<div class="img-box">
						<img src="images/img1.jpg" alt="" />
                        <div/>
                        <div class="img-box">
						<a rel="nofollow" href="http://www.mustafaekici.com.tr/" target="_blank"></a>  Kamu kurumlarına memur alımınlarında seçici sınav olarak uygulanır. Sitemizde bulunan 1000'den fazla KPSS sorusunu ücretsiz olarak çözebilirsiniz. KPSS soruları sitemizde gurup grup ayrılmış durumdadır..
					</div>
					
				</div>
				<h3>Denemeler</h3>
				<div class="wrapper">
					<div class="col-1">
						<div class="box1">
							<p><img src="images/img2.jpg" alt="" /></p>
							<h4>Deneme 1</h4>
							<p class="p1"></p>
							<div class="wrapper"><a href="#" class="link1"><em><b>Daha fazlası</b></em></a></div>
						</div>
					</div>
					<div class="col-2">
						<div class="box1">
							<p><img src="images/img3.jpg" alt="" /></p>
							<h4>Deneme 2</h4>
							<p class="p1"></p>
							<div class="wrapper"><a href="#" class="link1"><em><b>Daha fazlası</b></em></a></div>
						</div>
					</div>
					<div class="col-3">
						<div class="box1">
							<p><img src="images/img1.jpg" alt="" witdh="10" height="80"/></p>
							<h4>Deneme 3</h4>
							<p class="p1"></p>
							<div class="wrapper"><a href="#" class="link1"><em><b>Daha fazlası</b></em></a></div>
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