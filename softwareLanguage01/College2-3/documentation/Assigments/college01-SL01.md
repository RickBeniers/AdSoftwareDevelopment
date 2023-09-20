# ![Variabelen in php](/Users/stephanhoeksema/code/SL01/documentation/images/variables-php.jpeg)

# Week 1: Variabelen en Conditionals
In deze week leer je de basisbeginselen van programmeren met PHP. Je leert hoe je variabelen kunt definiëren en gebruiken om gegevens op te slaan. Daarnaast ontdek je conditionele verklaringen zoals if-statements en switch-cases, waarmee je beslissingen kunt nemen en code kunt laten reageren op verschillende voorwaarden.

De variabele die we gaan bespreken:
## String
Een string is een reeks van tekens, zoals letters, cijfers en symbolen. Het wordt gebruikt om tekstuele gegevens weer te geven en op te slaan. Strings worden genoteerd tussen enkele aanhalingstekens ('') of dubbele aanhalingstekens ("").

## Integer
Een integer is een geheel getal zonder decimalen. Het wordt gebruikt om gehele getallen weer te geven en op te slaan. Bijvoorbeeld: 1, 10, -5.

## Float
Een float, ook wel bekend als een double, is een getal met decimalen. Het wordt gebruikt om numerieke waarden met decimalen weer te geven en op te slaan. Bijvoorbeeld: 3.14, -2.5, 10.0.

## Boolean
Een boolean is een datatype dat slechts twee waarden kan bevatten: true of false. Het wordt gebruikt om logische waarden weer te geven, zoals de waarheidswaarde van een voorwaarde.

## Array - Multi-dimensional array
Een array is een geordende verzameling van waarden. Het wordt gebruikt om meerdere waarden in één variabele op te slaan. Arrays kunnen verschillende datatypes bevatten en kunnen worden geïndexeerd op basis van numerieke of associatieve sleutels.

## Object

In PHP is een object een instantie van een class. Een class is een blauwdruk die definieert hoe een object eruit zal zien en welke properties (variables) en methods (functions) het zal hebben. Een object is dus een specifiek exemplaar dat is gemaakt op basis van die class.

Hier is een voorbeeld van een eenvoudige class genaamd Person en het creëren van een object van die class:

```php
<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduction() {
        echo "Mijn naam is " . $this->name . " en ik ben " . $this->age . " jaar oud.";
    }
}

// Maak een nieuw object van de class Person
$person1 = new Person("Stephan Hoeksema", 47);

// Roep de introduction-method aan op het object
$person1->introduction();
?>
```

In dit voorbeeld hebben we de class Person gedefinieerd met twee properties: $name en $age. We hebben ook een constructor-method __construct gedefinieerd om waarden toe te wijzen aan de properties bij het maken van een nieuw object.

We maken een nieuw object van de class Person genaamd $person1 en we geven het de naam "Stephan Hoeksema" en de leeftijd 47. Vervolgens roepen we de method introduction aan op het object, die de naam en leeftijd van de persoon afdrukt.

Dit is slechts een eenvoudig voorbeeld, maar objectgeoriënteerd programmeren in PHP biedt een krachtige manier om complexe systemen en interacties tussen verschillende entiteiten te modelleren.

## Null
Null is een speciaal datatype dat aangeeft dat een variabele geen waarde bevat. Het wordt gebruikt wanneer een variabele bewust geen waarde heeft of wanneer een waarde nog niet is toegewezen.

# Conditionals
## if
De "if" conditional wordt gebruikt om een enkele voorwaarde te controleren. Als de voorwaarde waar is, wordt de code binnen de if-blok uitgevoerd. Bijvoorbeeld:
```php
if ($a > $b) {
    // Code die wordt uitgevoerd als $a groter is dan $b
}
```
## else
De "else" conditional wordt gebruikt in combinatie met "if" en biedt een alternatieve codeblok dat wordt uitgevoerd als de voorwaarde van de "if" niet waar is. Bijvoorbeeld:
```php
if ($a > $b) {
    // Code die wordt uitgevoerd als $a groter is dan $b
} else {
    // Code die wordt uitgevoerd als $a niet groter is dan $b
}
```
## elseif/else 
De "elseif" of "else if" conditional wordt gebruikt om extra voorwaarden te controleren als de eerste voorwaarde van de "if" niet waar is. Hiermee kun je meerdere voorwaarden achter elkaar controleren. Bijvoorbeeld:
```php
if ($a > $b) {
    // Code die wordt uitgevoerd als $a groter is dan $b
} elseif ($a == $b) {
    // Code die wordt uitgevoerd als $a gelijk is aan $b
} else {
    // Code die wordt uitgevoerd als geen van de bovenstaande voorwaarden waar is
}
```
if AND, && and OR, || 

Operatiors =, ==, === en !=, !==