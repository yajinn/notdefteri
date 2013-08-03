$(document).ready(function(){
    $(document).ajaxStart(function(){
        $(".yukleniyor").show();
    });

    $(document).ajaxStop(function(){
        $(".yukleniyor").fadeOut(500);
    });

    $(".btn-NotDetay").click(function(){
        $.ajax({
            type : 'POST',
            dataType : 'json',
            url : 'ajax.php',
            data: {
                'islem' : 'notGoster',
                'notID' :$(this).attr("data-id")
            },
            success :function(response){
                console.log(response);
                $("#myModalLabel").html(response.baslik);
                $(".modal-body").html(response.icerik);
            }
        })
    });

    $(".btn-NotEkle").click(function(){
        $.ajax({
            type :'POST',
            url : 'ajax.php',
            //dataType: 'json',
            data:{
                'islem' : "notEkle",
                'baslik' : $("#notBaslik").val(),
                'icerik' : $("#notIcerik").val(),
                'yazar' :  $(".uye").text()
            },
            success :function(response){
                console.log(response);
                if(response!=false){
                    $("#notBaslik").val("");
                    $("#notIcerik").val("");
                    location.reload();
                }else{

                }
            }
        });
        return false;
    });

    $(".btn-NotSil").click(function(){
        $.post("ajax.php",{islem:"notSil",notSilId:$(this).attr("data-not")},function(response){
             console.log(response);
            location.reload();
        })
    });

    $("#btn-giris").click(function(){
        $.ajax({
            type :'POST',
            url : 'ajax.php',
            dataType: 'json',
            data:{
                'islem' : "uyeKontrol",
                'email' : $("#email").val(),
                'sifre' : $("#sifre").val()
            },
            success :function(response){
                if(response!=false){
                    console.log(response);
                    $(".kullanici-panel .uye").text(response.ad+"  "+response.soyad);
                    location.reload();
                }else{
                    $(".alert").css("display","block");
                    $(".alert-mesaj").text("Hata! Kullanıcı bilgileriniz hatalı...");
                }
            }
        });
        return false;
    });

    $("#btn-cikis").click(function(){
        $.post("ajax.php",{islem:'uyeCikis'},function(response){
            location.reload();
        })
    });


});
