# Rendszerterv

## 1. Bevezetés
A projekt célja egy olyan webes felület létrehozása amely támogatni képes az autószalonnak üzleti folyamatai egyszerűsítését. Emellet pedig ügyfélkörének bővítésére is lehetősége nyílik. Az autót vásárolni kívánóknak nem kell közvetlenül a szalont felkeresnie hanem az interneten keresztül elérheti és böngészni tud az elérhető autók közül. Így időt és energiát spórol és nem kell a nyitvatartási időt figyelemmel kísérni. Valamint a vállalkozás vezetőjének helyzete is leegyszerűsödik, mert nincs helyhez kötve, szabadon intézheti ügyeit, elutazhat, stb. Hanem csak egy felületen keresztül tud úja autót hozzáadni, a már meglévőeket módosítani esetlegesen törölni is. Így ezen döntések meghozatalát nem kell kiadnia a kezéból és az alkalmazottakra bíznia.


## 2. Projektterv
A webes alkalmazásban az üzletvezetőnek van a legnagyobb jogköre. Amíg a weboldalra látogató csak megtekintheti az autólistán elérhető autókat és az oldalon keresztül vásárolhat, addig a vezető az autók menedzselését végzi: autókat adhat hozzá, a már meglévőeket módosíthatja és alkalomadtán törölheti is azokat. Az alkalmazottaknak természetesen a megrendelő kérésére nem kaptak hozzáférést. Ők kizárólag emailon, illetve telefonon kommunikálhatnak az ügyfelekkel.

## 3. Üzleti folyamatok modellje
### Jelenlegi üzleti folyamatok modellje:
A jelenlegi rendszerben elég körülményes egy autó vásárlása és használata. Ezt hivatott alkalmazásunk könnyíteni. Most az ügyfél felkeresi az autóvásárló szalont vagy ellátogat az adott szalon weboldalára, ahol meg tudja tekinteni a választékot. Miután eldöntötte, hogy melyik autót szeretné és mikor akkor egyeztet egy időpontot. Majd a megbeszélt időpontban ismét befárad a szalonba, egy alkalmazottal egyeztetve megtekinti az autót, aztán ha mégsem tetszik neki akkor értelemszerüen elállhat a vásárlástól.

### Igényelt üzleti folyamatok modellje:
Az általunk kínált megoldással azonban ez a folyamat leegyszerűsödne. Emellett a régi rendszer is a már megszokott rendben tudna üzemelni. Viszont személyes megjelenést az elején nem igényel, illetve a nyitvatartási időt is figyelmen kívül lehet hagyni. Az ügyfél a weboldalon tájékozódik, kiválasztja számára legmegfelelőbb autót. Itt az alábbi adatait kell megadnia:
- nevét,
- email címét
- és üzenetként információkat a vásárolni kívánt autóról
<p>Először emailba, majd telefonon leegyezteti az időpontot a vásárlásra vonatkozóan. Így már csak a megbeszélt időpontban kell megjelennie és megtekintenie a járművét.</p>

## 4. Funkcionális leírás
Az összes ügyfél számára látható az éppen bérelhető autók valamint a szalonnal kapcsolatos adatok.
Azonban csak az autókkal kapcsolatos műveleteket csak az üzletvezető képes módosítani.
Leggyakoribb használati esete azonban mégis az ügyfelek böngészése lesz a weboldalon.

## 5. Fizikai környezet
Az alkalmazás bármilyen operációs rendszeren képes lesz elfutni, mivel egy webes alkalmazásról van szó, az általunk készített kódot a különböző böngészők képesek értelmezni. Ebből adódóan nem igényel hatalmas erőforrásokat, egy kétmagos processzor, valamint 2-4GB memóriával (RAM) rendelkező számitógép/laptop képes hiba nélkül futtatni az alkalmazást.

## 6. Követelmények

   * **Funkcionális követelmények:**

       - A felhasználó adatainak eltárolása
       - A termékek adatainak eltárolása
       - A felhasználói értékelések eltárolása
       - A termékek közötti keresés megvalósítása
       - A termék kosárba helyezésének kialakítása
       - A vásárlás menetének kialakítása

   * **Nemfunkcionális követelmények:**

       - A rendszernek egyszerre több felhasználót kell kiszolgálnia

## 7. Absztrakt domain modellje
![AbsztraktDomainModell](tervek,%20ábrák/Abstract-Domain-Modell.jpg)

## 8. Architektúrális terv
Az architektúrális tervnek a funkcionális követelményeken túl fontos elemét képezik a rendszer használatát befolyásoló tényezők is. Az adatok tárolását adatbázisok segítségével biztosítjuk így rugalmasság szempontjából a későbbi bővítésekre is felkészültünk. Az adatbázis további felhasználók tekintetében 10 ezer felhasználó adatainak tárolására képes. Ezen belül 100 felhasználói fiók a cég alkalmazottjai, vezetősége részére van fenntartva. Emellett valós időben 100 és 200 közötti felhasználót tud biztonságosan kezelni egyszerre.</br>
A felhasználók karbantartása is megvalósul. A hosszú ideje inaktív felhasználók előszöt email-ban értesítést kapnak majd ha erre sem reagálnak akkor a rendszer automatikusan törli így helyet szabadít fel a jövendőbeli felhasználóknak. Abban az esetben ha betelt a férőhelyek száma betelt akkor egy hibaüzenetet ad amelyben jelzi a felhasználó felé, hogy nincs lehetősége regisztrálni, térjen vissza később.
Másik erőssége az alkalmazásnak, hogy az üzemeltetése egyszerű. Az esetleges szerver meghibásodás vagy szolgáltató váltás esetén gond nélkül áttelepíthető másik állomásra.</br>
A mai korban elengedhetetlen követelmény a biztonság. Ezt a különböző felhasználói jogosultságokkal érhető el. Ennek köszönhetően a látogatók nem tudják az autók adatait módosítani valamint nem férhetnek hozzá bizalmas információkhoz. A felhasználók kezelése a token rendszerrel valósul meg.

## 9. Adatbázis terv
![Adatbazisterv](tervek,%20ábrák/adatbazis_terv.png)

## 10.Implementációs terv
A webáruház felülete HTML, JavaScript nyelven készül. Az elemeket CSS fájlok segítségével dizájnoljuk. A termékek és a felhasználók tárolására szükség van adatbázisra is. A webáruház backend részét PHP nyelven valósítjuk meg. A fájlokat külön választjuk, az átláthatóság és az egyszerűbb bővítés érdekében.

## 11.Tesztelési terv
A tesztelés során az oldalon megvalósított funkciók működését figyeljük. A teszteléssel a különböző hibák megtalálása a cél.
 A teszteléseket a fejlesztői csapat minden tagja elvégzi. Egy teszt eredményeit a tagok dokumentálják külön fájlokba.
 A dokumentum táblázatos formában beküldendő.
 A tesztelési dokumentum kitöltésére egy sablon:

 **Tesztelő: Vezetéknév Keresztnév**

 **Tesztelés dátuma: Év.Hónap.Nap**

 Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés
 ----------|--------------|---------------|----------|-----------
 például. Teszt #01 | Regisztráció | A felhasználó az adatok megadásával sikeresen regisztrálni tud  | A felhasználó sikeresen regisztrált | Nem találtam problémát.
 ... | ... | ... | ... | ...

## 12. Telepítési terv
A áruház internet segítségével lesz elérhető egy webcímen keresztül. A webcím megadásával a felhasználó a webáruház főoldalára kerül.
A legtöbb böngészőből elérhető a weboldal, továbbá minden interneteléréssel rendelkező eszköz eléri az oldalt.
A webáruház telepítésekor szükséges, hogy egy szerverszolgáltatáshoz kapcsolódjon, mivel a háttérben adatbáziskezelés történik.
A telepítés során fontos, hogy a szerver elérési útja megváltozhat, ez esetben módosítani kell azt a megfelelő fájlban.

## 13. Karbantartási terv
A webáruház karbantartására időről időre sor fog kerülni illetve a lehető leghamarabb, amennyiben az oldal működését megnehezítő hibát
találunk. A hibafelderítés meggyorsítása érdekében szeretnénk az oldalon egy 'Jelentés' gombot elhelyezni, mely megnyomásával, és a mezők kitöltésével a felhansználó küldhet visszajelzést, amennyiben egy funkció nem működik megfelelően.
Ezeket a jelentéseket a fejlesztői csapat tagjai látni fogják, így hamar meg tudják kezdeni a hibák javítását.
A hibajelentés elküldésekor két mezőt fogunk látni magunk előtt: Az egyikben a probléma rövid, párszavas megfogalmazása szükséges, ezen mező
kitöltése kötelező, a másik mező a probléma részletesebb leírására szolgál mely kitöltése opcionális.
A biztonság növelése érdekében szükséges bármilyen módosítás előtt az oldalról egy biztonsági mentést készíteni.
=======

