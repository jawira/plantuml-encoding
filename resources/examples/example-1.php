<?php

require __DIR__ . '/../../vendor/autoload.php';

$diagram = <<<PUML
@startuml
Alice -> Bob: hello
@enduml
PUML;

// You have to use full namespace for versions < PHP 5.6
$encode = \Jawira\PlantUml\encodep($diagram);

echo "http://www.plantuml.com/plantuml/uml/{$encode}" . PHP_EOL;
