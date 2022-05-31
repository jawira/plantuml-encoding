<?php
require_once __DIR__ . '/../src/plantuml_functions.php';

// Case 1
$case1 = array();
$case1[] = <<<PLANTUML
Bob -> Alice : hello
PLANTUML;
$case1[] = 'SyfFKj2rKt3CoKnELR1Io4ZDoSa70000';

// Case 2
$case2 = array();
$case2[] = <<<PLANTUML
@startuml
Bob -> Alice : hello
@enduml
PLANTUML;
$case2[] = 'SoWkIImgAStDuNBAJrBGjLDmpCbCJbMmKiX8pSd9vt98pKi1IW80';

// Case 3
$case3 = array();
$case3[] = <<<PLANTUML
(ûüù)->(ñçà)
PLANTUML;
$case3[] = 'qpYy-_2UmpirTUqq3cyylFpm0aq0';

// Case 4
$case4 = array();
$case4[] = <<<PLANTUML
@startuml
Eğitim - Eğitim : Eğitim >
@enduml
PLANTUML;
$case4[] = 'SoWkIImgAStDuN8zCZ-p93DNGLS1nhA2i-ou75BpKe2g0000';

// Case 5
$case5 = array();
$case5[] = <<<PLANTUML
@startuml
:Hello world;
:This is defined on
several **lines**;
@enduml
PLANTUML;
$case5[] = 'SoWkIImgAStDuRBoICt9oLSepo_AIR7ciWh9o2nM0AAKrBJClDGKXVmyhkBKijIYn1m5BQqSe52nbfOrbqDgNWfGCm00';

// Case 6
$case6 = array();
$case6[] = '';
$case6[] = '0m00';

// Case 7
$case7 = array();
$case7[] = <<<PLANTUML
@startuml
@enduml
PLANTUML;
$case7[] = 'SoWkIImgAStDuN98pKi1qW00';

// Case 8
$case8 = array();
$case8[] = <<<PLANTUML
@startuml
!theme mars
Bob -> Alice : hello
@enduml
PLANTUML;
$case8[] = 'SoWkIImgAStDuL8ioKZDJLN8JImgvdBAJrBGjLDmpCbCJbMmKiX8pSd9vt98pKi1AWG0';

// Testing
echo 'PHP ', phpversion(), PHP_EOL;
$provider = compact('case1', 'case2', 'case3', 'case4', 'case5', 'case6', 'case7', 'case8');
foreach ($provider as $index => $case) {
    $result = \Jawira\PlantUml\encodep($case[0]);

    if ($result !== $case[1]) {
        echo "#$index NOK", PHP_EOL;
        echo "Current  $result", PHP_EOL;
        echo "Expected $case[1]", PHP_EOL;
        exit(1);
    }
    echo "#$index OK", PHP_EOL;
}

