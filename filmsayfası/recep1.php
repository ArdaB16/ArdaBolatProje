<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArdaB Proje</title>
    <link rel="stylesheet" type="text/css" href="../cssler/style3.css">
</head>
<body>
    <div id="container">
        <div id="top"> 
            <div id="sdk">
                <a href="../anadosyalar/index.php"><img src="../foto/toppng.com-kamera-film-841x720.png" width="12%"></a>

            </div> 
        </div>


     <div id="top2"> 
         <div id="sd">
               <a href="../anadosyalar/ara.php"><img src="../foto/pngwing.com.png" width="12%"></a>
         </div> 
         <div id="menu2">
              <ul class="menu">
              <?php
                  session_start();
                  if(isset($_SESSION['username'])) {
                  echo "Welcome " . $_SESSION['username'];
                  echo '<br>';
                  echo '<br>';
                  echo '<li><a href="../anadosyalar/logout.php">Çıkış Yap</a></li>';
                  echo '<li><a href="../anadosyalar/hesapayarlari.php">Hesap Ayarları</a></li>';
                  
    }   else {
        echo '<li><a href="../anadosyalar/kayitol.php">Kayit Ol</a></li>';
        echo '<li><a href="../anadosyalar/girisyap.php">Giriş Yap</a></li>';
    }
?>
                </ul>
 

            </div>
     </div>
     
<div id="body2">
 <div id="sol"></div>
 <div id="orta" style="text-align: center;">
 <?php
    if(isset($_SESSION['username'])) {
    echo '<p style="text-align: center;"><iframe src="../filmler/receplol.mp4" width="700" height="400" allowfullscreen=""></iframe></p>';
                  
    }   else { echo 'filmi izlemek için üye  olunuz';
    }
?>
</div>
<div id="sag"></div>
<div id="yorum">
  <?php
    if (isset($_SESSION['username'])) {
        
  ?>
<form action="../yorumkaydet/recepyorumkaydet.php" method="post">
    <input id="sa" type="text" name="yorum" placeholder="Yorum Yazınız">
    <br>
    <br>
    <input type="submit" value="Yorum Ekle">
</form>

    <br>
    <br>
  <?php
  
    $yorumlar = file_get_contents("../yorumlar/recepyorum.txt");
    $username = $_SESSION['username'];
    $yorumlar = str_replace("{username}", $username, $yorumlar);
    echo $yorumlar;
} 
else {
  echo '<p style="color:red;">Yorum Yazmak İçin Üye Olunuz</p>';
echo'<br>';
  $yorumlar = file_get_contents("../yorumlar/recepyorum.txt");
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