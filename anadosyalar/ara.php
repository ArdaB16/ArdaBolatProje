<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArdaB Proje</title>
    <link rel="stylesheet" href="../cssler/style2.css">
    <script src="./kodla.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">FullHDFilmİzlermisin.com</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <?php
                  session_start();
                  if(isset($_SESSION['username'])) {
                  echo "Welcome " . $_SESSION['username'];
                  echo '<br>';
                  echo '<br>';
                  echo '<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Çıkış Yap</a></li>';
                  echo '<li><a href="hesapayarlari.php"><span class="glyphicon glyphicon-user"></span>Hesap Ayarları</a></li>';
                  echo '<li><a href="ara.php"><span class="glyphicon glyphicon-search"></span>Ara</a></li>';

                  
    }   else {
        echo '<li><a href="kayitol.php"><span class="glyphicon glyphicon-log-in"></span>Kayıt Ol</a></li>';
        echo '<li><a href="girisyap.php"><span class="glyphicon glyphicon-log-in"></span>Giriş Yap</a></li>';
        echo '<li><a href="ara.php"><span class="glyphicon glyphicon-search"></span>Ara</a></li>';

    }
?>
                </ul>
    </ul>
  </div>
</nav>  
<div id="body2">
 <div id="sol"></div>
 <div id="orta">
    <input id="searchbar" class="yazılar" onkeyup="searchfilms()" type="text"
    name="films" placeholder="Search Films">
<ol id='list'>
    <li class="films"><a href="../filmsayfası/recep1.php">Recep İvedik 1</a></li>
    <li class="films"><a href="../filmsayfası/arog.php">Arog</a></li>
    <li class="films"><a href="../filmsayfası/hababamsinifi.php">Hababam Sınıfı 1</a></li>
    <li class="films"><a href="../filmsayfası/hababamasker.php">Hababam Sınıfı Askerde</a></li>
    <li class="films"><a href="../filmsayfası/sagsalim.php">Sağ salim</a></li>
</ol>
</div>   
 </div>
 <div id="sag"></div>
 <div id="alt">
 filmizlermisin 5651 sayılı kanuna göre içerik sağlayıcıdır. Sitemizdeki videolar üyelerimiz tarafından yüklenmektedir. Sitemizde yer alan videolardan herhangi bir telif hakkına ihlal ettiğini düşünüyorsanız, bize ardabolatt06@gmail.com adresinden gerekli yasal belgelerle müracaat etmeniz halinde 2 iş günü içerisinde söz konusu içerik kaldıralacaktır. | İf you think some videos is copyrighted, send us email and allow us 2 working days to delete the video. | filmizlermisin - filmizlermisin1 - filmizlermisin
</div>
</div>

    </div>

</body>
</html>
