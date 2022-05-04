<template>
    <div
        class="fixed inset-0 z-50"
        v-if="visible"
    >
        <div
            class="bg-black opacity-70 absolute inset-0 cursor-zoom-out"
            @click="emit('close')"
        />
        <div class="absolute bg-white w-full bg-white p-14 h-[850px] inset-x-0 bottom-0">
            <div class="flex justify-between">
              <h3 class="text-4xl mb-4">Informácia pre dotknuté osoby GDPR</h3>
              <svg @click="emit('close')" class="w-7 h-8 stroke-gray-500" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.9998 27L2.99996 3" stroke="#333333" stroke-width="4" stroke-linecap="square"/>
                <path d="M3 27L26.9998 3" stroke="#333333" stroke-width="4" stroke-linecap="square"/>
              </svg>
            </div>
            <div class="text-lg h-[740px] overflow-scroll">
              <h4 class="text-2xl mt-4 mb-2">
                1. Prevádzkovateľ:
              </h4>
              <p>
                 Slovenská národná galéria so sídlom na adrese Riečna 1, 815 13 Bratislava, IČO: 00164712 (ďalej len „prevádzkovateľ").
              </p>
                <h4 class="text-2xl mt-4 mb-2">
                  1.1 Súhlas dotknutej osoby so spracúvaním osobných údajov
                </h4>
              <p>
                V prípade, že vyznačíte súhlas s poskytnutím a spracovaním uvedených osobných údajov potvrdzujete, že vám boli v zmysle a v rozsahu článku 13 nariadenia Európskeho parlamentu a rady (EÚ) 2016/679 o ochrane fyzických osôb pri spracúvaní osobných údajov a o voľnom pohybe takýchto údajov, ktorými sa zrušuje smernica 95/46/ES (všeobecné nariadenie o ochrane osobných údajov, ďalej len „nariadenie GDPR") a v súlade so zákonom č. 18/2018 Z.z. o ochrane osobných údajov a o zmene a doplnení niektorých zákonov prevádzkovateľom poskytnuté informácie o spracúvaní osobných údajov, že ste boli poučený o právach a povinnostiach dotknutej osoby a súhlasíte  so spracovaním svojich osobných údajov: meno, priezvisko, e-mailová adresa, poštová a fakturačná adresa, telefonický kontakt (ďalej len „osobné údaje") prevádzkovateľom.
              </p>
                <h4 class="text-2xl mt-4 mb-2">
                  1.2. Účel spracúvania osobných údajov
                </h4>
              <p>
                Osobné údaje spracúvame za účelom:
              </p>
              <ul>
                <li>
                  marketingových činností (zasielanie direct mailov, newslettrov, programov výstav, informácií o podujatiach pre verejnosť, ako sú vernisáže, predstavenia, programy organizované Slovenskou národnou galériou (ďalej aj ako „podujatie"));
                </li>
                <li>
                  objednávok a kúpy na
                  <a class="underline underline-offset-2 pointer-events-none" href="http://www.sng.sk/">
                    www.sng.sk
                  </a>
                  ;
                </li>
                <li>
                  objednávok reprodukcií na
                  <a class="underline underline-offset-2 pointer-events-none" href="http://www.webumenia.sk/">
                    www.webumenia.sk
                  </a>
                  ;
                </li>
                <li>
                  rezervácií miesta v bádateľni, knižnici a na podujatiach,
                </li>
                <li>
                  zverejnenia fotografií a videozáznamov vyhotovených na podujatiach,
                </li>
                <li>
                  zaslania e-mailu z Aplikácie "Vyhľadávanie podľa tvaru".
                </li>
              </ul>
              <p>
                Súhlas sa vzťahuje na všetky spracovateľské činnosti vykonávané s osobnými údajmi na ten istý účel.
              </p>
              <p>
                Dotknutá osoba udeľuje súhlas na spracúvanie osobných údajov na dobu päť rokov od udelenia súhlasu. Po uplynutí vyššie uvedenej doby prevádzkovateľ bezodkladne vykoná likvidáciu (výmaz) poskytnutých osobných údajov z informačných systémov prevádzkovateľa. To neplatí, ak dotknutá osoba využila svoje právo na vymazanie v zmysle čl. 17 nariadenia GDPR.
              </p>
              <p>
                Súhlas je možné kedykoľvek písomne odvolať na adrese prevádzkovateľa alebo zaslaním e-mailu na e-mailovú adresu
                <a class="underline underline-offset-2 pointer-events-none" href="mailto:gdpr@sng.sk">
                  gdpr@sng.sk
                </a>
                . Zasielanie marketingovej komunikácie o novinkách a aktuálnych ponukách programu môžete odvolať v každom e-maili kliknutím na link ,,odhlásiť sa z odberu".
              </p>
              <p>
                Dotknutá osoba má za podmienok stanovených v nariadení GDPR právo požadovať od prevádzkovateľa prístup k osobným údajom týkajúcim sa dotknutej osoby a právo na ich opravu alebo vymazanie alebo obmedzenie spracúvania, alebo právo namietať proti spracúvaniu, ako aj právo na prenosnosť údajov. Bližšie sú práva dotknutej osoby upravené v článku 15 až 23 nariadenia GDPR a na stránke prevádzkovateľa www.sng.sk.
              </p>
              <p>
                Prevádzkovateľ má určenú zodpovednú osobu za ochranu osobných údajov, ktorú môže dotknutá osoba kontaktovať v súvislosti so všetkými otázkami týkajúcimi sa spracúvania jej osobných údajov a uplatňovania svojich práv podľa nariadenia GDPR; kontaktné údaje na zodpovednú osobu prevádzkovateľa: e-mail:
                <a class="underline underline-offset-2 pointer-events-none" href="mailto:zodpovednaosobagdpr@sng.sk">
                  zodpovednaosobagdpr@sng.sk
                </a>
                 alebo písomne na adresu prevádzkovateľa s označením „zodpovedná osoba GDPR".
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                2. Aké údaje zbierame
              </h4>
              <p>
                Pri poskytovaní našich služieb získavame o vás údaje vyšpecifikované v bodoch 2.1 až 2.4.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                2.1 Údaje pri nákupe
              </h4>
              <p>
                Pri nákupe od vás požadujeme
                <h4 class="text-2xl mt-4 mb-2">
                  údaje potrebné na jeho vybavenie
                </h4>
                . Povinnými údajmi sú teda len tie, bez ktorých vám nákup nevieme zaslať a vašu objednávku vybaviť, ako vaše meno, e-mailová adresa, adresa na doručovanie, telefónne číslo a samotný predmet objednávky.
                <br />
                <br />
                V našom obchode
                <h4 class="text-2xl mt-4 mb-2">
                  nezadávate žiadne informácie, ktoré by sa priamo týkali práce s peniazmi
                </h4>
                . Všetky v súčasnosti ponúkané formy elektronického bankovníctva (platenia za tovar cez internet) sú realizované priamo na stránkach banky, ktorá nám poskytne jedine informáciu o úspešnosti či neúspešnosti platby a vaše meno, prípadne číslo účtu (aby sme vedeli platbu identifikovať a v prípade potreby ju vrátiť).
                <br />
                <br />
                Neukladáme údaje s funkciou „vytvorenia účtu pri kúpe". Pre nákup tovaru cez internet nemáme účty na prihlasovanie sa.
              </p>
              <p>
                <h4 class="text-2xl mt-4 mb-2">
                  2.2 Údaje pre zasielanie programu výstav, newslettra a noviniek
                </h4>
              </p>
              <p>
                V prípade, ak sa rozhodnete odoberať zasielané marketingové informácie o našich aktivitách, zbierame aj údaje s tým súvisiace. Jedinými povinnými údajmi sú vaše meno a e-mailová adresa, ktorú využívame na to, aby sme s vami vedeli komunikovať.
                <br />
                Ak nám na to udelíte súhlas, uchovávame si vašu e-mailovú adresu aj na účel zasielania informácií o tituloch, ktoré vás zaujali, špeciálnych ponukách a týždenných novinkách.
              </p>
              <p>
                <h4 class="text-2xl mt-4 mb-2">
                  2.3 Údaje získané pri využívaní našich služieb
                </h4>
              </p>
              <p>
                Keď využívate naše služby, získavame aj údaje o tom, ako ich využívate. Sú to informácie týkajúce sa vašich interakcií s našimi službami a stránkami
                <a class="underline underline-offset-2 pointer-events-none" href="http://www.sng.sk/">
                  www.sng.sk
                </a>
                ,
                <a class="underline underline-offset-2 pointer-events-none" href="http://www.webumenia.sk/">
                  www.webumenia.sk
                </a>
                 a rezervacie.sng.sk.
                <br />
                <br />
                Získavame tiež údaje o zariadeniach a počítačoch, ktoré využívate na pristupovanie k našim službám vrátane IP adries, nastavení prehliadačov, informácií o operačných systémoch, prípadne informácie o vašom mobilnom zariadení, informáciu, z ktorej internetovej stránky k nám pristúpite, stránky, ktoré navštívite, a informácie z cookies a podobných nástrojov.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                2.4. Aplikácia "Vyhľadávanie podľa tvaru"
              </h4>
              <p>
                Získavame vašu e-mailovú adresu na jednorázové zaslania e-mailu z Aplikácie "Vyhľadávanie podľa tvaru", ktorá je prístupná vo výstavných priestoroch. Na vami zadanú e-mailovú adesu príde obrázok, ktorý ste vytvorili na dotykovej obrazovke.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                3. Ako údaje používame
              </h4>
              <p>
                Údaje, ktoré ste nám poskytli, využívame na nasledovné účely:
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                3.1 Poskytovanie našich služieb
              </h4>
              <p>
                Údaje, ktoré od vás získame pri vytváraní objednávky pri kúpe, používame na jej vybavenie. Tieto údaje potrebujeme aj pre naše účtovné a fakturačné spracovanie a taktiež pre doručenie zásielky.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                3.2 Komunikácia s vami
              </h4>
              <p>
                Vaše kontaktné údaje používame na účel marketingových činností (zasielanie direct mailov, newslettrov, programov výstav, informácií o podujatiach pre verejnosť, informácií k vernisážam, predstaveniam, súťažiam a programom organizovaných Slovenskou národnou galériou).
              </p>
              <p>
                Vaše kontaktné údaje získané pri nákupe používame na zasielanie našich oznámení súvisiacich s vybavovaním objednávok a poskytovaním služieb, alebo keď chceme reagovať na vaše oslovenie, keď sa nás pýtate, čo sa deje s vašou objednávkou, chcete nám nahlásiť napr. novú doručovaciu adresu, prípadne nás požiadate o inú zmenu vašich údajov vo vašej objednávke alebo používateľskom konte. Vaše kontaktné údaje, ako aj údaje o vašich nákupoch spracúvame takisto v prípade, že reklamujete dodaný tovar.
              </p>
              <p>
                Kontaktné údaje používame na rezerváciu miesta v bádateľni, knižnici a na podujatiach pre verejnosť.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                3.3 Vyhotovovanie fotografií a videozáznamov na podujatiach
              </h4>
              <p>
                Podujatia organizované prevádzkovateľom sú verejné. Vaše osobné údaje v rozsahu fotografií a videozáznamov, týkajúce sa osoby účastníka alebo jeho prejavov osobnej povahy v súvislosti s vašou účasťou na podujatí prevádzkovateľa, spracúva za účelom ich získania (vyhotovenia) a použitia, a to formou ich postúpenia partnerom podujatia z dôvodu zdokladovania konania podujatia a formou ich zverejnenia na webovej stránke prevádzkovateľa, na sociálnych sieťach, v tlačových správach a u spoluorganizátorov a na účel propagácie organizátorov, umenia a kultúry. Fotografie a videozáznamy sú spracúvané tiež pre prípad vedenia kontroly, v rámci ktorej je potrebné preukázať, že podujatie sa uskutočnilo, ako predpoklad splnenia zákonnej podmienky pre uplatnenie nárokov prevádzkovateľa, účtovných dokladov, prípadne iných právnych nárokov podľa osobitných právnych predpisov na základe oprávnených záujmov prevádzkovateľa spočívajúcich v preukazovaní plnenia zákonných povinností.
              </p>
              <p>
                  Vezmite, prosím, na vedomie, že svojím pohybom v zreteľne označenom priestore snímanom označeným fotografom/kameramanom vyjadrujete súhlas s týmto spracúvaním osobných údajov. V prípade nesúhlasu máte možnosť vyhnúť sa snímanému priestoru, prípadne kedykoľvek účinne namietať proti vyhotovovaniu obrazového/obrazovo-zvukového záznamu svojej osoby. V tomto prípade bude vaša podobizeň anonymizovaná.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                4. Bezpečnosť a ochrana práv
              </h4>
              <p>
                Vaše údaje používame takisto na zaistenie bezpečnosti poskytovaných služieb, aby sme reagovali na nároky, ktoré boli voči nám uplatnené, pri konaniach pred štátnymi a inými orgánmi, ktoré kontrolujú našu činnosť, a aby sme vymáhali nároky, ktoré nám vznikli.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                4.1 Cookies
              </h4>
              <p>
                Súbory cookies sú kúsky údajov, ktoré sa ukladajú vo vašom prehliadači alebo mobilnom zariadení počas prezerania webových stránok.
              </p>
              <p>
                Jednotlivé cookies majú rôzny čas „trvanlivosti" - rôznu lehotu uloženia vo vašom zariadení. Niektoré cookies sa z vášho zariadenia vymažú po tom, ako zatvoríte okno prehliadača (session cookie), iné zostávajú uložené vo vašom zariadení aj po ukončení prehliadania našich webových stránok (permanent cookie).
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                4.2 Prečo používame cookies
              </h4>
              <p>
                Súbory cookies nám umožňujú zapamätať si vaše úkony a preferencie,
                 napr. v priebehu určitého časového obdobia, aby ste ich nemuseli opakovane zadávať vždy, keď sa vrátite na webovú stránku alebo prechádzate z jednej webovej stránky na druhú.
              </p>
              <p>
                Cookies nám zároveň
                  pomáhajú pochopiť, čo vás zaujíma na našej webovej stránke, či je pre vás dostatočne prehľadná a viete na nej nájsť to, čo hľadáte. Cookies teda používame aj s cieľom zlepšenia užívateľského zážitku.
              </p>
              <p>
                Súbory cookies môžu zaznamenávať aj ďalšie informácie, ako počet návštevníkov našich webových stránok a tiež aké podstránky nášho webu najčastejšie navštevujete.
              </p>
              <p>
                Používame analytické cookies, ktoré slúžia na získanie údajov o návštevnosti našej internetovej stránky, informácií o vyhľadávaniach vykonaných na našej stránke a tiež na zisťovanie, ako sa po našej stránke pohybujete, aby sme ju pre vás vedeli spraviť čo najjednoduchšou na používanie. Keďže pri týchto cookies sme vykonali opatrenia, aby sme zabránili ich zneužitiu (anonymizáciu na strane našich dodávateľov), a súčasne sú implementované opatrenia, aby ste ľahko kontrolovali a obmedzovali využívanie týchto cookies, nepýtame si od vás na ich používanie súhlas. Pri týchto cookies využívame riešenia nasledovných tretích strán:
              </p>
              <p>
                  Google Analytics-Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Írsko. Bližšie informácie o ochrane súkromia
                <a class="underline underline-offset-2 pointer-events-none" href="https://support.google.com/analytics/topic/2919631?hl=sk&amp;ref_topic=1008008">
                  nájdete tu
                </a>
                , pričom na odmietnutie cookies si môžete inštalovať softvérový doplnok
                <a class="underline underline-offset-2 pointer-events-none" href="https://tools.google.com/dlpage/gaoptout">
                  dostupný tu
                </a>
                .
              </p>
              <p>
                <h4 class="text-2xl mt-4 mb-2">
                  4.3 Ako viete obmedziť používanie cookies
                </h4>
              </p>
              <p>
                Existuje možnosť spravovať alebo obmedziť to, ako my a naši partneri využívame cookies a podobné technológie. Je to napríklad nastavenie internetového prehliadača: hoci väčšina prehliadačov má základné nastavenie, ktorým akceptujú cookies, ich nastavenia umožňujú, aby ste si vymazali alebo odmietli cookies. Musíme vás však upozorniť, že v tomto prípade nemusia niektoré poskytované služby správne fungovať.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                5. Právne základy
              </h4>
              <p>
                Musíme vás informovať o právnych základoch spracúvania vašich osobných údajov, ktorými sú:
              </p>
              <ol>
                <li>
                    Plnenie zmluvy - v prípade objednania tovaru alebo podujatia.
                </li>
                <li>
                    Súhlas - najmä v spojitosti so zasielaním komerčnej komunikácie o novinkách a aktuálnych ponukách či pri iných formách marketingu. Každý udelený súhlas je dobrovoľný a môžete ho kedykoľvek odvolať, čo však nemá vplyv na zákonnosť spracúvania pred jeho odvolaním. Zasielanie komerčnej komunikácie o novinkách a aktuálnych ponukách môžete odvolať v každom e-maili kliknutím na link „odhlásiť sa z odberu". Zo zoznamu odberateľov vás takisto vyradíme, ak nám napíšete na e-mailovú adresu
                  <u>
                    gdpr@sng.sk
                  </u>
                  .
                </li>
                <li>
                    Plnenie našich zákonných povinností - pri uchovaní údajov o vás a vašej objednávke v našom účtovníctve alebo pri sprístupnení údajov štátnym a iným orgánom, ktoré vykonávajú dohľad nad našou činnosťou, alebo ktoré riešia spory či vykonávanie rozhodnutí.
                </li>
                <li>
                    Plnenie účelu určeného zákonom č. 206/2009 Z. z. o múzeách a o galériách a o ochrane predmetov kultúrnej hodnoty, ktorý upravuje
                  :
                </li>
              </ol>
              <p>
                a) postavenie a úlohy múzeí a galérií, ich zriaďovanie a zrušovanie, podmienky na výkon základných odborných činností v múzeu a galérii pri nadobúdaní, ochrane a prezentácii predmetov kultúrnej hodnoty ako súčastí kultúrneho dedičstva,
              </p>
              <p>
                b) ochranu predmetov kultúrnej hodnoty, ktoré sú evidované podľa tohto zákona a nie sú chránené a evidované podľa osobitných predpisov pre oblasť ochrany kultúrneho dedičstva.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                6. Komu údaje sprístupňujeme
              </h4>
              <p>
                Vaše osobné údaje nezverejňujeme, nesprístupňujeme a neposkytujeme žiadnym iným subjektom s výnimkou situácií opísaných nižšie:
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                6.1 Ak to od nás požadujete
              </h4>
              <p>
                Osobné údaje zverejňujeme alebo sprístupňujeme, pokiaľ to od nás požadujete. Sprístupnenie údajov tretím stranám uskutočňujeme v prípade doručovateľskej služby, ktorú ste si pri objednávke z e-shopu SNG zvolili. Momentálne spolupracujeme s nasledujúcimi spoločnosťami:
              </p>
              <p>
                 Slovenská pošta, a. s.
                 - Partizánska cesta 9, 975 99 Banská Bystrica, IČO: 36631124, zapísaná v Obchodnom registri Okresného súdu Banská Bystrica, Oddiel Sa, Vložka č.803/S, www.posta.sk
                <br />
                  Direct Parcel Distribution SK, s. r. o.
                - Technická 7, 821 04 Bratislava, IČO 35 834 498
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                6.2 V prípadoch externého spracúvania
              </h4>
              <p>
                Vaše osobné údaje majú k dispozícii niektorí naši dodávatelia, ktorí ich pre nás spracúvajú na základe našich pokynov a v súlade s týmto dokumentom. Dodržiavajú pri tom všetky potrebné bezpečnostné, technické a organizačné opatrenia, aby vašim osobným údajom poskytli požadovanú ochranu.
              </p>
              <p>
                Medzi týchto partnerov v súčasnosti patria:
              </p>
              <ul>
                <li>
                    Google Ireland Limited
                  <em>
                     (Google analytics) -
                  </em>
                  Gordon House, Barrow Street, Dublin 4, Írsko.
                  <a class="underline underline-offset-2 pointer-events-none" href="http://cloud.google.com/security/gdpr">
                    Viac...
                  </a>
                </li>
                <li>
                    MailChimp / The Rocket Science Group LLC
                     (zasielanie newslettrov) -
                  675 Ponce de Leon Ave NE, Atlanta, GA 30308 USA.
                  <a class="underline underline-offset-2 pointer-events-none" href="https://mailchimp.com/legal/privacy/">
                    Viac...
                  </a>
                </li>
                <li>
                    Comsultia, s.r.o.
                    (webstránka www.sng.sk) -
                  Digital Park II, Einsteinova 25, 851 01 Bratislava
                </li>
                <li>
                    SendGrid
                  (zasielanie e-mailov) - Denver, CO, 1801 California Street, Suite 500, Denver, CO 80202
                </li>
              </ul>
              <h4 class="text-2xl mt-4 mb-2">
                6.3 Z právnych dôvodov a na predchádzanie škodám
              </h4>
              <p>
                Vaše údaje môžeme takisto uchovávať alebo sprístupňovať iným osobám, aby sme vyhoveli povinnostiam vyplývajúcim z právnych predpisov, z požiadaviek štátnych a iných orgánov, aby sme si uplatňovali svoje nároky alebo sa obhajovali v konaniach, kde si ich iní uplatňujú voči nám.
              </p>
              <p>
                Medzi kategórie tretích osôb, ktorým sprístupňujeme osobné údaje z týchto dôvodov, patria napríklad súdy, štátne a iné príslušné orgány vykonávajúce kontrolu nad našou činnosťou, zodpovedné za riešenie sporov alebo vykonávanie rozhodnutí, či naši účtovní poradcovia a audítori.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                6.4 Prenos do tretích krajín
              </h4>
              <p>
                Vaše osobné údaje aktívne do tretích krajín mimo EÚ neprenášame. Niektorí partneri, s ktorými pri spracúvaní osobných údajov spolupracujeme, však takéto prenosy realizujú, a to konkrétne do USA. Osoby, ktorým v USA tieto údaje sprístupňujú, dodržiavajú podmienky US-EU Privacy Shield, a tým poskytujú primeranú úroveň ochrany pre vaše osobné údaje.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                6.5 Ako dlho údaje uchovávame
              </h4>
              <p>
                Pretože u nás nemáte vytvorené žiadne konto, uchovávame vaše osobné údaje týkajúce sa vybavenej objednávky počas nevyhnutnej doby, ktorou je spravidla päť rokov od jej doručenia.
              </p>
              <p>
                V prípade, ak používame vaše osobné údaje na účel doručovania komerčnej komunikácie na vašu e-mailovú adresu alebo v iných prípadoch, kde ste nám udelili súhlas, uchovávame tieto údaje, kým príslušný súhlas neodvoláte. V prípadoch využívania vašich údajov na základe účelu určeného niektorým zákonom opísaným v kapitole 5. Právne základy, uchováme vaše údaje, kým nepominie dôvod ich spracúvania.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                6.6 Právo na prístup k údajom
              </h4>
              <p>
                Máte právo získať od nás potvrdenie o tom, či sa o vás spracúvajú osobné údaje, a v prípade, ak vaše osobné údaje spracúvame, poskytneme vám informáciu o tom, aké údaje o vás spracúvame a na aký účel, komu boli vaše osobné údaje poskytnuté a ako dlho budeme vaše osobné údaje uchovávať.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                6.7 Právo na opravu
              </h4>
              <p>
                Ak sa domnievate, že naša inštitúcia o vás spracúva nesprávne osobné údaje, môžete využiť právo priamo nás požiadať o ich opravu na adrese gdpr@sng.sk. Záleží nám na tom, aby sme o vás spracúvali správne osobné údaje, preto toto právo určite využite vždy, keď sa napríklad presťahujete alebo príde k zmene akéhokoľvek vášho osobného údaju, ktorý je pre váš vzťah s nami dôležitý.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                6.8 Právo na vymazanie (právo na zabudnutie)
              </h4>
              <p>
                Máte právo na vymazanie osobných údajov, ktoré o vás spracúvame, v prípade ak sú splnené nasledovné podmienky a neuplatňujú sa zákonné výnimky:
              </p>
              <ul>
                <li>
                  údaje už nie sú potrebné na účely, na ktoré sa získavali;
                </li>
                <li>
                  odvoláte súhlas na spracúvanie svojich osobných údajov a na ich spracúvanie neexistuje iný právny základ;
                </li>
                <li>
                  na základe vašej konkrétnej situácie namietnete proti spracúvaniu svojich osobných údajov spracúvaných na základe oprávneného záujmu, keď neprevažujú oprávnené dôvody na spracúvanie, alebo namietnete proti spracúvaniu na účel priameho marketingu;
                </li>
                <li>
                  osobné údaje sa spracúvali nezákonne.
                </li>
              </ul>
              <h4 class="text-2xl mt-4 mb-2">
                6.9 Právo namietať
              </h4>
              <p>
                Máte právo namietať voči spracúvaniu údajov, ktoré je založené na našich legitímnych oprávnených záujmoch. V prípade, ak nemáme presvedčivý legitímny oprávnený dôvod na spracúvanie a vy podáte námietku, nebudeme vaše osobné údaje ďalej spracúvať.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                6.10 Podávanie sťažností
              </h4>
              <p>
                Ak chcete podať sťažnosť na spôsob, akým sú vaše osobné údaje spracúvané, vrátane uplatnenia vyššie uvedených práv, môžete sa obrátiť na našu zodpovednú osobu. Všetky vaše podnety a sťažnosti riadne preveríme.
              </p>
              <p>
                Ak nie ste spokojný s našou odpoveďou, alebo sa domnievate, že vaše osobné údaje spracúvame nespravodlivo alebo nezákonne, môžete podať sťažnosť na dozorný orgán, ktorým je Úrad na ochranu osobných údajov Slovenskej republiky, https://dataprotection.gov.sk, Hraničná 12, 820 07 Bratislava 27; tel. číslo: +421 /2/ 3231 3214; e-mail: statny.dozor@pdp.gov.sk.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                6.11 Neposkytnutie súhlasu
              </h4>
              <p>
                Poskytnutie súhlasu je dobrovoľné a jeho neposkytnutie nemá za následok nemožnosť účasti na podujatiach. V prípade, ak nám však tento súhlas neudelíte, nebudete od nás dostávať informácie a pozvánky na ďalšie naše podujatia a semináre, pracovné stretnutia a ďalšie udalosti, newslettre, alerty, prieskumy alebo iné formy priamej marketingovej komunikácie týkajúcej sa našich podujatí a noviniek.
              </p>
              <h4 class="text-2xl mt-4 mb-2">
                7. Kto sme a kde nás môžete kontaktovať
              </h4>
              <p>
                Prevádzkovateľom pri spracúvaní vašich osobných údajov je Slovenská národná galéria so sídlom na adrese Riečna 1, 815 13 Bratislava, IČO: 00164712.
              </p>
              <p>
                V prípade ak máte akékoľvek otázky k tomuto dokumentu alebo použitiu svojich osobných údajov, alebo si chcete uplatniť svoje práva popísané v tomto dokumente, môžete nás kontaktovať e-mailom na adrese
                <a class="underline underline-offset-2 pointer-events-none" href="mailto:gdpr@sng.sk">
                  gdpr@sng.sk
                </a>
                 alebo písomne na adrese našej inštitúcie.
              </p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
const props = defineProps({
    'visible': Boolean
});
const emit = defineEmits(['close']);
</script>