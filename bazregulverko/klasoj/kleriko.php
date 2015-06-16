<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

<?php if(!isset($sen_kapo_piedo)) require '../../pagxkapo.php' ?>

<title>Kleriko</title>
<h1>Kleriko</h1>

<img src="../../bildoj/kleriko.jpg" style="width:50%;">

<p><b>Rolo:</b> Klerikoj kapablas defendi la gracon de sia dio en la batalo. Ne malofte ili estas kuraĝaj kaj kapablaj batalistoj. Ilia vera forto tamen estas ilia ebleco enfokusigi pozitivan aŭ negativan energion por fortigi sin kaj siajn aliancanojn en la batalo, malhelpi siajn malamikojn kaj sanigi siajn amikojn. </p>
<p><b>Pensmaniero:</b> La pensmaniero de la kleriko nur rajtas devii unu paŝon de la pensmaniero de lia dio. Do ĝi rajtas diferenci unu paŝon sur unu el la du aksoj (ĥaosa-laŭleĝa aŭ bona-malbona).</p>
<p><b>Vivkubetoj:</b> k8</p>
<p><b>Oro je la komenco:</b> 4k6 &times; 10mo (mezkvanta 140mo)
<p><b>Klaskapablecoj:</b> Diplomatio&nbsp;(KAR), Malkovri&nbsp;motivon&nbsp;(SAĜ), Kuraci&nbsp;(SAĜ), Lingvoscio&nbsp;(INT), Metio&nbsp;(INT), Profesio&nbsp;(SAĜ), Scio&nbsp;(arkano)&nbsp;(INT), Scio&nbsp;(la ebenoj)&nbsp;(INT), Scio&nbsp;(historio)&nbsp;(INT), Scio&nbsp;(nobeleco)&nbsp;(INT), Scio&nbsp;(religio)&nbsp;(INT), Sorĉkono&nbsp;(INT), Taksi&nbsp;(INT)
<p><b>Kapablecopoentoj por ĉiu nivelo:</b> 2 + INT-modifilo

<table>
    <caption>Tabelo: Kleriko</caption>
    <thead>
        <tr>
            <th rowspan="2">Nivelo</th>
            <th rowspan="2">BAB</th>
            <th rowspan="2">REF</th>
            <th rowspan="2">VOL</th>
            <th rowspan="2">PER</th>
            <th rowspan="2">Specife</th>
            <th colspan="10">Sorĉoj por unu tago</th>
        </tr>
        <tr>
            <th>0a</th>
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
    <tfoot>
        <tr>
                <td colspan="16">Avizo: „+1“ reprezentas la sferosorĉon. </td>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>1</td>
            <td>+0</td>
            <td>+0</td>
            <td>+2</td>
            <td>+2</td>
            <td><a href="#auxro">Aŭro</a>, <a href="#sferoj">Sferoj</a>, <a href="#pregxoj">Preĝoj</a>, <a href="#enfokusigi-energion">Enfokusigi&nbsp;energion&nbsp;1k6</a></td>
            <td>3</td>
            <td>1+1</td>
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
            <td>+3</td>
            <td>-</td>
            <td>4</td>
            <td>2+1</td>
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
            <td>+2</td>
            <td>+1</td>
            <td>+3</td>
            <td>+3</td>
            <td><a href="#enfokusigi-energion">Enfokusigi energion 2k6</a></td>
            <td>4</td>
            <td>2+1</td>
            <td>1+1</td>
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
            <td>+3</td>
            <td>+1</td>
            <td>+4</td>
            <td>+4</td>
            <td>-</td>
            <td>4</td>
            <td>3+1</td>
            <td>2+1</td>
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
            <td>+3</td>
            <td>+1</td>
            <td>+4</td>
            <td>+4</td>
            <td><a href="#enfokusigi-energion">Enfokusigi energion 3k6</a></td>
            <td>4</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>1+1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>6</td>
            <td>+4</td>
            <td>+2</td>
            <td>+5</td>
            <td>+5</td>
            <td>-</td>
            <td>4</td>
            <td>3+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>7</td>
            <td>+5</td>
            <td>+2</td>
            <td>+5</td>
            <td>+5</td>
            <td><a href="#enfokusigi-energion">Enfokusigi energion 4k6</a></td>
            <td>4</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>1+1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>8</td>
            <td>+6/+1</td>
            <td>+2</td>
            <td>+6</td>
            <td>+6</td>
            <td>-</td>
            <td>4</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>9</td>
            <td>+6/+1</td>
            <td>+3</td>
            <td>+6</td>
            <td>+6</td>
            <td><a href="#enfokusigi-energion">Enfokusigi energion 5k6</a></td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>1+1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>10</td>
            <td>+7/+2</td>
            <td>+3</td>
            <td>+7</td>
            <td>+7</td>
            <td>-</td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>11</td>
            <td>+8/+3</td>
            <td>+3</td>
            <td>+7</td>
            <td>+7</td>
            <td><a href="#enfokusigi-energion">Enfokusigi energion 6k6</a></td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>1+1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>12</td>
            <td>+9/+4</td>
            <td>+4</td>
            <td>+8</td>
            <td>+8</td>
            <td>-</td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>13</td>
            <td>+9/+4</td>
            <td>+4</td>
            <td>+8</td>
            <td>+8</td>
            <td><a href="#enfokusigi-energion">Enfokusigi energion 7k6</a></td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>1+1</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>14</td>
            <td>+10/+5</td>
            <td>+4</td>
            <td>+9</td>
            <td>+9</td>
            <td>-</td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>15</td>
            <td>+11/+6/+1</td>
            <td>+5</td>
            <td>+9</td>
            <td>+9</td>
            <td><a href="#enfokusigi-energion">Enfokusigi energion 8k6</a></td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>1+1</td>
            <td>-</td>
        </tr>
        <tr>
            <td>16</td>
            <td>+12/+7/+2</td>
            <td>+5</td>
            <td>+10</td>
            <td>+10</td>
            <td>-</td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>-</td>
        </tr>
        <tr>
            <td>17</td>
            <td>+12/+7/+2</td>
            <td>+5</td>
            <td>+10</td>
            <td>+10</td>
            <td><a href="#enfokusigi-energion">Enfokusigi energion 9k6</a></td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>2+1</td>
            <td>1+1</td>
        </tr>
        <tr>
            <td>18</td>
            <td>+13/+8/+3</td>
            <td>+6</td>
            <td>+11</td>
            <td>+11</td>
            <td>-</td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>3+1</td>
            <td>2+1</td>
        </tr>
        <tr>
            <td>19</td>
            <td>+14/+9/+4</td>
            <td>+6</td>
            <td>+11</td>
            <td>+11</td>
            <td><a href="#enfokusigi-energion">Enfokusigi energion 10k6</a></td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>3+1</td>
            <td>3+1</td>
        </tr>
        <tr>
            <td>20</td>
            <td>+15/+10/+5</td>
            <td>+6</td>
            <td>+12</td>
            <td>+12</td>
            <td>-</td>
            <td>4</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
            <td>4+1</td>
        </tr>
    </tbody>
</table>

<h2>Klasaj karakterizaĵoj</h2>

<p> La sekvantaj eblecoj estas la klasaj karakterizaĵoj de la kleriko. </p>

<p><b>Sperto kun armiloj kaj armaĵoj:</b> La kleriko havas sperton kun ĉiuj simplaj armiloj. Li estas sperta kun malpezaj kaj mezpezaj armaĵoj kaj ĉiuj ŝildoj krom turŝildoj. Aldone li estas trejnita en la preferata armilo de sia dio.</p>

<p id="auxro"><b>Aŭro (EE):</b> Kleriko de bona, malbona, laŭleĝa aŭ ĥaosa dio elradias fortan aŭron rilate al la pensmaniero de sia dio (vidu la sorĉon malkovri malbonon). </p>

<p><b>Sorĉoj:</b> La kleriko efektivigas diajn sorĉojn kiujn li elektas de la sorĉolisto de klerikoj. Kelkaj sorĉoj tamen povas kontraŭstari la etikon aŭ moralon de lia pensmaniero kaj ne estas al lia dispono. Vidu <a href="#bonaj-malbonaj-lauxlegxaj-hxaosaj-sorcxoj">Bonaj, malbonaj, laŭleĝaj kaj ĥaosaj sorĉoj</a>. La kleriko devas elekti kaj prepari siajn sorĉojn antaŭe. </p>
<p>Por prepari kaj efektivigi sorĉon la kleriko devas havi minimume saĝecon de 10 + la sorĉogrado. La malfacilecogrado de la savĵeto kontraŭ la sorĉo de la kleriko estas 10 + la sorĉogrado + SAĜ-modifilo de la kleriko. </p>
<p>Kiel aliaj sorĉkonantoj la kleriko nur povas efektivigi certan kvanton da sorĉoj ĉiutage. La nombro da sorĉoj por ĉiu tago estas listigitaj en la supra tabelo. Aldone li ankaŭ ricevas kromajn sorĉojn laŭ lia saĝeco-modifilo (vido paragrafon: <a href="../ekludi/#atributoj-kaj-sorcxkonantoj">Atributoj kaj sorĉkonantoj</a>). </p>
<p>Klerikoj meditas kaj preĝas por ricevi siajn sorĉojn. La kleriko bezonas unu horon ĉiutage kiun li pasigas en kontempla trankvilo aŭ devoteco por rericevi siajn sorĉojn. Rasttempoj ne rilatas al la preparado de sorĉoj. Dum la meditado li elektas sorĉojn por la tago. Li povas elekti ĉiun sorĉon de la sorĉlisto de kleriko, se li jam rajtas uzi sorĉojn de tiu grado. </p>

<p id="enfokusigi-energion"><b>Enfokusigi energion (SNE):</b> Ĉiu kleriko povas enfokusigi energion sendepende de sia pensmaniero per sankta aŭ malsankta simbolo de sia kredo. Per tio li liberigas ondon de dia potenco en formo pozitiva aŭ negativa energio. La enfokusigita energio povas aŭ sanigi aŭ lezi kreaĵojn en la trafopovo depende de kiu energio estas liberigita kaj kiuj kreaĵoj estas trafitaj. </p>
<p>Bona kleriko (aŭ kleriko kiu adoras bonan dion) nur povas enfokusigi pozitivan energion kaj per tio aŭ lezi malmortulojn aŭ sanigi vivantajn kreaĵojn laŭ elekto. Malbona kleriko (aŭ kleriko kiu adoras malbonan dion) nur povas enfokusigi negativan energion kaj per tio aŭ lezi vivantajn kreaĵtojn aŭ sanigi malmortulojn laŭ elekto. Neŭtrala kleriko kiu adoras neŭtralan dion (aŭ ne adoras unu solan dion) devas decidi ĉu li volas enfokusigi pozitivan aŭ negativan energion. Post la elekto tio ne plu povas esti ŝanĝota. De la tipo de energion kiun la kleriko povas enfokusigi ankaŭ dependas ĉu liaj spontaneaj sorĉoj sanigas aŭ lezas (vidu <a href="#spontaneaj-sorĉoj">Spontaneaj sorĉoj</a>). </p>
<p>La enfokusigita energio kreas impulson kiu havas efikon al ĉiuj kreaĵoj de unu tipo (aŭ vivanta aŭ malmortula) en la ĉirkaŭaĵo de 9 metroj ĉirkaŭ la kleriko. </p>
<p>La kvanto da damaĝopoentoj kiuj estas sanigataj aŭ kaŭzataj egalas al 1k6 damaĝôn + po 1k6 damaĝo por ĉiuj 2 niveloj post la 1a nivelo de la kleriko (2k6 je la 3a nivelo, 3k6 je la 5a nivelo, ktp.). Kreaĵoj kiuj suferas damaĝon per enfokusigita energio povas duonigi la damaĝôn per sukcesa voloĵeto. La malfacilecogrado de la savoĵeto estas 10 + &frac12; klerikonivelo + KAR-modivilo de kleriko. Estaĵoj kiuj estas sanigitaj per enfokusigita energio ne povas ricevi pli da poentoj de sanigo ol ilia maksimuma valoro de vivpoentoj. Ĉiu plia sanigi perdiĝas. La kleriko povas uzi tiun eblecon (3 + KAR-modifilo de la kleriko) fojojn ĉiutage. Tio estas bazago kiu ne provokas okazatakon. La kleriko povas decidi ĉu li volas esti trafata de la efiko aŭ ne. La kleriko devas esti kapabla prezenti sian sanktan simbolon por uzi tiun eblecon. </p>

<p id="sferoj"><b>Sferoj:</b> La dio de kleriko influas lian pensmanieron, kian magion li povas apliki, liajn valorojn kaj kiel aliaj vidas lin. La kleriko elektas du sferojn kiuj apartenas al lia dio. La kleriko nur povas elekti sferon de pensmaniero (bona, malbona, laŭleĝa aŭ ĥaosa) se lia elekto kongruas al lia pensmaniero. Se la kleriko ne adoras unu solan dion, li ankaŭ povas elekti du sferojn kiuj kongruas al lia spirita deklino (laŭ interkonsento kun la ludgvidanto). La restrikto por la pensmaniero ankaŭ validas tiukaze. </p>
<p>Ĉiu sfero donas depende de la klerikonivelo sferofortojn kaj kromajn sorĉojn. La kleriko aldone ricevas unu plian sorĉaplikon ĉiutage por sferosorĉojn por ĉiu sorĉogrado kiun li povas uzi. La kleriko devas decidi ĉiutage kiun sferosorĉon li preparas el la disponeblajn sferosorĉojn. Se la sferosorĉo ne troveblas sur la sorĉolisto de klerikoj, li nur povas prepari ĝin por la apliko de sferosorĉo. Sferosorĉoj ne povas uzataj por spontanee sorĉi. Se ne estas alie indikita, la aktivado de sferosorĉo estas bazago. </p>
<p>Aldone la kleriko ricevas la fortojn de ambaŭ sferoj, se lia nivelo estas sufiĉe alta. La listo de klerikosferoj troveblas je la fino de la priskribo de tiu klaso. </p>

<p id="pregxoj"><b>Preĝoj:</b> La kleriko povas prepari certan kvanton da preĝoj kiuj egalas la nombron de sorĉoj de la 0a grado en la supra tabelo. Tiuj sorĉoj estas traktataj rilate al daŭro kaj aliaj variabloj same kiel aliaj sorĉoj nur ke ili ne estas eluzitaj se la kleriko efektivigas ilin, do li povas uzi ilin denove. </p>

<p id="spontanee-sorcxi"><b>Spontanee sorĉi:</b> Bona kleriko (aŭ neŭtrala kleriko kiu adoras bonan dion) povas uzi preparitan sorĉforton por transformi ĝin al sanigo. La kleriko povas fordoni preparitan sorĉon kiu nek estas preĝo nek sferosorĉo por efektivigi sanigan sorĉon de sama grado. Kiel saniga sorĉo validas ĉiu sorĉo kun "sanigi" en la nomo. </p>
<p> Malbona kleriko (aŭ neŭtrala kleriko kiu adoras malbonan dion) ne povas transformi sorĉon al saniga sorĉo, sed al damaĝiga sorĉo de sama grado (damaĝiga sorĉo estas sorĉo kun "kaŭzi vundojn" en la nomo). </p>
<p>Kleriko kiu estas nek bona nek malbona devas decidi ĉu li volas sanigi aŭ kaŭzi vundojn spontanee. Se li faris la elekton li poste ne plu povas ŝanĝi ĝin. Tiu elekto ankaŭ decidas ĉu li povas enfokusigi pozitivan (sanigi) aŭ negativan (kaŭzi vundojn) energion (vidu <a href="#enfokusigi-energion">Enfokusigi energion</a>). </p>

<p id="bonaj-malbonaj-lauxlegxaj-hxaosaj-sorcxoj"><b>Bonaj, malbonaj, laŭleĝaj kaj ĥaosaj sorĉoj:</b> La kleriko ne povas efektivigi sorĉojn kiuj kontraŭstaras lian pensmanieron aŭ la pensmanieron de lia dio (se li sekvas iun dion). Sorĉoj kiuj postulas certan pensmanieron havas rilatan indikon en sia priskribo. </p>

<p><b>Kromaj lingvoj:</b> La kleriko povas aldone al la elekto de sia popolo elekti kromajn lingvojn de la sekvanta listo. La abisa, la celestia kaj la infera (la lingvo de bonaj, malbonaj, laŭleĝaj kaj ĥaosaj eksteruloj). </p>

<h2>Estintaj klerikoj</h2>
<p>Kleriko kiu grave malobeas la ordonojn de sia kredo perdas ĉiujn siajn sorĉojn kaj karakterizaĵojn de sia klaso krom la sperto kun armaĵoj, ŝildoj kaj simplaj armiloj. Li ne plu povas altiĝi kiel kleriko de tiu dio ĝis li pentofaras (vidu la sorĉon pentofari). </p>

<h2>Sferoj</h2>
<p>La kleriko povas elekti du sferojn de la listo de sferoj de sia dio. Kleriko sen dio povas elekti du ajnajn sferojn (la ludgvidanto devas interkonsenti kun tiu elekto). </p>

<h3 class="tradukinda">Sfero de aero</h3>
<h3 class="tradukinda">Sfero de akvo</h3>
<h3 class="tradukinda">Sfero de artifiko</h3>
<h3 class="tradukinda">Sfero de bestoj</h3>
<h3 class="tradukinda">Sfero de bono</h3>
<h3 class="tradukinda">Sfero de bonŝanco</h3>
<h3 class="tradukinda">Sfero de detruo</h3>
<h3 class="tradukinda">Sfero de forto</h3>
<h3 class="tradukinda">Sfero de frenezeco</h3>
<h3 class="tradukinda">Sfero de glorio</h3>
<h3 class="tradukinda">Sfero de ĥaoso</h3>
<h3 class="tradukinda">Sfero de komuno</h3>
<h3 class="tradukinda">Sfero de liberigo</h3>
<h3 class="tradukinda">Sfero de magio</h3>
<h3 class="tradukinda">Sfero de malbono</h3>
<h3 class="tradukinda">Sfero de mallumo</h3>
<h3 class="tradukinda">Sfero de metio</h3>
<h3 class="tradukinda">Sfero de milito</h3>
<h3 class="tradukinda">Sfero de morto</h3>
<h3 class="tradukinda">Sfero de nobelo</h3>
<h3 class="tradukinda">Sfero de ordo</h3>
<h3 class="tradukinda">Sfero de plantoj</h3>
<h3 class="tradukinda">Sfero de protekto</h3>
<h3 class="tradukinda">Sfero de ripozo</h3>
<h3 class="tradukinda">Sfero de runoj</h3>
<h3 class="tradukinda">Sfero de sanigo</h3>
<h3 class="tradukinda">Sfero de scio</h3>
<h3 class="tradukinda">Sfero de suno</h3>
<h3 class="tradukinda">Sfero de tero</h3>
<h3 class="tradukinda">Sfero de transsorĉado</h3>
<h3 class="tradukinda">Sfero de vetero</h3>
<h3 class="tradukinda">Sfero de vojaĝo</h3>


<?php if(!isset($sen_kapo_piedo)) require '../../pagxpiedo.php' ?>
