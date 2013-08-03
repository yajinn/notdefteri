<?php
session_start();
extract($_REQUEST);
function __autoload($dosya)
{
    require_once("/class/".$dosya.".php");
}
$not = new notlar();
$uye = new uye();
switch ($islem) {
    case "notGoster":
        sleep(1);
        $sonuc = $not->notCek($notID);
        echo json_encode($sonuc);
        break;

    case "notEkle":
        $not->notEkle($baslik,$icerik,$yazar);
        break;

    case "notSil":
        $not->notSil($notSilId);
        break;

    case "uyeKontrol":
        $sonuc = $uye->uyeKontrol($email,$sifre);
        echo json_encode($sonuc);
        if($sonuc['email']!=''){
            $_SESSION['uye']=$sonuc['ad']." ".$sonuc['soyad'];
        }
        break;
    case "uyeCikis":
        session_destroy();
        break;
}

?>