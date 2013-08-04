<?php
//require_once "database.php";
class uye extends  database {
    public function uyeKontrol($email,$sifre){
        $sorgu = $this->satirCek("SELECT * from uye where email='$email' and sifre='$sifre'");
        return $sorgu;
    }

    public function  uyeKayit($ad,$soyad,$email,$sifre){
        $this->ekle("INSERT INTO uye(ad,soyad,email,sifre) values(?,?,?,?)",array($ad,$soyad,$email,$sifre));
        echo "Uye Kayit edildi!";
    }
 }
