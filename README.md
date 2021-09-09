
# <img src="./modularbeit/www/public/images/Logo.png" height=150 alt="Mediengutschein" />

# Mediengutschein
Herzlich Wilkommen im Repository der Modularbeit M3 M4 von Bruno Thurnherr und Klaus Buderer. 

Wir wünschen Ihnen viel Vergnügen beim Durchstöbern unseres Projekts. Um Ihnen Zeit einzusparen haben wir die wichtigsten Projektabschnitte bezüglich den Vorgaben weiter unten verlinkt. 

## Wie starten Sie die Applikation

Die einfachste Variante ist auf diesen Link zu klicken: [www.modularbeit.ch](https://www.modularbeit.ch)

Wenn Sie es dennoch gerne lokal starten möchten, dann befolgen Sie folgende Schritte:

1. Klonen Sie dieses Repository auf Ihren Rechner
2. Starten Sie Ihr Docker Engine
3. Führen Sie das Batchfile start_mediengtuschein.bat aus

Viel Spass!


## SWD
### Vorgabe Entwurfsmuster
- Factory Pattern Aufrufer [link](./modularbeit/www/model/lerneinheiten/LerninhaltModel.php)
- Factory Pattern Concrete Creator Mathematik [link](./modularbeit/www/model/lerneinheiten/ConcreteCreatorMathe.php)
- Factory Pattern Concrete Creator Realien [link](./modularbeit/www/model/lerneinheiten/ConcreteCreatorRealien.php)
- Factory Pattern Creator (abstract class) [link](./modularbeit/www/model/lerneinheiten/Creator.php)
- Factory Pattern Interface Produbeble [link](./modularbeit/www/model/lerneinheiten/Produceble.php)
- Factory Pattern Concrete Product [link](./modularbeit/www/model/lerneinheiten/EinXEins.php)

### Vorgabe Automatismen
- Vulnerabilitäten Check [link](./.github/workflows/vulnacheck.yml)
## SWT
### Vorgabe Unittests

- Ein X Eins Test  [link](./tests/EinXEinsTest.php)
- Plus Minus Test  [link](./tests/PlusMinusTest.php)
- Factory Pattern Test  [link](./tests/FactoryTest.php)
- SetLernfortschritt Test  [link](./tests/SetLernfortschrittTest.php)
- GetLernfortschritt Test  [link](./tests/GetLernfortschrittTest.php)

### Vorgabe Integrationtests
- URL Check  [link](./.github/workflows/urlcheck.yml)

### Vorgabe Automatismen
- Github Actions Auswertung [link](https://github.com/KlausBuderer/Modularbeit-M3_M4/actions)
- Github Actions Workflows [link](./.github/workflows/)

### Vorgabe Sicherheit
- Eingabevalidierung [link](./modularbeit/www/features/eltern/kind_hinzufuegen/kind_hinzufuegen_controller.php)
- php.ini Einstellung [link](./modularbeit/php/php.ini)
- Vulnerabilitätscheck [link](./.github/workflows/vulnacheck.yml)

## WEG

### Vorgabe Javascript / Jquery
- JQuery Aufgaben [link](./modularbeit/www/public/js/aufgaben.js)
- Javascript Farbschemawahl [link](./modularbeit/www/public/js/color.js)
- Javascript Avatarwahl [link](./modularbeit/www/public/js/avatar.js)
- Javascript PDF Drucken [link](./modularbeit/www/public/js/mg_verwaltung.js)

### Vorgabe Validierung von Usereingaben
- Kind anlegen [link](./modularbeit/www/features/eltern/kind_hinzufuegen/kind_hinzufuegen_controller.php)

### Vorgabe CSS-Framework
- Customized CSS Klassen [link](./modularbeit/www/public/css/customized.css)

### Vorgabe Dateienstruktur
- Kind anlegen [link](./modularbeit/www/public)



