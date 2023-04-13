<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArdaB Proje</title>
    <link rel="stylesheet" type="text/css" href="../cssler/style3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../anadosyalar/index.php">FullHDFilmİzlermisin.com</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <?php
                  session_start();
                  if(isset($_SESSION['username'])) {
                  echo "Welcome " . $_SESSION['username'];
                  echo '<br>';
                  echo '<br>';
                  echo '<li><a href="../anadosyalar/logout.php"><span class="glyphicon glyphicon-user"></span>Çıkış Yap</a></li>';
                  echo '<li><a href="../anadosyalar/hesapayarlari.php"><span class="glyphicon glyphicon-user"></span>Hesap Ayarları</a></li>';
                  echo '<li><a href="ara.php"><span class="glyphicon glyphicon-search"></span>Ara</a></li>';

                  
    }   else {
        echo '<li><a href="../anadosyalar/kayitol.php"><span class="glyphicon glyphicon-log-in"></span>Kayıt Ol</a></li>';
        echo '<li><a href="../anadosyalar/girisyap.php"><span class="glyphicon glyphicon-log-in"></span>Giriş Yap</a></li>';
        echo '<li><a href="ara.php"><span class="glyphicon glyphicon-search"></span>Ara</a></li>';
    }
?>
                </ul>
    </ul>
  </div>
</nav>    
<div id="body2">
 <div id="sol"></div>
 <div id="orta" style="text-align: center;">
 <?php
    if(isset($_SESSION['username'])) {
    echo '<p style="text-align: center;"><iframe src="../filmler/title-artist.mp4" width="700" height="400" allowfullscreen=""></iframe></p>';
                  
    }   else { echo 'filmi izlemek için üye  olunuz';
    }
?>
</div>
<div id="sag"></div>
<div id="yorum">
  <?php
    if (isset($_SESSION['username'])) {
        
  ?>
<form action="../yorumkaydet/hababamyorumkaydet.php" method="post">
    <input id="sa" type="text" name="yorum" placeholder="Yorum Yazınız">
    <br>
    <br>
    <input type="submit" class="yazılar" value="Yorum Ekle">
</form>

    <br>
    <br>
    <?php
  
  $yorumlar = file_get_contents("../yorumlar/hababamyorum.txt");
  $username = $_SESSION['username'];
  $yorumlar = str_replace("{username}", $username, $yorumlar);
  echo $yorumlar;
} 
else {
    echo '<p style="color:red;">Yorum Yazmak İçin Üye Olunuz</p>';
echo'<br>';
$yorumlar = file_get_contents("../yorumlar/hababamyorum.txt");
echo $yorumlar;
}
?>  

</div>
 
</div>

<div id="alt">filmizlermisin 5651 sayılı kanuna göre içerik sağlayıcıdır. Sitemizdeki videolar üyelerimiz tarafından yüklenmektedir. Sitemizde yer alan videolardan herhangi bir telif hakkına ihlal ettiğini düşünüyorsanız, bize ardabolatt06@gmail.com adresinden gerekli yasal belgelerle müracaat etmeniz halinde 2 iş günü içerisinde söz konusu içerik kaldıralacaktır. | İf you think some videos is copyrighted, send us email and allow us 2 working days to delete the video. | filmizlermisin - filmizlermisin1 - filmizlermisin</div>
</div>

    </div>

</body>
</html>