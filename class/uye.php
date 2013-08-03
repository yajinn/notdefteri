<?php
//require_once "database.php";
class uye extends  database {
    public function uyeKontrol($email,$sifre){
        $sorgu = $this->satirCek("SELECT * from uye where email='$email' and sifre='$sifre'");
        return $sorgu;
    }

 }
