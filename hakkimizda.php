<?php
session_start();
//error_reporting(0);
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
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
			<h3><br />Biz Kimiz?<span></span><em></em></h3>
			<p></p>
			
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
					<h2>Hoşgeldiniz<em><br /></em></h2>
					<p><strong class="txt1">Bizler hiçbir amaç gütmeyip</strong> sizin gibi öğrencilerin veya mezunların kamuda seçme ve yerleştirmeleri için çeşitli sorular ile kendinizi denemenizi sağlamak için buradayız.
                    </p>
                    <p>Biliyorsunuz ki bu sınav kamu kurumlarına memur alımınlarında seçici sınav olarak uygulanır ve bizde sitemizde bulunan 1000'den fazla KPSS sorusunu sizler için ücretsiz hazırladık.</p>
                    <p class="txt1"></p> 
					<div class="img-box">
					<br><img src="images/kpss.jpg" alt="" /></br>
                        <div/>
				</div>
                <div class="box-1">
                <p><h4>Sinem Sönmez</h4></p>
                <h6>BÖTE öğrencisiyim. Bu site veritabanı ödevinde verilmiş olup bizim tasarladığımız bir projedir. Bu geliştirmek için elimizden geleni yapmaya çalışacağız.</h6>
                <img src="images/sinem.jpg" alt="" width="600" height="600" /></div><br />
                </div>
      			<div class="box-1">
                <h4>Tuğba Geçer</h4>
                <h6>BÖTE öğrencisiyim. Bu site veritabanı ödevinde verilmiş olup bizim tasarladığımız bir projedir. Bu geliştirmek için elimizden geleni yapmaya çalışacağız.</h6>
                <img src="images/tugba.jpg" alt="" width="600" height="600"/></div><br />  
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