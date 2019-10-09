<!DOCTYPE html>
<html lang="en">

<?php
session_start();
    require_once "database.php";
if (isset($_SESSION['id'])){
    $query = "SELECT * FROM uporabniki where id = ".$_SESSION['id'];
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch();
    if ($_SESSION['admin'] == "admin"){ ?>
    
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pravila</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">PROrum</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Meni
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Domov</a>
          </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="forum.php">Forum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="odjava.php">Odjava</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
<!-- About Section -->
<section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Pravila</h2>
          <pre class="text-white-50"> A. OBNAŠANJE IN KULTURA NA FORUMU
1. člen
(pridobitve francoske revolucije)

Prepovedano je spodbujati k narodni, rasni, verski, spolni ali drugi neenakopravnosti, k nasilju in vojni ter izzivati 
ali razpihovati narodno, rasno, versko, spolno ali drugo sovraštvo, razdor ali nestrpnost.
Prepovedano je objavljanje, iskanje, ponujanje in omogočanje dostopa do vsebin, ki žalijo človekovo dostojanstvo.
2. člen
(kultura dialoga)

Prepovedana je razžalitev, obrekovanje, žaljiva obdolžitev in opravljanje.
Zahteva se argumentiran pogovor, ki se nanaša na predmet razprave. Zaželeno je, da je podkrepljen z viri.
3. člen
(vsebina naslovov)

Naslovi tem v forumu morajo odsevati njihovo vsebino. Naslovi podobni "na pomoč", "ne dela" so prepovedani.

4. člen
(poplavljanje in neaktivne teme)

Prepovedano je odpiranje enakih ali podobnih tem in vprašanj v različnih oddelkih Foruma ali temah.
Prepovedano je masovno pošiljanje sporočil ali odpiranje tem.
Prepovedano je oživljanje neaktivne teme, brez podajanja novih informacij.
5. člen
(berljivost prispevkov)

Prispevki morajo biti pravopisno pravilni, kar vključuje tudi rabo velikih začetnic in ločil.

6. člen
(mala prohibita)

Prepovedano je objavljanje, iskanje, ponujanje in omogočanje dostopa do vsebin, ki uživajo avtorskopravno varstvo, brez ustreznega prenosa avtorskopravnega upravičenja.
Prepovedano je objavljanje, iskanje, ponujanje in omogočanje dostopa do snovi, predmetov, navodil za postopke ali dejavnosti, katerih promet je prepovedan z zakonom.
7. člen
(shizofrenija)

Prepovedano je sodelovanje znotraj iste teme pod več različnimi vzdevki.

B. INTELEKTUALNA LASTNINA IN JAMSTVA
8. člen
(prenosi avtorjevih upravičenj in jamstva)

Če oseba pošlje gradivo, ki je na podlagi Zakona o avtorski in sorodnih pravicah -- ZASP (Uradni list RS, št. 21/95 s spremembami) varovano gradivo, tako, da je za objavo tega gradiva na strani Prorum potrebna odobritev upravljavca te strani, neizključno, 
teritorialno in časovno neomejeno in za ves čas trajanja prenese pravico reproduciranja, pravico distribuiranja, pravico predelave in pravico dajanja na voljo javnosti na Prorum. Poleg tega dovoli, da Prorum te pravice prenaša naprej na tretje osebe.
Če oseba pošlje gradivo, ki je na podlagi Zakona o avtorski in sorodnih pravicah -- ZASP (Uradni list RS, št. 21/95 s spremembami) varovano gradivo, tako, da za objavo tega gradiva na strani Prorum ni potrebna odobritev upravljavca te strani, neizključno, 
teritorialno in časovno neomejeno in za ves čas trajanja prenese pravico reproduciranja in pravico dajanja na voljo javnosti na Prorum. Poleg tega dovoli, da Prorum te pravice prenaša naprej na tretje osebe.
Prorum ima pravico do neobjave, krajšanja, spremembe vseh prispevkov uporabnikov, če ti prispevki kršijo pravila te strani ali javni red RS.
Oseba, ki pošlje gradivo (tako gradivo, za objavo katerega je potrebna odobritev, kot tudi gradivo za objavo katerega ni potrebna odobritev) jamči, da s svojim gradivom ne posega v avtorske, sorodne pravice ali druge pravice tretjih oseb v skladu z veljavno zakonodajo.
Oseba, ki pošlje gradivo (tako gradivo, za objavo katerega je potrebna odobritev, kot tudi gradivo za objavo katerega ni potrebna odobritev) se zavezuje, da bo v primeru, da se izkaže, da gradivo protipravno posega v pravice tretjih oseb, 
upravljalcu Proruma povrnila vso škodo, ki bi mu zaradi tega nastala.
Oseba, ki pošlje gradivo (tako gradivo, za objavo katerega je potrebna odobritev, kot tudi gradivo za objavo katerega ni potrebna odobritev) se odpoveduje vsem morebitnim zahtevkom do Proruma oz. njegovega upravljavca v zvezi z objavo tega gradiva.
C. ZASEBNOST
9. člen
(zbiranje in hramba podatkov o prijavljenih uporabnikih in obiskovalcih)

Prorum zbira in hrani naslednje podatke o prijavljenem uporabniku:
vsa uporabniška imena (vzdevki);
naslov elektronske pošte;
namesto podatka iz prejšnje alineje, na njegovo zahtevo rezultat enosmerne zgoščevalne funkcije (hash);
podatke, ki jih uporabnik posreduje v svoj profil;
podatke o datumu in času registracije in zadnje prijave.
Prorum za uporabnike, ki uporabljajo storitev prijave s pomočjo tretjih oseb (Google), v povezavi z uporabniškim računom na Prorumu hrani enolični identifikator, posredovan s strani teh tretjih oseb.
Prorum hrani podatke o uporabniku, ki jih ta objavi izven svojega profila.
Prorum hrani o prijavljenih uporabnikih podatke o ogledih tem za zagotavljanje delovanja funkcionalnosti označevanja prebrane vsebine: oznaka teme, enolična oznaka uporabnika, čas ogleda.
Prorum ločeno od vseh ostalih podatkov zbira naslednje podatke o prometu na strežniku: IP naslov, različica brskalnika (user agent), čas, naslov obiskane strani (URL), stran s katere je obiskovalec prišel na obiskano stran (referrer) -- če je ta podatek posredovan;
Prorum v zvezi s prijavljenimi uporabniki zbira podatke o njihovih predlogih za sankcije iz 4., 6. in 7. točke 24. člena Pravil.
Prorum v zvezi s prijavljenimi uporabniki zbira podatke iz 1., 2., 3 in 9. točke 24. člena Pravil.
Prorum v zvezi z obveščanjem o dogodkih, ki ga je prijavljen uporabnik zahteval, zbira podatke o teh zahtevah in podatke o izvedbi (čas in tip -- dogodek obvestila in oznaka objekta, na katerega se obveščanje nanaša, npr. ID teme, oddelka, kategorije novic...) obveščanja.
Prorum za vodenje statistike o obiskanosti spletne strani uporablja orodje Matomo.
10. člen
(rok hrambe podatkov iz 9. člena)

Podatki iz 1. in 5. alinee prvega odstavka 9. člena (uporabniško ime) se hranijo trajno.
Podatki iz 2. alinee prvega odstavka 9. člena se hranijo dve leti po poteku leta v katerem se je uporabnik zadnjič prijavil. Po tem času se pretvorijo z enosmerno zgoščevalno funkcijo. 
Uporabnik lahko te podatke v svojem profilu kadarkoli izbriše. V tem primeru se uporabnikov račun trajno in nepovratno deaktivira. Deaktivacija uporabnikovega računa pomeni, da z njim na Prorumu ni več mogoče sodelovati.
Podatki iz 3. alinee prvega odstavka 9. člena se hranijo trajno. Uporabnik lahko te podatke v svojem profilu kadarkoli izbriše. V tem primeru se uporabnikov račun trajno in nepovratno deaktivira.
 Deaktivacija uporabnikovega računa pomeni, da z njim na Prorumu ni več mogoče sodelovati.
Podatki iz 4. alinee prvega odstavka 9. člena se hranijo eno leto po poteku leta v katerem se je uporabnik zadnjič prijavil. Uporabnik lahko te podatke v svojem profilu kadarkoli izbriše. 
V primeru, da je uporabnik pri objavi svojega prispevka zahteval navedbo svojega imena iz profila, se ta podatek hrani do preklica te zahteve oziroma dokler uporabnik podatka o imenu v profilu ne izbriše sam.
Podatki iz drugega odstavka 9. člena se hranijo trajno, oz. dokler uporabnik ne izbriše povezave v svojem profilu oz. ne onemogoči povezave na straneh tretjih oseb.
Podatki iz tretjega odstavka 9. člena se hranijo trajno. Zasebna sporočila se brišejo eno leto po poteku leta, v katerem se je na Prorum prijavil zadnji udeleženec v tem pogovoru.
Podatki iz četrtega odstavka 9. člena se hranijo do največ enega leta od dogodka. Periodično se brišejo vsi podatki o ogledih tem razen zadnjega.
Podatki iz petega odstavka 9. člena se ob dogodku zapišejo v dnevnik tega dne. V dnevnik posameznega dne se podatki iz prej navedene alinee začnejo zapisovati ob 06:25 tega dne in se prenehajo zapisovati ob 06:25 naslednjega dne. 
Dnevnik posameznega dne se prepiše po izteku naslednjega obdobja (06:25, 24 ur po koncu pisanja dnevniške datoteke).
Podatki iz šestega odstavka 9. člena se hranijo trajno.
Podatki iz sedmega odstavka 9. člena se hranijo trajno.
Podatki iz prvega odstavka 12. člena se hranijo dokler uporabnik ne zapre brskalnika.
Podatki iz drugega odstavka 12. člena se hranijo trajno, oz. dokler uporabnik ne zbriše piškotov iz brskalnika oz. dokler ne izklopi samodejne prijave v svojem profilu.
Podatki iz osmega odstavka 9. člena se hranijo trajno.
Podatki iz devetega odstavka 9. člena se hranijo skladno z mnenjem Informacijskega pooblaščenca.
11. člen
(uporaba podatkov iz 9. člena)

Podatki iz 1. alinee prvega odstavka 9. člena se uporabljajo za prikazovanje uporabnikove identitete, kjerkoli je na Prorumu to potrebno.
Podatki iz 2. alinee prvega odstavka 9. člena se uporabljajo za:
obveščanje uporabnika o dogodkih (npr. nova tema v oddelku, nova novica, nov odgovor na določeno temo, nov zaposlitveni oglas), za katere je zahteval obveščanje;
postopek ponastavitve gesla;
pošiljanje aktivacijskega sporočila ob registraciji ali spremembi tega podatka;
obveščanje v zvezi z delovanjem sistema.
Podatki iz drugega odstavka 9. člena se uporabijo za izvedbo prijave uporabnika na Prorum preko prijavnih sistemov tretjih oseb.
Podatki iz tretjega odstavka 9. člena se uporabljajo v obsegu iz 8. člena in za izdelavo novih vsebin.
Podatki iz četrtega odstavka 9. člena se uporabljajo za razmejevanje med že videno in novo vsebino.
Podatki iz petega odstavka 9. člena se uporabljajo za spremljanje dogajanja na spletni strani, identifikacijo izrednih dogodkov in ukrepanje ob njihovem pojavu;
Podatki iz šestega odstavka 9. člena se uporabljajo za delovanje avtonomnega sistema moderiranja.
Podatki iz sedmega odstavka 9. člena se uporabljajo za izvajanje dela pravil, ki ureja sankcioniranje.
Podatki iz osmega odstavka 9. člena se uporabljajo za obveščanje uporabnika o dogodkih, za katere je zahteval obveščanje.
Podatki iz devetega odstavka 9. člena se uporabljajo za spremljanje makrotrendov obiska na Prorumu.
12. člen
(piškotki)

Prorum dodeli uporabniku ob prijavi sejni piškotek (session cookie -- slotech), s katerim se vzdržuje stanje prijavljenosti uporabnika in ob vsakem uporabnikovem zahtevku preverja njegov obstoj.
Prorum dodeli uporabniku na njegovo zahtevo trajen piškotek (persistent cookie slotechAP) za njegovo enolično identifikacijo, za delovanje funkcionalnosti samodejne prijave na Prorum in ob vsakem zahtevku preverja njegov obstoj.
Piškotka iz prejšnjih dveh alinej sta nujno potrebna za zagotovitev storitve informacijske družbe -- zagotovitev delovanja dela strani, ki je opisana v prvih dveh odstavkih tega člena.
Prorum drugih piškotkov ne dodeljuje.
13. člen
(uporabniki brez prispevkov)

Prorum uporabniku račun izbriše v celoti eno leto po poteku leta v katerem se je uporabnik zadnjič prijavil, če uporabnik nikoli ni objavil nobenega prispevka. 
Oddaja malega oglasa in izbrisan odgovor, tema ali predlog novice ne štejejo za prispevek po tem členu. Izbris računa v celoti pomeni izbris vseh podatkov iz 9. člena.

14. člen
(zavarovanje nejavnih podatkov)

Prorum bo zagotovil vse razumne ukrepe, da podatki, ki jih uporabnik ni napravil javno dostopne, ne bodo dostopni tretjim osebam.

Prorum osebnih podatkov namerno ne izvaža v tretje države.

15. člen
(razkrivanje podatkov)

Podatki iz 9. člena se razkrijejo pristojnemu organu na njegovo obrazloženo, po obliki in vsebini zakonito zahtevo.
Podatke iz 9. člena Prorum razkrije spontano, če je to nujno potrebno za zaščito in obrambo njegovih pravic oziroma interesov.
Postopek v zvezi z vložitvijo zahteve za posredovanje podatkov iz prvega odstavka tega člena je predpisan in je sestavni del teh pravil.
16. člen
(zasebna sporočila)

Teme v Zasebnih sporočilih, v katerih sodeluje pet ali več oseb, so nadzorovane enako kot Forum.
Tem iz zgornjega odstavka v katerih sodeluje manj kot pet oseb, upravljalec ne nadzoruje niti prebira.
D. OGLAŠEVANJE
17. člen
(pospeševanje prodaje in naročene vsebine)

Prepovedano je objavljanje političnih oglaševalskih vsebin in drugih oblik politične propagande.
Za oglaševalske vsebine, katerih objavo naroči pravna ali fizična oseba z namenom, da bi s tem pospeševala promet proizvodov, storitev, pravic ali obveznosti,
 pridobivala poslovne partnerje ali si v javnosti ustvarjala ugled in dobro ime, je potrebno skleniti poseben dogovor z upravljavcem strani.
18. člen
(mali oglasi)

Če oglas ne sodi v oglaševalsko vsebino iz prejšnjega člena, ga je dovoljeno objaviti samo v oddelku Mali oglasi.
Tema Navodila za pisanje malih oglasov je sestavni del teh pravil.
19. člen
(brisanje malih oglasov)

Mali oglasi se lahko brišejo po preteku enega meseca od objave, najkasneje pa se izbrišejo dva meseca po preteku meseca v katerem so bili objavljeni.

20. člen
(nejasno oglaševanje)

Če se pojavi upravičen dvom, ali oglas ureja 17. ali 18. člen, mora tisti, ki je oglas objavil (oglaševalec), na zahtevo Proruma vsebino oglasa pojasniti.
Prorum sporoči zahtevo za pojasnilo iz prvega odstavka tega člena v izbrisanem sporočilu. Vsa nadaljna komunikacija poteka po elektronski pošti (legal@Prorum.com).
21. člen
(zaposlitveni oglasi)

Oglaševanje zaposlitev je na Prorumu dovoljeno samo na za to določenem mestu - Zaposlitve.
Na tem mestu lahko oglašujejo zaposlitev izključno subjekti, ki neposredno zaposlujejo.
Subjekti, ki se ukvarjajo s posredovanjem zaposlitev, ne smejo oglaševati zaposlitev na mestu, določenem v prvem odstavku tega člena, ampak morajo za to skleniti poseben dogovor z upravljavcem strani.
Upravljavec lahko določi obvezna polja, s predpisano vsebino, za uspešno oddajo zaposlitvenega oglasa.
Zaposlitveni oglas lahko ponudnik zaposlitve kadarkoli izbriše, v vsakem primeru pa se oglas avtomatično izbriše en mesec po preteku meseca v katerem je bil oddan. Izbris zaposlitvenega oglasa pomeni,
 da javnosti ni dostopna firma oziroma naziv ponudnika. Ostala izpolnjena polja ostanejo vidna javnosti.
22. člen
(odgovornost za resničnost in točnost oglaševalskih vsebin)

Za resničnost in točnost navedb v oglasu iz 17., 18. ali 21. člena je odgovoren oglaševalec.
E. ODGOVORNOST
23. člen
(odgovornost za informacije, storitve in poškodbe)

Informacije, katerih objavo na strani Prorum odobri upravljavec te strani, so izključno informativne narave. Prorum ne prevzema nobene odgovornosti, da so te informacije popolne, vsebinsko pravilne in ažurne.
Informacije, katerih objave na strani Prorum ne odobri upravljavec te strani, se presojajo izključno v povezavi s Pravili te strani. Prorum ne prevzema nobene odgovornosti, da so te informacije popolne, vsebinsko pravilne in ažurne.
Storitve, ki jih ponuja Prorum so takšne kot so. Prorum pod nobenim pogojem ne prevzema nobene odgovornosti, da bodo ponujene storitve delovale varno, neprekinjeno, brez napak ali brez izgube podatkov.
Prorum ne prevzema nobene odgovornosti za kakršnekoli poškodbe uporabnikove opreme, s katero dostopa do te strani. Prorum ne prevzema nobene odgovornosti za kakršnekoli izgube uporabnikovih podatkov na njegovi opremi, 
ki bi nastale zaradi dostopa do strani Prorum. Prorum ne prevzema nobene odgovornosti v zvezi z objavljenimi povezavami do tujih storitev in strani.
F. SANKCIJE
24. člen
(vrste sankcij)

Sankcije so:

dodelitev oznake persona rudis;
dodelitev oznake persona non grata;
vklop uporabnikovim očem neprijaznega vmesnika;
samodejna obdelava tem in odgovorov za zagotovitev večje berljivosti;
združevanje uporabniških imen;
zaklep teme;
brisanje odgovora ali teme;
popravljanje odgovora;
začasna omejitev odpiranja tem in dajanja odgovorov.
25. člen
(persona rudis in persona non grata)

Persona rudis pomeni nevljudnega uporabnika.
Persona non grata pomeni nezaželenega uporabnika. Ta naziv za uporabnika pomeni tudi, da nima pravice do pritožbe zoper sankcije, ki se mu izrečejo in izvedejo, nadaljnih sankcij se mu tudi ne obrazloži.
26. člen
(izrekanje ukrepov)

Vse sankcije iz 24. člena izrečejo in izvedejo administratorji (upravljavci) in moderatorji.
Ukrepe iz 4., 6. in 7. točke 24. člena lahko predlagajo tudi tisti prijavljeni uporabniki, ki:
so se registrirali pred določenim dnem in so na forumu ustrezno aktivni,
zaradi večkratnega preglasovanja njihovih predlogov te pravice niso izgubili,
zoper njih ni izrečen ukrep iz 1.-3. točke 24. člena pravil in
zoper njih v nedavnem času ni bil izrečen ukrep iz 7. točke 24. člena v statistično pomembni količini.
27. člen
(obrazložitev ukrepa)

Administrator ali moderator mora ukrep obrazložiti, razen v primerih iz 2. točke 25. člena.

28. člen
(pritožba)

Zoper sankcije iz 24. člena ima uporabnik pravico do pritožbe.
Vse pritožbe so javne. Podane morajo biti v 7 dneh od ukrepa, izjemoma v enem mesecu.
Argumentirano pritožbo mora uporabnik poslati v oddelek Prorum, tema Pritožbe. Pritožb poslanih po zasebnih sporočilih, elektronski pošti ali odprte v obliki tem v drugih oddelkih se ne upošteva.
Na pritožbo odgovarja tisti, ki je posredoval, ali upravljavec strani.
V pritožbenem postopku je intervencija prepovedana.
Odgovor na pritožbo je dokončen.
29. člen
(prenehanje sankcij)

Oznaka Persona rudis preneha:
ko se kršitelj javno opraviči, vendar ne prej kot v 3 dneh od dodelitve oznake;
takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Oznaka Persona non grata preneha:
ko se kršitelj javno opraviči, vendar ne prej kot v 14 dneh od dodelitve oznake;
takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Kršitelju se izklopi očem neprijazen vmesnik:
ko se javno opraviči, vendar ne prej kot v 14 dneh od vklopa vmesnika;
takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Tema se odklene, takoj ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Tema ali odgovor se odbriše ali vrne v prvotno stanje, takoj ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Začasna omejitev odpiranja tem in pošiljanja odgovorov preneha najkasneje v 30 dneh. Ta sankcija preneha takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Kršitelj se javno opraviči v forumu v oddelku Prorum.
Prorum lahko ob izredni priložnosti podeli splošno amnestijo. Takrat prenehajo sankcije iz 1., 2., 3. in 9. točke 24. člena.
30. člen
Kršitev 1. člena se kaznuje z zaklepom ali izbrisom teme, odgovor se izbriše. Kršitelju se lahko dodeli oznaka persona rudis.
Če se kršitve nadaljujejo, se kršitelju dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, lahko se mu začasno omeji pošiljanje odgovorov in odpiranje tem.
Ob posebno hudi kršitvi se kršitelju takoj dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, začasno se mu omeji pošiljanje odgovorov in odpiranje tem.
31. člen
Kršitev 2. člena se kaznuje z izbrisom odgovora ali teme, tema se lahko zaklene. Kršitelju se lahko dodeli oznaka persona rudis.
Če se kršitve nadaljujejo, se kršitelju dodeli oznaka persona non grata, lahko se mu vključi očem neprijazen vmesnik, lahko se mu začasno omeji pošiljanje odgovorov in odpiranje tem.
Ob posebno hudi kršitvi se kršitelju takoj dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, začasno se mu omeji pošiljanje odgovorov in odpiranje tem.
Odgovori, ki se ne nanašajo na predmet razprave, se lahko premaknejo v novo temo, če odpirajo zanimivo debato.
32. člen
Kršitev 3. člena se kaznuje z zaklepom teme. Neustrezen naslov se lahko popravi.

33. člen
Kršitev 4. člena se kaznuje z zaklepom teme ali izbrisom odgovora.

34. člen
Groba kršitev 5. člena se odpravi s samodejno pretvorbo prispevka ob oddaji. Moderator lahko dodatno popravi prispevek.

35. člen
Kršitev 6. člena se kaznuje z zaklepom ali izbrisom teme, odgovor se izbriše.

36. člen
Kršitev 7. člena se kaznuje z združitvijo uporabniških imen.

37. člen
Če se kršitve 3., 4. ali 6. člena nadaljujejo se kršitelju dodeli oznaka persona rudis, lahko se mu vključi očem neprijazen vmesnik, lahko se mu začasno omeji pošiljanje odgovorov in odpiranje tem.
Če se kršitve členov iz prejšnjega odstavka nadaljujejo, se kršitelju dodeli oznaka persona non grata.
38. člen
Če se uporabniku izbriše določen odstotek vseh njegovih odgovorov v določeni temi, se mu avtomatično izreče in izvede sankcija iz 9. točke 24. člena.

39. člen
Kršitev 17. člena se kaznuje z izbrisom oglasa, kršitelju se dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, začasno se mu omeji pošiljanje odgovorov in odpiranje tem.
Če uporabnik ne upošteva pravil, ki izhajajo iz teme Navodila za pisanje malih oglasov, se oglas izbriše.
Dokler oglaševalec ne odgovori na zahtevo za pojasnilo iz 19. člena ali vsebine v odgovoru ne pojasni tako, da nedvoumno izhaja, da oglas sodi pod 17. ali 18. člen, ostane oglas izbrisan. Če oglaševalec še naprej tako oglašuje, se postopa po prvi točki tega člena.
G. OSTALO
40. člen
Vrednosti parametrov iz 26. in 38. člena se prilagajajo razmeram in niso javne.

41. člen
Prorum dovoljuje v svojem informacijskem sistemu dostop do:
javno objavljenih vsebin,
lastnih podatkov in
do zasebnih sporočil njihovim naslovnikom ter pošiljateljem.
Vsi ostali dostopi v Prorum niso dovoljeni.
Prorum nedovoljenega vstopa v svoj informacijski sistem ne bo štel za neupravičenega, če:
nas boste o tem takoj obvestili in nas seznanili z vsemi okoliščinami vstopa,
nam boste pred morebitno seznanitvijo javnosti dali na voljo razumen čas za odpravo napake in
boste pokazali skrbnost dobrega strokovnjaka, da pri vstopu ne pride do kršitve zasebnosti uporabnikov, uničenja podatkov ali poslabšanja storitve.
</pre>
        </div>
      </div>
      <img src="img/ipad.png" class="img-fluid" alt="">
    </div>
  </section>

  
  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="social d-flex justify-content-center">
        <a href="https://twitter.com/jkxycs" target="_blank" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
       <?php /* <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a> */ ?>
        <a href="https://github.com/j1xaro" target="_blank" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>

    <?php } 
    else { 
        ?>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Pravila</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">PROrum</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Meni
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Domov</a>
        </li>
      <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="forum.php">Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="nastavitve.php">Nastavitve</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="odjava.php">Odjava</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- About Section -->
<section id="about" class="about-section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class="text-white mb-4">Pravila</h2>
        <pre class="text-white-50"> A. OBNAŠANJE IN KULTURA NA FORUMU
1. člen
(pridobitve francoske revolucije)

Prepovedano je spodbujati k narodni, rasni, verski, spolni ali drugi neenakopravnosti, k nasilju in vojni ter izzivati 
ali razpihovati narodno, rasno, versko, spolno ali drugo sovraštvo, razdor ali nestrpnost.
Prepovedano je objavljanje, iskanje, ponujanje in omogočanje dostopa do vsebin, ki žalijo človekovo dostojanstvo.
2. člen
(kultura dialoga)

Prepovedana je razžalitev, obrekovanje, žaljiva obdolžitev in opravljanje.
Zahteva se argumentiran pogovor, ki se nanaša na predmet razprave. Zaželeno je, da je podkrepljen z viri.
3. člen
(vsebina naslovov)

Naslovi tem v forumu morajo odsevati njihovo vsebino. Naslovi podobni "na pomoč", "ne dela" so prepovedani.

4. člen
(poplavljanje in neaktivne teme)

Prepovedano je odpiranje enakih ali podobnih tem in vprašanj v različnih oddelkih Foruma ali temah.
Prepovedano je masovno pošiljanje sporočil ali odpiranje tem.
Prepovedano je oživljanje neaktivne teme, brez podajanja novih informacij.
5. člen
(berljivost prispevkov)

Prispevki morajo biti pravopisno pravilni, kar vključuje tudi rabo velikih začetnic in ločil.

6. člen
(mala prohibita)

Prepovedano je objavljanje, iskanje, ponujanje in omogočanje dostopa do vsebin, ki uživajo avtorskopravno varstvo, brez ustreznega prenosa avtorskopravnega upravičenja.
Prepovedano je objavljanje, iskanje, ponujanje in omogočanje dostopa do snovi, predmetov, navodil za postopke ali dejavnosti, katerih promet je prepovedan z zakonom.
7. člen
(shizofrenija)

Prepovedano je sodelovanje znotraj iste teme pod več različnimi vzdevki.

B. INTELEKTUALNA LASTNINA IN JAMSTVA
8. člen
(prenosi avtorjevih upravičenj in jamstva)

Če oseba pošlje gradivo, ki je na podlagi Zakona o avtorski in sorodnih pravicah -- ZASP (Uradni list RS, št. 21/95 s spremembami) varovano gradivo, tako, da je za objavo tega gradiva na strani Prorum potrebna odobritev upravljavca te strani, neizključno, 
teritorialno in časovno neomejeno in za ves čas trajanja prenese pravico reproduciranja, pravico distribuiranja, pravico predelave in pravico dajanja na voljo javnosti na Prorum. Poleg tega dovoli, da Prorum te pravice prenaša naprej na tretje osebe.
Če oseba pošlje gradivo, ki je na podlagi Zakona o avtorski in sorodnih pravicah -- ZASP (Uradni list RS, št. 21/95 s spremembami) varovano gradivo, tako, da za objavo tega gradiva na strani Prorum ni potrebna odobritev upravljavca te strani, neizključno, 
teritorialno in časovno neomejeno in za ves čas trajanja prenese pravico reproduciranja in pravico dajanja na voljo javnosti na Prorum. Poleg tega dovoli, da Prorum te pravice prenaša naprej na tretje osebe.
Prorum ima pravico do neobjave, krajšanja, spremembe vseh prispevkov uporabnikov, če ti prispevki kršijo pravila te strani ali javni red RS.
Oseba, ki pošlje gradivo (tako gradivo, za objavo katerega je potrebna odobritev, kot tudi gradivo za objavo katerega ni potrebna odobritev) jamči, da s svojim gradivom ne posega v avtorske, sorodne pravice ali druge pravice tretjih oseb v skladu z veljavno zakonodajo.
Oseba, ki pošlje gradivo (tako gradivo, za objavo katerega je potrebna odobritev, kot tudi gradivo za objavo katerega ni potrebna odobritev) se zavezuje, da bo v primeru, da se izkaže, da gradivo protipravno posega v pravice tretjih oseb, 
upravljalcu Proruma povrnila vso škodo, ki bi mu zaradi tega nastala.
Oseba, ki pošlje gradivo (tako gradivo, za objavo katerega je potrebna odobritev, kot tudi gradivo za objavo katerega ni potrebna odobritev) se odpoveduje vsem morebitnim zahtevkom do Proruma oz. njegovega upravljavca v zvezi z objavo tega gradiva.
C. ZASEBNOST
9. člen
(zbiranje in hramba podatkov o prijavljenih uporabnikih in obiskovalcih)

Prorum zbira in hrani naslednje podatke o prijavljenem uporabniku:
vsa uporabniška imena (vzdevki);
naslov elektronske pošte;
namesto podatka iz prejšnje alineje, na njegovo zahtevo rezultat enosmerne zgoščevalne funkcije (hash);
podatke, ki jih uporabnik posreduje v svoj profil;
podatke o datumu in času registracije in zadnje prijave.
Prorum za uporabnike, ki uporabljajo storitev prijave s pomočjo tretjih oseb (Google), v povezavi z uporabniškim računom na Prorumu hrani enolični identifikator, posredovan s strani teh tretjih oseb.
Prorum hrani podatke o uporabniku, ki jih ta objavi izven svojega profila.
Prorum hrani o prijavljenih uporabnikih podatke o ogledih tem za zagotavljanje delovanja funkcionalnosti označevanja prebrane vsebine: oznaka teme, enolična oznaka uporabnika, čas ogleda.
Prorum ločeno od vseh ostalih podatkov zbira naslednje podatke o prometu na strežniku: IP naslov, različica brskalnika (user agent), čas, naslov obiskane strani (URL), stran s katere je obiskovalec prišel na obiskano stran (referrer) -- če je ta podatek posredovan;
Prorum v zvezi s prijavljenimi uporabniki zbira podatke o njihovih predlogih za sankcije iz 4., 6. in 7. točke 24. člena Pravil.
Prorum v zvezi s prijavljenimi uporabniki zbira podatke iz 1., 2., 3 in 9. točke 24. člena Pravil.
Prorum v zvezi z obveščanjem o dogodkih, ki ga je prijavljen uporabnik zahteval, zbira podatke o teh zahtevah in podatke o izvedbi (čas in tip -- dogodek obvestila in oznaka objekta, na katerega se obveščanje nanaša, npr. ID teme, oddelka, kategorije novic...) obveščanja.
Prorum za vodenje statistike o obiskanosti spletne strani uporablja orodje Matomo.
10. člen
(rok hrambe podatkov iz 9. člena)

Podatki iz 1. in 5. alinee prvega odstavka 9. člena (uporabniško ime) se hranijo trajno.
Podatki iz 2. alinee prvega odstavka 9. člena se hranijo dve leti po poteku leta v katerem se je uporabnik zadnjič prijavil. Po tem času se pretvorijo z enosmerno zgoščevalno funkcijo. 
Uporabnik lahko te podatke v svojem profilu kadarkoli izbriše. V tem primeru se uporabnikov račun trajno in nepovratno deaktivira. Deaktivacija uporabnikovega računa pomeni, da z njim na Prorumu ni več mogoče sodelovati.
Podatki iz 3. alinee prvega odstavka 9. člena se hranijo trajno. Uporabnik lahko te podatke v svojem profilu kadarkoli izbriše. V tem primeru se uporabnikov račun trajno in nepovratno deaktivira.
Deaktivacija uporabnikovega računa pomeni, da z njim na Prorumu ni več mogoče sodelovati.
Podatki iz 4. alinee prvega odstavka 9. člena se hranijo eno leto po poteku leta v katerem se je uporabnik zadnjič prijavil. Uporabnik lahko te podatke v svojem profilu kadarkoli izbriše. 
V primeru, da je uporabnik pri objavi svojega prispevka zahteval navedbo svojega imena iz profila, se ta podatek hrani do preklica te zahteve oziroma dokler uporabnik podatka o imenu v profilu ne izbriše sam.
Podatki iz drugega odstavka 9. člena se hranijo trajno, oz. dokler uporabnik ne izbriše povezave v svojem profilu oz. ne onemogoči povezave na straneh tretjih oseb.
Podatki iz tretjega odstavka 9. člena se hranijo trajno. Zasebna sporočila se brišejo eno leto po poteku leta, v katerem se je na Prorum prijavil zadnji udeleženec v tem pogovoru.
Podatki iz četrtega odstavka 9. člena se hranijo do največ enega leta od dogodka. Periodično se brišejo vsi podatki o ogledih tem razen zadnjega.
Podatki iz petega odstavka 9. člena se ob dogodku zapišejo v dnevnik tega dne. V dnevnik posameznega dne se podatki iz prej navedene alinee začnejo zapisovati ob 06:25 tega dne in se prenehajo zapisovati ob 06:25 naslednjega dne. 
Dnevnik posameznega dne se prepiše po izteku naslednjega obdobja (06:25, 24 ur po koncu pisanja dnevniške datoteke).
Podatki iz šestega odstavka 9. člena se hranijo trajno.
Podatki iz sedmega odstavka 9. člena se hranijo trajno.
Podatki iz prvega odstavka 12. člena se hranijo dokler uporabnik ne zapre brskalnika.
Podatki iz drugega odstavka 12. člena se hranijo trajno, oz. dokler uporabnik ne zbriše piškotov iz brskalnika oz. dokler ne izklopi samodejne prijave v svojem profilu.
Podatki iz osmega odstavka 9. člena se hranijo trajno.
Podatki iz devetega odstavka 9. člena se hranijo skladno z mnenjem Informacijskega pooblaščenca.
11. člen
(uporaba podatkov iz 9. člena)

Podatki iz 1. alinee prvega odstavka 9. člena se uporabljajo za prikazovanje uporabnikove identitete, kjerkoli je na Prorumu to potrebno.
Podatki iz 2. alinee prvega odstavka 9. člena se uporabljajo za:
obveščanje uporabnika o dogodkih (npr. nova tema v oddelku, nova novica, nov odgovor na določeno temo, nov zaposlitveni oglas), za katere je zahteval obveščanje;
postopek ponastavitve gesla;
pošiljanje aktivacijskega sporočila ob registraciji ali spremembi tega podatka;
obveščanje v zvezi z delovanjem sistema.
Podatki iz drugega odstavka 9. člena se uporabijo za izvedbo prijave uporabnika na Prorum preko prijavnih sistemov tretjih oseb.
Podatki iz tretjega odstavka 9. člena se uporabljajo v obsegu iz 8. člena in za izdelavo novih vsebin.
Podatki iz četrtega odstavka 9. člena se uporabljajo za razmejevanje med že videno in novo vsebino.
Podatki iz petega odstavka 9. člena se uporabljajo za spremljanje dogajanja na spletni strani, identifikacijo izrednih dogodkov in ukrepanje ob njihovem pojavu;
Podatki iz šestega odstavka 9. člena se uporabljajo za delovanje avtonomnega sistema moderiranja.
Podatki iz sedmega odstavka 9. člena se uporabljajo za izvajanje dela pravil, ki ureja sankcioniranje.
Podatki iz osmega odstavka 9. člena se uporabljajo za obveščanje uporabnika o dogodkih, za katere je zahteval obveščanje.
Podatki iz devetega odstavka 9. člena se uporabljajo za spremljanje makrotrendov obiska na Prorumu.
12. člen
(piškotki)

Prorum dodeli uporabniku ob prijavi sejni piškotek (session cookie -- slotech), s katerim se vzdržuje stanje prijavljenosti uporabnika in ob vsakem uporabnikovem zahtevku preverja njegov obstoj.
Prorum dodeli uporabniku na njegovo zahtevo trajen piškotek (persistent cookie slotechAP) za njegovo enolično identifikacijo, za delovanje funkcionalnosti samodejne prijave na Prorum in ob vsakem zahtevku preverja njegov obstoj.
Piškotka iz prejšnjih dveh alinej sta nujno potrebna za zagotovitev storitve informacijske družbe -- zagotovitev delovanja dela strani, ki je opisana v prvih dveh odstavkih tega člena.
Prorum drugih piškotkov ne dodeljuje.
13. člen
(uporabniki brez prispevkov)

Prorum uporabniku račun izbriše v celoti eno leto po poteku leta v katerem se je uporabnik zadnjič prijavil, če uporabnik nikoli ni objavil nobenega prispevka. 
Oddaja malega oglasa in izbrisan odgovor, tema ali predlog novice ne štejejo za prispevek po tem členu. Izbris računa v celoti pomeni izbris vseh podatkov iz 9. člena.

14. člen
(zavarovanje nejavnih podatkov)

Prorum bo zagotovil vse razumne ukrepe, da podatki, ki jih uporabnik ni napravil javno dostopne, ne bodo dostopni tretjim osebam.

Prorum osebnih podatkov namerno ne izvaža v tretje države.

15. člen
(razkrivanje podatkov)

Podatki iz 9. člena se razkrijejo pristojnemu organu na njegovo obrazloženo, po obliki in vsebini zakonito zahtevo.
Podatke iz 9. člena Prorum razkrije spontano, če je to nujno potrebno za zaščito in obrambo njegovih pravic oziroma interesov.
Postopek v zvezi z vložitvijo zahteve za posredovanje podatkov iz prvega odstavka tega člena je predpisan in je sestavni del teh pravil.
16. člen
(zasebna sporočila)

Teme v Zasebnih sporočilih, v katerih sodeluje pet ali več oseb, so nadzorovane enako kot Forum.
Tem iz zgornjega odstavka v katerih sodeluje manj kot pet oseb, upravljalec ne nadzoruje niti prebira.
D. OGLAŠEVANJE
17. člen
(pospeševanje prodaje in naročene vsebine)

Prepovedano je objavljanje političnih oglaševalskih vsebin in drugih oblik politične propagande.
Za oglaševalske vsebine, katerih objavo naroči pravna ali fizična oseba z namenom, da bi s tem pospeševala promet proizvodov, storitev, pravic ali obveznosti,
pridobivala poslovne partnerje ali si v javnosti ustvarjala ugled in dobro ime, je potrebno skleniti poseben dogovor z upravljavcem strani.
18. člen
(mali oglasi)

Če oglas ne sodi v oglaševalsko vsebino iz prejšnjega člena, ga je dovoljeno objaviti samo v oddelku Mali oglasi.
Tema Navodila za pisanje malih oglasov je sestavni del teh pravil.
19. člen
(brisanje malih oglasov)

Mali oglasi se lahko brišejo po preteku enega meseca od objave, najkasneje pa se izbrišejo dva meseca po preteku meseca v katerem so bili objavljeni.

20. člen
(nejasno oglaševanje)

Če se pojavi upravičen dvom, ali oglas ureja 17. ali 18. člen, mora tisti, ki je oglas objavil (oglaševalec), na zahtevo Proruma vsebino oglasa pojasniti.
Prorum sporoči zahtevo za pojasnilo iz prvega odstavka tega člena v izbrisanem sporočilu. Vsa nadaljna komunikacija poteka po elektronski pošti (legal@Prorum.com).
21. člen
(zaposlitveni oglasi)

Oglaševanje zaposlitev je na Prorumu dovoljeno samo na za to določenem mestu - Zaposlitve.
Na tem mestu lahko oglašujejo zaposlitev izključno subjekti, ki neposredno zaposlujejo.
Subjekti, ki se ukvarjajo s posredovanjem zaposlitev, ne smejo oglaševati zaposlitev na mestu, določenem v prvem odstavku tega člena, ampak morajo za to skleniti poseben dogovor z upravljavcem strani.
Upravljavec lahko določi obvezna polja, s predpisano vsebino, za uspešno oddajo zaposlitvenega oglasa.
Zaposlitveni oglas lahko ponudnik zaposlitve kadarkoli izbriše, v vsakem primeru pa se oglas avtomatično izbriše en mesec po preteku meseca v katerem je bil oddan. Izbris zaposlitvenega oglasa pomeni,
da javnosti ni dostopna firma oziroma naziv ponudnika. Ostala izpolnjena polja ostanejo vidna javnosti.
22. člen
(odgovornost za resničnost in točnost oglaševalskih vsebin)

Za resničnost in točnost navedb v oglasu iz 17., 18. ali 21. člena je odgovoren oglaševalec.
E. ODGOVORNOST
23. člen
(odgovornost za informacije, storitve in poškodbe)

Informacije, katerih objavo na strani Prorum odobri upravljavec te strani, so izključno informativne narave. Prorum ne prevzema nobene odgovornosti, da so te informacije popolne, vsebinsko pravilne in ažurne.
Informacije, katerih objave na strani Prorum ne odobri upravljavec te strani, se presojajo izključno v povezavi s Pravili te strani. Prorum ne prevzema nobene odgovornosti, da so te informacije popolne, vsebinsko pravilne in ažurne.
Storitve, ki jih ponuja Prorum so takšne kot so. Prorum pod nobenim pogojem ne prevzema nobene odgovornosti, da bodo ponujene storitve delovale varno, neprekinjeno, brez napak ali brez izgube podatkov.
Prorum ne prevzema nobene odgovornosti za kakršnekoli poškodbe uporabnikove opreme, s katero dostopa do te strani. Prorum ne prevzema nobene odgovornosti za kakršnekoli izgube uporabnikovih podatkov na njegovi opremi, 
ki bi nastale zaradi dostopa do strani Prorum. Prorum ne prevzema nobene odgovornosti v zvezi z objavljenimi povezavami do tujih storitev in strani.
F. SANKCIJE
24. člen
(vrste sankcij)

Sankcije so:

dodelitev oznake persona rudis;
dodelitev oznake persona non grata;
vklop uporabnikovim očem neprijaznega vmesnika;
samodejna obdelava tem in odgovorov za zagotovitev večje berljivosti;
združevanje uporabniških imen;
zaklep teme;
brisanje odgovora ali teme;
popravljanje odgovora;
začasna omejitev odpiranja tem in dajanja odgovorov.
25. člen
(persona rudis in persona non grata)

Persona rudis pomeni nevljudnega uporabnika.
Persona non grata pomeni nezaželenega uporabnika. Ta naziv za uporabnika pomeni tudi, da nima pravice do pritožbe zoper sankcije, ki se mu izrečejo in izvedejo, nadaljnih sankcij se mu tudi ne obrazloži.
26. člen
(izrekanje ukrepov)

Vse sankcije iz 24. člena izrečejo in izvedejo administratorji (upravljavci) in moderatorji.
Ukrepe iz 4., 6. in 7. točke 24. člena lahko predlagajo tudi tisti prijavljeni uporabniki, ki:
so se registrirali pred določenim dnem in so na forumu ustrezno aktivni,
zaradi večkratnega preglasovanja njihovih predlogov te pravice niso izgubili,
zoper njih ni izrečen ukrep iz 1.-3. točke 24. člena pravil in
zoper njih v nedavnem času ni bil izrečen ukrep iz 7. točke 24. člena v statistično pomembni količini.
27. člen
(obrazložitev ukrepa)

Administrator ali moderator mora ukrep obrazložiti, razen v primerih iz 2. točke 25. člena.

28. člen
(pritožba)

Zoper sankcije iz 24. člena ima uporabnik pravico do pritožbe.
Vse pritožbe so javne. Podane morajo biti v 7 dneh od ukrepa, izjemoma v enem mesecu.
Argumentirano pritožbo mora uporabnik poslati v oddelek Prorum, tema Pritožbe. Pritožb poslanih po zasebnih sporočilih, elektronski pošti ali odprte v obliki tem v drugih oddelkih se ne upošteva.
Na pritožbo odgovarja tisti, ki je posredoval, ali upravljavec strani.
V pritožbenem postopku je intervencija prepovedana.
Odgovor na pritožbo je dokončen.
29. člen
(prenehanje sankcij)

Oznaka Persona rudis preneha:
ko se kršitelj javno opraviči, vendar ne prej kot v 3 dneh od dodelitve oznake;
takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Oznaka Persona non grata preneha:
ko se kršitelj javno opraviči, vendar ne prej kot v 14 dneh od dodelitve oznake;
takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Kršitelju se izklopi očem neprijazen vmesnik:
ko se javno opraviči, vendar ne prej kot v 14 dneh od vklopa vmesnika;
takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Tema se odklene, takoj ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Tema ali odgovor se odbriše ali vrne v prvotno stanje, takoj ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Začasna omejitev odpiranja tem in pošiljanja odgovorov preneha najkasneje v 30 dneh. Ta sankcija preneha takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Kršitelj se javno opraviči v forumu v oddelku Prorum.
Prorum lahko ob izredni priložnosti podeli splošno amnestijo. Takrat prenehajo sankcije iz 1., 2., 3. in 9. točke 24. člena.
30. člen
Kršitev 1. člena se kaznuje z zaklepom ali izbrisom teme, odgovor se izbriše. Kršitelju se lahko dodeli oznaka persona rudis.
Če se kršitve nadaljujejo, se kršitelju dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, lahko se mu začasno omeji pošiljanje odgovorov in odpiranje tem.
Ob posebno hudi kršitvi se kršitelju takoj dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, začasno se mu omeji pošiljanje odgovorov in odpiranje tem.
31. člen
Kršitev 2. člena se kaznuje z izbrisom odgovora ali teme, tema se lahko zaklene. Kršitelju se lahko dodeli oznaka persona rudis.
Če se kršitve nadaljujejo, se kršitelju dodeli oznaka persona non grata, lahko se mu vključi očem neprijazen vmesnik, lahko se mu začasno omeji pošiljanje odgovorov in odpiranje tem.
Ob posebno hudi kršitvi se kršitelju takoj dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, začasno se mu omeji pošiljanje odgovorov in odpiranje tem.
Odgovori, ki se ne nanašajo na predmet razprave, se lahko premaknejo v novo temo, če odpirajo zanimivo debato.
32. člen
Kršitev 3. člena se kaznuje z zaklepom teme. Neustrezen naslov se lahko popravi.

33. člen
Kršitev 4. člena se kaznuje z zaklepom teme ali izbrisom odgovora.

34. člen
Groba kršitev 5. člena se odpravi s samodejno pretvorbo prispevka ob oddaji. Moderator lahko dodatno popravi prispevek.

35. člen
Kršitev 6. člena se kaznuje z zaklepom ali izbrisom teme, odgovor se izbriše.

36. člen
Kršitev 7. člena se kaznuje z združitvijo uporabniških imen.

37. člen
Če se kršitve 3., 4. ali 6. člena nadaljujejo se kršitelju dodeli oznaka persona rudis, lahko se mu vključi očem neprijazen vmesnik, lahko se mu začasno omeji pošiljanje odgovorov in odpiranje tem.
Če se kršitve členov iz prejšnjega odstavka nadaljujejo, se kršitelju dodeli oznaka persona non grata.
38. člen
Če se uporabniku izbriše določen odstotek vseh njegovih odgovorov v določeni temi, se mu avtomatično izreče in izvede sankcija iz 9. točke 24. člena.

39. člen
Kršitev 17. člena se kaznuje z izbrisom oglasa, kršitelju se dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, začasno se mu omeji pošiljanje odgovorov in odpiranje tem.
Če uporabnik ne upošteva pravil, ki izhajajo iz teme Navodila za pisanje malih oglasov, se oglas izbriše.
Dokler oglaševalec ne odgovori na zahtevo za pojasnilo iz 19. člena ali vsebine v odgovoru ne pojasni tako, da nedvoumno izhaja, da oglas sodi pod 17. ali 18. člen, ostane oglas izbrisan. Če oglaševalec še naprej tako oglašuje, se postopa po prvi točki tega člena.
G. OSTALO
40. člen
Vrednosti parametrov iz 26. in 38. člena se prilagajajo razmeram in niso javne.

41. člen
Prorum dovoljuje v svojem informacijskem sistemu dostop do:
javno objavljenih vsebin,
lastnih podatkov in
do zasebnih sporočil njihovim naslovnikom ter pošiljateljem.
Vsi ostali dostopi v Prorum niso dovoljeni.
Prorum nedovoljenega vstopa v svoj informacijski sistem ne bo štel za neupravičenega, če:
nas boste o tem takoj obvestili in nas seznanili z vsemi okoliščinami vstopa,
nam boste pred morebitno seznanitvijo javnosti dali na voljo razumen čas za odpravo napake in
boste pokazali skrbnost dobrega strokovnjaka, da pri vstopu ne pride do kršitve zasebnosti uporabnikov, uničenja podatkov ali poslabšanja storitve.
</pre>
      </div>
    </div>
    <img src="img/ipad.png" class="img-fluid" alt="">
  </div>
</section>


<!-- Contact Section -->
<section class="contact-section bg-black">
  <div class="container">

    <div class="social d-flex justify-content-center">
      <a href="https://twitter.com/jkxycs" target="_blank" class="mx-2">
        <i class="fab fa-twitter"></i>
      </a>
     <?php /* <a href="#" class="mx-2">
        <i class="fab fa-facebook-f"></i>
      </a> */ ?>
      <a href="https://github.com/j1xaro" target="_blank" class="mx-2">
        <i class="fab fa-github"></i>
      </a>
    </div>

  </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
  <div class="container">
    Copyright &copy; Your Website 2019
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/grayscale.min.js"></script>

</body>

</html>

    <?php } }

else { ?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pravila</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">PROrum</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Meni
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Domov</a>
          </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="forum.php">Forum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Prijava</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="register.php">Registracija</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
<!-- About Section -->
<section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Pravila</h2>
          <pre class="text-white-50"> A. OBNAŠANJE IN KULTURA NA FORUMU
1. člen
(pridobitve francoske revolucije)

Prepovedano je spodbujati k narodni, rasni, verski, spolni ali drugi neenakopravnosti, k nasilju in vojni ter izzivati 
ali razpihovati narodno, rasno, versko, spolno ali drugo sovraštvo, razdor ali nestrpnost.
Prepovedano je objavljanje, iskanje, ponujanje in omogočanje dostopa do vsebin, ki žalijo človekovo dostojanstvo.
2. člen
(kultura dialoga)

Prepovedana je razžalitev, obrekovanje, žaljiva obdolžitev in opravljanje.
Zahteva se argumentiran pogovor, ki se nanaša na predmet razprave. Zaželeno je, da je podkrepljen z viri.
3. člen
(vsebina naslovov)

Naslovi tem v forumu morajo odsevati njihovo vsebino. Naslovi podobni "na pomoč", "ne dela" so prepovedani.

4. člen
(poplavljanje in neaktivne teme)

Prepovedano je odpiranje enakih ali podobnih tem in vprašanj v različnih oddelkih Foruma ali temah.
Prepovedano je masovno pošiljanje sporočil ali odpiranje tem.
Prepovedano je oživljanje neaktivne teme, brez podajanja novih informacij.
5. člen
(berljivost prispevkov)

Prispevki morajo biti pravopisno pravilni, kar vključuje tudi rabo velikih začetnic in ločil.

6. člen
(mala prohibita)

Prepovedano je objavljanje, iskanje, ponujanje in omogočanje dostopa do vsebin, ki uživajo avtorskopravno varstvo, brez ustreznega prenosa avtorskopravnega upravičenja.
Prepovedano je objavljanje, iskanje, ponujanje in omogočanje dostopa do snovi, predmetov, navodil za postopke ali dejavnosti, katerih promet je prepovedan z zakonom.
7. člen
(shizofrenija)

Prepovedano je sodelovanje znotraj iste teme pod več različnimi vzdevki.

B. INTELEKTUALNA LASTNINA IN JAMSTVA
8. člen
(prenosi avtorjevih upravičenj in jamstva)

Če oseba pošlje gradivo, ki je na podlagi Zakona o avtorski in sorodnih pravicah -- ZASP (Uradni list RS, št. 21/95 s spremembami) varovano gradivo, tako, da je za objavo tega gradiva na strani Prorum potrebna odobritev upravljavca te strani, neizključno, 
teritorialno in časovno neomejeno in za ves čas trajanja prenese pravico reproduciranja, pravico distribuiranja, pravico predelave in pravico dajanja na voljo javnosti na Prorum. Poleg tega dovoli, da Prorum te pravice prenaša naprej na tretje osebe.
Če oseba pošlje gradivo, ki je na podlagi Zakona o avtorski in sorodnih pravicah -- ZASP (Uradni list RS, št. 21/95 s spremembami) varovano gradivo, tako, da za objavo tega gradiva na strani Prorum ni potrebna odobritev upravljavca te strani, neizključno, 
teritorialno in časovno neomejeno in za ves čas trajanja prenese pravico reproduciranja in pravico dajanja na voljo javnosti na Prorum. Poleg tega dovoli, da Prorum te pravice prenaša naprej na tretje osebe.
Prorum ima pravico do neobjave, krajšanja, spremembe vseh prispevkov uporabnikov, če ti prispevki kršijo pravila te strani ali javni red RS.
Oseba, ki pošlje gradivo (tako gradivo, za objavo katerega je potrebna odobritev, kot tudi gradivo za objavo katerega ni potrebna odobritev) jamči, da s svojim gradivom ne posega v avtorske, sorodne pravice ali druge pravice tretjih oseb v skladu z veljavno zakonodajo.
Oseba, ki pošlje gradivo (tako gradivo, za objavo katerega je potrebna odobritev, kot tudi gradivo za objavo katerega ni potrebna odobritev) se zavezuje, da bo v primeru, da se izkaže, da gradivo protipravno posega v pravice tretjih oseb, 
upravljalcu Proruma povrnila vso škodo, ki bi mu zaradi tega nastala.
Oseba, ki pošlje gradivo (tako gradivo, za objavo katerega je potrebna odobritev, kot tudi gradivo za objavo katerega ni potrebna odobritev) se odpoveduje vsem morebitnim zahtevkom do Proruma oz. njegovega upravljavca v zvezi z objavo tega gradiva.
C. ZASEBNOST
9. člen
(zbiranje in hramba podatkov o prijavljenih uporabnikih in obiskovalcih)

Prorum zbira in hrani naslednje podatke o prijavljenem uporabniku:
vsa uporabniška imena (vzdevki);
naslov elektronske pošte;
namesto podatka iz prejšnje alineje, na njegovo zahtevo rezultat enosmerne zgoščevalne funkcije (hash);
podatke, ki jih uporabnik posreduje v svoj profil;
podatke o datumu in času registracije in zadnje prijave.
Prorum za uporabnike, ki uporabljajo storitev prijave s pomočjo tretjih oseb (Google), v povezavi z uporabniškim računom na Prorumu hrani enolični identifikator, posredovan s strani teh tretjih oseb.
Prorum hrani podatke o uporabniku, ki jih ta objavi izven svojega profila.
Prorum hrani o prijavljenih uporabnikih podatke o ogledih tem za zagotavljanje delovanja funkcionalnosti označevanja prebrane vsebine: oznaka teme, enolična oznaka uporabnika, čas ogleda.
Prorum ločeno od vseh ostalih podatkov zbira naslednje podatke o prometu na strežniku: IP naslov, različica brskalnika (user agent), čas, naslov obiskane strani (URL), stran s katere je obiskovalec prišel na obiskano stran (referrer) -- če je ta podatek posredovan;
Prorum v zvezi s prijavljenimi uporabniki zbira podatke o njihovih predlogih za sankcije iz 4., 6. in 7. točke 24. člena Pravil.
Prorum v zvezi s prijavljenimi uporabniki zbira podatke iz 1., 2., 3 in 9. točke 24. člena Pravil.
Prorum v zvezi z obveščanjem o dogodkih, ki ga je prijavljen uporabnik zahteval, zbira podatke o teh zahtevah in podatke o izvedbi (čas in tip -- dogodek obvestila in oznaka objekta, na katerega se obveščanje nanaša, npr. ID teme, oddelka, kategorije novic...) obveščanja.
Prorum za vodenje statistike o obiskanosti spletne strani uporablja orodje Matomo.
10. člen
(rok hrambe podatkov iz 9. člena)

Podatki iz 1. in 5. alinee prvega odstavka 9. člena (uporabniško ime) se hranijo trajno.
Podatki iz 2. alinee prvega odstavka 9. člena se hranijo dve leti po poteku leta v katerem se je uporabnik zadnjič prijavil. Po tem času se pretvorijo z enosmerno zgoščevalno funkcijo. 
Uporabnik lahko te podatke v svojem profilu kadarkoli izbriše. V tem primeru se uporabnikov račun trajno in nepovratno deaktivira. Deaktivacija uporabnikovega računa pomeni, da z njim na Prorumu ni več mogoče sodelovati.
Podatki iz 3. alinee prvega odstavka 9. člena se hranijo trajno. Uporabnik lahko te podatke v svojem profilu kadarkoli izbriše. V tem primeru se uporabnikov račun trajno in nepovratno deaktivira.
 Deaktivacija uporabnikovega računa pomeni, da z njim na Prorumu ni več mogoče sodelovati.
Podatki iz 4. alinee prvega odstavka 9. člena se hranijo eno leto po poteku leta v katerem se je uporabnik zadnjič prijavil. Uporabnik lahko te podatke v svojem profilu kadarkoli izbriše. 
V primeru, da je uporabnik pri objavi svojega prispevka zahteval navedbo svojega imena iz profila, se ta podatek hrani do preklica te zahteve oziroma dokler uporabnik podatka o imenu v profilu ne izbriše sam.
Podatki iz drugega odstavka 9. člena se hranijo trajno, oz. dokler uporabnik ne izbriše povezave v svojem profilu oz. ne onemogoči povezave na straneh tretjih oseb.
Podatki iz tretjega odstavka 9. člena se hranijo trajno. Zasebna sporočila se brišejo eno leto po poteku leta, v katerem se je na Prorum prijavil zadnji udeleženec v tem pogovoru.
Podatki iz četrtega odstavka 9. člena se hranijo do največ enega leta od dogodka. Periodično se brišejo vsi podatki o ogledih tem razen zadnjega.
Podatki iz petega odstavka 9. člena se ob dogodku zapišejo v dnevnik tega dne. V dnevnik posameznega dne se podatki iz prej navedene alinee začnejo zapisovati ob 06:25 tega dne in se prenehajo zapisovati ob 06:25 naslednjega dne. 
Dnevnik posameznega dne se prepiše po izteku naslednjega obdobja (06:25, 24 ur po koncu pisanja dnevniške datoteke).
Podatki iz šestega odstavka 9. člena se hranijo trajno.
Podatki iz sedmega odstavka 9. člena se hranijo trajno.
Podatki iz prvega odstavka 12. člena se hranijo dokler uporabnik ne zapre brskalnika.
Podatki iz drugega odstavka 12. člena se hranijo trajno, oz. dokler uporabnik ne zbriše piškotov iz brskalnika oz. dokler ne izklopi samodejne prijave v svojem profilu.
Podatki iz osmega odstavka 9. člena se hranijo trajno.
Podatki iz devetega odstavka 9. člena se hranijo skladno z mnenjem Informacijskega pooblaščenca.
11. člen
(uporaba podatkov iz 9. člena)

Podatki iz 1. alinee prvega odstavka 9. člena se uporabljajo za prikazovanje uporabnikove identitete, kjerkoli je na Prorumu to potrebno.
Podatki iz 2. alinee prvega odstavka 9. člena se uporabljajo za:
obveščanje uporabnika o dogodkih (npr. nova tema v oddelku, nova novica, nov odgovor na določeno temo, nov zaposlitveni oglas), za katere je zahteval obveščanje;
postopek ponastavitve gesla;
pošiljanje aktivacijskega sporočila ob registraciji ali spremembi tega podatka;
obveščanje v zvezi z delovanjem sistema.
Podatki iz drugega odstavka 9. člena se uporabijo za izvedbo prijave uporabnika na Prorum preko prijavnih sistemov tretjih oseb.
Podatki iz tretjega odstavka 9. člena se uporabljajo v obsegu iz 8. člena in za izdelavo novih vsebin.
Podatki iz četrtega odstavka 9. člena se uporabljajo za razmejevanje med že videno in novo vsebino.
Podatki iz petega odstavka 9. člena se uporabljajo za spremljanje dogajanja na spletni strani, identifikacijo izrednih dogodkov in ukrepanje ob njihovem pojavu;
Podatki iz šestega odstavka 9. člena se uporabljajo za delovanje avtonomnega sistema moderiranja.
Podatki iz sedmega odstavka 9. člena se uporabljajo za izvajanje dela pravil, ki ureja sankcioniranje.
Podatki iz osmega odstavka 9. člena se uporabljajo za obveščanje uporabnika o dogodkih, za katere je zahteval obveščanje.
Podatki iz devetega odstavka 9. člena se uporabljajo za spremljanje makrotrendov obiska na Prorumu.
12. člen
(piškotki)

Prorum dodeli uporabniku ob prijavi sejni piškotek (session cookie -- slotech), s katerim se vzdržuje stanje prijavljenosti uporabnika in ob vsakem uporabnikovem zahtevku preverja njegov obstoj.
Prorum dodeli uporabniku na njegovo zahtevo trajen piškotek (persistent cookie slotechAP) za njegovo enolično identifikacijo, za delovanje funkcionalnosti samodejne prijave na Prorum in ob vsakem zahtevku preverja njegov obstoj.
Piškotka iz prejšnjih dveh alinej sta nujno potrebna za zagotovitev storitve informacijske družbe -- zagotovitev delovanja dela strani, ki je opisana v prvih dveh odstavkih tega člena.
Prorum drugih piškotkov ne dodeljuje.
13. člen
(uporabniki brez prispevkov)

Prorum uporabniku račun izbriše v celoti eno leto po poteku leta v katerem se je uporabnik zadnjič prijavil, če uporabnik nikoli ni objavil nobenega prispevka. 
Oddaja malega oglasa in izbrisan odgovor, tema ali predlog novice ne štejejo za prispevek po tem členu. Izbris računa v celoti pomeni izbris vseh podatkov iz 9. člena.

14. člen
(zavarovanje nejavnih podatkov)

Prorum bo zagotovil vse razumne ukrepe, da podatki, ki jih uporabnik ni napravil javno dostopne, ne bodo dostopni tretjim osebam.

Prorum osebnih podatkov namerno ne izvaža v tretje države.

15. člen
(razkrivanje podatkov)

Podatki iz 9. člena se razkrijejo pristojnemu organu na njegovo obrazloženo, po obliki in vsebini zakonito zahtevo.
Podatke iz 9. člena Prorum razkrije spontano, če je to nujno potrebno za zaščito in obrambo njegovih pravic oziroma interesov.
Postopek v zvezi z vložitvijo zahteve za posredovanje podatkov iz prvega odstavka tega člena je predpisan in je sestavni del teh pravil.
16. člen
(zasebna sporočila)

Teme v Zasebnih sporočilih, v katerih sodeluje pet ali več oseb, so nadzorovane enako kot Forum.
Tem iz zgornjega odstavka v katerih sodeluje manj kot pet oseb, upravljalec ne nadzoruje niti prebira.
D. OGLAŠEVANJE
17. člen
(pospeševanje prodaje in naročene vsebine)

Prepovedano je objavljanje političnih oglaševalskih vsebin in drugih oblik politične propagande.
Za oglaševalske vsebine, katerih objavo naroči pravna ali fizična oseba z namenom, da bi s tem pospeševala promet proizvodov, storitev, pravic ali obveznosti,
 pridobivala poslovne partnerje ali si v javnosti ustvarjala ugled in dobro ime, je potrebno skleniti poseben dogovor z upravljavcem strani.
18. člen
(mali oglasi)

Če oglas ne sodi v oglaševalsko vsebino iz prejšnjega člena, ga je dovoljeno objaviti samo v oddelku Mali oglasi.
Tema Navodila za pisanje malih oglasov je sestavni del teh pravil.
19. člen
(brisanje malih oglasov)

Mali oglasi se lahko brišejo po preteku enega meseca od objave, najkasneje pa se izbrišejo dva meseca po preteku meseca v katerem so bili objavljeni.

20. člen
(nejasno oglaševanje)

Če se pojavi upravičen dvom, ali oglas ureja 17. ali 18. člen, mora tisti, ki je oglas objavil (oglaševalec), na zahtevo Proruma vsebino oglasa pojasniti.
Prorum sporoči zahtevo za pojasnilo iz prvega odstavka tega člena v izbrisanem sporočilu. Vsa nadaljna komunikacija poteka po elektronski pošti (legal@Prorum.com).
21. člen
(zaposlitveni oglasi)

Oglaševanje zaposlitev je na Prorumu dovoljeno samo na za to določenem mestu - Zaposlitve.
Na tem mestu lahko oglašujejo zaposlitev izključno subjekti, ki neposredno zaposlujejo.
Subjekti, ki se ukvarjajo s posredovanjem zaposlitev, ne smejo oglaševati zaposlitev na mestu, določenem v prvem odstavku tega člena, ampak morajo za to skleniti poseben dogovor z upravljavcem strani.
Upravljavec lahko določi obvezna polja, s predpisano vsebino, za uspešno oddajo zaposlitvenega oglasa.
Zaposlitveni oglas lahko ponudnik zaposlitve kadarkoli izbriše, v vsakem primeru pa se oglas avtomatično izbriše en mesec po preteku meseca v katerem je bil oddan. Izbris zaposlitvenega oglasa pomeni,
 da javnosti ni dostopna firma oziroma naziv ponudnika. Ostala izpolnjena polja ostanejo vidna javnosti.
22. člen
(odgovornost za resničnost in točnost oglaševalskih vsebin)

Za resničnost in točnost navedb v oglasu iz 17., 18. ali 21. člena je odgovoren oglaševalec.
E. ODGOVORNOST
23. člen
(odgovornost za informacije, storitve in poškodbe)

Informacije, katerih objavo na strani Prorum odobri upravljavec te strani, so izključno informativne narave. Prorum ne prevzema nobene odgovornosti, da so te informacije popolne, vsebinsko pravilne in ažurne.
Informacije, katerih objave na strani Prorum ne odobri upravljavec te strani, se presojajo izključno v povezavi s Pravili te strani. Prorum ne prevzema nobene odgovornosti, da so te informacije popolne, vsebinsko pravilne in ažurne.
Storitve, ki jih ponuja Prorum so takšne kot so. Prorum pod nobenim pogojem ne prevzema nobene odgovornosti, da bodo ponujene storitve delovale varno, neprekinjeno, brez napak ali brez izgube podatkov.
Prorum ne prevzema nobene odgovornosti za kakršnekoli poškodbe uporabnikove opreme, s katero dostopa do te strani. Prorum ne prevzema nobene odgovornosti za kakršnekoli izgube uporabnikovih podatkov na njegovi opremi, 
ki bi nastale zaradi dostopa do strani Prorum. Prorum ne prevzema nobene odgovornosti v zvezi z objavljenimi povezavami do tujih storitev in strani.
F. SANKCIJE
24. člen
(vrste sankcij)

Sankcije so:

dodelitev oznake persona rudis;
dodelitev oznake persona non grata;
vklop uporabnikovim očem neprijaznega vmesnika;
samodejna obdelava tem in odgovorov za zagotovitev večje berljivosti;
združevanje uporabniških imen;
zaklep teme;
brisanje odgovora ali teme;
popravljanje odgovora;
začasna omejitev odpiranja tem in dajanja odgovorov.
25. člen
(persona rudis in persona non grata)

Persona rudis pomeni nevljudnega uporabnika.
Persona non grata pomeni nezaželenega uporabnika. Ta naziv za uporabnika pomeni tudi, da nima pravice do pritožbe zoper sankcije, ki se mu izrečejo in izvedejo, nadaljnih sankcij se mu tudi ne obrazloži.
26. člen
(izrekanje ukrepov)

Vse sankcije iz 24. člena izrečejo in izvedejo administratorji (upravljavci) in moderatorji.
Ukrepe iz 4., 6. in 7. točke 24. člena lahko predlagajo tudi tisti prijavljeni uporabniki, ki:
so se registrirali pred določenim dnem in so na forumu ustrezno aktivni,
zaradi večkratnega preglasovanja njihovih predlogov te pravice niso izgubili,
zoper njih ni izrečen ukrep iz 1.-3. točke 24. člena pravil in
zoper njih v nedavnem času ni bil izrečen ukrep iz 7. točke 24. člena v statistično pomembni količini.
27. člen
(obrazložitev ukrepa)

Administrator ali moderator mora ukrep obrazložiti, razen v primerih iz 2. točke 25. člena.

28. člen
(pritožba)

Zoper sankcije iz 24. člena ima uporabnik pravico do pritožbe.
Vse pritožbe so javne. Podane morajo biti v 7 dneh od ukrepa, izjemoma v enem mesecu.
Argumentirano pritožbo mora uporabnik poslati v oddelek Prorum, tema Pritožbe. Pritožb poslanih po zasebnih sporočilih, elektronski pošti ali odprte v obliki tem v drugih oddelkih se ne upošteva.
Na pritožbo odgovarja tisti, ki je posredoval, ali upravljavec strani.
V pritožbenem postopku je intervencija prepovedana.
Odgovor na pritožbo je dokončen.
29. člen
(prenehanje sankcij)

Oznaka Persona rudis preneha:
ko se kršitelj javno opraviči, vendar ne prej kot v 3 dneh od dodelitve oznake;
takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Oznaka Persona non grata preneha:
ko se kršitelj javno opraviči, vendar ne prej kot v 14 dneh od dodelitve oznake;
takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Kršitelju se izklopi očem neprijazen vmesnik:
ko se javno opraviči, vendar ne prej kot v 14 dneh od vklopa vmesnika;
takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Tema se odklene, takoj ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Tema ali odgovor se odbriše ali vrne v prvotno stanje, takoj ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Začasna omejitev odpiranja tem in pošiljanja odgovorov preneha najkasneje v 30 dneh. Ta sankcija preneha takoj, ko tisti, ki je posredoval, ugotovi zmoto. Pri tem se opraviči.
Kršitelj se javno opraviči v forumu v oddelku Prorum.
Prorum lahko ob izredni priložnosti podeli splošno amnestijo. Takrat prenehajo sankcije iz 1., 2., 3. in 9. točke 24. člena.
30. člen
Kršitev 1. člena se kaznuje z zaklepom ali izbrisom teme, odgovor se izbriše. Kršitelju se lahko dodeli oznaka persona rudis.
Če se kršitve nadaljujejo, se kršitelju dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, lahko se mu začasno omeji pošiljanje odgovorov in odpiranje tem.
Ob posebno hudi kršitvi se kršitelju takoj dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, začasno se mu omeji pošiljanje odgovorov in odpiranje tem.
31. člen
Kršitev 2. člena se kaznuje z izbrisom odgovora ali teme, tema se lahko zaklene. Kršitelju se lahko dodeli oznaka persona rudis.
Če se kršitve nadaljujejo, se kršitelju dodeli oznaka persona non grata, lahko se mu vključi očem neprijazen vmesnik, lahko se mu začasno omeji pošiljanje odgovorov in odpiranje tem.
Ob posebno hudi kršitvi se kršitelju takoj dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, začasno se mu omeji pošiljanje odgovorov in odpiranje tem.
Odgovori, ki se ne nanašajo na predmet razprave, se lahko premaknejo v novo temo, če odpirajo zanimivo debato.
32. člen
Kršitev 3. člena se kaznuje z zaklepom teme. Neustrezen naslov se lahko popravi.

33. člen
Kršitev 4. člena se kaznuje z zaklepom teme ali izbrisom odgovora.

34. člen
Groba kršitev 5. člena se odpravi s samodejno pretvorbo prispevka ob oddaji. Moderator lahko dodatno popravi prispevek.

35. člen
Kršitev 6. člena se kaznuje z zaklepom ali izbrisom teme, odgovor se izbriše.

36. člen
Kršitev 7. člena se kaznuje z združitvijo uporabniških imen.

37. člen
Če se kršitve 3., 4. ali 6. člena nadaljujejo se kršitelju dodeli oznaka persona rudis, lahko se mu vključi očem neprijazen vmesnik, lahko se mu začasno omeji pošiljanje odgovorov in odpiranje tem.
Če se kršitve členov iz prejšnjega odstavka nadaljujejo, se kršitelju dodeli oznaka persona non grata.
38. člen
Če se uporabniku izbriše določen odstotek vseh njegovih odgovorov v določeni temi, se mu avtomatično izreče in izvede sankcija iz 9. točke 24. člena.

39. člen
Kršitev 17. člena se kaznuje z izbrisom oglasa, kršitelju se dodeli oznaka persona non grata, vključi se mu očem neprijazen vmesnik, začasno se mu omeji pošiljanje odgovorov in odpiranje tem.
Če uporabnik ne upošteva pravil, ki izhajajo iz teme Navodila za pisanje malih oglasov, se oglas izbriše.
Dokler oglaševalec ne odgovori na zahtevo za pojasnilo iz 19. člena ali vsebine v odgovoru ne pojasni tako, da nedvoumno izhaja, da oglas sodi pod 17. ali 18. člen, ostane oglas izbrisan. Če oglaševalec še naprej tako oglašuje, se postopa po prvi točki tega člena.
G. OSTALO
40. člen
Vrednosti parametrov iz 26. in 38. člena se prilagajajo razmeram in niso javne.

41. člen
Prorum dovoljuje v svojem informacijskem sistemu dostop do:
javno objavljenih vsebin,
lastnih podatkov in
do zasebnih sporočil njihovim naslovnikom ter pošiljateljem.
Vsi ostali dostopi v Prorum niso dovoljeni.
Prorum nedovoljenega vstopa v svoj informacijski sistem ne bo štel za neupravičenega, če:
nas boste o tem takoj obvestili in nas seznanili z vsemi okoliščinami vstopa,
nam boste pred morebitno seznanitvijo javnosti dali na voljo razumen čas za odpravo napake in
boste pokazali skrbnost dobrega strokovnjaka, da pri vstopu ne pride do kršitve zasebnosti uporabnikov, uničenja podatkov ali poslabšanja storitve.
</pre>
        </div>
      </div>
      <img src="img/ipad.png" class="img-fluid" alt="">
    </div>
  </section>

  
  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="social d-flex justify-content-center">
        <a href="https://twitter.com/jkxycs" target="_blank" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
       <?php /* <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a> */ ?>
        <a href="https://github.com/j1xaro" target="_blank" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>

<?php }
?>