#  1. A rendszer célja
## 1.1 A dokumentumról:
Csapatunk elkötelezett egy teljesen müködő weboldal létrehozásában, kielégítve az emberek különböző igényeit az italok szempontjából. A weboldal változatos üditő és italválasztékkal fog rendelkezni.
A dokumentum leírja részletesen a projektet, beleértve a weboldal funkcionalitását, a csapat tagjait, szerepüket és, hogy miért felelősek, továbbá a technológiákat, amiket a projekt során használunk, stb.
## 1.2 Projekt áttekintés:
A fejlesztői csapat többféle technológiát használ és szoftvereket, amit a késöbbiek során részletezünk. Továbba az igényelt üzleti modell, a fejlesztés menete és a projekt dokumentációja is itt található.

#  2. Projekt terv
## 2.1 Szerepek és felelősségi körök
### Backend fejlesztő:
A backend fejlesztők felelősek a szerver oldali kódok írásáért, weboldali funkciók beállításáért és az adatstruktúrák írásáért. Javarészt PHP-t használnak. 
### Frontend fejlesztő: 
A frontend fejlesztők dolgoznak vizuális effekteken, amiket utána a felhasználók láthatnak és használhatnak a webshopban. Biztosítják a felhasználókat arról, hogy ne ütközzenek hibába az oldal használata során. Laravel keretrendszert, HTML-t, CSS-t és JavaScript-et használnak többnyire.
### Adatbázis fejlesztő:
Az adatbázis fejlesztők felelősek a tárhelyért és az adatok kezeléséért, amiket a weboldalon használunk.
## 2.2 A csapat tagjai:
- Kungl Rebeka - 
- Ligárt Ádám - 
- Nagy Zoltán - csapatkapitány, Backend fejlesztő
- Nyeste Réka - Backend fejlesztő
- Pap Gábor - Senior fejlesztő
- Juhász Bálint - Senior fejlesztő
### 2.3 Projekt ütemterv
- 2021/02/23 Követelmény és Funkcionális specifikáció elkészítése
- 2021/03/02 Rendszerterv 
- 2021/03/09 Fejlesztés (sprint 1)
- 2021/03/16 Fejlesztés (sprint 2)
- 2021/03/23 A dokumentáció és a projekt demójának a bemutatása és sprint 3
- 2021/03/30 Fejlesztés (sprint 4) 
- 2021/04/13 Fejlesztés (sprint 5)
- 2021/04/20 Fejlesztés (sprint 6)
- 2021/04/27 Fejlesztés (sprint 7) és tesztelés
- 2021/05/04 Fejlesztés (sprint 8) és tesztelés
- 2021/05/14 Review és kész projekt bemutatása
### 2.4 Mérföldkövek:
- 2021/02/23 A követelmény és funkcionális specifikáció dokumentumainak a befejezése
### 2.5 Technológiák: 
- Web dizájn kiegészítés: Bootstrap
A bootstrap-et arra használjuk, hogy a webshopunk dizájnja dinamikusan változó és ízléses legyen.
- Programozási nyelv: PHP
PHP-ban fogjuk megírni a projektünk backend kódját, mert ez az egyik legnépszerűbb környezet, amiben weboldalakat fejleszthetünk. A Laravel keretrendszer miatt PHP 7.4-nél frissebb verziót fogunk használni.
#  3. Üzleti folyamatok
![Uzleti Modell](https://github.com/zolya99/AFP2_Projekt/blob/main/doc/%C3%81br%C3%A1k/UzlMod.png)
#  4. Követelmények
#  5. Funkcionális terv
Rendszerszereplők: Vásárlók(Felhasználók)
Rendszerhasználati esetek és lefutásaik: 
Vásárlók(Felhasználók):
-Regisztráció: A felhasználó új fiókot tud regisztrálni az oldalra
-Bejelentkezés: A felhasználó be tud jelentkezni az fiókjába
-Profil adatainak módosítása: A felhasználó tudja szerkeszteni az adatait
-Kategóriák: A felhasználó ki tudja választani mit keres
-Kosár: Tartalmazza az összes olyan terméket, amit a vásárló kiválasztott. Az oldalon belül tudja a termékek számít csökkenti, illetve növelni
-Rendelés: A felhasználó meg tudja adni, hogy hova szeretne rendelni, illetve hogy kártyával vagy készpénzzel szeretne-e fizetni
-Kijelentkezés: A felhasználó ki tud jelentkezni a fiókjából
-Elfelejtett jelszó: A felhasználó meg tudja változtatni a fiókjához tartozó jelszavát

Webshop funkciók:
-Főoldal: A felhasználó automatikusan a kezdőoldalra lesz átirányítva
-Kategóriák:  A felhasználó ki tudja választani, mit keres
-Termékek: A felhasználó láthatja a különböző termékek árát, leírását
-Kosár: Tartalmazza az összes olyan terméket, amit a vásárló kiválasztott. Az oldalon belül tudja a termékek számít csökkenti, illetve növelni
-Megrendelő oldal: A felhasználó meg tudja adni, hogy hova szeretne rendelni, illetve hogy kártyával vagy készpénzzel szeretne-e fizetni
-Profil: A felhasználó profiljának az adatait tartalmazza

#  6. Fizikai környezet
- A weboldal egyaránt használható minden fajta erre alkalmas eszközön, mivel teljes mértékben reszponzív.
- Nincsennek megvásárolt komponenseink
- Fejlesztő eszközök:
	- Notepad++
	- Wampserver64
	- Sublimetext
	- PHPStorm
	- Bootstrap
	- Laravel
	- Mysql
#  7. Absztrakt domain modell
#  8. Architektúrális terv
#  9. Adatbázis terv
#  10. Teszt terv
#  11. Telepítési terv
#  12. Karbantartási terv
