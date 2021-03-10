                                            **Funkcionális Specifikáció**

## Áttekintés

Az Anabolic Whey csapata egy olyan weboldalt szeretne prezentálni az embereknek, amely modern, letisztult, könnyen olvasható, és pozitív irányba befolyásolja a felhasználó véleményét a (Tesla) céggel kapcsolatban, ezzel növelve a cégbe vetett bizalmat.
A weboldal létrehozásánál elsődleges fontosságú számunkra, hogy egyszerűen lehessen rajta tájékózódni, ezért a menüpontokat nagyon leszűkítettük, így szinte lehetetlen elveszni az oldalon.
Minden online történik, a felhasználó megrendeli az autót online, kifizeti online, az egyedüli offline esemény, amikor a felhasználó átveszi az autót (Kérhető ingyenes házhozszállítás).
Nagyon fontosnak tartjuk, hogy a megrendelhető autókat mindenki a saját igényeinek megfelelően extrázhassa, ezért az oldalon a rendelés előtt specifikálhatjuk, hogy milyen extrákkal kérjük az autónkat, mindegyik extra alatt van egy leírás, ami elmagyarázza a felhasználónak az első hallásra nem egyértelmű extrákat (pl: adaptív napfénytető).
Illetve elektromos autókról van szó, ezért az extráknak megfelelően láthatunk a weboldalon egy olyan diagramot ami megmutatja, hogy egy töltéssel hány km-t tudunk megtenni az általunk összerakott gépjárművel.

## Jelenlegi helyzet

Jelenleg az autóvásárlások a legtöbb cégnél még offline formában működnek, egy autószalonban, ezt szeretnénk kikerülni, mert felesleges befeketetésnek tartjuk, plusz sokkal egyszerűbb online intézni ezeket a dolgokat az otthon kényelméből.
Az autószalonokban többnyire előre specifikált extrákkal rendelkező autókat tudunk vásárolni, a mi esetünkben azonban mi választhatjuk majd ki az extrákat, és ennek megfelelő autót kapunk a kezünkbe.
Ha esetleg valamelyik modellünk nem elérhető, arról az ügyfél azonnali tájékoztatást kap, hiszen a weboldalon mindig az aktuálisan megrendelhető modellek,extrák állnak rendelkezésre, ezzel kiküszöbölve azt a jelenlegi helyzetet, hogy sokszor csak az ügyfél utánajárása után fog kiderülni, hogy az adott autó az adott felszereltséggel nincs készleten, ez az ügyfélnek kellemetlen benyomást kelthet a cégről, illetve pazaroljük a kliensünk idejét és pénzét, hiszen jobb esetben egy telefonhívás után tudja meg ezt az informáciiót, rosszabb esetben 100km utazás után.
Jelenleg az autószalonok többnyire papír alapú dokumentálást használnak, ami több problémát is felvet: a papír alapú módszer tény ami tény, működik, de eléggé lassú, emberi hibából adódóan a félre értések esélye jelentős. A megírt lapok elveszhetnek, szennyeződhetnek, az emberi írás mások számára olvashatatlan lehet. 
Ezt szeretnénk elkerülni teljeskörű online ügyintézéssel, online számlákkal, és a vírushelyzetre való tekintettel online aláírással is.


## Követelménylista
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

## Jelenlegi üzleti folyamatok modellje


## Igényelt üzleti folyamatok modellje


## Használati esetek

 **Regisztrált felhasználó**: A regisztrált felhasználó képes rendelni a webáruházból, rendeléskor a fiókjában megadott adatok automatikusan kitöltésre kerülnek. Meg tudja változtatni a saját adatait, képes elmenteni a megtetszett termékeket és később megvásárolni azokat és értékelni tudja a webáruház termékeit, szolgáltatásait.
 **Admin felhasználó**: Az admin felhasználó látja a felhasználók által küldött hibajelentéseket, felelős a webáruház megfelelő működéséért.

## Képernyő tervek
![Image](https://github.com/unicsbalint/AFP_2_2021/blob/main/dokumentaciok/tervek%2C%20%C3%A1br%C3%A1k/kepernyoterv.jpg)
https://github.com/unicsbalint/AFP_2_2021/blob/main/dokumentaciok/tervek%2C%20%C3%A1br%C3%A1k/kepernyoterv.jpg
## Forgatókönyv
Bob elektromos autót szeretne vásárolni, ezért bemegy a legközelebbi autókereskedésbe, ahol nem kap megfelelő információkat az autóról amit szeretne, ezért még utánanéz neten, ahol megtalálja az oldalunkat, ahol saját magának össze tudja válogatni a megfelelő felszereltséget, akkumulátort az autójához,
úgy gondolja, hogy akik ilyen igényes weboldalt csinálnak, ilyen innovatív módszerekkel azokban meg lehet bízni, ezért a helyi kereskedés helyett
tőlünk rendeli meg az autót.


## Fogalomszótár
**PHP:** 	Egy programozási nyelv, ami általában egy webszerveren kerül feldolgozásra.
**HTML:**	Egy dokumentum, ami arra van tervezve, hogy egy webböngésző jelenítse meg.
**CSS:** 	Egy dokumentum ami befolyásolja a weboldal dizájn elemeit.
**JavaScript:** Egy programozási nyelv ami által komplex funkciókat implementáljunk weboldalakon. - ha a weboldal dinamikus működést tanusít, akkor nagy a valószínűsége, hogy van benne JavaScript -


