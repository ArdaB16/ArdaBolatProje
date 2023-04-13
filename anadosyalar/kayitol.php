<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArdaB Proje</title>
    <link rel="stylesheet" href="../cssler/style.css">
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

                  
   
        echo '<li><a href="kayitol.php"><span class="glyphicon glyphicon-log-in"></span>Kayıt Ol</a></li>';
        echo '<li><a href="girisyap.php"><span class="glyphicon glyphicon-log-in"></span>Giriş Yap</a></li>';
        echo '<li><a href="ara.php"><span class="glyphicon glyphicon-search"></span>Ara</a></li>';
?>
                </ul>
    </ul>
  </div>
</nav>  
<div id="body2">
 <div id="sol"></div>
 <div id="orta">
    
 <form action="kayitol.php" method="post">
        Username: <input type="text" class="yazılar" name="username"><br>
        Password: <input type="password" class="yazılar" name="password"><br>
        Email: <input type="email" class="yazılar" name="email"><br>
        Phone: <input type="tel" class="yazılar" name="phone"><br>
        Anahtar: <input type="anahtar" class="yazılar" name="anahtar"><br>
        <input type="checkbox" name="terms" value="accepted"> <a href="hizmet.php">Hizmet Şartlarımızı</a> kabul ediyorum<br>
        <input type="submit" class="btn" value="Submit">
    </form>
<?php
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['terms']) && isset($_POST['anahtar'])) 
        if($_POST['terms'] != "accepted"){
            echo "Hizmet Şartlarını Kabul Edin";
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $anahtar = $_POST['anahtar'];
            $terms = $_POST['terms'];
            if(substr($phone, 0, 1) === '0') {
                $phone = ltrim($phone, '0');
            }
            $data = file("database.txt");
            $flag = 0;
            $flag2 = 0;
            foreach($data as $line) {
                $user = explode(",", $line);
                if($user[0] == $username) {
                    $flag = 1;
                    break;
                }
                if($user[2] == $email) {
                    $flag2 = 2;
                    break;
                }
            }
            if($flag == 1){
                echo "Bu kullanıcı adı zaten kullanımda başka bir kullanıcı adı seçiniz";
            }elseif($flag2 == 2){
                echo "Bu email Zaten kayıtlı başka bir email seçiniz";
            }else{
                $data = $username . "," . $password . "," . $email . "," . $phone . "," . $anahtar . "," . $terms . "\n";
                $file = fopen("database.txt", "a");
                fwrite($file, $data);
                fclose($file);
            }
        }
?>
 </div>
 <div id="sag"></div>
 
</div>

<div id="alt">filmizlermisin 5651 sayılı kanuna göre içerik sağlayıcıdır. Sitemizdeki videolar üyelerimiz tarafından yüklenmektedir. Sitemizde yer alan videolardan herhangi bir telif hakkına ihlal ettiğini düşünüyorsanız, bize ardabolatt06@gmail.com adresinden gerekli yasal belgelerle müracaat etmeniz halinde 2 iş günü içerisinde söz konusu içerik kaldıralacaktır. | İf you think some videos is copyrighted, send us email and allow us 2 working days to delete the video. | filmizlermisin - filmizlermisin1 - filmizlermisin</div>
</div>

    </div>

</body>
</html>