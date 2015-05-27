<?php require '../../pagxkapo.php' ?>

<title>Talentoj</title>

<h2>Talentdeskribo</h2>

<p> Talentoj estas listigitaj en la sekvanta tabelo. Atentu ke la kondiĉoj kaj avantaĝoj aperas en mallonga formo. En la talentdeskribo vi trovas la kompletajn detalojn.</p>

<p> La talentoj estas prezentataj laŭ la sekvanta formato: </p>

<p> <b>Talentnomo [talenttipo]:</b> La talentnomo ankaŭ indikas pri kiu talenttipo temas. Poste sekvas mallonga priskribo. </p>

<p> <b>Kondiĉoj:</b> Tiu paragrafo klarigas kiuj antaŭkondiĉoj estas bezonataj. Tio povas esti minimuma atributvaloro, unu aŭ pluraj aliaj talentoj, minimuma bazataka bono, minimuma kvanto da rangoj en unu aŭ pluraj kapablecoj, kaj tiel plu. Se talento ne havas kondiĉojn, tiu paragrafo malestas. Talento povas havi plurajn kondiĉojn. </p>

<p> <b>Avantaĝo:</b> Klarigas kiel la talento utilas al la rolulo. La avantaĝoj de la talento nur estas akumulaj se la deskribo mencias tion. </p>

<p> <b>Kutime:</b> Priskribas la restriktojn kiuj validas por roluloj sen tiu talento. Se la nehavo de la talento ne signifas specialan malavantaĝon, tiu paragrafo ne estas.

<p> <b>Specife:</b> Kromaj nekutimaj informoj pri la talento. </p>

<table>
    <caption>Tabelo: Talentoj</caption>
    <col width="25%">
    <col width="25%">
    <col width="50%">
    <thead>
        <tr>
            <th>Talento</th>
            <th>Kondiĉoj</th>
            <th>Avantaĝoj</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="3"><sup>*</sup> Tiu talento estas batalotalento kaj povas esti elektita de la batalisto kiel kroma talento.</td>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td><a href="#akrobatisto">Akrobatisto</a></td>
            <td>-</td>
            <td>Bono +2 por ĵetoj de akrobataĵo kaj flugado</td>
        </tr>
        <tr>
            <td><a href="#apudsekvi">Apudsekvi</a><sup>*</sup></td>
            <td>BAB +1</td>
            <td>Kvinfut-paŝo kiel subita agoj</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#arkana-armajxotrejnado">Arkana armaĵotrejnado</a><sup>*</sup></td>
            <td>Sperto kun armaĵoj (malpezaj), sorĉnivelo 3</td>
            <td>Reduktas la probablon por arkana sorĉfuŝo je 10%</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#arkana-armajxomajstro">Arkana armaĵomajstro</a><sup>*</sup></td>
            <td>Arkana armaĵotrejnado, sperto kun armaĵoj (mezpezaj), sorĉnivelo 7</td>
            <td>Reduktas la probablon por arkana sorĉfuŝo je 20%</td>
        </tr>
        <tr>
            <td><a href="#arkana-bato">Arkana bato</a></td>
            <td>Ebleco efektivigi arkanajn sorĉojn</td>
            <td>Damaĝo +1, armiloj estas traktataj kiel magiaj</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#armilofokuso">Armilofokuso</a><sup>*</sup></td>
            <td>Sperto kun armiloj, BAB +1</td>
            <td>Atakbono +1 por elektita armilo</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#armilofokuso-potenca">Armilofokuso potenca</a><sup>*</sup></td>
            <td>Armilofokuso, BAT 8</td>
            <td>Plia atakbono +1 por elektita armilo</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#armilospecialigxo">Armilospecialiĝo</a><sup>*</sup></td>
            <td>Armilofokuso, BAT 4</td>
            <td>Damaĝobono +2 por elektita armilo</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#armilospecialigxo-potenca">Armilospecialiĝo potenca</a><sup>*</sup></td>
            <td>Armilospecialiĝo, BAT 12</td>
            <td>Plia damaĝobono +2 por elektita armilo</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#minaca-prezentado">Minaca prezentado</a><sup>*</sup></td>
            <td>Armilofokuso</td>
            <td>Senkuraĝigi ĉiujn malamikojn en la ĉirkaŭaĵo de 9 m</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#disbati-defendon">Disbati defendon</a><sup>*</sup></td>
            <td>Minaca defendon, BAB +6</td>
            <td>Timigitaj malamikoj estas sur malĝusta piedo</td>
        </tr>
        <tr>
            <td class="desxovo-3"><a href="#mortiga-bato">Mortiga bato</a><sup>*</sup></td>
            <td>Disbati defendon, armilofokuso potenca, BAB +11</td>
            <td>Duobla damaĝo, sanganta (1 KO)</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#trarompa-bato">Trarompa bato</a><sup>*</sup></td>
            <td>armilofokuso, BAT 12</td>
            <td>Atakoj ignoras 5 poentojn de damaĝoredukto</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-2"><a href="#trarompa-bato-potenca">Trarompa bato potenca</a><sup>*</sup></td>
            <td>Trarompa bato, BAT 16</td>
            <td>atakoj ignoras 10 poentojn de damaĝoredukto</td>
        </tr>
        <tr>
            <td><a href="#armoruzeco">Armoruzeco</a><sup>*</sup></td>
            <td>-</td>
            <td>LER-modifilo anstataŭ FOR-modifilo ĉe atakĵetoj per malpeza armilo</td>
        </tr>
        <tr>
            <td><a href="#atleto">Atleto</a></td>
            <td>-</td>
            <td>Bono +2 por ĵetoj de grimpi aŭ naĝi</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#batalo-per-du-armiloj">Batalo per du armiloj</a><sup>*</sup></td>
            <td>LER 15</td>
            <td>Malbonoj de batalo per du manoj estas reduktitaj je +2</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#batalo-per-du-armiloj-progresita">Batalo per du armiloj progresita</a><sup>*</sup></td>
            <td>LER 17, batalo per du armiloj, BAB +6</td>
            <td>Plia atako per dua mano</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#batalo-per-du-armiloj-potenca">Batalo per du armiloj potenca</a><sup>*</sup></td>
            <td>LER 19, batalo per du armiloj progresita, BAB +11</td>
            <td>Tria atako per dua mano</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#defendo-per-du-armiloj">Defendo per du armiloj</a><sup>*</sup></td>
            <td>Batalo per du armiloj</td>
            <td>Ŝildbono +1 dum la batalo per du armiloj</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#duobla-trancxo">Duobla tranĉo</a><sup>*</sup></td>
            <td>Batalo per du armiloj</td>
            <td>Plena fortomodifilo por damaĝo de la armilo de dua mano</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-2"><a href="#desxiri-per-du-armiloj">Deŝiri per du armiloj</a><sup>*</sup></td>
            <td>Duobla tranĉo, batalo per du armiloj progresita, BAB +11</td>
            <td>Deŝiranta atako per du armiloj</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#batalrefleksoj">Batalrefleksoj</a><sup>*</sup></td>
            <td>-</td>
            <td>Aldonaj okazatakoj</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#neniu-preteriras">Neniu preteriras</a><sup>*</sup></td>
            <td>Batalrefleksoj</td>
            <td>Malhelpi malamikojn iri preter vi</td>
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
            <td>Bono +2 por faligo, neniu okazatako</td>
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
            <td>Bono +2 por senarmigi, neniu okazatako</td>
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
            <td>Bono +4 por ĵetoj por eviti nemortigan damaĝon.</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#cxioeltena">Ĉioeltena</a></td>
            <td>Eltenema</td>
            <td>Aŭtomate stabila kaj gardi konscion sub 0 VP</td>
        </tr>
        <tr>
            <td><a href="#emo-por-magio">Emo por magio</a></td>
            <td>-</td>
            <td>Bono +2 por ĵetoj de sorĉkono kaj uzi magian objekton</td>
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
            <td><a href="#enfokusigi-progresita">Enfokusigi progresita</a></td>
            <td>Klasebleco enfokusigi energion</td>
            <td>Bono +2 por MFG de enfokusigi energion</td>
        </tr>
        <tr>
            <td><a href="#enfokusigi-selektive">Enfokusigi selektive</a></td>
            <td>KAR 13, klasebleco enfokusigi energion</td>
            <td>Elekti kiun trafas la enfokusigitan energion</td>
        </tr>
        <tr>
            <td><a href="#etenda-pasxo">Etenda paŝo</a><sup>*</sup></td>
            <td>BAB +6</td>
            <td>Preni aramaĵmalbonon -2 por ataki distance</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#evitmovo">Evitmovo</a><sup>*</sup></td>
            <td>LER 13</td>
            <td>Evitmovobono +1 por la AK</td>
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
        <tr>
            <td><a href="#facilmova">Facilmova</a></td>
            <td>-</td>
            <td>Bazmoviĝrapideco altiĝas je 1,5 metroj</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#fera-volo">Fera volo</a></td>
            <td>-</td>
            <td>Bono +2 por voloĵetoj</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#fera-volo-progresita">Fera volo progresita</a></td>
            <td>Fera volo</td>
            <td>Unufoje tage ripeti voloĵeton</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#fulmaj-refleksoj">Fulmaj refleksoj</a></td>
            <td>-</td>
            <td>Bono +2 por refleksĵetoj</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#fulmaj-refleksoj-progresitaj">Fulmaj refleksoj progresitaj</a></td>
            <td>Fulmaj refleksoj</td>
            <td>Unufoje tage refari refleksĵeton</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#granda-persisteco">Granda persisteco</a></td>
            <td>-</td>
            <td>Bono +2 por por ĵetoj de persisteco</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#granda-persisteco-progresita">Granda persisteco progresita</a></td>
            <td>Granda persisteco</td>
            <td>Bono +2 por por ĵetoj de persisteco</td>
        </tr>
        <tr>
            <td><a href="#gvidi">Gvidi</a></td>
            <td>Rolulnivelo +7</td>
            <td>Gajni por vi sekvanton kaj disĉiplojn</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#impeta-atako">Impeta atako</a><sup>*</sup></td>
            <td>FOR 13, BAB +1</td>
            <td>Ŝanĝi atakbonon kontraŭ damaĝo en proksimbatalo</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#duobla-bato">Duobla bato</a><sup>*</sup></td>
            <td>Impeta atako</td>
            <td>Aldona atako post sukcesa unua bato</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#cxirkauxbato">Ĉirkaŭbato</a><sup>*</sup></td>
            <td>Duobla bato, BAB +4</td>
            <td>Aldona atako post ĉiu sukcesa bato</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#frakasi-objekton-progresite">Frakasi objekton progresite</a><sup>*</sup></td>
            <td>Impeta atako</td>
            <td>Bono +2 por frakasi objekton, neniu okazatako</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#frakasi-objekton-potence">Frakasi objekton potence</a><sup>*</sup></td>
            <td>Frakasi objekton progresite, BAB +6</td>
            <td>Damaĝo de frakasi objekton transigas al la malamiko</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#pusxatako-progresita">Puŝatako progresita</a><sup>*</sup></td>
            <td>Impeta atako</td>
            <td>Bono +2 por puŝatako, neniu okazatako</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#pusxatako-potenca">Puŝatako potenca</a><sup>*</sup></td>
            <td>Puŝatako progresita, BAB +6</td>
            <td>Celoj de puŝatako provokas okazatakoj</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#superkuri-progresite">Superkuri progresite</a><sup>*</sup></td>
            <td>Impeta atako</td>
            <td>Bono +2 por superkuri, neniu okazatako</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-2"><a href="#superkuri-potence">Superkuri potence</a><sup>*</sup></td>
            <td>Superkuri potence</td>
            <td>Superkuritaj malamikoj kaŭzas okazatakojn</td>
        </tr>
        <tr>
            <td><a href="#improvizata-distancatako">Improvizata distancatako</a><sup>*</sup></td>
            <td>-</td>
            <td>Neniuj malbonoj por improvizataj distancarmiloj</td>
        </tr>
        <tr>
            <td><a href="#improvizata-proksimatako">Improvizata proksimatako</a><sup>*</sup></td>
            <td>BAB +4</td>
            <td>Neniuj malbonoj por improvizataj proksimarmiloj</td>
        </tr>
        <tr>
            <td><a href="#iniciato-progresita">Iniciato progresita</a><sup>*</sup></td>
            <td>-</td>
            <td>Bono +4 por inciatoĵetoj</td>
        </tr>
        <tr>
            <td><a href="#inklino-al-bestoj">Inklino al bestoj</a></td>
            <td>-</td>
            <td>Bono +2 por ĵetoj de interrilati kun bestoj kaj rajdi</td>
        </tr>
        <tr>
            <td><a href="#intimulo-progresita">Intimulo progresita</a></td>
            <td>Povas havi kunulon, vidu talenton</td>
            <td>Ricevi pli potencan kunulon</td>
        </tr>
        <tr>
            <td><a href="#kapablecofokuso">Kapablecofokuso</a></td>
            <td>-</td>
            <td>Bono +3 por unu kapableco (+6 ekde 10 rangoj)</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#kernpafo">Kernpafo</a><sup>*</sup></td>
            <td>-</td>
            <td>Bono +1 por atak- kaj damaĝoĵetoj kontraŭ celoj ene de 9 m </td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#distancpafo">Distancpafo</a><sup>*</sup></td>
            <td>Kernpafo</td>
            <td>Distancmalbonoj duoniĝas</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#pafi-kurante">Pafi kurante</a><sup>*</sup></td>
            <td>LER 13, lerta moviĝo, kernpafo, BAB +4</td>
            <td>Distancatako eblas iam ajn dum moviĝo</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#preciza-pafo">Preciza pafo</a><sup>*</sup></td>
            <td>Kernpafo</td>
            <td>Neniu malbono por pafo en proksimbatalo</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#preciza-pafo-progresita">Preciza pafo progresita</a><sup>*</sup></td>
            <td>LER 19, preciza pafo, BAB +11</td>
            <td>Ignori malpli ol 100% protekto/kamuflado ĉe distancatakoj</td>
        </tr>
        <tr>
            <td class="desxovo-3"><a href="#punktpreciza-celado">Punktpreciza celado</a><sup>*</sup></td>
            <td>Preciza pafo progresita, BAB +16</td>
            <td>Neniu ŝildo- aŭ armaĵbono kontraŭ distancatako</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#rapide-pafi">Rapide pafi</a><sup>*</sup></td>
            <td>LER 13, kernpafo</td>
            <td>Plia distancatako</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-2"><a href="#plura-pafado">Plura pafado</a><sup>*</sup></td>
            <td>LER 17, rapide pafi, BAB +6</td>
            <td>Pafi du sagojn samtempe</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#koncentrita-bato">Koncentrita bato</a><sup>*</sup></td>
            <td>BAB +6</td>
            <td>Duobla damaĝo ĉe sola atako</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#koncentrita-bato-progresita">Koncentrita bato progresita</a><sup>*</sup></td>
            <td>Koncentrita bato, BAB +11</td>
            <td>Triobla damaĝo ĉe sola atako</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-2"><a href="#koncentrita-bato-potenca">Koncentrita bato potenca</a><sup>*</sup></td>
            <td>Koncentrita bato progresita, BAB +16</td>
            <td>Kvarobla damaĝo ĉe sola atako</td>
        </tr>
        <tr>
            <td><a href="#kontrauxatako">Kontraŭatako</a><sup>*</sup></td>
            <td>BAB +11</td>
            <td>Ataki malamikon, kiam ili atakas per trafdistanco</td>
        </tr>
        <tr>
            <td><a href="#kontrauxsorcxo-progresita">Kontraŭsorĉo progresita</a></td>
            <td>-</td>
            <td>Ĉiu sorĉo de sama skolo de magio taŭgas kiel kontraŭsorĉo</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#kritika-trafo-fokuso">Kritika trafo fokuso</a><sup>*</sup></td>
            <td>BAB +9</td>
            <td>Bono +4 por konfirmi kritikan trafon</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#kritika-trafo-majstreco">Kritika trafo majstreco</a><sup>*</sup></td>
            <td>Kritika trafo fokuso, du ajnaj kritika trafo talentoj, BAT 14</td>
            <td>Uzi du efikojn ĉe kritikaj trafoj</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#kritika-trafo-blinda">Kritika trafo (blinda)</a><sup>*</sup></td>
            <td>Kritika trafo fokuso, BAB +15</td>
            <td>Celo estas blinda ĉe kritika trafo</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#kritika-trafo-elcxerpita">Kritika trafo (elĉerpita)</a><sup>*</sup></td>
            <td>Kritika trafo fokuso, BAB +13</td>
            <td>Celo estas elĉerpita ĉe kritika trafo</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#kritika-trafo-senforta">Kritika trafo (senforta)</a><sup>*</sup></td>
            <td>Kritika trafo fokuso, kritika trafo (elĉerpita), BAB +15</td>
            <td>Celo estas senforta ĉe kritika trafo</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#kritika-trafo-malsaneta">Kritika trafo (malsaneta)</a><sup>*</sup></td>
            <td>Kritika trafo fokuso, BAB +11</td>
            <td>Celo estas malsaneta ĉe kritika trafo</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#kritika-trafo-sxanceligxanta">Kritika trafo (ŝanceliĝanta)</a><sup>*</sup></td>
            <td>Kritika trafo fokuso, BAB +13</td>
            <td>Celo estas ŝanceliĝanta ĉe kritika trafo</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#kritika-trafo-svenanta">Kritika trafo (svenanta)</a><sup>*</sup></td>
            <td>Kritika trafo fokuso, kritika trafo (ŝanceliĝanta), BAB +17</td>
            <td>Celo estas svenanta ĉe kritika trafo</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#kritika-trafo-sanganta">Kritika trafo (sanganta)</a><sup>*</sup></td>
            <td>Kritika trafo fokuso, BAB +11</td>
            <td>Celo estas sanganta ĉe kritika trafo</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#kritika-trafo-surda">Kritika trafo (surda)</a><sup>*</sup></td>
            <td>Kritika trafo fokuso, BAB +13</td>
            <td>Celo estas surda ĉe kritika trafo</td>
        </tr>
        <tr>
            <td><a href="#kritika-trafo-progresita">Kritika trafo progresita</a><sup>*</sup></td>
            <td>Sperto kun armilo, BAB +8</td>
            <td>Duobligas ŝancon por kritika trafo de unu armilo</td>
        </tr>
        <tr>
            <td><a href="#kuri">Kuri</a></td>
            <td>-</td>
            <td>Kuri per kvinobla moviĝrapideco</td>
        </tr>
        <tr>
            <td><a href="#langolerteco">Langolerteco</a></td>
            <td>-</td>
            <td>Bono +2 por ĵetoj de diplomatio kaj timigi</td>
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
            <td>Bono +2 por ĵetoj de malfunkciigi mekanismon kaj fingrolerteco</td>
        </tr>
        <tr>
            <td><a href="#lertaj-manovroj">Lertaj manovroj</a></td>
            <td>-</td>
            <td>Aldoni vian LER-bonon al via BMB</td>
        </tr>
        <tr>
            <td><a href="#majstra-metiisto">Majstra metiisto</a></td>
            <td>5 rangoj en metio- aŭ profesiokapableco</td>
            <td>Krei magiajn objektojn kiel ne sorĉkonanto</td>
        </tr>
        <tr>
            <td><a href="#majstro-de-armilimprovizado">Majstro de armilimprovizado</a><sup>*</sup></td>
            <td>Improvizata distancatako aŭ improvizata proksimatako, BAB +8</td>
            <td>Igi improvizatan armilon mortiga armilo</td>
        </tr>
        <tr>
            <td><a href="#malmortulojn-forpeli">Malmortulojn forpeli</a></td>
            <td>Klakapableco enfokusigi pozitivan energion</td>
            <td>Enfokusigi energion utilas por forpeli malmortulojn</td>
        </tr>
        <tr>
            <td><a href="#malmortulojn-komandi">Malmortulojn komandi</a></td>
            <td>Klakapableco enfokusigi negativan energion</td>
            <td>Enfokusigi energion utilas por kontroli malmortulojn</td>
        </tr>
        <tr>
            <td><a href="#mortiga-precizeco">Mortiga precizeco</a><sup>*</sup></td>
            <td>LER 13, BAB +1</td>
            <td>Ŝanĝi atakbonon de distancbatalo al damaĝo</td>
        </tr>
        <tr>
            <td><a href="#plia-barda-prezentado">Plia barda prezentado</a></td>
            <td>Klasebleco bardoprezentado</td>
            <td>Uzi bardan prezentadon por 6 pliaj rondoj ĉiutage</td>
        </tr>
        <tr>
            <td><a href="#plia-batalekstazo">Plia batalekstazo</a></td>
            <td>Klasebleco batalekstazo</td>
            <td>Uzi batalekstazon por 6 pliaj rondoj ĉiutage</td>
        </tr>
        <tr>
            <td><a href="#plia-enfokusigi-energion">Plia enfokusigi energion</a></td>
            <td>Klasebleco enfokusigi energion</td>
            <td>Enfokusigi energion du pliajn fojojn ĉiutage</td>
        </tr>
        <tr>
            <td><a href="#plia-graco">Plia graco</a></td>
            <td>Klasebleco graco</td>
            <td>Surmeti manon havas unu plian gracon</td>
        </tr>
        <tr>
            <td><a href="#plia-ki">Plia Ki</a></td>
            <td>Klasebleco Ki-provizo</td>
            <td>Ki-provizo altiĝas je du poentoj</td>
        </tr>
        <tr>
            <td><a href="#plia-surmeti-manon">Plia surmeti manon</a></td>
            <td>Klasebleco surmeti manon</td>
            <td>Surmeti manon du pliajn fojojn ĉiutage</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#rajdante-batali">Rajdante batali</a><sup>*</sup></td>
            <td>1 rango en rajdi</td>
            <td>Atakoj al la rajdbesto povas esti evitataj per ĵeto de rajdi</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#deseligi">Deseligi</a><sup>*</sup></td>
            <td>Rajdante batali, impeta atako, puŝatako progresita, FOR 13</td>
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
            <td><a href="#rapida-armilpretigo">Rapida armilpretigo</a><sup>*</sup></td>
            <td>BAB +1</td>
            <td>Elingigi armilon per libera ago</td>
        </tr>
        <tr>
            <td><a href="#rapide-resxargi">Rapide reŝargi</a><sup>*</sup></td>
            <td>Sperto kun armiloj (arbaletso)</td>
            <td>Reŝargi rapide arbaleston</td>
        </tr>
        <tr>
            <td><a href="#ruzeco">Ruzeco</a></td>
            <td>-</td>
            <td>Bono +2 por ĵetoj de malkateni kaj sekreteco</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#senarma-bato-progresita">Senarma bato progresita</a><sup>*</sup></td>
            <td>-</td>
            <td>Esti ĉiam armita</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#luktado-progresita">Luktado progresita</a><sup>*</sup></td>
            <td>LER 13, senarma bato progresita</td>
            <td>Bono +2 por luktoĵetoj, neniu okazatako</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#luktado-potenca">Luktado potenca</a><sup>*</sup></td>
            <td>ludtado progresita, BAB +6</td>
            <td>Daŭrigi luktadon per movago</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#pafajxon-preterdirekti">Pafaĵon preterdirekti</a><sup>*</sup></td>
            <td>LER 13, senarma bato progresita</td>
            <td>Preterdirekti unu pafaĵon ĉiuronde</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#pafajxon-kapti">Pafaĵon kapti</a><sup>*</sup></td>
            <td>LER 15, preterdirekti pafaĵon</td>
            <td>Kapti unu pafaĵon ĉiuronde</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#skorpia-pikilo">Skorpia pikilo</a><sup>*</sup></td>
            <td>Senarma bato progresita</td>
            <td>Redukti rapidecon de malamiko al 1,5 metroj</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#gorgona-pugno">Gorgona pugno</a><sup>*</sup></td>
            <td>Skorpia pikilo, BAB +6</td>
            <td>Igi malrapidigitan malamikon ŝanceliganta</td>
        </tr>
        <tr>
            <td class="desxovo-3"><a href="#meduza-kolero">Meduza kolero</a><sup>*</sup></td>
            <td>Gorgona pugno, BAB +11</td>
            <td>Du pliaj atakoj kontraŭ malhelpita malamiko</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#sveniga-bato">Sveniga bato</a><sup>*</sup></td>
            <td>LER 13, SAĜ 13, senarma bato progresita, BAB +8</td>
            <td>Svenigi malamikon per senarma bato</td>
        </tr>
        <tr>
            <td><a href="#sinhardado">Sinhardado</a></td>
            <td>-</td>
            <td>+3 VP, aldone +1 VP po VK ekde la 4a VK</td>
        </tr>
        <tr>
            <td><a href="#sinkonservo">Sinkonservo</a></td>
            <td>-</td>
            <td>Bono +2 por sanigi kaj transvivado</td>
        </tr>
        <tr>
            <td><a href="#sorcxi-en-la-batalo">Sorĉi en la batalo</a></td>
            <td>-</td>
            <td>Bono +4 por koncentriĝoĵetoj, se vi volas sorĉi defensive</td>
        </tr>
        <tr>
            <td><a href="#sorcxi-en-zooformo">Sorĉi en zooformo</a></td>
            <td>SAĜ 13, klasebleco zooformo</td>
            <td>Efektivigi sorĉojn en zooformo</td>
        </tr>
        <tr>
            <td><a href="#sorcxi-sen-materialkomponantoj">Sorĉi sen materialkomponantoj</a></td>
            <td>-</td>
            <td>Sen materialkomponantoj sorĉi</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#sorcxfokuso">Sorĉfokuso</a></td>
            <td>-</td>
            <td>Bono +1 por MFG de savĵetoj kontraŭ unu sorĉskolo</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#sorcxfokuso-potenca">Sorĉfokuso potenca</a></td>
            <td>Sorĉfokuso</td>
            <td>Plia bono +1 por MFG de savĵetoj kontraŭ unu sorĉskolo</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#sorcxgxenulo">Sorïĉĝenulo</a><sup>*</sup></td>
            <td>BAT 6</td>
            <td>Altigas la MFG por sorĉi en via ĉirkaŭaĵo</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#sorcxrompulo">Sorïĉrompulo</a><sup>*</sup></td>
            <td>Sorĉĝenulo, BAT 10</td>
            <td>Malamikoj ebligas okazatakojn kiam iliaj sorĉoj malsukcesas</td>
        </tr>
        <tr>
            <td><a href="#sorcxmajstreco">Sorĉmajstreco</a></td>
            <td>MAG 1</td>
            <td>Prepari kelkajn sorĉojn sen sorĉolibro</td>
        </tr>
        <tr>
            <td><a href="#sorcxvenigo-plifortigita">Sorĉvenigo plifortigita</a></td>
            <td>Sorĉfokuso (sorĉvenigo)</td>
            <td>Sorĉvenigitaj kreaĵoj ricevas bonon +4 por FOR kaj KON</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#sperto-kun-armajxoj-malpezaj">Sperto kun armaĵoj malpezaj</a></td>
            <td>-</td>
            <td>Neniu malbono por atakoj se vi portas malpezan armaĵon</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#sperto-kun-armajxoj-mezpezaj">Sperto kun armaĵoj mezpezaj</a></td>
            <td>Sperto kun armaĵoj malpezaj</td>
            <td>Neniu malbono por atakoj se vi portas mezpezan armaĵon</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-2"><a href="#sperto-kun-armajxoj-pezaj">Sperto kun armaĵoj pezaj</a></td>
            <td>Sperto kun armaĵoj mezpezaj</td>
            <td>Neniu malbono por atakoj se vi portas pezan armaĵon</td>
        </tr>
        <tr>
            <td><a href="#sperto-kun-eksotikaj-armiloj">Sperto kun eksotikaj armiloj</a><sup>*</sup></td>
            <td>BAB +1</td>
            <td>Neniu malbono por atakoj per eksotikaj armiloj</td>
        </tr>
        <tr>
            <td><a href="#sperto-kun-militarmiloj">Sperto kun militarmiloj</a></td>
            <td>-</td>
            <td>Neniu malbono por atakoj per militarmiloj</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#sperto-kun-sxildoj">Sperto kun ŝildoj</a></td>
            <td>-</td>
            <td>Neniu malbono por atakoj se vi uzas ŝildon</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#sxildbato-progresita">Ŝildbato progresita</a><sup>*</sup></td>
            <td>Sperto kun ŝildoj</td>
            <td>Ĉe ŝildbato gardi la ŝildbonon</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#sxildpusxo">Ŝildpuŝo</a><sup>*</sup></td>
            <td>Ŝildbato, batalo per du armiloj, LER 15, BAB +6</td>
            <td>Puŝatako samtempe kun ŝildbato</td>
        </tr>
        <tr>
            <td class="desxovo-3"><a href="#sxildmajstro">Ŝildmajstro</a><sup>*</sup></td>
            <td>Ŝildpuŝo, BAB +11</td>
            <td>Neniu malbono pro la batalo per du armiloj kun ŝildo</td>
        </tr>
        <tr>
            <td class="desxovo-1"><a href="#sxildfokuso">Ŝildfokuso</a><sup>*</sup></td>
            <td>Sperto kun ŝildoj, BAB +1</td>
            <td>AK-bono +1 ĉe uzado de ŝildo</td>
        </tr>
        <tr>
            <td class="desxovo-2"><a href="#sxildfokuso-potenca">Ŝildfokuso potenca</a><sup>*</sup></td>
            <td>Ŝildfokuso, BAT 8</td>
            <td>Plia AK-bono +1 ĉe uzado de ŝildo</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#sperto-kun-tursxildoj">Sperto kun turŝildoj</a><sup>*</sup></td>
            <td>-</td>
            <td>Neniu malbono por atakoj se vi uzas turŝildon</td>
        </tr>
        <tr>
            <td><a href="#sperto-kun-simplaj-armiloj">Sperto kun simplaj armiloj</a></td>
            <td>-</td>
            <td>Neniu malbono por atakoj per simplaj armiloj</td>
        </tr>
        <tr class="supra-linio">
            <td><a href="#superfortigaj-sorcxoj">Superfortigaj sorĉoj</a></td>
            <td>-</td>
            <td>Bono +2 por sorĉniveloĵetoj por superi sorĉreziston</td>
        </tr>
        <tr class="malsupra-linio">
            <td class="desxovo-1"><a href="#superfortigaj-sorcxoj-potencaj">Superfortigaj sorĉoj potencaj</a></td>
            <td>Superfortigaj sorĉoj</td>
            <td>Plia bono +2 por sorĉniveloĵetoj por superi sorĉreziston</td>
        </tr>
        <tr>
            <td><a href="#timiga-forto">Timiga forto</a><sup>*</sup></td>
            <td>-</td>
            <td>FOR aldoniĝas al KAR por ĵetoj de timigi</td>
        </tr>
        <tr>
            <td><a href="#trompisto">Trompisto</a></td>
            <td>-</td>
            <td>Bono +2 por blufi kaj alivesti</td>
        </tr>
        <tr>
            <td><a href="#vigleco">Vigleco</a></td>
            <td>-</td>
            <td>Bono +2 por percepto kaj ekkoni motivon</td>
        </tr>
    </tbody>
</table>

<h3 id="akrobatisto">Akrobatisto</h3>
<p> Vi lerte scipovas hasti, salti kaj flugi.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por kapablecĵetoj de akrobataĵo kaj flugado. Se vi havas minimume 10 rangojn en tiu kapableco la bono altiĝas al +4 por tiu kapableco.</p>

<h3 id="apudsekvi">Apudsekvi [batalo]</h3>
<p> Vi povas mallongigi la distancon, se malamiko provas malproskimiĝi.</p>
<p> <b>Kondiĉo:</b> Bazataka bono +1 </p>
<p> <b>Avantaĝo:</b> Se malamiko en najbara kampo provas malproksimiĝi per kvinfut-paŝo, tiam vi faras same kvinfut-paŝon kiel subita ago por alveni al najbara kampo de la malamiko. Se vi faras la paŝon, vi ne plu povas fari kvinfut-paŝon dum via posta vico. Se vi moviĝas dum via posta vico, subtrahu la 1,5 m de la distanco kiun vi povus iri.</p>

<h3 id="arkana-armajxomajstro">Arkana armaĵomajstro [batalo]</h3>
<p> Vi majstras ŝorĉi en armaĵoj.</p>
<p> <b>Kondiĉoj:</b> Arkana armaĵotrejnado, sperto kun armaĵoj (mezpezaj), sorĉnivelo 7</p>
<p> <b>Avantaĝo:</b> Per rapida ago vi reduktas la riskon fari sorĉfuŝon, kaŭze de via armaĵo, je 20% por ĉiuj sorĉoj dum tiu rondo. Tiu bono anstataŭas (ne estas aldona) la bonon la talento arkana armaĵotrejnado.</p>

<h3 id="arkana-armajxotrejnado">Arkana armaĵotrejnado [batalo]</h3>
<p> Vi lernis ŝorĉi en armaĵoj.</p>
<p> <b>Kondiĉoj:</b> Sperto kun armaĵoj (malpezaj), sorĉnivelo 3</p>
<p> <b>Avantaĝo:</b> Per rapida ago vi reduktas la riskon fari sorĉfuŝon, kaŭze de via armaĵo, je 10% por ĉiuj sorĉoj dum tiu rondo. </p>

<h3 id="arkana-bato">Arkana bato [batalo]</h3>
<p> Vi uzas vian arkanan potencon por riĉigi viajn armilojn per magia energio. </p>
<p> <b>Kondiĉo:</b> Ebleco efektivigi arkanajn sorĉojn </p>
<p> <b>Avantaĝo:</b> Per rapida ago vi povas aldoni magian energion al viaj armiloj. Dum unu rondo la damaĝo de via armiloj estas unu pli alta. Krome viaj armiloj estas traktataj kiel magiaj armiloj rilate al damaĝoredukto. La bono altiĝas ĉiuj kvin niveloj ĝis maksimumo de +5 je la 20a nivelo. </p>

<h3 id="armilofokuso">Armilofokuso [batalo]</h3>
<p> Elektu armilon. Vi ankaŭ povas elekti senarman baton, luktadon (aŭ "radion" se vi estas sorĉkonanto). </p>
<p> <b>Kondiĉoj:</b> Sperto kun elektita armilo, bazataka bono +1 </p>
<p> <b>Avantaĝo:</b> Vi ricevas por ĉiuj atakĵetoj kun armilo laŭ via elekto bonon +1. </p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĝia efiko tamen ne estas akumula. Ĉiufoje kiam vi elektas la talenton, ĝi aplikiĝas al alia armilo.</p>

<h3 id="armilofokuso-potenca">Armilofokuso potenca [batalo]</h3>
<p> Elektu armilon (inkluzive senarma bato kaj luktado) por kiu vi jam havas la talenton armilofokuson. Vi estas majstro de tiu elektita armilo. </p>
<p> <b>Kondiĉoj:</b> Sperto kun elektita armilo, armilofokuso por elektita armilo, batalisto de nivelo 8</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +1 por ĉiuj atako per la elektita armilo. Tiu bono validas aldone al aliaj bonoj por atakĵetoj, precipe al tiu de la talento armilofokuso.</p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĝia efiko tamen ne estas akumula. Ĉiufoje kiam vi elektas la talenton, ĝi aplikiĝas al alia armilo.</p>

<h3 id="armilospecialigxo">Armilospecialiĝo [batalo]</h3>
<p> Vi lerte kaŭzas damaĝon per speciala armilo. Por tio elektu armilon por kiu vi jam havas la talenton armilofokuson. Se vi uzas tiun armilon, vi kaŭzas aldonan damaĝon. </p>
<p> <b>Kondiĉoj:</b> Sperto kun elektita armilo, armilofokuso por elektita armilo, batalisto de nivelo 4</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por ĉiuj damaĝoĵetoj de la elektita armilo.</p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĝia efiko tamen ne estas akumula. Ĉiufoje kiam vi elektas la talenton, ĝi aplikiĝas al alia armilo.</p>

<h3 id="armilospecialigxo-potenca">Armilospecialiĝo potenca [batalo]</h3>
<p> Elektu armilon (inluzive senarma bato kaj luktado) por kiu vi jam elektis la talenton armilospecialiĝon. Viaj atakoj per tiu armilo estas pli detruaj ol kutime.</p>
<p> <b>Kondiĉoj:</b> Sperto kun elektita armilo, armilofokuso potenca por elektita armilo, armilofokuso por elektita armilo, armilospecialiĝo por elektita armilo, batalisto de nivelo 12</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por ĉiuj damaĝoĵetoj de la elektita armilo. Tiu bono validas aldone al aliaj bonoj de damaĝoĵetoj precipe al tiuj de armilospecialiĝo.</p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĝia efiko tamen ne estas akumula. Ĉiufoje kiam vi elektas la talenton, ĝi aplikiĝas al alia armilo.</p>

<h3 id="armoruzeco">Armoruzeco [batalo]</h3>
<p> Vi estas trajnita por uzi vian lerteco anstataŭ pura forto en la batalo.</p>
<p> <b>Avantaĝo:</b> Se vi uzas malpezan armilon, <a href="../ekipajxo/#rapiro">rapiron</a>, <a href="../ekipajxo/#sabro-elfa">sabron elfan</a>, <a href="../ekipajxo/#vipo">vipon</a> aŭ <a href="../ekipajxo/#kateno-najlita">katenon najlitan</a> kiu kongruas al la grandeco de via rolulo, vi povas aldoni anstataŭ la forto modifilo vian lertecomodifilon al viaj atakĵetoj. Se vi portas ŝildon, ties armaĵomalbono aldoniĝas al viaj atakĵetoj.</p>
<p> <b>Specife:</b> Naturaj armiloj kalkuliĝas ĉiam kiel malpezaj armiloj. </p>

<h3 id="atleto">Atleto</h3>
<p> Vi havas denaskan sportan talenton.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por kapablecĵetoj de grimpi aŭ naĝi. Se vi havas minimume 10 rangoj en unu el tiuj kapablecoj la bono altiĝas al +4.</p>

<h3 id="batalo-per-du-armiloj">Batalo per du armiloj [batalo]</h3>
<p> Vi havas sperton en la batalo per po unu armilo en ambaŭ manoj. Ĉiuvice vi povas fari aldonan atakon per via dua mano. </p>
<p> <b>Kondiĉo:</b> LER 15 <p>
<p> <b>Avantaĝo:</b> Viaj malbonoj por la batalo per du armiloj reduktiĝas. La malbono por vi ĉefarmilo reduktiĝas je +2, la malbono por via dua armilo je +6. Vidu la paragrafon <a href="../batalo/#batalo-per-du-armiloj">Batalo per du armiloj</a> en la ĉapitro <a href="../batalo">Batalo</a>. </p>
<p> <b>Kutime:</b> Se vi tenas duan armilon en via dua mano, vi povas fari per tiu armilo ĉiuvice unu kroman atakon. Se vi batalas tiamaniere, vi ricevas malbonon -6 por atakoj per via ĉefmano kaj malbonon -10 por atakoj per la dua mano. Se via dua armilo estas malpeza la malbonoj reduktiĝas je +2. Senarmaj batoj kalkuliĝas kiel atakoj per malpezaj armiloj.</p>

<h3 id="batalo-per-du-armiloj-progresita">Batalo per du armiloj progresita [batalo]</h3>
<p> Vi havas sperton en la batalo per du armiloj.</p>
<p> <b>Kondiĉo:</b> LER 17, batalo per du armiloj, bazataka bono +6 </p>
<p> <b>Avantaĝo:</b> Aldone al la kutima plia atako per la dua mano vi ricevas duan tian atakon tamen kun malbono -5. </p>
<p> <b>Kutime:</b> Sen tiu talento vi rajtas nur fari unu kroman atakon per la dua mano.</p>

<h3 id="batalo-per-du-armiloj-potenca">Batalo per du armiloj potenca [batalo]</h3>
<p> Vi havas nekredeblajn eblecojn batalante per du armiloj.</p>
<p> <b>Kondiĉo:</b> LER 19, batalo per du armiloj, batalo per du armiloj progresita, bazataka bono +11 </p>
<p> <b>Avantaĝo:</b> Vi ricevas trian atakon per via dua mano tamen kun malbono -10. </p>

<h3 id="batalrefleksoj">Batalrefleksoj [batalo]</h3>
<p> Vi rajtas fari pliajn okazatakojn.</p>
<p> <b>Avantaĝo:</b> Vi rajtas fari pliajn okazatakojn egale al via lertecmodifilo. Krome vi ankaŭ povas fari okazatakojn per tiu talento se vi estas surprizita sur la malĝusta piedo.</p>
<p> <b>Kutime:</b> Sen tiu talento via rolulo nur rajtas fari unu okazatakon ĉiuronde. Se li estas surprizitas sur la malĝusta piedo li ne rajtas fari okazatakojn. </p>
<p> <b>Specife:</b> Batalrefleksoj ne permesas al fripono uzi sian klaseblecon uzi okazon pli ol unu foje en unu rondo. </p>

<h3 id="blinde-batali">Blinde batali [batalo]</h3>
<p> Vi estas sperta por ataki malamikojn kiujn vi ne klare povas vidi. </p>
<p> <b>Avantaĝo:</b> Ĉiufoje kiam vi maltrafas celon en proksimbatalo pro ties kamuflado (vidu ĉapitron <a href="../batalo">Batalo</a>), vi rajtas ĵeti elcentĵeton por la fuŝoprobableco denove por determini ĉu vi trafas. Nevideblaj malamikoj ne havas avantaĝojn por ataki vin en proksimbatalo. Tio signifas ke vi ne perdas vian lertecmodifilon de la AK. Krome la atakanto perdas sian bonon +2 kiun li kutime ricevas pro sia nevidebleco. Ĉe distancatakoj de nevideblaj atakantoj tiu atakbono tamen validas. </p>
<p> Krome se vi estas blinda, vi ne devas fari ĵeton de akrobataĵo por moviĝi per plena moviĝorapideco. </p>
<p> <b>Kutime:</b> Validas la kutimaj modifiloj por atakĵetoj kiujn faras nevideblaj atakantoj por trafi vin. Aldone vi perdas vian lertecbonon de via AK. Plie validas la reguloj rilate via moviĝorapideco en malhelo kaj malbonaj vidĉirkumstancoj. </p>
<p> <b>Specife:</b> La talento batali blinde ne donas avantaĝojn kontraŭ roluloj al kiuj efikas la sorĉo scintili. </p>

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

<h3 id="cxirkauxbato">Ĉirkaŭbato [batalo]</h3>
<p> Per potenca bato de via armilo trafas plurajn apudajn malamikojn samtempe. </p>
<p> <b>Kondiĉoj:</b> FOR 13, impeta atako, duobla bato, bazataka bono +4 </p>
<p> <b>Avantaĝo:</b> Vi faras unu solan atakon per plena bazataka bono kontraŭ unu malamiko en via trafopovo. Se vi sukcesas, la trafo kaŭzas normalan damaĝon. Aldone vi povas fari plian atakon per plena bazatakbono kontraŭ malamiko kiu staras apud la unua kaj en via trafopovo. Tiel longe ke vi trafas, vi povas ataki apudan malamikon kiu staras en via trafopovo. Tamen vi povas ataki unu malamikon nur unufoje en unu rondo per tiu talento. Se vi uzas tiun talenton vi ricevas malbonon -2 por via armaĵklaso ĝis la venonta rondo.</p>

<h3 id="dancetanta-atako">Dancetanta atako [batalo]</h3>
<p> Vi povas lertmove alproksimiĝi al malamiko, bati lin kaj retiriĝi antaŭ li povas reagi.</p>
<p> <b>Kondiĉoj:</b> LER 13, evitmovo, movebleco, bazataka bono +4 </p>
<p> <b>Avantaĝo:</b> Kiel plena ago vi povas moviĝi per via moviĝrapideco, fari unu solan proksimatakon sen provoki okazatakon de la celo de via atako. Vi povas moviĝi antaŭ kaj post via atako, sed vi devas minimume moviĝi 3 m antaŭ via atako. Krome la tuta distanco de via moviĝo ne rajtas transpasi vian monviĝrapidecon. Vi ne povas uzi tiun talenton por ataki malamikon kiu staras apud vi je la komenco de via vico. </p>
<p> <b>Kutime:</b> Vi ne rajtas moviĝi antaŭ kaj post via atako. </p>

<h3 id="defendo-per-du-armiloj">Defendo per du armiloj [batalo]</h3>
<p> Kiam vi batalas per du armiloj, vi defendas vin lerte kontraŭ malamikaj atakoj.</p>
<p> <b>Kondiĉoj:</b> LER 15, batalo per du armiloj </p>
<p> <b>Avantaĝo:</b> Se vi uzas dumanan armilon aŭ du armilojn (krom naturaj armiloj aŭ senarmaj batoj), vi ricevas ŝildbonon +1 por via AK. Se vi batalas defensive aŭ uzas la agon plenan defendon, la ŝildbono altiĝas al +2.</p>

<h3 id="defensiva-batalmaniero">Defensiva batalmaniero [batalo]</h3>
<p> Vi rezignas pri alta precizeco de via atako kaj pliboniĝas vian defendon.</p>
<p> <b>Kondiĉoj:</b> INT 13 </p>
<p> <b>Avantaĝo:</b> Vi povas preni malbonon -1 por proksim-atakĵetoj kaj batalmanovroĵetoj por ricevi evitmovobonon +1 al la armaĵklaso. Kiam via bazataka bono atingas +4 kaj por ĉiuj +4 poste, la malbono malplialtiĝas je -1 kaj la bono plialtiĝas je +1. Vi nur povas apliki la talenton se vi deklaras ke vi faras atakon aŭ plenan atakagon per proksimarmilo. La efikoj daŭras unu rondon.</p>

<h3 id="defensiva-bataltrejnado">Defensiva bataltrejnado [batalo]</h3>
<p> Vi estas majstro en la defendo kontraŭ ĉiuj tipoj da batalmanovroj</p>
<p> <b>Avantaĝo:</b> Via entuta nombro da vivkubetoj validas kiel bazataka bono por determini vian batalmanovran defendon (vidu ĉapitron <a href="../batalo">Batalo</a>).</p>

<h3 id="deseligi">Deseligi [batalo]</h3>
<p> Vi havas sperton kiel faligi viajn kontraŭulojn de la selo. </p>
<p> <b>Kondiĉoj:</b> FOR 13, 1 rango en rajdi, rajdante batali, impeta atako, puŝatako progresita</p>
<p> <b>Avantaĝo:</b> Se vi rajdante per lanco atakas malamikon, faru la atakon kiel kutime. Se la atako estas sukcesa vi povas - aldone al la normala damaĝo - provi liberan puŝatakon. Se tio ankaŭ sukcesas, la malamiko estas jetata de la selo kaj surteriĝas kuŝante sur unu najbara kampo de sia rajdbesto aliflanke de vi. </p>

<h3 id="desxiri-per-du-armiloj">Deŝiri per du armiloj [batalo]</h3>
<p> Se vi trafas per ambaŭ armiloj vi povas kaŭzi detruajn vundojn.</p>
<p> <b>Kondiĉoj:</b> LER 17, duobla tranĉo, batalo per du armiloj progresita, batalo per du armiloj, bazataka bono +11</p>
<p> <b>Avantaĝo:</b> Se vi trafas malamikon per la armilo de via ĉefa mano kaj ankaŭ per via dua mano, vi kaŭzas aldonan 1k10 damaĝon + 1 &frac12; via FOR-modifilo. Tiun aldonan damaĝon vi nur povas kaŭzi unufoje en unu rondo. </p>

<h3 id="disbati-defendon">Disbati defendon [batalo]</h3>
<p> Viaj eblecoj kun via preferata armilo forprenas de malamikoj la kapablon defendi sin, se ilia defendo jam estas trafata.</p>
<p> <b>Kondiĉoj:</b> Armilofokuso, minaca prezentado, sperto kun armiloj, bazataka bono +6</p>
<p> <b>Avantaĝo:</b> Ĉiu emociita, timigita aŭ panika malamiko, kiu estas trafata de vi tiuronde, estas ĝis la fino de la venonta rondo sur la malĝusta piedo. Tiu validas ankaŭ por ĉiuj aliaj atakoj kiujn vi faras tiuronde. </p>

<h3 id="distancpafo">Distancpafo [batalo]</h3>
<p> Vi pli bone trafas ĉe grandaj distancoj.</p>
<p> <b>Kondiĉo:</b> Kernpafo</p>
<p> <b>Avantaĝo:</b> En distancbatalo la malbono estas -1 por ĉiu distancoparto, inter vi kaj la celo, kiu egalas la plenan baztrafopovon de via armilo.</p>
<p> <b>Kutime:</b> La malbono estas -2 por ĉiu distancoparto, inter vi kaj la celo, kiu egalas la plenan baztrafopovon de via armilo. </p>

<h3 id="duobla-bato">Duobla atako [batalo]</h3>
<p> Per unu bato de via armilo vi trafas du apudajn malamikojn.</p>
<p> <b>Kondiĉoj:</b> FOR 13, impeta atako, BAB +1</p>
<p> <b>Avantaĝo:</b> Faru per bazago unu solan atakon al malamiko en via trafpovo. Se vi trafas vi kaŭzas damaĝôn al tiu malamiko kaj vi povas ataki aldonan malamikon kiu staras apud la unua kaj kiu estas ankaŭ en via trafopovo. Per tiu talento vi nur rajtas fari unu aldonan atakon en unu rondo. Se vi uzas tiun talenton vi ricevas malbonon -2 por via armaĵklaso ĝis la venonta rondo.</p>

<h3 id="duobla-trancxo">Duobla tranĉo [batalo]</h3>
<p> Se vi batalas per du armiloj, vi povas uzi vian duan manon per pli granda forto.</p>
<p> <b>Kondiĉoj:</b> LER 15, batalo per du armiloj</p>
<p> <b>Avantaĝo:</b> Adiciu vian fortobonon al la damaĝon de via dua mano.</p>
<p> <b>Kutime:</b> Kutime nur la duona fortobono aldoniĝas al damaĝo de la armilo de via dua mano.</p>

<h3 id="eltenema">Eltenema</h3>
<p> Malfacilaj mediaj cirkonstancoj kaj longdaŭraj penoj lacigas vin malplie ol aliaj personoj.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +4 por la sekvantaj ĵetoj: ĵetoj por naĝi por eviti nemortigan damaĝon pro elĉerpiĝo; ĵetoj de konstitucio por iri plu; ĵetoj de konstitucio por eviti nemortigan damaĝon pro tro lonaga irado; ĵetoj de konstitucio por reteni la spiron; ĵetoj de konstitucio por eviti nemortigan damaĝon pro malsato aŭ soifo; ĵetoj de konstitucio por eviti nemortigan damaĝon pro varmega aŭ malvarmega medio; ĵetoj de konstitucio por ne sufokiĝi. Krome vi povas dormi en malpezaj aŭ mezpezaj armaĵoj sen esti elĉerpita dum la venonta tago. </p>
<p> <b>Kutime:</b> Se rolulo ne havas tiun talenton kaj dormas en mezpeza aŭ peza armaĵo, tiam li estas elĉerita dum la venonta tago.</p>

<h3 id="emo-por-magio">Emo por magio</h3>
<p> Vi lerte efektivigas sorĉojn kaj uzas magiajn objektojn.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por ĉiuj kapablecĵetoj por sorĉkono kaj uzi magian objekton. Se vi havas minimume 10 rangoj en unu el tiuj kapablecoj, la bono altiĝas al +4 por tiu kapableco.</p>

<h3 id="enfokusigante-pereigi">Enfokusigante pereigi [batalo]</h3>
<p> Vi povas enfokusigi dian energion per via proksimbatala armilo en via mano.</p>
<p> <b>Kondiĉo:</b> Klasebleco enfokusigi energion</p>
<p> <b>Avantaĝo:</b> Antaŭ fari proksimbatalan atakon vi povas elekti uzi vian ebelcon enfokusigi energion per rapida ago. Se vi enfokusigas pozitivan energion kaj trafas malmortulon per via atako, la celo suferas aldonan damaĝon de la enfokusigita pozitiva energio. Se vi enfokusigas negativan energion kaj trafas vivantan kreaĵon per via atako, la kreaĵo suferas la aldonan damaĝon de la enfokusigita negativa energio. La celo de la atako povas kiel kutime fari voloĵeton por duonigi la damaĝon. Se via atako maltrafas, la ebleco enfokusigi energion tamen estas uzita. </p>

<h3 id="enfokusigi-elementon">Enfokusigi elementon</h3>
<p> Elektu element-subtipon (aero, akvo, fajro, tero). Ekde nun vi povas enfokusigi vian dian energion tiel kiel vi povas sanigi aŭ lezi eksterulojn de la elektita element-subtipo. </p>
<p> <b>Kondiĉo:</b> Klasebleco enfokusigi energion</p>
<p> <b>Avantaĝo:</b> Anstataŭ la kutima efiko de enfokusigi energion, vi povas elekti uzi tiun eblecon por eksteruloj de la elektita element-subtipo. Vi devas elekti ĉiufoje kiam vi enfokusigas energion. Se vi decidas sanigi aŭ lezi kreaĵojn de tiu element-subtipo, tiam enfokusigi energion ne havas efikon por aliaj kreaĵoj. La kaŭzata aŭ sanigata damaĝo kaj la MFG por duonigi la damaĝon ne ŝanĝiĝas.</p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĝia efiko ne estas akumula. Tamen ĝi povas esti elektita por diversaj element-subtipoj.

<h3 id="enfokusigi-pensmanieron">Enfokusigi pensmanieron</h3>
<p> Elektu el la pensmanieroj laŭleĝa, ĥaosa, bona aŭ malbona. Vi povas enfokusigi dian energion kaj per tio trafi eksterulojn kiuj apartenas al la elektitan pensmanieron. </p>
<p> <b>Kondiĉo:</b> Klasebleco enfokusigi energion</p>
<p> <b>Avantaĝo:</b> Anstataŭ la kutima funkciado vi povas decidi ke la ebleco "enfokusigi energion" lezas aŭ sanigas eksterulojn de la elektita pensmaniero. Vi devas fari la elekton ĉiam kiam vi enfokusigas energion. Se vi elektas lezi aŭ sanigi estaĵojn de la elektita pensmaniero, tiam la ebleco "enfokusigi energion" havas neniun efikon por aliaj estaĵoj. La kvanto da sanigo aŭ damaĝo kiel la MFG por duonigo de la damaĝo estas kiel kutime.  </p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĝia efiko ne estas akumula. Ĉiam kiam vi denove elektas la talenton ĝi rilatas al alia pensmaniero. Se vi enfokusigas energion, vi devas elekti al kiu pensmaniero ĝi efikas. </p>

<h3 id="enfokusigi-progresita">Enfokusigi progresita</h3>
<p> Estas pli malfacile rezisti vian enfukusigitan enegion ol kutime.</p>
<p> <b>Kondiĉo:</b> Klasebleco enfokusigi energion</p>
<p> <b>Avantaĝo:</b> La MFG de savĵetoj por rezisti vian eblecon enfokusigi energion altiĝas je +2.</p>

<h3 id="enfokusigi-selektive">Enfokusigi selektive</h3>
<p> Vi povas elekti kiun la enfokusigitan energion trafas. </p>
<p> <b>Kondiĉoj:</b> KAR 13, klasebleco enfokusigi energion</p>
<p> <b>Avantaĝo:</b> Kiam vi enfokusigas energion, vi povas elekti kvanton da celoj kiu egalas maksimume vian KAR-modifilon. Tiuj celoj ne estas trafataj. </p>
<p> <b>Kutime:</b> Ĉiuj celoj ene de 9 m estas trafataj se vi enfokusigas energion. Vi nur povas elekti ĉu vi mem estas trafata aŭ ne.</p>

<h3 id="etenda-pasxo">Etenda paŝo [batalo]</h3>
<p> Vi povas ataki malamikojn ekster via kutima trafopovo. </p>
<p> <b>Kondiĉo:</b> Bazataka bono +6 </p>
<p> <b>Avantaĝo:</b> Vi povas etendi la trafopovon de viaj proksimaj atakoj je 1,5 metroj ĝis la fino de la rondo. Pro tio vi ricevas malbonon -2 por via armaĵklaso ĝis la fino de la rondo. Vi devas elekti la talenton antaŭ atakoj estas faritaj. </p>

<h3 id="evitmovo">Evitmovo [batalo]</h3>
<p> Via trejnado kaj viaj refleksoj ebligas al vi rapide reagi al atakoj de viaj malamikoj. </p>
<p> <b>Kondiĉo:</b> LER 13</p>
<p> <b>Avantaĝo:</b> Vi ricevas evitmovan bonon +1 por via AK. Se vi perdas vian LER-bonon por la armaĵklaso, tiam vi ankaŭ perdas la bonon de tiu talento.</p>

<h3 id="facilmova">Facilmova</h3>
<p> Vi estas pli rapida ol plejmultaj.</p>
<p> <b>Avantaĝo:</b> Se vi portas neniun aŭ malpezan armaĵon, via moviĝrapideco altiĝas je 1,5 metroj. Vi perdas la avantaĝon de tiu talento, se vi portas mezpezan aŭ pezan armaĵon. </p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Via moviĝrapideco ĉiufoje altiĝas je 1,5 metroj. </p>

<h3 id="faligo-potenca">Faligo potenca [batalo]</h3>
<p> Vi povas fari atakojn kiel liberaj agoj kontraŭ malamikoj kiujn vi faligis.</p>
<p> <b>Kondiĉoj:</b>Defensiva batalmaniero, faligo progresita, BAB +6, INT 13 </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por ĵetoj de faligo. Tiu bono validas aldone al la bono de la talento faligo progresita. Se vi faligas malamikon, okazatakoj povas esti farataj kontraŭ li.</p>
<p> <b>Kutime:</b> Kreaĵoj ne suferas okazatakon, se oni faligas ilin.</p>

<h3 id="faligo-progresita">Faligo progresita [batalo]</h3>
<p> Vi havas sperton kiel surterigi viajn malamikojn.</p>
<p> <b>Kondiĉoj:</b>Defensiva batalmaniero, INT 13 </p>
<p> <b>Avantaĝo:</b> Se vi aplikas la batalmanovron faligo, vi ne provokas okazatakon. Krome vi ricevas bonon +2 por ĵetoj per kiuj vi provas faligi vian malamikon. Se malamiko atakas vin per tiu batalmanovro, via batalmanovra defendo altiĝas je +2.</p>
<p> <b>Kutime:</b> Se vi aplikas la batalmanovron faligon, vi provokas okazatakon.</p>

<h3 id="fera-volo">Fera volo</h3>
<p> Vi pli facile rezistas mensinfluajn fortojn.</p>
<p> <b>Avantaĝo:</b> Vi ricevas por ĉiuj voloĵetoj bonon +2.</p>

<h3 id="fera-volo-progresita">Fera volo progresita</h3>
<p> Via vigla prudento donas al vi rezistokapablon kontraŭ mensinfluaj atakoj.</p>
<p> <b>Kondiĝo:</b> Fera volo </p>
<p> <b>Avantaĝo:</b> Unufoje tage vi povas ripeti refleksĵeton. La decido apliki tiun talenton devas esti farita antaŭ vi malkovras la rezulton de via ĵeto. Se vi aplikas la talenton vi devas akcepti la duan rezulton eĉ se ĝi estas pli malbona ol la rezulto de la unua ĵeto.</p>

<h3 id="finto-potenca">Finto potenca [batalo]</h3>
<p> Vi scipovas kaŭzi ke viaj malamikoj troreagas al viaj atakoj.</p>
<p> <b>Kondiĉoj:</b>Defensiva batalmaniero, finto progresita, BAB +6, INT 13 </p>
<p> <b>Avantaĝo:</b> Se vi uzas finton por ke la malamiko perdu sian LER-bonon, li ne nur perdas ĝin dum via posta atako sed ĝis la komenco de la sekvanta rondo. </p>
<p> <b>Kutime:</b> Kreaĵo kontraŭ kiu vi uzas finton, perdas sian LER-bonon dum via posta atako.</p>

<h3 id="finto-progresita">Finto progresita [batalo]</h3>
<p> Vi havas talenton trompi viajn malamikojn en la batalo.</p>
<p> <b>Kondiĉoj:</b>Defensiva batalmaniero, INT 13 </p>
<p> <b>Avantaĝo:</b> Vi povas fari blufoĵeton por apliki finton en la batalo kiel movagon.</p>
<p> <b>Kutime:</b> Finto en la batalo estas bazago.</p>

<h3 id="frakasi-objekton-potence">Frakasi objekton potence [batalo]</h3>
<p> Viaj detruaj batoj trairas armilojn, armaĵojn kaj iliajn portantojn kaj damaĝas la objektojn kaj la portantojn per timiga bato. </p>
<p> <b>Kondiĉoj:</b> FOR 13, impeta atako, frakasi objekton progresite, bazataka bono +6 </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por frakasi objektojn. Tiu bono aldoniĝas al la bono de la talento frakasi objektojn progresite. Se vi frakasas armilon, armaĵon aŭ ŝildon kaj detruas ĝin, la kroma damaĝô efikas al la portanto de tiu objekto. Se vi decidas ke la vivpoentoj de la malamiko ne subiru sub unu vivpoento, tiam neniu damaĝo efikas al la malamiko. </p>

<h3 id="frakasi-objekton-progresite">Frakasi objekton progresite [batalo]</h3>
<p> Vi havas sperton frakasi armilojn aŭ armaĵojn de viaj malamikoj. </p>
<p> <b>Kondiĉoj:</b> FOR 13, impeta atako, bazataka bono +1 </p>
<p> <b>Avantaĝo:</b> Se vi uzas la batalmanovro frakasi objekton, vi ne provokas okazatakon. Plie vi ricevas bonon +2 por ĵetoj per kiuj vi volas damaĝi objektojn. Se malamiko atakas vin per tiu batalmanovro, via batalmanovra defendo altiĝas je +2.</p>
<p> <b>Kutime:</b> Se vi uzas la batalmanovron frakasi objekton, vi provokas okazatakon. </p>

<h3 id="fulmaj-refleksoj">Fulmaj refleksoj</h3>
<p> Viaj refleksoj estas superaveraĝaj.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por ĉiuj refleksĵetoj. </p>

<h3 id="fulmaj-refleksoj-progresitaj">Fulmaj refleksoj progresitaj</h3>
<p> <b>Kondiĉo:</b> Fulmaj refleksoj</p>
<p> <b>Avantaĝo:</b> Unufoje tage vi povas refari refleksĵeton. La decido apliki tiun talenton devas esti farita antaŭ vi malkovras la rezulton de via ĵeto. Se vi aplikas la talenton vi devas akcepti la duan rezulton eĉ se ĝi estas pli malbona ol la rezulto de la unua ĵeto.</p>

<h3 id="gorgona-pugno">Gorgona pugno [batalo]</h3>
<p> Per ĝuste celata bato vi igas vian malamikon ŝanceliĝi.</p>
<p> <b>Kondiĉoj:</b> Senarma bato progresita, skorpia pikilo, bazataka bono +6 </p>
<p> <b>Avantaĝo:</b> Vi faras unu solan senamrman proksimatakon kontraŭ celo kies rapideco estas reduktita (ekz. per skorpia pikilo). La proksimatako devas esti farata per bazago. Ĉe trafo via atako kaŭzas normalan damaĝon. Krome la celo de via atako estas ŝanceliĝanta ĝis la fino de via venonta vico, se li ne sukcese faras savĵeton de persisteco (MFG 10 + &frac12; via rolulnivelo + via SAĜ-modifilo). Ĉe jam ŝanceliĝantaj celoj tiu talento ne havas efikon. </p>

<h3 id="granda-persisteco">Granda persisteco</h3>
<p> Vi estas pli persistema ol aliaj kontraŭ venenoj, malsanoj kaj aliaj mortigaj defioj. </p>
<p> <b>Avantaĝo:</b> Por ĉiuj savĵetoj de persisteco vi ricevas bonon +2. </p>

<h3 id="granda-persisteco-progresita">Granda persisteco progresita</h3>
<p> El via interno vi povas gajni fortojn por rezisti malsanojn, venenojn kaj aliajn fizikajn suferojn. </p>
<p> <b>Kondiĉo:</b> Granda persisteco </p>
<p> <b>Avantaĝo:</b> Unufoje tage vi povas ripeti ĵeton de persisteco. La decido uzi tiun eblecon devas esti farita antaŭ vi faras la savĵeton. Se vi aplikas la talenton, vi devas akcepti la duan ĵeton ankaŭ se la rezulto estas malpli bona ol la unua. </p>

<table class="glita">
    <caption>Tabelo: Gvidi</caption>
    <thead>
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
    </thead>
    <tbody>
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
    </tbody>
</table>

<h3 id="gvidi">Gvidi</h3>
<p>Vi gajnas disĉiplojn por viaj celoj kaj unu sekvanton kiu iradas kun vi al aventuroj.</p>
<p> <b>Kondiĉo:</b> Rolulnivelo +7 </p>
<p> <b>Avantaĝo:</b> Tiu talento ebligas al vi gajni fidelan sekvanton kaj aron da disĉiploj kiuj subtenas vin. La sekvanto kutime estas NLR kun klasniveloj kaj la disĉiploj estas malalt-nivelaj NLR-oj. La tabelo <i>Gvidi</i> indikas, sekvanton de kiu nivelo kaj kiom da disĉiploj vi povas varbi. </p>
<p> <b>Modifiloj por la talento gvidi:</b> Via valoro por gvidi estas influata de diversaj kaŭzoj kaj povas devii de la baza valoro (rolulnivelo + KAR-modifilo). Via reputacio (de la vidpunkto de la sekvanto aŭ la disĉiploj kiujn vi volas varbi) povas altigi aŭ malaltigi vian valoron de gvidi. </p>

<table>
    <thead>
        <tr>
            <th>Reputacio kiel gvidanto</th><th>Modifilo</th>
        </tr>
    </thead>
    <tbody>
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
    </tbody>
</table>

<p> Se vi volas gajni sekvanton por vi, ankaŭ aliaj kaŭzoj povas valori: </p>

<table>
    <thead>
        <tr>
            <th>La gvidanto...</th><th>Modifilo</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="2"><sup>*</sup> Tiu valoro altiĝas kun ĉiu morta sekvanto.</td>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>havas konaton, specialan<br>rajdbeston aŭ bestkamaradon</td><td>-2</td>
        </tr>
        <tr>
            <td>varbas sekvanton<br>kun alia pensmaniero</td><td>-1</td>
        </tr>
        <tr>
            <td>kulpas pri la morto de sekvanto</td><td>-2 <sup>*</sup></td>
        </tr>
    </tbody>
</table>

<p> Disĉiploj havas aliajn prioritatojn ol sekvantoj. Se vi volas gajni novan disĉiplon por vi, valoras la postaj modifiloj se ili estas aplikeblaj: </p>

<table>
    <thead>
        <tr>
            <th>La gvidanto...</th><th>Modifilo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>havas fortikaĵon, bazon de operacioj,<br>gilddomon aŭ similan</td><td>+2</td>
        </tr>
        <tr>
            <td>ĉiam vojaĝas de unu loko al alia</td><td>-1</td>
        </tr>
        <tr>
            <td>kulpas pri la morto de aliaj diĉiploj</td><td>+2</td>
        </tr>
    </tbody>
</table>

<p> <b>Valoro por gvidi:</b> Via baz valoro por gvidi egalas al vi nivelo + vi KAR-modifilo. Por tre malaltaj karismaj valoroj la tabelo ankaŭ montras tre malaltajn valorojn por gvidi. Tamen vi devas esti almenaŭ en la 7a nivelo por elekti la talenton gvidi. Kromaj kaŭzoj povas modifi vian valoron por gvidi kiel deskribata antaŭe.</p>
<p> <b>Nivelo de sekvanto:</b> Vi povas gajni unu sekvanton por vi kiu havas maksimume tiun nivelon. Sendepende de via valoro por gvidi vi nur povas varbi sekvanton kies nivelo estas minimume du niveloj sub via nivelo. La sekvanto devus esti ekipita per ekipaĵo kiu kongruas al lia nivelo (vidu la ĉapitron <a href="../gvidi_la_ludon">Gvidi la ludon</a>). La sekvanto povas aparteni al ĉiu popolo kaj al ĉiu klaso. La pensmaniero de la sekvanto rajtas esti mala ne sur la akso laŭleĝa-ĥaosa nek sur la akso bona-malbona. Se vi rekrutas sekvanton kiu ne havas vian pensmanieron vi ricevas malbonon -1 por via valoro por gvidi. </p>
<p> La sekvanto ne kalkuliĝas kiel grupmembro, se la spertpoentoj estas kalkulata por la grupo. Anstataŭe dividu la nivelon de via sekvanto per via nivelo. Multipliki tion per la spertpoentoj kiujn vi ricevas kaj aldonu tion al la spertpoentoj de via sekvanto. </p>
<p> Kiam la sekvanto havas sufiĉe da spertpoentoj por altiĝi al nivelo sub via propra nivelo, li ne altiĝas. Anstataŭe liaj spertpoentoj stagnas je unu malpli ol necesas por altiĝi.</p>
<p> <b>Nombro da disĉiploj laŭ nivelo:</b> Vi povas gvidi maksimume la indikatan nombron da disĉiploj laŭ niveloj. Disĉiploj agas simile kiel sekvantoj, tamen ili estas kutime NLR de malalta nivelo. Ĉar ili estas plejofte minimume kvin niveloj sub via nivelo, ili nur malofte taŭgas por la batalo. </p>
<p> Disĉiploj ne ricevas spertpoentojn kaj tial ankaŭ ne ordinare altiĝas je niveloj. Tamen se vi altiĝas al nova nivelo, vi povas determini per la tabelo ĉu via disĉiplaro kreskis, kie kelkaj novaj disĉiploj povas havi pli altan nivelon ol la antaŭaj. Ne uzu la tabelon por determini nivelaltiĝon de via sekvanto ĉar la sekvanto mem ricevas spertpoentojn. </p>

<h3 id="impeta-atako">Impeta atako [batalo]</h3>
<p> Vi donas parton de precizeco kontraŭ pli da forto kaj tiel vi faras speciale mortigajn proksimatakojn.</p>
<p> <b>Kondiĉoj:</b> FOR 13, bazataka bono +1 </p>
<p> <b>Avantaĝo:</b> Vi povas elekti ricevi malbonon -1 por ĉiuj proksimatakĵetoj kaj batalmanovroj. Pro tio vi ricevas bonon +2 por ĉiuj proksimbatlo-damaĝoĵetoj. Tiu damaĝo altiĝas ankoraŭ je la duono (+50%), se vi uzas dumanan armilon, unumanan armilon uzata per du manoj aŭ naturan armilon kiu donas 1 &frac12; olban FOR-modifilon por la damaĝoĵeton. Same la damaĝobono duoniĝas por atakoj per la dua mano aŭ per natura dua armilo. Se via bazataka bono atingas +4 kaj por ĉiuj pliaj +4 la malbono grandiĝas je -1 kaj la damaĝobono je +2. Vi devas decidi antaŭ la atakĵeto ĉu vi volas uzi tiun talenton. Ĝi efiko daŭras ĝis via venonta vico. La aldona damaĝo ne kalkuliĝas por tuŝatakoj aŭ efikoj kiuj ne kaŭzas damaĝon de vivpoentoj.</p>

<h3 id="improvizata-distancatako">Improvizata distancatako [batalo]</h3>
<p> Vi havas sperton ĵeti ĉiujn aĵojn kiujn vi tenas en viaj manoj. </p>
<p> <b>Avantaĝo:</b> Vi ne ricevas malbonojn por uzi improvizatajn distancarmilojn. Vi ricevas situaciobonon +1 por atakĵetoj kiujn vi faras por ataki per ĵetarmiloj kun vastspaca efiko.</p>
<p> <b>Kutime:</b> Vi ricevas malbonon -4 por atakĵetoj per improvizataj armiloj.</p>

<h3 id="improvizata-proksimatako">Improvizata proksimatako [batalo]</h3>
<p> Malamikoj estas surprizitaj de viaj nekutimaj atakoj.</p>
<p> <b>Kondiĉo:</b> bazataka bono +4 </p>
<p> <b>Avantaĝo:</b> Vi ne ricevas malbonojn por atakoj per improvizataj proksimarmiloj. Nearmitaj malamikoj estas surprizitaj sur la malĝusta piedo se vi atakas per improvizata proksimarmilo.</p>
<p> <b>Kutime:</b> Por atakoj per improvizataj armiloj vi ricevas malbonon -4.</p>

<h3 id="inklino-al-bestoj">Inklino al bestoj</h3>
<p> Vi estas edukita por labori kun rajdbestoj kaj aliaj bestoj. </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por kapablecĵetoj de interrilati kun bestoj kaj rajdi. Se vi havas pli ol 10 rangoj en unu kapableco, la bono altiĝas ĉe tiu kapableco al +4. </p>

<h3 id="iniciato-progresita">Iniciato progresita [batalo]</h3>
<p> Viaj lertaj refleksoj ebligas al vi reagi rapide ĉe danĝeroj.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +4 por iniciatoĵetoj.</p>

<h3 id="intimulo-progresita">Intimulo progresita</h3>

<table class="glita">
    <thead>
        <tr><th>Intimulo</th><th>Arkana pensmaniero</th><th>Nivelo de<br>sorĉkonanto</th></tr>
    </thead>
    <tfoot>
        <tr><td colspan="3"><sup>1</sup> Aŭ alia celestia besto de la kutime permesitaj intimuloj.</td></tr>
        <tr><td colspan="3"><sup>2</sup> Aŭ alia infera besto de la kutime permesitaj intimuloj.</td></tr>
        <tr><td colspan="3"><sup>3</sup> La majstro unue devas krei la homunkulon.</td></tr>
    </tfoot>
    <tbody>
        <tr><td>Celestia falko<sup>1</sup></td><td>neŭtrala bona</td><td>3</td></tr>
        <tr><td>Terura rato</td><td>neŭtrala</td><td>3</td></tr>
        <tr><td>Infera venena serpento<sup>2</sup></td><td>neŭtrala malbona</td><td>3</td></tr>
        <tr><td>Malgranda elementulo (ĉiu speco)</td><td>neŭtrala</td><td>5</td></tr>
        <tr><td>Sangokulo</td><td>neŭtrala</td><td>5</td></tr>
        <tr><td>Homunkulo<sup>3</sup></td><td>ia ajna</td><td>7</td></tr>
        <tr><td>Impo</td><td>laŭleĝa malbona</td><td>7</td></tr>
        <tr><td>Mefito (ĉiu speco)</td><td>neŭtrala</td><td>7</td></tr>
        <tr><td>Pseudodrako</td><td>neŭtrala bona</td><td>7</td></tr>
        <tr><td>Kvasito</td><td>ĥaosa malbona</td><td>7</td></tr>
    </tbody>
</table>

<p> Kun tiu talento vi povas elekti novan intimulon de listo kun pliaj bestoj. La talento nur validas se vi ankaŭ sen la uzo de la talento ricevus novan intimulon.</p>
<p> <b>Kondiĉoj:</b> Ebleco ricevi novan intimulon, konvena pensmaniero, sufiĉe alta nivelo (vidu apuden). </p>
<p> <b>Avantaĝo:</b> Se vi elektas intimulon, ankaŭ la kreaĵoj en la apuda tabelo estas elekteblaj por vi (komparu la ludovaloroj de la kreaĵoj en la manlibro de monstroj). Vi rajtas elekti ĉiun intimulon kies pensmaniero maksimume devias unu paŝon sur ambaŭ aksoj (laŭleĝa ĝis ĥaosa, bona ĝis malbona) de via pensmaniero. </p>
<p> Krome por intimuloj progresitaj validas la samaj reguloj kiel por normalaj intimuloj. Tamen estas du esceptoj: se la kreaĵo apartenas al alia speco ol besto, ĝia speco ne ŝanĝiĝas. Plie intimuloj progresitaj ne ricevas la eblecon paroli kun aliajn estaĵoj de sia speco (tamen multaj el ili jam havas la eblecon por komunikiĝo). </p>

<h3 id="kapablecofokuso">Kapablecofokuso</h3>
<p> Elektu kapablecon. Vi aparte havas sperton en tiu kapableco.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +3 por ĉiuj ĵetoj de tiu kapableco. Se vi havas minimume 10 rangoj en tiu kapableco, la bono altiĝas al +6.</p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. La efiko ne estas akumula. Ĉiam kiam vi elektas tiun talenton, ĝi efikas al alia kapableco.</p>

<h3 id="kernpafo">Kernpafo [batalo]</h3>
<p> Via precizeco estas speciale alta se vi celas al proksimaj celoj.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +1 por atako- kaj damaĝoĵetoj kiujn vi faras por trafi celon per distancarmilo ene de radiuso de 9 metroj.</p>

<h3 id="kirloventa-atako">Kirloventa atako [batalo]</h3>
<p> Kiel derviŝo vi batas ĉiujn malamikojn en via trafopovo.</p>
<p> <b>Kondiĉoj:</b> Defensiva batalmaniero, Evitmovo, Movebleco, Dancetanta atako, LER 13, INT 13, BAB +4 </p>
<p> <b>Avantaĝo:</b> Se vi faras plenan atakon, vi povas rezigni pri viaj normalaj atakoj kaj anstataŭe efektvigi unu solan proksimatakon per plena bazataka bono kontraŭ ĉiuj malamikoj en via trafopovo. Kontraŭ ĉiu malamiko vi devas fari atakĵeton. Se vi uzas la talenton kirloventan atakon, vi krome rezignas ĉiun bonon kaj kroman atakon, kiun vi havas per aliaj talentoj, sorĉoj aŭ eblecoj.</p>

<h3 id="koncentrita-bato">Koncentrita bato [batalo]</h3>
<p> Vi faras unu solan atakon kiu kaŭzas multe pli da damaĝo ol kutime.</p>
<p> <b>Kondiĉo:</b> Bazataka bono +11 </p>
<p> <b>Avantaĝo:</b> Se vi atakas, vi povas fari unu solan atakon per via plej granda bazataka bono, kiu kaŭzas pli da damaĝo. Ĵetu la damaĝokubetojn de la armilo dufoje kaj adiciu la rezultojn antaŭ vi aldonas la modifilojn pro forto, ecoj de armilo (kiel ekflama), damaĝo pro precizeco (kiel ekz. embuska atako) kaj aliaj damaĝobonoj. La aldonaj damaĝokubetoj ne multiplikiĝas ĉe kritika trafo sed estas aldonitaj al la tuta rezulto.</p>

<h3 id="koncentrita-bato-progresita">Koncentrita bato progresita [batalo]</h3>
<p> Vi faras unu solan atakon kiu kaŭzas rimarkinde pli da damaĝo ol kutime.</p>
<p> <b>Kondiĉoj:</b> Koncentrita bato, bazataka bono +11 </p>
<p> <b>Avantaĝo:</b> Se vi atakas, vi povas fari unu solan atakon per via plej granda bazataka bono, kiu kaŭzas pli da damaĝo. Ĵetu la damaĝokubetojn de la armilo trifoje kaj adiciu la rezultojn antaŭ vi aldonas la modifilojn pro forto, ecoj de armilo (kiel ekflama), damaĝo pro precizeco (kiel ekz. embuska atako) kaj aliaj damaĝobonoj. La aldonaj damaĝokubetoj ne multiplikiĝas ĉe kritika trafo sed estas aldonitaj al la tuta rezulto.</p>

<h3 id="koncentrita-bato-potenca">Koncentrita bato potenca [batalo]</h3>
<p> Vi faras unu solan atakon kiu kaŭzas nekredeble pli da damaĝo ol kutime.</p>
<p> <b>Kondiĉoj:</b> Koncentrita bato, koncentrita bato progresita, bazataka bono +16 </p>
<p> <b>Avantaĝo:</b> Se vi atakas, vi povas fari unu solan atakon per via plej granda bazataka bono, kiu kaŭzas pli da damaĝo. Ĵetu la damaĝokubetojn de la armilo kvarfoje kaj adiciu la rezultojn antaŭ vi aldonas la modifilojn pro forto, ecoj de armilo (kiel ekflama), damaĝo pro precizeco (kiel ekz. embuska atako) kaj aliaj damaĝobonoj. La aldonaj damaĝokubetoj ne multiplikiĝas ĉe kritika trafo sed estas aldonitaj al la tuta rezulto.</p>

<h3 id="kontrauxatako">Kontraŭatako [batalo]</h3>
<p> Vi povas trafi malamikojn kiuj atakas vin per pli granda trafdistanco tiel ke vi atakas iliajn ekstremaĵojn aŭ armilojn. </p>
<p> <b>Avantaĝo:</b> Vi povas prepari atakon kontraŭ iu malamiko kiu atakas vin en proksimbatalo. Tio ankaŭ funkcias se li estas ekster via trafpovo. </p>

<h3 id="kontrauxsorcxo-progresita">Kontraŭsorĉo progresita</h3>
<p> Vi havas sperton por superi sorĉojn de aliaj per similaj sorĉoj.</p>
<p> <b>Avantaĝo:</b> Se vi efektivigas kontraŭsorĉon, vi povas elekti iun sorĉon de sama skolo kiu havas pli altan gradon. </p>
<p> <b>Kutime:</b> Sen tiu talento vi nur povas kontraŭsorĉi per sama sorĉo aŭ sorĉo kiu estas deskribita kiel kontraŭsorĉo por la celsorĉo. </p>

<h3 id="kritika-trafo-fokuso">Kritika trafo fokuso [batalo]</h3>
<p> Vi havas sperton kaŭzi dolorojn. </p>
<p> <b>Kondiĉo:</b> Bazataka bono +9 </p>
<p> <b>Avantaĝo:</b> Vi ricevas situacian bonon +4 por atakĵetoj kiuj okazas por konfirmi kritikajn trafojn.</p>

<h3 id="kritika-trafo-majstreco">Kritika trafo majstreco [batalo]</h3>
<p> Viaj kritikaj trafoj havas du pliajn efikojn.</p>
<p> <b>Kondiĉo:</b> Kritika trafo fokuso, du ajnaj kritika-trafo-talentoj, batalisto de nivelo 14 </p>
<p> <b>Avantaĝo:</b> Se vi kaŭzas kritikan trafon, vi povas apliki du kritika-trafo-talentojn aldone al la damaĝo de la kritika trafo mem.</p>
<p> <b>Kutime:</b> Vi nur povas apliki unu kritika-trafo-talenton aldone al la damaĝo de la kritika trafo. </p>

<h3 id="kritika-trafo-blinda">Kritika trafo (blinda) [batalo]</h3>
<p> Viaj kritikaj trafoj blindigas malamikojn.</p>
<p> <b>Kondiĉo:</b> Kritika trafo fokuso, bazataka bono +15</p>
<p> <b>Avantaĝo:</b> Se vi faras kritikan trafon, via malamiko daŭre blindiĝas. Se li faras sukcesas persistecoĵeton, li nur estas blindeta dum 1k4 rondoj. La MFG de la persistecoĵeto egalas 10 + via bazataka bono. Tiu talento havas neniun efikon kontraŭ malamikoj kiuj ne uzas siajn okulojn por orientiĝi aŭ kiuj havas pli ol du okulojn (tamen pluraj kritikaj trafoj povas kaŭzi blindecon laŭ la decido de la ludgvidanto). Blindeco povas esti sanigita per Sanigo, Regenerado aŭ Sanigi blindecon.</p>
<p> <b>Specife:</b> Vi nur povas apliki unu kritika-trafo-talenton aldone al la damaĝo de la kritika trafo, krom vi havas la talenton kritika trafo majstreco. </p>

<h3 id="kritika-trafo-elcxerpita">Kritika trafo (elĉerpita) [batalo]</h3>
<p> Viaj kritikaj trafoj lacigas malamikojn.</p>
<p> <b>Kondiĉo:</b> Kritika trafo fokuso, bazataka bono +13</p>
<p> <b>Avantaĝo:</b> Se vi faras kritikan trafon, la celo estas elĉerpita dum 1k4 rondoj. Tiu talento havas neniun efikon se la celo jam estas senforta aŭ elĉerpita.</p>
<p> <b>Specife:</b> Vi nur povas apliki unu kritika-trafo-talenton aldone al la damaĝo de la kritika trafo, krom vi havas la talenton kritika trafo majstreco. </p>

<h3 id="kritika-trafo-malsaneta">Kritika trafo (malsaneta) [batalo]</h3>
<p> Viaj kritikaj trafoj malsanetigas malamikojn.</p>
<p> <b>Kondiĉo:</b> Kritika trafo fokuso, bazataka bono +11</p>
<p> <b>Avantaĝo:</b> Se vi faras kritikan trafon, la celo estas malsaneta dum 1 minuto. Tiu talento ne estas akumula. Pliaj kritikaj trafoj kun tiu talento nur plidaŭrigas la efikon.</p>
<p> <b>Specife:</b> Vi nur povas apliki unu kritika-trafo-talenton aldone al la damaĝo de la kritika trafo, krom vi havas la talenton kritika trafo majstreco. </p>

<h3 id="kritika-trafo-sxanceligxanta">Kritika trafo (ŝanceliĝanta) [batalo]</h3>
<p> Viaj kritikaj trafoj ŝancelas malamikojn.</p>
<p> <b>Kondiĉo:</b> Kritika trafo fokuso, bazataka bono +13</p>
<p> <b>Avantaĝo:</b> Se vi faras kritikan trafon, via malamiko estas ŝanceliĝanta dum 1k4 rondoj. Se li sukcese faras persistecoĵeton, li nur estas ŝanceliĝanta dum unu rondo. La MFG de la persistecoĵeto egalas 10 + via bazataka bono. La efiko de tiu talento ne estas akumula. Pliaj kritikaj trafoj kun tiu talento nur plidaŭrigas la efikon. </p>
<p> <b>Specife:</b> Vi nur povas apliki unu kritika-trafo-talenton aldone al la damaĝo de la kritika trafo, krom vi havas la talenton kritika trafo majstreco. </p>

<h3 id="kritika-trafo-sanganta">Kritika trafo (sanganta) [batalo]</h3>
<p> Viaj kritikaj trafoj forte sangigas malamikojn.</p>
<p> <b>Kondiĉo:</b> Kritika trafo fokuso, bazataka bono +11</p>
<p> <b>Avantaĝo:</b> Se vi faras kritikan trafon per pika aŭ klinga armilo, via malamiko suferas aldone al la damaĝon de la kritika trafo ĉiuronde 2k6 damaĝon pro sangado (vidu <a href="../statoj">Statoj</a>). La damaĝo povas esti ĉesigita per kapablecĵeto de kuraci (MFG 15) aŭ per ajna magia sanigo. La efiko de tiu talento estas akumula.</p>
<p> <b>Specife:</b> Vi nur povas apliki unu kritika-trafo-talenton aldone al la damaĝo de la kritika trafo, krom vi havas la talenton kritika trafo majstreco. </p>

<h3 id="kritika-trafo-senforta">Kritika trafo (senforta) [batalo]</h3>
<p> Viaj kritikaj trafoj senfortigas malamikojn.</p>
<p> <b>Kondiĉo:</b> Kritika trafo fokuso, kritika trafo (elĉerpita), bazataka bono +15</p>
<p> <b>Avantaĝo:</b> Se vi faras kritikan trafon, la celo estas senforta dum 1k4 rondoj. Tiu talento havas neniun efikon se la celo jam estas senforta.</p>
<p> <b>Specife:</b> Vi nur povas apliki unu kritika-trafo-talenton aldone al la damaĝo de la kritika trafo, krom vi havas la talenton kritika trafo majstreco. </p>

<h3 id="kritika-trafo-surda">Kritika trafo (surda) [batalo]</h3>
<p> Viaj kritikaj trafoj surdigas malamikojn.</p>
<p> <b>Kondiĉo:</b> Kritika trafo fokuso, bazataka bono +13</p>
<p> <b>Avantaĝo:</b> Se vi faras kritikan trafon, via malamiko perdas daŭre sian aŭdpovon. Se li faras sukcesan persistecoĵeton, li nur estas surda dum unu rondo. La MFG de la persistecoĵeto egalas 10 + via bazataka bono. Tiu talenta havas neniun efikon kontraŭ surdaj kreaĵoj. Surdeco povas esti sanigita per Sanigo, Regenerado aù Sanigi surdecon.</p>
<p> <b>Specife:</b> Vi nur povas apliki unu kritika-trafo-talenton aldone al la damaĝo de la kritika trafo, krom vi havas la talenton kritika trafo majstreco. </p>

<h3 id="kritika-trafo-svenanta">Kritika trafo (svenanta) [batalo]</h3>
<p> Viaj kritikaj trafoj svenigas malamikojn.</p>
<p> <b>Kondiĉo:</b> Kritika trafo fokuso, kritika trafo (ŝanceliĝanta), bazataka bono +17</p>
<p> <b>Avantaĝo:</b> Se vi faras kritikan trafon, via malamiko estas svenanta dum 1k4 rondoj. Se li sukcese faras persistecoĵeton, li estas ŝanceliĝanta dum 1k4 rondoj. La MFG de la persistecoĵeto egalas 10 + via bazataka bono. La efiko de tiu talento ne estas akumula. Pliaj kritikaj trafoj kun tiu talento nur plidaŭrigas la efikon. </p>
<p> <b>Specife:</b> Vi nur povas apliki unu kritika-trafo-talenton aldone al la damaĝo de la kritika trafo, krom vi havas la talenton kritika trafo majstreco. </p>

<h3 id="kritika-trafo-progresita">Kritika trafo progresita [batalo]</h3>
<p> Elektu unu armilon. Atakoj per tiu armilo estas speciale mortigaj.</p>
<p> <b>Kondiĉoj:</b> Sperto kun armilo, bazataka bono +8 </p>
<p> <b>Avantaĝo:</b> Se vi batalas per la elektita armilo, duobliĝas la ŝanco por kritika trafo.</p>
<p> <b>Specife:</b> Vi povas elekti la talenton kritikan trafon progresitan plurfoje, tamen vi devas elekti ĉiufoje alian armilon. </p>
<p> La efiko de tiu talento ne sumiĝas kun aliaj efikoj kiuj altigas la ŝancon por kritika trafo.</p>

<h3 id="kuri">Kuri</h3>
<p> Vi estas rapida kuristo.</p>
<p> <b>Avantaĝo:</b> Kurante vi moviĝas per kvinobla normala moviĝrapideco (se vi portas mezpezan, malpezan aŭ neniun armaĵon kaj ne estas ŝarĝita pli ol mezpeze) aŭ per la kvarobla moviĝrapideco (se vi portas pezan armaĵon aŭ estas peze ŝarĝita). Se vi saltas post ekkuro (vido la priskripo de la kapableco akrobataĵo), vi ricevas bonon +4 por la ĵeto de akrobataĵo. Kiam vi kuras vi tenas vian lertecbonon por la AK.</p>
<p> <b>Kutime:</b> Vi moviĝas per kvarobla normala moviĝrapideco (se vi portas mezpezan, malpezan aŭ neniun armaĵon kaj ne estas ŝarĝita pli ol mezpeze) aŭ per la triobla moviĝrapideco (se vi portas pezan armaĵon aŭ estas peze ŝarĝita) kaj perdas vian lertecbonon por la AK. </p>

<h3 id="langolerteco">Langolerteco</h3>
<p> Vi kapablas influi la sintenon de aliaj kaj povas konvinki ilin per timigado. </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por ĵetoj de diplomatio kaj timigi. Se vi havas minimume 10 rangoj en unu el tiuj kapablecoj, la bono por tiu kapableco altiĝas al +4. </p>

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
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por kapablecĵetoj de malfunkciigi mekanismon kaj fingrolerteco. Se vi havas pli ol 10 rangoj en unu kapableco, la bono altiĝas ĉe tiu kapableco al +4. </p>

<h3 id="lertaj-manovroj">Lertaj manovroj</h3>
<p> Vi efektivigas batalmanovron per rapideco anstataŭ brutala forto.</p>
<p> <b>Avantaĝo:</b> Anstataŭ vian fortobonon vi povas aldoni vian lertecbonon al atak- kaj grandecbono por kalkuli vian bonon por batalmanovroj (vidu ĉapitron <a href="../batalo">Batalo</a>).</p>
<p> <b>Kutime:</b> Vi aldonas vian fortobonon al la atak- kaj gandecbono, se vi kalkulas la batalmanovran bonon. </p>

<h3 id="luktado-potenca">Luktado potenca [batalo]</h3>
<p> Daŭrigi luktadon, estas facila tasko por vi. </p>
<p> <b>Kondiĉoj:</b> Senarma bato progresita, luktado progresita, bazataka bono +6, LER 13 </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por ĵetoj de luktado. Tiu bono validas akumule kun la bono de la talento luktado progresita. Ekde tiam kiam vi sukcese komencis luktadon, la daŭrigo de la luktado estas movago. La talento ebligas al vi fari du ĵetoj de luktado ĉiuronde (por movi vian malamikon, lezi lin, aŭ firmteni lin). Tamen vi ne devas fari du ĵetojn. Sufiĉas unu sukcesa ĵeto por daŭrigi la luktadon.</p>
<p> <b>Kutime:</b> La daŭrigo de luktado estas bazago.</p>

<h3 id="luktado-progresita">Luktado progresita [batalo]</h3>
<p> Vi estas sperta por lukti kun aliaj personoj.</p>
<p> <b>Kondiĉoj:</b> LER 13, senarma bato progresita </p>
<p> <b>Avantaĝo:</b> Se vi uzas la batalmanovron luktado, vi ne provokas okazatakojn. Krome vi ricevas bonon +2 por ataki malamikojn kun luktado. Se malamiko atakas vin per tiu batalmanovro, via batalmanovra defendo altiĝas je +2. </p>
<p> <b>Kutime:</b> Se vi uzas la batalmanovron luktado, vi provokas okazatakon. </p>

<h3 id="majstra-metiisto">Majstra metiisto</h3>
<p> Viaj superaj metiaj kapablecoj ebligas al vi krei simplajn magiajn objektojn.</p>
<p> <b>Kondiĉo:</b> 5 rangoj en metio- aŭ profesiokapableco.</p>
<p> <b>Avantaĝo:</b> Elektu metio- aŭ profesiokapablecon en kiu vi havas 5 rangoj. Vi ricevas bonon +2 por la elektita metio- aŭ profesiokapableco. La rangoj en la elektita kapableco valoras kiel via sorĉnivelo por plenumi la kondiĉojn por la talentoj krei magian armilon kaj armaĵon kaj krei mirindan objekton. Vi povas per tiu talento krei magiajn objektojn kie viaj rangoj en la elektita kapableco anstataŭigas la necesan sorĉnivelon. Vi uzas la elektitan kapablecon por la ĵeto por kontroli la kreadon de la objekto. La MFG por la kreado de la objekto altiĝas kiel kutime por ĉiu necesa sorĉkomponanto (vidu la regulojn por krei magiajn objektojn en ĉapitro <a href="../magiaj_objektoj">magiaj objektoj</a>). Vi ne povas uzi tiun talenton por krei sorĉfunkciigajn aŭ sorĉefektivigajn objektojn.</p>
<p> <b>Kutime:</b> Nur sorĉkonantoj plenumas la kondiĉojn por la talentoj krei magian armilon kaj armaĵon kaj krei mirindan objekton. </p>

<h3 id="majstro-de-armilimprovizado">Majstro de armilimprovizado [batalo]</h3>
<p> Vi povas uzi preskaŭ ĉiun objekton kiel mortiga armilo kiel razilakra seĝokruro aŭ sako de faruno.</p>
<p> <b>Kondiĉoj:</b> Improvizata distancatako aŭ improvizata proksimatako, bazataka bono +8.</p>
<p> <b>Avantaĝo:</b> Vi ne ricevas malbonon por la uzo de improvizataj armiloj. Altigu la damaĝon kiun kaŭzas la improvizita armilo je unu nivelo (ekz. 1k4 iĝas 1k6) ĝis maksimume 1k8 (aŭ 2k6 se estas ambaŭmana improvizata armilo). La ŝanco por kritika trafo de la improvizata armilo estas 19-20 kaj la damaĝomultiplikanto &times;2.</p>

<h3 id="malmortulojn-forpeli">Malmortulojn forpeli</h3>
<p> Per la forto de pli altaj fortoj vi forpelas malmortulojn.</p>
<p> <b>Kondiĉo:</b> Klaskapableco enfokusigi pozitivan energion</p>
<p> <b>Avantaĝo:</b> Enfokusigante pozitivan energion per bazago vi povas igi malmortulojn en la ĉirkaŭaĵo de 9 metroj panike fuĝi. Malmortuloj povas fari voloĵeton por rezisti tiun efikon. La MFG de tiu volĵeto estas 10 + &frac12; via klerikonivelo + via KAR-modifilo. Malmortuloj kies voloĵeto malsukcesas fuĝas dum unu minuto. Inteligentaj malmortulaj estaĵoj ricevas ĉiuvice savĵeton por ĉesigi la efikon. Se vi uzas enfokusigi pozitivan energion tiamaniere, ĝi ne havas aliajn efikojn (nek por sanigi nek por lezi estaĵojn en via ĉirkaŭaĵo). </p>

<h3 id="malmortulojn-komandi">Malmortulojn komandi</h3>
<p> Dank' al kruelaj nekromanciaj fortoj vi povas komandi malmortulajn estaĵojn kaj igi ilin viaj servantoj.</p>
<p> <b>Kondiĉo:</b> Klaskapableco enfokusigi negativan energion</p>
<p> <b>Avantaĝo:</b> Vi povas uzi unu aplikon de enfokusigi negativan energion por subigi malmortulojn en la ĉirkaŭaĵo de 9 metroj. La malmortuloj povas fari volĵeton por rezisti tiun efikon. La MFG de tiu volĵeto estas 10 + &frac12; via klerikonivelo + via KAR-modifilo. Malmortuloj, kies ĵeto malsukcesas, estos sub via kontrolo kaj plenumas viajn ordonojn laŭ eble kiel ili estus sub la efikoj de la sorĉo kontroli malmortulojn. Inteligentaj malmortuloj ricevas ĉiutage novan savĵeton por malobei viajn ordonojn. Vi povas komandi maksimuman kvanton da malmortuloj kies sumigitaj vivkubetoj ne estas pli multaj ol via klerikonivelo. Se vi uzas enfokusigi negativan energion tiamaniere, ĝi ne havas aliajn efikojn (nek sanigan nek damaĝokaŭzan). Se malmortula estaĵo estas ankaŭ sub la kontrolo de alia kreaĵo kaj ricevas kontraŭstarajn komandojn, konkuraj KAR-ĵetoj estas farataj.</p>

<h3 id="meduza-kolero">Meduza kolero [batalo]</h3>
<p> Vi povas uzi la konfuzon de viaj malamikoj por fari plurajn trafojn.</p>
<p> <b>Kondiĉoj:</b> Gorgona pugno, skorpia pikilo, senarma bato progresita, bazataka bono +11 </p>
<p> <b>Avantaĝo:</b> Per plena atako kaj minimume unu senarma bato vi povas fari du pliajn senarmajn batojn per via plej alta bazataka bono. La senarmaj batoj devas esti celataj al duonsvenanta, sur malĝusta piedo surprizita, paralizata, ŝanceliĝanta, svenanta aŭ senkonscia malamiko. </p>

<h3 id="minaca-prezentado">Minaca prezentado [batalo]</h3>
<p> Viaj eblecoj kun via preferata armilo estas timigaj por malamikoj.</p>
<p> <b>Kondiĉoj:</b> Armilofokuso, Sperto kun elektita armilo, bazataka bono +1</p>
<p> <b>Avantaĝo:</b> Se vi batalas per armilo por kiu vi havas la talenton armilofokuso, vi povas per plena ago fari minacan prezentadon. Faru ĵeton de timigi por senkuraĝigi ĉiujn malamikojn en la ĉirkaŭaĵo de 9 metroj kiuj povas vidi vin. </p>

<h3 id="mortiga-bato">Mortiga bato [batalo]</h3>
<p> Per ĝuste celata bato vi finas rapide kaj sensufere la vivon de plejmultaj malamikoj.</p>
<p> <b>Kondiĉoj:</b> Minaca prezentado, armilofokuso potenca, disbati defendon, armilofokuso, bazataka bono +11, batalisto de nivelo 8</p>
<p> <b>Avantaĝo:</b> Per bazago vi faras unu solan atakon per armilo por kiu vi havas la talenton armilofokuson potencan kontraŭ svenantan malamikon aŭ malamikon kiu estas surprizita sur la malĝusta piedo. Se vi trafas, vi kaŭzas duoblan damaĝon. Plie la celo sangadas je 1 poento de konstitucio (vidu <a href="../statoj/">statoj</a>). La plia sangado kaj la plia damaĝo ne estas multiplikataj ĉe kritika trafo.</p>

<h3 id="mortiga-precizeco">Mortiga precizeco [batalo]</h3>
<p> Vi kapablas celi al malfortaĵoj de via malamiko kaj pro tio fari tre mortigajn distancatakojn. Por tio via trafoprobableco malaltiĝas.</p>
<p> <b>Kondiĉoj:</b> LER 13, bazataka bono +1</p>
<p> <b>Avantaĝo:</b> Vi ricevas malbonon -1 por ĵetoj de distancatako kaj bonon +2 por damaĝoĵetoj de distancatakoj. Kiam via bazataka bono atingas +4 kaj por ĉiuj pliaj +4 la malbono grandiĝas je -1 kaj la damaĝobono je +2. Vi devas elekti antaŭ via atako ĉu vi volas uzi tiun talenton. La efiko de la talento daŭras ĝis la venonta rondo. La kroma damaĝô ne validas por tuŝatakoj aŭ efikoj kiuj ne kaŭzas damaĝon de vivpoentoj.</p>

<h3 id="movebleco">Movebleco [batalo]</h3>
<p> Vi povas facile movi tra danĝera proksimbatalon. </p>
<p> <b>Kondiĉoj:</b> LER 13, evitmovo </p>
<p> <b>Avantaĝo:</b> Vi ricevas evitmovan bonon +4 por via AK kontraŭ okazatakoj kaŭzitaj de via movo en minacata kampo aŭ ĉar vi elmoviĝas el minacata kampo. Se vi perdas vian lertecbonon por la armaĵklaso, tiam vi ankaŭ perdas la evitmovajn bonojn. </p>
<p> Alie kiel plejmultaj tipoj de bonoj, evitmovaj bonoj estas akumulaj. </p>

<h3 id="neniu-preteriras">Neniu preteriras [batalo]</h3>
<p> Vi povas malhelpi malamikojn iri preter vi.</p>
<p> <b>Kondiĉoj:</b> batalrefleksoj</p>
<p> <b>Avantaĝo:</b> Se malamiko kaŭzas okazatakon ĉar li moviĝas tra najbara kampo de vi, vi povas fari batalmanovron kiel okazatakon. Se la ĵeto sukcesas, la malamiko ne plu povas moviĝi ĝis la fino de la rondo. Li povas uzi la reston de sia ago sed li ne povas moviĝi. Tiu talento ankaŭ aplikiĝas por kreaĵoj kiuj eliras el najbara kampo de vi kaj kaŭzas okazatakon. </p>

<h3 id="pafajxon-kapti">Pafaĵon kapti [batalo]</h3>
<p> Anstataŭ preterbati sagojn aŭ alian distancatakon, vi ankaŭ povas kapti la pafaĵon en la aero.</p>
<p> <b>Kondiĉoj:</b> LER 15, pafaĵon preterdirekti, senarma bato progresita</p>
<p> <b>Avantaĝo:</b> Se vi uzas la talenton pafaĵon preterdirekti, vi povas kapti la pafaĵon anstataŭ nur preterdirekti ĝîn. Ĵetarmiloj povas esti rekte reĵetataj al la atakanto (kvankam ne estas via vico) aŭ povas esti gardataj por posta uzo.</p>
<p> Por uzi tiun talenton vi devas havi unu liberan manon (ĝi ne rajtas porti ion). </p>

<h3 id="pafajxon-preterdirekti">Pafaĵon preterdirekti [batalo]</h3>
<p> Vi povas preterdirekti sagojn kaj aliajn pafaĵojn de ilia trajektorio tiel kiel vi ne estas trafata.</p>
<p> <b>Kondiĉoj:</b> LER 13, senarma bato progresita</p>
<p> <b>Avantaĝo:</b> Por uzi tiun talenton vi bezonas liberan manon (en kiu vi portas nenion). Unufoje ĉiuronde vi povas preterdirekti distancatakon kiu normale trafus vin kaj ne suferas damaĝon. Tamen vi ne rajtes esti sur la malĝusta piedo kaj vi devas konscii la atakon. La provo preterdirekti distancatakon ne kalkuliĝas kiel ago. Eksterordinaraj grandaj distancarmiloj (felsŝtonegoj, balistikaj pafaĵoj), naturaj kaj per sorĉo kreitaj distancatakoj ne povas esti preterdirektataj.</p>

<h3 id="pafi-kurante">Pafi kurante [batalo]</h3>
<p> Vi povas moviĝi, pafi per distancarmilo kaj plumoviĝi antaŭ via malamiko havas la ŝancon por reagi.</p>
<p> <b>Kondiĉoj:</b> LER 13, evitmovo, kernpafo, BAB +4</p>
<p> <b>Avantaĝo:</b> Per plena ago vi povas moviĝi per via moviĝrapideco kaj fari unu solan distancatakon dum via moviĝo.</p>
<p> <b>Kutime:</b> Vi ne povas moviĝi antaŭ kaj post atako. </p>

<h3 id="plia-barda-prezentado">Plia barda prezentado</h3>
<p> Vi povas uzi vian eblecon bardan prezentadon pli ofte ol kutime. </p>
<p> <b>Kondiĉo:</b> Klasebleco barda prezentado</p>
<p> <b>Avantaĝo:</b> Vi povas uzi la bardan prezentadon 6 pliajn fojojn ĉiutage.</p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĉiufoje la daŭro de la barda prezentado plilongiĝas je 6 rondoj ĉiutage.</p>

<h3 id="plia-batalekstazo">Plia batalekstazo</h3>
<p> Vi povas uzi vian eblecon batalekstazon pli ofte ol kutime. </p>
<p> <b>Kondiĉo:</b> Klasebleco batalekstazo</p>
<p> <b>Avantaĝo:</b> Vi povas uzi la batalekstazon 6 pliajn fojojn ĉiutage.</p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĉiufoje la daŭro de la batalekstazo plilongiĝas je 6 rondoj ĉiutage.</p>

<h3 id="plia-enfokusigi-energion">Plia enfokusigi energion</h3>
<p> Vi povas enfokusigi dian energion pli ofte.</p>
<p> <b>Kondiĉo:</b> Klasebleco enfokusigi energion</p>
<p> <b>Avantaĝo:</b> Vi povas uzi enfokusigi energion 2 pliajn fojojn ĉiutage.</p>
<p> <b>Specife:</b> Se paladino kun la ebleco enfokusigi energion elektas tiun talenton, li povas surmeti manon 4 pliajn fojojn ĉiutage tamen nur por enfokusigi energion.</p>

<h3 id="plia-graco">Plia graco</h3>
<p> La elbeco surmeti manon havas unu plian gracon.</p>
<p> <b>Kondiĉo:</b> Klasebleco surmeti manon</p>
<p> <b>Avantaĝo:</b> Elektu unu plian gracon kies kondiĉoj vi plenumas. Se vi nun uzas surmeti manon por sanigi suferitan damaĝon, la celo ricevas la efikon de tiu graco.</p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĝia efiko tamen ne estas akumula. Elektu ĉiufoje alian gracon. </p>

<h3 id="plia-ki">Plia Ki</h3>
<p> Vi povas uzi vian Ki-provizon pli ofte ĉiutage ol aliaj personoj. </p>
<p> <b>Kondiĉo:</b> Klasebleco Ki-provizo</p>
<p> <b>Avantaĝo:</b> Via Ki-provizo grandiĝas je 2 poentoj.</p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĉiufoje la provizo altiĝas je 2 pliaj poentoj.</p>

<h3 id="plia-surmeti-manon">Plia surmeti manon</h3>
<p> Vi povas uzi la eblecon surmeti manon pli ofte ol aliaj personoj.</p>
<p> <b>Kondiĉo:</b> Klasebleco surmeti manon</p>
<p> <b>Avantaĝo:</b> Vi povas uzi la eblecon surmeti manon 2 pliajn fojojn ĉiutage.</p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĉiufoje la kvanto da ĉiutagaj aplikoj altiĝas je 2 pliaj aplikoj ĉiutage.</p>

<h3 id="plura-pafado">Plura pafado [batalo]</h3>
<p> Vi povas pafi plurajn sagojn al unu celo.</p>
<p> <b>Kondiĉoj:</b> LER 17, kernpafo, rapide pafi, bazataka bono +6</p>
<p> <b>Avantaĝo:</b> Se vi faras plenan atakon per arko, vi pafas per la unua pafo du sagojn. Se la unua sukcesas, vi trafas per ambaŭ. Damaĝo bazita sur precizeco (kiel ekz. embuska atako) kaj damaĝo per kritika trafo nur kalkuliĝas unufoje. Damaĝobonoj pro la uzo de arko komposita kun alta fortobono kontraŭ la ĝismorta malamiko de la arbarano ktp. kalkuliĝas por ambaŭ sagoj. Damaĝoredukto kaj rezistencoj kalkuliĝas por ĉiu sago respektive.</p>

<h3 id="preterrajdante-ataki">Preterrajdante ataki [batalo]</h3>
<p> Se vi atakas sur rajdbesto, vi povas moviĝi, bati malamikon kaj poste plumoviĝi. </p>
<p> <b>Kondiĉoj:</b> 1 rango en rajdi, rajdante batali </p>
<p> <b>Avantaĝo:</b> Se vi rajdante faras sturmatakon, vi povas - kiel kutime du sturmatako - moviĝi kaj ataki, poste tamen vi povas plumoviĝi en la direkton de via sturmatako. La tuta moviĝo ne rajtas superi vian duoblan moviĝorapidecon. Ne vi nek via rajdbesto provokas okazatakon de la celo de via atako. </p>

<h3 id="preciza-pafo">Preciza pafo [batalo]</h3>
<p> Vi kapablas pafi en proksimbatalon.</p>
<p> <b>Kondiĉo:</b> Kernpafo</p>
<p> <b>Avantaĝo:</b> Vi povas pafi per distancarmiloj al malamiko (aŭ ĵeti al li) kiu estas en proksimbatalo, sen ricevi la kutiman malbonon -4 por via atakĵeto. </p>

<h3 id="preciza-pafo-progresita">Preciza pafo progresita [batalo]</h3>
<p> En la distancbatalo por vi nur kompletaj protektoj aŭ kamufladoj estas malhelpoj.</p>
<p> <b>Kondiĉoj:</b> LER 19, kernpafo, preciza pafo, bazataka bono +11</p>
<p> <b>Avantaĝo:</b> Viaj distancatakoj ignoras ĉiujn armaĵbonojn de la celo, kiuj ne estas kompletaj protektoj. Same por maltrafo-probablecoj ĉe atakoj al celo kiu havas malpli ol kompletan kamufladon. Kompleta protekto aŭ kompleta kamuflado donas al la celo la kutimajn avantaĝojn kontraŭ viaj distancatakoj.</p>
<p> <b>Kutime:</b> Komparu la kutimajn regulojn por protekto kaj kamuflado en la ĉapitro <a href="../batalo">Batalo</a>. </p>

<h3 id="punktpreciza-celado">Punktpreciza celado [batalo]</h3>
<p> Vi kapablas celi al la malfortaĵoj de la armaĵo de la malamiko.</p>
<p> <b>Kondiĉo:</b> LER 19, kernpafo, preciza pafo, preciza pafa progresita, BAB +16</p>
<p> <b>Avantaĝo:</b> Vi faras unu solan distancatakon kiel bazago. Kontraŭ tiu pafo la celo perdas ĉiujn bonojn por armaĵo, natura armaĵo aŭ ŝildoj de la armaĵklaso.</p>

<h3 id="pusxatako-potenca">Puŝatako potenca [batalo]</h3>
<p> Viaj puŝatakoj ŝanceligas viajn malamikojn. </p>
<p> <b>Kondiĉoj:</b> FOR 13, impeta atako, puŝatako progresita, bazataka bono +6</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por viaj ĵetoj de puŝatakoj. Tiu bono aldoniĝas al la bono de la talento puŝatako progresita. Se vi faras puŝatakon kontraŭ malamiko kaj puŝas lin malantaŭen, li provokas okazatakojn per viaj kamaradoj (ne per vi) kontraŭ si. </p>
<p> <b>Kutime:</b> Kreaĵoj kiuj estas puŝitaj per puŝatako ne provokas okazatakojn kontraŭ si.</p>

<h3 id="pusxatako-progresita">Puŝatako progresita [batalo]</h3>
<p> Vi estas lerta por puŝŝovi malamikojn.</p>
<p> <b>Kondiĉoj:</b> FOR 13, impeta atako, bazataka bono +1</p>
<p> <b>Avantaĝo:</b> Se vi uzas la batalmanovron puŝatakon, vi ne provokas okazatakon. Krome vi ricevas bonon +2 por ĵetoj de puŝatako. Plie via batalmanovra defendo altiĝas je +2 se malamiko faras puŝatakon kontraŭ vi. </p>
<p> <b>Kutime:</b> Vi provokas okazatakon, se vi uzas la batalmanovron puŝatakon. </p>

<h3 id="rajdante-batali">Rajdante batali [batalo]</h3>
<p> Vi estas sperta rajdisto, kaj lerte gvidas la rajdbeston. </p>
<p> <b>Kondiĉo:</b> 1 rango en rajdi </p>
<p> <b>Avantaĝo:</b> Se via rajdbesto estas trafita dum batalo, vi povas unufoje en la rondo fari ĵeton de rajdi (kiel subita ago), por nuligi la trafon. La trafo nuliĝas se la ĵeto de rajdi estas pli alta ol la atakĵeto de la malamiko.</p>

<h3 id="rajdante-distancataki">Rajdante distancataki [batalo]</h3>
<p> Vi havas sperton distancataki rajdante.</p>
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

<h3 id="rapide-pafi">Rapide pafi [batalo]</h3>
<p> Vi povas fari plian distancatakon.</p>
<p> <b>Kondiĉoj:</b> LER 13, kernpafo</p>
<p> <b>Avantaĝo:</b> Se vi faras plenan atakon per distancarmilo, vi povas uzi tiun armilon unu plian fojon. Se vi uzas tiun talenton, vi ricevas malbonon -2 por ĉiuj atakĵetoj.</p>

<h3 id="rapida-armilpretigo">Rapida armilpretigo [batalo]</h3>
<p> Vi povas elingigi vian armilon pli rapide ol kutime.</p>
<p> <b>Kondiĉo:</b> Bazataka bono +1</p>
<p> <b>Avantaĝo:</b> Vi povas nudigi vian armilon per libera ago anstataŭ per movago. Kaŝitajn armilojn (vidu kapablecon fingrolerteco) vi povas nudigi per movago. Roluloj kun tiu talento povas ĵeti sian armilon al celo per ĝia plena atakbono (same kiel rolulo kun arko). </p>
<p> Alĥemiaj objektoj, trinkaĵoj, skribaĵoruloj kaj sorĉbastonetoj ne povas esti rapide nudigitaj per tiu talento. </p>
<p> <b>Kutime:</b> Sen tiu talento vi povas nudigi armilon per movago aŭ (se via bazatako bono estas minimume +1) per libera ago parte de via moviĝo. Sen tiu talento vi povas nudigi kaŝitan armilon per bazago. </p>

<h3 id="rapide-resxargi">Rapide reŝargi [batalo]</h3>
<p> Elektu tipon de arbalesto (mana, malpeza aŭ peza arbalesto). Vi povas reŝargi tiun arbaleston rapide.</p>
<p> <b>Kondiĉo:</b> Sperto kun armiloj (elektita tipo de arbalesto)</p>
<p> <b>Avantaĝo:</b> La tempo por reŝargi la elektitan arbalestotipon malaltiĝas al libera ago (por mana kaj malpeza arbalesto) kaj al movago (por peza arbalesto). La reŝargo ankoraŭ provokas okazatakon. </p>
<p> Se vi elektas tiun talenton por mana aŭ malpeza arbalesto, vi povas pafi dum plena atako tiom ofte kiel per arko.</p>
<p> <b>Kutime:</b> Sen tiu talento via rolulo bezonas movagon por reŝargi manan aŭ malpezan arbaleston aŭ plenan agon por reŝargi pezan arbaleston. </p>
<p> <b>Specife:</b> Vi povas elekti tiun talenton plurfoje. Ĉiufoje por alia tipo de arbalesto. </p>

<h3 id="ruzeco">Ruzeco</h3>
<p> Vi lerte evitas la atenton kaj facile povas liberigi vin de katenoj.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por kapablecĵetoj de malkateni kaj sekreteco. Se vi havas pli ol 10 rangoj en unu kapableco, la bono altiĝas ĉe tiu kapableco al +4. </p>

<h3 id="sinhardado">Sinhardado</h3>
<p> Vi havas plibonan fizikan eltenpovon. </p>
<p> <b>Avantaĝo:</b> Vi ricevas 3 vivpoentojn kaj unu vivpoenton po ĉiu vivkubeto pli ol 3. Do se vi havas pli ol 3 vivkubetojn vi ricevas kun ĉiu nova vivkubeto unu plian vivpoenton (ekz. je nivelaltiĝo). </p>

<h3 id="sinkonservo">Sinkonservo</h3>
<p> Vi scias kiel vivi en la sovaĝejo kaj kuraci vundojn. </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por kapablecĵetoj de sanigi kaj transvivado. Se vi havas pli ol 10 rangoj en unu kapableco, la bono altiĝas ĉe tiu kapableco al +4. </p>

<h3 id="senarma-bato-progresita">Senarma bato progresita [batalo]</h3>
<p> Vi havas sperton por la batalo sen amriloj.</p>
<p> <b>Avantaĝo:</b> Vi ankaŭ kalkuliĝas kiel armita kiam vi batalas sen armiloj. Vi ne provokas okazatakojn de armitaj malamikoj kiam vi atakas ilin per senarma bato. Krome vi havas la elekton ĉu viaj senarmaj batoj kaŭzas mortigan aŭ nemortigan damaĝôn. </p>
<p> <b>Kutime:</b> Sen tiu talento vi kalkuliĝas kiel ne armita kiam vi faras senarman atakon kaj nur povas kaŭzi nemortigan damaĝon. </p>

<h3 id="senarmigo-potenca">Senarmigo potenca [batalo]</h3>
<p> Vi povas senarmigi malamikon tiel kiel lia armilo estas ĵetita malproksimen.</p>
<p> <b>Kondiĉoj:</b>Defensiva batalmaniero, senarmigo progresita, BAB +6, INT 13 </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por ĵetoj de senarmigo. Tiu bono validas aldone al la bono de la talento senarmigo progresita. Se vi sukcese senarmigas malamikon, lia armilo estas ĵetita 5 m en hazardan direkton de sia antaŭa posedanto.</p>
<p> <b>Kutime:</b> Perditaj armiloj per senarmigo surteriĝas je la piedoj de la senarmigita kreaĵo.</p>

<h3 id="senarmigo-progresita">Senarmigo-progresita [batalo]</h3>
<p> Vi sperte forbatas la armilon el la mano de via malamiko.</p>
<p> <b>Kondiĉoj:</b> Defensiva batalmaniero, INT 13</p>
<p> <b>Avantaĝo:</b> Se vi aplikas la batalmanovron senarmigi, vi ne provokas okazatakon. Krome vi ricevas bonon +2 por viaj ĵetoj per kiuj vi provas senarmigi la malamikon. Se kontraŭulo atakas vin per tiu batalmanovro, via batalmanovra defendo altiĝas je +2.</p>
<p> <b>Kutime:</b> Se vi aplikas la batalmanovron senarmigi, vi provokas okazatakon. </p>

<h3 id="sxildbato-progresita">Ŝildbato progresita [batalo]</h3>
<p> Vi povas defendi vin kontraŭ atakoj per via ŝildo kvankam vi uzas ĝin por atako.</p>
<p> <b>Kondiĉo:</b> Sperto kun ŝildoj</p>
<p> <b>Avantaĝo:</b> Se vi faras ŝildbaton, vi tamen povas aldoni la ŝildbonon de via ŝildo al via AK.</p>
<p> <b>Kutime:</b> Sen tiu talento rolulo kiu faras ŝildbaton perdas la ŝildbonon de sia ŝildo por la AK ĝis sia venonta vico (vidu ĉapitro <a href="../ekipajxo">ekipaĵo</a>). </p>

<h3 id="sxildfokuso">Ŝildfokuso [batalo]</h3>
<p> Vi havas sperton por flankigi batojn per la ŝildo.</p>
<p> <b>Kondiĉoj:</b> Sperto kun ŝildoj, bazataka bono +1 </p>
<p> <b>Avantaĝo:</b> Altigas la AK-bonon de via ŝildo je +1.</p>

<h3 id="sxildfokuso-potenca">Ŝildfokuso potenca [batalo]</h3>
<p> Vi havas sperton por flankigi batojn per la ŝildo.</p>
<p> <b>Kondiĉoj:</b> Sperto kun ŝildoj, ŝildfokuso, bazataka bono +1, batalisto de nivelo 8 </p>
<p> <b>Avantaĝo:</b> Altigas la AK-bonon de via ŝildo je +1. Tiu bono aldoniĝas al la bono de la talento ŝildfokuso.</p>

<h3 id="sxildmajstro">Ŝildmajstro [batalo]</h3>
<p> Via majstra sperto kun ŝildoj ebligas al vi efike ataki per ŝildoj.</p>
<p> <b>Kondiĉoj:</b> Sperto kun ŝildoj, ŝildbato progresita, ŝildpuŝo, batalo per du armiloj, LER 15, bazataka bono +11</p>
<p> <b>Avantaĝo:</b> Vi ne ricevas malbonojn por atakoj per ŝildo, se vi portas alian armilon. Aldonu vian plibonigan bonon de via ŝildo al atak- kaj damaĝoĵetoj tiel kiel ĝi estus pliboniga bono por armilo.</p>

<h3 id="sxildpusxo">Ŝildpuŝo [batalo]</h3>
<p> En ĝusta posicio vi povas uzi vian ŝildon por puŝi malamikojn.</p>
<p> <b>Kondiĉoj:</b> Sperto kun ŝildoj, ŝildbato progresita, batalo per du armiloj, LER 15, bazataka bono +6</p>
<p> <b>Avantaĝo:</b> Ĉiuj malamikoj kiuj estas trafitaj de ŝildbato de vi ankaŭ estas trafataj de aldona puŝatako kio anstataŭigas la kutime necesan ĵeton por la batalmanovro (vidu ĉapitron <a href="../batalo">batalo</a>). Tiu puŝatako ne provokas okazatakojn. Malamikoj kiuj ne povas moviĝi malantaŭen pro muro aŭ alia barilo falas surteren post ili moviĝis la maksimume eblan distancon. Vi povas elekti moviĝi kun via celo se vi povas fari kvinfut-paŝon aŭ uzi agon por movi en tiu vico.</p>

<h3 id="skorpia-pikilo">Skorpia pikilo [batalo]</h3>
<p> Vi povas fari senarman baton kiu grave malhelpas la movadon de via celo.</p>
<p> <b>Kondiĉo:</b> Senarma bato progresita </p>
<p> <b>Avantaĝo:</b> Faru unu solan senarman baton per bazago. Se vi trafas, vi kaŭzas normalan damaĝôn. Aldone la moviĝrapideco de via celo reduktiĝas al 1,5 metroj, se li ne sukcese faras persistecoĵeton (MFG 10 + &frac12; rolulnivelo + via SAĜ-modifilo). Se lia persistecoĵeto ne estas sukcesa, lia moviĝrapideco estas reduktita dum la nombro da rondoj kiu egalas al via SAĜ-modifilo.  </p>

<h3 id="sorcxi-en-la-batalo">Sorĉi en la batalo</h3>
<p> Vi ankaŭ povas sorĉi se vi estas menancita aŭ distrita.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +4 por ĵetoj de koncentriĝo por efektivigi sorĉojn aŭ uzi sorĉsimilajn eblecojn, kiam vi sorĉas defensive aŭ luktadas.</p>

<h3 id="sorcxi-en-zooformo">Sorĉi en zooformo</h3>
<p> Vi ankaŭ povas efektivigi sorĉojn se vi estas en formo kiu kutime ne permesas la efektivigadon de sorĉoj.</p>
<p> <b>Kondiĉoj:</b> SAĜ 13, klasebleco zooformo </p>
<p> <b>Avantaĝo:</b> Vi ankaŭ povas en zooformo efektivigi la parolajn kaj gestajn komponantojn de viaj sorĉoj. Vi anstataŭigas la necesajn parolajn kaj gestajn komponantojn per sonoj kaj movoj.</p>
<p> Vi ankaŭ povas uzi ĉiujn materialkomponantojn kaj enfokusigojn kiujn vi posedas, eĉ se tiuj objektoj estas transformitaj en vian novan figuron. Tamen la talento ne permesas uzi magiajn objektojn, tiel longe ke vi estas en figuro kiu kutime ne povas uzi ilin. Vi ankaŭ ne ricevas la eblecon paroli per tiu talento. </p>

<h3 id="sorcxi-sen-materialkomponantoj">Sorĉi sen materialkomponantoj</h3>
<p> Vi povas efektivigi sorĉojn sen malgrandaj materialkomponatoj.</p>
<p> <b>Avantaĝo:</b> Vi povas efektivigi sorĉon kies materialkomponantoj kostas maksimume 1 mo sen tiuj materialkomponantoj. La efektivigo de la sorĉo ankoraŭ provokas okazatakon. Se la sorĉo bezonas materialkomponantoj kiuj kostas pli ol 1 mo, vi devas havi tiun komponanton. </p>

<h3 id="sorcxfokuso">Sorĉfokuso</h3>
<p> Elektu unu skolon de magio. Estas pli malfacile rezisti viajn sorĉojn de tiu skolo.</p>
<p> <b>Avantaĝo:</b> Aldonu +1 al la malfacilecgrado por ĉiuj savĵetoj kontraŭ sorĉoj de via elektita skolo.</p>
<p> <b>Specife:</b> Vi povas elekti tiu talenton plurfoje. La rezulto tamen ne estas akumula. Ĉiufoje kiam vi elektas la talenton, ĝi aplikiĝas al alia skolo de magio. </p>

<h3 id="sorcxfokuso-potenca">Sorĉfokuso potenca</h3>
<p> Elektu unu skolon de magio por kiu vi jam elektis la talenton sorĉfokuson. Estas tre malfacile rezisti viajn sorĉojn de tiu skolo.</p>
<p> <b>Kondiĉo:</b> Sorĉfokuso </p>
<p> <b>Avantaĝo:</b> Aldonu +1 al la malfacilecgrado por ĉiuj savĵetoj kontraŭ sorĉoj de via elektita skolo. Tiu bono validas aldone al tiu kiun vi ricevas de la talento sorĉfokuso.</p>
<p> <b>Specife:</b> Vi povas elekti tiu talenton plurfoje. La rezulto tamen ne estas akumula. Ĉiufoje kiam vi elektas la talenton, ĝi aplikiĝas al alia skolo de magio por kiu vi jam havas la talenton sorĉfokuson. </p>

<h3 id="sorcxgxenulo">Sorĉĝenulo [batalo]</h3>
<p> Via trajnado malhelpas al malamikaj sorĉkonantoj efektivigi sorĉojn en via ĉirkaŭaĵo.</p>
<p> <b>Kondiĉo:</b> Batalisto de nivelo 6 </p>
<p> <b>Avantaĝo:</b> La MFG por efektivigi sorĉojn defensive, altiĝas je +4 por ĉiuj kiuj estas en via trafopovo. Tiu malfacileco nur validas se vi scias kie estas la malamiko kaj se vi povas fari okazatakon kontraŭ li. Se vi nur havas unu okazatakon ĉiuronde kaj jam eluzis ĝin, la talento ne estas aplikebla.</p>

<h3 id="sorcxmajstreco">Sorĉmajstreco</h3>
<p> Vi povas prepari limigitan kvanton da sorĉoj sen uzi viajn sorĉlibrojn.</p>
<p> <b>Kondiĉo:</b> Magiisto de nivelo 1</p>
<p> <b>Avantaĝo:</b> Ĉiufoje kiam vi elektas tiun talenton, vi povas elekti tiom da sorĉoj kiom egalas al vi INT-modifilo. Vi devas jam koni tiujn sorĉojn. Ekde tiu momento vi povas prepari tiujn sorĉojn sen sorĉolibro.</p>
<p> <b>Specife:</b> Sen tiu talento vi devas uzi sorĉolibron por prepari ĉiujn sorĉojn krom legi magion. </p>

<h3 id="sorcxrompulo">Sorĉrompulo [batalo]</h3>
<p> Vi povas trafi sorĉanton se li estas en via trafopovo kaj li ne sukcesas sorĉi defensive.</p>
<p> <b>Kondiĉo:</b> Sorĉĝenulo, batalisto de nivelo 10 </p>
<p> <b>Avantaĝo:</b> Malamikoj en via trafopovo kiuj ne sukcesas sorĉi defensive, provokas okazatakon de vi.</p>
<p> <b>Kutime:</b> Malamikoj kiuj ne sukcesas sorĉi defensive, ne provokas okazatakojn. </p>

<h3 id="sorcxvenigo-plifortigita">Sorĉvenigo plifortigita</h3>
<p> Sorĉvenigitaj kreaĵoj de vi estas pli potencaj kaj fortikaj ol kutime.</p>
<p> <b>Kondiĉoj:</b> sorĉfokuso (sorĉvenigo)</p>
<p> <b>Avantaĝo:</b> Ĉiu kreaĵo kiu estas venigita per sorĉveniga sorĉo, ricevas dum la daŭro de via sorĉo, plibonigan bonon +4 por forto kaj konstitucio. </p>

<h3 id="sperto-kun-armajxoj-malpezaj">Sperto kun armaĵoj malpezaj [batalo]</h3>
<p> Vi havas sperton por porti malpezajn armaĵojn.</p>
<p> <b>Avantaĝo:</b> Se vi portas armaĵon kun kiu vi havas sperton, la armaĵomalbono nur validas por kapablecĵetoj kiuj estas rilataj al forto aŭ lerteco.</p>
<p> <b>Kutime:</b> Rolulo kiu portas armaĵon kun kiu li ne havas sperton, devas aldoni la armaĵomalbonon al siaj atakĵetoj kaj al ĉiuj kapablecĵetoj kun movado.</p>
<p> <b>Specife:</b> Krom magiistoj, monaĥoj kaj sorĉistoj, ĉiuj roluloj aŭtomate havas la talenton sperto pri armaĵoj malpezaj kiel kroma talento. Ili ne devas elekti ĝîn.</p>

<h3 id="sperto-kun-armajxoj-mezpezaj">Sperto kun armaĵoj mezpezaj [batalo]</h3>
<p> Vi havas sperton por porti mezpezajn armaĵojn.</p>
<p> <b>Kondiĉo:</b> Sperto kun armaĵoj malpezaj</p>
<p> <b>Avantaĝo:</b> Vidu sperto kun armaĵoj malpezaj.</p>
<p> <b>Kutime:</b> Vidu sperto kun armaĵoj malpezaj.</p>
<p> <b>Specife:</b> Barbaroj, batalistoj, druidoj, klerikoj kaj paladinoj aŭtomate havas la talenton sperton kun armaĵoj mezpezaj kiel kroma talento kaj ne devas elekti ĝin. </p>

<h3 id="sperto-kun-armajxoj-pezaj">Sperto kun armaĵoj pezaj [batalo]</h3>
<p> Vi havas sperton por porti pezajn armaĵojn.</p>
<p> <b>Kondiĉo:</b> Sperto kun armaĵoj malpezaj, sperto kun armaĵoj mezpezaj</p>
<p> <b>Avantaĝo:</b> Vidu sperto kun armaĵoj malpezaj.</p>
<p> <b>Kutime:</b> Vidu sperto kun armaĵoj malpezaj.</p>
<p> <b>Specife:</b> Batalistoj, paladinoj aŭtomate havas la talenton sperton kun armaĵoj pezaj kiel kroma talento kaj ne devas elekti ĝin. </p>

<h3 id="sperto-kun-eksotikaj-armiloj">Sperto kun eksotiakj armiloj [batalo]</h3>
<p> Elektu unu eksotikan armilon kiel ekzemple la katenon najlitan aŭ la vipon. Vi scipovas uzi tiun armilon en la batalo kaj povas uzi ĉiujn eblajn ruzaĵojn aŭ ecojn de la armilo.</p>
<p> <b>Kondiĉo:</b> Bazataka bono +1</p>
<p> <b>Avantaĝo:</b> Vi povas ataki per la armilo sen malbonoj.</p>
<p> <b>Kutime:</b> Se vi uzas armilon pri kiu vi ne estas sperta, vi ricevas malbonon -4 por la atakĵetoj. </p>
<p> <b>Specife:</b> Vi povas elekti sperton kun eksotikaj arimoj plurfoje, ĉiufoje por alia armilo. </p>

<h3 id="sperto-kun-militarmiloj">Sperto kun militarmiloj [batalo]</h3>
<p> Elektu unu militarmilon. Vi scipovas uzi tiun militarmilon.</p>
<p> <b>Avantaĝo:</b> Vi povas normale ataki per la armilo de via elekto.</p>
<p> <b>Kutime:</b> Se vi uzas armilon pri kiu vi ne estas sperta, vi ricevas malbonon -4 por la atakĵetoj. </p>
<p> <b>Specife:</b> Arbaranoj, barbaroj, batalistoj kaj paladinoj havas sperton kun ĉiuj militarmiloj kaj ne devas elekti tiun talenton.</p>
<p> Vi povas elekti sperton kun militarimoj plurfoje, ĉiufoje por alia armilo. </p>

<h3 id="sperto-kun-sxildoj">Sperto kun ŝildoj [batalo]</h3>
<p> Vi estas trajnita por ĝuste uzi ŝildojn.</p>
<p> <b>Avantaĝo:</b> Se vi uzas ŝildon (krom turŝildo), la armaĵomalbono nur validas por kapablecĵetoj rilataj al forto aŭ lerteco.</p>
<p> <b>Kutime:</b> Se vi uzas ŝildon kun kiu vi ne havas sperton, vi devas aldoni la armaĵomalbonon al viaj atakĵetoj kaj al ĉiuj kapablecĵetoj kun movado.</p>
<p> <b>Specife:</b> Arbaranoj, barbaroj, bardoj, batalistoj, druidoj, klerikoj kaj paladinoj aŭtomate havas la talenton sperton kun ŝildoj kiel kroma talento kaj ne devas elekti ĝin.</p>

<h3 id="sperto-kun-simplaj-armiloj">Sperto kun simplaj armiloj [batalo]</h3>
<p> Vi estas trajnita por la uzo de simplaj armiloj.</p>
<p> <b>Avantaĝo:</b> Vi povas normale ataki per simplaj armiloj.</p>
<p> <b>Kutime:</b> Se vi uzas armilon pri kiu vi ne estas sperta, vi ricevas malbonon -4 por la atakĵetoj. </p>
<p> <b>Specife:</b> Krom druidoj, magiistoj kaj monaĥoj, ĉiuj roluloj aŭtomate havas sperton kun simplaj armiloj. Ili ne devas elekti tiun talenton. </p>

<h3 id="sperto-kun-tursxildoj">Sperto kun turŝildoj [batalo]</h3>
<p> Vi estas trajnita por ĝuste uzi turŝildojn.</p>
<p> <b>Kondiĉo:</b> Sperto kun ŝildoj </p>
<p> <b>Avantaĝo:</b> Se vi uzas turŝildon, la armaĵomalbono nur validas por kapablecĵetoj rilataj al forto aŭ lerteco.</p>
<p> <b>Kutime:</b> Se vi uzas ŝildon kun kiu vi ne havas sperton, vi devas aldoni la armaĵomalbonon al viaj atakĵetoj kaj al ĉiuj kapablecĵetoj kun movado, inkluzive rajdi.</p>
<p> <b>Specife:</b> Batalistoj aŭtomate havas la talenton sperton kun turŝildoj kiel kroma talento kaj ne devas elekti ĝin.</p>

<h3 id="superfortigaj-sorcxoj">Superfortigaj sorĉoj</h3>
<p> Viaj sorĉoj superas la sorĉreziston de viaj celoj pli facile ol kutime. </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por sorĉniveloĵetoj (1k20 + sorĉnivelo) per kiuj vi provas superi la sorĉreziston de kreaĵoj.</p>

<h3 id="superfortigaj-sorcxoj-potencaj">Superfortigaj sorĉoj potencaj</h3>
<p> Viaj sorĉoj superas sorĉreziston pli facile ol kutime.</p>
<p> <b>Kondiĉo:</b> Superfortigaj sorĉoj </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por sorĉniveloĵetoj (1k20 + sorĉnivelo) per kiuj vi provas superi la sorĉreziston de kreaĵoj. Tiu bono aldoniĝas al la bono de la talento superfortigaj sorĉoj.</p>

<h3 id="superkuri-potence">Superkuri potence [batalo]</h3>
<p> Malamikoj devas salti flanken por eviti viajn danĝerajn atakojn. </p>
<p> <b>Kondiĉoj:</b> FOR 13, impeta atako, superkuri progresite, bazataka bono +6</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por ĵetoj de superkuri. Tiu bono aldoniĝas al la bono de la talento superkuri progresite. Se vi superiras malamikojn kaj ili estas ĵetitaj sur la plankon, ili provokas okazatakojn. </p>
<p> <b>Kutime:</b> Malamikoj kiuj estas ĵetitaj sur la plankon per superkurado ne kaŭzas okazatakojn.</p>

<h3 id="superkuri-progresite">Superkuri progresite [batalo]</h3>
<p> Vi sperte superkuras viajn malamikojn.</p>
<p> <b>Kondiĉoj:</b> FOR 13, impeta atako, bazataka bono +1</p>
<p> <b>Avantaĝo:</b> Se vi uzas la batalmanovron superkuri, vi ne provokas okazatakojn. Krome vi ricevas bonon +2 por ĵetoj per kiuj vi provas superkuri malamikojn. Se malamiko atakas vin per tiu batalmanovro, via batalmanovra defendo altiĝas je +2. Celoj de la superkurado ne povas elekti evitmoviĝi.</p>
<p> <b>Kutime:</b> Se vi uzas la batalmanovron superkuri, vi provokas okazatakojn. </p>

<h3 id="superrajdi">Superrajdi [batalo]</h3>
<p> Vi povas superrajdi viajn malamikojn.</p>
<p> <b>Kondiĉoj:</b> 1 rango en rajdi, rajdante batali</p>
<p> <b>Avantaĝo:</b> Se vi rajdante provas superkuri malamikon, la celo ne povas eviti vin. Via rajdbesto povas hufbati ĉiun kontraŭulon kiun vi faligis. Por tio ĝi ricevas la normalan bonon +4 kontraŭ surtere kuŝantaj malamikoj. </p>

<h3 id="sveniga-bato">Sveniga bato [batalo]</h3>
<p> Vi ekzakte scias kie vi devas trafi malamikon.</p>
<p> <b>Kondiĉoj:</b> LER 13, SAĜ 13, senarma bato progresita, bazataka bono +8</p>
<p> <b>Avantaĝo:</b> Vi devas anonci la uzon de tiu talento antaŭ vi faras vian atakĵeton (malsukcesa atakĵeto do nuligas la atakon). La sveniga bato kaŭzas normalan damaĝon kaj devigas vian malamikon fari persistecoĵeton (MFG 10 + &frac12; via rolulnivelo + via SAĜ-modifilo). Defendanto, kies savĵeto malsukcesas, estas svenanta dum unu rondo (ekzakte ĝis via venonta ago de via venonta vico). Svenanta rolulo lasas fali ĉiun kiun li tenas en siaj manoj, ne plu povas agi, perdas sian lertecomodifilon de sia AK kaj ricevas malbonon -2 por sia AK. Por ĉiuj kvar niveloj kiujn havas via rolulo (vidu ankaŭ sub specife), vi povas fari unu tian svenigan baton ĉiutage. Dum unu rondo vi nur rajtas fari unu svenigan baton. Konstruoj, ŝlimuloj, plantoj, malmortuloj, senkorpaj estaĵoj kaj kreaĵoj kiuj estas imunaj kontraŭ kritiakj trafoj, ne povas esti svenigataj. </p>
<p> <b>Specife:</b> Monaĥoj ricevas la talenton svenigan baton kiel kroma talento je la 1a nivelo, eĉ se ili ne plenumas la kondiĉojn. Monaĥoj povas fari ĉiutage tiom da svenigaj batoj kiom egalas al siaj monaĥoniveloj plus unufoje por ĉiuj kvar niveloj kiujn li havas en aliaj klasoj krom monaĥo. </p>

<h3 id="timiga-forto">Timiga forto [batalo]</h3>
<p> Via fizika forto aspektas timiga.</p>
<p> <b>Avantaĝo:</b> Adiciu vian FOR-modifilon aldone al via KAR-modifilo por ĵetoj de timigi.</p>

<h3 id="trarompa-bato">Trarompa bato [batalo]</h3>
<p> Viaj atakoj povas trarompi la defendon de kelkaj estaĵoj.</p>
<p> <b>Kondiĉoj:</b> Armilofokuso, bazataka bono +1, batalisto de nivelo 12, sperto kun armiloj </p>
<p> <b>Avantaĝo:</b> Viaj atakoj per armiloj por kiuj vi elektis armilofokuson, ignoras ĝis 5 poentoj da damaĝoredukto. Tiu talento ne estas aplikebla ĉe damaĝoredukto sen indiko pri iu tipo (ekz. DR 10/-).</p>

<h3 id="trarompa-bato-potenca">Trarompa bato potenca [batalo]</h3>
<p> Viaj atakoj trarompas la defendon de plejmultaj estaĵoj. </p>
<p> <b>Kondiĉoj:</b> Armilofokuso, batalisto de nivelo 16, trarompa bato</p>
<p> <b>Avantaĝo:</b> Viaj atakoj per armiloj por kiuj vi elektis armilofokuson, ignoras ĝis 10 poentoj da damaĝoredukto. Ĉe damaĝoredukto sen indiko pri iu tipo (ekz. DR 10/-) nur 5 poentoj estas ignorataj.</p>

<h3 id="trompisto">Trompisto</h3>
<p> Vi estas sperta por trompi aliajn - same per vorto aŭ per alivesto. </p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por kapablecĵetoj de blufi kaj alivesti. Se vi havas pli ol 10 rangoj en unu kapableco, la bono altiĝas ĉe tiu kapableco al +4. </p>

<h3 id="vigleco">Vigleco</h3>
<p> Per viaj subtilaj sensoj vi kaptas aĵojn kiuj restas kaŝitaj por aliaj.</p>
<p> <b>Avantaĝo:</b> Vi ricevas bonon +2 por kapablecĵetoj de percepto kaj rekoni motivon. Se vi havas pli ol 10 rangoj en unu kapableco, la bono altiĝas ĉe tiu kapableco al +4. </p>

<?php require '../../pagxpiedo.php' ?>
