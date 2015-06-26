<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

<?php if(!isset($kompleta)) require '../../pagxkapo.php' ?>

<title>Barbaro</title>

<h1>Barbaro</h1>

<img src="../../bildoj/barbaro.jpg" style="width:35%;">

<p> Por kelkaj nur ekzistas la kolero. Ĝi montriĝas en la vojoj de iliaj prauloj, en la konfliktoj kiujn ili travivas mense kaj en iliaj batalkrioj. La konflikto estas la sola afero kion ili konas. Barbaroj estas savaĝaj, solduloj, majstroj de diversaj kruelaj batalstiloj. Ili ne estas soldatoj aŭ prefesiaj batalistoj sed fanatikuloj pri la batalo, spiritoj de la milito. La barbaroj scias malmulte pri trejnado, preparado aŭ reguloj en la batalo. Ili nur estas en la momento. La kontraŭulo antaŭe nur gravas kaj fakto ke tiu momento povus jam esti la lasta. Barbaroj pretas kontraŭi ĉion kion la sorto metas antaŭ iliaj piedoj. Ili evoluigas sesan senson kaj povas elteni preskaŭ ĉian veteron. Barbaroj ekzistas en ĉiuj socioj ĉu civilizita aŭ ne. Eĉ estas tutaj popoloj kiuj portas tiun brutalan filozofion en si kaj vagadas tra la savaĝejo. Babaroj estas plenumitaj de ilia batalsinteno. Ho ve al tiuj kiuj ekkonas ilian koleron...</p>
<p><b>Rolo:</b> Barbaroj estas elstaraj batalistoj. Ili posedas tiun militan forton kaj persistecon kiun oni bezonas por kontraŭi al malamikoj kiuj estas multe pli superaj. Ilia kolero donas al ili la aŭdacon kaj kuraĝon kiuj superas tiujn de la plejmulto da aliaj batalistoj. Neniu sinĵetas kun tiom da batalkolero en la amasbuĉadon, kiel la barbaro kiu ekstermas ĉiujn kontraŭulojn. </p>
<p><b>Pensmaniero:</b> ĉiu ne laŭleĝa</p>
<p><b>Vivkubetoj:</b> k12</p>
<p><b>Oro je la komenco:</b> 3k6 &times; 10mo (mezkvanta 105mo)
<p><b>Klaskapablecoj:</b> Akrobataĵo&nbsp;(GE), Grimpi&nbsp;(FOR), Interrilati kun bestoj&nbsp;(KAR), Metio&nbsp;(INT), Naĝi&nbsp;(FOR), Percepto&nbsp;(SAĜ), Rajdi&nbsp;(LER), Scio&nbsp;(naturo)&nbsp;(INT), Timigi&nbsp;(KAR), Transvivado&nbsp;(SAĜ)
<p><b>Kapablecopoentoj por ĉiu nivelo:</b> 4 + INT-modifilo

<table>
    <caption>Tabelo: Barbaro</caption>
    <thead>
        <tr>
            <th>Nivelo</th>
            <th>BAB</th>
            <th>REF</th>
            <th>VOL</th>
            <th>PER</th>
            <th>Specife</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>+1</td>
            <td>+0</td>
            <td>+0</td>
            <td>+2</td>
            <td><a href="#rapida-movigxo">Rapida moviĝo</a>, <a href="#batalekstazo">Batalekstazo</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>+2</td>
            <td>+0</td>
            <td>+0</td>
            <td>+3</td>
            <td><a href="#batalekstaza-forto">Batalekstaza forto</a>, <a href="#refleksmovo">Refleksmovo</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>+3</td>
            <td>+1</td>
            <td>+1</td>
            <td>+3</td>
            <td><a href="#kaptilsensiveco">Kaptilsensiveco +1</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>+4</td>
            <td>+1</td>
            <td>+1</td>
            <td>+4</td>
            <td><a href="#batalekstaza-forto">Batalekstaza forto</a></td>
        </tr>
        <tr>
            <td>5</td>
            <td>+5</td>
            <td>+1</td>
            <td>+1</td>
            <td>+4</td>
            <td><a href="#refleksmovo-progresigita">Refleksmovo progresigita</a></td>
        </tr>
        <tr>
            <td>6</td>
            <td>+6/+1</td>
            <td>+2</td>
            <td>+2</td>
            <td>+5</td>
            <td><a href="#batalekstaza-forto">Batalekstaza forto</a>, <a href="#kaptilsensiveco">Kaptilsensiveco +2</a></td>
        </tr>
        <tr>
            <td>7</td>
            <td>+7/+2</td>
            <td>+2</td>
            <td>+2</td>
            <td>+5</td>
            <td><a href="#damaĝoredukto">Damaĝoredukto 1/- </a></td>
        </tr>
        <tr>
            <td>8</td>
            <td>+8/+3</td>
            <td>+2</td>
            <td>+2</td>
            <td>+6</td>
            <td><a href="#batalekstaza-forto">Batalekstaza forto</a></td>
        </tr>
        <tr>
            <td>9</td>
            <td>+9/+4</td>
            <td>+3</td>
            <td>+3</td>
            <td>+6</td>
            <td><a href="#kaptilsensiveco">Kaptilsensiveco +3</a></td>
        </tr>
        <tr>
            <td>10</td>
            <td>+10/+5</td>
            <td>+3</td>
            <td>+3</td>
            <td>+7</td>
            <td><a href="#damaĝoredukto">Damaĝoredukto 2/- </a>, <a href="#batalekstaza-forto">Batalekstaza forto</a></td>
        </tr>
        <tr>
            <td>11</td>
            <td>+11/+6/+1</td>
            <td>+3</td>
            <td>+3</td>
            <td>+7</td>
            <td><a href="#forta-batalekstazo">Forta batalekstazo</a></td>
        </tr>
        <tr>
            <td>12</td>
            <td>+12/+7/+2</td>
            <td>+4</td>
            <td>+4</td>
            <td>+8</td>
            <td><a href="#batalekstaza-forto">Batalekstaza forto</a>, <a href="#kaptilsensiveco">Kaptilsensiveco +4</a></td>
        </tr>
        <tr>
            <td>13</td>
            <td>+13/+8/+3</td>
            <td>+4</td>
            <td>+4</td>
            <td>+8</td>
            <td><a href="#damaĝoredukto">Damaĝoredukto 3/- </a></td>
        </tr>
        <tr>
            <td>14</td>
            <td>+14/+9/+4</td>
            <td>+4</td>
            <td>+4</td>
            <td>+9</td>
            <td><a href="#necedema-volo">Necedema volo</a>, <a href="#batalekstaza-forto">Batalekstaza forto</a></td>
        </tr>
        <tr>
            <td>15</td>
            <td>+15/+10/+5</td>
            <td>+5</td>
            <td>+5</td>
            <td>+9</td>
            <td><a href="#kaptilsensiveco">Kaptilsensiveco +5</a></td>
        </tr>
        <tr>
            <td>16</td>
            <td>+16/+11/+6/+1</td>
            <td>+5</td>
            <td>+5</td>
            <td>+10</td>
            <td><a href="#damaĝoredukto">Damaĝoredukto 4/- </a>, <a href="#batalekstaza-forto">Batalekstaza forto</a></td>
        </tr>
        <tr>
            <td>17</td>
            <td>+17/+12/+7/+2</td>
            <td>+5</td>
            <td>+5</td>
            <td>+10</td>
            <td><a href="#nesxancelebla-batalekstazo">Neŝancelebla batalekstazo</a></td>
        </tr>
        <tr>
            <td>18</td>
            <td>+18/+13/+8/+3</td>
            <td>+6</td>
            <td>+6</td>
            <td>+11</td>
            <td><a href="#batalekstaza-forto">Batalekstaza forto</a>, <a href="#kaptilsensiveco">Kaptilsensiveco +6</a></td>
        </tr>
        <tr>
            <td>19</td>
            <td>+19/+14/+9/+4</td>
            <td>+6</td>
            <td>+6</td>
            <td>+11</td>
            <td><a href="#damaĝoredukto">Damaĝoredukto 5/- </a></td>
        </tr>
        <tr>
            <td>20</td>
            <td>+20/+15/+10/+5</td>
            <td>+6</td>
            <td>+6</td>
            <td>+12</td>
            <td><a href="#potencega-batalekstazo">Potencega batalekstazo</a>, <a href="#batalekstaza-forto">Batalekstaza forto</a></td>
        </tr>
    </tbody>
</table>

<h2>Klasaj karakterizaĵoj</h2>

<p> La sekvantaj eblecoj estas la klasaj karakterizaĵoj de la barbaro. </p>

<p> <b>Sperto kun armiloj kaj armaĵoj:</b> La barbaro havas sperton kun ĉiuj simplaj kaj militaj armiloj. Li estas sperta kun malpezaj kaj mezpezaj armaĵoj kaj ĉiuj ŝildoj krom turŝildoj.</p>

<p id="rapida-movigxo"><b>Rapida moviĝo (EE):</b> La moviĝorapideco surtere estas pli alta por la barbaro ol kutime por lia popolo. Li povas moviĝi 3 pliajn metrojn. Tio nur validas se li maksimume portas mezpezan armaĵon kaj ne portas pezan ŝarĝon. Tiu bono aplikiĝas antaŭ la moviĝorapideco estas modifita pro armaĵoj aŭ ŝarĝoj. Kaj li sumiĝas kun ĉiuj aliaj bonoj de la barbaro por la moviĝo surtere. </p>

<p id="batalekstazo"><b>Batalekstazo (EE):</b> La barbaro povas liberigi sian internan forton kaj savaĝecon por gajni pli da batalforto. Ekde la 1a nivelo la barbaro povas sin ĵeti en batalekstazon dum nombro da vicoj kiu egalas lian KON-modifilon + 4. Je ĉiu nova nivelo la nombro altiĝas je du pliaj vicoj. Portempaj altiĝoj de la konstitucio pro la batalekstazo aŭ pro sorĉoj kiel bovoelteno tamen ne altigas la nombron da vicoj por la batalekstazo. La barbaro povas sin ĵeti en la batalekstazon per rapida ago. La entuta nombro da vicoj renoviĝas post ok horoj da ripozo. Tiu ripozo ne devas esti sinsekva tempo. </p>

<p> Dum la batalekstazo la barbaro ricevas moralbonon de +4 por forto kaj konstitucio kaj moralbonon de +2 por voloĵetoj. Pro tio li ricevas malbonon de -2 por sia armaĵklaso. La altiĝo de la konstitucio-atributo donas al la barbaro +2 pliajn vivpoentojn po nivelo, kiuj tamen malaperas je la fino de la ekstazo, malsame kiel portempaj vivpoentoj kiuj estas subtrahataj unue. Dum la batalekstazo la barbaro ne povas uzi kapablecojn kiuj baziĝas sur lerteco, inteligenteco aŭ karismo (krom akrobataĵo, flugi, rajdi aŭ timigi), nek kapablecojn kiuj neprigas trankvilon kaj koncentron. </p>

<p> La barbaro povas fini la batalekstazon per libera ago kaj tiam li estas elĉerpita duoble pli longa ol li estis en la ekstazo. Dum la tempo kiam la barbaro estas elĉerpita, li ne povas sin ĵeti en novan ekstazon. Alie tute eblas sin ĵeti dufoje en la ekstazon dum unu batalo. Se la barbaro perdas sian konscion, lia batalekstazo aŭtomato finiĝas, kio signifas severan mortdanĝeron por li. </p>

<p id="batalekstaza-forto"> <b>Batalekstaza forto (EE):</b> Kun kreskanta sperto la barabaro lernas uzi sian batalekstazon diversmaniere. Je la 2a nivelo kaj je ĉiu plia dua nivelo li ricevas batalekstazan forton. La barabar nur povas utiligi siajn batalekstazajn fortojn kiam li estas en batalekstazo kaj kelkaj de tiuj fortoj postulas ke la barbaro faras certan agon antaŭe. Se ne estas alie indikita, li ne povas elekti unu forton plurfoje.</p>
<ul>
    <li><em>Atentema batalsinteno (EE):</em> La barbaro ricevas evitmovan bonon +1 por sia armaĵklaso kontraŭ proksimatakoj dum nombro da rondoj kiom egalas al lia nuna KON-modifilo (minimume 1). Tiu bono altiĝas je +1 por ĉiuj ses niveloj kiujn havas la barbaro. La aktivado de tiu ebleco estas movago kiu ne provokas okazatakon. </li>
    <li><em>Batalkrio (EE):</em> La barbaro povas per bazago ekkrii batalkrion. Ĉiuj malamikoj en la ĉirkaŭaĵo de 9 metroj devas sukcese fari voloĵeton (MFG 10 + &frac12; nivelo de barbaro + lia FOR-modifilo) aŭ ili estas dum 1k4+1 rondoj panikaj. Se malamiko devis ĵeti voloĵeton kontraŭ la batalkrio, li ne plu povas esti la celo de tiu forto dum la venontaj 24 horoj sendepende de la rezulto de la savĵeto. Por elekti tiun forton la barbaro devas esti minimume je la 8a nivelo kaj devas jam havi la forton timigan fiksrigardon. </li>
    <li><em>Besteca kolero (EE):</em> En la batalekstazo la barbaro povas fari mordatakon. Se la mordatako okazas en plena ago, ĝi estas farata per bazataka bono&nbsp;-&nbsp;5. Se la atako trafas, ĝi kaŭzas 1k4 poetojn da damaĝo (se la barabaro estas mezgranda, 1k3 se li estas malgranda) plus la duono de lia FOR-modifilo. Li ankaŭ povas uzi la mordatakon dum luktado kiel parto de ago por daŭrigi aŭ sinsavi. Tiu atako okazas antaŭ la ĵeto por la luktado. Se la mordo trafas, ĉiuj luktadoĵetoj dum tiu rondo ricevas bonon +2. </li>
    <li><em>Defenda sinteno (EE):</em> La barbaro ricevas evitmovan bonon +1 por sia armaĵklaso kontraŭ distancatakoj dum nombro da rondoj kiom egalas al nuna KON-modifilo (minimume 1) de la barbaro. Tiu bono altiĝas je +1 por ĉiuj ses niveloj kiujn havas la barbaro. La aktivado de tiu ebleco estas movago kiu ne provokas okazatakon. </li>
    <li><em>Flarosenso (EE):</em> La barbaro ricevas dum la batalekstazo la eblecon flarosenso kaj povas uzi ĝin por trovi nevideblajn malamikojn (por reguloj de flarosenso vidu ĉapitron <a href="../eksterordinaraj_eblecoj">Eksterordinaraj eblecoj</a>). </li>
    <li><em>Forta menso (EE):</em> La barbaro povas ripeti unu malsukcesan voloĵeton. La barbaro uzas tiun forton per subita ago post kiam li faris la ĵeton sed antaŭ kiam la LG anoncis la rezulton. La barbaro devas uzi la duan ĵeton ankaŭ se tiu estas malpli bona. La barbaro devas esti minimume je la 8a nivelo por elekti tiun forton. Tiu forto nur povas esti elektita unufoje dum la batalekstazo. </li>
    <li><em>Fortoekstazo (EE):</em> La barbaro adicias sian barbaronivelon al unu forto- aŭ batalmanovroĵeto aŭ al sia batalmanovra defendo se malamiko provas manovron kontraŭ li. Tiu forto aldoniĝas per subita ago. Tiu forto nur povas esti uzata unufoje dum unu batalekstazo. </li>
    <li><em>Fortplena bato (EE):</em> La barbaro ricevas bonon +1 por damaĝoĵetoj. Tiu bono altiĝas je +1 por ĉiuj kvar niveloj kiujn la barbaro havas. La forto estas uzata per rapida ago antaŭ la atako estas ĵetata. Tiu forto nur povas esti uzata unufoje dum unu batalekstazo. </li>
    <li><em>Interna persisteco (EE):</em> Dum la batalekstazo la barbaro estas imuna kontraŭ la statoj malsaneta kaj vomema. La barbaro devas esti minimume je la 8a nivelo por elekti tiun forton. </li>
    <li><em>Klara momento (EE):</em> Dum unu rondo la barbaro ricevas nek avantaĝojn nek malavantaĝojn pro la batalekstazo. Tiu ankaŭ validas por la malbono de la armaĵklaso kaj la limigita elekto de agoj. La aktivado de tiu forto estas rapida ago. Tiu rondo tamen kalkuliĝas kiel rondo de batalekstazo rilate al la kvanto da rondoj kiom la barabaro havas ĉiutage. Tiu forto nur povas uzata unufoje en unu batalekstazo. </li>
    <li><em>Koleroplena grimpado (EE):</em> En la batalekstazo la barbaro aldonas sian barbaronivelon kiel bono al ĉiuj kapablecoĵetoj de grimpi. </em>
    <li><em>Koleroplena naĝado (EE):</em> En la batalekstazo la barbaro aldonas sian barbaronivelon kiel bono al ĉiuj kapablecoĵetoj de naĝi. </em>
    <li><em>Koleroplena salto (EE):</em> En la batalekstazo la barbaro aldonas sian barbaronivelon kiel bono al ĉiuj kapablecĵetoj de de akrobataĵo kiuj rilatas al salti kaj la salto estas traktata tiel kiel la barbaro havus sufiĉe da alkuro. </li>
    <li><em>Krepuskovido (EE):</em> La sensoj de la barbaro akriĝas kaj havas krepuskovidon dum la batalekstazo. </li>
    <li><em>Neatendita bato (EE):</em> La barbaro povas fari okazatakon kontraŭ malamiko kiu moviĝas en kampon en la trafopovo de la barbaro eĉ se tiu moviĝo kutime ne provokus okazatakon. Tiu forto nur povas esti elektita unufoje dum la batalekstazo. La barbaro devas esti minimume de la 8a nivelo por elekti tiun forton. </li>
    <li><em>Neniu eskapo (EE):</em> La barbaro povas per subita ago moviĝi per sia duobla moviĝrapideco. La barbaro nur povas uzi tiun eblecon se najbara malamiko foriras el la batalo per retiriĝo. La barbaro devas fini sian moviĝon apud la malamiko kiu retiriĝis. La moviĝo de la barbaro provokas kiel kutime okazatakojn. Tiu forto nur povas esti uzata po unufoje dum unu batalekstazo. </em>
    <li><em>Noktovido (EE):</em> Dum la batalekstazo la sensoj de la barbaro akriĝas en eksterordinara maniero kaj li ricevas mallumvidon (18 m). Por elekti tiun forton la barbaro devas havi krepuskovidon aŭ pro sia popolo aŭ pro antaŭa elekto de la forto krepuskovido. </li>
    <li><em>Nova vivforto (EE):</em> La barbaro povas per bazago sanigi 1k8 + sia KON-modifilo da vivpoentoj. Por ĉiuj kvar niveloj post la 4a nivelo la kvanto da sanigataj vivpoentoj altiĝas je 1k8 ĝis maksimumo de 5k8 je la 20a nivelo. Por elekti tiun forton la barbaro devas havi la 4an nivelon. Tiu forto povas uzata nur unufoje tage kaj nur dum la batalekstazo. </li>
    <li><em>Potenca bato (EE):</em> La barbaro povas konfirmi kritikan trafon aŭtomate. La forto povas esti uzata per subita ago kiam la barbaro faras atakon kun ŝanco por kritika trafo. La barbaro devas esti minimume je la 12a nivelo por elekti tiun forton. Li povas uzi tiun forton nur unufoje dum unu batalekstazo. </li>
    <li><em>Pli alta damaĝoredukto (EE):</em> La damaĝoredukto de la barbaro altiĝas je +1/-. Tiu damaĝoredukto nur validas dum la batalekstazo. La barabaro povas elekti tiun forton maksimume trifoje. La efiko estas akumula. La barbaro rajtas elekti tiun forton nur ekde la 8a nivelo. </li>
    <li><em>Rapida paŝo (EE):</em> La barbaro ricevas plian rapidecon de 1,5 metroj al sia moviĝrapideco. Tiu altiĝo ĉiam estas aktiva en batalekstazo. Tiun batalekstazan forton la barbaro povas elekti trifoje. La efiko estas akumula. </li>
    <li><em>Rapidaj refleksoj (EE):</em> Dum la batalekstazo la barbaro povas fari unu plian okazatakon ĉiuronde. </li>
    <li><em>Repeli (EE):</em> Unufoje ĉiuronde la barbaro povas provi puŝatakon anstataŭ proksimatako. Se li sukcesas, la celo suferas tiom da damaĝo kiom egalas al la FOR-modifio de la barbaro kaj estas puŝata reen kiel kutime. La barbaro ne devas moviĝi kun la celo, se li sukcesas. La uzo de tiu forto ne provokas okazatakojn. </li>
    <li><em>Sentima kolero (EE):</em> Dum la batalekstazo la barbaro estas imuna kontraŭ la statoj emociigita kaj timigita. La barbaro devas esti minimume je la 12a nivelo por elekti tiun forton. </li>
    <li><em>Spontanea trafocerto (EE):</em> La barbaro aldonas moralbonon +1 al unu atakĵeto. Tiu bono altiĝas je +1 por ĉiuj kvar niveloj kiujn la barbaro havas. Tiun forton li povas uzi per rapida ago antaŭ la atako. Tiu forto nur povas esti uzata unufoje dum la batalekstazo. </li>
    <li><em>Superstiĉo (EE):</em> La barbaro ricevas moralbonon +2 por savĵetoj por rezisti sorĉojn, supernaturajn kaj sorĉsimilajn eblecojn. Tiu bono altiĝas je +1 por ĉiuj kvar niveloj kiujn la barabaro havas. En la batalekstazo la barabaro ne povas esti volonta celo de sorĉoj kaj ankaŭ devas fari la savĵeton kontraŭ sorĉoj de amikoj. </li>
    <li><em>Timiga fiksrigardo (EE):</em> Per movago la barbaro povas provi timigi najbaran malamikon. Se li sukcesas, li senkuraĝigas sian viktimon. La malamiko estas emociigita dum 1k4 rondoj +1 rondo por ĉiuj 5 poentoj kiujn la barbaro ĵetis pli ol la MFG. </li>
    <li><em>Vekita kolero (EE):</em> La barbaro povas ĵeti sin en batalekstazon kvankam li estas elĉerpita. Tiel longe kiel li estas en batalekstazo kun helpo de ĉi tiu ebleco, li ne povas esti elĉerpita. Kiam la batalekstazo finiĝas, la barbaro estas senforta dum po 10 minutoj por ĉiu rondo en kiu li estis en batalekstazo. </li>
</ul>

<p id="refleksmovo"><b>Refleksmovo (EE):</b> Ekde la 2a nivelo la barbaro povas reagi al danĝeroj antaŭ liaj sensoj kutime permesus tion. Li ne plu povas esti surprizita sur la malĝusta piedo kaj ne perdas sian lertecbonon por la armaĵklaso se la atakanto estas nevidebla. Barbaro kun tiu ebleco tamen povas perdi sian lertecbonon por la armaĵklaso se li estas nemovkapabla aŭ se la kontraŭulo sukcese faras finton kontraŭ li. </p>

<p>Se la barbaro jam havas la eblecon refleksmovo per alia klaso, li ricevas anstaŭe refleksmovon progresigitan (vidu malsupren). </p>

<p id="kaptilsensiveco"><b>Kaptilsensiveco (EE):</b> Je la 3a nivelo la barbaro ricevas bonon de +1 por siaj refleksĵetoj por evitmovi de kaptiloj kaj bonon de +1 por la armaĵklaso kontraŭ atakoj de kaptiloj. Tiu bono altiĝas je +1 je ĉiu tria nivelaltiĝo (6a, 9a, 12a, 15a, 18a). La bonoj de kaptilsensiveco de malsamaj klasoj sumiĝas. </p>

<p id="refleksmovo-progresigita"><b>Refleksmovo progresigita (EE):</b> Ekde la 5a nivelo la barbaro ne plu povas esti ambaŭflankita. Friponoj ne plu povas ataki la barbaron per embuska atako kaŭze de la ambaŭflankado, krom se la fipononivelo estas kvar niveloj pli alta ol la barbarnivelo. Se la barbaro jam havas la eblecon refleksmovon per alia klaso la du klasniveloj sumiĝas por la komparo de niveloj. </p>

<p id="damaĝoredukto"><b>Damaĝoredukto (EE):</b> Ekde la 7a nivelo la barbaro povas subtrahi unu poenton de la damaĝo de ĉiu armilo aŭ natura armilo. Ekde la 10a nivelo kaj je ĉiu tria plia nivelo (13a, 16a, 19a) la damaĝoredukto altiĝas je unu. La damaĝoredukto povas redukti damaĝon al nul sed ne sub nul. </p>

<p id="forta-batalekstazo"><b>Forta batalekstazo (EE):</b> Je la 11a nivelo la bono por forto kaj konstitucio altiĝas al +6 kaj la bono por voloĵetoj altiĝas al +3, se la barbaro ĵetas sin en batalekstazon. </p>

<p id="necedema-volo"><b>Necedema volo (EE):</b> Je la 14a nivelo la barbaro ricevas dum la batalekstazo bonon de +4 por voloĵetoj kontraŭ transsorĉado. Tiu bono sumiĝas kun aliaj modifiloj kiel la moralbono de la batalekstazo. </p>

<p id="nesxancelebla-batalekstazo"><b>Neŝancelebla batalekstazo (EE):</b> Je 17a nivelo la barbaro ne plu estas elĉerpita post sia batalekstazo. </p>

<p id="potencega-batalekstazo"><b>Potencega batalekstazo (EE):</b> Je la 20a nivelo la bonoj por forto kaj konstitucio altiĝas al +8 kaj la bono por voloĵetoj altiĝas al +4, se la barbaro estas en batalekstazo. </p>

<h2>Estintaj barbaroj</h2>
<p>Se barbaro iĝas laŭleĝa li perdas la eblecon ĵeti sin en batalekstazon. Li ankaŭ ne plu povas altiĝi kiel barbaro. Tamen li gardas ĉiujn aliajn avantaĝojn de la klaso.</p>

<?php if(!isset($kompleta)) require '../../pagxpiedo.php' ?>
