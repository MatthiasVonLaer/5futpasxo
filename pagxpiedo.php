<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

            <div class="permisilo">
                <hr>
                <a href="/libera_ludo_permisilo.php">Libera-ludo-permisilo</a>
                - <a href="/direktivo_de_komuna_uzo.php">Direktivo de komuna uzo</a>
            <div>
            <style media="screen">
                <?php
                    require_once 'kontrolilo.php';
                    kontrolilo();
                ?>
            </style>
            <style media="print">
                <?php if(!isset($kompleta)) { ?>
                    img {
                        display: none;
                    }
                <?php } ?>
            </style>
        </div>
    </body>
    <title>5FutPaŝo</title>
</html>
