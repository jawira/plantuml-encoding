<?php
require_once __DIR__ . "/../vendor/autoload.php";

$provider = array();

// Case 1
$provider[0] = array();
$provider[0][] = <<<PLANTUML
Bob -> Alice : hello
PLANTUML;
$provider[0][] = 'SyfFKj2rKt3CoKnELR1Io4ZDoSa70000';

// Case 2
$provider[1] = array();
$provider[1][] = <<<PLANTUML
@startuml
Bob -> Alice : hello
@enduml
PLANTUML;
$provider[1][] = 'SoWkIImgAStDuNBAJrBGjLDmpCbCJbMmKiX8pSd9vt98pKi1IW80';


// Case 3
$provider[2] = array();
$provider[2][] = <<<PLANTUML
(ûüù)->(ñçà)
PLANTUML;
$provider[2][] = 'qpYy-_2UmpirTUqq3cyylFpm0aq0';

// Case 4
$provider[3] = array();
$provider[3][] = <<<PLANTUML
@startuml
Eğitim - Eğitim : Eğitim >
@enduml
PLANTUML;
$provider[3][] = 'SoWkIImgAStDuN8zCZ-p93DNGLS1nhA2i-ou75BpKe2g0000';

// Case 5
$provider[4] = array();
$provider[4][] = <<<PLANTUML
@startuml
:Hello world;
:This is defined on
several **lines**;
@enduml
PLANTUML;
$provider[4][] = 'SoWkIImgAStDuRBoICt9oLSepo_AIR7ciWh9o2nM0AAKrBJClDGKXVmyhkBKijIYn1m5BQqSe52nbfOrbqDgNWfGCm00';

// Testing
foreach ($provider as $index => $case) {
    $result = \Jawira\PlantUml\encodep($case[0]);

    if ($result !== $case[1]) {
        echo "NOK #$index", PHP_EOL;
        echo "Current  $result", PHP_EOL;
        echo "Expected $case[1]", PHP_EOL;
        exit(1);
    }
    echo "OK #$index", PHP_EOL;
}

