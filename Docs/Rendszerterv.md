## 1. A rendszer célja

Az Eviscerate Kft. azt a megbízást kapta, hogy készítsen egy modern és letisztult stílusú webshopot, ahol a felhasználók különböző kiadók által kiadott és forgalmazott könyveket tudnak vásárolni. A webshop kitűnik a többi könyveket áruló webáruház mellett az átláthatóság, dizájn terén, illetve a könyveket akár egy helyről is beszerezhetik a vásárlók.
Az Eviscerate Kft. elkötelezett amellett, hogy a Könyvkuckó webshop kielégítse a könyvmolyok minden igényét, mindezt egy jól kezelhető felületen keresztül. Ez a projekt az általunk fejlesztett egyedi megoldásokkal fogja elősegíteni azt, hogy megkönnyítsük az olvasni vágyók életét, rengeteg kiadó kötetét egy helyre gyűjtjük össze.
Felhasználóink könnyen eligazodnak a weboldalon, a könyvek között egyszerűen tudnak keresni vagy szűrni. A vásárlás után a rendeléseket nyomon tudja követni a felhasználó, így mindig naprakészen láthatja csomagja állapotát. Oldalunk törekszik a sérülésmentes szállításra, a lehető leggondosabban csomagoljuk be a megrendelt termékeket. Sérülés esetén a felhasználó kapcsolatba léphet az ügyfélszolgálatunkkal, ahol segítőkészen segítséget nyújtanak a vásárlónak, az érintett könyvet pedig kicseréljük.

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek

* Scrum master:
	-   Pántya Barnabás 	
* Product owner:
	-   Pántya Barnabás
* Üzleti szereplő:
	-   Megrendelő:
	    - Sarah J. Maas
   
### 2.2 Projektmunkások és felelőségek
   		
* Frontend:
	-   Hegyközi Petra
	-   Habóczki Szabolcs
* Backend:  
	-   Csonka Mihály
 	-   Vincze Ákos 
* Tesztelés:   
	-   Hegyközi Petra
	-   Vincze Ákos
	-   Habóczki Szabolcs
	-   Csonka Mihály


### 2.1 Projektszerepkörök, felelőségek



### 2.2 Projektmunkások és felelőségek



### 2.3 Ütemterv



### 2.4 Mérföldkövek



## 3. Üzleti folyamatok modellje



### 3.1 Üzleti szereplők



### 3.2 Üzleti folyamatok



## 4. Követelmények



### Funkcionális követelmények

| ID | Megnevezés               | Leírás                                                                                                                                                     |
|----|--------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------|
| K1 | Bejelentkezési oldal     | Az egyes funkciók eléréséhez előbb ezen az oldalon kell azonosítania magát a felhasználónak. |
| K2 | Termékböngésző           | A felhasználó itt láthatja a webshopon található termékek széles választékát, a terméket kosárba tudja tenni vagy el tudja érni a termékspecifikus oldalt. |
| K3 | Termékspecifikus oldal   | Ezen az oldalon a felhasználó részletesebb leírást kaphat egyes, az oldalon kapható termékekről, a terméket kosárba tudja tenni vagy akár értékelni tudja azt. |
| K4 | Kosár                    | A felhasználó ezen az oldalon láthatja az általa választott termékeket, innen tud tovább menni a rendelés leadására és befejezésére. |
| K5 | Profil oldal             | Ezen az oldalon a felhasználó a saját adatait szerkesztheti. |
| K6 | Regisztrációs oldal      | Ezen az oldalon a felhasználó meg tudja adni az adatait, amik szükségesek egyes funkciók eléréséhez. |
| K7 | Kapcsolatfelvételi oldal | A felhasználó itt tudja felvenni a kapcsolatot az ügyfélszolgálattal bármilyen kérdés esetén, legyen az rendeléssel kapcsolatos vagy megjelenéssel. |
| K8 | Csomagkövetési oldal     | Ezen az oldalon jelennek meg a felhasználó rendelései, annak állapota és a várható szállításának ideje. |



### Nemfunkcionális követelmények

| ID  | Megnevezés                             | Leírás                                                                                                 |
|-----|----------------------------------------|--------------------------------------------------------------------------------------------------------|
| K9  | Modern, letisztult oldaldizájn | Maga az oldal dizájnja, a színek és a betűk nem hivalkodóak, egyszerűen áttekinthető oldalt nyújtanak. |
| K10 | Könnyen kezelhető, átlátható felület | Az oldalak egyszerűen használhatóak, átláthatóak legyenek és ne legyenek zsúfoltak. |

## 5. Funkcionális terv



### 5.1 Rendszerszereplők

A rendszer egy szerver (host) gépen fut, melyet a felhasználók (kliensek) egy webböngészőn keresztül érhetnek el. A felhasználók között jogosultságok oszlanak meg, ezek:

| Felhasználói jogkör | Jogok                                                                                                                                                                                                                   |
|---------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| no_login | Bejelentkezés és regisztráció, a termékek megtekintése, ügyfélszolgálat elérése |
| user     | Termékek megtekintése és vásárlása, rendelés leadása, törlése és követése, saját profil szerkesztése és törlése, értékelés írása a termékre, ügyfélszolgálat elérése |
| admin    | Termékek törlése és hozzáadása, értékelés törlése, profilok törlése, ügyfélszolgálati segítségnyújtás |
| delivery | A rendelések állapotának a módosítása |

### 5.2 Menü-hierarchia:

* Könyvkuckó Felület: 
	- Felhasználó
		- Kínálat böngészése, termékek megtekintése
		- GYIK oldal, ügyfélszolgálati elérhetőségek oldal
		- Bejelentkezés
	- Belépett felhasználó
		- Kínálat böngészése, termékek megtekintése
		- GYIK oldal, ügyfélszolgálati elérhetőségek oldal
		- Profil szerkesztése, törlése
		- Rendelés leadása, törlése
		- Értékelés írása
	- Admin felhasználó
		- Felhasználók törlése
		- Termékek törlése, hozzáadása
		- Értékelések törlése
		- Rendelések törlése
 * Futárszolgálat Felület: (csak futárszolgálatnak elérhető)
	- Az oldal csak "delivery", azaz futárszolgálatnak elérhető bejelentkezés után
 		- Rendelések áttekintése
 		- Rendelések állapotának szerkesztése

## 6. Fizikai környezet



### Vásárolt szoftverkomponensek, valamint esetleges külső rendszerek



### Hardver topológia



### Fizikai alrendszerek



### Fejlesztő eszközök



## 7. Architekturális terv



## 8. Adatbázis terv



## 9. Implementációs terv

Laravel kezeli a backend-et, a frontend-et pedig JavaScript, CSS és PHP.

## 10. Tesztterv

A tesztelések célja a rendszer és komponensei funkcionalitásának teljes vizsgálata,
ellenőrzése a rendszer által megvalósított üzleti szolgáltatások verifikálása.
A teszteléseket a fejlesztői csapat minden tagja elvégzi.
A tesztek eredményeit a tagok dokumentálják külön fájlokba.

A tesztelés során a szoftver megfelelő működését vizsgáljuk. Amennyiben az elvártnak megfelelő eredményt kapunk, a teszt eset sikeresnek tekinthető, ellenkező esetben a hibát rögzítjük a teszt jegyzőkönyvben. Ezt követően a megtalált hibákat javítjuk a szoftverben, és újbóli tesztelésnek vetjük alá a rendszert.

A tesztelés során különböző operációs rendszereken (IOS, Android, Windows) és különböző böngészőkben (Chrome, firefox, Opera, Safari, Brave) vizsgáljuk az oldal megfelelő működését.

## 11. Telepítési terv



## 12. Karbantartási terv

