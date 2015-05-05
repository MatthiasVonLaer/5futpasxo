<?php require '../../pagxkapo.php' ?>

<title>Talentoj</title>

<h2>Talentdeskribo</h2>

<p> Talentoj estas listigitaj en la sekvanta tabelo. Atentu ke la kondiĉoj kaj avantaĝoj aperas en mallonga formo. En la talentdeskribo vi trovas la kompletajn detalojn.</p>

<p> La talentoj estas prezentataj laŭ la sekvanta formato: </p>

<p> <b>Talentnomo [talenttipo]:</b> La talentnomo ankaŭ indikas pri kiu talenttipo temas. Poste sekvas mallonga priskribo. </p>

<p> <b>Kondiĉoj:</b> Tiu paragrafo klarigas kiuj antaŭkondiĉoj estas bezonataj. Tio povas esti minimuma atributvaloro, unu aŭ pluraj aliaj talentoj, minimuma bazatakbono, minimuma kvanto da rangoj en unu aŭ pluraj kapablecoj, kaj tiel plu. Se talento ne havas kondiĉojn, tiu paragrafo malestas. Talento povas havi plurajn kondiĉojn. </p>

<p> <b>Avantaĝo:</b> Klarigas kiel la talento utilas al la rolulo. La avantaĝoj de la talento nur estas akumulaj se la deskribo mencias tion. </p>

<p> <b>Kutime:</b> Priskribas la restriktojn kiuj validas por roluloj sen tiu talento. Se la nehavo de la talento ne signifas specialan malavantaĝon, tiu paragrafo ne estas.

<p> <b>Speciale:</b> Kromaj nekutimaj informoj pri la talento. </p>

<table class="sen-sub-linio">
    <caption>Tabelo: Talentoj</caption>
    <col width="25%">
    <col width="25%">
    <col width="50%">
    <tr>
        <th>Talento</th>
        <th>Kondiĉoj</th>
        <th>Avantaĝoj</th>
    </tr>
    <tr>
        <td><a href="#akrobatisto">Akrobatisto</a></td>
        <td>-</td>
        <td>Bono de +2 por ĵetoj de akrobataĵo kaj flugado</td>
    </tr>
    <tr>
        <td><a href="#apudsekvi">Apudsekvi</a><sup>*</sup></td>
        <td>BAB +1</td>
        <td>Kvinfut-paŝo kiel subita agoj</td>
    </tr>
    <tr class="supra-linio">
        <td><a href="#arkana-armajxotrejnado">Arkana armaĵotrejnado</a><sup>*</sup></td>
        <td>Sperto pri armaĵoj (malpezaj), sorĉnivelo 3</td>
        <td>Reduktas la probablon por arkana sorĉfuŝo je 10%</td>
    </tr>
    <tr class="malsupra-linio">
        <td class="desxovo-1"><a href="#arkana-armajxomajstro">Arkana armaĵomajstro</a><sup>*</sup></td>
        <td>Arkana armaĵotrejnado, sperto pri armaĵoj (mezpezaj), sorĉnivelo 7</td>
        <td>Reduktas la probablon por arkana sorĉfuŝo je 10%</td>
    </tr>
    <tr>
        <td><a href="#arkana-bato">Arkana bato</a></td>
        <td>Ebleco efektivigi arkanajn sorĉojn</td>
        <td>Damaĝo +1, armiloj estas traktataj kiel magiaj</td>
    </tr>
    <tr>
        <td><a href="#atleto">Atleto</a></td>
        <td>-</td>
        <td>Bono de +2 por ĵetoj de grimpi aŭ naĝi</td>
    </tr>
    <tr>
        <td><a href="#blinde-batali">Blinde batali</a><sup>*</sup></td>
        <td>-</td>
        <td>Denova ĵeto de fuŝoprobableco ĉe kamuflado</td>
    </tr>
    <tr class="supra-linio">
        <td><a href="#defensiva-batalmaniero">Defensiva batalmaniero</a><sup>*</sup></td>
        <td>INT 13</td>
        <td>Ŝanĝi atakbonon al armaĵbono</td>
    </tr>
    <tr>
        <td class="desxovo-1"><a href="#faligo-progresita">Faligo progresita</a><sup>*</sup></td>
        <td>Defensiva batalmaniero</td>
        <td>Bono de +2 por faligo, neniu okazatako</td>
    </tr>
    <tr>
        <td class="desxovo-2"><a href="#faligo-potenca">Faligo potenca</a><sup>*</sup></td>
        <td>Faligo progresita, BAB +6</td>
        <td>De vi faligitaj malamikoj provokas okazatakon</td>
    </tr>
    <tr>
        <td class="desxovo-1"><a href="#finto-progresita">Finto progresita</a><sup>*</sup></td>
        <td>Defensiva batalmaniero</td>
        <td>Finto kiel movago</td>
    </tr>
    <tr>
        <td class="desxovo-2"><a href="#finto-potenca">Finto potenca</a><sup>*</sup></td>
        <td>Finto progresita, BAB +6</td>
        <td>Atakitoj de tiu finto perdas sian LER-modifilon por 1 rondo</td>
    </tr>
    <tr>
        <td class="desxovo-1"><a href="#kirloventa-atako">Kirloventa atako</a><sup>*</sup></td>
        <td>Defensiva batalmaniero, dancetanta atako, LER 13, BAB +4</td>
        <td>Proksimatako kontraŭ ĉiuj malamikoj en trafopovo</td>
    </tr>
    <tr>
        <td class="desxovo-1"><a href="#senarmigo-progresita">Senarmigo progresita</a><sup>*</sup></td>
        <td>Defensiva batalmaniero</td>
        <td>Bono de +2 por senarmigi, neniu okazatako</td>
    </tr>
    <tr class="malsupra-linio">
        <td class="desxovo-2"><a href="#senarmigo-potenca">Senarmigo potenca</a><sup>*</sup></td>
        <td>Senarmigo progresita, BAB +6</td>
        <td>Senarmigitaj armiloj estas forĵetataj de la malamiko</td>
    </tr>
    <tr>
        <td><a href="#defensiva-bataltrejnado">Defensiva bataltrejnado</a><sup>*</sup></td>
        <td>-</td>
        <td>Uzu viajn VK kiel BAB por BMD</td>
    </tr>
    <tr class="supra-linio">
        <td><a href="#eltenema">Eltenema</a></td>
        <td>-</td>
        <td>Bono de +4 por ĵetoj por eviti nemortigan damaĝon.</td>
    </tr>
    <tr class="malsupra-linio">
        <td class="desxovo-1"><a href="#cxioeltena">Ĉioeltena</a></td>
        <td>Eltenema</td>
        <td>Aŭtomate stabila kaj gardi konscion sub 0 VP</td>
    </tr>
    <tr>
        <td><a href="#enfokusigante-pereigi">Enfokusigante pereigi</a><sup>*</sup></td>
        <td>Klasebleco enfokusigi energion</td>
        <td>Enfokusigi energion per via atako</td>
    </tr>
    <tr>
        <td><a href="#enfokusigi-elementon">Enfokusigi elementon</a></td>
        <td>Klasebleco enfokusigi energion</td>
        <td>Enfokusigi energion povas lezi aŭ sanigi elementulon</td>
    </tr>
    <tr>
        <td><a href="#enfokusigi-pensmanieron">Enfokusigi pensmanieron</a></td>
        <td>Klasebleco enfokusigi energion</td>
        <td>Enfokusigi energion povas lezi kaj sanigi eksterulojn</td>
    </tr>
    <tr>
        <td><a href="#enfokusigi-selektive">Enfokusigi selektive</a></td>
        <td>KAR 13, klasebleco enfokusigi energion</td>
        <td>Elekti kiun trafas la enfokusigitan energion</td>
    </tr>
    <tr>
        <td><a href="#etenda-pasxo">Etenda paŝo</a><sup>*</sup></td>
        <td>BAB +6</td>
        <td>Preni aramaĵmalbonon de -2 por ataki distance</td>
    </tr>
    <tr class="supra-linio">
        <td><a href="#evitmovo">Evitmovo</a><sup>*</sup></td>
        <td>LER 13</td>
        <td>Evitmovobono de +1 por la AK</td>
    </tr>
    <tr>
        <td class="desxovo-1"><a href="#movebleco">Movebleco</a><sup>*</sup></td>
        <td>Evitmovo</td>
        <td>AK +4 kontraŭ okazatakoj dum movado</td>
    </tr>
    <tr>
        <td class="desxovo-2"><a href="#dancetanta-atako">Dancetanta atako</a><sup>*</sup></td>
        <td>Movebleco, BAB +4</td>
        <td>Moviĝo antaŭ kaj post atako</td>
    </tr>
    <tr>
        <td class="desxovo-1"><a href="#rapida-kiel-la-vento">Rapida kiel la vento</a><sup>*</sup></td>
        <td>Evitmovo, LER 15, BAB +6</td>
        <td>20% kamuflado dum moviĝo</td>
    </tr>
    <tr class="malsupra-linio">
        <td class="desxovo-2"><a href="#rapida-kiel-la-fulmo">Rapida kiel la fulmo</a><sup>*</sup></td>
        <td>Rapida kiel la vento, LER 17, BAB +11</td>
        <td>50% kamuflado dum duobla moviĝo</td>
    </tr>
    <tr class="supra-linio">
        <td><a href="#fera-volo">Fera volo</a></td>
        <td>-</td>
        <td>Bono de +2 por voloĵetoj</td>
    </tr>
    <tr class="malsupra-linio">
        <td class="desxovo-1"><a href="#fera-volo-progresita">Fera volo progresita</a></td>
        <td>Fera volo</td>
        <td>Unufoje tage ripeti voloĵeton</td>
    </tr>
    <tr class="supra-linio">
        <td><a href="#fulmaj-refleksoj">Fulmaj refleksoj</a></td>
        <td>-</td>
        <td>Bono de +2 por refleksĵetoj</td>
    </tr>
    <tr class="malsupra-linio">
        <td class="desxovo-1"><a href="#fulmaj-refleksoj-progresitaj">Fulmaj refleksoj progresitaj</a></td>
        <td>Fulmaj refleksoj</td>
        <td>Unufoje tage refari refleksĵeton</td>
    </tr>
    <tr>
        <td><a href="#gvidi">Gvidi</a></td>
        <td>Rolulnivelo +7</td>
        <td>Gajni por vi sekvanton kaj disĉiplojn</td>
    </tr>
    <tr>
        <td><a href="#kapablecofokuso">Kapablecofokuso</a></td>
        <td>-</td>
        <td>Bono de +3 por unu kapableco (+6 ekde 10 rangoj)</td>
    </tr>
    <tr>
        <td><a href="#kontrauxatako">Kontraŭatako</a><sup>*</sup></td>
        <td>BAB +11</td>
        <td>Ataki malamikon, kiam ili atakas per trafdistanco</td>
    </tr>
    <tr>
        <td><a href="#langolerteco">Langolerteco</a></td>
        <td>-</td>
        <td>Bono de +2 por ĵetoj de diplomatio kaj timigi</td>
    </tr>
    <tr class="supra-linio">
        <td><a href="#lerta-movigxo">Lerta moviĝo</a></td>
        <td>LER 13</td>
        <td>Ignori 1,5 m da malfacila tereno dum moviĝo</td>
    </tr>
    <tr class="malsupra-linio">
        <td class="desxovo-1"><a href="#lertega-movigxo">Lertega moviĝo</a></td>
        <td>Lerta moviĝo, LER 15</td>
        <td>Ignori 6 m da malfacila tereno dum moviĝo</td>
    </tr>
    <tr>
        <td><a href="#lertaj-manoj">Lertaj manoj</a></td>
        <td>-</td>
        <td>Bono de +2 por ĵetoj de malfunkciigi mekanismon kaj fingrolerteco</td>
    </tr>
    <tr>
        <td><a href="#lertaj-manovroj">Lertaj manovroj</a></td>
        <td>-</td>
        <td>Aldoni vian LER-bonon al via BMB</td>
    </tr>
    <tr class="supra-linio">
        <td><a href="#rajdante-batali">Rajdante batali</a><sup>*</sup></td>
        <td>1 rango en rajdi</td>
        <td>Atakoj al la rajdbesto povas esti evitataj per ĵeto de rajdi</td>
    </tr>
    <tr>
        <td class="desxovo-1"><a href="#deseligi">Deseligi</a><sup>*</sup></td>
        <td>Rajdante batali, fortega atako, puŝatako progresita, FOR 13</td>
        <td>Faligi malamikon de la selo</td>
    </tr>
    <tr>
        <td class="desxovo-1"><a href="#preterrajdante-ataki">Preterrajdante ataki</a><sup>*</sup></td>
        <td>Rajdante batali</td>
        <td>Moviĝo antaŭ kaj post rajdanta sturmatako</td>
    </tr>
    <tr>
        <td class="desxovo-2"><a href="#brava-sturmatako">Brava sturmatako</a><sup>*</sup></td>
        <td>Preterrajdante ataki</td>
        <td>Duobla damaĝo per rajdanta sturmatako</td>
    </tr>
    <tr>
        <td class="desxovo-1"><a href="#rajdante-distancataki">Rajdante distancataki</a><sup>*</sup></td>
        <td>Rajdante batali</td>
        <td>Duona malbono ĉe rajdantaj distancatakoj</td>
    </tr>
    <tr class="malsupra-linio">
        <td class="desxovo-1"><a href="#superrajdi">Superrajdi</a><sup>*</sup></td>
        <td>Rajdante batali</td>
        <td>Rajdante superkuri</td>
    </tr>
    <tr>
        <td><a href="#sinhardado">Sinhardado</a></td>
        <td>-</td>
        <td>+3 VP, aldone +1 VP po VK ekde la 4a VK</td>
    </tr>
    <tr class="supra-linio">
        <td><a href="#superfortigaj-sorcxoj">Superfortigaj sorĉoj</a></td>
        <td>-</td>
        <td>Bono de +2 por sorĉniveloĵetoj por superi sorĉreziston</td>
    </tr>
    <tr class="malsupra-linio">
        <td class="desxovo-1"><a href="#superfortigaj-sorcxoj-potencaj">Superfortigaj sorĉoj potencaj</a></td>
        <td>Superfortigaj sorĉoj</td>
        <td>Plia bono de +2 por sorĉniveloĵetoj por superi sorĉreziston</td>
    </tr>
    <tr>
        <td><a href="#timiga-forto">Timiga forto</a><sup>*</sup></td>
        <td>-</td>
        <td>FOR aldoniĝas al KAR por ĵetoj de timigi</td>
    </tr>
    <tr class="supra-linio">
        <td colspan="3"><sup>*</sup> Tiu talento estas batalotalento kaj povas esti elektita de la batalisto kiel kroma talento.</td>
    </tr>
</table>

<h3 id="akrobatisto">Akrobatisto</h3>
<p> Vi lerte scipovas hasti, salti kaj flugi.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +2 por kapablecĵetoj de akrobataĵo kaj flugado. Se vi havas minimume 10 rangojn en tiu kapableco la bono altiĝas al +4 por tiu kapableco.</p>

<h3 id="apudsekvi">Apudsekvi [batalo]</h3>
<p> Vi povas mallongigi la distancon, se malamiko provas malproskimiĝi.</p>
<p> <b>Kondiĉo:</b> Bazataka bono +1 </p>
<p> <b>Avantaĝo:</b> Se malamiko en najbara kampo provas malproksimiĝi per kvinfut-paŝo, tiam vi faras same kvinfut-paŝon kiel subita ago por alveni al najbara kampo de la malamiko. Se vi faras la paŝon, vi ne plu povas fari kvinfut-paŝon dum via posta vico. Se vi moviĝas dum via posta vico, subtrahu la 1,5 m de la distanco kiun vi povus iri.</p>

<h3 id="arkana-armajxomajstro">Arkana armaĵomajstro [batalo]</h3>
<p> Vi majstras ŝorĉi en armaĵoj.</p>
<p> <b>Kondiĉoj:</b> Arkana armaĵotrejnado, sperto pri armaĵoj (mezpezaj), sorĉnivelo 7</p>
<p> <b>Avantaĝo:</b> Per rapida ago vi reduktas la riskon fari sorĉfuŝon, kaŭze de via armaĵo, je 20% por ĉiuj sorĉoj dum tiu rondo. Tiu bono anstataŭas (ne estas aldona) la bonon de la talento arkana armaĵotrejnado.</p>

<h3 id="arkana-armajxotrejnado">Arkana armaĵotrejnado [batalo]</h3>
<p> Vi lernis ŝorĉi en armaĵoj.</p>
<p> <b>Kondiĉoj:</b> Sperto pri armaĵoj (malpezaj), sorĉnivelo 3</p>
<p> <b>Avantaĝo:</b> Per rapida ago vi reduktas la riskon fari sorĉfuŝon, kaŭze de via armaĵo, je 10% por ĉiuj sorĉoj dum tiu rondo. </p>

<h3 id="arkana-bato">Arkana bato [batalo]</h3>
<p> Vi uzas vian arkanan potencon por riĉigi viajn armilojn per magia energio. </p>
<p> <b>Kondiĉo:</b> Ebleco efektivigi arkanajn sorĉojn </p>
<p> <b>Avantaĝo:</b> Per rapida ago vi povas aldoni magian energion al viaj armiloj. Dum unu rondo la damaĝo de via armiloj estas unu pli alta. Krome viaj armiloj estas traktataj kiel magiaj armiloj rilate al damaĝoredukto. La bono altiĝas ĉiuj kvin niveloj ĝis maksimumo de +5 je la 20a nivelo. </p>

<h3 id="atleto">Atleto</h3>
<p> Vi havas denaskan sportan talenton.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +2 por kapablecĵetoj de grimpi aŭ naĝi. Se vi havas minimume 10 rangoj en unu el tiuj kapablecoj la bono altiĝas al +4.</p>

<h3 id="blinde-batali">Blinde batali [batalo]</h3>
<p> Vi estas sperta pri ataki malamikojn kiujn vi ne klare povas vidi. </p>
<p> <b>Avantaĝo:</b> Ĉiufoje kiam vi maltrafas celon en proksimbatalo pro ties kamuflado (vidu ĉapitron <a href="../batalo">Batalo</a>), vi rajtas ĵeti elcentĵeton por la fuŝoprobableco denove por determini ĉu vi trafas. Nevideblaj malamikoj ne havas avantaĝojn por ataki vin en proksimbatalo. Tio signifas ke vi ne perdas vian lertecmodifilon de la AK. Krome la atakanto perdas sian bonon de +2 kiun li kutime ricevas pro sia nevidebleco. Ĉe distancatakoj de nevideblaj atakantoj tiu atakbono tamen validas. </p>
<p> Krome se vi estas blinda, vi ne devas fari ĵeton de akrobataĵo por moviĝi per plena moviĝorapideco. </p>
<p> <b>Kutime:</b> Validas la kutimaj modifiloj por atakĵetoj kiujn faras nevideblaj atakantoj por trafi vin. Aldone vi perdas vian lertecbonon de via AK. Plie validas la reguloj rilate via moviĝorapideco en malhelo kaj malbonaj vidĉirkumstancoj. </p>
<p> <b>Speciale:</b> La talento batali blinde ne donas avantaĝojn kontraŭ roluloj al kiuj efikas la sorĉo scintili. </p>

<h3 id="brava-sturmatako">Brava sturmatako [batalo]</h3>
<p> Vi faras severan damaĝon per sturmatakoj sur via rajdbesto. </p>
<p> <b>Kondiĉoj:</b> 1 rango en rajdi, rajdante batali, preterrajdante ataki </p>
<p> <b>Avantaĝo:</b> Se vi faras sturmatakon sur via rajdbesto, la damaĝo per via proksimarmilo duobliĝas (por la lanco ĝi triobliĝas).</p>

<h3 id="cxioeltena">Ĉioeltena</h3>
<p> Estas tre malfacile mortigi vin. Viaj vundoj stabiliĝas aŭtomate kaj vi gardas konscion eĉ malgraŭ plej gravaj lezoj.</p>
<p> <b>Kondiĉo:</b> Eltenemo</p>
<p> <b>Avantaĝo:</b> Se viaj vivpoentoj estas sub 0 kaj vi ne estas morta, vi stabiliĝas aŭtomate. Vi ne bezonas fari ĵeton de konstitucio por ne perdi pliajn vivpoentojn. </p>
<p> Se viaj vivpoentoj reduktiĝas sub 0, vi povas elekti agi kiel se vi estus nebatalkapabla, anstataŭ kuŝi mortante. Tiun decidon vi devas fari en la momento kiam viaj vivpoentoj reduktiĝas sub 0, eĉ se ne estas via vico. Se vi ne decidas uzi la talenton, vi perdas subite la konscion.</p>
<p> Se vi elektas la talenton, vi estas ŝanceliĝanta. Vi povas fari unu movagon sen ricevi plian damaĝon. Tuj kiam vi faras bazagon aŭ faras alian agon kiun oni devas trakti kiel laciga (kiuj ankaŭ povas esti kelkaj liberaj agoj kiel efektivigi rapidan sorĉon), vi suferas unu damaĝpoenton. Se viaj negativaj vivpoentoj estas egalaj aŭ pli grandaj ol via konstituciovaloro, vi mortas subite. </p>
<p> <b>Kutime:</b> Rolulo sen tiu talento kies vivpoentoj reduktiĝas sub 0, perdas la konscion kaj estas mortanta. </p>

<h3 id="dancetanta-atako">Dancetanta atako [batalo]</h3>
<p> Vi povas lertmove alproksimiĝi al malamiko, bati lin kaj retiriĝi antaŭ li povas reagi.</p>
<p> <b>Kondiĉoj:</b> LER 13, evitmovo, movebleco, bazataka bono +4 </p>
<p> <b>Avantaĝo:</b> Kiel plena ago vi povas moviĝi per via moviĝrapideco, fari unu solan proksimatakon sen provoki okazatakon de la celo de via atako. Vi povas moviĝi antaŭ kaj post via atako, sed vi devas minimume moviĝi 3 m antaŭ via atako. Krome la tuta distanco de via moviĝo ne rajtas transpasi vian monviĝrapidecon. Vi ne povas uzi tiun talenton por ataki malamikon kiu staras apud vi je la komenco de via vico. </p>
<p> <b>Kutime:</b> Vi ne rajtas moviĝi antaŭ kaj post via atako. </p>

<h3 id="defensiva-batalmaniero">Defensiva batalmaniero [batalo]</h3>
<p> Vi rezignas pri alta precizeco de via atako kaj pliboniĝas vian defendon.</p>
<p> <b>Kondiĉoj:</b> INT 13 </p>
<p> <b>Avantaĝo:</b> Vi povas preni malbonon de -1 por proksim-atakĵetoj kaj batalmanovroĵetoj por ricevi evitmovobonon de +1 al la armaĵklaso. Kiam via bazataka bono atingas +4 kaj por ĉiuj +4 poste, la malbono malplialtiĝas je -1 kaj la bono plialtiĝas je +1. Vi nur povas apliki la talenton se vi deklaras ke vi faras atakon aŭ plenan atakagon per proksimarmilo. La efikoj daŭras unu rondon.</p>

<h3 id="defensiva-bataltrejnado">Defensiva bataltrejnado [batalo]</h3>
<p> Vi estas majstro en la defendo kontraŭ ĉiuj tipoj da batalmanovroj</p>
<p> <b>Avantaĝo:</b> Via entuta nombro da vivkubetoj validas kiel bazataka bono por determini vian batalmanovran defendon (vidu ĉapitron <a href="../batalo">Batalo</a>).</p>

<h3 id="deseligi">Deseligi [batalo]</h3>
<p> Vi spertas pri faligi viajn kontraŭulojn de la selo. </p>
<p> <b>Kondiĉoj:</b> FOR 13, 1 rango en rajdi, rajdante batali, fortega atako, puŝatako progresita</p>
<p> <b>Avantaĝo:</b> Se vi rajdante per lanco atakas malamikon, faru la atakon kiel kutime. Se la atako estas sukcesa vi povas - aldone al la normala damaĝo - provi liberan puŝatakon. Se tio ankaŭ sukcesas, la malamiko estas jetata de la selo kaj surteriĝas kuŝante sur unu najbara kampo de sia rajdbesto aliflanke de vi. </p>

<h3 id="eltenema">Eltenema</h3>
<p> Malfacilaj mediaj cirkonstancoj kaj longdaŭraj penoj lacigas vin malplie ol aliaj personoj.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +4 por la sekvantaj ĵetoj: ĵetoj por naĝi por eviti nemortigan damaĝon pro elĉerpiĝo; ĵetoj de konstitucio por iri plu; ĵetoj de konstitucio por eviti nemortigan damaĝon pro tro lonaga irado; ĵetoj de konstitucio por reteni la spiron; ĵetoj de konstitucio por eviti nemortigan damaĝon pro malsato aŭ soifo; ĵetoj de konstitucio por eviti nemortigan damaĝon pro varmega aŭ malvarmega medio; ĵetoj de konstitucio por ne sufokiĝi. Krome vi povas dormi en malpezaj aŭ mezpezaj armaĵoj sen esti elĉerpita dum la venonta tago. </p>
<p> <b>Kutime:</b> Se rolulo ne havas tiun talenton kaj dormas en mezpeza aŭ peza armaĵo, tiam li estas elĉerita dum la venonta tago.</p>

<h3 id="enfokusigante-pereigi">Enfokusigante pereigi</h3>
<p> Vi povas enfokusigi dian energion per via proksimbatala armilo en via mano.</p>
<p> <b>Kondiĉo:</b> Klasebleco enfokusigi energion</p>
<p> <b>Avantaĝo:</b> Antaŭ fari proksimbatalan atakon vi povas elekti uzi vian ebelcon enfokusigi energion per rapida ago. Se vi enfokusigas pozitivan energion kaj trafas malmortulon per via atako, la celo suferas aldonan damaĝon de la enfokusigita pozitiva energio. Se vi enfokusigas negativan energion kaj trafas vivantan kreaĵon per via atako, la kreaĵo suferas la aldonan damaĝon de la enfokusigita negativa energio. La celo de la atako povas kiel kutime fari voloĵeton por duonigi la damaĝon. Se via atako maltrafas, la ebleco enfokusigi energion tamen estas uzita. </p>

<h3 id="enfokusigi-elementon">Enfokusigi elementon</h3>
<p> Elektu element-subtipon (aero, akvo, fajro, tero). Ekde nun vi povas enfokusigi vian dian energion tiel kiel vi povas sanigi aŭ lezi eksterulojn de la elektita element-subtipo. </p>
<p> <b>Kondiĉo:</b> Klasebleco enfokusigi energion</p>
<p> <b>Avantaĝo:</b> Anstataŭ la kutima efiko de enfokusigi energion, vi povas elekti uzi tiun eblecon por eksteruloj de la elektita element-subtipo. Vi devas elekti ĉiufoje kiam vi enfokusigas energion. Se vi decidas sanigi aŭ lezi kreaĵojn de tiu element-subtipo, tiam enfokusigi energion ne havas efikon por aliaj kreaĵoj. La kaŭzata aŭ sanigata damaĝo kaj la MFG por duonigi la damaĝon ne ŝanĝiĝas.</p>
<p> <b>Speciale:</b> Vi povas elekti tiun talenton plurfoje. Ĝia efiko ne estas akumula. Tamen ĝi povas esti elektita por diversaj element-subtipoj.

<h3 id="enfokusigi-pensmanieron">Enfokusigi pensmanieron</h3>
<p> Elektu el la pensmanieroj laŭleĝa, ĥaosa, bona aŭ malbona. Vi povas enfokusigi dian energion kaj per tio efiki eksterulojn kiuj apartenas al la elektitan pensmanieron. </p>
<p> <b>Kondiĉo:</b> Klasebleco enfokusigi energion</p>
<p> <b>Avantaĝo:</b> Anstataŭ la kutima funkciado vi povas decidi ke la ebleco "enfokusigi energion" lezas aŭ sanigas eksterulojn de la elektita pensmaniero. Vi devas fari la elekton ĉiam kiam vi enfokusigas energion. Se vi elektas lezi aŭ sanigi estaĵojn de la elektita pensmaniero, tiam la ebleco "enfokusigi energion" havas neniun efikon por aliaj estaĵoj. La kvanto da sanigo aŭ damaĝo kiel la MFG por duonigo de la damaĝo estas kiel kutime.  </p>
<p> <b>Speciale:</b> Vi povas elekti tiun talenton plurfoje. Ĝia efiko ne estas akumula. Ĉiam kiam vi denove elektas la talenton ĝi rilatas al alia pensmaniero. Se vi enfokusigas energion, vi devas elekti al kiu pensmaniero ĝi efikas. </p>

<h3 id="enfokusigi-selektive">Enfokusigi selektive</h3>
<p> Vi povas elekti kiun la enfokusigitan energion efikas. </p>
<p> <b>Kondiĉoj:</b> KAR 13, klasebleco enfokusigi energion</p>
<p> <b>Avantaĝo:</b> Kiam vi enfokusigas energion, vi povas elekti kvanton da celoj kiu egalas maksimume vian KAR-modifilon. Tiujn celojn ne estas efektiv</p>
<p> <b>Kutime:</b> Vi povas elekti tiun talenton plurfoje. Ĝia efiko ne estas akumula. Ĉiam kiam vi denove elektas la talenton ĝi rilatas al alia pensmaniero. Se vi enfokusigas energion, vi devas elekti al kiu pensmaniero ĝi efikas. </p>

<h3 id="etenda-pasxo">Etenda paŝo [batalo]</h3>
<p> Vi povas ataki malamikojn ekster via kutima trafopovo. </p>
<p> <b>Kondiĉo:</b> Bazataka bono +6 </p>
<p> <b>Avantaĝo:</b> Vi povas etendi la trafopovon de viaj proksimaj atakoj je 1,5 metroj ĝis la fino de la rondo. Pro tio vi ricevas malbonon de -2 por via armaĵklaso ĝis la fino de la rondo. Vi devas elekti la talenton antaŭ atakoj estas faritaj. </p>

<h3 id="evitmovo">Evitmovo [batalo]</h3>
<p> Via trejnado kaj viaj refleksoj ebligas al vi rapide reagi al atakoj de viaj malamikoj. </p>
<p> <b>Kondiĉo:</b> LER 13</p>
<p> <b>Avantaĝo:</b> Vi ricevas evitmovan bonon de +1 por via AK. Se vi perdas vian LER-bonon por la armaĵklaso, tiam vi ankaŭ perdas la bonon de tiu talento.</p>

<h3 id="faligo-potenca">Faligo potenca [batalo]</h3>
<p> Vi povas fari atakojn kiel liberaj agoj kontraŭ malamikoj kiujn vi faligis.</p>
<p> <b>Kondiĉoj:</b>Defensiva batalmaniero, faligo progresita, BAB +6, INT 13 </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +2 por ĵetoj de faligo. Tiu bono validas aldone al la bono de la talento faligo progresita. Se vi faligas malamikon, okazatakoj povas esti farataj kontraŭ li.</p>
<p> <b>Kutime:</b> Kreaĵoj ne suferas okazatakon, se oni faligas ilin.</p>

<h3 id="faligo-progresita">Faligo progresita [batalo]</h3>
<p> Vi spertas pri surterigi viajn malamikojn.</p>
<p> <b>Kondiĉoj:</b>Defensiva batalmaniero, INT 13 </p>
<p> <b>Avantaĝo:</b> Se vi aplikas la batalmanovron faligo, vi ne provokas okazatakon. Krome vi ricevas bonon de +2 por ĵetoj per kiuj vi provas faligi vian malamikon. Se malamiko atakas vin per tiu batalmanovro, via batalmanovra defendo altiĝas je +2.</p>
<p> <b>Kutime:</b> Se vi aplikas la batalmanovron faligon, vi provokas okazatakon.</p>

<h3 id="fera-volo">Fera volo</h3>
<p> Vi pli facile rezistas mensinfluajn fortojn.</p>
<p> <b>Avantaĝo:</b> Vi ricevas por ĉiuj voloĵetoj bonon de +2.</p>

<h3 id="fera-volo-progresita">Fera volo progresita</h3>
<p> Via vigla prudento donas al vi rezistokapablon kontraŭ mensinfluaj atakoj.</p>
<p> <b>Kondiĝo:</b> Fera volo </p>
<p> <b>Avantaĝo:</b> Unufoje tage vi povas ripeti refleksĵeton. La decido apliki tiun talenton devas esti farita antaŭ vi malkovras la rezulton de via ĵeto. Se vi aplikas la talenton vi devas akcepti la duan rezulton eĉ se ĝi estas pli malbona ol la rezulto de la unua ĵeto.</p>

<h3 id="finto-potenca">Finto potenca [batalo]</h3>
<p> Vi spertas pri tio ke viaj amikoj troreagas al viaj atakoj</p>
<p> <b>Kondiĉoj:</b>Defensiva batalmaniero, finto progresita, BAB +6, INT 13 </p>
<p> <b>Avantaĝo:</b> Se vi uzas finton por ke la malamiko perdu sian LER-bonon, li ne nur perdas ĝin dum via posta atako sed ĝis la komenco de la sekvanta rondo. </p>
<p> <b>Kutime:</b> Kreaĵo kontraŭ kiu vi uzas finton, perdas sian LER-bonon dum via posta atako.</p>

<h3 id="finto-progresita">Finto progresita [batalo]</h3>
<p> Vi havas talenton trompi viajn malamikojn en la batalo.</p>
<p> <b>Kondiĉoj:</b>Defensiva batalmaniero, INT 13 </p>
<p> <b>Avantaĝo:</b> Vi povas fari blufoĵeton por apliki finton en la batalo kiel movagon.</p>
<p> <b>Kutime:</b> Finto en la batalo estas bazago.</p>

<h3 id="fulmaj-refleksoj">Fulmaj refleksoj</h3>
<p> Viaj refleksoj estas superaveraĝaj.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +2 por ĉiuj refleksĵetoj. </p>

<h3 id="fulmaj-refleksoj-progresitaj">Fulmaj refleksoj progresitaj</h3>
<p> <b>Kondiĉo:</b> Fulmaj refleksoj</p>
<p> <b>Avantaĝo:</b> Unufoje tage vi povas refari refleksĵeton. La decido apliki tiun talenton devas esti farita antaŭ vi malkovras la rezulton de via ĵeto. Se vi aplikas la talenton vi devas akcepti la duan rezulton eĉ se ĝi estas pli malbona ol la rezulto de la unua ĵeto.</p>

<table class="glita">
<caption>Tabelo: Gvidi</caption>
    <tr>
        <th rowspan="2">Valoro<br>por gvidi</th>
        <th rowspan="2">Nivelo de<br>sekvanto</th>
        <th colspan="6" class="sen-sub-linio">Nombro da disĉiploj laŭ nivelo</th>
    </tr>
    <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
    </tr>
    <tr>
        <td>1 aŭ malpli</td>
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
        <td>1</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>3</td>
        <td>2</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>4</td>
        <td>3</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
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
        <td>7</td>
        <td>5</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>8</td>
        <td>5</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>9</td>
        <td>6</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>10</td>
        <td>7</td>
        <td>5</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>11</td>
        <td>7</td>
        <td>6</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>12</td>
        <td>8</td>
        <td>8</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>13</td>
        <td>9</td>
        <td>10</td>
        <td>1</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>14</td>
        <td>10</td>
        <td>15</td>
        <td>1</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>15</td>
        <td>10</td>
        <td>20</td>
        <td>2</td>
        <td>1</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>16</td>
        <td>11</td>
        <td>25</td>
        <td>2</td>
        <td>1</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>17</td>
        <td>12</td>
        <td>30</td>
        <td>3</td>
        <td>1</td>
        <td>1</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>18</td>
        <td>12</td>
        <td>35</td>
        <td>3</td>
        <td>1</td>
        <td>1</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>19</td>
        <td>13</td>
        <td>40</td>
        <td>4</td>
        <td>2</td>
        <td>1</td>
        <td>1</td>
        <td>-</td>
    </tr>
    <tr>
        <td>20</td>
        <td>14</td>
        <td>50</td>
        <td>5</td>
        <td>3</td>
        <td>2</td>
        <td>1</td>
        <td>-</td>
    </tr>
    <tr>
        <td>21</td>
        <td>15</td>
        <td>60</td>
        <td>6</td>
        <td>3</td>
        <td>2</td>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td>22</td>
        <td>15</td>
        <td>75</td>
        <td>7</td>
        <td>4</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
    </tr>
    <tr>
        <td>23</td>
        <td>16</td>
        <td>90</td>
        <td>9</td>
        <td>5</td>
        <td>3</td>
        <td>2</td>
        <td>1</td>
    </tr>
    <tr>
        <td>24</td>
        <td>17</td>
        <td>110</td>
        <td>11</td>
        <td>6</td>
        <td>3</td>
        <td>2</td>
        <td>1</td>
    </tr>
    <tr>
        <td>25 aŭ pli</td>
        <td>17</td>
        <td>135</td>
        <td>13</td>
        <td>7</td>
        <td>4</td>
        <td>2</td>
        <td>2</td>
    </tr>
</table>

<h3 id="gvidi">Gvidi</h3>
<p>Vi gajnas disĉiplojn por viaj celoj kaj unu sekvanton kiu iradas kun vi al aventuroj.</p>
<p> <b>Kondiĉo:</b> Rolulnivelo +7 </p>
<p> <b>Avantaĝo:</b> Tiu talento ebligas al vi gajni fidelan sekvanton kaj aron da disĉiploj kiuj subtenas vin. La sekvanto kutime estas NLR kun klasniveloj kaj la disĉiploj estas malalt-nivelaj NLR-oj. La tabelo <i>Gvidi</i> indikas, sekvanton de kiu nivelo kaj kiom da disĉiploj vi povas varbi. </p>
<p> <b>Modifiloj por la talento gvidi:</b> Via valoro por gvidi estas influata de diversaj kaŭzoj kaj povas devii de la baza valoro (rolulnivelo + KAR-modifilo). Via reputacio (de la vidpunkto de la sekvanto aŭ la disĉiploj kiujn vi volas varbi) povas altigi aŭ malaltigi vian valoron de gvidi. </p>

<table>
    <tr>
        <th>Reputacio kiel gvidanto</th><th>Modifilo</th>
    <tr>
        <td>rigardata kiel legenda gvidanto</td><td>+2</td>
    </tr>
    <tr>
        <td>rigardata kiel honesta kaj justa</td><td>+1</td>
    </tr>
    <tr>
        <td>havas eksterordinarajn fortojn</td><td>+1</td>
    </tr>
    <tr>
        <td>rigardata kiel malsukcesa</td><td>-1</td>
    </tr>
    <tr>
        <td>rigardata kiel nealirebla</td><td>-1</td>
    </tr>
    <tr>
        <td>rigardata kiel kruela</td><td>-2</td>
    </tr>
</table>

<p> Se vi volas gajni sekvanton por vi, ankaŭ aliaj kaŭzoj povas valori: </p>

<table class="sen-sub-linio">
    <tr>
        <th>La gvidanto...</th><th>Modifilo</th>
    <tr>
        <td>havas konaton, specialan<br>rajdbeston aŭ bestkamaradon</td><td>-2</td>
    </tr>
    <tr>
        <td>varbas sekvanton<br>kun alia pensmaniero</td><td>-1</td>
    </tr>
    <tr>
        <td>kulpas pri la morto de sekvanto</td><td>-2 <sup>*</sup></td>
    </tr>
    <tr class="aldono">
        <td colspan="2"><sup>*</sup> Tiu valoro altiĝas kun ĉiu morta sekvanto.</td>
    </tr>
</table>

<p> Disĉiploj havas aliajn prioritatojn ol sekvantoj. Se vi volas gajni novan disĉiplon por vi, valoras la postaj modifiloj se ili estas aplikeblaj: </p>

<table>
    <tr>
        <th>La gvidanto...</th><th>Modifilo</th>
    </tr>
    <tr>
        <td>havas fortikaĵon, bazon de operacioj,<br>gilddomon aŭ similan</td><td>+2</td>
    </tr>
    <tr>
        <td>ĉiam vojaĝas de unu loko al alia</td><td>-1</td>
    </tr>
    <tr>
        <td>kulpas pri la morto de aliaj diĉiploj</td><td>+2</td>
    </tr>
</table>

<p> <b>Valoro por gvidi:</b> Via baz valoro por gvidi egalas al vi nivelo + vi KAR-modifilo. Por tre malaltaj karismaj valoroj la tabelo ankaŭ montras tre malaltajn valorojn por gvidi. Tamen vi devas esti almenaŭ en la 7a nivelo por elekti la talenton gvidi. Kromaj kaŭzoj povas modifi vian valoron por gvidi kiel deskribata antaŭe.</p>
<p> <b>Nivelo de sekvanto:</b> Vi povas gajni unu sekvanton por vi kiu havas maksimume tiun nivelon. Sendepende de via valoro por gvidi vi nur povas varbi sekvanton kies nivelo estas minimume du niveloj sub via nivelo. La sekvanto devus esti ekipita per ekipaĵo kiu kongruas al lia nivelo (vidu la ĉapitron <a href="../gvidi_la_ludon">Gvidi la ludon</a>). La sekvanto povas aparteni al ĉiu popolo kaj al ĉiu klaso. La pensmaniero de la sekvanto rajtas esti mala ne sur la akso laŭleĝa-ĥaosa nek sur la akso bona-malbona. Se vi rekrutas sekvanton kiu ne havas vian pensmanieron vi ricevas malbonon de -1 por via valoro por gvidi. </p>
<p> La sekvanto ne kalkuliĝas kiel grupmembro, se la spertpoentoj estas kalkulata por la grupo. Anstataŭe dividu la nivelon de via sekvanto per via nivelo. Multipliki tion per la spertpoentoj kiujn vi ricevas kaj aldonu tion al la spertpoentoj de via sekvanto. </p>
<p> Kiam la sekvanto havas sufiĉe da spertpoentoj por altiĝi al nivelo sub via propra nivelo, li ne altiĝas. Anstataŭe liaj spertpoentoj stagnas je unu malpli ol necesas por altiĝi.</p>
<p> <b>Nombro da disĉiploj laŭ nivelo:</b> Vi povas gvidi maksimume la indikatan nombron da disĉiploj laŭ niveloj. Disĉiploj agas simile kiel sekvantoj, tamen ili estas kutime NLR de malalta nivelo. Ĉar ili estas plejofte minimume kvin niveloj sub via nivelo, ili nur malofte taŭgas por la batalo. </p>
<p> Disĉiploj ne ricevas spertpoentojn kaj tial ankaŭ ne ordinare altiĝas je niveloj. Tamen se vi altiĝas al nova nivelo, vi povas determini per la tabelo ĉu via disĉiplaro kreskis, kie kelkaj novaj disĉiploj povas havi pli altan nivelon ol la antaŭaj. Ne uzu la tabelon por determini nivelaltiĝon de via sekvanto ĉar la sekvanto mem ricevas spertpoentojn. </p>

<h3 id="kapablecofokuso">Kapablecofokuso</h3>
<p> Elektu kapablecon. Vi aparte spertas pri tiu kapableco.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +3 por ĉiuj ĵetoj de tiu kapableco. Se vi havas minimume 10 rangoj en tiu kapableco, la bono altiĝas al +6.</p>
<p> <b>Speciale:</b> Vi povas elekti tiun talenton plurfoje. La efiko ne estas akumula. Ĉiam kiam vi elektas tiun talenton, ĝi efikas al alia kapableco.</p>

<h3 id="kontrauxatako">Kontraŭatako</h3>
<p> Vi povas trafi malamikojn kiuj atakas vin per pli granda trafdistanco tiel ke vi atakas iliajn ekstremaĵojn aŭ armilojn. </p>
<p> <b>Avantaĝo:</b> Vi povas prepari atakon kontraŭ iu malamiko kiu atakas vin en proksimbatalo. Tio ankaŭ funkcias se li estas ekster via trafpovo. </p>

<h3 id="kirloventa-atako">Kirloventa atako [batalo]</h3>
<p> Kiel derviŝo vi batas ĉiujn malamikojn en via trafopovo.</p>
<p> <b>Kondiĉoj:</b> Defensiva batalmaniero, Evitmovo, Movebleco, Dancetanta atako, LER 13, INT 13, BAB +4 </p>
<p> <b>Avantaĝo:</b> Se vi faras plenan atakon, vi povas rezigni pri viaj normalaj atakoj kaj anstataŭe efektvigi unu solan proksimatakon per plena bazataka bono kontraŭ ĉiuj malamikoj en via trafopovo. Kontraŭ ĉiu malamiko vi devas fari atakĵeton. Se vi uzas la talenton kirloventan atakon, vi krome rezignas ĉiun bonon kaj kroman atakon, kiun vi havas per aliaj talentoj, sorĉoj aŭ eblecoj.</p>

<h3 id="langolerteco">Langolerteco</h3>
<p> Vi kapablas influi la sintenon de aliaj kaj povas konvinki ilin per timigado. </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +2 por ĵetoj de diplomatio kaj timigi. Se vi havas minimume 10 rangoj en unu el tiuj kapablecoj, la bono por tiu kapableco altiĝas al +4. </p>

<h3 id="lerta-movigxo">Lerta moviĝo</h3>
<p> Vi facile povas superi unu obstaklon.</p>
<p> <b>Kondiĉo:</b> LER 13</p>
<p> <b>Avantaĝo:</b> Kiam vi moviĝas, vi povas moviĝi trans 1,5 metroj da malfacila tereno kiel ĝi estus normala tereno. La talento ebligas al vi fari 1,5 metran paŝon en malfacilan terenon.</p>

<h3 id="lertega-movigxo">Lertega moviĝo</h3>
<p> Vi facile moviĝas tra kaj trans obstaklojn. </p>
<p> <b>Kondiĉoj:</b> LER 15, lerta moviĝo</p>
<p> <b>Avantaĝo:</b> Kiam vi moviĝas, vi povas moviĝi trans 4,5 metroj da malfacila tereno kiel ĝi estus normala tereno. La efiko de la talento estas akumula kun la talento lerta moviĝo (kaj permesas al vi normale moviĝi trans 6 metroj da malfacila tereno po rondo.</p>

<h3 id="lertaj-manoj">Lertaj manoj</h3>
<p> Vi havas aparte lertajn manojn.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +2 por kapablecĵetoj de malfunkciigi mekanismon kaj fingrolerteco. Se vi havas pli ol 10 rangoj en unu kapableco, la bono altiĝas ĉe tiu kapableco al +4. </p>

<h3 id="lertaj-manovroj">Lertaj manovroj</h3>
<p> Vi efektivigas batalmanovron per rapideco anstataŭ brutala forto.</p>
<p> <b>Avantaĝo:</b> Anstataŭ vian fortobonon vi povas aldoni vian lertecbonon al atak- kaj grandecbono por kalkuli vian bonon por batalmanovroj (vidu ĉapitron <a href="../batalo">Batalo</a>).</p>
<p> <b>Kutime:</b> Vi aldonas vian fortobonon al la atak- kaj gandecbono, se vi kalkulas la batalmanovran bonon. </p>

<h3 id="movebleco">Movebleco [batalo]</h3>
<p> Vi povas facile movi tra danĝera proksimbatalon. </p>
<p> <b>Kondiĉoj:</b> LER 13, evitmovo </p>
<p> <b>Avantaĝo:</b> Vi ricevas evitmovan bonon de +4 por via AK kontraŭ okazatakoj kaŭzitaj de via movo en minacata kampo aŭ ĉar vi elmoviĝas el minacata kampo. Se vi perdas vian lertecbonon por la armaĵklaso, tiam vi ankaŭ perdas la evitmovajn bonojn. </p>
<p> Alie kiel plejmultaj tipoj de bonoj, evitmovaj bonoj estas akumulaj. </p>

<h3 id="preterrajdante-ataki">Preterrajdante ataki [batalo]</h3>
<p> Se vi atakas sur rajdbesto, vi povas moviĝi, bati malamikon kaj poste plumoviĝi. </p>
<p> <b>Kondiĉoj:</b> 1 rango en rajdi, rajdante batali </p>
<p> <b>Avantaĝo:</b> Se vi rajdante faras sturmatakon, vi povas - kiel kutime du sturmatako - moviĝi kaj ataki, poste tamen vi povas plumoviĝi en la direkton de via sturmatako. La tuta moviĝo ne rajtas superi vian duoblan moviĝorapidecon. Ne vi nek via rajdbesto provokas okazatakon de la celo de via atako. </p>

<h3 id="rajdante-batali">Rajdante batali [batalo]</h3>
<p> Vi estas sperta rajdisto, kaj lerte gvidas la rajdbeston. </p>
<p> <b>Kondiĉo:</b> 1 rango en rajdi </p>
<p> <b>Avantaĝo:</b> Se via rajdbesto estas trafita dum batalo, vi povas unufoje en la rondo fari ĵeton de rajdi (kiel subita ago), por nuligi la trafon. La trafo nuliĝas se la ĵeto de rajdi estas pli alta ol la atakĵeto de la malamiko.</p>

<h3 id="rajdante-distancataki">Rajdante distancataki [batalo]</h3>
<p> Vi spertas pri distancataki rajdante.</p>
<p> <b>Kondiĉoj:</b> 1 rango en rajdi, rajdante batali</p>
<p> <b>Avantaĝo:</b> La malbono kiun vi suferas, se vi uzas distancarmilon dum rajdi, duoniĝas: -2 anstataŭ -4 se via rajdbesto moviĝas per duobla moviĝorapideco kaj -4 anstataŭ -8 se via rajdbesto kuras.</p>

<h3 id="rapida-kiel-la-fulmo">Rapida kiel la fulmo [batalo]</h3>
<p> Vi moviĝas tiel rapide ke preskaŭ ne eblas por viaj malamikoj trafi vin. </p>
<p> <b>Kondiĉoj:</b> LER 17, evitmovo, rapida kiel la vento, bazataka bono +11 </p>
<p> <b>Avantaĝo:</b> Se vi aplikas duoblan moviĝon aŭ retiriĝon dum via vico, vi ricevas kamufladon de 50% dum unu rondo.</p>

<h3 id="rapida-kiel-la-vento">Rapida kiel la vento [batalo]</h3>
<p> Viaj nekalkuleblaj movoj malfaciligas al via malamiko koni vian eksaktan pozicion</p>
<p> <b>Kondiĉoj:</b> LER 15, evitmovo, bazataka bono +6 </p>
<p> <b>Avantaĝo:</b> Se vi moviĝas pli ol 1,5 m dum via vico, vi ricevas kamufladon de 20% kontraŭ distancatakoj dum unu rondo.</p>

<h3 id="sinhardado">Sinhardado</h3>
<p> Vi havas plibonan fizikan eltenpovon. </p>
<p> <b>Avantaĝo:</b> Vi ricevas 3 vivpoentojn kaj unu vivpoenton po ĉiu vivkubeto pli ol 3. Do se vi havas pli ol 3 vivkubetojn vi ricevas kun ĉiu nova vivkubeto unu plian vivpoenton (ekz. je nivelaltiĝo). </p>

<h3 id="senarmigo-potenca">Senarmigo potenca [batalo]</h3>
<p> Vi povas senarmigi malamikon tiel kiel lia armilo estas ĵetita malproksimen.</p>
<p> <b>Kondiĉoj:</b>Defensiva batalmaniero, senarmigo progresita, BAB +6, INT 13 </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +2 por ĵetoj de senarmigo. Tiu bono validas aldone al la bono de la talento senarmigo progresita. Se vi sukcese senarmigas malamikon, lia armilo estas ĵetita 5 m en hazardan direkton de sia antaŭa posedanto.</p>
<p> <b>Kutime:</b> Perditaj armiloj per senarmigo surteriĝas je la piedoj de la senarmigita kreaĵo.</p>

<h3 id="senarmigo-progresita">Senarmigo-progresita [batalo]</h3>
<p> Vi spertas pri forbati la armilon el la mano de via malamiko.</p>
<p> <b>Kondiĉoj:</b> Defensiva batalmaniero, INT 13</p>
<p> <b>Avantaĝo:</b> Se vi aplikas la batalmanovron senarmigi, vi ne provokas okazatakon. Krome vi ricevas bonon de +2 por viaj ĵetoj per kiuj vi provas senarmigi la malamikon. Se kontraŭulo atakas vin per tiu batalmanovro, via batalmanovra defendo altiĝas je +2.</p>
<p> <b>Kutime:</b> Se vi aplikas la batalmanovron senarmigi, vi provokas okazatakon. </p>

<h3 id="superfortigaj-sorcxoj">Superfortigaj sorĉoj</h3>
<p> Viaj sorĉoj superas la sorĉreziston de viaj celoj pli facile ol kutime. </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +2 por sorĉniveloĵetoj (1k20 + sorĉnivelo) per kiuj vi provas superi la sorĉreziston de kreaĵoj.</p>

<h3 id="superfortigaj-sorcxoj-potencaj">Superfortigaj sorĉoj potencaj</h3>
<p> Viaj sorĉoj superas sorĉreziston pli facile ol kutime.</p>
<p> <b>Kondiĉo:</b> Superfortigaj sorĉoj </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon de +2 por sorĉniveloĵetoj (1k20 + sorĉnivelo) per kiuj vi provas superi la sorĉreziston de kreaĵoj. Tiu bono aldoniĝas al la bono de la talento superfortigaj sorĉoj.</p>

<h3 id="superrajdi">Superrajdi [batalo]</h3>
<p> Vi povas superrajdi viajn malamikojn.</p>
<p> <b>Kondiĉoj:</b> 1 rango en rajdi, rajdante batali</p>
<p> <b>Avantaĝo:</b> Se vi rajdante provas superkuri malamikon, la celo ne povas eviti vin. Via rajdbesto povas hufbati ĉiun kontraŭulon kiun vi faligis. Por tio ĝi ricevas la normalan bonon de +4 kontraŭ surtere kuŝantaj malamikoj. </p>

<h3 id="timiga-forto">Timiga forto [batalo]</h3>
<p> Via fizika forto aspektas timiga.</p>
<p> <b>Avantaĝo:</b> Adiciu vian FOR-modifilon aldone al via KAR-modifilo por ĵetoj de timigi.</p>

<?php require '../../pagxpiedo.php' ?>
