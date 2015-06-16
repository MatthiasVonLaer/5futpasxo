<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

<?php if(!isset($sen_kapo_piedo)) require '../../pagxkapo.php' ?>

<title>Statoj</title>

<h1>Statoj</h1>
<p>Se du statoj koncernas rolulon, ambaŭ efikas. Se ili ne estas kombineblaj, la pli grava efikas. </p>

<p id="blinda"><b>Blinda:</b> Blinda kreaĵo ne povas vidi. Ĝi ricevas malbonon -2 por la AK, perdas la LER-bonon (se ĝi havas) de la AK, kaj ricevas malbonon -4 por plejmultaj kapablecoĵetoj kiuj baziĝas sur forto aŭ lerteco kaj por konkuraj ĵetoj de percepto. Ĉiuj ĵetoj kaj agoj kiuj dependas de la vidpovo (kiel legi aŭ perceptĵetoj por vidi) malsukcesas aŭtomate. Ĉiuj malamikoj havas kompletan kamuflaĵon kontraŭ la blinda kreaĵo (ŝanco de malsukceso 50%). Blinduloj devas fari ĵeton de akrobataĵo (MFG 10) se ili volas moviĝi pli rapide ol per duona moviĝrapideco. Se tiu ĵeto malsukcesas, la kreaĵo falas surteren. Roluloj kiuj estas blindaj dum longa tempo povas alkutimiĝi kaj superi kelkajn malavantaĝojn. </p>

<p id="blindeta"><b>Blindeta:</b> Blindetulo preskaŭ ne povas vidi ĉar liaj okuloj estas troekscitaj. Li ricevas malbonon -1 por atakĵetoj kaj por perceptoĵetoj por vidi. </p>

<p id="cxirkauxvolvita"><b>Ĉirkaŭvolvita:</b> Ĉirkaŭvolvita rolulo havas restriktojn por moviĝi. Se liaj katenoj ne estas fiksitaj al nemovebla objekto aŭ estas tenitaj de iu forto, li ankoraŭ povas moviĝi. Ĉirkaŭvolvita kreaĵo moviĝas per duona moviĝrapideco, ne povas kuri, nek povas fari sturmatakojn, ricevas malbonon -2 por atakĵetoj kaj malbonon -4 por lerteco. Ĉirkaŭvolvita rolulo kiu provas efektivigi sorĉon, devas fari koncentriĝoĵeton (MFG 15 + sorĉogrado) aŭ li perdas la sorĉon. </p>

<p id="difektita"><b>Difektita:</b>  Objektoj kiuj havas pli da damaĝo ol la duono de siaj trafopoentoj, estas difektitaj. Tio signifas ke ili ne plu povas efike plenumi sian destinon. La stato difektita havas, depende de la objekto, la sekvantajn restriktojn: </p>
<ul>
    <li>Se la objekto estas armilo, atakoj per tiu armilo havas malbonon -2 por atak- kaj damaĝoĵetoj. Kritikaj trafoj nur povas okazi ĉe natura 20 kaj nur kaŭzas &times;2 damaĝon. </li>
    <li>Se la objekto estas armaĵo aŭ ŝildo, la AK-bono duoniĝas. Ĉe difektitaj armaĵoj krome la armaĵomalbono por kapablecoj duobliĝas. </li>
    <li>Se la objekto estas instrumento, kiu estas bezonata por kapableco, la kapablecoĵetoj per ĝi ricevas malbonon -2. </li>
    <li>Se la objekto estas sorĉobastono aŭ sorĉobastoneto, ĝi eluzas duoble pli da ŝargoj por ĉiu aplikado. </li>
    <li>Se la objekto ne kongruas al iu el la antaŭaj kategorioj, la stato difektita ne havas efikon por la aplikado. Sendepende de la kategorio al kiu la objekto apartenas, difektitaj objektoj ĉiam nur valoras 75% de la normala prezo. </li>
    <li>Se la objekto estas magia, ĝi nur povas esti riparata per la sorĉoj ripari aŭ sendifektigi se la sorĉo estas efektivigita de sorĉanto kies sorĉnivelo estas minimume tiom alta kiel tiu de la objekto. </li>
    <li>Nemagiaj objektoj povas esti riparataj sammaniere aŭ per sukcesa ĵeto por metio kiu necesas por krei la objekton. La MFG por la ĵeto estas kutime 20 kaj unu horo necesas por ripari unu damaĝopoenton. Plejmultaj metiistoj prenas 1/10 de la tuta prezo por la objekto por ripari tiajn damaĝojn (pli, se la objekto estas grave difektita aŭ kaduka). </li>
</ul>

<p id="duonsvenanta"><b>Duonsvenanta:</b>  Duonsvenanta kreaĵo ne povas normale agi, tamen ne havas malbonon por la AK. Duonsveno daŭras kutime unu rondo. </p>

<p id="elcxerpita"><b>Elĉerpita:</b>  Elĉerpita rolulo nek povas kuri nek povas fari sturmatakojn. Li ricevas malbonon -2 por forto kaj lerteco. Se elĉerpita rolulo faras ion kio kutime igus lin elĉerpita, li tiam estas senforta. Se la rolulo ripozas dum 8 horoj, li ne plu estas elĉerpita. </p>

<p id="emociita"><b>Emociita:</b>  Emociita rolulo ricevas malbonon -2 por atako-, savo-, kapableco- kaj atributoĵetoj. Emociita estas malpli grava stato de timo ol timplena kaj panika. </p>

<p id="fascinita"><b>Fascinita:</b> Fascinita kreaĵo estas fascinita per supernatura efiko aŭ per sorĉo. Ĝi staras aŭ sidas trankvile kaj faras nenion krom spekti la efikon kiu fascinas ĝin. La kreaĵo havas malbonon -4 por kapablecoĵetoj por reagi al io kiel ekzemple ĵetoj de percepto. Ĉiam kiam ebla danĝero aproksimiĝas al la fascinita kreaĵo, ĝi denove rajtas fari savĵeton kontraŭ la fascinanta efiko. Evidentaj danĝeroj kiel nudigo de armilo aŭ efektivigo de sorĉo aŭ se distancarmilo estas direktata al la fascinita kreaĵo, tuj nuligas la efikon. La aliancanoj de la fascinita kreaĵo povas liberigi ĝin per bazago. </p>

<p id="kaptita"><b>Kaptita:</b> Kaptita kreaĵo vere estas fiksita kaj nur povas fari malmultajn agojn. Ĝi ne povas moviĝi kaj perdas sian LER-bono de la AK kaj ricevas krome malbonon -4 por la AK. Kaptita kreaĵo nur povas fari malmultajn agojn: ĝi povas provi sin liberigi aŭ per batalmanovra ĵeto aŭ per ĵeto de malkateni. Ĝi povas fari parolajn aŭ mensajn agojn, sed ne povas efektivigi sorĉojn kiuj bezonas gestan aŭ materialan komponanton. Kreaĵo kiu volas efektivigi sorĉon aŭ uzi sorĉsimilan eblecon devas fari koncentriĝoĵeton (MFG 10 + BMB de tiu kiu kaptas ĝin + sorĉogrado). Se tio malsukcesas, la sorĉo estas perdita. Kaptita estas pli grava versio de la stato luktanta kaj tiuj statoj ne estas akumulaj. </p>

<p id="kauxranta"><b>Kaŭranta:</b> La rolulo estas paralizita de timo kaj ne povas agi. Krome li havas malbonon -2 por la AK kaj perdas la LER-bonon (se ekzistas) de la AK. </p>

<p id="konfuzita"><b>Konfuzita:</b> Konfuzita kreaĵo ne povas agi normale. Ĝi ne povas distingi amikojn de malamikojn kaj trajtas ĉiujn aliajn kreaĵojn kiel malamikoj. Aliancanoj kiuj volas efektivigi sorĉon kiu estas avantaĝa por la celo al la konfuzita kreaĵo, devas fari sukcesan tuŝatakon en proksimbatalo. Se la konfuzita kreaĵo estas atakita, ĝi atakas la atakanton ankaŭ ĝis tiu estas morta aŭ ne plu videbla.</p>
<p>Ĵetu je la komenco de la vico de konfuzita kreaĵo por determini kiel ĝi agas dum tiu rondo laŭ la malsupra tabelo.
<table>
    <thead>
        <tr><th>K%</th><th>Ago</th></tr>
    </thead>
    <tbody>
        <tr><td>01-25</td><td>Agas normale.</td></tr>
        <tr><td>26-50</td><td>Faras nenion krom babiladi senrilate.</td></tr>
        <tr><td>51-75</td><td>Kaŭzas al si mem 1k8 damaĝon plus FOR-modifilo per objekto kiun li tenas en siaj manoj.</td></tr>
        <tr><td>76-100</td><td>Atakas la plej proksiman kreaĵon (intimulo kalkuliĝas kiel parto de la konfuzita kreaĵo).</td></tr>
    </tbody>
</table>
<p>Konfuzulo kiu ne kapablas plenumi la indikitan agon, babiladas senrilate. Atakantoj ne ricevas specifajn bonojn se ili atakas konfuzulon. Konfuzulo kiu estas atakita, atakas dum sia venonta vico la atakanton, se li ankoraŭ estas konfuzita. La konfuzita kreaĵo ne faras okazatakojn kontraŭ malamikoj kiujn ĝi ne jam volas ataki (aŭ pro sia sinteno dum tiu rondo aŭ ĉar ĝi estis atakita). </p>

<p id="kusxanta"><b>Kuŝanta:</b> La rolulo kuŝas surplanke. Kuŝanta atakanto ricevas malbonon -4 por atakĵetoj de proksimbatalo kaj ne povas uzi distancarmiloj krom arbalestoj. Kuŝanta defendanto ricevas bonon +4 por sia AK kontraŭ distancatakoj kaj -4 kontraŭ proksimatakoj. </p>
<p>Ekstari estas movago kiu provokas okazatakojn. </p>

<p id="luktanta"><b>Luktanta:</b> Luktanta kreaĵo estas prenata de alia kreaĵo aŭ kaptilo. Luktantaj kreaĵoj ne povas moviĝi kaj ricevas malbonon -4 por sia lerteco. Krome la luktanta kreaĵo havas malbonon -2 por atako- kaj batalmanovroĵetoj krom por tiuj por eklukti aŭ eskapi la luktadon. Plie luktantaj kreaĵoj ne povas fari agojn por kiuj ili bezonas siajn manojn. Luktanta rolulo kiu volas sorĉi aŭ uzi sorĉsimilajn eblecojn devas fari koncentriĝoĵeton (MFG 10 + BMB de tiu kiu luktas kun li + sorĉogrado). Se la ĵeto estas malsukcesa, li perdas la sorĉon. Luktantaj kreaĵo ne povas fari okazatakojn. </p>
<p>Luktanta kreaĵo ne povas uzi sekretecon por kaŝi de tiu kiu luktas kun li eĉ se speciala ebleco kiel kaŝado vidalvide permesus tion. Se luktanta kreaĵo iĝas nevidebla, ĉu per sorĉo ĉu per alia ebleco, ĝi ricevas situacian bonon +2 por la BMD por eliri de la luktado. Aliajn avantaĝojn ĝi ne ricevas. </p>

<p id="malsaneta"><b>Malsaneta:</b> La koncerna rolulo ricevas malbonon -2 por ĉiuj atako-, armilodamaĝo-, savo-, kapableco- kaj atributoĵetoj. </p>

<p id="morta"><b>Morta:</b> Aŭ la vivpoentoj falis al negativa valoro kiu egalas la negativan konstituciovaloron, aŭ la konstitucio falis al 0 aŭ li estis subite mortigita per sorĉo aŭ iu efiko. La animo de via rolulo forlasas lian korpon. Mortintoj ne povas profiti de normala aŭ magia sanigo, sed ili povas revivigataj per magio. Se la kadavro ne estas konservata magie, ĝi putras kiel kutime. Magio kiu revivigas mortan rolulon ankaŭ rekonstruas la korpon kaj igas la rolulon aŭ tute sana aŭ en la staton kiun li havis je la tempo de la morto (depende de la sorĉo aŭ objekto). Ambaŭkaze la revivigita rolulo ne devas zorgi pri kadavra rigideco, putrado aŭ aliaj statoj kiuj povas koncerni la kadavron. </p>

<p id="mortanta"><b>Mortanta:</b> Mortanta kreaĵo estas senkonscia kaj proksima al morto. Kreaĵoj kun negativaj vivpoentoj, kiuj ne estas stabiligitaj, estas mortantaj. Mortanta kreaĵo ne povas agi. Kiam komenciĝas la vico de la mortanta rolulo post lia vivpoentoj falis sub 0 kaj je ĉiu venonta vico, li devas fari konstitucioĵeton (MFG 10) por stabiligi sin. La rolulo ricevas malbonon por tiu ĵeto kiu egalas la nunajn negativajn vivpoentojn. Rolulo kiu estas stabiligita ne devas fari tiun ĵeton. Natura 20 ĉe tiu ĵeto signifas aŭtomata sukceso. Se la ĵeto estas malsukcesa, la rolulo perdas 1 vivpoenton. Se mortanta kreaĵo havas tiom da negativaj vivpoentoj kiom egalas al ĝia negativa konstituciovaloro, ĝi mortas. </p>

<p id="nebatalkapabla"><b>Nebatalkapabla:</b> Rolulo kiu havas 0 VP aŭ negativajn VP, sed stabiligita kaj konscia, estas nebatalkapabla. Nebatalkapabla rolulo povas ĉiuronde fari aŭ movagon aŭ bazagon (sed ne ambaŭ, ankaŭ ne plenan agon; tamen li povas fari rapidajn, liberajn aŭ subitajn agojn). La rolulo moviĝas per duona moviĝrapideco. Ĉe moviĝagoj la rolulo ne riskas sin lezi, sed se li faras bazagon (aŭ ian agon kiun la ludgvidanto taksas kiel tro laciga - ekzemple kelkaj liberaj agoj kiel rapide sorĉi) li suferas 1 damaĝopoenton post kiam li finis la agon. Se la ago ne altigis la VP de la rolulo, li tiam havas negativajn VP kaj estas mortanta. </p>
<p>Nebatalkapabla rolulo kun negativaj VP povas reakiri siajn VP de natura maniero, se iu helpas lin. Alie li rajtas fari ĉiutage konstitucioĵeton (MFG 10) post kiam li ripozis 8 horojn por reakiri siajn VP de natura maniero. La rolulo ricevas malbonon por tiuj ĵetoj kiu egalas al siaj negativaj vivpoentoj. Se la ĵeto malsukcesas, li perdas 1 VP tamen li ne perdas la konscion. Se la ĵeto estas sukcesa, la rolulo komencas saniĝi de natura maniero kaj ne plu estas en danĝero perdi vivpoentojn. </p>

<p id="nevidebla"><b>Nevidebla:</b> Kreaĵoj kiuj estas nevideblaj ne povas esti perceptataj per la vidpovo. Nevidebla kreaĵo ricevas bonon +2 por atakĵetoj kontraŭ malamikoj kiujn ĝi povas vidi kaj ĝi povas ignori la LER-bonon (se ekzistas) de la malamiko. Vidu nevidebleco ĉe eksterordinaraj kapablecoj. </p>

<p id="paralizita"><b>Paralizita:</b> Paralizita rolulo estas fiksita surloke kaj nek povas moviĝi nek povas agi. Li havas efikajn forto- kaj lertecovalorojn de 0 kaj estas senkapabla, tamen li povas fari mensajn aktivaĵojn. Kreaĵo kun flugiloj kiu estas fluganta kiam ĝi estas paralizata, ne plu povas uzi siajn flugilojn kaj falas. Paralizita naĝanto ne plu povas naĝi kaj povas droni pro tio. Ĉiu kreaĵo rajtas moviĝi trans kampo kie staras paralizita kreaĵo sendepende ĉu ĝi estas aliancano aŭ malamiko. Tamen ĉiu kampo kie staras paralizita kreaĵo, kalkuliĝas kiel du kampoj, se oni moviĝas trans tiu kampo. </p>

<p id="panika"><b>Panika:</b> Panika kreaĵo devas lasi fali ĉion kion ĝi tenas en siaj manoj kaj devas fuĝi tiel rapide kiel eblas de la fonto de la timo kaj ĉiuj danĝeroj. Ĝi elektas hazardan vojon kaj ne povas fari aliajn agojn. Krome la panika kreaĵo ricevas malbonon -2 por ĉiuj savo-, kapableco- kaj atributoĵetoj. Se ĝi estas kaptita en angulo, ĝi kaŭriĝas kaj ne atakas. Plejofte ĝi uzas en batalo la agon plena defendo. La panika kreaĵo povas uzi siajn eksterordinarajn eblecojn kaj sorĉojn por fuĝi, ja devas fari tion se tio estas la sola ebleco por fuĝi.</p>
<p>Panika estas pli intensa stato ol timplena kaj emociita. </p>

<p id="sxanceligxanta"><b>Ŝanceliĝanta:</b> Ŝanceliĝanta kreaĵo povas fari unu movago aŭ unu bazago ĉiuronde (sed ne ambaŭ kaj ne plenan agon). Ĝi tamen ankoraŭ povas fari rapidajn kaj subitajn agojn. Kreaĵo kiu havas tiom da nemortigan damaĝon kiel nunaj vivpoentoj, iĝas ŝanceliĝanta. </p>

<p id="sanganta"><b>Sanganta:</b> Kreaĵo kiu suferas damaĝon pro perdo de sango, ricevas je la komenco de ĝia vico la indikitan damaĝon. Sangantaj vundoj povas esti kuracataj per sukcesa ĵeto de kuraci (MFG 15) aŭ per sorĉo kiu sanigas damaĝon de vivpoentoj (eĉ se la sangado kaŭzas damaĝon de atributvaloroj). Kelkaj efikoj de sangado kaŭzas atributdamaĝon aŭ eĉ malpliigon de atributvaloroj. La efikoj de sangado ne estas akumulaj krom se ili kaŭzas malsaman tipon de damaĝo. Se rolulo estas la viktimo de du aŭ pluraj efikoj de sangado, la plej grava efiko aplikiĝas. Tiukaze malpliigo de atributoj estas pli grava ol damaĝo de atributoj. </p>

<p id="senforta"><b>Senforta:</b> Senforto rolulo nur povas moviĝi per duona moviĝrapideco. Li ne povas kuri nek povas fari sturmatakojn kaj ricevas malbonon -6 por forto kaj lerteco. Se senforta rolulo ripozis dum unu horo, li poste nur estas elĉerpita. Elĉerpita rolulo iĝas senforta denove se li faras ion kio kutime igus lin elĉerpita. </p>

<p id="senkapabla"><b>Senkapabla:</b> Senkapabla rolulo estas paralizita, kaptita, en katenoj, senkonscia, dormas aŭ estas en ajna maniero dependa de la graco de siaj malamikoj. Senkapabla rolulo havas lertecon 0 (modifilo -5). Proksimatakoj kontraŭ li ricevas bonon +4 (konforme al al atakoj kontraŭ iu kiu kuŝas surtere). Distancatakoj ne ricevas kroman bonon. Friponoj povas fari embuskan atakon kontraŭ senkapabluloj.</p>
<p>Malamiko povas per plena ago fari baton de graco kontraŭ senkapablulo. Li ankaŭ povas fari la baton de graco per arko aŭ arbalesto se li staras sur najbara kampo. La atakanto trafas aŭtomate kaj faras kritikan trafon. (La fripono ankoraŭ povas aldoni la damaĝon de sia embuska atako se li faras baton de graco kontraŭ senkapablulo). Transvivas la senkapablulo, li tamen devas fari persistecoĵeton (MFG 10 + kaŭzata damaĝo). Se li malsukcesas, li mortas. La bato de graco provokas okazatakojn. </p>
<p>Kreaĵoj kiuj estas imunaj kontraŭ kritikaj trafoj, ne suferas kritikan damaĝon kaj ne devas fari persistecoĵeton por ne morti pro la bato de graco. </p>

<p id="senkonscia"><b>Senkonscia:</b>  Senkonsciaj kreaĵoj perdis sian konscion kaj estas senkapablaj. Senkonscio okazas se la vivpoentoj estas negativaj (sed ne pli ol la negativa konstituciovaloro de la kreaĵo) aŭ se la nemortiga damaĝo estas pli granda ol la nunaj vivpoentoj de la kreaĵo. </p>

<p id="senkorpa"><b>Senkorpa:</b> Kreaĵo kiu estas senkorpa, ne havas fizikan korpon. Senkorpaj kreaĵoj estas imunaj kontraŭ ĉiuj nemagiaj ataktipoj. Ili nur suferas duonan damaĝon (50%) de magiaj armiloj, sorĉoj, sorĉsimilaj efikoj kaj supernaturaj efikoj. Senkorpaj kreaĵoj suferas plenan damaĝon de atakoj de aliaj senkorpaj kreaĵoj kaj efikoj kaj de energiefikoj. </p>

<p id="stabiligita"><b>Stabiligita:</b> Rolulo kiu estas mortanta kaj havas negativajn vivpoentojn sed ne plu perdas vivpoentojn estas stabiligita. Li ne plu mortantas sed li estas senkonscia. Se la rolulo estis stabiligita de alia rolulo (per ĵeto de kuraci aŭ per magia sanigo), li ne plu perdas vivpoentojn. La rolulo rajtas fari konstitucioĵeton (MFG 10) ĉiuhore por rehavi la konscion kaj esti nebatalkapabla (eĉ se la vivpoentoj ankoraŭ estas negativaj). La malbono por tiu ĵeto egalas al la negativaj vivpoentoj de la rolulo. </p>
<p>Se la rolulo stabiliĝis mem sen helpo de aliaj, ankoraŭ estas risko ke li perdas vivpoentojn. Li povas fari konstitucioĵetojn ĉiuhore por stabiliĝi (kiel rolulo kiu ricevis helpon). Se la ĵeto estas malsukcesa, li perdas unu plian VP. </p>

<p id="sxtonigxinta"><b>Ŝtoniĝinta:</b> Ŝtoniĝinta rolulo transformiĝis al ŝtono kaj kalkuliĝas kiel senkonscia. Se aperas breĉoj ĉe la ŝtoniĝinta rolulo aŭ se li rompiĝas, li ne suferas damaĝon se la rompitaj korpopartoj estas ligataj al la korpo dum la retransformado al karno. Se la korpo de la rolulo tamen estas nekompleta dum la retransformado, li restas tiel kaj li eble suferas permanentan perdon de vivpoentoj kaj/aŭ restantan handikapon. </p>

<p id="sur-la-malĝusta-piedo"><b>Sur la malĝusta piedo:</b> Rolulo kiu ne jam agis en batalo estas sur la malĝusta piedo kaj ne ankoraŭ povas reagi normale al la situacio. Rolulo kiu estas surprizita sur la malĝusta piedo ne rajtas aldoni sian LER-bonon (se ekzistas) al la AK kaj ne rajtas fari okazatakojn. </p>

<p id="surda"><b>Surda:</b> Surda rolulo ne povas aŭdi. Li ricevas malbonon -4 por inciatoĵetoj kaj perceptoĵetoj por aŭdi malsukcesas aŭtomate. Krome li ricevas malbonon -4 por konkuraj ĵetoj de percepto kaj sorĉoj kun parola komponanto li fuŝas je 20%. Roluloj kiuj estas surdaj dum longa tempo povas alkutimiĝi al la malavantaĝoj kaj superi kelkajn. </p>

<p id="svenanta"><b>Svenanta:</b> Svenanta rolulo lasas fali ĉiun kiun li tenas en siaj manoj, povas fari neniun agon, ricevas malbonon -2 por la AK kaj perdas sian LER-bonon (se li havas) por la AK. </p>

<p id="timplena"><b>Timplena:</b> Timplena kreaĵo fuĝas de la fonto de la timo tiel bone kiel ĝi povas. Se ĝi ne povas fuĝi, ĝi rajtas batali. Timplenulo ricevas malbonon -2 por ĉiuj atako-, savo-, kapableco- kaj atributoĵetoj. Tamen li povas apliki eksterordinarajn eblecojn kaj sorĉojn por fuĝi. La rolulo eĉ devas uzi tiujn rimedojn se ne eblas fuĝi alie. Timplena estas kiel la stato emociita krom ke la kreaĵo devas fuĝi se eblas. Panika estas pli intensa timostato ol timplena. </p>

<p id="vomema"><b>Vomema:</b> Kreaĵoj kiuj estas vomemaj havas problemojn kun sia stomako. Ili ne kapablas ataki, efektivigi sorĉojn, koncentriĝi al sorĉoj, aŭ fari ion ajn kiu postulas atentemon. Rolulo kiu estas vomema nur povas fari unu movagon ĉiuronde. </p>

<?php if(!isset($sen_kapo_piedo)) require '../../pagxpiedo.php' ?>
