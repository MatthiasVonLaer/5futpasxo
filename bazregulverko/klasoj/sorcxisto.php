<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

<?php if(!isset($sen_kapo_piedo)) require '../../pagxkapo.php' ?>

<title>Sorĉisto</title>

<h1>Sorĉisto</h1>

<p><b>Rolo:</b> Sorĉistoj havas siajn konatajn sorĉojn kiujn ili povas sufiĉe ofte efektivigi. Tial ili estas potencaj sorĉantoj por la batalo. Ju pli profunde ili konas sian kreskantan sorĉaron des pli ili malkovras novajn kaj aliajn vojojn por uzi sian magion. Vojoj kiujn aliaj sorĉkonantoj eble ne vidas. Krome iliaj sangolinioj donas al ili pliajn eblecojn tiel kiel neniu sorĉisto similas al alia. </p>
<p><b>Pensmaniero:</b> ĉiu</p>
<p><b>Vivkubetoj:</b> k6</p>
<p><b>Oro je la komenco:</b> 2k6 &times; 10mo (mezkvanta 70mo)
<p><b>Klaskapablecoj:</b> Blufi&nbsp;(KAR), Flugi&nbsp;(LER), Metio&nbsp;(INT), Profesio&nbsp;(SAĜ), Scio&nbsp;(arkano)&nbsp;(INT), Sorĉkono&nbsp;(INT), Taksi&nbsp;(INT), Timigi&nbsp;(KAR), Uzi&nbsp;magian&nbsp;objekton&nbsp;(KAR)
<p><b>Kapablecopoentoj por ĉiu nivelo:</b> 2 + INT-modifilo

<table>
    <caption>Tabelo: Sorĉisto</caption>
    <thead>
        <tr>
            <th rowspan="2">Nivelo</th>
            <th rowspan="2">BAB</th>
            <th rowspan="2">REF</th>
            <th rowspan="2">VOL</th>
            <th rowspan="2">PER</th>
            <th rowspan="2">Specife</th>
            <th colspan="9">Sorĉoj por unu tago</th>
        </tr>
        <tr>
            <th>1a</th>
            <th>2a</th>
            <th>3a</th>
            <th>4a</th>
            <th>5a</th>
            <th>6a</th>
            <th>7a</th>
            <th>8a</th>
            <th>9a</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>+0</td>
            <td>+0</td>
            <td>+2</td>
            <td>+0</td>
            <td><a href="#sangolinioj">Povo de sangolinio</a>, <a href="#sorcxartifikoj">Sorĉartifikoj</a>, <a href="#sorcxi-sen-materialkomponantoj">Sorĉi sen materialkomponantoj</a></td>
            <td>3</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>2</td>
            <td>+1</td>
            <td>+0</td>
            <td>+3</td>
            <td>+0</td>
            <td>-</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>3</td>
            <td>+1</td>
            <td>+1</td>
            <td>+3</td>
            <td>+1</td>
            <td><a href="#sangolinioj">Povo de sangolinio</a>, <a href="#sangolinioj">Sorĉo de sangolinio</a></td>
            <td>5</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>4</td>
            <td>+2</td>
            <td>+1</td>
            <td>+4</td>
            <td>+1</td>
            <td>-</td>
            <td>6</td>
            <td>3</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>5</td>
            <td>+2</td>
            <td>+1</td>
            <td>+4</td>
            <td>+1</td>
            <td><a href="#sangolinioj">Sorĉo de sangolinio</a></td>
            <td>6</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>6</td>
            <td>+3</td>
            <td>+2</td>
            <td>+5</td>
            <td>+2</td>
            <td>-</td>
            <td>6</td>
            <td>5</td>
            <td>3</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>7</td>
            <td>+3</td>
            <td>+2</td>
            <td>+5</td>
            <td>+2</td>
            <td><a href="#sangolinioj">Talento de sangolinio</a>, <a href="#sangolinioj">Sorĉo de sangolinio</a></td>
            <td>6</td>
            <td>6</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>8</td>
            <td>+4</td>
            <td>+2</td>
            <td>+6</td>
            <td>+2</td>
            <td>-</td>
            <td>6</td>
            <td>6</td>
            <td>5</td>
            <td>3</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>9</td>
            <td>+4</td>
            <td>+3</td>
            <td>+6</td>
            <td>+3</td>
            <td><a href="#sangolinioj">Povo de sangolinio</a>, <a href="#sangolinioj">Sorĉo de sangolinio</a></td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>10</td>
            <td>+5</td>
            <td>+3</td>
            <td>+7</td>
            <td>+3</td>
            <td>-</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>5</td>
            <td>3</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>11</td>
            <td>+5</td>
            <td>+3</td>
            <td>+7</td>
            <td>+3</td>
            <td><a href="#sangolinioj">Sorĉo de sangolinio</a></td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>12</td>
            <td>+6/+1</td>
            <td>+4</td>
            <td>+8</td>
            <td>+4</td>
            <td>-</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>5</td>
            <td>3</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>13</td>
            <td>+6/+1</td>
            <td>+4</td>
            <td>+8</td>
            <td>+4</td>
            <td><a href="#sangolinioj">Talento de sangolinio</a>, <a href="#sangolinioj">Sorĉo de sangolinio</a></td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>14</td>
            <td>+7/+2</td>
            <td>+4</td>
            <td>+9</td>
            <td>+4</td>
            <td>-</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>5</td>
            <td>3</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>15</td>
            <td>+7/+2</td>
            <td>+5</td>
            <td>+9</td>
            <td>+5</td>
            <td><a href="#sangolinioj">Povo de sangolinio</a>, <a href="#sangolinioj">Sorĉo de sangolinio</a></td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>4</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>16</td>
            <td>+8/+3</td>
            <td>+5</td>
            <td>+10</td>
            <td>+5</td>
            <td>-</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>5</td>
            <td>3</td>
            <td>-</td>
        </tr>
        <tr>
            <td>17</td>
            <td>+8/+3</td>
            <td>+5</td>
            <td>+10</td>
            <td>+5</td>
            <td><a href="#sangolinioj">Sorĉo de sangolinio</a></td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>4</td>
            <td>-</td>
        </tr>
        <tr>
            <td>18</td>
            <td>+9/+4</td>
            <td>+6</td>
            <td>+11</td>
            <td>+6</td>
            <td>-</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>5</td>
            <td>3</td>
        </tr>
        <tr>
            <td>19</td>
            <td>+9/+4</td>
            <td>+6</td>
            <td>+11</td>
            <td>+6</td>
            <td><a href="#sangolinioj">Talento de sangolinio</a>, <a href="#sangolinioj">Sorĉo de sangolinio</a></td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>4</td>
        </tr>
        <tr>
            <td>20</td>
            <td>+10/+5</td>
            <td>+6</td>
            <td>+12</td>
            <td>+6</td>
            <td><a href="#sangolinioj">Povo de sangolinio</a></td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
        </tr>
    </tbody>
</table>

<h2>Klasaj karakterizaĵoj</h2>

<table class="glita">
    <caption>Konataj sorĉoj de la sorĉisto</caption>
    <thead>
        <tr><th rowspan="2">Nivelo</th><th colspan="10">Grado de konataj sorĉoj</th>
        <tr><th>0a</th><th>1a</th><th>2a</th><th>3a</th><th>4a</th><th>5a</th><th>6a</th><th>7a</th><th>8a</th><th>9a</th></tr>
    </thead>
    <tbody>
        <tr><td>1</td><td>4</td><td>2</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>2</td><td>5</td><td>2</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>3</td><td>5</td><td>3</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>4</td><td>6</td><td>3</td><td>1</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>5</td><td>6</td><td>4</td><td>2</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>6</td><td>7</td><td>4</td><td>2</td><td>1</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>7</td><td>7</td><td>5</td><td>3</td><td>2</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>8</td><td>8</td><td>5</td><td>3</td><td>2</td><td>1</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>9</td><td>8</td><td>5</td><td>4</td><td>3</td><td>2</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>10</td><td>9</td><td>5</td><td>4</td><td>3</td><td>2</td><td>1</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>11</td><td>9</td><td>5</td><td>5</td><td>4</td><td>3</td><td>2</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>12</td><td>9</td><td>5</td><td>5</td><td>4</td><td>3</td><td>2</td><td>1</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>13</td><td>9</td><td>5</td><td>5</td><td>4</td><td>4</td><td>3</td><td>2</td><td>-</td><td>-</td><td>-</td></tr>
        <tr><td>14</td><td>9</td><td>5</td><td>5</td><td>4</td><td>4</td><td>3</td><td>2</td><td>1</td><td>-</td><td>-</td></tr>
        <tr><td>15</td><td>9</td><td>5</td><td>5</td><td>4</td><td>4</td><td>4</td><td>3</td><td>2</td><td>-</td><td>-</td></tr>
        <tr><td>16</td><td>9</td><td>5</td><td>5</td><td>4</td><td>4</td><td>4</td><td>3</td><td>2</td><td>1</td><td>-</td></tr>
        <tr><td>17</td><td>9</td><td>5</td><td>5</td><td>4</td><td>4</td><td>4</td><td>3</td><td>3</td><td>2</td><td>-</td></tr>
        <tr><td>18</td><td>9</td><td>5</td><td>5</td><td>4</td><td>4</td><td>4</td><td>3</td><td>3</td><td>2</td><td>1</td></tr>
        <tr><td>19</td><td>9</td><td>5</td><td>5</td><td>4</td><td>4</td><td>4</td><td>3</td><td>3</td><td>3</td><td>2</td></tr>
        <tr><td>20</td><td>9</td><td>5</td><td>5</td><td>4</td><td>4</td><td>4</td><td>3</td><td>3</td><td>3</td><td>3</td></tr>
    </tbody>
</table>

<p> La sorĉisto havas la sekvantajn klasajn karakterizaĵojn. </p>

<p> <b>Sperto kun armiloj kaj armaĵoj:</b> La sorĉisto estas sperta kun ĉiuj simplaj armiloj. Li ne havas sperton kun armaĵoj aŭ ŝildoj. Ĉiu tipo de armaĵo malhelpas al la moviĝo de la sorĉisto kio povas kaŭzi ke sorĉoj kun gestoj povas malsukcesi (vidu arkanaj sorĉoj kaj armaĵoj). </p>

<p id="sorcxoj"><b>Sorĉoj:</b> La sorĉisto majstras arkanajn sorĉojn, kiujn li elektas plejparte el la sorĉlisto por magiistoj / sorĉistoj kiu troveblas en la ĉapitro <a href="../sorcxlistoj">Sorĉlistoj</a>. Li povas efektivigi ĉiun sorĉon kiun li konas sen prepari ĝin. Por lerni aŭ apliki sorĉon, la sorĉisto devas havi minimume karismon de 10 + la grado de la sorĉo. La malfacilecgrado por la savĵetoj kontraŭ sorĉoj de la sorĉisto estas 10 + sorĉgrado + KAR-bono de la sorĉisto. </p>

<p> Kiel aliaj sorĉkonantoj la sorĉisto nur povas efektivigi certan kvanton da sorĉoj dum unu tago. Liaj sorĉoj por unu tago estas indikitaj en la tabelo. Aldone li ricevas kromajn sorĉojn por unu tago se li havas altan atributon de karismo (vido paragrafon: <a href="../ekludi/#atributoj-kaj-sorcxkonantoj">Atributoj kaj sorĉkonantoj</a>). </p>

<p> La sorĉisto nur konas limigitan kvanton da sorĉoj. Komence li konas kvar sorĉojn de la sorĉgrado 0 kaj du sorĉojn de la sorĉgrado 1 laŭ sia elekto. Ĉiam kiam li atingas novan nivelon kiel sorĉisto, li lernas unu aŭ pliajn novajn sorĉojn kiel indikita en tabelo: konataj sorĉoj de la sorĉisto. La kvanton da sorĉoj - kiujn la sorĉisto povas efektivigi dum unu tago - influas lia karismo. Tamen la nombro da konataj sorĉoj ne dependas de lia karismo. La sorĉoj povas esti elektita el la sorĉlisto por sorĉisto / magiisto. Tamen povas ankaŭ esti nekutimaj sorĉoj pri kiuj la sorĉisto akiris sperton per studado. </p>

<p> Je la 4a nivelo kaj je ĉiu para nivelo poste (6a, 8a, ktp.) la sorĉisto povas lerni novan sorĉon anstataŭe sorĉon kiun li jam konas. Efektive li perdas malnovan sorĉon por nova sorĉo. Tiuj sorĉoj devas havi la saman gradon. La sorĉisto ĉiam nur povas ŝanĝi unu sorĉon kaj devas fari la decidon kiam li ricevas novajn sorĉojn por tiu nivelo. </p>

<p> Alie ol klerikoj aŭ magiistoj la sorĉisto ne devas prepari siajn sorĉojn. Li povas ĉiam efektivigi ĉiun sorĉon kiun li konas tiel longe ke li ne jam foruzis ĉiujn sorĉojn de tiu grado aŭ de pli alta grado. </p>

<p id="sangolinioj"><b>Sangolinioj:</b> Ĉiu sorĉisto havas fonton de sia povo, ion de sia deveno kiu donas al li sorĉojn, kromajn talentojn, unu plian klaskapablecon kaj aliajn specialajn eblecojn. Tiu fonto povas esti rekta sanga parenceco kun estaĵo de granda magia povo aŭ iu okazaĵo en la familihistorio de la sorĉisto. Ekzemple li povus deveni de drako aŭ lia avo konkludi traktaton kun la diablo. Sendepende de la fonto la influo montriĝas en diversaj manieroj kiam la sorĉisto atingas novan nivelon. La sorĉisto devas elekti unu sangolinion kiam li elektas la unuan nivelon en tiu klaso. Poste li ne plu povas ŝanĝi sian elekton. </p>

<p> Je la 3a nivelo kaj je ĉiu dua plia nivelo la sorĉisto lernas novan sorĉon kiu dependas de lia sangolinio. Li ricevas tiun sorĉon aldone al tiuj kiujn li lernas ĉe la nivelaltiĝo kiel indikita en la tabelo. </p>

<p> Je la 7a nivelo kaj je ĉiu sesa plia nivelo la sorĉisto ricevas kroman talenton, kiun li elektas el la listo de sia sangolinio. Li tamen devas plenumi la kondiĉojn de la talento. </p>

<p id="sorcxartifikoj"><b>Sorĉartifikoj:</b> La sorĉisto lernas kvanton da sorĉartifikoj aŭ sorĉoj de la grado nul kiel indikita en la tabelo: konataj sorĉoj de la sorĉisto. Tiuj sorĉoj efektiviĝas kiel aliaj sorĉoj. Tamen la sorĉisto povas efektivigi ilin tiom ofte kiel li volas. </p>

<p id="sorcxi-sen-materialkomponantoj"><b>Sorĉi sen materialkomponantoj:</b> La sorĉisto ricevas la talenton sorĉi sen materialkomponantoj kiel kroma talento je la 1a nivelo. </p>

<h2>Sangolinioj</h2>

<p> La sekvantaj sangolinioj nur reprezentas elekton por eblaj fontoj de magia povo por la sorĉisto. Se ne estas alie skribita, estas supozita ke la sorĉisto devenas de arkana sangolinio. </p>

<h3 class="tradukinda">Arkana sangolinio</h3>
<h3 class="tradukinda">Ĉiela sangolinio</h3>

<h3>Demona sangolinio</h3>
<p>Antaŭ generacioj demono lasis sian semon en via familio. Tiu ne evidentas por ĉiuj familianoj, sed ĉe vi la demona heredaĵo estas aparte forta kaj instigas vin ruini aliajn. </p>
<p><b>Klaskapableco:</b> Scio (la ebenoj) </p>
<p><b>Kromaj sorĉoj:</b> Kaŭzi timon (3a), ursoforto (5a), kolero (7a), ŝtonhaŭto (9a), forsendi (11a), transformi (13a), teleporti potence (15a), malsankta aŭro (17a), venigi monstron IX (19a). </p>
<p><b>Kromaj talentoj:</b> Duobla bato, impeta atako, granda persisteco, kapablecfokuso (scio (la ebenoj)), puŝatako progresita, petrui objekton progresite, porĉvenigo plifortigita, plifortigi sorĉojn. </p>
<p><b>Sekreto de sango:</b> Se la sorĉisto efektivigas sorĉon de la subskolo alvenigsorĉi, la alvenigitaj kreaĵoj ricevas damaĝredukton de &frac12; sorĉistonivelo/bona (minimume 1). Tio ne sumiĝas kun io alia damaĝredukto kiun la kreaĵo jam havas. </p>
<p><b>Povo de sango:</b> Dum onidiroj rakontas ke vi estas obsedata, vi certas pri tio. La demona influo en via sango kreskas kiam vi fariĝas pli potenca. </p>
<p><em>Ungegoj (SNE):</em> Ekde la 1a nivelo la sorĉisto povas kreskigi ungegojn ĉe siaj manoj per libera ago. La ungegoj estas traktataj kiel naturaj armiloj, kiuj ebligas fari du ungegatakojn per plena ago per la plej alta atakbono. Do la sorĉisto ĉiam estas armita. La ungegoj kaŭzas 1k4 (1k3, se la sorĉisto estas malgranda) damaĝon plus lia fortomodifilo. Ekde la 5a nivelo liaj ungegoj estas traktataj kiel magiaj armiloj por preteriri damaĝredukton. Ekde la 7a nivelo la damaĝo altiĝas je unu paŝo al 1k6 aŭ 1k4, se li estas malgranda. Ekde la 11a nivelo la ungegoj estas traktataj kiel ekbrulantaj armiloj, kiuj kaŭzas 1k6 plian fajrodamaĝon se ili trafas. La sorĉisto povas uzi tiun eblecon (3 + KAR-modifilo) dum unu tago. La rondoj ne davas sinsekvi. </p>
<p><em>Demona rezistenco (EE):</em> Ekde la 3a nivelo la sorĉisto ricevas rezistencon de 5 kontraŭ elektraĵo kaj bonon de +2 por savĵetoj kontraŭ venenoj. Je la 9a nivelo la rezistenco kontraŭ elektraĵo altiĝas al 10 kaj la bono kontraŭ venenoj al +4. </p>
<p><em>Forto de demono (EE):</em> Ekde la 9a nivelo la sorĉisto ricevas entenantan bonon de +2 en forto. Tiu bono altiĝas al +4 je la 13a nivelo kaj al +6 je la 17a nivelo. </p>
<p><em>Aldona venigo (SNE):</em> Ekde la 15a nivelo la sorĉisto venigas aldonan kreaĵon, se li uzas "venigi monstron" sorĉon por demono aŭ infera kreaĵo. </p>
<p><em>Demona potenco (SNE):</em> Ekde la 20a nivelo la potenco de la abismo trapenetras la sorĉiston. Li estas imuna kontraŭ elektraĵo kaj veneno. Krome li havas rezistencon de 10 kontraŭ acidoj, malvarmo kaj fajro kaj li kapablas telepation (kio ebligas al li interparoli kun ĉiuj kreaĵoj kiuj povas paroli). </p>

<h3 class="tradukinda">Diabla sangolinio</h3>
<h3 class="tradukinda">Draka sangolinio</h3>
<h3 class="tradukinda">Elementa sangolinio</h3>
<h3 class="tradukinda">Fea sangolinio</h3>
<h3 class="tradukinda">Malmortula sangolinio</h3>
<h3 class="tradukinda">Malnorma sangolinio</h3>
<h3 class="tradukinda">Sorta sangolinio</h3>

<?php if(!isset($sen_kapo_piedo)) require '../../pagxpiedo.php' ?>
