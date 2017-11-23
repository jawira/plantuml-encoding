<?php

require __DIR__ . '/../../vendor/autoload.php';

use function Jawira\PlantUml\encodep;

$diagram = <<<PUML
@startuml
Alice -> Bob: hello
@enduml
PUML;

echo encodep($diagram);
