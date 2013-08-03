<?php
class database {
    private $baglan='';
    public function  __construct(){
        try{
            $this->baglan=new PDO("mysql:host=localhost;dbname=notdefteri","root","");
            $this->baglan->setAttribute(PDO::ERRMODE_WARNING, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $hata){
            echo "Satir: ".$hata->getLine()." Hata Mesaj: ".$hata->getMessage();
        }
    }
    public function ekle($query,$values){
        $hazirla = $this->baglan->prepare($query);
        $hazirla->execute($values);
    }
    public function sil($query,$values){
        $hazirla = $this->baglan->prepare($query);
        $hazirla->execute($values);
    }
    public function guncelle($query,$values){
        $hazirla = $this->baglan->prepare($query);
        $hazirla->execute($values);
    }
    public function satirCek($query){
        $sorgu = $this->baglan->query($query);
        return $sorgu->fetch(PDO::FETCH_ASSOC);
    }
    public function hepsiniCek($query){
        $sorgu = $this->baglan->query($query);
        return $sorgu->fetchAll(PDO::FETCH_BOTH);
    }
}
