<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArdaB Proje</title>
    <link rel="stylesheet" href="../cssler/style.css">
</head>
<body>
    <div id="container">
        <div id="top"> 
            <div id="sdk">
                <a href="index.php"><img src="../foto/toppng.com-kamera-film-841x720.png" width="12%"></a>
            </div> 
        </div>


     <div id="top2"> 
         <div id="sd">
               <a href="ara.php"><img src="../foto/pngwing.com.png" width="12%"></a>
               
         </div> 
         <div id="menu2">
              <ul class="menu">
                  <li><a href="kayitol.php">Kayit Ol</a></li>
                  <li><a href="girisyap.php">Giriş Yap</a></li>
                </ul>
            </div>
     </div>
     
<div id="body2">
 <div id="sol"></div>
 <div id="orta">
    
 <form action="kayitol.php" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        Email: <input type="email" name="email"><br>
        Phone: <input type="tel" name="phone"><br>
        Anahtar: <input type="anahtar" name="anahtar"><br>
        <input type="checkbox" name="terms" value="accepted"> <a href="hizmet.php">Hizmet Şartlarımızı</a> kabul ediyorum<br>
        <input type="submit" value="Submit">
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
                    $flag2 = 1;
                    break;
                }
            }
            if($flag == 1){
                echo "Bu kullanıcı adı zaten kullanımda başka bir kullanıcı adı seçiniz";
            }elseif($flag2 == 1){
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