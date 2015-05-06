<!DOCTYPE html>
<?php

//eltrovi la indikilon al la bazdosierujo
$dosierujo = "drakoj_kaj_nerdoj";
$poz = strlen($dosierujo) + strpos($_SERVER['REQUEST_URI'], $dosierujo);
$indikilo = substr($_SERVER['REQUEST_URI'], 0, $poz);

//krei la supro_linion
$cxu = false;
$supro_linio = "";
$ligilo = "";

$uri = $_SERVER['REQUEST_URI'];
$poz = strpos($uri, "?");
if($poz)
    $uri = substr($uri, 0, $poz); 

$aro = explode('/', $uri);
foreach($aro as $elemento) {
    if($cxu and $elemento != 'index.php' and $elemento != '') {
        $ligilo .= '/' . $elemento;
        $poz = strpos($elemento, '.php');
        if($poz != false)
            $elemento = substr($elemento, 0, $poz);

        if($elemento == "bazregulverko")
            $supro_linio .= ' > <em>Bazregulverko</em>';
        else
            $supro_linio .= ' > <a href="' . $ligilo . '">' . ucfirst($elemento) . '</a>';
    }
    if($elemento == $dosierujo) {
        $supro_linio = '<a href="' . $indikilo . '">Hejmo</a>';
        $ligilo = $indikilo;
        $cxu = true;
    }
}

?>

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
            <div class="titolo">Danĝerejoj</br>kaj Nerdoj</div>
            <hr>

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
                <li class="malplena">
                    <a href="<?php echo $indikilo; ?>/bazregulverko/statoj">Statoj</a>
                </li>
            </ul>

            <em>Aliaĵoj</em>
            <ul>
                <li>
                    <a href="<?php echo $indikilo; ?>/mallongigoj.php">Mallongigoj</a>
                </li>
                <li>
                    <a href="<?php echo $indikilo; ?>/vortaro.php">Vortaro</a>
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
