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
                  echo '<li><a href="logout.php">Çıkış Yap</a></li>';
                  echo '<li><a href="hesapayarlari.php">Hesap Ayarları</a></li>';
                  
    }   else {
        echo '<li><a href="kayitol.php">Kayit Ol</a></li>';
        echo '<li><a href="girisyap.php">Giriş Yap</a></li>';
    }
?>
                </ul>
 

            </div>
     </div>
     
<div id="body2">
 <div id="sol"></div>
 <div id="orta">

 <form action="hesapayarlari.php" method="post">
    
    Şimdiki Şifreniz: <input type="password" name="current_password"><br>
    Yeni Şifreniz: <input type="password" name="new_password"><br>
    Yeni Şifreyi: <input type="password" name="confirm_password"><br>
    <input type="submit" name="change_password" value="Change Password">
</form>

<?php
    if(isset($_POST['change_password'])) {
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        $username = $_SESSION['username'];

        $data = file("database.txt");
        $flag = 0;

        foreach($data as $line) {
            $user = explode(",", $line);
            if($user[0] == $username && $user[1] == $current_password) {
                $flag = 1;
                break;
            }
        }

        if($flag == 1) {
            if($new_password == $confirm_password) {
                $user[1] = $new_password;
                $line = implode(",", $user);
                $index = array_search($line, $data);
                $data[$index] = $line;
                file_put_contents("database.txt", implode("", $data));
                echo "Password changed successfully.";
                session_destroy();
                header('Location: logout.php');
                

            } else {
                echo "New password and confirm password do not match.";
            }
        } else {
            echo "Invalid current password.";
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
