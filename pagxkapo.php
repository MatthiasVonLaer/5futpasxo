<?php

//eltrovi la indikilon al la bazdosierujo
global $bazindikilo;
$dosierujo = "drakoj_kaj_nerdoj";
$poz = strlen($dosierujo) + strpos($_SERVER['REQUEST_URI'], $dosierujo);
$bazindikilo = substr($_SERVER['REQUEST_URI'], 0, $poz);

//krei la supro_linion
$cxu = false;
$supro_linio = "";
$ligilo = "";
$aro = explode('/', $_SERVER['REQUEST_URI']);
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
        $supro_linio = '<a href="' . $bazindikilo . '">Hejmo</a>';
        $ligilo = $bazindikilo;
        $cxu = true;
    }
}

require_once "ligiloj.php";
?>

<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo $bazindikilo; ?>/stilfolio.css">
    </head>
    <body>
        <div class="navigado">
            <div class="titolo">Danĝerejoj</br>kaj Nerdoj</div>
            <hr>

            <br>
            <a href="<?php echo $bazindikilo; ?>/index.php">Enkonduko</a>
            <br>
            <em>Bazregulverko</em>

            <ul>
                <li class="en-traduko">
                    <?php ligilo("Ekludi"); ?>
                </li>
                <li class="en-traduko">
                    <?php ligilo("Popoloj"); ?>
                </li>
                <li class="en-traduko">
                    <?php ligilo("Klasoj"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Kapablecoj"); ?>
                </li>
                <li class="en-traduko">
                    <?php ligilo("Talentoj"); ?>
                </li>
                <li class="en-traduko">
                    <?php ligilo("Ekipajxo"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Pliaj reguloj"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Batalo"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Magio"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Sorĉoj"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Prestiĝklasoj"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Gvidi la ludon"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("La ĉirkaŭaĵo"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Krei nlr"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Magiaj objektoj"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Statoj"); ?>
                </li>
                <li class="malplena">
                    <?php ligilo("Eksterordinaraj eblecoj"); ?>
                </li>
            </ul>

            <em>Aliaĵoj</em>
            <ul>
                <li>
                    <?php ligilo("Mallongiloj.php"); ?>
                </li>
                <li>
                    <?php ligilo("Vortaro.php"); ?>
                </li>
                <li>
                    <?php ligilo("Libera-ludo-permisilo.php"); ?>
                </li>
            </ul>
        </div>
        <div class="enhavo">
            <?php echo $supro_linio; ?>
