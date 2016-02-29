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
<!--<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>-->
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
			<h2><span></span><em></em></h2>
			
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
									 <?php
                 
                    $sql="SELECT * FROM sorular";
                    $sonuc=$vt->query($sql);
                          
                   
                        
                 
//                        }
//                    for($soru=0;$soru<4;$soru++)
//                    {   $satir = $sonuc->fetch_assoc();
                   $sorusayisi=1;
                     while($satir = $sonuc->fetch_assoc()){   
                    $sorumetni = $satir["sorumetni"];
                    $soruno=$satir["soruno"];
//                        if ($sorumetni!=null)
//                    {
                         ?>   <p><strong class="txt1"> <?php echo "Soru ".$sorusayisi.": ";?> </strong> <?php echo $sorumetni;?> <br/><br/>
                             <div class="img-box">
						
                                                    <?php
               $sqlsecenek="SELECT * FROM secenekler where soruno=$soruno ";
                    $son=$vt->query($sqlsecenek);
                       for($i=0;$i<5;$i++) {  
                   
                            $sec = $son->fetch_assoc();
          $secenekmetni = $sec["secenekmetni"]; 
            
          
                         ?>   <p><strong class="txt1"> 
                             <?php if($i==0){echo "A: ";}
                         elseif($i==1){echo "B: ";}
                         elseif($i==2){echo "C: ";}
                         elseif($i==3){echo "D: ";}
                         else{echo "E: ";}
                         ?> </strong> <?php echo $secenekmetni;?> 

                             <?php
                    } if(isset($_SESSION["yetki"])){
            if ($_SESSION["yetki"]==true){ ?>
                     <table><tr>
               
                <td>  <div class="wrapper"><?php echo "<a href='yorumform.php?soruno=$soruno'"; ?> class="button">YORUM EKLE</a></div></td>
				</tr>
              </table>
             
                             <br/><br/>
                             <?php 
//                    }
//                    else
//                    { echo "Herhangi bir soru yok!";
//                        }
                     } }
                     else{ echo "<br/><br/> Yorum eklemek için giriş yapmalısınız!";}$sorusayisi++; }
                    ?>
     					
			 	</div>
            
						</div>
					</div>
				</div>
		
        </div>
</div>


<!-- footer -->

<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>