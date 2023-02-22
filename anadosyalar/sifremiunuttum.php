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
                <a href="index.php"><img src="foto/toppng.com-kamera-film-841x720.png" width="12%"></a>
            </div> 
        </div>


     <div id="top2"> 
         <div id="sd">
               <a href="ara.php"><img src="foto/pngwing.com.png" width="12%"></a>
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
 <?php
    if(isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['key'])) {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $key = $_POST['key'];
        $data = file("database.txt");

        $flag = 0;
        foreach($data as $line) {
            $user = explode(",", $line);
            if($user[2] == $email && $user[3] == $phone && $user[4] == $key) {
                $flag = 1;
                break;
            }
        }

        if($flag == 1) {
            echo "Your username is: " . $user[0] . "<br>";
            echo "Your password is: " . $user[1];
        } else {
            echo "Email,Telefon veya Anahtar yanlış girildi";
        }
    }
?>
<form action="sifremiunuttum.php" method="post">
    Email: <input type="email" name="email"><br>
    Phone: <input type="tel" name="phone"><br>
    Anahtar: <input type="text" name="key"><br>
    <input type="submit" value="Submit">
</form>
 </div>
 <div id="sag"></div>
 
</div>

<div id="alt">filmizlermisin 5651 sayılı kanuna göre içerik sağlayıcıdır. Sitemizdeki videolar üyelerimiz tarafından yüklenmektedir. Sitemizde yer alan videolardan herhangi bir telif hakkına ihlal ettiğini düşünüyorsanız, bize ardabolatt06@gmail.com adresinden gerekli yasal belgelerle müracaat etmeniz halinde 2 iş günü içerisinde söz konusu içerik kaldıralacaktır. | İf you think some videos is copyrighted, send us email and allow us 2 working days to delete the video. | filmizlermisin - filmizlermisin1 - filmizlermisin</div>
</div>

    </div>

</body>
</html>