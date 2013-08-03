<?php
//require_once "database.php";
class notlar extends database{

    public function notEkle($baslik,$icerik,$yazar){
        $this->ekle("INSERT INTO notlar(baslik,icerik,yazar)",array($baslik,$icerik,$yazar));
        echo "Not eklendi!";
    }
    public function notSil($id){
        $this->sil("DELETE from notlar where=?",array($id));
        echo "Not Silindi";
    }
    public function notGuncelle($baslik,$icerik,$yazar,$id){
        $this->guncelle("UPDATE notlar set baslik=?,icerik=?,yazar=? where id=?",array($baslik,$icerik,$yazar,$id));
        echo $id."id li Not güncellendi";
    }
    public function notCek($id){
       $sorgu = $this->satirCek("SELECT * from notlar where id={$id}");
       return $sorgu;
   }
    public function notHepsiniCek(){
      $sorgu= $this->hepsiniCek("SELECT * from notlar");
      return $sorgu;
    }
}

