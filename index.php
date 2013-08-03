<?php
    session_start();
    function __autoload($dosya){
        require_once("/class/".$dosya.".php");
    }
    $not = new notlar();
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Not Defterim</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Notlar</a></li>
                            <li><a href="#hakkinda">Hakkında</a></li>
                            <!--
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            -->
                        </ul>
                        <form class="navbar-form pull-right">
                            <?php
                            //var_dump($_SESSION['uye']);
                                if($_SESSION['uye']){
                            ?>
                                <div class="kullanici-panel" style="margin-top: 10px;">
                                    <div class="uye" style="color: #ffffff; float: left;"><?=$_SESSION['uye']?></div>
                                    <div style="float: left; margin-left: 10px;"><a href="javascript:void(0)" id="btn-cikis">Çıkış</a></div>
                                </div>
                            <?php
                                }else{
                            ?>
                            <div class="giris-panel">
                                <input class="span2" type="text" name="email" id="email" placeholder="Email">
                                <input class="span2" type="password" name="sifre" id="sifre" placeholder="Şifre">
                                <button type="submit" class="btn" id="btn-giris">Giriş</button>
                            </div>
                            <?php
                                }
                            ?>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container">

            <div class="alert alert-error" style="display: none">
                <div class="alert-mesaj"></div>
            </div>

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h2>Not Defteri</h2>
                <p>Not almanız, düzenlemeniz artık çok kolay...</p>
            </div>
            <!-- Example row of columns -->
            <div class="row">
                <table class="table table-striped table-bordered span12">
                    <thead>
                    <tr>
                        <th class="span1">ID</th>
                        <th class="span7">Not Başlık</th>
                        <th class="span2">Yazar</th>
                        <th class="span2">Tarih</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                      $sonuc = $not->notHepsiniCek();
                      foreach($sonuc as $satir){
                    ?>
                    <tr>
                        <td><?=$satir['id']?></td>
                        <td>

                            <a class="btn-NotDetay" href="#myModal" data-toggle="modal" data-id="<?=$satir['id']?>"><?=$satir['baslik']?></a>

                        </td>
                        <td><?=$satir['yazar']?></td>
                        <td><?=$satir['tarih']?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>
            <hr>
            <footer>
                <p>WM50 Php Severler Derneği &copy; Company 2013</p>
            </footer>
        </div> <!-- /container -->

        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myModalLabel">Not başlık</h4>
            </div>
            <div class="modal-body">
                <p>Not içerik</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Kapat</button>
            </div>
        </div>
        <!--yukleniyor-->
        <div class="yukleniyor" style="display: none;">
            <div class="mesaj">
                <img src="assets/img/ajax-loader.gif" alt=""/>
                <p>Yükleniyor...</p>
            </div>
        </div>

        <script src="assets/js/vendor/jquery-1.10.1.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
