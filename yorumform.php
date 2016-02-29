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

<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
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
					
           <?php if(isset($_SESSION["yetki"])){
                                 if ($_SESSION["yetki"]==true){                               
					
          
include 'vtbaglan.inc';
$soruno = $_REQUEST["soruno"];
if (empty($soruno)) {
    echo '<script type="text/javascript"> alert("Yorum eklemek için bir dosya seçilmemiş!"); window.location.href="liste.php";  </script>';
} else {
    $soruno = $vt->real_escape_string($soruno);
    $sql="SELECT * from sorular where soruno = $soruno";
    $sonuc=$vt->query($sql); // Sorguyu çalıştır
    if ($vt->error) { 
           echo "Sorgu çalıştırılırken hata oluştur. HATA: ".$vt->error."<br />\r\n"; 
           echo "Sorgu: $sql";
    }
    while($satir = $sonuc->fetch_assoc()){ // Sorgudan gelen bilgileri diziye ata
        $soruno = $satir["soruno"];
        echo "Soru: ".$satir['sorumetni'];

    }
    $sonuc->free(); // Sonuç kümesini boşalt
    // Yorum yazdırılmaya çalışılıyorsa
    if (isset($_POST["gonderildi"])) {// Eğer yorum girilip gönderildiyse
        $yorumyapan =  $_SESSION["kullanici"];
        $soruno = $_POST["soruno"];
        $yorum = $vt->real_escape_string($_POST["yorum"]);
        $sql = "INSERT INTO yorum (yorum_metni, sorular_soruno,uyeler_uyeno) VALUES ('".$yorum."','".$soruno."','".$_SESSION['uyeno']."')";
        $vt->query($sql);
        if ($vt->error) { 
            echo "Sorguyu çalıştırırken bir hata oluştu". $vt->error;
            echo "<br /> SQL Kodu: $sql";
        } 
    }
    // Mevcut yorum varsa göster
    $sql = "SELECT * FROM yorum where sorular_soruno = $soruno";
    $sonuc = $vt->query($sql);
    // Yorum varsa yazdır
    if ($sonuc->num_rows!=0) { // Bir sonuç döndüyse ...
        echo "<br /><br /><b>YORUMLAR</b> <br />";
        while($satir = $sonuc->fetch_assoc()){
			$uye=$satir['uyeler_uyeno'];
			$sqluye=  "SELECT * FROM uyeler where uyeno = $uye";
			 $son = $vt->query($sqluye);
			 while($s = $son->fetch_assoc()){
			 echo "<b> Yazan: </b> ". htmlentities($s['kullanici_adi']) . "<br />";
            echo "<b> Mesajı: </b> ". $satir['yorum_metni'] . "<br />";
        
            echo "<hr>";
        }}
        $sonuc->free();
    } else {
        echo '<br /><br />Daha önce hiç yorum girilmemiş! <br />';
    }
    $vt->close(); // Bağlantıyı kes
?>
<form action="yorumform.php" method="post">
    Yorumunuzu giriniz: <textarea name="yorum"></textarea>
    <input type="hidden" name ="soruno" value="<?php echo $soruno; ?>">
    <input type ="submit" name="gonderildi" value="Yorumu Gönder"></input>
</form>

<?php
           }}} else { 
    echo "Yorum yapabilmek için giriş yapmanız gereklidir.<br />";

}

?>
						
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