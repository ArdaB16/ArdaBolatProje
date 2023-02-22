<?php
session_start();
date_default_timezone_set('Europe/Istanbul');

if (isset($_POST['yorum']) && !empty($_POST['yorum'])) {
    $yorum = htmlspecialchars($_POST['yorum']);
    $yorum = str_replace("\n", "<br>", $yorum);
    $tarih = date("Y-m-d H:i:s");
    $username = $_SESSION['username'];
    $yazi = "$username - $tarih<br>$yorum<br><br>";
    $dosya_icerigi = file_get_contents("../yorumlar/hababamyorum.txt");
    $dosya_icerigi .= $yazi;
    file_put_contents("../yorumlar/hababamyorum.txt", $dosya_icerigi);
    header("Location: ../filmsayfası/hababamsinifi.php");
    exit;
}
else {
    header("Location: ../filmsayfası/hababamsinifi.php");
    exit;
}
?>