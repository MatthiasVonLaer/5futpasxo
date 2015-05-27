<?php

function bazdosierujo()
{
    return "drakoj_kaj_nerdoj";
}

function akiri_bazindikilon()
{
    $dosierujo = bazdosierujo();
    $poz = strlen($dosierujo) + strpos($_SERVER['REQUEST_URI'], $dosierujo);
    $indikilo = substr($_SERVER['REQUEST_URI'], 0, $poz);
    return $indikilo;
}

function akiri_lokan_indikilon()
{
    $uri = akiri_uri();
    $poz = strpos($uri, bazdosierujo()) + strlen(bazdosierujo()) + 1;
    $indikilo = substr($uri, $poz);
    if(strpos($indikilo, ".php") == false) $indikilo .= "index.php";
    return $indikilo;
}

function akiri_uri()
{
    $uri = $_SERVER['REQUEST_URI'];
    $poz = strpos($uri, "?");
    if($poz)
        $uri = substr($uri, 0, $poz); 
    return $uri;
}

function krei_suprolinion()
{
    $indikilo = akiri_bazindikilon();
    $cxu = false;
    $supro_linio = "";
    $ligilo = "";

    $uri = akiri_uri();

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
        if($elemento == bazdosierujo()) {
            $supro_linio = '<a href="' . $indikilo . '">Hejmo</a>';
            $ligilo = $indikilo;
            $cxu = true;
        }
    }
    $supro_linio .= '  (<a href="?redakti">redakti</a>)';
    return $supro_linio;
}

function kalkuli()
{
    file_put_contents(__DIR__ . "/kalkulo/" . date("Y_m_d"), $_SERVER['REQUEST_URI'] . "\n", FILE_APPEND);
}
?>
