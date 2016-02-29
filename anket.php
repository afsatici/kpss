<?php
session_start();
//error_reporting(0);
include 'vtbaglan.inc';
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
		<form action="" id="search-form">
			<fieldset>
				<input type="text" class="text" /><input type="submit" value="ARAMA" class="submit" />
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
			<h4>Merhaba <span></span><em></em></h4>
			<p>Anketimize katıldığınız için teşekkür ederiz.</p>
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
					<h3>Anket Sonuçları<em><br /></em></h3>
					
			<?php 
                       $evet=1;
                       $hayir=0;
                       $sonuce=0;
                        $sonuch=0;
                          $sonuc=$_POST["sonuc"];        
                        if($sonuc=="evet"){
                       $sqlekle= "insert into anket(sonuc) values ('$evet');";    $vt->query($sqlekle); }
                    
                        else{ $sqlekle= "insert into anket(sonuc) values ('$hayir');"; 
                        $vt->query($sqlekle); }   
                        $sql="SELECT * from anket";
    $son=$vt->query($sql);
    while($satir = $son->fetch_assoc()){
        if($satir['sonuc']==1)
            {
            $sonuce++;
            }
            else{$sonuch++;}
    }
    $orane=ceil(($sonuce-$sonuch)/$sonuce*100);
    $oranh=100-$orane;?>
        <p><strong class="txt1"> <?php echo "Evet: " ?></strong> <?php echo "%".$orane;?> 
<!--                                        <progress value=$orane max="100" background-color="#f3f3f3"></progress> -->
     <p><strong class="txt1"> <?php echo "Hayır: " ?></strong> <?php echo "%".$oranh;?> 
<!--                                        <progress value="20" max="100"></progress>
                   -->
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