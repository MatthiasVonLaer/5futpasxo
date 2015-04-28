<?php require 'pagxkapo.php' ?>

<?php

$minimumo = 1;
$sercxvorto = $_GET['sercxvorto'];
$tabelo = [];

if (strlen($sercxvorto) >= $minimumo and $dosierujo = opendir("sercxo")) {

    $sercxvorto = preg_replace("/cx/", "ĉ", $sercxvorto);
    $sercxvorto = preg_replace("/sx/", "ŝ", $sercxvorto);
    $sercxvorto = preg_replace("/jx/", "ĵ", $sercxvorto);
    $sercxvorto = preg_replace("/hx/", "ĥ", $sercxvorto);
    $sercxvorto = preg_replace("/gx/", "ĝ", $sercxvorto);
    $sercxvorto = preg_replace("/ux/", "ŭ", $sercxvorto);
    $sercxvorto = preg_replace("/Cx/", "Ĉ", $sercxvorto);
    $sercxvorto = preg_replace("/Sx/", "Ŝ", $sercxvorto);
    $sercxvorto = preg_replace("/Jx/", "Ĵ", $sercxvorto);
    $sercxvorto = preg_replace("/Hx/", "Ĥ", $sercxvorto);
    $sercxvorto = preg_replace("/Gx/", "Ĝ", $sercxvorto);
    $sercxvorto = preg_replace("/Ux/", "Ŭ", $sercxvorto);
    while (false !== ($indikilo = readdir($dosierujo))) {
        if(preg_match("/.txt$/", $indikilo)) {
            $enhavo = file_get_contents('sercxo/' . $indikilo);

            $nomo = $indikilo;
            $nomo = preg_replace("/_/", " ", $nomo);
            $nomo = preg_replace("/-/", "/", $nomo);
            $nomo = preg_replace("/\.txt/", "", $nomo);
            $nomo = preg_replace("/cx/", "ĉ", $nomo);
            $nomo = preg_replace("/sx/", "ŝ", $nomo);
            $nomo = preg_replace("/jx/", "ĵ", $nomo);
            $nomo = preg_replace("/hx/", "ĥ", $nomo);
            $nomo = preg_replace("/gx/", "ĝ", $nomo);
            $nomo = preg_replace("/ux/", "ŭ", $nomo);
            $nomo = preg_replace("/Cx/", "Ĉ", $nomo);
            $nomo = preg_replace("/Sx/", "Ŝ", $nomo);
            $nomo = preg_replace("/Jx/", "Ĵ", $nomo);
            $nomo = preg_replace("/Hx/", "Ĥ", $nomo);
            $nomo = preg_replace("/Gx/", "Ĝ", $nomo);
            $nomo = preg_replace("/Ux/", "Ŭ", $nomo);
            $nomo = preg_replace("/\/index/", "", $nomo);

            $indikilo = '<a href="' . $indikilo . '">' . $nomo . '</a>';

            preg_match_all("/(\s.{0,20})(" . preg_quote($sercxvorto) . ")(.{0,30})\s/i", $enhavo, $trovoj, PREG_SET_ORDER);
            if(count($trovoj) > 0)
                $tabelo[$indikilo] = "";
            foreach($trovoj as $trovo) {
                $tabelo[$indikilo] .= $trovo[1] . "<b>" . $trovo[2] . "</b>" . $trovo[3] . " ... ";
            }

        }
    }

    closedir($dosierujo);
}
?>

<title>Serĉrezulto</title>
<h1>Serĉrezulto por "<?php echo $sercxvorto;?>"</h1>

<ul class="sercxrezulto">
    <?php
    foreach($tabelo as $dosiero => $enhavo) {
        echo '<li>' . $dosiero . ': <span class="sercx-enhavo">' . $enhavo . '</span></li>';
    }
    if(strlen($sercxvorto) < $minimumo)
        echo "<li>La serĉvorto devas konsisti el minimume du literoj.</li>";
    else if(count($tabelo) == 0)
        echo "<li>La serĉvorto ne troveblas.</li>";
    ?>
</ul>

<?php require 'pagxpiedo.php' ?>
