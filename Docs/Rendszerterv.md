## 1. A rendszer célja



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




### Nemfunkcionális követelmények



## 5. Funkcionális terv



### 5.1 Rendszerszereplők

A rendszer egy szerver (host) gépen fut, melyet a felhasználók (kliensek) egy webböngészőn keresztül érhetnek el. A felhasználók között jogosultságok oszlanak meg, ezek:

| Felhasználói jogkör | Jogok                                                                                                                                                                                                                   |
|---------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| no_login | Bejelentkezés és regisztráció, a termékek megtekintése, ügyfélszolgálat elérése |
| uset     | Termékek megtekintése és vásárlása, rendelés leadása, törlése és követése, saját profil szerkesztése és törlése, értékelés írása a termékre, ügyfélszolgálat elérése |
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

## 10. Tesztterv

A tesztelések célja a rendszer és komponensei funkcionalitásának teljes vizsgálata,
ellenőrzése a rendszer által megvalósított üzleti szolgáltatások verifikálása.
A teszteléseket a fejlesztői csapat minden tagja elvégzi.
A tesztek eredményeit a tagok dokumentálják külön fájlokba.

A tesztelés során a szoftver megfelelő működését vizsgáljuk. Amennyiben az elvártnak megfelelő eredményt kapunk, a teszt eset sikeresnek tekinthető, ellenkező esetben a hibát rögzítjük a teszt jegyzőkönyvben. Ezt követően a megtalált hibákat javítjuk a szoftverben, és újbóli tesztelésnek vetjük alá a rendszert.

A tesztelés során különböző operációs rendszereken (IOS, Android, Windows) és különböző böngészőkben (Chrome, firefox, Opera, Safari, Brave) vizsgáljuk az oldal megfelelő működését.

## 11. Telepítési terv



## 12. Karbantartási terv

