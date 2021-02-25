# Követelmény specifikáció

## 1.Áttekintés

Az Anabolic Whey nevű csapat feladata, egy olyan alkalmazás fejlesztése, ami egy online autószalon forgalmát hivatott pozitív irányba terelni. Az alkalmazás feladati közé tartozik, az autószalonon belül elérhető autók, ki listázása, valamint ezek módosítása, új autók esetén a megjelenítendő választékhoz a hozzáadása, amennyiben egy autó elfogy, ebben az esetben az autót el is lehessen távolítani a kínálatból. Az ügyfél jelenleg nem rendelkezik, semmilyen alkalmazással, ami esetleges módon megkönnyíthetné a munkáját. Füzetekbe, lapokon tartják számon az aktuális forgalmat, mivel emberi munkáról van szó az adminisztrálásban is így a hibák gyakoriak, a papír alapú rendszer lassú, nem megbízható. A megrendelő nem szeretne lemaradni a versenytársaihoz képest, ezért is szeretne egy alkalmazást, ahol a potenciális ügyfelek válogathatnak az autók közül, anélkül, hogy be kellene fáradniuk személyesen a cég telephelyére. 

## 2.Jelenlegi helyzet

Jelenleg az autószalonban azt, hogy ki, milyen autót, mikor, vett csak papír alapon tekinthető meg. A papír alapú módszer, működik, de eléggé lassú, emberi hibából adódóan a félre értések esélye jelentős. A megírt lapok elveszhetnek, szennyeződhetnek, az emberi írás mások számára olvashatatlan lehet. Az emberek jelenleg csak úgy tudnak tájékozódni az elérhető autókról, azok típusáról, tulajdonságairók, ha személyesen bemennek a céghez. Ezt a plusz utat szeretné a megrendelő kikerülni, azzal, hogy online elérhetővé teszi azon autókat melyeket a cég kínál. A megrendelő szereti a modern dolgokat, többek között is ezért is gondolta úgy, hogy itt az ideje elkészíteni az alkalmazást.

## 3.Vágyálomrendszer

A megrendelő egy olyan alkalmazást szeretne ami, segítené az ő ügyfeleit abban, hogy elérjék az általuk kínált autókat anélkül, hogy az ügyfél befáradna a szalonba, ezzel biztosítani a rugalmasságot, gyorsaságot. A szoftver rendelője a későbbiekben valószínűleg továb szeretné fejlesztettni a meglévő applikációt, jelenleg kísérleteznek vele, milyen mértékű pozitív visszajelzéseket kapnak, később ennek megfelelően a szoftvert valószínűleg bővíteni kell egyéb funkciókkal. Az elérhető autók listázása mellett e megrendelő szeretné, ha gyorsan, egyszerűen lehetne autókat hozzáadni a kínálathoz, abban az esetben, ha bővíteni szeretné a flottát, valamint a meglévő autókat tudja módosítani, szükség esetén eltávolítani a megjelenítendő autók közül, erre egy külön oldalt szeretne, amihez csak ő fér hozzá. Fontos számára, hogy egyértelműek legyenek a gombok, a mezők, mit, hova kell beírni, vagy éppen hova, melyik gombra kell kattintani, az egyszerű kezelhetőséget támogatja. Nem szeretne több munkanapot eltölteni azzal, hogy megtanulja használni a szoftvert. A szoftvernek készen kell állnia arra, hogy bővíthető legyen, egyéb funkciókkal, a későbbiekben elképzelhető, hogy a megrendelő szeretne regisztrálási lehetőséget, a rendszeresen tőle bérlőknek kedvezményeket nyújtani, ezeket nyilvántartani.

## 4.Kapcsolódó pályázatok, törvények, rendeletek, szabályok és szabványok

AZ EURÓPAI PARLAMENT ÉS A TANÁCS 1169/2011/EU RENDELETE (2011. október 25.)  A természetes személyeknek a személyes adatok kezelése tekintetében történő védelméről és az ilyen adatok szabad áramlásáról, valamint a 95/46/EK rendelet hatályon kívül helyezéséről (általános adatvédelmi rendelet) AZ EURÓPAI PARLAMENT ÉS A TANÁCS (EU) 2016/679 RENDELETE (2016. április 27.)
	-2011.évi CXII. törvény – az információs önrendelkezési jogról és az információszabadságról (a továbbiakban: Infotv.)
	-2001.évi CVIII. törvény – az elektronikus kereskedelmi szolgáltatások, valamint az információs társadalommal összefüggő szolgáltatások egyes kérdéseiről (főképp a 13/A. §-a)
	-2008.évi XLVII. törvény – a fogyasztókkal szembeni tisztességtelen kereskedelmi gyakorlat tilalmáról;
	-2008.évi XLVIII. törvény – a gazdasági reklámtevékenység alapvető feltételeiről és egyes korlátairól (különösen a 6.§-a)
	-2005.évi XC. törvény az elektronikus információszabadságról
	-2003.évi C. törvény az elektronikus hírközlésről (kifejezetten a 155.§-a)
	16/2011. sz. vélemény a viselkedésalapú online reklám bevált gyakorlatára vonatkozó EASA/IAB-ajánlásról
	
## 5.Jelenlegi üzleti folyamatok modellje

A jelenlegi rendszerben az megrendelő ügyfeleinek, elkell menniük az autószalon telephelyére, vagy el kell látogassanak az autószalon  weboldalára, ahol láthatja milyen autó kínálattal rendelkeznek, ezek közül tud választani egyet. Ezután egy ott dolgozóval pontosan fixálják az adatokat, hogy mikor kell, a vásárlási folyamat első szakasza ezzel végbe is zajlott. A második szakasza a vásárlásnak akkor kezdődik amikor érte megy az előre egyeztetett autóért, ilyenkor keresnie kell egy ott dolgozót, aki segít neki átadja a szükséges dolgokat, ezután elviheti az autót.

## 6.Igényelt üzleti folyamatok modellje

A megrendelő ügyfele otthon, vagy akár a buszon ülve is képes információt szeretni arról, hogy milyen autók lelhetők fel az autószalonban, ezeket telefonon vagy akár e-mail-en is letudja foglalni. Az előre fixált időponton az ügyfél elfárad az autószalonba, ahol az ott dolgozók már várni fogják. Elkísérik az általa kiválasztott autóhoz, majd átadják a szükséges dolgokat. Ezután az ügyfél viheti az autót.

## 7.Követelmény lista

ID | Név | Kifejtés
    -- | --- | --------
    K1 | Regisztráció | A felhasználó regisztrálni tud az oldalra.
    K2 | Bejelentkezés | Regisztráció után a felhasználó bejelentkezhet, ezáltal hozzáfér a további funkciókhoz.
    K3 | Virtuális auto összerakó | Az alkalamzás lehetővé teszi, hogy a saját autónkat "legózzuk" össze.
    K4 | Akadálymentesítés | A webáruház segíti a hátrányos helyzetű felhasználókat.
    K5 | Autó elmentése | A felhasználó képes elmenteni egy számára tökéletesen felszerelt autót.
    K6 | Értékelési felület | Regisztrált felhasználóink tudják értékelni a termékeket és a szolgáltatásokat, valamint szöveges megjegyzést is tehetnek.
    K7 | Felhasználói fiók módosítása | A bejelentkezett felhasználó képes az adatait módosítani.
    K8 | Felhasználó törlése | Az adatbázisból törlésre kerül a felhasználó minden adata.
    K9 | Felhasználó törlésének megakadályozása | Amennyiben vásárolt a felhasználó, nem törölheti a felhasználóját, mert a vásárlással kapcsolatos dokumentációk itt találhatóak, illetve az elektromos autójában is ezzel a felhasználóval jelentkezhet be az ottani alkalmazás áruházba.
    K10 | Rendelés visszavonása | A felhasználónak lehetősége van visszavonni a rendelését a rendelést követő 48 órán belül, erre egy dedikált gomb van elhelyezve a felhasználó profiljában.
    K11 | Hibajelentés | A felhasználó képes jelenteni az oldalon tapasztalt hibákat
	
## 8.Fogalomtár