# Tesztjegyzőkönyv
## Tesztelő: Hegyközi Petra
## Utolsó módosítás: 2024. 12. 10.

Operációs rendszer: Windows 11

Böngészők: Google Chrome, Mozilla Firefox

Ebben a dokumentumban lesz felsorolva az elvégzett tesztek elvárásai és eredményei. (Alfa, Béta és Végleges verzió)

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2024. 12. 11. | Az adatbázis működésének ellenőrzése. | A táblák sikeresen kapcsolódnak a weboldallal, az adatbázis kész az adatok tárolására. | Nem találtam hibát. |
| Bejelentkezés | 2024. 12. 11 | Belépés egy, már létrehozott fiókkal. | Sikeresen be tudtam lépni a felületre a fiókkal. | Nem találtam hibát. |
| Regisztráció | 2024. 12. 11 | Egy új fiók regisztrálása a weboldalon. | A kért adatok megadása után sikeresen tudtam regisztrálni. | Nem találtam hibát. |
| Autentikáció | 2024. 12. 11. | A profilt csak a felhasználói fiók azonosítása után tudjuk megtekinteni.  | Sikeresen működik bejelentkezés után, és kijelentkezés után már nem érhető el az. | Nem találtam hibát. |
| Navigációs sáv | 2024. 12. 11. | A navigációs sáv helyes megjelenése és működése. | A menüpontokat sikeresen el lehet érni, azonban egyes oldalakról nem tudom elérni a bejelentkező, illetve a regisztrációs oldalt. | Találtam hibát. | 

Az Alfa tesztelés során a weboldal funkciói rendeltetésszerű használat mellett megfelelően működtek, azonban néhány menüpontba lépve nem tudtam elérni a regisztrációs és a bejelentkező oldalt.

A következő teszt során tesztelésre és vizsgálatra kerül a többi funckió.

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Regisztráció | 2024. 12. 11. | Egy új fiók regisztrálása a weboldalon. | Sikeresen be tudtam regisztrálni a felületre a fiókkal. | Nem találtam hibát. |
| Regisztráció | 2024. 12. 11. | Egy új fiók regisztrálása a weboldalon olyan módon, hogy jelszónak rövid karaktersorozatot adunk meg. | Nem enged jelszónak beállítani 8 karakternél kevesebbet, amit ellenőriz. | Nem találtam hibát. |
| Autentikáció | 2024. 12. 11. | A profilt csak a felhasználói fiók azonosítása után tudjuk megtekinteni. | Sikeresen működik bejelentkezés után, és kijelentkezés után már nem érhető el az. | Nem találtam hibát. |
| Navigációs sáv | 2024. 12. 11. | Főoldal megjelenése és működése. | A menüpontra kattintva sikeresen megjelenik az oldal, azonban az oldal még üres, így nem jelennek meg benne még termékek (könyvek). | Hibát találtam. |
| Navigációs sáv | 2024. 12. 11. | Csak nálunk kapható oldal megjelenése és működése. | Az oldal sikeresen megnyílik, azonban az oldal még üres, így nem jelennek meg benne még termékek (könyvek).  | Hibát találtam. |
| Navigációs sáv | 2024. 12. 11. | Gyakran ismételt kérdések oldal megjelenése és működése. | Az oldal sikeresen megnyílik, a tartalma is látszik, azonban a szöveg láthatóságának növelése érdekében egy egyszínű hátterű div-be kellene tenni. | Hibát találtam. |
| Navigációs sáv | 2024. 12. 11. | Ügyfélszolgálat oldal megjelenése és működése. | Az oldal sikeresen megnyílik, a tartalma is látszik, azonban a szöveg láthatóságának növelése érdekében egy egyszínű hátterű div-be kellene tenni. | Hibát találtam. |
| Könyv | 2024. 12. 11. | Egy darab termék (könyv) megjelenítése az oldalon. | Az oldalon nem látszik a könyv, így az adatai sem. | Hibát találtam. |
| Frontend | 2024. 12. 11. | Az oldal megjelenésének a vizsgálata. | A weboldal felépítése elfogadható és átlátható, azonban néhány funkció nem működik megfelelően. | Hibát találtam. |
| Backend | 2024. 12. 11. | A Backendben megírt kódok helyességének és működésének vizsgálata. | A Backend kódjainak egy része nem működött megfelelően. | Hibát találtam. |

Az Alfa tesztben lévő navigációs sávos elemek hibája javításra került a Béta tesztelésre.

Sikeresen elkészült a Béta teszt, a weboldalon a letesztelt funkciók többsége hibásan működtek, ezért sürgős javítást igényel mind Frontend-en, mind Backend-en.

A Végleges tesztelésre prioritást élveznek a Béta tesztben talált hibák javítása, majd az összes eddigi funkció újra ellenőrzésre kerül.

## Végleges teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2024. 12. 11. | Az adatbázis működésének ellenőrzése. | A táblák sikeresen kapcsolódnak a weboldallal, az adatbázis kész az adatok tárolására. | Nem találtam hibát. |
| Bejelentkezés | 2024. 12. 11 | Belépés egy, már létrehozott fiókkal. | Sikeresen be tudtam lépni a felületre a fiókkal. | Nem találtam hibát. |
| Bejelentkezés | 2024. 12. 11 | Belépés egy, még nem létező fiókkal. | Nem enged belépni a felületre nem létező felhasználói fiókkal. | Nem találtam hibát. |
| Regisztráció | 2024. 12. 11. | Egy új fiók regisztrálása a weboldalon. | Sikeresen be tudtam regisztrálni a felületre a fiókkal. | Nem találtam hibát. |
| Regisztráció | 2024. 12. 11. | Egy új fiók regisztrálása a weboldalon olyan módon, hogy jelszónak rövid karaktersorozatot adunk meg. | Nem enged jelszónak beállítani 8 karakternél kevesebbet, amit ellenőriz. | Nem találtam hibát. |
| Autentikáció | 2024. 12. 11. | A profilt csak a felhasználói fiók azonosítása után tudjuk megtekinteni. | Sikeresen működik bejelentkezés után, és kijelentkezés után már nem érhető el az. | Nem találtam hibát. |
| Navigációs sáv | 2024. 12. 11. | Főoldal megjelenése és működése. | A menüpontra kattintva sikeresen megjelenik az oldal, azonban az oldal még üres, így nem jelennek meg benne még termékek (könyvek). | Hibát találtam. |
| Navigációs sáv | 2024. 12. 11. | Csak nálunk kapható oldal megjelenése és működése. | Az oldal sikeresen megnyílik, azonban az oldal még üres, így nem jelennek meg benne még termékek (könyvek).  | Hibát találtam. |
| Navigációs sáv | 2024. 12. 11. | Gyakran ismételt kérdések oldal megjelenése és működése. | Az oldal sikeresen megnyílik, a tartalma is látszik, azonban a szöveg láthatóságának növelése érdekében egy egyszínű hátterű div-be kellene tenni. | Hibát találtam. |
| Navigációs sáv | 2024. 12. 11. | Ügyfélszolgálat oldal megjelenése és működése. | Az oldal sikeresen megnyílik, a tartalma is látszik, azonban a szöveg láthatóságának növelése érdekében egy egyszínű hátterű div-be kellene tenni. | Hibát találtam. |
| Könyv | 2024. 12. 11. | Egy darab termék (könyv) megjelenítése az oldalon. | Az oldalon nem látszik a könyv, így az adatai sem. | Hibát találtam. |
| Frontend | 2024. 12. 11. | Az oldal megjelenésének a vizsgálata. | A weboldal felépítése elfogadható és átlátható, azonban néhány funkció nem működik megfelelően. | Hibát találtam. |
| Backend | 2024. 12. 11. | A Backendben megírt kódok helyességének és működésének vizsgálata. | A Backend kódjainak egy része nem működött megfelelően. | Hibát találtam. |

A Béta tesztben lévő hibák többségét nem sikerült javítani, idő hiányában nem sikerült elvégezni.

A Végleges teszt lezajlott, sajnos nem sikerült időn belül kijavítani a kritikus hibák többségét, így a megrendelőnek hibásan kerülhet át a program. Amennyiben nem fogadja el a programot a megrendelő, igény esetén kérheti ezek javíttatását.