<h1 class="XL">PHP 2023-2024</h1>
# COMMENTS
Binnen PHP zijn er verschillende vormen van commentaar die je kunt gebruiken om aantekeningen toe te voegen aan je code. Dit commentaar wordt genegeerd door de interpreter en heeft geen invloed op de uitvoering van het programma. Het gebruik van commentaar is handig om de code te documenteren, uitleg te geven over complexe delen van de code en om tijdelijk stukken code uit te schakelen.

Hier zijn de twee meest gebruikte vormen van commentaar in PHP:

Single line comment:
Dit commentaar type wordt gebruikt om commentaar op één regel toe te voegen. Alles wat na de dubbele slash "//" komt, wordt genegeerd door de interpreter.

Voorbeeld:

```php
// Dit is een voorbeeld van single line comment
$naam = "Stephan Hoeksema"; // Dit is commentaar bij een code-instructie
```
Commentaar over meerdere regels:
Dit commentaartype stelt je in staat om meerdere regels van commentaar toe te voegen. Het begint met "/*" en eindigt met "*/". Alles wat zich tussen deze tekens bevindt, wordt genegeerd.

Voorbeeld:
```php
/**
* Dit is een voorbeeld van multiple line comments.
* Je kunt hier meerdere regels tekst toevoegen.
* Deze tekst wordt genegeerd door de brouwser waar de gebruiker 
* op kijkt.
*/
```
Het is belangrijk om op te merken dat commentaar bedoeld is voor andere ontwikkelaars (inclusief jezelf) om de code beter te begrijpen. Het is een goede gewoonte om je code te voorzien van commentaarregels om de leesbaarheid en onderhoudbaarheid te verbeteren.

# Variabele

Variabelen zijn essentiële componenten in programmeertalen zoals PHP. Ze stellen ons in staat om gegevens op te slaan en te manipuleren tijdens de uitvoering van een applicatie. Een variabele is in feite een naam die we toewijzen aan een specifieke geheugenlocatie(doos) waarin we gegevens kunnen opslaan.

In PHP worden variabelen gekenmerkt door een dollarteken ($) gevolgd door de naam van de variabele. De naam kan bestaan uit letters, cijfers en underscores, maar moet beginnen met een letter of een underscore.

Variabelen in PHP kunnen verschillende soorten gegevens bevatten, zoals getallen(integer, float, decimal), tekst (strings), booleans, arrays, objecten, enzovoort. Het type van een variabele wordt bepaald door de waarde die eraan wordt toegewezen.

Om een variabele te maken en een waarde toe te wijzen, gebruiken we de toewijzingsoperator (=). Hier is een voorbeeld:

```php
$naam = "Stephan"; 
// Een variabele met de naam "naam" wordt gemaakt en de waarde "Stephan" wordt eraan toegewezen.

$leeftijd = 47; // Een variabele met de naam "leeftijd" wordt gemaakt en de waarde 47 wordt eraan toegewezen.
$pi = 3.14; // Een variabele met de naam "pi" wordt gemaakt en de waarde 3.14 wordt eraan toegewezen.
$isActief = true; // Een variabele met de naam "isActief" wordt gemaakt en de waarde true (waar) wordt eraan toegewezen.
```
Variabelen kunnen worden gebruikt in expressies en bewerkingen. We kunnen ze combineren met andere waarden, rekenkundige bewerkingen uitvoeren en ze afdrukken of gebruiken in controlestructuren zoals if-statements en loops. Hier zijn enkele voorbeelden:

```php

$saldo = 100;
$bonus = 50;

$totaal = $saldo + $bonus; // Optellen van de waarden van de variabelen $saldo en $bonus.

echo "Het totale bedrag is: " . $totaal; // Afdrukken van de waarde van de variabele $totaal.

if ($saldo > 0) {
    echo "Je hebt nog geld op je rekening.";
} else {
    echo "Je hebt geen geld meer op je rekening.";
}
```
_[Hier wordt if\(\) uitgelegd](#conditionals-if)_

Variabelen in PHP zijn dynamisch getypeerd, wat betekent dat het type van een variabele automatisch wordt bepaald op basis van de toegewezen waarde. Dit biedt flexibiliteit, maar vereist ook zorgvuldigheid bij het werken met variabelen om ervoor te zorgen dat ze het verwachte type hebben op het moment van gebruik.

Het gebruik van variabelen stelt programmeurs in staat om gegevens op te slaan, te manipuleren en dynamisch te verwerken tijdens de uitvoering van een PHP-programma, waardoor de functionaliteit en flexibiliteit van de code worden vergroot.

In PHP zijn string, float, int, boolean en array veelgebruikte datatypes. Hieronder vind je een korte beschrijving van elk datatype en voorbeelden van het gebruik ervan.

### localhost opzetten
Wanneer je voor het eerst een localhost wilt opzetten, kun je de volgende stappen volgen:

1. Open een opdrachtregelinterface op je computer, zoals de terminal (Linux en macOS) of de opdrachtprompt (Windows).

2. Navigeer naar de map waarin je projectbestanden zich bevinden met behulp van de opdracht 'cd'. Bijvoorbeeld: 'cd MijnProject'.

3. Voer de volgende opdracht in: 

    `php -S localhost:8000`Druk op Enter om de opdracht uit te voeren.
   De opdracht 'php -S localhost:8000' start een ingebouwde webserver op je lokale machine die luistert op poort 8000. Dit betekent dat je webapplicatie beschikbaar zal zijn op 'http://localhost:8000' in je webbrowser.

Merk op dat deze aanpak alleen werkt als je PHP correct is geïnstalleerd op je computer. Het zorgt ervoor dat je je project kunt bekijken en testen in een lokale omgeving zonder dat je een externe webserver hoeft in te stellen.

Het is belangrijk op te merken dat deze eenvoudige webserver niet bedoeld is voor productieomgevingen. Het is voornamelijk bedoeld voor ontwikkelingsdoeleinden, waar je je project lokaal wilt testen voordat je het op een live server implementeert.

Onthoud dat wanneer je de webserver op deze manier start, deze actief blijft zolang de opdrachtregelinterface open is. Je kunt de webserver stoppen door de opdrachtregelinterface te sluiten of door te drukken op de toetscombinatie 'Ctrl + C'."

Ik hoop dat dit helpt bij het begrijpen van het opzetten van een localhost met behulp van de 'php -S localhost:8000'-opdracht!

## String
Een string is een reeks van tekens en wordt gedefinieerd met behulp van aanhalingstekens (enkele of dubbele). Voorbeeld:
```php
$name = "Stephan Hoeksema";
```

In PHP is er een verschil tussen enkele quotes ('') en dubbele quotes ("") bij het definiëren van een string. Hier zijn de belangrijkste verschillen:

Interpolatie van variabelen:
Met dubbele quotes kun je variabelen rechtstreeks in de string interpoleren, wat betekent dat de waarde van de variabele wordt ingevoegd in de string. Bij enkele quotes gebeurt er geen variabele interpolatie, en worden de variabelen letterlijk als tekst weergegeven.

```php
$name = "Stephan";
echo "Hello, $name!";   // Output: Hello, Stephan!
echo 'Hello, $name!';   // Output: Hello, $name!
```
In dit voorbeeld wordt de waarde van de variabele $name alleen correct geïnterpoleerd in de dubbele quotes.

Escaping van speciale tekens:
Met dubbele quotes kun je speciale tekens in een string escapen met behulp van backslashes (\), zoals \n voor een nieuwe regel of " voor een aanhalingsteken. Bij enkele quotes worden backslashes niet geïnterpreteerd als escape-tekens, behalve voor ' en \.
```php
echo "This is a \"quote\".";   // Output: This is a "quote".
echo 'This is a \'quote\'.';   // Output: This is a 'quote'.
```
In dit voorbeeld worden de aanhalingstekens correct weergegeven door ze te escapen met backslashes in de dubbele quotes.

Prestatieverschil:
Het gebruik van enkele quotes kan in bepaalde gevallen iets sneller zijn dan dubbele quotes, omdat PHP minder werk hoeft te doen bij het interpreteren van de string. Dit prestatieverschil is echter meestal verwaarloosbaar en heeft geen grote impact in de meeste situaties.
Over het algemeen wordt aanbevolen om dubbele quotes te gebruiken wanneer je variabelen wilt interpoleren of speciale tekens wilt escapen. Enkele quotes kunnen handig zijn wanneer je een string wilt definiëren zonder variabele interpolatie of speciale tekens te escapen.

## Float
Een float (drijvende komma) is een decimaal getal met een komma erin. Voorbeeld:
```php
$price = 3.99;
```

Een float is een datatype dat wordt gebruikt om decimale getallen met een zwevende komma weer te geven. Het wordt gebruikt wanneer nauwkeurigheid tot op een bepaald aantal decimalen vereist is, maar niet noodzakelijk een exacte precisie.
```php
$price = 3.99;
$pi = 3.14159;
```
In dit voorbeeld hebben we twee variabelen gedefinieerd: $price met de waarde 3.99 en $pi met de waarde 3.14159. Beide variabelen zijn van het float-datatype omdat ze decimale getallen bevatten.

Het float-datatype kan worden gebruikt voor berekeningen met decimale getallen, zoals optellen, aftrekken, vermenigvuldigen en delen. Het is echter belangrijk om te weten dat float-getallen niet altijd exact zijn vanwege de beperkingen van de interne representatie van zwevende komma's in computers.

Als je behoefte hebt aan een hogere precisie en een exacte representatie van decimale getallen, kun je gebruik maken van externe bibliotheken zoals "BCMath" of "GMP" in PHP. 

## Integer:
Een integer (geheel getal) is een getal zonder decimalen. Voorbeeld:
```php
$quantity = 10;
```
Een integer (geheel getal) is een datatype dat wordt gebruikt om gehele getallen weer te geven zonder decimalen. Het kan zowel positieve als negatieve waarden bevatten.
```php
$quantity = 10;
$temperature = -5;
```
In dit voorbeeld hebben we twee variabelen gedefinieerd: $quantity met de waarde 10 en $temperature met de waarde -5. Beide variabelen zijn van het integer-datatype omdat ze gehele getallen bevatten.

Het integer-datatype wordt vaak gebruikt voor wiskundige bewerkingen, zoals optellen, aftrekken, vermenigvuldigen en delen. Integer-getallen kunnen ook worden gebruikt om te tellen, te indexeren of om voorwaardelijke logica uit te voeren in PHP-programma's.

Het integer-datatype heeft een beperkte grootte, afhankelijk van de architectuur van de machine waarop PHP wordt uitgevoerd. In de meeste gevallen wordt het formaat van een integer bepaald door de grootte van een "signed long" in de C-taal. Het maximale en minimale bereik van integers kan worden gecontroleerd met behulp van de constanten PHP_INT_MAX en PHP_INT_MIN in PHP.

Het integer-datatype kan ook worden gebruikt in combinatie met andere datatypes, zoals het uitvoeren van berekeningen met integers en floats, of het omzetten van een string naar een integer met behulp van typecasting-functies zoals intval().

```php
$total = $quantity * 2; // Vermenigvuldigen met een integer
$average = ($total + $quantity) / 2; // Berekeningen met integers en floats
$stringNumber = "123";
$convertedNumber = intval($stringNumber); // Converteer een string naar een integer
```
Dit zijn enkele voorbeelden en uitleg van het integer-datatype in PHP. Integer-getallen worden veel gebruikt in programmeerlogica en berekeningen waar precisie tot op het gehele getal vereist is.

## Boolean:
Een boolean is een datatype dat slechts twee waarden kan aannemen: true of false. Het wordt vaak gebruikt voor logische bewerkingen en voorwaardelijke logica. Voorbeeld:
```php
$is_available = true;
```
Het wordt vaak gebruikt voor logische bewerkingen, voorwaardelijke logica en het vertegenwoordigen van de waarheidswaarde van een bepaalde bewering.
```php
$isAvailable = true;
$isEnabled = false;
```
In dit voorbeeld hebben we twee variabelen gedefinieerd: $isAvailable met de waarde true en $isEnabled met de waarde false. Beide variabelen zijn van het boolean-datatype omdat ze slechts twee mogelijke waarden kunnen hebben.

Boolean-waarden worden vaak gebruikt in voorwaardelijke logica, zoals if-statements, while-loops en switch-statements, om te bepalen welke code moet worden uitgevoerd op basis van een bepaalde voorwaarde.

```php
if ($isAvailable) {
    echo "Het product is beschikbaar.";
} else {
    echo "Het product is niet beschikbaar.";
}

// Output: Het product is beschikbaar.
```
_[Hier wordt if\(\) uitgelegd](#conditionals-if)_
In dit voorbeeld wordt de waarde van $isAvailable geëvalueerd in een if-statement. Als de waarde true is, wordt de boodschap "Het product is beschikbaar." afgedrukt. Anders wordt de boodschap "Het product is niet beschikbaar." afgedrukt.

Boolean-waarden kunnen ook worden gebruikt in logische operaties, zoals && (en), || (of) en ! (niet), om complexe voorwaarden te evalueren.

```php
$hasPermission = true;
$isLogged = true;

if ($hasPermission && $isLogged) {
    echo "Toegang verleend.";
} else {
    echo "Toegang geweigerd.";
}

// Output: Toegang verleend.
```
_[Hier wordt if\(\) uitgelegd](#conditionals-if)_
In dit voorbeeld wordt gecontroleerd of zowel $hasPermission als $isLogged waar zijn. Als beide waarden true zijn, wordt de boodschap "Toegang verleend." afgedrukt. Anders wordt de boodschap "Toegang geweigerd." afgedrukt.

Dit zijn enkele voorbeelden en uitleg van het boolean-datatype in PHP. Boolean-waarden worden vaak gebruikt om logische bewerkingen uit te voeren en beslissingen te nemen in programmeerlogica.

## Array
Een array is een datatype dat een geordende lijst van waarden kan bevatten. Het kan worden gebruikt om meerdere waarden op te slaan en te bewerken in één variabele. Voorbeeld:
```php
$fruits = array("Apple", "Banana", "Orange");
```
In dit voorbeeld hebben we een array genaamd $fruits gemaakt met drie elementen: "Apple", "Banana" en "Orange". De elementen worden gescheiden door komma's en staan tussen rechte haken.

Je kunt de waarden in een array benaderen door gebruik te maken van indexen. In PHP beginnen de indexen bij 0 voor het eerste element, 1 voor het tweede element enzovoort.

```php
echo $fruits[0]; // Output: Apple
echo $fruits[1]; // Output: Banana
echo $fruits[2]; // Output: Orange
```
In dit voorbeeld geven we de waarden van de array weer door de respectieve indexen te gebruiken.

Arrays in PHP kunnen ook associatieve arrays zijn, waarbij de indexen geen opeenvolgende getallen zijn, maar sleutels die zijn toegewezen aan de waarden. Bijvoorbeeld:

```php
$person = array(
    "name" => "Stephan Hoeksema",
    "age" => 47,
    "city" => "Lelystad"
);
```
In dit voorbeeld hebben we een associatieve array gemaakt met de sleutels "name", "age" en "city" die zijn gekoppeld aan de respectieve waarden.

Je kunt de waarden in een associatieve array benaderen door gebruik te maken van de sleutels:

```php
echo $person["name"]; // Output: Stephan Hoeksema
echo $person["age"]; // Output: 47
echo $person["city"]; // Output: Lelystad
```
Arrays in PHP kunnen dynamisch van grootte zijn, wat betekent dat je elementen kunt toevoegen of verwijderen nadat de array is gemaakt.

```php
$fruits[] = "Grapes"; // Element toevoegen aan de array
unset($fruits[1]); // Element verwijderen uit de array

print_r($fruits);
```
De functie print_r() wordt gebruikt om de inhoud van een array weer te geven. In dit voorbeeld wordt het resultaat van print_r($fruits) afgedrukt, wat de huidige inhoud van de array weergeeft.

Arrays in PHP zijn zeer veelzijdig en worden veel gebruikt om gegevens op te slaan, te organiseren en te verwerken. Ze bieden flexibiliteit bij het werken met collecties van waarden en stellen je in staat om complexe gegevensstructuren te creëren.

### Multidimensionale array:
Een multidimensionale array is een array waarvan de elementen op hun beurt ook arrays zijn. Met andere woorden, het is een array van arrays. Hierdoor kun je complexe gegevensstructuren maken met meerdere niveaus.

```php
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
```
In dit voorbeeld hebben we een multidimensionale array genaamd $matrix gemaakt. Het bevat drie arrays, elk met drie elementen. Hiermee simuleren we een 3x3 matrix.

Je kunt de waarden in een multidimensionale array benaderen door meerdere indexen te gebruiken. Het eerste indexnummer verwijst naar de buitenste array, terwijl het tweede indexnummer verwijst naar de binnenste array.

```php
echo $matrix[0][1]; // Output: 2
echo $matrix[2][2]; // Output: 9
```
In dit voorbeeld geven we de waarden in de multidimensionale array weer door de respectieve indexen te gebruiken. $matrix[0][1] geeft het element met index 1 in de eerste binnenste array weer, wat resulteert in de waarde 2.

Je kunt ook loopstructuren, zoals for-loops of foreach-loops, gebruiken om door een multidimensionale array te itereren en toegang te krijgen tot de elementen.

```php
for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo $matrix[$i][$j] . " ";
    }
    echo "<br>";
}
```
_[Hier wordt for\(\) uitgelegd](#for)_
In dit voorbeeld gebruiken we twee for-loops om door de multidimensionale array $matrix te itereren en elk element af te drukken. De buitenste loop doorloopt de buitenste array en de binnenste loop doorloopt elke binnenste array. Dit resulteert in de uitvoer van de volledige matrix:

```
1 2 3
4 5 6
7 8 9
```
Met multidimensionale arrays kun je complexere gegevensstructuren modelleren, zoals een matrix, een tabel of een verzameling van objecten met meerdere eigenschappen. Ze zijn handig wanneer je gegevens op een gestructureerde manier wilt organiseren en manipuleren.

### Multidimensionale array met genoemde sleutels:
Een multidimensionale array met genoemde sleutels is een array waarbij de elementen worden geïndexeerd door middel van een specifieke sleutel in plaats van numerieke indexen. Hierdoor kun je gemakkelijk waarden opzoeken en benaderen op basis van de sleutel.
```php
$students = array(
    "John" => array(
        "age" => 20,
        "grade" => "A"
    ),
    "Emily" => array(
        "age" => 22,
        "grade" => "B"
    ),
    "Michael" => array(
        "age" => 21,
        "grade" => "A+"
    )
);
```
In dit voorbeeld hebben we een multidimensionale array genaamd $students gemaakt. Elke student heeft een naam als sleutel en een bijbehorende array met leeftijd en cijfer.

Je kunt de waarden in een multidimensionale array met genoemde sleutels benaderen door de sleutels te gebruiken.

```php
echo $students["John"]["age"]; // Output: 20
echo $students["Michael"]["grade"]; // Output: A+
```
In dit voorbeeld geven we de waarden in de multidimensionale array weer door de respectieve sleutels te gebruiken. $students["John"]["age"] geeft de leeftijd van John weer, terwijl $students["Michael"]["grade"] het cijfer van Michael weergeeft.

Je kunt ook loopstructuren, zoals foreach, gebruiken om door een multidimensionale array met genoemde sleutels te itereren.

```php
foreach ($students as $name => $info) {
    echo "Naam: " . $name . "<br>";
    echo "Leeftijd: " . $info["age"] . "<br>";
    echo "Cijfer: " . $info["grade"] . "<br>";
    echo "<br>";
}
```
_[Hier wordt foreach\(\) uitgelegd](#foreach)_
In dit voorbeeld gebruiken we een foreach-loop om door de multidimensionale array $students te itereren. De variabele $name bevat de naam van de student, en de variabele $info bevat de bijbehorende array met leeftijd en cijfer. Hiermee kunnen we de informatie van elke student afdrukken.

Dit zijn enkele voorbeelden en uitleg van een multidimensionale array met genoemde sleutels in PHP. Dit type array is handig wanneer je gegevens wilt opslaan en benaderen op basis van specifieke sleutels, zoals het opslaan van studentinformatie met de naam als sleutel.

## Boolean:
Een boolean is een datatype dat slechts twee mogelijke waarden kan aannemen: true (waar) of false (onwaar). Het wordt vaak gebruikt voor logische bewerkingen, voorwaardelijke logica en het vertegenwoordigen van de waarheidswaarde van een bepaalde bewering.
```php
$isAvailable = true;
$isEnabled = false;
```
In dit voorbeeld hebben we twee variabelen gemaakt: $isAvailable met de waarde true en $isEnabled met de waarde false. Beide variabelen zijn van het boolean-datatype omdat ze slechts twee mogelijke waarden kunnen hebben.

Boolean-waarden worden vaak gebruikt in voorwaardelijke logica, zoals if-statements, while-loops en switch-statements, om te bepalen welke code moet worden uitgevoerd op basis van een bepaalde voorwaarde.

```php
if ($isAvailable) {
    echo "Het product is beschikbaar.";
} else {
    echo "Het product is niet beschikbaar.";
}

// Output: Het product is beschikbaar.
```
_[Hier wordt if\(\) uitgelegd](#conditionals-if)_

In dit voorbeeld wordt de waarde van $isAvailable geëvalueerd in een if-statement. Als de waarde true is, wordt de boodschap "Het product is beschikbaar." afgedrukt. Anders wordt de boodschap "Het product is niet beschikbaar." afgedrukt.

Boolean-waarden kunnen ook worden gebruikt in logische operaties, zoals && (en), || (of) en ! (niet), om complexe voorwaarden te evalueren.

```php
$hasPermission = true;
$isLogged = true;

if ($hasPermission && $isLogged) {
    echo "Toegang verleend.";
} else {
    echo "Toegang geweigerd.";
}

// Output: Toegang verleend.
```
_[Hier wordt if\(\) uitgelegd](#conditionals-if)_
In dit voorbeeld wordt gecontroleerd of zowel $hasPermission als $isLogged waar zijn. Als beide waarden true zijn, wordt de boodschap "Toegang verleend." afgedrukt. Anders wordt de boodschap "Toegang geweigerd." afgedrukt.

Boolean-waarden zijn nuttig voor het maken van beslissingen in programmeerlogica en het controleren van voorwaarden. Ze stellen je in staat om te bepalen welke code moet worden uitgevoerd op basis van de waarheidswaarde van een bepaalde bewering.

## Datum (Date)
Het Date-datatype in PHP wordt gebruikt om datums te vertegenwoordigen, zoals jaar, maand en dag. Het stelt je in staat om datums te manipuleren, vergelijken, formatteren en meer.
Om de huidige datum te verkrijgen, kun je de functie date() gebruiken met een datumnotatie als parameter:

```php
$currentDate = date("Y-m-d");
echo $currentDate;
```
Dit voorbeeld geeft de huidige datum weer in het formaat "YYYY-MM-DD", bijvoorbeeld "2023-04-13".

Enkele veelgebruikte opties bij het werken met datums in PHP zijn:

Datumnotatie: Je kunt verschillende lettercodes gebruiken in de date()-functie om de gewenste weergave van de datum te krijgen. Bijvoorbeeld:

"Y": Viercijferig jaartal (bijv. 2023)
"m": Tweecijferige maand (bijv. 04)
"d": Tweecijferige dag (bijv. 13)
"D": Afkorting van de dag van de week (bijv. Thu)
"F": Volledige naam van de maand (bijv. April)
Datum berekeningen: Met behulp van functies zoals strtotime() en date_modify() kun je datums manipuleren en berekeningen uitvoeren, zoals het toevoegen of aftrekken van dagen, maanden of jaren aan een datum.

Datum vergelijkingen: Met behulp van operatoren zoals ==, !=, <, >, <= en >= kun je datums vergelijken en controleren op gelijkheid, ongelijkheid of volgorde.

Datumformattering: Je kunt de functie date() gebruiken in combinatie met de strftime()-functie om datums te formatteren op basis van lokale conventies en talen. Bijvoorbeeld:

```php
setlocale(LC_TIME, 'nl_NL');
$formattedDate = strftime("%A %e %B %Y");
echo $formattedDate;
```
Dit geeft de huidige datum weer in het formaat "donderdag 13 april 2023" in het Nederlands.

Het Date-datatype in PHP biedt veel flexibiliteit en functionaliteit bij het werken met datums. Het stelt je in staat om datums op verschillende manieren te representeren, te manipuleren en te formatteren, afhankelijk van je specifieke behoeften.

## Operators
Hier zijn voorbeelden en uitleg van verschillende operators in de laatste versie van PHP:

### Arithmetic Operators (Rekenkundige operatoren):
Arithmetic operators worden gebruikt voor het uitvoeren van basisrekenkundige bewerkingen op getallen.
```php
$a = 10;
$b = 5;

// Optellen
$result = $a + $b; // 15

// Aftrekken
$result = $a - $b; // 5

// Vermenigvuldigen
$result = $a * $b; // 50

// Delen
$result = $a / $b; // 2

// Modulus (rest na deling)
$result = $a % $b; // 0

// Machtsverheffing
$result = $a ** $b; // 100000
```
### Assignment Operators (Toekenningsoperatoren):
Assignment operators worden gebruikt om waarden toe te wijzen aan variabelen.
```php
$a = 10;

// Toevoeging
$a += 5; // $a wordt 15

// Aftrekking
$a -= 3; // $a wordt 12

// Vermenigvuldiging
$a *= 2; // $a wordt 24

// Deling
$a /= 4; // $a wordt 6

// Modulus
$a %= 2; // $a wordt 0
```
### Comparison Operators (Vergelijkingsoperatoren):
Comparison operators worden gebruikt om waarden te vergelijken en de waarheidswaarde van een bewering te bepalen.
```php
$a = 10;
$b = 5;

// Gelijkt aan
$result = ($a == $b); // false

// Niet gelijk aan
$result = ($a != $b); // true

// Groter dan
$result = ($a > $b); // true

// Kleiner dan
$result = ($a < $b); // false

// Groter dan of gelijk aan
$result = ($a >= $b); // true

// Kleiner dan of gelijk aan
$result = ($a <= $b); // false
```
### Increment/Decrement Operators (Increment-/decrement-operatoren):
Increment- en decrement-operatoren worden gebruikt om het verhogen of verlagen van de waarde van een variabele met 1.
```php
$a = 10;

// Increment
$a++; // $a wordt 11

// Decrement
$a--; // $a wordt 10
```
### Logical Operators (Logische operatoren):
Logische operatoren worden gebruikt om logische bewerkingen uit te voeren en de waarheidswaarde van een voorwaarde te bepalen.
```php
$a = true;
$b = false;

// AND
$result = ($a && $b); // false

// OR
$result = ($a || $b); // true

// NOT
$result = !$a; // false
```
### String Operators (String-operatoren):
String-operatoren worden gebruikt om strings te combineren (concatenatie) of om delen van strings samen te voegen.
```php
$a = "Hello";
$b = " World";

// Concatenatie
$result = $a . $b; // "Hello World"

// Toevoegen van een waarde aan een bestaande string
$a .= $b; // $a wordt "Hello World"
```
### Array Operators (Array-operatoren):
Array-operatoren worden gebruikt om arrays te combineren of te vergelijken.
```php
$a = array(1, 2, 3);
$b = array(4, 5, 6);

// Concatenatie
$result = $a + $b; // [1, 2, 3, 4, 5, 6]
// Vergelijking
$result = ($a == $b); // false 
```
### Conditional Assignment Operators (Voorwaardelijke toekenningsoperatoren):
Conditional assignment operators worden gebruikt om een waarde toe te kennen aan een variabele op basis van een voorwaarde.

```php
$a = 10;
$b = ($a > 5) ? "Ja" : "Nee";
echo $b; // "Ja"
```
In dit voorbeeld wordt de waarde van $b toegewezen op basis van de voorwaarde $a > 5. Als de voorwaarde waar is, krijgt $b de waarde "Ja", anders krijgt het de waarde "Nee".

Dit zijn enkele voorbeelden en uitleg van verschillende operators in de laatste versie van PHP. Deze operators stellen je in staat om verschillende bewerkingen uit te voeren, variabelen toe te wijzen, waarden te vergelijken en logische bewerkingen uit te voeren in je PHP-code.

## Conditionals \(if\)
Natuurlijk! Het conditional statement if() wordt gebruikt in PHP (en veel andere programmeertalen) om code selectief uit te voeren op basis van een bepaalde voorwaarde. Hier is een uitleg en voorbeelden van het gebruik van if():

Uitleg:
De if()-verklaring controleert een bepaalde voorwaarde en voert de code alleen uit als de voorwaarde waar is (evalueert naar true). Als de voorwaarde niet waar is (evalueert naar false), wordt de code binnen de if()-verklaring overgeslagen.

Syntax:
De algemene syntaxis van if() is als volgt:

```php
if (voorwaarde) {
    // Code om uit te voeren als de voorwaarde waar is
}
```
Voorbeelden:

### Eenvoudige if-voorwaarde:
```php
$age = 25;

if ($age >= 18) {
    echo "Je bent volwassen.";
}
```
In dit voorbeeld wordt de leeftijd gecontroleerd met behulp van de voorwaarde $age >= 18. Als de leeftijd gelijk is aan of groter is dan 18, wordt de boodschap "Je bent volwassen." afgedrukt.

### if-else statement:
```php
$score = 85;

if ($score >= 70) {
    echo "Geslaagd!";
} else {
    echo "Gezakt!";
}
```
In dit voorbeeld wordt de score gecontroleerd. Als de score groter is dan of gelijk is aan 70, wordt de boodschap "Geslaagd!" afgedrukt. Anders, als de score lager is dan 70, wordt de boodschap "Gezakt!" afgedrukt.

### if-elseif-else statement:
```php
$grade = "B";

if ($grade == "A") {
    echo "Uitstekend!";
} elseif ($grade == "B") {
    echo "Goed gedaan!";
} elseif ($grade == "C") {
    echo "Redelijk.";
} else {
    echo "Ongeldige graad.";
}
```
In dit voorbeeld wordt de graad gecontroleerd. Afhankelijk van de waarde van $grade wordt een bijbehorende boodschap afgedrukt. Als de graad "A" is, wordt "Uitstekend!" afgedrukt. Als de graad "B" is, wordt "Goed gedaan!" afgedrukt. Als de graad "C" is, wordt "Redelijk." afgedrukt. Als geen van de bovenstaande voorwaarden waar is, wordt "Ongeldige graad." afgedrukt.

#### Geneste if-statements:
```php
$score = 80;
$age = 20;

if ($score >= 70) {
    if ($age >= 18) {
        echo "Geslaagd en volwassen.";
    } else {
        echo "Geslaagd maar minderjarig.";
    }
} else {
    echo "Niet geslaagd.";
}
```
In dit voorbeeld wordt zowel de score als de leeftijd gecontroleerd. Als de score groter is dan of gelijk is aan 70, wordt gecontroleerd of de leeftijd ook groter is dan of gelijk is aan 18. Afhankelijk van de combinatie van deze voorwaarden wordt een passende boodschap afgedrukt.

Het if()-statement is een krachtige manier om selectieve uitvoering van code mogelijk te maken op basis van bepaalde voorwaarden. Door het gebruik van if(), else, elseif en geneste statements kun je complexe logica implementeren in je PHP-programma's.

## Functions
In PHP is een functie een blok code dat een specifieke taak uitvoert wanneer het wordt aangeroepen. Het is een georganiseerde en herbruikbare stukje code dat een naam heeft en optionele parameters accepteert. Een functie kan een waarde retourneren als resultaat van zijn verwerking.

Functies in PHP hebben verschillende voordelen:

Modulariteit: Functies bevorderen modulaire programmering door code op te splitsen in kleinere, logisch georganiseerde blokken. Dit maakt de code gemakkelijker te begrijpen, te onderhouden en te hergebruiken.

Herbruikbaarheid: Eenmaal gedefinieerd, kunnen functies keer op keer worden opgeroepen vanuit verschillende delen van de code zonder dat je de code herhaaldelijk hoeft te schrijven.

Leesbaarheid: Functies maken code leesbaarder door complexe logica in afzonderlijke blokken te organiseren. Dit maakt het gemakkelijker voor anderen (inclusief jijzelf) om de code te begrijpen en te wijzigen.

Onderhoudsgemak: Door code in functies te structureren, kun je wijzigingen aanbrengen in specifieke delen van de code zonder de hele toepassing te beïnvloeden.

Een functie in PHP wordt gedefinieerd met het function-sleutelwoord, gevolgd door de functienaam, eventuele parameters tussen haakjes en de codeblok tussen accolades. Hier is een voorbeeld van een eenvoudige functie die twee getallen optelt en het resultaat retourneert:

```php
function addNumbers($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}
```
In dit voorbeeld is addNumbers de naam van de functie. Het accepteert twee parameters ($num1 en $num2) en voert de optelling uit. Het resultaat wordt geretourneerd met behulp van het return-statement.

Om deze functie te gebruiken, kun je deze ergens in je PHP-code aanroepen, bijvoorbeeld:

```php
$result = addNumbers(10, 5);
echo $result; // Output: 15
```
Door de functie addNumbers aan te roepen met de waarden 10 en 5, wordt het resultaat 15 geretourneerd en afgedrukt met behulp van echo.

Dit is een eenvoudig voorbeeld van een functie in PHP. Met functies kun je complexe logica bouwen en deze opnieuw gebruiken om je PHP-code georganiseerd, modulair en gemakkelijk te onderhouden te maken.

Hier zijn de beschrijvingen, uitleg en voorbeelden van tien veelgebruikte PHP-ingebouwde functies:

echo():
De echo()-functie wordt gebruikt om een of meer uitvoerwaarden weer te geven op het scherm.
Voorbeeld:

```php
$name = "John";
echo "Hallo, " . $name . "!"; // Hallo, John!
```
strlen():
De strlen()-functie geeft de lengte van een string terug (het aantal tekens).
Voorbeeld:

```php
$text = "Hello";
$length = strlen($text);
echo $length; // 5
```
count():
De count()-functie wordt gebruikt om het aantal elementen in een array te tellen.
Voorbeeld:

```php
$numbers = [1, 2, 3, 4, 5];
$count = count($numbers);
echo $count; // 5
```
array_push():
De array_push()-functie voegt een of meer elementen toe aan het einde van een array.
Voorbeeld:

```php
$fruits = ["apple", "banana"];
array_push($fruits, "orange", "grape");
print_r($fruits); // ["apple", "banana", "orange", "grape"]
```
str_replace():
De str_replace()-functie zoekt naar een specifieke substring in een string en vervangt deze door een andere substring.
Voorbeeld:

```php
$text = "Hello, World!";
$newText = str_replace("World", "PHP", $text);
echo $newText; // Hello, PHP!
date():
```
De date()-functie geeft de huidige datum en tijd weer volgens een opgegeven datumnotatie.
Voorbeeld:

```php
$currentDate = date("Y-m-d H:i:s");
echo $currentDate; // Bijvoorbeeld: 2023-04-13 09:30:00
```
substr():
De substr()-functie retourneert een deel van een string op basis van een opgegeven beginpositie en lengte.
Voorbeeld:

```php
$text = "Hello, World!";
$sub = substr($text, 7, 5);
echo $sub; // World
```
strtolower():
De strtolower()-functie converteert een string naar kleine letters.
Voorbeeld:

```php
$text = "HELLO";
$lowercase = strtolower($text);
echo $lowercase; // hello
```
is_numeric():
De is_numeric()-functie controleert of een waarde numeriek is.
Voorbeeld:

```php
Copy code
$value1 = 123;
$value2 = "456";
$result1 = is_numeric($value1); // true
$result2 = is_numeric($value2); // true
```
file_get_contents():
De file_get_contents()-functie leest de inhoud van een bestand en retourneert deze als een string.
Voorbeeld:

```php
$fileContent = file_get_contents("file.txt");
echo $fileContent;
```
Deze tien PHP-ingebouwde functies zijn veelgebruikte hulpmiddelen die verschillende taken uitvoeren, zoals het weergeven van uitvoer, het manip

# Loops 
In PHP zijn er verschillende soorten loopstructuren die worden gebruikt om een set instructies herhaaldelijk uit te voeren, totdat een bepaalde voorwaarde niet meer waar is. Hier zijn de meest gebruikte loopstructuren in PHP:

## for-loop:
Een for-loop wordt gebruikt wanneer je een bepaald aantal iteraties wilt uitvoeren. Het heeft een beginwaarde, een voorwaarde om te controleren en een increment/decrement-operatie.
Voorbeeld:

```php
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
```
De bovenstaande code zal de getallen 0 tot 4 afdrukken.

## while-loop:
Een while-loop wordt gebruikt wanneer je een set instructies wilt herhalen zolang een bepaalde voorwaarde waar is. Het controleert de voorwaarde voordat het de lus uitvoert.
Voorbeeld:

```php
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}
```
De bovenstaande code zal de getallen 0 tot 4 afdrukken.

## do-while-loop:
Een do-while-loop wordt ook gebruikt om een set instructies te herhalen, maar het controleert de voorwaarde nadat het de lus minstens één keer heeft uitgevoerd. Dit betekent dat de instructies altijd minimaal één keer worden uitgevoerd.
Voorbeeld:

```php
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 5);
```
De bovenstaande code zal de getallen 0 tot 4 afdrukken.

## foreach-loop:

De foreach-loop in PHP wordt gebruikt om te itereren over de elementen van een array of object. Het is speciaal ontworpen om gemakkelijk toegang te krijgen tot zowel de waarde als de sleutel van elk element in de array of het object.

De syntax van een foreach-loop ziet er als volgt uit:

```php
foreach ($array as $key => $value) {
    // Code om uit te voeren voor elk element
}
```
Hier is een uitleg van de verschillende delen:

$array: Dit is de array waarover je wilt itereren.
$key: Dit is een optionele variabele die de sleutel van het huidige element in de array vasthoudt.
$value: Dit is de variabele die de waarde van het huidige element in de array vasthoudt.
Met de foreach-loop kun je gemakkelijk toegang krijgen tot de sleutel-waardeparen van een array en deze verwerken. Hier zijn enkele voorbeelden om dit te verduidelijken:


Voorbeeld 1: Itereren over een numerieke array

```php
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $value) {
  echo $value . " ";
}
```
Output:

```
1 2 3 4 5
```
Voorbeeld 2: Itereren over een associatieve array met sleutel-waardeparen

```php
$person = [
    'name' => 'John',
    'age' => 30,
    'country' => 'USA'
];

foreach ($person as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
```
Output:
```php
name: John
age: 30
country: USA
```

Voorbeeld 3: Itereren over een multidimensionale array

```php
$students = [
    ['name' => 'John', 'age' => 20],
    ['name' => 'Sarah', 'age' => 22],
    ['name' => 'Michael', 'age' => 19]
];
foreach ($students as $student) {
    echo $student['name'] . " is " . $student['age'] . " years old.<br>";
}
```
Output:

```csharp
John is 20 years old.
Sarah is 22 years old.
Michael is 19 years old.
```
Met de foreach-loop kun je op een eenvoudige manier door de elementen van een array itereren, of het nu gaat om een numerieke array, een associatieve array of een multidimensionale array. Je kunt zowel de sleutels als de waarden gebruiken om specifieke bewerkingen uit te voeren op basis van je behoeften.

Deze loopstructuren bieden flexibiliteit en controle bij het herhalen van instructies in PHP. Afhankelijk van het scenario en de vereisten kun je de meest geschikte loopstructuur kiezen om je code effectief te laten werken.


### SUPERGLOBALS $\_SERVER, $\_GET, $\_POST
In PHP zijn SUPERGLOBALS vooraf gedefinieerde variabelen die beschikbaar zijn in alle scopes van een script. betekent dat ze overal in het script kunnen worden gebruikt, zonder dat ze eerst hoeven te worden gedeclareerd of geïnitialiseerd. De SUPERGLOBALS worden vooraf gedefinieerd door PHP en beginnen allemaal met een dollarteken gevolgd door een specifieke naam.
Hier zijn enkele voorbeelden van SUPERGLOBALS in PHP:

* $_SERVER: Bevat informatie over de server en de uitvoering van het script, zoals de servernaam, het pad naar het script en de HTTP-headers.
* $_GET: Bevat de waarden van de variabelen die zijn verzonden via de HTTP GET-methode.
* $_POST: Bevat de waarden van de variabelen die zijn verzonden via de HTTP POST-methode.
* $_SESSION: Bevat de sessievariabelen die zijn opgeslagen op de server.

Hier is een voorbeeld van het gebruik van de $_GET SUPERGLOBAL:
```html 
<!DOCTYPE html>
<html>
<head>
	<title>SuperGlobals in PHP</title>
</head>
<body>
	<h1>SuperGlobals in PHP</h1>
	<p>Voer je naam in:</p>
	<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="naam">
		<input type="submit" value="Verstuur">
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "GET {
			$naam = $_GET['naam'];
			if (empty($naam)) {
				echo "Voer je naam in!";
			} else {
				echo "Hallo " . $naam . "!";
	}
		}
	?>
</body>
</html>
```
In dit voorbeeld wordt de $_GET SUPERGLOBAL gebruikt om de waarde van de variabele "naam" op te halen die is verzonden via de HTTP GET-methode. Vervolgens wordt gecontroleerd of de variabele leeg is en wordt er een bericht weergegeven als dat het geval is. Als de variabele niet leeg is, wordt er een begroeting weergegeven met de ingevoerde naam.

Hier is een opdracht om te oefenen met het gebruik van SUPERGLOBALS:
Maak een PHP-script dat de volgende SUPERGLOBALS gebruikt:
* $\__SERVER: Gebruik de $_SERVER SUPERGLOBAL om de servernaam en het pad naar het script weer te geven.
* $\_POST: Maak een formulier met een invoerveld voor een naam en gebruik de $_POST SUPERGLOBAL om de ingevoerde naam weer te geven op de pagina nadat het formulier is verzonden.
* $\_SESSION: Gebruik de $_SESSION SUPERGLOBAL om een sessievariabele op te slaan en weer te geven op de pagina.

De $_SERVER['REQUEST_URI'] is een SUPERGLOBAL in PHP die de URI (Uniform Resource Identifier) bevat die is gebruikt om het huidige script aan te roepen. Dit omvat het pad en de querystring van de URL.

Hier is een voorbeeld van het gebruik van $_SERVER['REQUEST_URI']:
```html
<!DOCTYPE html>
<html>
<head>
	<title>$_SERVER['REQUEST_URI'] voorbeeld</title>
</head>
<body>
	<h1>$_SERVER['REQUEST_URI'] voorbeeld</h1>
	<p>De URI van deze pagina is: <?php echo $_SERVER['REQUEST_URI']; ?></p>
</body>
</html>
```
In dit voorbeeld wordt de $_SERVER['REQUEST_URI'] SUPERGLOBAL gebruikt om de URI van de huidige pagina weer te geven. Dit wordt gedaan door de waarde van $_SERVER['REQUEST_URI'] in te voegen in de HTML-pagina met behulp van PHP.

Als de pagina bijvoorbeeld wordt aangeroepen met de URL "http://www.example.com/mijn-pagina.php?param1=waarde1&param2=waarde2", dan zal de uitvoer van het bovenstaande script zijn:

De URI van deze pagina is: 
/mijn-pagina.php?param1=waarde1&param2=waarde2

Dit laat zien dat $_SERVER['REQUEST_URI'] het pad en de querystring van de URL bevat die is gebruikt om het script aan te roepen. Dit kan handig zijn bij het maken van dynamische webpagina's die verschillende inhoud weergeven op basis van de URI van de pagina.

Om alleen het begin te krijgen van de $_SERVER['REQUIST_URI] voor het bepalen voor de routing van je pagina's kunne we de interne function parse_url van php gebruiken.
De functie parse_url() in PHP wordt gebruikt om een URL te ontleden en de verschillende delen ervan te extraheren, zoals het schema, de host, het pad en de querystring. Wanneer parse_url() wordt gebruikt op de $_SERVER['REQUEST_URI'] SUPERGLOBAL, zal het de volledige URI-string ontleden, inclusief de querystring met de key=value pairs.
Om alleen het begin van de URI-string te krijgen zonder de querystring, kan de parse_url() functie worden gecombineerd met de explode() functie. De explode() functie kan worden gebruikt om de URI-string te splitsen op het vraagteken-teken, waardoor alleen het padgedeelte overblijft.

Hier is een voorbeeld van hoe dit kan worden gedaan:

```php
<?php
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);
$segments = explode('/', $path);
$first_segment = $segments[1];
echo $first_segment;
?>

```

In dit voorbeeld wordt de $_SERVER['REQUEST_URI'] SUPERGLOBAL opgeslagen in de variabele $uri. Vervolgens wordt de parse_url() functie gebruikt om het padgedeelte van de URI-string te extraheren met behulp van de PHP_URL_PATH constante. Dit padgedeelte wordt opgeslagen in de variabele $path.
Daarna wordt de explode() functie gebruikt om het padgedeelte te splitsen op de voorwaartse schuine streep (/) en de afzonderlijke segmenten op te slaan in de $segments array. Het eerste segment wordt vervolgens opgeslagen in de variabele $first_segment en wordt weergegeven met behulp van de echo functie.

Dit zal alleen het eerste deel van de URI-string weergeven, zonder de querystring met de key=value pairs.

## routing
Als je geen gebruik wilt maken van een framework, kun je handmatig een eenvoudige routing functionaliteit opzetten in PHP. Hier is een basisvoorbeeld van hoe je dat kunt doen:

Maak een .htaccess-bestand in de hoofdmap van je project en voeg de volgende regels toe om ervoor te zorgen dat alle verzoeken worden doorgestuurd naar het index.php-bestand:
```ruby
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php [QSA,L]
```
Maak een bestand met de naam index.php en voeg de volgende code toe:
```php
<?php
// Definieer de routeringstabel
$routes = [
    '/' => 'HomeController@index',
    '/about' => 'AboutController@index',
    '/contact' => 'ContactController@index',
];

// Haal het huidige pad op
$path = $_SERVER['REQUEST_URI'];

// Controleer of het pad in de routeringstabel bestaat
if (array_key_exists($path, $routes)) {
    // Verkrijg de controller en methode
    [$controller, $method] = explode('@', $routes[$path]);

    // Laad de controllerklasse
    require_once 'controllers/' . $controller . '.php';

    // Maak een instantie van de controllerklasse
    $instance = new $controller();

    // Roep de bijbehorende methode aan
    $instance->$method();
} else {
    // Toon een 404-pagina als de route niet bestaat
    echo '404 - Pagina niet gevonden';
}
```
Maak een map genaamd controllers en maak daarin de controllerbestanden aan die in de routeringstabel zijn vermeld. Bijvoorbeeld, HomeController.php, AboutController.php, ContactController.php. Elke controllerklasse zou een index-methode moeten hebben die de juiste respons genereert voor die route.
Hier is een eenvoudig voorbeeld van een controllerbestand (HomeController.php):

```php
class HomeController
{
    public function index()
    {
        echo 'Welkom op de homepage';
    }
}
```

Opmerking: Dit is slechts een basisimplementatie van routing zonder het gebruik van een framework. Het kan een goed startpunt zijn voor kleine projecten, maar als je complexere routingfunctionaliteit nodig hebt, is het raadzaam om over te stappen naar een volwaardig PHP-framework dat krachtige routingmogelijkheden biedt, zoals Laravel, Symfony of Slim.

### Routing de basis
------
Hier maken we een routing voor onze applicatie die jullie aan het maken zijn waar je met je profiel alles gaat weergeven. Wat heb je allemaal bedacht en welke pagina's gaan we naar toe werken? Hoe gaat je navigatie eruit zien? De start van onze routing:
* Maak een controllers directory

* verplaats controller files (index.php, colleges.php, grades.com, experiences.php, hobbys.php en auth.php)

* Maak een nieuwe single point of entry in je root. index.php. 

* In de nieuwe index.php in de root require je de functions/core en een require van controllers/index.php -> test het!

  * Waarom werkt het niet?
  -------

* Doordat we in de root de functions/core.php aaroepen is deze overal aanwezig. Verwijder in de Controllers de require naar functions/core.php -> test het opnieuw;

* 
# Classes
In de context van objectgeoriënteerd programmeren (OOP) is een class een blauwdruk of een sjabloon voor het maken van objecten. Het definieert de eigenschappen (attributen) en gedragingen (methoden) die een object zal hebben. Een class wordt gebruikt om objecten te instantiëren, die op hun beurt specifieke instanties zijn van die class.

Hier is een voorbeeld van een eenvoudige class in PHP die een "Person" voorstelt:

```php
class Person {
    // Eigenschappen
    public $name;
    public $age;

    // Methoden
    public function sayHello() {
        echo "Hello, my name is " . $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}
```
In dit voorbeeld heeft de class "Person" twee eigenschappen ($name en $age) en twee methoden (sayHello() en getAge()).

Wanneer je een object wilt maken op basis van deze class, wordt dit instantiëren genoemd. Hier is een voorbeeld van het instantiëren van een object van de class "Person":

```php
$person = new Person();
$person->name = "John";
$person->age = 30;

$person->sayHello();  // Output: Hello, my name is John

$age = $person->getAge();
echo $age;  // Output: 30
```
Nu je begrijpt wat een class is, laten we kijken naar waarom classes worden gebruikt en hoe ze je code en applicatie kunnen verbeteren:

Modulariteit en herbruikbaarheid: Classes stellen je in staat om je code in kleine modules te organiseren, waarbij elke class een specifiek verantwoordelijkheidsgebied heeft. Hierdoor kun je code hergebruiken in verschillende delen van je applicatie en het gemakkelijk bijwerken of uitbreiden zonder andere delen van de code te beïnvloeden.

Encapsulatie en gegevensbeheer: Classes bieden encapsulatie, wat betekent dat je de toegang tot eigenschappen en methoden kunt beheren met behulp van access modifiers zoals public, private en protected. Dit helpt bij het beperken van directe toegang tot gegevens en zorgt voor een betere gegevensbeveiliging en consistentie.

Abstractie en complexiteit verminderen: Classes stellen je in staat om abstractie te gebruiken om complexe concepten en functionaliteit te verbergen achter eenvoudige interfaces. Hierdoor kun je je concentreren op de essentiële aspecten van je code zonder te worden overweldigd door details.

Codebegrijpelijkheid en onderhoud: Door gebruik te maken van classes en objecten, kunnen andere ontwikkelaars je code gemakkelijker begrijpen en onderhouden. Classes zorgen voor een gestructureerde en logische opbouw van je code, waardoor het leesbaar en onderhoudbaar blijft, zelfs bij grotere projecten.

Inheritance (overerving) en Polymorfisme: Classes kunnen erven van andere classes, waardoor je gemeenschappelijke eigenschappen en methoden kunt delen en specifieke functionaliteit kunt toevoegen. Hierdoor wordt codeherhaling verminderd en kun je efficiënter werken. Polymorfisme maakt het mogelijk om verschillende classes op een uniforme manier te behandelen, wat de flexibiliteit van je code vergroot.

Kortom, het gebruik van classes in PHP en objectgeoriënteerd programmeren helpt bij het structureren, organiseren en verbeteren van je code en applicatie. Het bevordert modulaire ontwikkeling, herbruikbaarheid van code, beheer van gegevens en biedt abstractie voor complexiteit. Het gebruik van classes draagt bij aan een betere codekwaliteit, begrijpelijkheid en onderhoudbaarheid van je project.

## Database connection
PDO staat voor "PHP Data Objects" en het is een ingebouwde PHP-extensie die een consistente interface biedt voor het werken met verschillende databases. Met PDO kun je databaseverbindingen tot stand brengen en databasebewerkingen uitvoeren op een veilige en efficiënte manier.

Hier is een voorbeeld van hoe je PDO kunt gebruiken in een Connection-klasse om een databaseverbinding tot stand te brengen:

```php
class Connection {
    private $host;
    private $database;
    private $username;
    private $password;
    private $pdo;

    public function __construct($host, $database, $username, $password) {
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect() {
        $dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8mb4";

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Database connected successfully!";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Voeg hier andere methoden toe om query's uit te voeren, gegevens op te halen, etc.
}
```
In dit voorbeeld heeft de Connection-klasse private eigenschappen voor de hostnaam, database, gebruikersnaam en wachtwoord, evenals een eigenschap voor de PDO-verbinding zelf. In de connect()-methode wordt de verbinding tot stand gebracht met behulp van de opgegeven informatie.

Om de Connection-klasse te gebruiken en een databaseverbinding tot stand te brengen, kun je het volgende doen:

```php
$connection = new Connection("localhost", "mydatabase", "username", "password");
$connection->connect();
```
Dit is slechts een basisvoorbeeld om een databaseverbinding tot stand te brengen met behulp van PDO. Je kunt de Connection-klasse uitbreiden met andere methoden om query's uit te voeren, gegevens op te halen, transacties te beheren, enzovoort, afhankelijk van je behoeften.

Het gebruik van PDO biedt verschillende voordelen, waaronder:

Database-onafhankelijkheid: PDO biedt ondersteuning voor verschillende databases, zoals MySQL, PostgreSQL, SQLite, en meer. Je kunt dezelfde code gebruiken om met verschillende databases te werken zonder belangrijke wijzigingen in je code aan te brengen.

Veiligheid: PDO beschermt je tegen SQL-injectieaanvallen door het gebruik van voorbereide statements en parameterbinding. Dit voorkomt dat kwaadwillende gebruikers schadelijke SQL-instructies in je query's invoegen.

Foutafhandeling: PDO biedt ingebouwde mechanismen voor foutafhandeling, zoals het genereren van uitzonderingen (exceptions) wanneer er zich een fout voordoet. Hierdoor kun je fouten gemakkelijk identificeren en verwerken.

Optimale prestaties: PDO maakt gebruik van prepared statements, waardoor query's efficiënter kunnen worden uitgevoerd. Prepared statements kunnen ook worden gecachet door de database, wat de prestaties verder kan verbeteren bij het uitvoeren van dezelfde query meerdere keren.

Door het gebruik van PDO kun je op een gestructureerde en veilige manier met databases werken en je code beter onderhouden en beveiligen.