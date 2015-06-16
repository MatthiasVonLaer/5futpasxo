<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

<?php
require_once 'redakti.php';
require_once 'helpfunkcioj.php';

$indikilo = akiri_bazindikilon();
$supro_linio = krei_suprolinion();
kalkuli();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo $indikilo; ?>/stilfolio.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo $indikilo; ?>/print_stilfolio.css" media="print">
        <script type="text/javascript" src="<?php echo $indikilo; ?>/java.js"></script>
        <script src="<?php echo $indikilo; ?>/jquery-2.1.3.js"></script>
    </head>
    <body>
        <div class="navigado">
            <div class="titolo">Danĝerejoj</br>kaj Nerdoj<hr></div>

            <br>
            <a href="<?php echo $indikilo; ?>/index.php">Enkonduko</a>
            <br>
            <em>Bazregulverko</em>

            <ul>
                <li class="en-traduko">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/ekludi">Ekludi</a>
                </li>
                <li class="en-traduko">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/popoloj">Popoloj</a>
                </li>
                <li class="en-traduko">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/klasoj">Klasoj</a>
                </li>
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/kapablecoj">Kapablecoj</a>
                </li>
                <li class="en-traduko">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/talentoj">Talentoj</a>
                </li>
                <li class="en-traduko">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/ekipajxo">Ekipaĵo</a>
                </li>
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/pliaj_reguloj">Pliaj reguloj</a>
                </li>
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/batalo">Batalo</a>
                </li>
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/magio">Magio</a>
                </li>
                <li class="en-traduko">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/sorcxlistoj">Sorĉlistoj</a>
                </li>
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/prestigxklasoj">Prestiĝklasoj</a>
                </li>
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/gvidi_la_ludon">Gvidi la ludon</a>
                </li>
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/la_cxirkauxajxo">La ĉirkaŭaĵo</a>
                </li>
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/krei_nlr">Krei NLR</a>
                </li>
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/magiaj_objektoj">Magiaj objektoj</a>
                </li>
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/eksterordinaraj_eblecoj">Eksterord. eblecoj</a>
                </li>
                <li class="en-traduko">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/statoj">Statoj</a>
                </li>
            </ul>

            <em>Aventuroj</em>
            <ul>
                <li>
                    <a href="<?php echo $indikilo; ?>/aventuroj/jan_ludoviko_kaj_la_perdita_sxuo/index.php">Jan ludoviko kaj<br>la perdita ŝuo</a>
                </li>
            </ul>

            <em>Aliaĵoj</em>
            <ul>
                <li>
                    <a href="<?php echo $indikilo; ?>/mallongigoj.php">Mallongigoj</a>
                </li>
                <li>
                    <a href="<?php echo $indikilo; ?>/libera_ludo_permisilo.php">Libera-ludo-permisilo</a>
                </li>
            </ul>
        </div>
        <div class="supra-navigilo">
            <div class="supra-ido">
            <form class="sercxformularo" action="<?php echo $indikilo;?>/sercxrezulto.php" method="get">
                <label>SERĈI:</label>
                <input class="sercxkesto" type="text" name="sercxvorto" placeholder="Tajpu laŭ x-sistemo">
            </form>
            <?php echo $supro_linio; ?>
            </div>
        </div>
        <div class="enhavo">
            <?php konservi_redaktitan_enhavon(); ?>
            <?php if(isset($_GET["redakti"])) { ?>
                <?php $enhavo = akiri_enhavon(); ?>
                <form method="post">
                    <label>Redakto:</label>
                    <br>
                    <textarea name="redaktita_enhavo" style="width: 100%; height: 500px;"><?php echo $enhavo; ?></textarea>
                    <br>
                    <label>Retpoŝtadreso (malnepra):</label>
                    <br>
                    <textarea name="adreso" style="width: 100%; height: 20px;"></textarea>
                    <br>
                    <label>Komento (malnepra):</label>
                    <br>
                    <textarea name="komento" style="width: 100%; height: 50px;"></textarea>
                    <br>
                    <input type="submit" value="Sendu">
                </form>
            <?php } ?>
