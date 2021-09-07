
# <img src="./modularbeit/www/public/images/Logo.png" height=150 alt="Mediengutschein" />

# Mediengutschein

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
- Github Actions [link](https://github.com/KlausBuderer/Modularbeit-M3_M4/actions)
- Github Actions [link](./.github/workflows/)

## WEG



### Deployment

- `bundle exec rake publish` builds and pushes to the `gh-pages` branch

