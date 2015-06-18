<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

<?php if(!isset($kompleta)) require '../../pagxkapo.php' ?>

<title>Ekipaĵo</title>
<h1>Ekipaĵo</h1>

<h2>Armiloj</h2>
<h3>Ecoj de armiloj</h3>

<p>Sekvas priskribo de la formato de la posta tabelo "Armiloj".</p>
<p><b>Prezo:</b> Tiu valoro egalas la prezon de la armilo en moneroj oraj (mo) aŭ moneroj arĝentaj (ma). En la prezo inkluzive estas ankaŭ la akcesoraĵoj kiujn oni bezonas por la armilon kiel glavingo aŭ sagujo. La prezoj estas samaj por la malgranda kaj la mezgranda versio de armilo. La granda versio kostas duoble pli ol la listprezo. </p>
<table class="glita">
    <caption>Damaĝo de tre malgrandaj kaj grandaj armiloj</caption>
    <thead>
        <tr><th>Mezgranda</th><th>Tre malgranda</th><th>Granda</th></tr>
    </thead>
    <tbody>
        <tr><td>1k2</td><td>- </td><td>1k3</td></tr>
        <tr><td>1k3</td><td>1</td><td>1k4</td></tr>
        <tr><td>1k4</td><td>1k2</td><td>1k6</td></tr>
        <tr><td>1k6</td><td>1k3</td><td>1k8</td></tr>
        <tr><td>1k8</td><td>1k4</td><td>2k6</td></tr>
        <tr><td>1k10</td><td>1k6</td><td>2k8</td></tr>
        <tr><td>1k12</td><td>1k8</td><td>3k6</td></tr>
        <tr><td>2k4</td><td>1k4</td><td>2k6</td></tr>
        <tr><td>2k6</td><td>1k8</td><td>3k6</td></tr>
        <tr><td>2k8</td><td>1k10</td><td>3k8</td></tr>
        <tr><td>2k10</td><td>2k6</td><td>4k8</td></tr>
    </tbody>
</table>
<p><b>Damaĝo:</b> En tiu kolumno estas indikita kiom da damaĝo la armilo kaŭzas ĉe sukcesa trafo. Unu kolumno indikas la damaĝon por malgrandaj armiloj kaj unu por mezgrandaj. Se estas du valoroj indikitaj, temas pri duobla armilo. La dua damaĝo estas por la plia atako de la duobla armilo. La damaĝo por tre malgrandaj kaj grandaj armiloj troveblas en la tabelo apude. </p>
<p><b>Kritika trafo:</b> Tiu kolumno indikas kio okazas ĉe kritika trafo. Se via rolulo faras kritikan trafon, vi ĵetas laŭ la multiplikanto la damaĝon duoble, trioble aŭ kvaroble (inkluzive ĉiuj modifiloj po ĵeto) kaj sumigas la rezulton. </p>
<p> Aldona damaĝo kiu ne apartenas al la armilo ne multiplikiĝas ĉe kritika trafo.</p>
<ul>
    <li><em>&times;2:</em> La armilo kaŭzas duoblan damaĝon ĉe kritika trafo. </li>
    <li><em>&times;3:</em> La armilo kaŭzas trioblan damaĝon ĉe kritika trafo. </li>
    <li><em>&times;3/&times;4:</em> Unu flanko de la armilo kaŭzas trioblan damaĝon ĉe kritika trafo. La alia flanko kaŭzas kvaroblan damaĝon ĉe kritika trafo. </li>
    <li><em>&times;4:</em> La armilo kaŭzas kvaroblan damaĝon ĉe kritika trafo. </li>
    <li><em>19-20/&times;2:</em> La armilo kaŭzas ĉe origina 19 aŭ 20 minacon (ne nur ĉe 20) kaj kaŭzas ĉe kritika trafo duoblan damaĝon.</li>
    <li><em>18-20/&times;2:</em> La armilo kaŭzas ĉe origina 18, 19 aŭ 20 minacon (ne nur ĉe 20) kaj kaŭzas ĉe kritika trafo duoblan damaĝon.</li>
</ul>
<p><b>Baza trafopovo:</b> Ĉiu atako al celoj pli distancaj ol tiu indiko ricevas malbonon pro la distanco. Por ĉiu distanco kiu superas la bazan trafopovon kaj egalas al la tuta aŭ parta trafopovo, la atakoĵeto ricevas po unu akumulan malbonon -2. Se ponardo (baza trafopovo 3 m) estas ĵetata al 8 m distanca celo, ĝi ekzemple ricevas malbonon -4 por la atakĵeto. Ĵetarmiloj havas maksimuman trafopovon de la kvinobla baza trafopovo. Pafarmiloj povas esti uzataj por celoj ĝis la dekobla trafopovo. </p>
<p><b>Pezo:</b> En tiu kolumno estas indikita la pezo por la mezgranda versio de la armilo. Ĉe malgrandaj armilo la pezo duoniĝas, ĉe grandaj duobliĝas. Kelkaj armiloj havas specifan pezon kio estas klarigita en la armilopriskriboj. </p>
<p><b>Tipo:</b> Armiloj kaŭzas certan damaĝotipon kaj estas tiel klasigitaj laŭ la kategorioj: (P) por pikarmiloj, (K) por klingarmiloj kaj (B) por batarmiloj. Kelkaj monstroj povas esti rezistemaj aŭ imunaj kontraŭ certaj ataktipoj. </p>
<p>Estas armiloj kiuj povas kaŭzi diversajn tipojn da damaĝo. Se armilo povas kaŭzi du tipojn da damaĝo, la damaĝo ne dividiĝas en la du damaĝotipoj. La kompleta damaĝo estas entute de du tipoj. La kreaĵo devus esti imuna kontraŭ ambaŭ tipoj por eviti tiun damaĝon. </p>
<p>Alie estas armiloj kiuj povas unu el du tipojn da damaĝo. Se okazas situacio kie tio gravas, la uzanto povas decidi kiun tipon da damaĝo li volas kaŭzi. </p>
<p><b>Specife:</b> Kelkaj armiloj havas specifajn ecojn. Vidu la armilpriskribo por detaloj. </p>
<ul>
    <li><em>Apogdefendi:</em> Se oni uzas tian armilon per prepara ago kontraŭ sturmatako, ĝi kaŭzas duoblan damaĝon al la atakanto se ĝi trafas.</li>
    <li><em>Duobla (armilo):</em> Duoblan armilon oni povas uzi tiel kiel oni batalas per du armiloj. Oni ricevas la samajn malbonojn kiel kun unu unumana armilo kaj unu malpeza armilo. Se oni uzas duoblan armilon kiel unumana armilo, oni nur povas ataki per unu flanko. Ĝi tiam ne kalkuliĝas kiel duobla armilo. </li>
    <li><em>Faligi:</em> Tiuj armiloj povas esti uzataj por faligi malamikojn. Se okazas ke oni mem perdas la ekvilibron ĉe tiu provo, oni povas anstataŭe lasi la armilon fali surteren. </li>
    <li><em>Monaĥo:</em> Monaĥan armilon povas uzi monaĥo dum sia atakhajlo (vidu <a href="../klasoj">Klasoj</a>). </li>
    <li><em>Ne mortiga:</em> Tiuj armiloj kaŭzas ne mortigan damaĝon (vidu <a href="../batalo">Batalo</a>). </li>
    <li><em>Senarmigi:</em> Se oni uzas tian armilon por senarmigi malamikon, oni ricevas bonon +2 por tiu batalmanovro.</li>
    <li><em>Trafopovo:</em> Per armilo kun trafopovo oni nur povas ataki malamikojn kiuj estas 3 m distance, sed ne malamikojn en apudaj kampoj. </li>
</ul>

<table class="granda">
    <caption>Tabelo: Armiloj</caption>
    <thead>
        <tr>
            <th>Simplaj armiloj</th><th>Prezo</th><th>Damaĝo<br>(malgranda)</th><th>Damaĝo<br>(mezgranda)</th><th>Kritika trafo</th><th>Baza trafopovo</th><th>Pezo</th><th>Tipo</th><th>Specife</th>
        </tr>
    </thead>
    <tbody>
        <tr class="nova-sekcio">
            <td colspan="9">Atakoj sen armiloj</td>
        </tr><tr id="armganto">
            <td>Armganto</td><td>2 mo</td><td>1k2</td><td>1k3</td><td>&times;2</td><td>-</td><td>0,5 kg</td><td>b</td><td>-</td>
        </tr><tr id="bato-sen-armilo">
            <td>Bato sen armilo</td><td>-</td><td>1k2</td><td>1k3</td><td>&times;2</td><td>-</td><td>-</td><td>b</td><td>ne mortiga</td>
        </tr>
        <tr class="nova-sekcio">
            <td colspan="9">Leĝeraj armiloj</td>
        </tr><tr id="armganto-najlita">
            <td>Armganto najlita</td><td>5 mo</td><td>1k3</td><td>1k4</td><td>&times;2</td><td>-</td><td>0,5 kg</td><td>p</td><td>-</td>
        </tr><tr id="madzo-legxera">
            <td>Madzo leĝera</td><td>5 mo</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>-</td><td>2 kg</td><td>b</td><td>-</td>
        </tr><tr id="ponardo">
            <td>Ponardo</td><td>2 mo</td><td>1k3</td><td>1k4</td><td>19-20 / &times;2</td><td>3 m</td><td>0,5 kg</td><td>p&nbsp;aŭ&nbsp;k</td><td>-</td>
        </tr><tr id="pusxponardo">
            <td>Puŝponardo</td><td>2 mo</td><td>1k3</td><td>1k4</td><td>&times;3</td><td>-</td><td>0,5 kg</td><td>p</td><td>-</td>
        </tr><tr id="serpo">
            <td>Serpo</td><td>6 mo</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>-</td><td>1 kg</td><td>k</td><td>faligi</td>
        </tr>
        <tr class="nova-sekcio">
        <td colspan="9">Unumanaj armiloj</td>
        </tr><tr id="klabo">
            <td>Klabo</td><td>-</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>3 m</td><td>1,5 kg</td><td>b</td><td>-</td>
        </tr><tr id="lanco-kurta">
            <td>Lanco kurta</td><td>1 mo</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>6 m</td><td>1,5 kg</td><td>p</td><td>-</td>
        </tr><tr id="madzo-peza">
            <td>Madzo peza</td><td>12 mo</td><td>1k6</td><td>1k8</td><td>&times;2</td><td>-</td><td>4 kg</td><td>b</td><td>-</td>
        </tr><tr id="matenstelo">
            <td>Matenstelo</td><td>8 mo</td><td>1k6</td><td>1k8</td><td>&times;2</td><td>-</td><td>3 kg</td><td>b&nbsp;kaj&nbsp;p</td><td>-</td>
        </tr>
        <tr class="nova-sekcio">
        <td colspan="9">Ambaŭmanaj armiloj</td>
        </tr><tr id="bastono-ferita">
            <td>Bastono ferita</td><td>-</td><td>1k4/1k4</td><td>1k6/1k6</td><td>&times;2</td><td>-</td><td>2 kg</td><td>b</td><td>duobla, monaĥo</td>
        </tr><tr id="lanco">
            <td>Lanco</td><td>2 mo</td><td>1k6</td><td>1k8</td><td>&times;3</td><td>6 m</td><td>3 kg</td><td>p</td><td>apogdefendi</td>
        </tr><tr id="lanco-longa">
            <td>Lanco longa</td><td>5 mo</td><td>1k6</td><td>1k8</td><td>&times;3</td><td>-</td><td>4,5 kg</td><td>p</td><td>apogdefendi, trafopovo</td>
        </tr>
        <tr class="nova-sekcio">
        <td colspan="9">Distancarmiloj</td>
        </tr><tr id="arbalesto-legxera">
            <td>Arbalesto leĝera</td><td>35 mo</td><td>1k6</td><td>1k8</td><td>19-20 / &times;2</td><td>24 m</td><td>2 kg</td><td>p</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Vergoj (10)</td><td>1 mo</td><td>-</td><td>-</td><td>-</td><td>-</td><td>0,5 kg</td><td>-</td><td>-</td>
        </tr><tr id="arbalesto-peza">
            <td>Arbalesto peza</td><td>50 mo</td><td>1k8</td><td>1k10</td><td>19-20 / &times;2</td><td>36 m</td><td>4 kg</td><td>p</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Vergoj (10)</td><td>1 mo</td><td>-</td><td>-</td><td>-</td><td>-</td><td>0,5 kg</td><td>-</td><td>-</td>
        </tr><tr id="jxetlanco">
            <td>Ĵetlanco</td><td>1 mo</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>9 m</td><td>1 kg</td><td>p</td><td>-</td>
        </tr><tr id="jxetsagoj">
            <td>Ĵetsagoj</td><td>5 ma</td><td>1k3</td><td>1k4</td><td>&times;2</td><td>6 m</td><td>0,25 kg</td><td>p</td><td>-</td>
        </tr><tr id="kanpafado">
            <td>Kanpafado</td><td>2 mo</td><td>1</td><td>1k2</td><td>&times;2</td><td>6 m</td><td>0,5 kg</td><td>p</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Vergoj (10)</td><td>5 ma</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td>
        </tr><tr id="sxtonjxetilo">
            <td>Ŝtonĵetilo</td><td>-</td><td>1k3</td><td>1k4</td><td>&times;2</td><td>15 m</td><td>-</td><td>b</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Ŝtonĵetkugloj (10)</td><td>1 ma</td><td>-</td><td>-</td><td>-</td><td>-</td><td>2,5 kg</td><td>-</td><td>-</td>
        </tr>
    </tbody>

    <thead> 
        <tr class="nova-sekcio">
            <td>Militarmiloj</td><td>Prezo</td><td>Damaĝo<br>(malgranda)</td><td>Damaĝo<br>(mezgranda)</td><td>Kritika trafo</td><td>Baza trafopovo</td><td>Pezo</td><td>Tipo</td><td>Specife</td>
        </tr>
    </thead>
    <tbody>
        <tr class="nova-sekcio">
        <td colspan="9">Leĝeraj armiloj</td>
        </tr><tr id="astro">
            <td>Astro</td><td>24 mo</td><td>1k3</td><td>1k4</td><td>&times;3</td><td>6 m</td><td>1,5 kg</td><td>p</td><td>-</td>
        </tr><tr id="glavo-kurta">
            <td>Glavo kurta</td><td>10 mo</td><td>1k4</td><td>1k6</td><td>19-20 / &times;2</td><td>-</td><td>1 kg</td><td>p</td><td>-</td>
        </tr><tr id="hakilo">
            <td>Hakilo</td><td>6 mo</td><td>1k4</td><td>1k6</td><td>&times;3</td><td>-</td><td>1,5 kg</td><td>k</td><td>-</td>
        </tr><tr id="jxethakilo">
            <td>Ĵethakilo</td><td>8 mo</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>3 m</td><td>1 kg</td><td>k</td><td>-</td>
        </tr><tr id="kiraso-najlita">
            <td>Kiraso najlita</td><td>ekstra</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>-</td><td>ekstra</td><td>p</td><td>-</td>
        </tr><tr id="kukro">
            <td>Kukro</td><td>8 mo</td><td>1k3</td><td>1k4</td><td>18-20 / &times;2</td><td>-</td><td>1 kg</td><td>k</td><td>-</td>
        </tr><tr id="martelo-legxera">
            <td>Martelo leĝera</td><td>1 mo</td><td>1k3</td><td>1k4</td><td>&times;2</td><td>6 m</td><td>1 kg</td><td>b</td><td>-</td>
        </tr><tr id="metalkapa-klabo">
            <td>Metalkapa klabo</td><td>1 mo</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>-</td><td>1 kg</td><td>b</td><td>ne mortiga</td>
        </tr><tr id="najlita-sxildo-legxera">
            <td>Najlita ŝildo leĝera</td><td>ekstra</td><td>1k3</td><td>1k4</td><td>&times;2</td><td>-</td><td>ekstra</td><td>p</td><td>-</td>
        </tr><tr id="piocxo-legxera">
            <td>Pioĉo leĝera</td><td>4 mo</td><td>1k3</td><td>1k4</td><td>&times;4</td><td>-</td><td>1,5 kg</td><td>p</td><td>-</td>
        </tr><tr id="sxildo-legxera">
            <td>Ŝildo leĝera</td><td>ekstra</td><td>1k2</td><td>1k3</td><td>&times;2</td><td>-</td><td>ekstra</td><td>b</td><td>-</td>
        </tr>
        <tr class="nova-sekcio">
        <td colspan="9">Unumanaj armiloj</td>
        </tr><tr id="batalhakilo">
            <td>Batalhakilo</td><td>10 mo</td><td>1k6</td><td>1k8</td><td>&times;3</td><td>-</td><td>3 kg</td><td>k</td><td>-</td>
        </tr><tr id="cimitaro">
            <td>Cimitaro</td><td>15 mo</td><td>1k4</td><td>1k6</td><td>18-20 / &times;2</td><td>-</td><td>2 kg</td><td>k</td><td>-</td>
        </tr><tr id="glavo-longa">
            <td>Glavo longa</td><td>15 mo</td><td>1k6</td><td>1k6</td><td>19-20 / &times;2</td><td>-</td><td>2 kg</td><td>k</td><td>-</td>
        </tr><tr id="milita-martelo">
            <td>Milita martelo</td><td>12 mo</td><td>1k6</td><td>1k8</td><td>&times;3</td><td>-</td><td>2,5 kg</td><td>b</td><td>-</td>
        </tr><tr id="najlsxildo-peza">
            <td>Najlŝildo peza</td><td>ekstra</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>-</td><td>ekstra</td><td>p</td><td>-</td>
        </tr><tr id="piocxo-peza">
            <td>Pioĉo peza</td><td>8 mo</td><td>1k4</td><td>1k6</td><td>&times;4</td><td>-</td><td>3 kg</td><td>p</td><td>-</td>
        </tr><tr id="rapiro">
            <td>Rapiro</td><td>20 mo</td><td>1k4</td><td>1k4</td><td>18-20 / &times;2</td><td>-</td><td>1 kg</td><td>p</td><td>-</td>
        </tr><tr id="sxildo-peza">
            <td>Ŝildo peza</td><td>ekstra</td><td>1k3</td><td>1k4</td><td>&times;2</td><td>-</td><td>ekstra</td><td>b</td><td>-</td>
        </tr><tr id="tridento">
            <td>Tridento</td><td>15 mo</td><td>1k6</td><td>1k6</td><td>&times;2</td><td>3 m</td><td>2 kg</td><td>p</td><td>apogdefendi</td>
        </tr><tr id="vipmadzo">
            <td>Vipmadzo</td><td>8 mo</td><td>1k6</td><td>1k8</td><td>&times;2</td><td>-</td><td>2,5 kg</td><td>b</td><td>senarmigi, faligi</td>
        </tr>
        <tr class="nova-sekcio">
        <td colspan="9">Ambaŭmanaj armiloj</td>
        </tr><tr id="falcxilo">
            <td>Falĉilo</td><td>18 mo</td><td>1k6</td><td>2k4</td><td>&times;4</td><td>-</td><td>5 kg</td><td>p&nbsp;aŭ&nbsp;k</td><td>faligi</td>
        </tr><tr id="falkato">
            <td>Falkato</td><td>75 mo</td><td>1k6</td><td>2k4</td><td>18-20 / &times;2</td><td>-</td><td>4 kg</td><td>k</td><td>-</td>
        </tr><tr id="gisarmo">
            <td>Gisarmo</td><td>9 mo</td><td>1k6</td><td>2k4</td><td>&times;3</td><td>-</td><td>6 kg</td><td>k</td><td>trafopovo, faligi</td>
        </tr><tr id="glavego">
            <td>Glavego</td><td>50 mo</td><td>1k10</td><td>2k6</td><td>19-20 / &times;2</td><td>-</td><td>4kg</td><td>k</td><td>-</td>
        </tr><tr id="glefo">
            <td>Glefo</td><td>8 mo</td><td>1k8</td><td>1k10</td><td>&times;3</td><td>-</td><td>5 kg</td><td>k</td><td>trafopovo</td>
        </tr><tr id="halebardo">
            <td>Halebardo</td><td>10 mo</td><td>1k8</td><td>1k8</td><td>&times;3</td><td>-</td><td>6 kg</td><td>p&nbsp;aŭ&nbsp;k</td><td>apogdefendi, faligi</td>
        </tr><tr id="klabo-ambauxmana">
            <td>Klabo ambaŭmana</td><td>5 mo</td><td>1k8</td><td>1k10</td><td>&times;2</td><td>-</td><td>4 kg</td><td>b</td><td>-</td>
        </tr><tr id="labriso">
            <td>Labriso</td><td>20 mo</td><td>1k10</td><td>1k12</td><td>&times;3</td><td>-</td><td>6 kg</td><td>k</td><td>-</td>
        </tr><tr id="lanco-de-kavaleriano">
            <td>Lanco de kavaleriano</td><td>10 mo</td><td>1k6</td><td>1k8</td><td>&times;3</td><td>-</td><td>5 kg</td><td>p</td><td>trafopovo</td>
        </tr><tr id="runko">
            <td>Runko</td><td>10 mo</td><td>1k6</td><td>2k4</td><td>&times;3</td><td>-</td><td>6 kg</td><td>p</td><td>senarmigi, trafopovo</td>
        </tr><tr id="vipmadzo-peza">
            <td>Vipmadzo peza</td><td>15 mo</td><td>1k8</td><td>1k10</td><td>19-20 / &times;2</td><td>-</td><td>5 kg</td><td>b</td><td>senarmigi, faligi</td>
        </tr>
        <tr class="nova-sekcio">
        <td colspan="9">Distancaj armiloj</td>
        </tr><tr id="arko-kurta">
            <td>Arko kurta</td><td>30 mo</td><td>1k4</td><td>1k6</td><td>&times;3</td><td>18 m</td><td>1 kg</td><td>p</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Sagoj (20)</td><td>1 mo</td><td>-</td><td>-</td><td>-</td><td>-</td><td>1,5 kg</td><td>-</td><td>-</td>
        </tr><tr id="arko-kurta-kunmetita">
            <td>Arko kurta kunmetita</td><td>75 mo</td><td>1k4</td><td>1k6</td><td>&times;3</td><td>21 m</td><td>1 kg</td><td>p</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Sagoj (20)</td><td>1 mo</td><td>-</td><td>-</td><td>-</td><td>-</td><td>1,5 kg</td><td>-</td><td>-</td>
        </tr><tr id="arko-longa">
            <td>Arko longa</td><td>75 mo</td><td>1k6</td><td>1k8</td><td>&times;3</td><td>30 m</td><td>1,5 kg</td><td>p</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Sagoj (20)</td><td>1 mo</td><td>-</td><td>-</td><td>-</td><td>-</td><td>1,5 kg</td><td>-</td><td>-</td>
        </tr><tr id="arko-longa-kunmetita">
            <td>Arko longa kunmetita</td><td>100 mo</td><td>1k6</td><td>1k8</td><td>&times;3</td><td>33 m</td><td>1,5 kg</td><td>p</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Sagoj (20)</td><td>1 mo</td><td>-</td><td>-</td><td>-</td><td>-</td><td>1,5 kg</td><td>-</td><td>-</td>
        </tr>
    </tbody>
       
    <thead>
        <tr class="nova-sekcio">
            <td>Eksotikaj armiloj</td><td>Prezo</td><td>Damaĝo<br>(malgranda)</td><td>Damaĝo<br>(mezgranda)</td><td>Kritika trafo</td><td>Baza trafopovo</td><td>Pezo</td><td>Tipo</td><td>Specife</td>
        </tr>
    </thead>
    <tbody>
        <tr class="nova-sekcio">
        <td colspan="9">Leĝeraj armiloj</td>
        </tr><tr id="kamao">
            <td>Kamao</td><td>2 mo</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>-</td><td>1 kg</td><td>k</td><td>monaĥo, faligi</td>
        </tr><tr id="nuncxako">
            <td>Nunĉako</td><td>2 mo</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>-</td><td>1 kg</td><td>b</td><td>monaĥo, senarmigi</td>
        </tr><tr id="saio">
            <td>Saio</td><td>1 mo</td><td>1k3</td><td>1k4</td><td>&times;2</td><td>-</td><td>0,5 kg</td><td>b</td><td>monaĥo, senarmigi</td>
        </tr><tr id="sianghamo">
            <td>Sianghamo</td><td>3 mo</td><td>1k4</td><td>1k6</td><td>&times;2</td><td>-</td><td>0,5 kg</td><td>p</td><td>monaĥo</td>
        </tr>
        <tr class="nova-sekcio">
        <td colspan="9">Unumanaj armiloj</td>
        </tr><tr id="batalhakilo-nana">
            <td>Batalhakilo nana</td><td>30 mo</td><td>1k8</td><td>1k10</td><td>&times;3</td><td>-</td><td>4 kg</td><td>k</td><td>-</td>
        </tr><tr id="glavo-bastarda">
            <td>Glavo bastarda</td><td>35 mo</td><td>1k8</td><td>1k10</td><td>19-20 / &times;2</td><td>-</td><td>3 kg</td><td>k</td><td>-</td>
        </tr><tr id="vipo">
            <td>Vipo</td><td>1 mo</td><td>1k2</td><td>1k3</td><td>&times;2</td><td>-</td><td>1 kg</td><td>k</td><td>senarmigi, ne mortiga, trafopovo, faligi</td>
        </tr>
        <tr class="nova-sekcio">
        <td colspan="9">Ambaŭmanaj armiloj</td>
        </tr><tr id="duobla-hakilo-orka">
            <td>Duobla hakilo orka</td><td>60 mo</td><td>1k6/1k6</td><td>1k8/1k8</td><td>&times;3</td><td>-</td><td>7,5 kg</td><td>k</td><td>duobla</td>
        </tr><tr id="glavo-duklinga">
            <td>Glavo duklinga</td><td>100 mo</td><td>1k6/1k6</td><td>1k8/1k8</td><td>19-20 / &times;2</td><td>-</td><td>5 kg</td><td>k</td><td>duobla</td>
        </tr><tr id="hokmartelo-gnoma">
            <td>Hokmartelo gnoma</td><td>20 mo</td><td>1k6/1k4</td><td>1k8/1k6</td><td>&times;3/&times;4</td><td>-</td><td>3 kg</td><td>b&nbsp;aŭ&nbsp;p</td><td>duobla, faligi</td>
        </tr><tr id="kateno-najlita">
            <td>Kateno najlita</td><td>25 mo</td><td>1k6</td><td>2k4</td><td>&times;2</td><td>-</td><td>5 kg</td><td>p</td><td>senarmigi, faligi</td>
        </tr><tr id="vipmadzo-duobla">
            <td>Vipmadzo duobla</td><td>90 mo</td><td>1k6/1k6</td><td>1k8/1k8</td><td>&times;2</td><td>-</td><td>5 kg</td><td>b</td><td>senarmigi, duobla, faligi</td>
        </tr><tr id="sabro-elfa">
            <td>Sabro elfa</td><td>80 mo</td><td>1k8</td><td>1k10</td><td>18-20 / &times;2</td><td>-</td><td>3,5 kg</td><td>k</td><td>-</td>
        </tr><tr id="urgrosxo-nana">
            <td>Urgroŝo nana</td><td>50 mo</td><td>1k6/1k4</td><td>1k8/1k6</td><td>&times;3</td><td>-</td><td>6 kg</td><td>p&nbsp;aŭ&nbsp;k</td><td>apogdefendi, duobla</td>
        </tr>
        <tr class="nova-sekcio">
        <td colspan="9">Distancaj armiloj</td>
        </tr><tr id="arbalesto-ripetanta-legxera">
            <td>Arbalesto ripetanta leĝera</td><td>250 mo</td><td>1k6</td><td>1k8</td><td>19-20 / &times;2</td><td>24 m</td><td>3 kg</td><td>p</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Vergoj (5)</td><td>1 mo</td><td>-</td><td>-</td><td>-</td><td>-</td><td>0,5 kg</td><td>-</td><td>-</td>
        </tr><tr id="arbalesto-ripetanta-peza">
            <td>Arbalesto ripetanta peza</td><td>400 mo</td><td>1k8</td><td>1k10</td><td>19-20 / &times;2</td><td>36 m</td><td>6 kg</td><td>p</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Vergoj (5)</td><td>1 mo</td><td>-</td><td>-</td><td>-</td><td>-</td><td>0,5 kg</td><td>-</td><td>-</td>
        </tr><tr id="bastonjxetilo-hobita">
            <td>Bastonĵetilo hobita</td><td>20 mo</td><td>1k6</td><td>1k8</td><td>&times;3</td><td>80 m</td><td>1,5 kg</td><td>b</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Ŝtonĵetkugloj (10)</td><td>1 ma</td><td>-</td><td>-</td><td>-</td><td>-</td><td>2,5 kg</td><td>-</td><td>-</td>
        </tr><tr id="bolaso">
            <td>Bolaso</td><td>5 mo</td><td>1k3</td><td>1k4</td><td>&times;2</td><td>3 m</td><td>1 kg</td><td>b</td><td>ne mortiga, faligi</td>
        </tr><tr id="manarbalesto">
            <td>Manarbalesto</td><td>100 mo</td><td>1k3</td><td>1k4</td><td>19-20 / &times;2</td><td>9 m</td><td>1 kg</td><td>p</td><td>-</td>
        </tr><tr>
            <td class="desxovo-1">Vergoj (10)</td><td>1 mo</td><td>-</td><td>-</td><td>-</td><td>-</td><td>0,5 kg</td><td>-</td><td>-</td>
        </tr><tr id="reto">
            <td>Reto</td><td>20 mo</td><td>-</td><td>-</td><td>-</td><td>3 m</td><td>3 kg</td><td>-</td><td>-</td>
        </tr><tr id="sxurikenoj">
            <td>Ŝurikenoj (5)</td><td>1 mo</td><td>1</td><td>1k2</td><td>&times;2</td><td>3 m</td><td>0,25 kg</td><td>p</td><td>monaĥo</td>
        </tr>
    <tbody>
</table>

<h3 class="tradukinda">Armiloj [Majstroverko]</h3>

<!--
<h2>Armaĵoj</h2>

<table class="granda">
    <thead>
        <tr>
            <th rowspan="2">Armature</th>
            <th rowspan="2">Costo</th>
            <th rowspan="2">Bonus di armatura/scudo</th>
            <th rowspan="2">Bonus Des max</th>
            <th rowspan="2">Penalità di armatura alla prova</th>
            <th rowspan="2">Fallimento incantesimi arcani</th>
            <th colspan="2">Velocità</th>
            <th rowspan="2">Peso<sup>1</sup></th>
        </tr>
        <tr>
            <th>9 m</th> <th>6 m</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="9"><sup>1</sup> Il peso indicato si riferisce alla versione per   personaggi di taglia Media. Le armature adattate per personaggi di taglia   Piccola pesano la metà, mentre per quelli di taglia Grande pesano il doppio.</td>
        </tr>
        <tr>
            <td colspan="9"><sup>2</sup> Quando si corre con un’armatura pesante ci si   muove solo al triplo della velocità, non al quadruplo.</td>
        </tr>
        <tr>
            <td colspan="9"><sup>3</sup> Lo scudo torre può anche garantire la copertura.   Vedi la descrizione.</td>
        </tr>
        <tr>
            <td colspan="9"><sup>4</sup> Mano non libera per lanciare incantesimi.</td>
        </tr>
    </tfoot>
    <tbody>
        <tr class="nova-sekcio">
            <td colspan="9">Armature leggere</td>
        </tr>
        <tr>
            <td>Imbottita</td>
            <td>5 mo</td>
            <td>+1</td>
            <td>+8</td>
            <td>0</td>
            <td>5%</td>
            <td>9 m</td>
            <td>6 m</td>
            <td>5 kg</td>
        </tr>
        <tr>
            <td>Cuoio</td>
            <td>10 mo</td>
            <td>+2</td>
            <td>+6</td>
            <td>0</td>
            <td>10%</td>
            <td>9 m</td>
            <td>6 m</td>
            <td>7,5   kg</td>
        </tr>
        <tr>
            <td>Cuoio borchiato</td>
            <td>25 mo</td>
            <td>+3</td>
            <td>+5</td>
            <td>–1</td>
            <td>15%</td>
            <td>9 m</td>
            <td>6 m</td>
            <td>10 kg</td>
        </tr>
        <tr>
            <td>Giaco di maglia</td>
            <td>100 mo</td>
            <td>+4</td>
            <td>+4</td>
            <td>–2</td>
            <td>20%</td>
            <td>9 m</td>
            <td>6 m</td>
            <td>12,5 kg</td>
        </tr>
        <tr class="nova-sekcio">
            <td colspan="9">Armature medie</td>
        </tr>
        <tr>
            <td>Pelle</td>
            <td>15 mo</td>
            <td>+4</td>
            <td>+4</td>
            <td>–3</td>
            <td>20%</td>
            <td>6 m</td>
            <td>4,5 m</td>
            <td>12,5 kg</td>
        </tr>
        <tr>
            <td>Corazza di scaglie</td>
            <td>50 mo</td>
            <td>+5</td>
            <td>+3</td>
            <td>–4</td>
            <td>25%</td>
            <td>6 m</td>
            <td>4,5 m</td>
            <td>15 kg</td>
        </tr>
        <tr>
            <td>Cotta di maglia</td>
            <td>150 mo</td>
            <td>+6</td>
            <td>+2</td>
            <td>–5</td>
            <td>30%</td>
            <td>6 m</td>
            <td>4,5 m</td>
            <td>20 kg</td>
        </tr>
        <tr>
            <td>Corazza di piastre</td>
            <td>200 mo</td>
            <td>+6</td>
            <td>+3</td>
            <td>–4</td>
            <td>25%</td>
            <td>6 m</td>
            <td>4,5 m</td>
            <td>15 kg</td>
        </tr>
        <tr class="nova-sekcio">
            <td colspan="9">Armature pesanti</td>
        </tr>
        <tr>
            <td>Corazza a strisce</td>
            <td>200 mo</td>
            <td>+7</td>
            <td>+0</td>
            <td>–7</td>
            <td>40%</td>
            <td>6 m<sup>2</sup></td>
            <td>4,5 m<sup>2</sup></td>
            <td>22,5 kg</td>
        </tr>
        <tr>
            <td>Corazza di bande</td>
            <td>250 mo</td>
            <td>+7</td>
            <td>+1</td>
            <td>–6</td>
            <td>35%</td>
            <td>6 m<sup>2</sup></td>
            <td>4,5 m<sup>2</sup></td>
            <td>17,5 kg</td>
        </tr>
        <tr>
            <td>Mezza armatura</td>
            <td>600 mo</td>
            <td>+8</td>
            <td>+0</td>
            <td>–7</td>
            <td>40%</td>
            <td>6 m<sup>2</sup></td>
            <td>4,5 m<sup>2</sup></td>
            <td>25 kg</td>
        </tr>
        <tr>
            <td>Armatura completa</td>
            <td>1.500 mo</td>
            <td>+9</td>
            <td>+1</td>
            <td>–6</td>
            <td>35%</td>
            <td>6 m<sup>2</sup></td>
            <td>4,5 m<sup>2</sup></td>
            <td>25 kg</td>
        </tr>
        <tr class="nova-sekcio">
            <td colspan="9">Scudi</td>
        </tr>
        <tr>
            <td>Buckler</td>
            <td>15 mo</td>
            <td>+1</td>
            <td>—</td>
            <td>–1</td>
            <td>5%</td>
            <td>—</td>
            <td>—</td>
            <td>2,5   kg</td>
        </tr>
        <tr>
            <td>Scudo leggero di legno</td>
            <td>3 mo</td>
            <td>+1</td>
            <td>—</td>
            <td>–1</td>
            <td>5%</td>
            <td>—</td>
            <td>—</td>
            <td>2,5   kg</td>
        </tr>
        <tr>
            <td>Scudo leggero di metallo</td>
            <td>9 mo</td>
            <td>+1</td>
            <td>—</td>
            <td>–1</td>
            <td>5%</td>
            <td>—</td>
            <td>—</td>
            <td>3 kg</td>
        </tr>
        <tr>
            <td>Scudo pesante di legno</td>
            <td>7 mo</td>
            <td>+2</td>
            <td>—</td>
            <td>–2</td>
            <td>15%</td>
            <td>—</td>
            <td>—</td>
            <td>5 kg</td>
        </tr>
        <tr>
            <td>Scudo pesante di metallo</td>
            <td>20 mo</td>
            <td>+2</td>
            <td>—</td>
            <td>–2</td>
            <td>15%</td>
            <td>—</td>
            <td>—</td>
            <td>7,5   kg</td>
        </tr>
        <tr>
            <td>Scudo torre</td>
            <td>30 mo</td>
            <td>+4<sup>3</sup></td>
            <td>+2</td>
            <td>–10</td>
            <td>50%</td>
            <td>—</td>
            <td>—</td>
            <td>22,5 kg</td>
        </tr>
        <tr class="nova-sekcio">
            <td colspan="9">Extra</td>
        </tr>
        <tr>
            <td>Chiodature per armatura</td>
            <td>+50 mo</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>+5 kg</td>
        </tr>
        <tr>
            <td>Guanto d’arme con chiusura</td>
            <td>8 mo</td>
            <td>—</td>
            <td>—</td>
            <td>speciale</td>
            <td>n/a<sup>4</sup></td>
            <td>—</td>
            <td>—</td>
            <td>+2,5 kg</td>
        </tr>
        <tr>
            <td>Chiodature per scudo</td>
            <td>+10 mo</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>—</td>
            <td>+2,5 kg</td>
        </tr>
    </tbody>
</table>
-->

<?php if(!isset($kompleta)) require '../../pagxpiedo.php' ?>
