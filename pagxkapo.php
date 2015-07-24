<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

<?php
session_start();

require_once 'redakti.php';
require_once 'helpfunkcioj.php';

$supro_linio = krei_suprolinion();
kalkuli();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/stilfolio.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/print_stilfolio.css" media="print">
        <script type="text/javascript" src="/java.js"></script>
        <script src="/jquery-2.1.3.js"></script>
    </head>
    <body>
        <div class="navigado">
            <img class="titolo" src="/bildoj/Pathfinder.png" style="width:95%;">

            <a href="/index.php">Enkonduko</a>
            <br>
            <em>Bazregulverko</em>

            <ul>
                <li class="en-traduko">
                    <a href="/bazregulverko/ekludi">Ekludi</a>
                </li>
                <li class="en-traduko">
                    <a href="/bazregulverko/popoloj">Popoloj</a>
                </li>
                <li class="en-traduko">
                    <a href="/bazregulverko/klasoj">Klasoj</a>
                </li>
                <li class="malplena">
                    <a href="/bazregulverko/kapablecoj">Kapablecoj</a>
                </li>
                <li class="en-traduko">
                    <a href="/bazregulverko/talentoj">Talentoj</a>
                </li>
                <li class="en-traduko">
                    <a href="/bazregulverko/ekipajxo">Ekipaĵo</a>
                </li>
                <li class="malplena">
                    <a href="/bazregulverko/pliaj_reguloj">Pliaj reguloj</a>
                </li>
                <li class="malplena">
                    <a href="/bazregulverko/batalo">Batalo</a>
                </li>
                <li class="malplena">
                    <a href="/bazregulverko/magio">Magio</a>
                </li>
                <li class="en-traduko">
                    <a href="/bazregulverko/sorcxoj">Sorĉoj</a>
                </li>
                <li class="malplena">
                    <a href="/bazregulverko/prestigxklasoj">Prestiĝklasoj</a>
                </li>
                <li class="malplena">
                    <a href="/bazregulverko/gvidi_la_ludon">Gvidi la ludon</a>
                </li>
                <li class="malplena">
                    <a href="/bazregulverko/la_cxirkauxajxo">La ĉirkaŭaĵo</a>
                </li>
                <li class="malplena">
                    <a href="/bazregulverko/krei_nlr">Krei NLR</a>
                </li>
                <li class="malplena">
                    <a href="/bazregulverko/magiaj_objektoj">Magiaj objektoj</a>
                </li>
                <li class="malplena">
                    <a href="/bazregulverko/eksterordinaraj_eblecoj">Eksterord. eblecoj</a>
                </li>
                <li class="en-traduko">
                    <a href="/bazregulverko/statoj">Statoj</a>
                </li>
            </ul>

            <em>Aliaĵoj</em>
            <ul>
                <li>
                    <a href="/aventuroj/index.php">Aventuroj</a>
                </li>
                <li>
                    <a href="/mallongigoj.php">Mallongigoj</a>
                </li>
                <li>
                    <a href="/vortaro.php">Vortaro</a>
                </li>
                <li>
                    <a href="/traduki.php">Traduki</a>
                </li>
                <li>
                    <a href="/elsxutoj">Elŝutoj</a>
                </li>
            </ul>
        </div>
        <div class="supra-navigilo">
            <div class="supra-ido">
                <form class="sercxformularo" action="/sercxrezulto.php" method="get">
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
                    <label>Retpoŝtadreso:</label>
                    <br>
                    <textarea name="adreso" style="width: 100%; height: 20px;"></textarea>
                    <br>
                    <label>Komento:</label>
                    <br>
                    <textarea name="komento" style="width: 100%; height: 50px;"></textarea>
                    <br>
                    <input type="submit" value="Sendu">
                </form>
            <?php } ?>
