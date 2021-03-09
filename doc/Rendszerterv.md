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
- Kungl Rebeka - Frontend fejlesztő
- Ligárt Ádám - Frontend fejlesztő
- Nagy Zoltán - csapatkapitány, Backend és Adatbázis fejlesztő
- Nyeste Réka - Backend fejlesztő
- Pap Gábor - Senior fejlesztő
- Juhász Bálint - Senior fejlesztő
### 2.3 Projekt ütemterv
- 2021/02/23 Követelmény és Funkcionális specifikáció elkészítése
- 2021/03/02 Rendszerterv 
- 2021/03/09 Dokumentáció befejezése
- 2021/03/16 A dokumentáció bemutatása
- 2021/03/23 Fejlesztés (sprint 1)
- 2021/03/30 Fejlesztés (sprint 2) 
- 2021/04/13 Fejlesztés (sprint 3)
- 2021/04/20 Fejlesztés (sprint 4)
- 2021/04/27 Fejlesztés (sprint 5) és tesztelés
- 2021/05/04 Fejlesztés (sprint 6) és tesztelés
- 2021/05/14 Review és kész projekt bemutatása
### 2.4 Mérföldkövek:
- 2021/02/23 A követelmény és funkcionális specifikáció dokumentumainak a befejezése
### 2.5 Technológiák: 
#### Web dizájn kiegészítés: Bootstrap
- A bootstrap-et arra használjuk, hogy a webshopunk dizájnja dinamikusan változó és ízléses legyen.
#### Programozási nyelv: PHP
- PHP-ban fogjuk megírni a projektünk backend kódját, mert ez az egyik legnépszerűbb környezet, amiben weboldalakat fejleszthetünk. A Laravel keretrendszer miatt PHP 7.4-nél frissebb verziót fogunk használni.
#### Kommunikáció: Discord, GitHub, Trello
- A Discord egy olyan platform, ahol csapatunk tagjai tudnak kommunikálni egymással egyidőben voice chaten. Mivel a chatbe írt kommentek nem törlődnek, ezért vissza lehet olvasni az elküldött üzeneteket, ezért könnyebbé válik az esetlegesen felmerülő problémák visszakeresése.
- A GitHub egy ingyenes adattár, ahol a projektet tárolni lehet fejlesztés közben. Meg tudjuk osztani és vissza tudjuk vonni azokat a verziókat, amiket meg szeretnénk változtatni, illetve ha valami hiba felmerül nem kell az elejéről elkezdeni a kódolást. 
- A Trello egy Kanban-stílusú, ingyenes, web-alapú applikáció, amiben létre tudunk hozni táblákat a különböző feladatoknak, meg tudjuk címkézni őket, határidőt is tudunk hozzárendelni. Alapvető táblák például: Backlog vagy To Do, In-Progress, illetve Completed.
#### Adatbázis: MySQL
- Az adatbázisunkat MySQL-ben fogjuk megírni. 
#  3. Üzleti folyamatok
![Uzleti Modell](https://github.com/zolya99/AFP2_Projekt/blob/main/doc/%C3%81br%C3%A1k/UzlMod.png)
#  4. Követelmények
Funkcionális követelmények: 
- Regisztráció: A felhasználó új fiókot tud regisztrálni az oldalra
- Bejelentkezés: A felhasználó be tud jelentkezni az fiókjába 
- Kijelentkezés: A felhasználó ki tud jelentkezni a fiókjából
- Hozzáférési szabályok: Egyes funkciók csak bejelentkezés után érhetőek el
- Felhasználó adatainak tárolása, módosítása
- Rendelés adatainak leadása 
- Navigáció az oldalak között : A felhasználóknak képesnek kell lenniük bármelyik oldalra való navigálásra
- Kosár tartalmának tárolása
- Termékek adatainak tárolása
- Oldalak kezelhetősége 
Nem funkcionális követelmények: 
- Letisztult, felhasználóbarát felület 
- Betöltés gyors működése 
- Optimalizáltság
- A rendszer biztosítja a felhasználók adatainak biztonságos tárolását
- A felhasználó adataihoz nem férhet hozzá harmadik fél
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
-Profil adatainak módosítása: A felhasználó tudja szerkeszteni az adatait
-Hozzáférési szabályok: Egyes funkciók csak bejelentkezés után érhetőek el
-Navigáció az oldalak között: A felhasználóknak képesnek kell lenniük bármelyik oldalra való navigálásra
-Termékek keresése : A felhasználóknak tudniuk kell keresni a termékek között 

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
A weboldalnak a következő alapvető követelményeknek kell megfelelnie:

Könnyen érthetőnek és használhatónak kell lennie.
Logikus felépítsűnek kell lennie a felhasználók számára.
Használja az ipar legjobban bevált folyamatait.
Stílusok használata, ami átláthatóvá teszi az egyes oldalak részleteit, ezen belül:
Hibaüzenetek megjelenítése jól látható helyen és stílusban
Olyan panelek létrehozása, ami az alapvető felhasználók számára nem látható, kizárólag a weboldal üzemeltetői férnek hozzá.
#  7. Absztrakt domain modell
A rendszert a felhasználó egy webes alkalmazáson keresztül érheti majd el, aminek az elkészítését Java nyelven tervezzük.
A felület lehetővé teszi majd a felhasználó számára az adatai megadásával a regisztrációt, illetve regisztráció után a bejelentkezést.
Bejelentkezés után a felhasználó böngészhet a különböző termékkategórák között, kosárba teheti a kiválasztott termékeket.
A termékekhez leírás, ár tartozik. A felhasználó a profil oldalon tudja szerkeszteni az adatait.
A felhasználók és a termékek adatai egy MySQL adatbázisban lesznek tárolva.
A webáruház letrehozásához a következő fejlesztői eszközöket használjuk:
- Notepad++
- Wampserver64
- Sublimetext
- PHPStorm
- Bootstrap
- Laravel
- MySQL
#  8. Architektúrális terv
A rendszerhez szükség van egy adatbázis szerverre, ebben az esetben MySql-t használunk. A program Laravel keretrendszer használatával készül el.
#  9. Adatbázis terv
A tervezett szolgáltatás jellegét tekintve egy központi adatbázis használata elengedhetetlen.
A felhasználók, és azok adatainak rögzítése, tárolása és rendszerezése céljából a modern adatbáziskezelés konvenciói a legcélravezetőbbek.
Arra, hogy ezeket implementálhassuk, a MySQL rendszerét választottuk, az ismeretségeink tudatában, és a megbízhatóság fényében.
#  10. Teszt terv
## 10.1. Bevezetés
Tesztelés célja a projektben megtalálható struktúrális és design hibák feltárása.
## 10.2 Tesztelési terv hatóköre, célja: 
- A tesztelési terv célja a tesztelés teljes körűségének biztosítása, a tesztelés során alkalmazott eljárások és megoldások meghatározásával.
- A teszt végrehajtásáért ez esetben a test manager fele , és a tesztelést azt általa összeállított tesztcsapat hajtja végre.
## 10.3 Elvárások
Az alábbi alap elvárások képezik ennek a teszttervnek az alapját: 
- Az olvasó ismeri az alapdokumentumokat, amelyek meghatározzák a rendszert.
- Az Impact 2.0 projektcsapat felelős a tesztadatok előállításáért. 
## 10.4 Szükséges erőforrások
Ez a fejezet a teszteléshez szükséges erőforrásokat fejti ki.
### 10.4.1  Feladatkörök és felelősségek (tesztcsapat meghatározása)
Tesztelő, Teszt-koordinátor: 	 A teszt végrehajtása, észrevételek dokumentálása, teszt dokumentáció archiválása.Teszt terv készítése. A tesztterv jóváhagyatása a projektmenedzserrel. Teszt forgatókönyvek létrehozása Inkonzisztenciák kezelése. Helyes és időbeni hibakezelés. Szükség esetén problémák eszkalálása a projekt menedzsernek. Végső riport készítése. Teszt dokumentum archiválása. Az észrevételek státuszának követése, ill. dokumentálása.
Projektvezető:  Teszt terv jóváhagyása Teszt forgatókönyv (testscript) 
## 10.5 Tesztelési terv
Ez a fejezet leírja a teszt típusát, a metodológiáját és a riport készítés módszerét.
Emellett meghatározza a teszt elvárásokat, a teszt-esetek elvárt eredményeit, sikerességének kritériumait, a kockázatok kezelését és a hatáskörön kívül eseteket.
### 10.5.1 Prototípus (modul) teszt
A prototípustesztelés (vagy másik nevén modultesztelés) célja a rendszer már működő moduljainak önálló tesztelése, a modulon belüli hibák azonosításának és kiküszöbölésének érdekében. Módszere: A szegmensek validálása egyénileg történik. A tesztelés visszont a szegmensek föggőségeire is ki terjed. 

#  11. Telepítési terv
A projektünkben főleg PHP, HTML és CSS kódok lesznek. Az első lépés: egy adatbázis készítése a megfelelő táblákkal, ezután már tudunk dolgozni az egyes oldalakkal. Ezeknek a weblapoknak először a backend, vagyis a PHP kódját írjuk meg, amit az adatbázis el tud tárolni. Ezután a frontend része következik, vagyis hozzáadjuk a Bootstrapet, megírjuk a HTML, illetve a CSS kódokat. Az alap projektet a Laravel keretrendszer segítségével hozzuk létre.  
#  12. Karbantartási terv
A weblap közepes mennyiségű karbantartást igényel, amely a következőkre bontható:
- Ellenőrizni, hogy a jövőben kiadott böngésző verziókban hogyan fut a weblap, ha probléma lép fel, javítani
- Meggyőződés arról, hogy a kiszolgáló szerver éppen fut, ha nem, akkor újraindítani
- Időnként ellenőrizni a felvitt adatok helyességét, megfelelő formátumát.
