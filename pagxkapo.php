<?php

//eltrovi la indikilon al la bazdosierujo
$dosierujo = "drakoj_kaj_nerdoj";
$poz = strlen($dosierujo) + strpos($_SERVER['REQUEST_URI'], $dosierujo);
$indikilo = substr($_SERVER['REQUEST_URI'], 0, $poz);

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
        $supro_linio = '<a href="' . $indikilo . '">Hejmo</a>';
        $ligilo = $indikilo;
        $cxu = true;
    }
}

?>

<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
    <head>
        <title>Danĝerejoj kaj Drakoj</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $indikilo; ?>/stilfolio.css">
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
                <li>
                    <a href="<?php echo $indikilo; ?>/bazregulverko/popoloj">Popoloj</a>
                </li>
                <li>
                    <a href="<?php echo $indikilo; ?>/bazregulverko/klasoj">Klasoj</a>
                </li>
                <li>
                    <a href="<?php echo $indikilo; ?>/bazregulverko/ekipajxo">Ekipaĵo</a>
                </li>
            </ul>

            <em>Aliaĵoj</em>
            <ul>
                <li>
                    <a href="<?php echo $indikilo; ?>/vortaro.php">Vortaro</a>
                </li>
            </ul>
        </div>
        <div class="enhavo">
            <?php echo $supro_linio; ?>
